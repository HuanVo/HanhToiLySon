
<section id="sidebar-main" class="col-sm-8">
    <div id="content">
        <h3>Tìm kiếm - <?php echo isset($key) ? $key : '' ?></h3>
        <label class="control-label" for="input-search">Tiêu chí Tìm kiếm</label>
        <!--Form search-->
        <form class="advanced-search" method="get" action="<?php echo site_url('product/search') ?>">
            <div class="content">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="search" class="col-md-3 hidden-xs hidden-sm"></label>
                                    <div class="col-md-9">
                                        <input name="search" value="<?php echo isset($key) ? $key : '' ?>" placeholder="Từ khóa" id="text-search" class="input-text form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <select name="category_id" class="form-control">
                                <option value="0">Tất cả danh mục</option>
                                    <?php foreach ($catalog_list as $row): ?>
                                        <option value="<?php echo $row->id_catalog; ?>" <?php echo $this->input->get('category_id') == $row->id_catalog ? 'selected': '' ?> ><?php echo $row->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>
                        <div class="col-sm-4">
                            <input value="Tìm sản phẩm" id="button-search" class="button btn btn-theme-default" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End form search-->
        <!--Show product finded-->
        <h5>Các sản phẩm thỏa mãn tiêu chí tìm kiếm <span style="color: red;"><?php if(isset($rowfinded))echo $rowfinded;else echo '0'; ?></span> kết quả trả về</h5>
        <!--==========products filter=========-->
         <div class="product-filter ">
            <div class="inner clearfix">
                 <div class="display">
                    <div class="btn-group group-switch">
                        <button type="button" id="list-view" class="btn btn-switch list" data-toggle="tooltip" title="" data-original-title="Danh sách">
                            <i class="fa fa-th-list"></i>
                        </button>
                         <button type="button" id="grid-view" class="btn btn-switch grid active" data-toggle="tooltip" title="" data-original-title="Lưới">
                            <i class="fa fa-th"></i>
                         </button>
                    </div>
                </div>
                 <div class="filter-right">
                    <div class="product-compare">
                         <a  class="btn btn-theme-primary" id="compare-total">Thêm vào so sánh (0)</a>
                    </div>
<!--                    <div class="sort">
                        <span>Sắp xếp theo:</span>
                            <select class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">Mặc định</option>   http://foodstore.myzozo.net/search?sort=p.sort_order&amp;order=ASC&amp;search=combo
                                <option value="#">Tên (A - Z)</option>
                                <option value="#">Tên (Z - A)</option>
                                <option value="#">Giá (Thấp &gt; Cao)</option>
                                <option value="#">Giá (Cao &gt; Thấp)</option>
                                <option value="#">Đánh giá (Cao nhất)</option>
                                <option value="#">Đánh giá (Thấp nhất)</option>
                                <option value="#">Dòng sản phẩm (A - Z)</option>
                                <option value="#">Dòng sản phẩm (Z - A)</option>
                            </select>
                    </div>-->
                    <div class="limit">
                        <span>Giới hạn:</span>
                        <select class="form-control" onchange="location = this.value;">
                            <option value="<?php echo base_url(); ?>product/search?search=<?php echo isset($key) ? $key : '' ?><?php if(isset($id_catal))echo '&category_id='.$id_catal; ?>&limit=10" <?php if(isset($limit)) if($limit ==10) echo 'selected';?> >10</option>
                            <option value="<?php echo base_url(); ?>product/search?search=<?php echo isset($key) ? $key : '' ?><?php if(isset($id_catal))echo '&category_id='.$id_catal; ?>&limit=15" <?php if(isset($limit)) if($limit ==15) echo 'selected';?>>15</option>
                            <option value="<?php echo base_url(); ?>product/search?search=<?php echo isset($key) ? $key : '' ?><?php if(isset($id_catal))echo '&category_id='.$id_catal; ?>&limit=25" <?php if(isset($limit)) if($limit ==25) echo 'selected';?>>25</option>
                            <option value="<?php echo base_url(); ?>product/search?search=<?php echo isset($key) ? $key : '' ?><?php if(isset($id_catal))echo '&category_id='.$id_catal; ?>&limit=50" <?php if(isset($limit)) if($limit ==50) echo 'selected';?>>50</option>
                            <option value="<?php echo base_url(); ?>product/search?search=<?php echo isset($key) ? $key : '' ?><?php if(isset($id_catal))echo '&category_id='.$id_catal; ?>&limit=75"<?php if(isset($limit)) if($limit ==75) echo 'selected';?>>75</option>
                            <option value="<?php echo base_url(); ?>product/search?search=<?php echo isset($key) ? $key : '' ?><?php if(isset($id_catal))echo '&category_id='.$id_catal; ?>&limit=100" <?php if(isset($limit)) if($limit ==100) echo 'selected';?>>100</option>
                         </select>
                    </div>

                </div>
            </div>
        </div>
        <!--==========products filter=========-->

        <!--==========products list=========-->
        <div id="products" class="product-grid">
            <div class="products-block">
                <div class="row product-items">
                    <?php $i = 1;  foreach ($list as $prod): ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                    <div class="get_id_product" hidden><?php  echo $prod->id_product; ?></div>
                                    <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">
                                        <div class="image">
                                            <!-- text sale-->

                                            <a class="img" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product) ?>">
                                                <img src="<?php echo base_url('upload'); ?>/products/<?php echo $prod->image_link; ?>" alt="Combo" class="img-responsive">
                                            </a>

                                            <!-- zoom image-->
                                                        <a href="<?php echo base_url('upload'); ?>/products/<?php echo $prod->image_link; ?>" class="info-view product-zoom" title="<?php echo $prod->name;?>" style="  padding-left: 3px; padding-top: 10px;">
                                                <i class="fa fa-search-plus"></i>
                                            </a>

                                            <!-- view-->
                                            <a class="pav-colorbox cboxElement" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product);?>" title="Xem">
                                                <span>Xem</span>
                                            </a>

                                        </div>

                                        <div class="product-meta">
                                            <h3 class="name"><a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($prod->name_catalog).'/'.seoname($prod->name).'/'.$prod->id_product);?>"><?php echo $prod->name;?></a></h3>

                                            <div class="description" itemprop="description">
                                               
                                            </div>

                                            <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <span class="special-price"><span class="special-price"><?php echo $prod->weigh; ?></span></span>
                                                <meta content="100,000" itemprop="price">
                                                <meta content="" itemprop="priceCurrency">
                                            </div>

                                            <div class="cart">
                                                <input value="<?php if($prod->price == 0) echo 'Liên hệ'; else echo  number_format($prod->price - $prod->discount).' VND'; ?>" class="button" type="button">
                                             </div>
<!-- Giam Gia -->
                                            <div class="discount" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <span class="special-price"><?php if($prod->discount >0) {echo '<strike>'.number_format($prod->price ).' VND'.'</strike>'.' -'; echo ceil(($prod->discount*100)/$prod->price). '%';} else {
 echo '<strike>'.number_format($prod->price ).' VND'.'</strike>'.' -'; echo '0 %';   
} ?></span>
                                            </div>
                                            <div class="wishlist">
                                                <a onclick="" data-toggle="tooltip" title="" class="fa fa-heart product-icon" data-original-title="Thêm vào yêu thích">
                                                    <span>Thêm vào yêu thích</span>
                                                </a>
                                            </div>
                                            <div class="compare">
                                                <a onclick="clicking();" data-toggle="tooltip" title="" class="fa fa-shopping-cart" data-original-title="Thêm vào giỏ hàng">
                                                    <span>Thêm vào giỏ hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                               <?php endforeach;?>
    </div>
</div>
</div>
<!--                        <div class="paginations row">
                            <div class="links"></div>
                            <div class="results">Hiển thị 1 đến 1 của 1 (1 trang)</div>
                        </div>-->
                        <!--==========products list=========-->   
   </div>
</section>