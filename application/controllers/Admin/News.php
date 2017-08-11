<?php
    class News extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('news_model');
    }
        function index(){
            $total_rows =  $this->news_model->get_total();
            $this->data['total_rows'] = $total_rows;
            // load ra thu vien phan trang
            $this->load->library('pagination');
            $config = array();
            $config['total_rows'] = $total_rows;// tong so dong
            $config['base_url'] = admin_url('news/index'); // link hien thi du lieu
            $config['per_page'] = 10; // so luong san pham hien thi tren 1 trang
            $config['uri__segment'] = 4; // phan doan hien thi ra so trang tren url. !
            $config['next_link'] = 'Trang kế tiếp';
            $config['prev_link'] = 'Trang trước';

            // khoi tao cac cau hinh cua phan trang
            $this->pagination->initialize($config);
            $segment = $this->uri->segment(4);
            $segment = intval($segment);
            $input = array();
            $input['limit'] = array($config['per_page'], $segment);

            // end phan trang

            // tim kiem san pham thong qua bien get
            if($this->input->get('id') > 0){
                $id_product = $this->input->get('id');
                $id_product = intval($id_product);
                $this->db->where('id', $id_product);
            }
            if($this->input->get('name') != null){
                $name = $this->input->get('name');
                $this->db->like('articcles.name', $name);
            }
            if($this->input->get('catalog') > 0){
                $catalog = $this->input->get('catalog');
                $this->db->where('articcles.id_categories', $catalog);
            }
            // eng search
            $this->db->select('categories.name as name_categories, articcles.*');
            $this->db->from('articcles'); //product
            $this->db->join('categories','articcles.id_categories = categories.id');
            $this->db->order_by('id','desc');
            $this->db->limit(10, $segment);
            $query=$this->db->get();
            $data = $query->result();
            $this->data['list'] = $data;
            // lay danh muc san pham
            $this->load->model('categories_model');
            //$input1['where'] = array('parent_id' => 0);
            $catalog_list = $this->categories_model->get_list();
            
            
//            foreach ($catalog_list as $row){
//                $input['where'] = array('parent_id' => $row->id_catalog);
//                $subs = $this->catalog_model->get_list($input);
//                $row->subs = $subs;
//            }
            
            $this->data['catalog_list'] = $catalog_list;
            // lay ra noi dung thong bao message
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;

            // load view
            $this->data['temp'] = 'admin/news/index';
            $this->load->view('admin/main', $this->data);
        }
        // Them mot san pham moi
        function add(){
     
            // load thu vien validation
            $this->load->library('form_validation');
            $this->load->helper('form');
            // lay danh sach danh muc bài viết
            $this->load->model('Categories_model');
            
            $input['order'] = array('id', 'asc');
            $catalog_list = $this->Categories_model->get_list($input);
            
            $this->data['catalog_list'] = $catalog_list;
            
            // kiem tra xem co du lieu post len
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên bài viết bắt buộc nhập','required');
                $this->form_validation->set_rules('catalog','Danh mục bắt buộc nhập','required');
                $this->form_validation->set_rules('content','Nội dung bắt buộc nhập','required');
                if($this->form_validation->run()){
                    // bat dau insert du lieu
                    $name = $this->input->post('name');
                    
                    $catalog = $this->input->post('catalog');
                    
                    $this->load->model('categories_model');
                    $catalog_info = $this->categories_model->get_info($catalog);
                    
                    $content = $this->input->post('content');
                    $status = $this->input->post('status');
                    //  up anh minh hoa san pham
                    
                    $this->load->library('upload_library');
                    $upload_path = './upload/tin-tuc';
                    $upload_data = $this->upload_library->upload($upload_path, 'image');
                    $image_link = '';
                    if(isset($upload_data['file_name'])){
                        $image_link = $upload_data['file_name'];
                    }
                    $data = array(
                        'name' => $name,
                        'image' => $image_link,
                        'id_categories' => $catalog,
                        'name_categories' => $catalog_info->name,
                        'status' => $status,
                        'content' => $content,
                        'view' => 0,
                        
                    );
                    // them moi vao co so du lieu
                    if($this->news_model->create($data)){
                        // neu them thanh cong
                        $this->session->set_flashdata('message', 'Thêm mới thành công tin tức');
                        redirect(admin_url('news'));
                    }else{
                        // in ra thong bao loi
                        $this->session->set_flashdata('message', 'Có lỗi khi thêm tin tức');
                        redirect(admin_url('news'));
                    }
                }
            }

            // load view
            $this->data['temp'] = 'admin/news/add';
            $this->load->view('admin/main', $this->data);
        }
        // chinh sua san pham
        function edit(){
            // load ra id san pham
            $id_product = $this->uri->rsegment('3');
            $product_info = $this->product_model->get_info($id_product);
            $image_link = $product_info->image_link;
            $this->data['product_info'] = $product_info;
            if(!$product_info){
                // thong bao ko ton tai id nay
                $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
                redirect(admin_url('product'));
            }
            $this->load->model('catalog_model');
            $catalog_list = $this->catalog_model->get_list();
            $this->data['catalog_list'] = $catalog_list;
            // load ra thu vien validation
            $this->load->library('form_validation');
            $this->load->helper('form');
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên bắt buộc nhập','required');
                $this->form_validation->set_rules('price','Giá bắt buộc nhập','required|max_length[10]');
                $this->form_validation->set_rules('catalog','Danh mục bắt buộc nhập','required');
                $this->form_validation->set_rules('content','Nội dung bắt buộc nhập','required');
                if($this->form_validation->run()){
                    // bat dau insert du lieu
                    $name = $this->input->post('name');
                    $weigh = $this->input->post('weigh');
                    $price = $this->input->post('price');
                    $price = str_replace(',', '', $price);
                    $catalog = $this->input->post('catalog');
                    $this->load->model('catalog_model');
                    $catalog_info = $this->catalog_model->get_info($catalog);
                    $content = $this->input->post('content');
                    $discount = $this->input->post('discount');
                    $discount = $discount = str_replace(',','',$discount);
                    // lay ten file anh minh hoa dc upload
                    $this->load->library('upload_library');
                    $upload_path = './upload/products';
                    $upload_data = $this->upload_library->upload($upload_path, 'image');

                    // lay ten file anh minh hoa dc upload
                    $this->load->library('upload_library');
                    $upload_path = './upload/products';
                    $upload_data = $this->upload_library->upload($upload_path, 'image');
                    $image_link = '';
                    if(isset($upload_data['file_name'])){
                        $image_link = $upload_data['file_name'];
                    }
                    // upload kem anh minh hoa
                    $image_list = array();
                    $image_list = $this->upload_library->upload_file($upload_path, 'image_list');
                    $image_list_json = json_encode($image_list);
                    // data du lieu insert

                    $data = array(
                        'name' => $name,
                        'price' => $price,
                        'discount' => $discount,
                        'id_catalog' => $catalog,
                        'weigh' => $weigh,
                        'name_catalog' => $catalog_info->name,
                        'warranty' => $this->input->post('warranty'),
                        'gifts' => $this->input->post('gifts'),
                        'site_title' => $this->input->post('site_title'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'meta_key' => $this->input->post('meta_key'),
                        'content' => $content,

                    );
                    if($image_link != ''){
                        $image_link_corner = $product_info->image_link;
                        if(file_exists($image_link_corner)){
                            unlink('./upload/products/'.$image_link_corner);
                        }
                        $data['image_link'] = $image_link;

                    }
                    if(!empty($image_list)){
                        $image_list_corner = json_decode($product_info->image_list);
                        if(is_array($image_list_corner)){
                            foreach ($image_list_corner as $img){
                                if(file_exists($img)){
                                    unlink('./upload/products/'.$img);
                                }
                            }
                        }
                        $data['image_list'] = $image_list_json;

                    }
                    // them moi vao co so du lieu
                    if($this->product_model->update($product_info->id_product,$data)){
                        // neu them thanh cong
                        $message = $this->session->set_flashdata('message', 'Cập nhật mới thành công ');
                        redirect(admin_url('product'));
                    }else{
                        // in ra thong bao loi
                        $message = $this->session->set_flashdata('message', 'Có lỗi khi sửa sản phẩm');
                        redirect(admin_url('product'));
                    }
                }
            }
            // load view
            $this->data['temp'] = 'admin/product/edit';
            $this->load->view('admin/main', $this->data);


        }
        function delete(){
            // lay ra id san pham
            $id_product = $this->uri->rsegment('3');
            $this->_del($id_product);
            // thong bao xoa thanh cong
            $this->session->set_flashdata('message', 'Xóa thành công sản phẩm này');
            redirect(admin_url('product'));

        }
        // xoa nhieu san pham
        function delete_all(){
            $ids = $this->input->post('ids');
            foreach ($ids as $id_product){
                $this->_del($id_product);
            }

        }
        private function _del($id_product, $redirect = true){
            // lay ra thong tin san pham
            $product = $this->product_model->get_info($id_product);
            if(!$product){
                // in ra thong bao loi
                $this->session->set_flashdata('message', 'Không tồn tại sản phẩm này');
                if($redirect){
                    redirect (admin_url('product'));
                }else{
                    return false;
                }
            }
            //  xoa anh san pham
            $image_link = './upload/products/'.$product->image_link;
            if(file_exists($image_link)){
                unlink($image_link);
            }
            // xoa anh minh hoa kem theo cua san pham
            $image_list = json_decode($product->image_list);

            if(is_array($image_list)){
                foreach ($image_list as $img){
                    $image_list = './upload/products/'.$img;
                    if(file_exists($image_list)){
                        unlink($image_list);
                    }
                }
            }
            // thuc hien xoa san pham
            $this->product_model->delete($id_product);

        }
    }
