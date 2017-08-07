<!--<style>
    div.row h4{
        padding: 5px;
        background-color: coral;
        color: #fff;
        width: 120px;
        border-radius: 4px ;
        text-align: center;
    }
    div.row h4 a{
        color: #fff;
    }
    div.row tr td i{
        color: red;
    }

</style>-->
<section id="sidebar-main" class="col-sm-8">
<div id="content">
                <h1>Thanh toán</h1>
                <!--=========product detail=========-->
                <div class="product-info">
                    <div class="row">
                        <form name="edit" action="<?php echo base_url('order/check_out'); ?>" method="post" enctype="multipart/form-data">
                <fieldset id="account">
                    <legend>Thông tin nhận hàng của thành viên: </legend>
                            
                        
                            <div class="form-group required">
                               Tổng số tiền cần thanh toán:
                               <i style="color:blue;"><?php echo  number_format($total_amount);  ?> </i> VNĐ
                            </div>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-firstname">Họ và tên</label>
                                <div class="col-sm-10">
                                    <input name="name" value="<?php echo isset($user_info->name) ? $user_info->name : '' ?>" placeholder="Họ và tên" id="input-fulltname" class="form-control" type="text">
                                    <i style="color: red;"><?php echo form_error('name'); ?></i>
                                </div>
                                
                            </div>
                            
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" value="<?php echo isset($user_info->email) ? $user_info->email : '' ?>" placeholder="Email" id="input-email" class="form-control" type="email">
                                    <i style="color: red;"><?php echo form_error('email'); ?></i>
                                </div>
                            </div>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
                                <div class="col-sm-10">
                                    <input name="phone" value="<?php echo isset($user_info->phone) ? $user_info->phone : '' ?>" placeholder="Điện thoại" id="input-telephone" class="form-control" type="tel">
                                    <i style="color: red;"><?php echo form_error('phone'); ?></i>
                                </div>
                            </div>
                            
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-address-1">Địa chỉ nhận hàng</label>
                                <div class="col-sm-10">
                                    <input name="address" value="" placeholder="Địa chỉ nhận hàng" id="input-address-1" class="form-control" type="text">
                                    <i style="color: red;"><?php echo form_error('address'); ?></i>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-address-1">Thêm ý kiến về đơn hàng</label>
                                <div class="col-sm-10">
                                    <textarea name="message" rows="8" class="form-control"></textarea>
                                    <i><?php echo form_error('message'); ?></i>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-zone">Cổng thanh toán</label>
                                <div class="col-sm-10">
                                    <!-- Tỉnh thành phố-->
                                <select name="payment" id="input-zone" class="form-control">
                                    <option value="" >-- Chọn cổng thanh toán --</option>
                                    <option value="offline">Thanh toán khi nhận hàng</option>
                                    <option value="baokim">Bảo Kim</option>
                                    <option value="nganluong">Ngân Lượng</option>
                                </select>
                                <i style="color: red;"><?php echo form_error('payment'); ?></i>
                                </div>
                            </div>
                        
                    </fieldset>
                        
                    <div class="buttons">
                        <div class="pull-right">
                            <input value="Xác nhận Thanh toán" class="button btn btn-theme-default" type="submit">   
                        </div>
                    </div>
                   </form>
        </div>
    </div>
</div>
</section>