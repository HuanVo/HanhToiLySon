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