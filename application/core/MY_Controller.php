<?php
class MY_Controller extends CI_Controller{

    public $data = array();
    function __construct()
    {
        parent::__construct();
        $this->load->helper('admin_helper');
        $this->load->helper('name_helper');
        $controller = $this->uri->segment('1');
        switch ($controller){
            case 'admin':
            {
                $this->load->helper('admin');
                $admin_id_login = $this->session->userdata('id_admin_login');
                echo $admin_id_login;
                if($admin_id_login){
                    $this->load->model('admin_model');
                    $admin_info = $this->admin_model->get_info($admin_id_login);
                    //pre($admin_info);
                    $this->data['admin_info'] = $admin_info;
                }
                $this->check_login();
                break;
            }
            default:
            {
                $this->load->model('support_model');
                $support = $this->support_model->get_info('1');
                
                $this->data['supports'] = $support;
                // kiem tra user da dang nhap hay chua
                $user_id_login = $this->session->userdata('id_user_login');
                if($user_id_login){
                    $this->load->model('user_model');
                    $user_info = $this->user_model->get_info($user_id_login);
                    $this->data['user_info'] = $user_info;
                }
                $name_description = $this->uri->segment('1');
                $this->data['name_description'] = $name_description;
                // lay danh sach danh muc san pham
                $this->load->model('catalog_model');
                $this->load->model('product_model');
                // san pham moi nhat
                $nput['limit'] = array(9,0);
                $nput['order'] = array('created','DESC');//DESC asc
                $product_news = $this->product_model->get_list($nput);
                $this->data['product_news'] = $product_news;
                //pre($this->data['product_news']);
                
                $input['where'] = array('parent_id' => 0);
                $input['order'] = array('id_catalog', 'asc');
                $catalog_list = $this->catalog_model->get_list($input);
                foreach ($catalog_list as $row){
                    // lay danh sach san pham moi
                    $input['where'] = array('parent_id' => $row->id_catalog);
                    $subs = $this->catalog_model->get_list($input);
                    $row->subs = $subs;
                    foreach ($subs as $sub_product){

                        $input['where'] = array('id_catalog' => $sub_product->id_catalog);
                        $product = $this->product_model->get_list($input);
                        $sub_product->sub_pr = $product;
                    }
                    // lay danh sach san pham xem nhieu
                    foreach ($subs as $sub_product){
                        $this->load->model('product_model');
                        $input1['where'] = array('id_catalog' => $sub_product->id_catalog);
                        $input1['order'] = array('view', 'desc');
                        $product = $this->product_model->get_list($input1);
                        $sub_product->sub_pr_xn = $product;
                    }
                }
                

                $this->data['catalog_list'] = $catalog_list;
                $catalog = $this->uri->rsegment('3');
                // lay thong tin danh muc
                $input = array();
                $input['where'] = array(
                    'id_catalog' => $catalog,
                );
                $catalog_name = $this->catalog_model->get_list($input);
                $this->data['catalog_name'] = $catalog_name;
                // end danh muc
                // lay thong tin san pham
                $product_info =  $this->product_model->get_info($catalog);
                $this->data['product_info'] = $product_info;
                
                // load tin tuc
                $this->load->model('news_model');
                $nput['limit'] = array(5,0);
                $nput['order'] = array('creates','DESC');//DESC asc
           
            $news_info =  $this->news_model->get_list($nput);
                $this->data['news_infos'] = $news_info;
                
                
                // load ra thu vien cart
               $this->load->library('cart');
                $total_items = $this->cart->total_items();
                
                $this->data['total_items'] = $total_items;
                //pre($this->data['total_items']);
                $carts = $this->cart->contents();
                $this->data['carts'] = $carts;
                //pre($this->data['carts']);
                
                
               
            }

        }
    }
    private function check_login(){
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);
        // kiem tra xem da ton tai session login hay chua
        $login = $this->session->userdata('login');
        if(!$login && $controller != 'login'){
            redirect(admin_url('login'));
        }
        if($login && $controller == 'login'){
            
            redirect(admin_url('home'));
        }
    }


   

}