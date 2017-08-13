<?php
    class Store extends MY_Controller{
        public function __construct() {
            parent::__construct();
             $this->load->model('feedback_model');
        }
        function adress()
        {
            $this->load->library('form_validation');
            $this->load->helper('form');
            // kiem tra xem du lieu post len
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên của bạn bắt buộc nhập','required');
                $this->form_validation->set_rules('email','địa chỉ email bắt buộc nhập','required|valid_email');
                $this->form_validation->set_rules('content','nội dung bắt buộc nhập','required|min_length[10]');
                if($this->form_validation->run()){
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                    $content = $this->input->post('content');
                    $data = array(
                        'name' => $name,
                        'email' => $email,
                        'content' => $content,
                    );
                    // insert du lieu
                    if($this->feedback_model->create($data)){
                        // neu them thanh cong
                        $this->session->set_flashdata('message', 'Cảm ơn bạn đã phản hồi, chúng tôi sẽ tiếp nhận thông tin của bạn!');
                        redirect(base_url('store/adress'));
                    }else{
                        // in ra thong bao loi
                        $this->session->set_flashdata('message', 'Có lỗi khi gửi phản hồi');
                        redirect(base_url('store/adress'));
                    }
                }
            }
            $this->data['temp'] = 'site/store/adress';
            $this->load->view('site/layout',$this->data);
        }
        
    }
?>