
                <div class="container">
                    <div class="row hidden-sm hidden-xs">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <ul class="links pull-left">
                                <li>
                                    <a class="wishlist" href="" id="mobile-wishlist-total">
                                        <span class="fa fa-heart"></span>Yêu thích()                        </a>
                                </li>
                                <li>
                                    <a class="account" href="<?php echo base_url('User/index');?>">
                                        <span class="fa fa-user"></span>Tài khoản</a>
                                </li>
                                <li>
                                    <a class="shoppingcart" href="<?php echo base_url().'cart'; ?>">
                                        <span class="fa fa-shopping-cart"></span>Giỏ hàng                                    </a>
                                </li>
                                <li>
                                    <a class="last checkout" href="<?php echo base_url().'order/check_out' ;?>">
                                        <span class="fa fa-file"></span>Thanh toán</a>
                                </li>
                            </ul>
                            <?php if(isset($user_info) && $user_info !=  ''): ?>
                            <div class="welcome pull-left">
                                    <a>
                                        Xin chào: <?php echo $user_info->name; ?>
                                    </a> -
                                    <a href="<?php echo site_url('user/logout'); ?>">Thoát</a>
                            </div>
                            <?php else: ?>
                            <div class="welcome pull-left">
                               <a href="<?php echo base_url('User/register');?>">Đăng ký</a> hoặc  <a href="<?php echo base_url('User/login');?>">Đăng nhập</a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="currency pull-right">
                                <a href="">Hotline: 0914785821</a>
                                <a href="<?php echo base_url().'admin';?>">Mục quản trị viên</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile format-->
                    <div class="show-mobile hidden-lg hidden-md pull-right">
                        <div class="quick-user pull-left">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="inner-toggle">
                                <?php if(isset($user_info) && $user_info !=  ''): ?>
                  
                                    
                                        <div class="login links">
                                            <a href="<?php echo base_url('User/index');?>">Tài khoản</a> -
                                        <a href="<?php echo site_url('user/logout'); ?>">Thoát</a>
                                            </div>
                                    
                                 <?php else: ?>
                                <div class="login links">
                                 <a href="">Đăng ký</a> hoặc <a href="">Đăng nhập</a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="quick-access pull-left">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="inner-toggle">
                                <ul class="links pull-left">
                                    <li>
                                        <a class="wishlist" href="" id="wishlist-total">
                                            <span class="fa fa-heart"></span>
                                            Yêu thích                                       </a>
                                    </li>
                                    <li><a class="account" href="<?php echo base_url('User/index');?>">
                                            <span class="fa fa-user"></span>
                                            Tài khoản                                        </a>
                                    </li>
                                    <li>
                                        <a class="shoppingcart" href="<?php echo base_url().'cart'; ?>">
                                            <span class="fa fa-shopping-cart"></span>
                                            Giỏ hàng                                        </a></li>
                                    <li>
                                        <a class="last checkout" href="<?php echo base_url().'order/check_out' ?>">
                                            <span class="fa fa-file"></span>
                                            Thanh toán                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

<!--                        <div id="search_mobile" class="search pull-left">

                        </div>

                        <div class="currency-mobile pull-left">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="inner-toggle">
                                <div class="currency pull-left">
                                       
                                </div>
                            </div>
                        </div>

                        <div class="language-mobile pull-left">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-cog"></i>
                            </div>
                            <div class="inner-toggle">
                                <div class="language pull-left">
                               </div>
                            </div>
                        </div>-->
                    </div>
                </div>