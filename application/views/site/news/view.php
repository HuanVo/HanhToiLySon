<section id="sidebar-main" class="col-sm-8">
    <div id="content">
        <section id="blog-info" class="pav-blog wrapper blog-wrapper">
            <header><h3 class="blog-title"><?php echo $news_info->name; ?></h3></header>
            <section class="content">
                <section class="blog-meta">
                    <span class="created"><span><i class="fa fa-calendar"></i> Đăng vào: <?php echo $news_info->creates; ?></span></span>
                    <span class="comment_count"><span><i class="fa fa-comment"></i> Bình luận:</span> <span class="t-color">0</span></span>
                </section>
                <section class="description">
                    <?php
                    echo $news_info->content;
                    ?>
                </section>
             </section>

<!--                                            <section class="blog-tags">
                                                    <b>Từ khóa:</b>
                                                            <a href="http://foodstore.myzozo.net/index.php?route=news/search&amp;tag=tag1" title="tag1">tag1</a>
                                                            <a href="http://foodstore.myzozo.net/index.php?route=news/search&amp;tag=tag2" title="tag2">tag2</a>
                                                            <a href="http://foodstore.myzozo.net/index.php?route=news/search&amp;tag=tag3" title="tag3">tag3</a>
                                                            <a href="http://foodstore.myzozo.net/index.php?route=news/search&amp;tag=tag4" title="tag4">tag4</a>
                                                    </section>-->
                    
                    <section class="blog-social clearfix">
                        <div class="social-wrap">
                            <div class="social-heading pull-left">
                                <b>Like</b><br/>
                            </div>
<!--                             Twitter Button 
                            <div class="itemTwitterButton pull-left">
                                <iframe id="twitter-widget-0" scrolling="no" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 61px; height: 20px;" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.9384f3649360e38a7002082a80b92414.vi.html#dnt=false&amp;id=twitter-widget-0&amp;lang=vi&amp;original_referer=http%3A%2F%2Ffoodstore.myzozo.net%2Flam-thach-trai-cay-cho-ngay-he&amp;size=m&amp;text=L%C3%A0m%20th%E1%BA%A1ch%20tr%C3%A1i%20c%C3%A2y%20cho%20ng%C3%A0y%20h%C3%A8&amp;time=1502472151198&amp;type=share&amp;url=http%3A%2F%2Ffoodstore.myzozo.net%2Flam-thach-trai-cay-cho-ngay-he" frameborder="0"></iframe>
                                <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
                            </div>-->
                            <!-- Facebook Button -->
                            <div class="itemFacebookButton pull-left">
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1274686669321313";
                                  fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                        </script>
                                
                                <div class="fb-like" data-href="https://www.facebook.com/ShipCom/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </div>
                            <!-- Google +1 Button -->
<!--                            <div class="itemGooglePlusOneButton pull-left">
                                <div style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent none repeat scroll 0% 0%; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 38px; height: 24px;" id="___plusone_0"><iframe ng-non-bindable="" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 38px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" id="I0_1502472151655" name="I0_1502472151655" src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=inline&amp;width=120&amp;hl=vi&amp;origin=http%3A%2F%2Ffoodstore.myzozo.net&amp;url=http%3A%2F%2Ffoodstore.myzozo.net%2Flam-thach-trai-cay-cho-ngay-he&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.yX6k5q3R9Hk.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPL4xkbg-6cmIKxRt6Dwb0efcCOdQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1502472151655&amp;parent=http%3A%2F%2Ffoodstore.myzozo.net&amp;pfname=&amp;rpctoken=41620293" data-gapiattached="true" title="G+" width="100%" frameborder="0"></iframe></div>
                                <script type="text/javascript">
                                    (function () {
                                        window.___gcfg = {lang: 'vi'}; // Define button default language here
                                        var po = document.createElement('script');
                                        po.type = 'text/javascript';
                                        po.async = true;
                                        po.src = 'https://apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                            </div>-->
                        </div>
                    </section>

                    <section class="blog-bottom row">
                            <div class="pavcol2">
                                <h4>Tin liên quan</h4>
                                <ul>
                                    <?php foreach ($list as $rows): ?>
                                    <li>
                                        <a href="<?php echo base_url('chi-tiet-tin-tuc/'.seoname($rows->name_categories).'/'.seoname($rows->name).'/'.$rows->id) ?>"><?php echo $rows->name; ?></a>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                                            </section>

                    <div class="pav-comment">
                        <!--list comments-->
                        <div id="comment">    <p>Không có bình luận nào cho bài viết.</p>
</div>

                        <h4>Viết bình luận</h4>
                                                    <form class="form-horizontal" id="form-comment">
                                <fieldset>
                                    
                                    <div class="fb-comments" data-href="https://www.facebook.com/ShipCom" data-numposts="5"></div>
<!--                                    <div class="message" style="display:none"></div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-name">Họ &amp; Tên đệm:</label>
                                            <div class="col-sm-8">
                                                <input name="name" value="" id="input-name" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-email">Email:</label>
                                            <div class="col-sm-8">
                                                <input name="email" value="" id="input-email" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label class="col-sm-2 control-label" for="input-comment">Nội dung bình luận:</label>
                                            <div class="col-sm-8">
                                                <textarea name="text" rows="5" id="input-comment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                                                                <div class="buttons-wrap right">
                                            <button type="button" id="button-comment" data-loading-text="Đang tải..." class="btn btn-submit btn-theme-primary">
                                                <span>Gửi</span>
                                            </button>
                                        </div>-->
                            </fieldset>
                        </form>
                    </div>
                </section>

                            </div>
        </section>