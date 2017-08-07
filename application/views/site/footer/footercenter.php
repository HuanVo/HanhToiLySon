<div class="container">
                           <div class="row">
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box">
                                   <div class="box pav-custom column">
                                       <div class="box-heading"><span>Liên hệ</span></div>
                                       <ul>
                                           <li>
                                               <span class="iconbox button"><i class="fa fa-map-marker">&nbsp;</i></span>
                                               <span>Địa chỉ: Cầu Giấy, P Dịch Vọng, Q Cầu Giấy.  </span>
                                           </li>
                                           <li>
                                               <span class="iconbox button"><i class="fa fa-mobile-phone">&nbsp;</i></span>
                                               <span>Điện thoại: 0909 999 999</span>
                                           </li>
                                           <li>
                                               <span class="iconbox button"><i class="fa fa-envelope-o">&nbsp;</i></span>
                                               <span>Email: contact@zozo.vn</span>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                               <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 box column">
                                   <div class="box-heading"><span>Thông tin</span></div>
                                   <ul class="list-unstyled">
                                                                   <li><a href="http://foodstore.myzozo.net/ve-chung-toi">Về Chúng Tôi</a></li>
                                                                   <li><a href="http://foodstore.myzozo.net/thong-tin-giao-hang">Thông Tin Giao Hàng</a></li>
                                                                   <li><a href="http://foodstore.myzozo.net/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                                                                   <li><a href="http://foodstore.myzozo.net/dieu-khoan-dich-vu">Điều khoản dịch vụ</a></li>
                                                           </ul>
                               </div>
                               <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 box column">
                                   <div class="box-heading"><span>Dịch vụ</span></div>
                                   <ul class="list-unstyled">
                                       <li><a href="http://foodstore.myzozo.net/Lien-he">Liên hệ</a></li>
                                       <li><a href="http://foodstore.myzozo.net/doi-tra-hang">Đổi / Trả hàng</a></li>
                                       <li><a href="http://foodstore.myzozo.net/index.php?route=information/sitemap">Bản đồ</a></li>
                                       <li><a href="http://foodstore.myzozo.net/phieu-qua-tang">Phiếu Quà tặng</a></li>
                                   </ul>
                               </div>
                               <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 box column">
                                   <div class="box-heading"><span>Thông tin thêm</span></div>
                                   <ul class="list-unstyled">
                                       <li><a href="http://foodstore.myzozo.net/thuong-hieu">Thương hiệu</a></li>
                                       <li><a href="http://foodstore.myzozo.net/phieu-qua-tang">Phiếu Quà tặng</a></li>
                                       <li><a href="http://foodstore.myzozo.net/index.php?route=affiliate/account">Cộng tác viên</a></li>
                                       <li><a href="http://foodstore.myzozo.net/khuyen-mai-dac-biet">Sản phẩm Đặc biệt</a></li>
                                   </ul>
                               </div>
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box column">
                                                       <div class="pav-newsletter newsletter_block" id="newsletter_1062245059">
                                       <div class="title_block">Đăng ký nhận tin</div>
                                       <div class="description">Đăng ký email để nhanh chóng nhận được các thông báo về khuyến mại, chương trình giảm giá của chúng tôi</div>
                                       <div class="block_content">
                                           <form id="formNewLestter1062245059" method="post" class="formNewLestter">
                                               <input placeholder="Email..." class="form-control inputNew" size="18" name="email" id="email" type="text">
                                               <button type="submit" name="submitNewsletter" class="button_mini btn btn-theme-primary" value="Đăng ký!">Đăng ký!</button>

                                               <input value="1" name="action" type="hidden">
                                               <div class="valid space-top-10"></div>
                                           </form>
                                       </div>
                                   </div>
                                   <script type="text/javascript">&lt;!--
                                       $(document).ready(function () {
                                           var id = 'newsletter_1062245059';
                                           $('#' + id + ' .box-heading').bind('click', function () {
                                               $('#' + id).toggleClass('active');
                                           });

                                           $('#formNewLestter1062245059').on('submit', function () {
                                               var email = $('#formNewLestter1062245059 .inputNew').val();

                                               $(".success_inline, .warning_inline, .error").remove();
                                               if (!isValidEmailAddress(email)) {
                                                   $('.valid').html("&lt;div class=\"error alert alert-danger\"&gt;Email không hợp lệ&lt;button type=\"button\" class=\"close\" data-dismiss=\"alert\"&gt;×&lt;/button&gt;&lt;/div&gt;&lt;/div&gt;");
                                                   $('.email').focus();
                                                   return false;
                                               }

                                               var url = "index.php?route=tool/newsletter";
                                               $.ajax({
                                                   type: "post",
                                                   url: url,
                                                   data: $("#formNewLestter1062245059").serialize(),
                                                   dataType: 'json',
                                                   success: function (json) {
                                                       $(".success_inline, .warning_inline, .error").remove();
                                                       if (json['error']) {
                                                           $('.valid').html("&lt;div class=\"warning_inline alert alert-danger\"&gt;" + json['error'] + "&lt;button type=\"button\" class=\"close\" data-dismiss=\"alert\"&gt;×&lt;/button&gt;&lt;/div&gt;");
                                                       }
                                                       if (json['success']) {
                                                           $('.valid').html("&lt;div class=\"success_inline alert alert-success\"&gt;" + json['success'] + "&lt;button type=\"button\" class=\"close\" data-dismiss=\"alert\"&gt;×&lt;/button&gt;&lt;/div&gt;");
                                                       }
                                                   }
                                               });
                                               return false;
                                           }); //end submmit
                                       }); //end document

                                       function isValidEmailAddress(emailAddress) {
                                           var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                                           return pattern.test(emailAddress);
                                       }
                                       --&gt;
                                   </script>
                               </div>
                           </div>
                       </div>