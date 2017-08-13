
<?php
    class About extends MY_Controller{
        function index()
        {
            //$this->data['title'] = 'Trang chủ';
            $this->data['temp'] = 'site/about/index';
            $this->load->view('site/layout',$this->data);
        }

    }
