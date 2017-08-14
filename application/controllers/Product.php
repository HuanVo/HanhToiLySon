<?php
    class Product extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('product_model');
            $this->load->helper('name_helper');
        }
        
        function allproduct(){
            $total_rows = $this->product_model->get_total();
            $this->data['total_rows'] = $total_rows;
            $input = array();
            $input['limit'] = array(10, 0);
            //pre($this->uri->rsegment(3));
            if($this->uri->rsegment(3)){
                $lm = intval($this->uri->rsegment(3));
                $input['limit'] = array($lm, 0);
                $this->data['limit'] = $lm;
            }
            $list = $this->product_model->get_list($input);
            $this->data['list'] = $list;
            $this->data['temp'] = 'site/product/product';
            $this->load->view('site/layout', $this->data);
        }
      
        function catalog(){
            //pre($this->data);
            //lay ra id danh muc san pham
            $this->load->model('catalog_model');
            $id_catalog = $this->uri->rsegment('3');
            $id_catalog = intval($id_catalog);
       
            $catalog_info = $this->catalog_model->get_info($id_catalog);
            if(!$catalog_info){
                redirect();
            }
            //pre($catalog_info);
            // kiem tra co phai la danh muc cha hay ko
            $input = array();
            
            if(intval($catalog_info->parent_id) == 0){
                $input_catalog['where'] = array('parent_id' => $id_catalog);
                $catalog_sub = $this->catalog_model->get_list($input_catalog);
                $catalog_subs_id = array();
                if(!empty($catalog_sub)) {
                    foreach ($catalog_sub as $row) {
                        $catalog_subs_id[] = $row->id_catalog;
                    }
                }
                $this->db->where_in('id_catalog', $catalog_subs_id);
            }else
            {
                $input['where'] = array('id_catalog' => $id_catalog);
            }
            // lay danh sach san pham
            $total_rows = $this->product_model->get_total($input);
            $this->data['total_rows'] = $total_rows;
            if($this->uri->rsegment('4')){
                $lm = intval($this->uri->rsegment('4'));
                $input['limit'] = array($lm, 0);
                $this->data['limit'] = $lm;
            }
            
            $this->data['name_catalog'] =$catalog_info->name;
            $this->data['id_catalo']= $catalog_info->id_catalog;
            if(isset($catalog_subs_id)){
                $this->db->where_in('id_catalog', $catalog_subs_id);
            }
            $list = $this->product_model->get_list($input);
            $this->data['list'] = $list;
            $this->data['temp'] = 'site/product/catalog';
            $this->load->view('site/layout', $this->data);
        }
        
        function view(){
            
            $id_product = $this->uri->rsegment('3');
            $product_info = $this->product_model->get_info($id_product);
            $this->data['product_info'] = $product_info;
            
            // danh sách sản phẩm liên quan
            $input['where'] = array(
                'id_product !=' => $id_product,
                'id_catalog' => $product_info->id_catalog,
            );
            
            // cap nhat luot view
            $data = array();
            $data['view'] = $product_info->view + 1;
            $this->product_model->update($product_info->id_product, $data);
            
            
            $list = $this->product_model->get_list($input);
            $this->data['list'] = $list;
            // load view
            $this->data['temp'] = 'site/product/view';
            $this->load->view('site/layout', $this->data);
        }
        function search(){
            if($this->uri->rsegment('3') == 1){
                // lay du lieu tu auto tim kiem
                $key = $this->input->get('term');
            }else{
                $key = $this->input->get('search');
            }
            $this->data['key'] = trim($key);
            $input = array();
            if($this->input->get('category_id') > 0){
                $id_catalog = $this->input->get('category_id');
                $this->data['id_catal'] = $id_catalog;
                $this->load->model('catalog_model');
                $input1['where'] = array('parent_id' => $id_catalog);
                $catalog_list = $this->catalog_model->get_list($input1);
                $id_catalog_subs = array();
                foreach ($catalog_list as $row){
                    $id_catalog_subs[] = $row->id_catalog;
                }
                $this->db->where_in('id_catalog', $id_catalog_subs);
            }
            $row_finded = $this->product_model->get_total($input);
            $this->data['rowfinded'] = $row_finded;
            if($this->input->get('limit')){
                $input['limit'] = array(intval($this->input->get('limit')), 0);
                $this->data['limit'] = intval($this->input->get('limit'));
            }
            $input['like'] = array('name', $key);
            
            $list = $this->product_model->get_list($input);

            $this->data['list'] = $list;
 //           if($this->uri->rsegment('3') == 1){
//                // auto tim kiem
//                $result = array();
//                foreach ($list as $row){
//                    $item = array();
//                    $item['id'] = $row->id_product;
//                    $item['label'] = $row->name;
//                    $item['value'] = $row->name;
//                    $result[] = $item;
//                }
//                // du lieu tra ve duoi dang json
//                die(json_encode($result));
//            }else{
                // load view
                $this->data['temp'] = 'site/product/search';
                $this->load->view('site/layout', $this->data);
            //}
        }
        function search_price(){
            $price_from = $this->input->get('price_from');
            $price_to = $this->input->get('price_to');
           
            $input = array();
            $input['where'] = array(
                'price >= ' => $price_from,
                'price <= ' => $price_to,
            );
            $list = $this->product_model->get_list($input);
            $this->data['list'] = $list;
            // load view
            $this->data['temp'] = 'site/product/search';
            $this->load->view('site/layout', $this->data);
        }
    }
?>