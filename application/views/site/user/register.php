<!--<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php //echo base_url();?>"><i class="fa fa-home"></i></a></li>
                    <li><a href="">Tài khoản</a></li>
                    <li><a href="<?php //echo base_url('User/register');?>">Đăng ký</a></li>
            </ul>
</div>  
--><section id="idebar-main" class="col-sm-8">
            <div id="content" >
                <h1>Đăng ký tài khoản</h1>
                <div class="wrapper underline no-margin">
                    <p>Nếu bạn đã đăng ký tài khoản với chúng tôi, vui lòng <a href="<?php echo base_url('User/login');?>">đăng nhập</a>.</p>
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <fieldset id="account">
                            <legend>Chi tiết tài khoản</legend>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-firstname">Họ và tên</label>
                                <div class="col-sm-10">
                                    <input name="fullname" value="" placeholder="Họ và tên" id="input-fulltname" class="form-control" type="text">
                                    <i style="color: red;"><?php echo form_error('fullname'); ?></i>
                                </div>
                                
                            </div>
                            
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" value="" placeholder="Email" id="input-email" class="form-control" type="email">
                                    <i style="color: red;"><?php echo form_error('email'); ?></i>
                                </div>
                            </div>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
                                <div class="col-sm-10">
                                    <input name="phone" value="" placeholder="Điện thoại" id="input-telephone" class="form-control" type="tel">
                                    <i style="color: red;"><?php echo form_error('phone'); ?></i>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="address">
                            <legend>Địa chỉ</legend>
                           
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-address-1">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input name="address" value="" placeholder="Địa chỉ" id="input-address-1" class="form-control" type="text">
                                    <i style="color: red;"><?php echo form_error('address'); ?></i>
                                </div>
                            </div>
                           
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-city">Quận / Huyện</label>
                                <div class="col-sm-10">
                                    <input name="province" value="" placeholder="Quận / Huyện" id="input-city" class="form-control" type="text">
                                    <i style="color: red;"><?php echo form_error('province'); ?></i>
                                </div>
                            </div>
                            
                            
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-zone">Tỉnh / TP</label>
                                <div class="col-sm-10">
                                    <!-- Tỉnh thành phố-->
                                <select name="city" id="input-zone" class="form-control">
                                    <option value=""> --- Chọn --- </option>
                                    <option value="An Giang">An Giang</option>
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                    <option value="Bắc Giang">Bắc Giang</option>
                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                    <option value="Bến Tre">Bến Tre</option>
                                    <option value="Bình Dương">Bình Dương</option>
                                    <option value="Bình Phước">Bình Phước</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Bình Định">Bình Định</option>
                                    <option value="Cà Mau">Cà Mau</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                    <option value="Cao Bằng">Cao Bằng</option>
                                    <option value="Gia Lai">Gia Lai</option>
                                    <option value="Hà Giang">Hà Giang</option>
                                    <option value="Hà Nam">Hà Nam</option>
                                    <option value="Hà Nội">Hà Nội</option
                                    ><option value="Hà Tây">Hà Tây</option>
                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="Hải Dương">Hải Dương</option>
                                    <option value="Hải Phòng">Hải Phòng</option>
                                    <option value="Hậu Giang">Hậu Giang</option>
                                    <option value="Hòa Bình">Hòa Bình</option>
                                    <option value="Hưng Yên">Hưng Yên</option>
                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                    <option value="Kiên Giang">Kiên Giang</option>
                                    <option value="Kon Tum">Kon Tum</option>
                                    <option value="Lai Châu">Lai Châu</option>
                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                    <option value="Lào Cai">Lào Cai</option>
                                    <option value="Long An">Long An</option>
                                    <option value="Nam Định">Nam Định</option>
                                    <option value="Nghệ An">Nghệ An</option>
                                    <option value="Ninh Bình">Ninh Bình</option>
                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                    <option value="Phú Thọ">Phú Thọ</option>
                                    <option value="Phú Yên">Phú Yên</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Nam">Quảng Nam</option>
                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                    <option value="Quảng Trị">Quảng Trị</option>
                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                    <option value="Sơn La">Sơn La</option>
                                    <option value="Tây Ninh">Tây Ninh</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Tiền Giang">Thừa Thiên Huế</option>
                                    <option value="Tiền Giang">Tiền Giang</option>
                                    <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
                                    <option value="Trà Vinh">Trà Vinh</option>
                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="Yên Bái">Yên Bái</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Đăk Lăk">Đăk Lăk</option>
                                    <option value="Đăk Nông">Đăk Nông</option>
                                    <option value="Điện Biên">Điện Biên</option>
                                    <option value="Đồng Nai">Đồng Nai</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                </select>
                                <i style="color: red;"><?php echo form_error('city'); ?></i>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Mật khẩu</legend>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-password">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input name="password" value="" placeholder="Mật khẩu" id="input-password" class="form-control" type="password">
                                    <i style="color: red;"><?php echo form_error('password'); ?></i>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-confirm">Mật khẩu xác nhận</label>
                                <div class="col-sm-10">
                                    <input name="rpassword" value="" placeholder="Mật khẩu xác nhận" id="input-confirm" class="form-control" type="password">
                                    <i style="color: red;"><?php echo form_error('rpassword'); ?></i>
                                </div>
                            </div>
                        </fieldset>
                            <div class="buttons">
                                <div class="pull-right">Tôi đã đọc và đồng ý với <a href="" class="agree"><b>Chính sách bảo mật</b></a>
                                    <input name="approved" value="1" type="checkbox">
                                &nbsp;
                                    <input value="Tiếp tục" class="button btn btn-theme-default" type="submit">
                                    <i style="color: red;"><?php echo form_error('approved'); ?></i>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </section>
