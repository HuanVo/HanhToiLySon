<?php
    class News extends MY_Controller{
         function __construct()
        {
            parent::__construct();
            $this->load->model('news_model');
            $this->load->helper('name_helper');
        }
        function index()
        {
            // san pham ban chay
                
                $input['order'] = array('creates','DESC');//DESC asc
                $news = $this->news_model->get_list($input);
                $this->data['news_pp'] = $news;
                
                
                
//            $total_rows =  $this->news_model->get_total();
//            $this->data['total_rows'] = $total_rows;
//            // load ra thu vien phan trang
//            $this->load->library('pagination');
//            $config = array();
//            $config['total_rows'] = $total_rows;// tong so dong
//            $config['base_url'] = base_url(); // link hien thi du lieu
//            $config['per_page'] = 6; // so luong san pham hien thi tren 1 trang
//            $config['uri__segment'] = 4; // phan doan hien thi ra so trang tren url. !
//            $config['next_link'] = 'Trang kế tiếp';
//            $config['prev_link'] = 'Trang trước';
//
//            // khoi tao cac cau hinh cua phan trang
//            $this->pagination->initialize($config);
//            $segment = $this->uri->segment(4);
//            $segment = intval($segment);
//            $input = array();
//            $input['limit'] = array($config['per_page'], $segment);

            // end phan trang
                
                
            $this->data['temp'] = 'site/news/index';
            $this->load->view('site/layout',$this->data);
        }
        function view(){
            $id = $this->uri->rsegment('3');
            $news_info = $this->news_model->get_info($id);
            $this->data['news_info'] = $news_info;
            
            // danh sách tin tuc liên quan
            $input['limit'] = array(5,0);
            $input['order'] = array('creates','DESC');//DESC asc
            $input['where'] = array(
                'id !=' => $id,
                'id_categories' => $news_info->id_categories,
            );
            
            // cap nhat luot view
            $data = array();
            $data['view'] = $news_info->view + 1;
            $this->news_model->update($news_info->id, $data);
            
            $list = $this->news_model->get_list($input);
            $this->data['list'] = $list;
            // load view
            $this->data['temp'] = 'site/news/view';
            $this->load->view('site/layout', $this->data);
        }

    }
?>