<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>Bảng điều khiển</h5>
            <span>Trang quản lý hệ thống</span>
        </div>

        <div class="clear"></div>
    </div>
</div>

<div class="line"></div>

<div class="wrapper">

    <div class="widgets">
        <!-- Stats -->

        <!-- Amount -->
        <div class="oneTwo">
            <div class="widget">
                <div class="title">
                    <img class="titleIcon" src="<?php echo public_url(); ?>/admin/images/icons/dark/money.png">
                    <h6>Doanh số</h6>
                </div>

                <table width="100%" cellspacing="0" cellpadding="0" class="sTable myTable">
                    <tbody>

                    <tr>
                        <td class="fontB blue f13">Tổng doanh số</td>
                        <td style="width:120px;" class="textR webStatsLink red"><?php 
                         $amount = 0;
                            
                            foreach ($tran_list as $row){
                                $amount += $row->amount;
                            } 
                            echo number_format($amount).' đ';
                        ?></td>
                    </tr>

                    <tr>
                        <td class="fontB blue f13">Doanh số hôm nay</td>
                        <td style="width:120px;" class="textR webStatsLink red">
                            <?php 
                         //echo date('d/m/Y');
                         $amounts = 0;
                            
                            foreach ($tran_list as $row){
                                if(strtotime(date('d/m/Y', intval($row->created))) == strtotime(date('d/m/Y')))
                                $amounts += $row->amount;
                            } 
                            echo number_format($amounts).' đ';
                        ?>
                            
                        </td>
                    </tr>

                    <tr>
                        <td class="fontB blue f13">Doanh số theo tháng</td>
                        <td style="width:120px;" class="textR webStatsLink red">
                             <?php 
                         //echo date('d/m/Y');
                         $amount = 0;
                            
                            foreach ($tran_list as $row){
                                //echo date('m', time($row->created));
                                if(strtotime(date('m', time($row->created))) == strtotime(date('m')))
                                $amount += $row->amount;
                            } 
                            echo number_format($amount).' đ';
                        ?>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>


        <!-- User -->
        <div class="oneTwo">
            <div class="widget">
                <div class="title">
                    <img class="titleIcon" src="<?php echo public_url(); ?>/admin/images/icons/dark/users.png">
                    <h6>Thống kê dữ liệu</h6>
                </div>

                <table width="100%" cellspacing="0" cellpadding="0" class="sTable myTable">
                    <tbody>

                    <tr>
                        <td>
                            <div class="left">Tổng số giao dịch</div>
                            <div class="right f11"><a href="<?php echo admin_url('transaction'); ?>" >Chi tiết</a></div>
                        </td>

                        <td class="textC webStatsLink">
                        <?php echo $total_tran; ?>	   
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="left">Tổng số sản phẩm</div>
                            <div class="right f11"><a href="<?php echo admin_url('product'); ?>">Chi tiết</a></div>
                        </td>

                        <td class="textC webStatsLink">
                            <?php echo $total_product; ?>					</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="left">Tổng số bài viết</div>
                            <div class="right f11"><a href="<?php echo admin_url('news'); ?>">Chi tiết</a></div>
                        </td>

                        <td class="textC webStatsLink">
                            <?php echo $total_news; ?>					</td>
                    </tr>

                    <tr>
                        <td>
                            <div class="left">Tổng số thành viên</div>
                            <div class="right f11"><a href="">Chi tiết</a></div>
                        </td>
                        <td class="textC webStatsLink">
                            <?php echo $total_user; ?>				</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="left">Tổng số liên hệ</div>
                            <div class="right f11"><a href="">Chi tiết</a></div>
                        </td>
                        <td class="textC webStatsLink">
                          <?php echo $total_feedback; ?>					</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="clear"></div>

        <!-- Giao dich thanh cong gan day nhat -->

<!--        <div class="widget">
            <div class="title">
                <span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
                <h6>Danh sách Giao dịch</h6>
            </div>

            <table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">


                <thead>
                <tr>
                    <td style="width:10px;"><img src="<?php //echo public_url(); ?>/admin/images/icons/tableArrows.png"></td>
                    <td style="width:60px;">Mã số</td>
                    <td style="width:75px;">Thành viên</td>
                    <td style="width:90px;">Số tiền</td>
                    <td>Hình thức</td>
                    <td style="width:100px;">Giao dịch</td>
                    <td style="width:75px;">Ngày tạo</td>
                    <td style="width:55px;">Hành động</td>
                </tr>
                </thead>

                <tfoot class="auto_check_pages">
                <tr>
                    <td colspan="8">
                        <div class="list_action itemActions">
                            <a url="admin/tran/del_all.html" class="button blueB" id="submit" href="#submit">
                                <span style="color:white;">Xóa hết</span>
                            </a>
                        </div>
                    </td>
                </tr>
                </tfoot>

                <tbody class="list_item">
                <tr>
                    <td><input type="checkbox" value="21" name="id[]"></td>

                    <td class="textC">21</td>

                    <td>
                        Hoàng văn Tuyền					</td>

                    <td class="textR red">10,000,000</td>

                    <td>
                        dathang					</td>


                    <td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
                    </td>

                    <td class="textC">16-08-2014</td>

                    <td class="textC">
                        <a class="lightbox" href="admin/tran/view/21.html">
                            <img src="<?php //echo public_url(); ?>/admin/images/icons/color/view.png">
                        </a>

                        <a class="tipS verify_action" title="Xóa" href="admin/tran/del/21.html">
                            <img src="<?php //echo public_url(); ?>/admin/images/icons/color/delete.png">
                        </a>
                    </td>
                </tr>
                
                
                </tbody>

            </table>
        </div>-->

    </div>

</div>

<div class="clear mt30"></div>