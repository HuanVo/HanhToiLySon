
<div id="leftSide" style="padding-top:30px;">

    <!-- Account panel -->

    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="<?php echo public_url(); ?>/admin/images/user.png" width="40"></a>
        <span>Xin chào: <strong>admin!</strong></span>
        <span><?php echo $admin_info->name;?></span>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- Left navigation -->

    <?php $this->load->helper('admin'); ?>

    <ul id="menu" class="nav">

        <li class="home">

            <a href="<?php echo admin_url(); ?>" class="active" id="current">
                <span>Bảng điều khiển</span>
                <strong></strong>

            </a>


        </li>
        <li class="tran">

            <a href="#" class=" exp">
                <span>Quản lý bán hàng</span>
                <strong>2</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="<?php echo admin_url('transaction'); ?>">
                        Giao dịch							</a>
                </li>
                <li>
                    <a href="<?php echo admin_url('order'); ?>">
                        Đơn hàng sản phẩm							</a>
                </li>
            </ul>

        </li>
        <li class="product">

            <a href="" class=" exp">
                <span>Sản phẩm</span>
                <strong>3</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="<?php echo admin_url('product');?>">
                        Sản phẩm							</a>
                </li>
                <li>
                    <a href="<?php echo admin_url('catalog'); ?>">
                        Danh mục							</a>
                </li>
                <li>
                    <a href="">
                        Phản hồi							</a>
                </li>
            </ul>

        </li>
        <li class="account">

            <a href="" class=" exp">
                <span>Tài khoản</span>
                <strong>3</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="<?php echo admin_url('admin')?>">
                        Ban quản trị							</a>
                </li>
                <li>
                    <a href="">
                        Nhóm quản trị							</a>
                </li>
                <li>
                    <a href="">
                        Thành viên							</a>
                </li>
            </ul>

        </li>
        <li class="support">

            <a href="" class=" exp">
                <span>Hỗ trợ và liên hệ</span>
                <strong>2</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="">
                        Hỗ trợ							</a>
                </li>
                <li>
                    <a href="">
                        Liên hệ							</a>
                </li>
            </ul>

        </li>
        <li class="content">

            <a href="" class=" exp">
                <span>Nội dung</span>
                <strong>4</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="<?php echo admin_url('slide'); ?>">
                        Slide							</a>
                </li>
                <li>
                    <a href="<?php echo admin_url('news'); ?>">
                        Tin tức
                    </a>
                </li>
                <li>
                    <a href="#">
                        Trang thông tin							</a>
                </li>
                <li>
                    <a href="">
                        Video							</a>
                </li>
            </ul>

        </li>

    </ul>

</div>
<div class="clear"></div>
