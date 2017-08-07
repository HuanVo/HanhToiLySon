<!--        <div id="breadcrumb">
            <ol class="breadcrumb container">
                                    <li><a href="<?php echo base_url();?>"><span><i class="fa fa-home"></i></span></a></li>
                                    <li><a href="<?php echo base_url('User/login');?>"><span>Tài khoản</span></a></li>
                                    <li><a href="<?php echo base_url('User/login');?>"><span>Đăng nhập</span></a></li>
                            </ol>
        </div> -->
    <section id="sidebar-main" class="col-sm-8">
                <div id="content">
                        <div class="col-sm-6">
                            <div class="well">
                                <h2>Khách hàng mới</h2>
                                <p><strong>Đăng ký</strong></p>
                                <p>Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt.</p>
                                <a href="<?php echo base_url('User/register');?>" class="button btn btn-theme-default">Tiếp tục</a></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="well">
                                <h2>Khách hàng cũ</h2>
                                <p><strong>Tôi là khách hàng cũ</strong></p>
                                <form action="<?php echo base_url('user/login'); ?>" method="post" name="login" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label style="color: red;"><?php echo form_error('login'); ?></label>
                                        <label class="control-label" for="input-email">Địa chỉ Email</label>
                                        
                                        <input name="email" value="" placeholder="Địa chỉ Email" id="input-email" class="form-control" type="text">
                                        <i><?php echo form_error('email'); ?></i>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Mật khẩu</label>
                                        <input  value="" placeholder="Mật khẩu" id="input-password" class="form-control" name="password" type="password">
                                        <i><?php echo form_error('password'); ?></i>
                                        <a href="#"> <span style="color: red;">Quên mật khẩu ? </span></a>
                                    </div>
                                    <div>
                                        <input value="Đăng nhập" class="button btn btn-theme-default" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>      
            </section>
