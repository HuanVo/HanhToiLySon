<?php
class Home extends MY_Controller{
    public function __construct() {
    parent::__construct();
        $this->load->model('transaction_model'); 
    }
    function index(){
        // lay tong so giao dich
        $total_tran = $this->transaction_model->get_total();
        $this->data['total_tran'] = $total_tran;
        // lay tong so san pham
        $this->load->model('product_model');
        $total_product = $this->product_model->get_total();
        $this->data['total_product'] = $total_product;
        // lay tong so bai viet
        $this->load->model('news_model');
        $total_news = $this->news_model->get_total();
        $this->data['total_news'] = $total_news;
        
        // lay tong so lien he
        $this->load->model('feedback_model');
        $total_feedback = $this->feedback_model->get_total();
        $this->data['total_feedback'] = $total_feedback;
        
        // lay tong so thanh vien
        $this->load->model('user_model');
        $total_user = $this->user_model->get_total();
        $this->data['total_user'] = $total_user;
        
        // lay tong so doanh thu
        $input['where'] = array('status' => 1);
        $tran_list = $this->transaction_model->get_list($input);
        
        $this->data['tran_list'] = $tran_list;
        
       
        $this->data['temp'] = 'admin/home/index';
        $this->load->view('admin/main', $this->data);

    }
}