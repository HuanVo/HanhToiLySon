
<div class="box productcarousel">
        <div class="box-heading">
            <span class="title">Sản phẩm bán chạy</span>
        </div>

        <div class="box-content">
            <!--carousel controller-->
            <div class="carousel-controls">
                <a class="carousel-control fa fa-angle-left left" href="#productcarousel1079024340" data-slide="prev"></a>
                <a class="carousel-control fa fa-angle-right right" href="#productcarousel1079024340" data-slide="next"></a>
            </div>
            <div class="box-products slide carousel" id="productcarousel1079024340">
                <div class="carousel-inner">
                    
                    <div class="item next left">
                        <div class="row products-row last">
                         <?php $i = 1; foreach ($product_bc as $prod){
                    ?>
                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-11">
                                    <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">
                                        
                                        <div class="image">
                                            <!-- text sale-->
                                            <a class="img" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product) ?>" >
                                                <img src="<?php echo base_url('upload'); ?>/products/<?php echo $prod->image_link; ?>" alt="<?php echo $prod->name;?>" class="img-responsive">
                                            </a>
                                            <!-- zoom image-->
                                            <a href="<?php echo base_url('upload'); ?>/products/<?php echo $prod->image_link; ?>" class="info-view product-zoom "style="  padding-left: 3px; padding-top: 10px;" >
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                            <!-- view-->
                                            <a class="pav-colorbox cboxElement" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product);?>" title="Xem">
                                                <span>Xem</span>
                                            </a>
                                        </div>
    
                                        <div class="product-meta">
                                            <!-- Ten sp -->
                                            <center><h3 class="name"><a href=""><?php echo $prod->name;?> </a></h3></center>
                                            
                                            <!-- Mo ta  -->
                                            
                                            <!-- Khoi luong -->
                                            <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <center><span class="special-price"><?php echo $prod->weigh; ?></span></center>
                                            </div>
                                            <!-- Gia -->
                                            <div class="cart">
                                                <center> <input value="<?php if($prod->price == 0) echo 'Liên hệ'; else echo  number_format($prod->price - $prod->discount).' VND'; ?>" class="button" type="button"></center>
                                            </div>
                                            <!-- Giam Gia -->
                                            <div class="discount" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <center><span class="special-price"><?php if($prod->discount >0) {echo '<strike>'.number_format($prod->price ).' VND'.'</strike>'.' -'; echo ceil(($prod->discount*100)/$prod->price). '%';} else {
 echo '<strike>'.number_format($prod->price ).' VND'.'</strike>'.' -'; echo '0 %';   
} ?></span></center>
                                            </div>
                                            
                                            <div class="wishlist">
                                                <a data-toggle="tooltip" title="" class="fa fa-heart product-icon" data-original-title="Thêm vào yêu thích">
                                                    <span>Thêm vào yêu thích</span>
                                                </a>
                                            </div>
                                            <div class="compare">
                                                <a onclick="clicking(<?php  echo $prod->id_product; ?>);" data-toggle="tooltip" title="" class="fa fa-shopping-cart" data-original-title="Thêm vào giỏ hàng">
                                                    <span>Thêm vào giỏ hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                         <?php $i++;
                         if($i>4)
                         {
                             break;
                         }
                         
                         }?>
                           
                        </div>
                    </div>
                    <div class="item active left">
                        <div class="row products-row ">     
                            <?php $i=1; foreach ($product_bc as $prod){
                                if($i>4){
                            //echo $prod->id_catalog;    
                    ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">
                                        
                                        <div class="image">
                                            <!-- text sale-->
                                            <a class="img" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product) ?>" >
                                                <img src="<?php echo base_url('upload'); ?>/products/<?php echo $prod->image_link; ?>" alt="<?php echo $prod->name;?>" class="img-responsive">
                                            </a>
                                            <!-- zoom image-->
                                            <a href="<?php echo base_url('upload'); ?>/products/<?php echo $prod->image_link; ?>" class="info-view product-zoom" >
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                            <!-- view-->
                                            <a class="pav-colorbox cboxElement" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product) ?>" title="Xem">
                                                <span>Xem</span>
                                            </a>
                                        </div>
    
                                        <div class="product-meta">
                                            <!-- Ten sp -->
                                            <center><h3 class="name"><a href=""><?php echo $prod->name;?> </a></h3></center>
                                            
                                            <!-- Mo ta  -->
                                            <div class="description" itemprop="description">
                                               
                                            </div>
                                            <!-- Khoi luong -->
                                            <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <center><span class="special-price"><?php echo $prod->weigh; ?></span></center>
                                            </div>
                                            <!-- Gia -->
                                            <div class="cart">
                                                <center> <input value="<?php if($prod->price == 0) echo 'Liên hệ'; else echo  number_format($prod->price - $prod->discount).' VND'; ?>" class="button" type="button"></center>
                                            </div>
                                            <!-- Giam Gia -->
                                            <div class="discount" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <center><span class="special-price"><?php if($prod->discount >0) {echo '<strike>'.number_format($prod->price ).' VND'.'</strike>'.' -'; echo ceil(($prod->discount*100)/$prod->price). '%';} else {
 echo '<strike>'.number_format($prod->price ).' VND'.'</strike>'.' -'; echo '0 %';   
} ?></span></center>
                                            </div>
                                            
                                            <div class="wishlist">
                                                <a data-toggle="tooltip" title="" class="fa fa-heart product-icon" data-original-title="Thêm vào yêu thích">
                                                    <span>Thêm vào yêu thích</span>
                                                </a>
                                            </div>
                                            <div class="compare">
                                                <a data-toggle="tooltip" onclick="clicking(<?php  echo $prod->id_product; ?>);" title="" class="fa fa-shopping-cart" data-original-title="Thêm vào giỏ hàng">
                                                    <span>Thêm vào giỏ hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            <?php }  $i++;
                            
                                }?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>