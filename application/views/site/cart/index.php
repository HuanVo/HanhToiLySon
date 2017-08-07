<section id="sidebar-main" class="col-sm-8">
            <div id="content">
                 <h1>Giỏ hàng</h1>
                <?php if($total_items > 0){ ?>
                <form action="<?php echo base_url('cart/update') ?>" method="post" enctype="multipart/form-data">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center">Ảnh</td>
                                    <td class="text-left">Tên sản phẩm</td>
                                    <td class="text-left">Dòng sản phẩm</td>
                                    <td class="text-left">Số lượng</td>
                                    <td class="text-right">Đơn giá</td>
                                    <td class="text-right">Tổng số</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_amount = 0; ?>
                                <?php foreach ($carts as $rows): ?>
                                        <?php
                                        $total_amount = $total_amount + $rows['subtotal'];
                                    ?>
                                 <tr>
                                    <style>
                                  .img-thumbnail {
                                    width: 65px;
                                    height: 77px;
                                    background-image: none;
                                    background-repeat: no-repeat;
                                    background-position: center center;
                                    background-size: cover;
                                } 
                                    </style>
                                    <td class="text-center">
                                        
                                        <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($rows['name_catalog']).'/'.seoname($rows['name']).'/'.$rows['id']) ?>">
                                            <img class="img-thumbnail" src="<?php echo addslashes(base_url('upload').'/products/'.$rows['image_link']);?>" alt="<?php echo $rows['name'];?>" title="<?php echo $rows['name'];?>"></a>
                                        </td>
                                    <td class="text-left"><a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($rows['name_catalog']).'/'.seoname($rows['name']).'/'.$rows['id']) ?>"><?php echo $rows['name'];?></a>
                                   </td>
                                   <td class="text-left">&nbsp;<?php echo $rows['name_catalog'];?></td>
                                    <td class="text-left">
                                        <div class="input-group btn-block" style="max-width: 200px;">
                                            <input name="qty_<?php echo $rows['id']; ?>" value="<?php echo $rows['qty']; ?>" size="4" class="form-control" type="text" data-min="0" data-step="1">
                                            <span class="input-group-btn" style=" padding-left: 3px;">
                                            <a href="<?php echo base_url('cart/del/'.$rows['id']); ?>" class="remove"><i class="fa fa-close"></i></a>
                                             <!--<button type="button" data-toggle="tooltip" title="" class="btn btn-danger"  data-original-title="Gỡ bở"> -->
                                                
                                            </a>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-right"><?php echo number_format($rows['price']); ?> VNĐ</td>
                                    <td class="text-right"><?php echo number_format($rows['subtotal']); ?>VNĐ</td>
                                </tr>
                                <?php endforeach; ?>
                         </tbody>
                        </table>
                    </div>
                    <div class="pull-right" style=" margin-bottom: 10px; margin-left: 3px;">
                    <button type="submit" class="button" style=" width: 120px; height: 37px; padding-top: -5px;">Cập nhật tất cả</button>
                   <a href="<?php echo site_url('cart/del'); ?>" class="button btn btn-theme-default">Xóa tất cả</a>
                </div>
                </form>
                
                
                
                <br>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered">
                                                            <tbody><tr>
                                    <td class="text-right"><strong>Thành tiền:</strong></td>
                                    <td class="text-right"><?php echo number_format($total_amount); ?>VNĐ</td>
                                </tr>
                                                            <tr>
                                    <td class="text-right"><strong>Tổng số:</strong></td>
                                    <td class="text-right"><?php echo number_format($total_amount); ?>VNĐ</td>
                                </tr>
                                                    </tbody></table>
                    </div>
                </div>
                <div class="buttons clearfix">
                    <div class="pull-left"><a href="<?php echo base_url(); ?>" class="button btn btn-theme-default">Tiếp tục mua hàng</a></div>
                    <div class="pull-right"><a href="<?php echo site_url('order/check_out'); ?>" class="button btn btn-theme-default">Thanh toán</a></div>
                </div>
                
                <?php }else{ ?>
            <h2 style="padding-bottom: 200px; font-size: 15px;">Giỏ hàng của bạn chưa có sản phẩm nào. </h2>
        <?php } ?>
                            </div>
        </section>