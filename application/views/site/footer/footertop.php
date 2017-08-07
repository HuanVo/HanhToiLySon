<div class="container">
                           <div class="row">
                               <div class="col-lg-3 col-md-3">
                                   <div class="box pav-custom">
                                       <div class="box-heading"><span>Giới thiệu</span></div>
                                       <div class="box-content">
                                           <div class="about-us">
                                               <p><img alt="logo" src="<?php echo base_url('upload')?>/logo/logo.png"></p>
                                               <p>Nơi bạn được thưởng thức những món ăn ngon nhất.</p>
                                           </div>
                                           <div class="social">
                                               <ul>
                                                    <li>
                                                           <a class="iconbox instagram" data-original-title="instagram" data-placement="top" data-toggle="tooltip" href="" title="">
                                                               <i class="fa fa-instagram">&nbsp;</i>
                                                           </a>
                                                    </li>
                                                    <li>
                                                        <a class="iconbox youtube" data-original-title="youtube" data-placement="top" data-toggle="tooltip" href="" title="">
                                                            <i class="fa fa-youtube">&nbsp;</i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="iconbox facebook" data-original-title="facebook" data-placement="top" data-toggle="tooltip" href="" title="">
                                                            <i class="fa fa-facebook">&nbsp;</i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="iconbox google-plus" data-original-title="google-plus" data-placement="top" data-toggle="tooltip" href="" title="">
                                                           <i class="fa fa-google-plus">&nbsp;</i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="iconbox twitter" data-original-title="twitter" data-placement="top" data-toggle="tooltip" href="" title="">
                                                             <i class="fa fa-twitter">&nbsp;</i>
                                                        </a>
                                                    </li>
                                                </ul>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-3 col-md-3">
                                   <div class="box gallery">
                                       <!--products-->
                                       <div class="box-heading"><span>Sản phẩm Mới nhất</span></div>
                                       <div class="box-content">
                                           <div class="banner-im">
                                               <?php foreach ($product_news as $new_pro): {
                                               } ?>
                                                <!--<a href="" class="group" title="">-->
                                                
                                                <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($new_pro->name_catalog).'/'.seoname($new_pro->name).'/'.$new_pro->id_product) ?>"  title="&lt;a <?php echo base_url('chi-tiet-san-pham/'.seoname($new_pro->name_catalog).'/'.seoname($new_pro->name).'/'.$new_pro->id_product) ?>' style='color:#c83a3a;'&gt;<?php echo $new_pro->name; ?>&lt;/a&gt;">
                                                    <img alt="<?php echo $new_pro->name; ?>" src="<?php echo base_url('upload'); ?>/products/<?php echo $new_pro->image_link; ?>" title="<?php echo $new_pro->name; ?>">
                                                </a>
                                                
                                                <?php endforeach; ?>
                                                
                                            </div>
                                           <div style=" text-align: right"> <a href="#">Xem thêm...</a></div>
                                       </div>
                                       <script type="text/javascript">
                                           $(document).ready(function () {
                                               $('.banner-img').magnificPopup({
                                                   type: 'image',
                                                   delegate: 'a',
                                                   gallery: {
                                                       enabled: true
                                                   }
                                               });
                                           });
                                       </script>
                                   </div>
                               </div>
                               <div class="col-lg-3 col-md-3">
                                   <div class="box pav-block bloglatest">
                                       <!--news-->
                                                               <div class="box-heading"><span>Tin tức</span></div>
                                                                   <div class="pavblog-latest clearfix">
                                                                                                                           <div class="row">

                                                                                       <div class="col-lg-12 col-md-12 pavblock">
                                                       <div class="blog-item">
                                                           <div class="blog-body clearfix">
                                                               <div class="image clearfix">
                                                                                                                           <img src="http://foodstore.myzozo.net/image/cache/catalog/tin-tuc/tin-tuc/img-blog2-70x27.jpg" title="Làm thạch trái cây cho ngày hè" alt="Làm thạch trái cây cho ngày hè" class="img-responsive">
                                                                                                                   </div>
                                                               <div class="group-blog">
                                                                   <div class="blog-title">
                                                                       <a href="http://foodstore.myzozo.net/lam-thach-trai-cay-cho-ngay-he" title="Làm thạch trái cây cho ngày hè">Làm thạch trái cây cho ngày hè</a>
                                                                   </div>
                                                                   <div class="description">
                                                                       <p>
                                                                                                                                       ...
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                                                           </div>
                                                                                                                                                               <div class="row">

                                                                                       <div class="col-lg-12 col-md-12 pavblock">
                                                       <div class="blog-item">
                                                           <div class="blog-body clearfix">
                                                               <div class="image clearfix">
                                                                                                                           <img src="http://foodstore.myzozo.net/image/cache/catalog/tin-tuc/tin-tuc/img-blog3-70x27.jpg" title="Những loại trái cây làm dịu cơn nóng của mùa hè!" alt="Những loại trái cây làm dịu cơn nóng của mùa hè!" class="img-responsive">
                                                                                                                   </div>
                                                               <div class="group-blog">
                                                                   <div class="blog-title">
                                                                       <a href="http://foodstore.myzozo.net/nhung-loai-trai-cay-lam-diu-con-nong-cua-mua-he" title="Những loại trái cây làm dịu cơn nóng của mùa hè!">Những loại trái cây làm dịu cơn nóng của mùa hè!</a>
                                                                   </div>
                                                                   <div class="description">
                                                                       <p>
                                                                                                                                       ...
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                                                           </div>
                                                                                                                                                               <div class="row">

                                                                                       <div class="col-lg-12 col-md-12 pavblock">
                                                       <div class="blog-item">
                                                           <div class="blog-body clearfix">
                                                               <div class="image clearfix">
                                                                                                                           <img src="http://foodstore.myzozo.net/image/cache/catalog/tin-tuc/tin-tuc/img-blog1-70x27.jpg" title="Chọn thực phẩm sạch, an toàn cho người tiêu dùng." alt="Chọn thực phẩm sạch, an toàn cho người tiêu dùng." class="img-responsive">
                                                                                                                   </div>
                                                               <div class="group-blog">
                                                                   <div class="blog-title">
                                                                       <a href="http://foodstore.myzozo.net/chon-thuc-pham-sach-an-toan-cho-nguoi-tieu-dung" title="Chọn thực phẩm sạch, an toàn cho người tiêu dùng.">Chọn thực phẩm sạch, an toàn cho người tiêu dùng.</a>
                                                                   </div>
                                                                   <div class="description">
                                                                       <p>
                                                                                                                                       ...
                                                                       </p>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>

                                                                                           </div>
                                                                                                               </div>
                                                           </div>
                               </div>
                               <div class="col-lg-3 col-md-3">
                                   <div class="box pavtwitter">
                                     <div class="box-heading"><span>Facebook</span></div>
                                       <div class="box-content">
                                           <div id="pav-twitter1341207061" class="pav-twitter">
                                               <!--facebook-->
                                               <div class="fb-page" data-href="https://www.facebook.com/ShipCom/?fref=ts" data-tabs="timeline" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Soft.Skill.4U/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Soft.Skill.4U/">Soft Skills 4U</a></blockquote></div>
                                                 </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1274686669321313";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>