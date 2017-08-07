<link rel="stylesheet" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">
<script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $( "#text-search" ).autocomplete({
            source: "<?php echo site_url('product/search/1'); ?>"
        });
    });
</script>


<div class="container">
                    <div class="row header-wrap">
                        <!--logo-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                                                            <div id="logo-theme" class="logo-store">
                                    <a href="<?php echo base_url()?>" class="img-responsive" style="background-image: none;">
                                        <img src="<?php echo base_url('upload')?>/logo/logo.png" title="Foodstore" alt="Foodstore" />
                                    
                                    </a>
                                </div>
                       </div>
                        
                        <div class="header-right col-lg-8 col-md-8 col-sm-12 header-hidden inner">
                            <div class="row header-service">
                                <div class="col-sm-4 pull-right">
                                    <div id="cart" class="cart">
                                        <span class="fa fa-shopping-cart pull-left"></span>
                                        <div data-toggle="dropdown" data-loading-text="Đang tải" class="heading dropdown-toggle">
                                            <div class="cart-inner media-body">
                                                <h4>Giỏ hàng</h4>
                                                <a>
                                                    <span id="cart-total"><?php echo $total_items;?> sản phẩm - <?php
                                                    $total_amount = 0;foreach ($carts as $rows) {
                                                        $total_amount = $total_amount + $rows['subtotal'];
                                                    }
                                                    echo number_format($total_amount).' VND';
                                                    ?></span>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <?php if($total_items >0){ ?>
                                        
                                            <ul class="dropdown-menu" style="width: 400px;left: initial;right: -30px;margin-top:45px;">
                                                <?php $total_amount = 0; foreach ($carts as $row): $total_amount = $total_amount + $row['subtotal'];?>
                                                <li>
                                                    <table class="table table-striped">
                                                        <tbody>
                                                            <tr>
                                                            <style>
                                                              .small_img {
                                                                width: 65px;
                                                                height: 77px;
                                                                background-image: none;
                                                                background-repeat: no-repeat;
                                                                background-position: center center;
                                                                background-size: cover;
                                                            } 
                                                                </style>
                                                                <td class="text-center">
                                                                    <div class="small_img">
                                                                    <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($row['name_catalog']).'/'.seoname($row['name']).'/'.$row['id']) ?>"><img src="<?php echo base_url('upload'); ?>/products/<?php echo $row['image_link'] ?>" alt="<?php echo $row['name']; ?>" title="<?php echo $row['name']; ?>"></a>
                                                                    </div>
                                                                </td>

                                                                <td class="text-left">
                                                                    <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($row['name_catalog']).'/'.seoname($row['name']).'/'.$row['id']) ?>"><?php echo $row['name']; ?></a>
                                                                </td>

                                                                <td class="text-right">x <?php echo $row['qty']; ?></td>
                                                                <td class="text-right"><?php echo number_format($row['price']); ?> VNĐ</td>
                                                                <td class="text-center">
                                                                        <a href="<?php echo base_url('cart/del/'.$row['id']); ?>" class="remove"><i class="fa fa-close"></i></a>
<!--                                                                    <button type="button" onclick="cart.remove('66');" title="Gỡ bở" class="btn btn-danger btn-xs">
                                                                        <i class="fa fa-times"></i>
                                                                    </button>-->
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                                <?php endforeach; ?>
                                                <li>
                                                    <div>
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-right"><strong>Thành tiền</strong></td>
                                                                    <td class="text-right"><?php echo number_format($total_amount); ?> VNĐ</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right"><strong>Tổng số</strong></td>
                                                                    <td class="text-right"><?php echo number_format($total_amount); ?> VNĐ</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p class="text-right">
                                                            <a href="<?php echo base_url().'cart'; ?>" class="button btn btn-theme-default"><i class="fa fa-shopping-cart"></i>Xem giỏ hàng                        </a>
                                                            <a href="<?php echo base_url().'order/check_out';?>" class="button btn btn-theme-default"><i class="fa fa-share"></i>Thanh toán                        </a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        
                                        <?php
                                        
                                        }
                                        else {
                                        ?>
                                            <ul class="dropdown-menu" style="width: 400px;left: initial;right: -30px;margin-top:45px;">
                                            <!--<ul class="dropdown-menu">-->
                                                        <li>
                                                    <p class="text-center">Giỏ hàng của bạn trống!</p>
                                                </li>
                                            </ul>
                                            
                                        <?php }?> 
                                            
                                     
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
