
<section id="sidebar-main" class="col-sm-8">
            <div id="content">
                
                <h1>Liên hệ với chúng tôi</h1>
                <!--gg map-->
                <div class="contact-location hidden-xs">
                    <div id="contact-map">
                        <style>
                            .container_iframe_google_map iframe {
                                width: 100% !important;
                                height: 400px !important;
                            }
                        </style>
                        <div class="container_iframe_google_map">
                            
                            <iframe src="<?php echo $supports ->map; ?>" style="border:0" allowfullscreen="" width="600" height="450" frameborder="0"></iframe>                        </div>
                    </div>
                </div>
                
                    <div class="row">
                        <fieldset class="col-md-4">
                            <h3></h3>
                            <div class="contact-customhtml">
                                <div class="content">
                                <div class="panel-contact-custom">
                                   Nơi bạn đặt slogan của bạn
                                </div>   
                                    <div class="panel-contact-info">
                                        <div class="panel-body">
                                            <div class="row"> 
                                                <div class="media">
                                                    <div class="media-icon pull-left"><span class="fa fa-home fa-3x"></span></div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">FoodStore</h4>
                                                        <address>
                                                            <?php echo $supports ->address; ?>
                                                        </address>
                                                                <a target="_blank" class="btn btn-info"><i class="fa fa-map-marker">
                                                             
                                                            </i> Xem Bản đồ Google                                                            </a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon pull-left"><span class="fa fa-phone fa-3x"></span></div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Điện thoại</h4>
                                                        <?php echo $supports ->phone; ?><br>
                                                        <br>
                                                        <strong>Số Fax</strong><br>
                                                            <?php echo $supports ->phone; ?>                                                                                                           
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="col-md-8">
                            <h3>Thông tin liên hệ</h3>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-name">Tên của bạn</label>
                                <div class="col-sm-10">
                                    <input name="name" value="<?php if(isset($user_info)) echo $user_info->name; ?>" id="input-name" class="form-control" type="text">
                                    <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('name'); ?></div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">Địa chỉ Email</label>
                                <div class="col-sm-10">
                                    <input name="email" value="<?php if(isset($user_info)) echo $user_info->email; ?>" id="input-email" class="form-control" type="text">
                                    <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('email'); ?></div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-enquiry">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea name="content" rows="10" id="input-enquiry" class="form-control"></textarea>
                                    <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('content'); ?></div>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="pull-right">
                                    <input class="button btn btn-theme-default" value="Gửi đi" type="submit">
                                </div>
                            </div>
                        </form>
                        </fieldset>
                    </div>
                
            </div>
        </section>