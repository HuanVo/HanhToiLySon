<!--<div id="breadcrumb">
        <ol class="breadcrumb container">
                            <li><a href=""><span><i class="fa fa-home"></i></span></a></li>
                            <li><a href=""><span>Sản phẩm</span></a></li>
                            <li><a href=""><span>Món chính</span></a></li>
                    </ol>
    </div>-->

<section id="sidebar-main" class="col-sm-8">
<div id="content">
                
                <h1>Món chính</h1>
                <!--refine-->
                
                <!--==========products filter=========-->
                    <div class="product-filter ">
                        <div class="inner clearfix">
                            <div class="display">
                                <div class="btn-group group-switch">
                                    <button type="button" id="list-view" class="btn btn-switch list" data-toggle="tooltip" title="" data-original-title="Danh sách">
                                        <i class="fa fa-th-list"></i></button>
                                    <button type="button" id="grid-view" class="btn btn-switch grid active" data-toggle="tooltip" title="" data-original-title="Lưới">
                                        <i class="fa fa-th"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="filter-right">
                                <div class="product-compare">
                                    <a href="" class="btn btn-theme-primary" id="compare-total">So sánh sản phẩm (0)</a>
                                </div>

                                <div class="sort">
                                    <span>Sắp xếp theo:</span>
                                    <select class="form-control" onchange="location = this.value;">
                                                                      <option value="http://foodstore.myzozo.net/mon-chinh?sort=p.sort_order&amp;order=ASC" selected="selected">Mặc định</option>
                                                                    <option value="http://foodstore.myzozo.net/mon-chinh?sort=pd.name&amp;order=ASC">Tên (A - Z)</option>
                                                                   <option value="http://foodstore.myzozo.net/mon-chinh?sort=pd.name&amp;order=DESC">Tên (Z - A)</option>
                                                                    <option value="http://foodstore.myzozo.net/mon-chinh?sort=p.price&amp;order=ASC">Giá (Thấp &gt; Cao)</option>
                                                                   <option value="http://foodstore.myzozo.net/mon-chinh?sort=p.price&amp;order=DESC">Giá (Cao &gt; Thấp)</option>
                                                                    <option value="http://foodstore.myzozo.net/mon-chinh?sort=rating&amp;order=DESC">Đánh giá (Cao nhất)</option>
                                                                     <option value="http://foodstore.myzozo.net/mon-chinh?sort=rating&amp;order=ASC">Đánh giá (Thấp nhất)</option>
                                                                    <option value="http://foodstore.myzozo.net/mon-chinh?sort=p.model&amp;order=ASC">Dòng sản phẩm (A - Z)</option>
                                                                    <option value="http://foodstore.myzozo.net/mon-chinh?sort=p.model&amp;order=DESC">Dòng sản phẩm (Z - A)</option>
                                    </select>
                                </div>

                                <div class="limit">
                                    <span>Giới hạn:</span>
                                    <select class="form-control" onchange="location = this.value;">
                                                                                                                                    <option value="http://foodstore.myzozo.net/mon-chinh?limit=15" selected="selected">15</option>
                                        <option value="http://foodstore.myzozo.net/mon-chinh?limit=25">25</option>
                                        <option value="http://foodstore.myzozo.net/mon-chinh?limit=50">50</option>
                                        <option value="http://foodstore.myzozo.net/mon-chinh?limit=75">75</option>
                                        <option value="http://foodstore.myzozo.net/mon-chinh?limit=100">100</option>
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
                               
                               <?php $i = 1; foreach ($list as $prod): ?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                    
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
                                                <a onclick="clicking(<?php  echo $prod->id_product; ?>);" data-toggle="tooltip" title="" class="fa fa-shopping-cart" data-original-title="Thêm vào giỏ hàng">
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
                    <div class="paginations row">
                        <div class="links"></div>
                        <div class="results">Hiển thị 1 đến 3 của 3 (1 trang)</div>
                    </div>
                    <!--==========products list=========-->
</div>
    </section>