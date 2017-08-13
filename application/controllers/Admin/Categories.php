<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Categories
 *
 * @author KING-H
 */
    class Categories extends MY_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('categories_model');
        }
        function index(){
            // gui bien temp
            $total = $this->categories_model->get_total();
            $this->data['total'] = $total;
            // lay danh sach danh muc
            
            $categories_model = $this->categories_model->get_list();
            
            $this->data['list'] = $categories_model;
            // lay ra noi dung thong bao message
            $message = $this->session->flashdata('message');
            $this->data['message'] = $message;
            // load view
            $this->data['temp'] = 'admin/categories/index';
            $this->load->view('admin/main', $this->data);
        }
        function add(){
//            $categories_list = $this->categories_model->get_list();
//            $this->data['list'] = $categories_list;
            $this->load->library('form_validation');
            $this->load->helper('form');
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên danh mục bắt buộc nhập','required');
                $this->form_validation->set_rules('decrip','Mô tả bắt buộc nhập','required|min_length[4]');
                
                if($this->form_validation->run()){
                    $name = $this->input->post('name');
                    $decrip = $this->input->post('decrip');
                    
                    $data = array(
                        'name' => $name,
                        'decription' => $decrip,
                    );
                    // insert du lieu
                    if($this->categories_model->create($data)){
                        // neu them thanh cong
                        $this->session->set_flashdata('message', 'Thêm mới thành công danh muc');
                        redirect(admin_url('categories'));
                    }else{
                        // in ra thong bao loi
                        $this->session->set_flashdata('message', 'Có lỗi khi thêm danh muc tin tức');
                        redirect(admin_url('categories'));
                    }
                }
            }
            // load view
            $this->data['temp'] = 'admin/categories/add';
            $this->load->view('admin/main', $this->data);
        }
        function edit(){
            // lay ra id dan muc
            $id = $this->uri->rsegment('3');
            $categories_list = $this->categories_model->get_info($id);
            $this->data['categories_list'] = $categories_list;
            // load ra thu vien form
            $this->load->library('form_validation');
            $this->load->helper('form');
            // kiem tra xem du lieu post len
            if($this->input->post()){
                $this->form_validation->set_rules('name','Tên sản phẩm bắt buộc nhập','required');
                $this->form_validation->set_rules('decrip','Mô tả bắt buộc nhập','required|min_length[4]');
                
                if($this->form_validation->run()){
                    $name = $this->input->post('name');
                    $decrip = $this->input->post('decrip');
                    
                    $data = array(
                        'name' => $name,
                        'decription' => $decrip,
                    );
                    // insert du lieu
                    if($this->categories_model->update($id, $data)){
                        // neu them thanh cong
                        $this->session->set_flashdata('message', 'Cập nhật thành công danh muc');
                        redirect(admin_url('categories'));
                    }else{
                        // in ra thong bao loi
                        $this->session->set_flashdata('message', 'Có lỗi khi cập nhật');
                        redirect(admin_url('categories'));
                    }

                }
            }
            // load view
            $this->data['temp'] = 'admin/categories/edit';
            $this->load->view('admin/main', $this->data);
        }
        function delete(){
            // lay ra id danh mục
            $id = $this->uri->rsegment('3');
            $this->_del($id);
            // redriect
            $this->session->set_flashdata('message', 'Xóa thành công danh mục tin tức');
            redirect(admin_url('categories'));

        }
        function delete_all(){
            $ids = $this->input->post('ids');
            foreach ($ids as $id_catalog){
                $this->_del($id_catalog);
            }
        }
        private function _del($id, $redirect = true){
            // lay ra thong tin san pham
            $catalog = $this->categories_model->get_info($id);
            if(!$catalog){
                // in ra thong bao loi
                $this->session->set_flashdata('message', 'Không tồn tại danh mục này');
                if($redirect){
                    redirect (admin_url('categories'));
                }else{
                    return false;
                }
            }
            // kiem tra xem danh muc nay co san pham hay ko
            $this->load->model('news_model');
            $news = $this->news_model->get_info_rule(array('id' => $id), 'id');
            if($news){
                $this->session->set_flashdata('message', 'Danh mục ' .$catalog->name. ' có chứa tin tức, bạn cần xóa hết các tin trước khi xóa danh mục');
                if($redirect) {
                    redirect(admin_url('categories'));
                }else{
                    return false;
                }
            }
            // thuc hien xoa san pham
            $this->categories_model->delete($id);

        }
    }
