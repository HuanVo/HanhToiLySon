<?php
    class Login  extends MY_Controller{
        function index(){
            $this->load->library('form_validation');
            $this->load->helper('form');
            // kiem tra xem da co du lieu post len
            if($this->input->post()){
                $this->form_validation->set_rules('login', 'login', 'callback_check_login');
                if($this->form_validation->run()){
                    $this->session->set_userdata('login', true);
                    redirect(admin_url('home'));
                }
            }
            // load view
            $this->load->view('admin/login/index');
        }
        function check_login(){
            $this->load->library('form_validation');
            $this->load->helper('form');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password = md5($password);
            // load model admin
            $this->load->model('admin_model');
            $where = array(
                'username' => $username,
                'password' => $password,
            );
            if($this->admin_model->check_exists($where)){
                $admin = $this->_get_admin_info($username,$password);
                //pre($admin);
                $this->session->set_userdata('id_admin_login', $admin->id_admin);
                return true;
            }else{
                // tao ra thong bao dang nhap ko thanh cong
                $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công');
                return false;
            }
        }
        private function _get_admin_info($username, $password){
            $where = array(
                'username' => $username,
                'password' => $password,
            );
            $admin = $this->admin_model->get_info_rule($where);
            return $admin;
        }

    }

?>