<?php
    class Store extends MY_Controller{
        function adress()
        {
            $this->data['temp'] = 'site/store/adress';
            $this->load->view('site/layout',$this->data);
        }

    }
?>