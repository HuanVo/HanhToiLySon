<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feedback
 *
 * @author KING-H
 */
    class Feedback extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('feedback_model');
        }
        function index(){
            // lay tong danh sach phan hoi
            $total_rows = $this->feedback_model->get_total();
            $this->data['total_rows'] = $total_rows;
            //load ra thu vien phan trang
        $this->load->library('pagination');
        $config = array();
        $config['total_rows'] = $total_rows;//tong tat ca cac giao dich tren website
        $config['base_url']   = admin_url('feedback/index'); //link hien thi ra danh sach giao dich
        $config['per_page']   = 10;//so luong giao dich hien thi tren 1 trang
        $config['uri_segment'] = 4;//phan doan hien thi ra so trang tren url
        $config['next_link']   = 'Trang kế tiếp';
        $config['prev_link']   = 'Trang trước';
        //khoi tao cac cau hinh phan trang
        $this->pagination->initialize($config);
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        //kiem tra co thuc hien loc du lieu hay khong
        $id_fb = $this->input->get('id');
        $id_fb = intval($id_fb);
        $input['where'] = array();
        if($id_fb > 0)
        {
            $input['where']['id'] = $id_fb;
        }

            // lay danh sach phan hoi
            $feedback_list = $this->feedback_model->get_list($input);
            $this->data['list'] = $feedback_list;
            // load ra dong thong bao
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;
            // load view
            $this->data['temp'] = 'admin/feedback/index';
            $this->load->view('admin/main', $this->data);
        }
        function feedemail(){
                $this->load->library('email');
                // Cấu hình
                $config['protocol'] = 'sendmail';
                $config['charset'] = 'utf-8';
                $config['mailtype'] = 'html';
                $config['wordwrap'] = TRUE;
                $this->email->initialize($config);

                //cau hinh email va ten nguoi gui
                $this->email->from('HUANOAZ@GMAIL.COM', 'VOVANHUAN');
                //cau hinh nguoi nhan
                $this->email->to('someone@example.com');

                $this->email->subject('Tiêu đề gửi mail');
                $this->email->message('Nội dung gửi mail.');

                //dinh kem file
                $this->email->attach('/path/to/photo1.jpg');
                //thuc hien gui
                if ( ! $this->email->send())
                {
                    // Generate error
                    echo $this->email->print_debugger();
                }else{
                    $this->session->set_flashdata('message', 'gửi email thành công, Cám ơn bạn đã quan tâm đến chúng tôi!');
                    redirect(admin_url('feedback'));
            }
        }
               
        function delete(){
            // lay ra id san pham
            $id = $this->uri->rsegment('3');
            $this->_del($id);
            // redriect
            $this->session->set_flashdata('message', 'Xóa thành công phản hồi');
            redirect(admin_url('feedback'));

        }
        function delete_all(){
            $ids = $this->input->post('ids');
            foreach ($ids as $id_catalog){
                $this->_del($id_catalog);
            }

        }
        private function _del($id, $redirect = true){
            // lay ra thong tin san pham
            $fb = $this->feedback_model->get_info($id);
            if(!$fb){
                // in ra thong bao loi
                $this->session->set_flashdata('message', 'Không tồn phản hồi này này');
                if($redirect){
                    redirect (admin_url('feedback'));
                }else{
                    return false;
                }
            }
            // thuc hien xoa san pham
            $this->feedback_model->delete($id);

        }
    }