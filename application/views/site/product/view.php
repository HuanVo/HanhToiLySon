
<section id="sidebar-main" class="col-sm-8">
<div id="content">
                
                <!--=========product detail=========-->
                <div class="product-info">
                    <div class="row">
                        <!--slider-->
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image-container">
                                                                    <div class="image">

                                                                                
                                        <a href="<?php echo base_url('upload') ?>/products/<?php echo $product_info->image_link; ?>"  class="imagezoom">
                                            <img style="width: 370px;height: 370px;" itemprop="image" src="<?php echo base_url('upload') ?>/products/<?php echo $product_info->image_link; ?>" title="<?php echo $product_info->name; ?>"
                                                 alt="<?php echo $product_info->name; ?>" id="mainImage" data-zoom-image="<?php echo base_url('upload') ?>/products/<?php echo $product_info->image_link; ?>" class="product-image-zoom img-responsive demo1" />
                                        </a>

                                    </div>
                                
                             <div class="thumbs-preview" >
                                                                            <div class="image-additional slide carousel horical" id="image-additional" >
                                            <div id="image-additional-carousel" class="carousel-inner" >
                           <?php $image_list = json_decode($product_info->image_list) ?>
                                        <?php if(is_array($image_list)){ ?>                                                                                  
												
                                                <div class="item clearfix active" id="divId" onclick="changeImageOnClick(event)" >
                                                      <?php $i=0; foreach ($image_list as $img): ?>
                                                   
                                                        <img src="<?php echo base_url('upload') ?>/products/<?php echo $img ?>"
                                                           style="width: 62px;height: 62px; " title="<?php echo $product_info->name; ?>" alt="<?php echo $product_info->name; ?>" 
                                                             data-zoom-image="<?php echo base_url('upload') ?>/products/<?php echo $img ?>" class="fl anh product-image-zoom img-responsive" />
                                               
<?php if($i>3)
                                                {break;}
                                             $i++;
                                            endforeach; ?>
                                        </div>
                                         <?php } ?>
                                    </div>
                                    <!-- Controls -->
                                    <a class="carousel-control left fa fa-angle-left" href="#image-additional" data-slide="prev"></a>
                                    <a class="carousel-control right fa fa-angle-right" href="#image-additional" data-slide="next"></a>

                                </div>
                                <script type="text/javascript">
                                    $('#image-additional .item:first').addClass('active');
                                    $('#image-additional').carousel({interval: false})
                                </script>
                            </div>
                        </div>
                        <!--slider-->
                        <!--product status--> 
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-view">
                            <h1 class="title-product"><?php echo $product_info->name; ?></h1>
                            <!--<div class="review">
                                <div>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <a href="#review-form" class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 đánh giá</a> /
                                    <a href="#review-form" class="popup-with-form" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Viết đánh giá</a>
                                </div>
                            </div>
                            -->
                            <div class="description">
                                <p>
                                    <i class="fa fa-th-large"></i>
                                    <b>Loại sản phẩm: &nbsp;</b>
                                    <a href="#" title="Xem thêm ở đây"><span style=" font-size: 16px;  color: #1ea8b0"><?php echo $product_info->name_catalog;?></span></a>
                                </p>
                                <p>
                                    <i class="fa fa-balance-scale"></i>
                                    <b>Khối lượng: &nbsp; </b>
                                    <span style=" font-size: 16px;  color: #1ea8b0"><?php echo $product_info->weigh;?></span>
                                                                    
                                </p>
                                <p>
                                    <i class="fa fa-chevron-down"></i>
                                    <b>Tình trạng: &nbsp;</b>
                                    <span style=" font-size: 16px; color: #1ea8b0">Còn hàng</span>
                                </p>
                                <?php if($product_info->discount>0){?>
                                <p>
                                    <i class="fa fa-tags"></i>
                                    <b>Giảm giá: &nbsp; </b>
                                    <span style=" font-size: 16px;  color: #1ea8b0"><?php echo '<strike>'.number_format($product_info->price ).' VND'.'</strike>'.' -'; echo ceil(($product_info->discount*100)/$product_info->price). '%';?></span>
                                                                    
                                </p>
                                <?php }?>
                            </div>
                            <div class="price">
                                
                                <?php if($product_info->price>0) echo '<i class="fa fa-usd" aria-hidden="true"></i>'.' '.number_format($product_info->price - $product_info->discount).' VND';else {
 
echo 'Liên hệ để có giá tốt.';} ?> <br>
                                <span class="price-tax">Lượt xem: <?php echo $product_info->view; ?></span><br>
                            </div>
                            <form name="add_product" method="post" action="<?php echo base_url('cart/add/'.$product_info->id_product); ?>" enctype="multipart/form-data">
                            <div id="product" class="product-extra">
                                
                                <div class="quantity-adder">
                                    <input name="quantity" value="1" size="2" id="input-quantity" class="form-control" type="text">
                                    <span class="add-up add-action" style="color: red" title="bấm để tăng số lượng">+</span>
                                    <span class="add-down add-action" style="color: red" title="bấm để giảm số lượng">-</span>
                                    <input name="product_id" value="59" type="hidden">
                                </div>
                               
                                <div class="product-action">
                                    <input name="product_id" value="59" type="hidden">
                                   
                                    <span class="cart">
                                        <input value="Thêm vào giỏ" id="button-cart" class="button" type="submit">
                                    </span>
                                    <!--<span class="cart">
                                        <input data-loading-text="Đang tải..." value="Thêm vào giỏ" id="button-cart" class="button" type="button">
                                    </span>
                                    
                                    -->
                                    <span class="wishlist"><a class="product-icon fa fa-heart product-icon" onclick=""></a></span>
                                    
                                    <span class="compare"><a class="product-icon fa fa-refresh" onclick=""></a></span>
                                    
                                </div>                                                      
                            </div>
                                 </form>
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                            <!-- AddThis Button END -->
                        </div>
                        <!--product status-->
                    </div>
                </div>
                <!--=========product detail=========-->

                <!--=========product description=========-->
                <div class="tabs-group box">
                    <div id="tabs" class="htabs heighlight">
                        <ul class="nav clearfix">
                            <li class="active"><a href="#tab-description" data-toggle="tab">Mô tả</a></li>
                            <li><a href="#tab-specification" data-toggle="tab">Thuộc tính</a></li>
                            <li><a href="#tab-review" data-toggle="tab">Đánh giá (0)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-description">
                            <p class="MsoNormal" style="text-align: center;">
                                <?php echo $product_info->content;?>
                                 <!--<span style="font-size: 14pt; line-height: 21.4667px; font-family: &quot;Times New Roman&quot;, serif;">Thật tuyệt vời khi vừa tan trường, tan làm&nbsp; cùng đám bạn giải khát bằng một ly kem tươi đầy mát lạnh.<o:p></o:p></span></p><p style="text-align: center;"><img src="http://skyblue.myzozo.net/image/catalog/san-pham/image005.jpg" style="width: 388.06px; height: 577.5px;"><span style="font-family: Arial, &quot;Time New Roman&quot;; font-size: 14.6667px;"><br></span></p><p class="MsoNormal" style="text-align: center;"><span style="font-size: 14pt; line-height: 21.4667px; font-family: &quot;Times New Roman&quot;, serif;">Kem là một hỗn hợp được làm từ nhiều thành phần bổ dưỡng như đường, sữa, trái cây tự nhiên,... nên cũng giúp ít cho cơ thể rất nhiều, có thể dùng để giải khát, giả ngoại hay ăn thêm sau giờ cơm, sẽ giúp bạn xua tan đi cái mệt mõi của công việc cái nắng nóng của mùa hè bạn sẽ cảm thấy thoải mái hơn.<o:p></o:p></span></p><p style="text-align: center;"><img src="http://skyblue.myzozo.net/image/catalog/san-pham/Mua_nong_nay_an_kem_gi_ngon_3.png" style="width: 393.391px; height: 715.5px;"><span style="font-family: Arial, &quot;Time New Roman&quot;; font-size: 14.6667px;"><br></span></p><p class="MsoNormal" style="text-align: center;"><span style="font-size: 14pt; line-height: 21.4667px; font-family: &quot;Times New Roman&quot;, serif;">Hãy đến với chúng tôi để giải khát cơn nóng của mùa hè nào. Let's go.</span> -->
                            </p>
                        </div>
                                <div class="tab-pane" id="tab-specification">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td colspan="2"><strong>Processor</strong></td>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td>Description</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>Clockspeed</td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab-review">
                                <!--list comment-->
                                <div class="fb-comments" data-href="https://www.facebook.com/ShipCom/?fref=ts" data-width="600" data-numposts="10"></div>
                                 <!-- <div id="review">    
                                    <p>Không có đánh giá nào cho sản phẩm này.</p>
                                </div>
                                <!--leave a comment-->
                                 <!--<p>
                                    <a href="#review-form" class="popup-with-form btn btn-sm btn-danger" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">
                                        Viết đánh giá                                    </a>
                                </p>
                                <div class="hide">
                                    <div id="review-form" class="panel review-form-width">
                                        <div class="panel-body">
                                            <form class="form-horizontal" id="form-review">
                                                <h2>Viết đánh giá</h2>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="input-name">Họ tên</label>
                                                        <input name="name" value="" id="input-name" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="input-review">Nội dung đánh giá</label>
                                                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                        <div class="help-block"><span class="text-danger">Chú ý:</span> Không sử dụng các định dạng HTML!</div>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label">Xếp hạng</label>
                                                        &nbsp;&nbsp;&nbsp; Chưa tốt&nbsp;
                                                        <input name="rating" value="1" type="radio">
                                                        &nbsp;
                                                        <input name="rating" value="2" type="radio">
                                                        &nbsp;
                                                        <input name="rating" value="3" type="radio">
                                                        &nbsp;
                                                        <input name="rating" value="4" type="radio">
                                                        &nbsp;
                                                        <input name="rating" value="5" type="radio">
                                                        &nbsp;Tốt
                                                    </div>
                                                </div>
                                                <div class="buttons clearfix">
                                                    <div class="pull-right">
                                                        <button type="button" id="button-review" data-loading-text="Đang tải..." class="btn btn-primary">Tiếp tục</button>
                                                    </div>
                                                 </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                    </div>
                </div>
                <!--=========product description=========-->

                <!--=========products related=========-->
                                                        <div class="box products-related">
                        <div class="box product-related clearfix">
                            <div class="box-heading"><span>Sản phẩm tương tự</span></div>
                            <div id="related" class="slide carousel product-grid" data-interval="0">
                                <div class="box-content carousel-inner">
                                    <div class="item active">
                                        <div class=" box-product">
                                             <?php foreach ($list as $row): ?>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 product-cols">
                         <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">
                             
                                        <div class="image">
                                            <!-- text sale-->
                                            <a class="img" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($row->name_catalog).'/'.seoname($row->name).'/'.$row->id_product) ?>" >
                                                <img src="<?php echo base_url('upload'); ?>/products/<?php echo $row->image_link; ?>" alt="<?php echo $row->name;?>" class="img-responsive">
                                            </a>
                                            <!-- zoom image-->
                                            <a href="<?php echo base_url('upload'); ?>/products/<?php echo $row->image_link; ?>" class="info-view product-zoom" style="  padding-left: 3px; padding-top: 10px;" >
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                            <!-- view-->
                                            <a class="pav-colorbox cboxElement" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($row->name_catalog).'/'.seoname($row->name).'/'.$row->id_product);?>" title="Xem">
                                                <span>Xem</span>
                                            </a>
                                        </div>
    
                                        <div class="product-meta">
                                            <!-- Ten sp -->
                                            <center><h3 class="name"><a href=""><?php echo $row->name;?> </a></h3></center>
                                            
                                            <!-- Mo ta  -->
                                            <div class="description" itemprop="description">
                                               
                                            </div>
                                            <!-- Khoi luong -->
                                            <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <center><span class="special-price"><?php echo $row->weigh; ?></span></center>
                                            </div>
                                            <!-- Gia -->
                                            <div class="cart">
                                                <center> <input value="<?php if($row->price == 0) echo 'Liên hệ'; else echo  number_format($row->price - $row->discount).' VND'; ?>" class="button" type="button"></center>
                                            </div>
                                            <!-- Giam Gia -->
                                            <div class="discount" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                                                <center><span class="special-price"><?php if($row->discount >0) {echo '<strike>'.number_format($row->price ).' VND'.'</strike>'.' -'; echo ceil(($row->discount*100)/$row->price). '%';} ?></span></center>
                                            </div>
                                            <div class="wishlist">
                                                <a data-toggle="tooltip" title="" class="fa fa-heart product-icon" data-original-title="Thêm vào yêu thích">
                                                    <span>Thêm vào yêu thích</span>
                                                </a>
                                            </div>
                                            <div class="compare">
                                                
                                                <a onclick="clicking(<?php  echo $row->id_product; ?>);" data-toggle="tooltip" title="" class="fa fa-shopping-cart" data-original-title="Thêm vào giỏ hàng">
                                                    <span>Thêm vào giỏ hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                <!--=========products related=========-->
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1274686669321313";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<script type="text/javascript">
//<=!=[=C=D=A=T=A=[
if (top.location != self.location)
{top.location = self.location}
var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-18506635-11"]);
_gaq.push(["_setDomainName",".nl-mus.blogspot.com"]);_gaq.push(["_trackPageview"]);
(function(){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.
src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";
var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();
//]=]=>
</script>
</section>
 <script type="text/javascript">

        var images = document.getElementById("divId")
                             .getElementsByTagName("img");

        for (var i = 0; i < images.length; i++)
        {
            images[i].onmouseover = function ()
            {
                this.style.cursor = 'hand';
                this.style.borderColor = 'red';
            }
            images[i].onmouseout = function ()
            {
                this.style.cursor = 'pointer';
                this.style.borderColor = 'grey';
            }
        }

        function changeImageOnClick(event)
        {
            event = event || window.event;
            var targetElement = event.target || event.srcElement;

            if (targetElement.tagName == "IMG")
            {
                mainImage.src = targetElement.getAttribute("src");
            }
        }
        </script>