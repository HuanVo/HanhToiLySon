<?php
    class News extends MY_Controller{
        function index()
        {
            $this->data['temp'] = 'site/news/index';
            $this->load->view('site/layout',$this->data);
        }

    }
?>