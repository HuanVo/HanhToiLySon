<section id="sidebar-main" class="col-sm-8">
            <div id="content">
                                <h1>Thông tin tài khoản</h1>
                <form action="<?php echo base_url('user/edit'); ?>" name="edit" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <legend>Chi tiết tài khoản</legend>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-firstname">Họ &amp; tên </label>
                            <div class="col-sm-10">
                                <input name="name" value="<?php echo $user_info->name; ?>" placeholder="Họ &amp; tên" id="input-firstname" class="form-control" type="text">
                                <i><?php echo form_error('name'); ?></i>
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">Email</label>
                            <div class="col-sm-10">
                                <input name="email" value="<?php echo $user_info->email; ?>" placeholder="Email" id="input-email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
                            <div class="col-sm-10">
                                <input name="phone" value="<?php echo $user_info->phone; ?>" placeholder="Điện thoại" id="input-telephone" class="form-control" type="tel">
                                                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-telephone">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input name="address" value="<?php echo $user_info->address; ?>" placeholder="Địa chỉ" id="input-address" class="form-control" type="text">
                                <i><?php echo form_error('address'); ?></i>
                            </div>
                        </div>
                        
                    </fieldset>
                    
                    <fieldset>
                            <legend>Mật khẩu của bạn</legend>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-password">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input name="password" value="<?php echo set_value('password'); ?>" placeholder="Mật khẩu" id="input-password" class="form-control" type="password">
                                    <i><?php echo form_error('password'); ?></i>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-confirm">Mật khẩu xác nhận</label>
                                <div class="col-sm-10">
                                    <input name="passconf" value="<?php echo set_value('passconf'); ?>" placeholder="Mật khẩu xác nhận" id="input-confirm" class="form-control" type="password">
                                    <i><?php echo form_error('passconf'); ?></i>
                                </div>
                            </div>
                        </fieldset>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="<?php echo base_url('User'); ?>" class="btn btn-default">Quay lại</a></div>
                        <div class="pull-right">
                            <input value="Tiếp tục" class="button btn btn-theme-default" type="submit">
                        </div>
                    </div>
                </form>
                            </div>
        </section>