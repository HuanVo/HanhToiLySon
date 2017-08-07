<?php
//    if(isset($message)) {
//        ?>
<?php if($this->session->userdata('message')){
        echo '<div class="alert alert-success">';
                 echo $this->session->userdata('message');
            
            ?>
        <button type="button" class="close" data-dismiss="alert">×</button>
        </div>
<?php }
