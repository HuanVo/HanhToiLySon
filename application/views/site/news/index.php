
<section id="sidebar-main" class="col-sm-8">
    <div id="content">
        <header class="pav-header">
            <h3>Tin Tức</h3>
            <a class="rss-wrapper" href="javascript:void(0)"><span class="fa fa-feed"></span></a>
        </header>
        <section class="pav-filter-blogs wrapper blog-wrapper">
            <div class="pav-blogs">
                <div class="leading-blogs blog-list-item">
                    <div class="row">
                        <?php foreach ($news_pp as $row):?>
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="blog-item" >
                                <figure class="blog-body image" >
                                    <center> <img src="<?php echo base_url('upload').'/tin-tuc/'; echo $row -> image;?>" title="<?php echo $row->name; ?>" class="img-responsive" alt="<?php echo $row->name; ?>"></center>
                                </figure>
                                <div class="row">
                                    <div class="blog-meta col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <ul>
                                            <li class="created">
                                                <span class="fa fa-clock-o"> Ngày đăng: </span>
                                                <span class="day"><?php echo $row->creates;?></span>
                                            </li>
                                            <li class="hits">
                                                <span><i class="fa fa-eye"></i> Lượt xem: </span>
                                                <span class="t-color"><?php echo $row->view;?></span>
                                            </li>
<!--                                            <li class="comment_count">
                                                <span><i class="fa fa-comment"></i> Bình luận: </span>
                                                <span class="t-color">0 </span>
                                            </li>-->
                                         </ul>
                                    </div>
                                    <div class="blog-body col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="blog-header clearfix">
                                            <h3 class="blog-title">
                                                <a href="<?php echo base_url('chi-tiet-tin-tuc/'.seoname($row->name_categories).'/'.seoname($row->name).'/'.$row->id) ?>" title="<?php echo $row->name; ?>">
                                                    <?php echo $row->name; ?>                                                             </a>
                                                </h3>
                                        </div>
                                        <section class="description">
                                           
                                          
                                        </section>
                                        <div class="blog-readmore">
                                            <a href="<?php echo base_url('chi-tiet-tin-tuc/'.seoname($row->name_categories).'/'.seoname($row->name).'/'.$row->id); ?>" class="button" title="Đọc thêm">Đọc thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
<!--                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="blog-item">
                                <figure class="blog-body image">
                                    <img src="http://foodstore.myzozo.net/image/cache/catalog/tin-tuc/tin-tuc/img-blog2-900x350.jpg" title="Làm thạch trái cây cho ngày hè" class="img-responsive" alt="Làm thạch trái cây cho ngày hè">
                                </figure>
                                <div class="row">
                                    <div class="blog-meta col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <ul>
                                            <li class="created">
                                                <span class="fa fa-clock-o"> Ngày đăng: </span>
                                                <span class="day">11/03/2017</span>
                                            </li>
                                            <li class="hits">
                                                <span><i class="fa fa-eye"></i> Lượt xem: </span>
                                                <span class="t-color">590</span>
                                            </li>
                                            <li class="comment_count">
                                                <span><i class="fa fa-comment"></i> Bình luận: </span>
                                                <span class="t-color">0 </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-body col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                        <div class="blog-header clearfix">
                                            <h3 class="blog-title">
                                                <a href="http://foodstore.myzozo.net/lam-thach-trai-cay-cho-ngay-he" title="Làm thạch trái cây cho ngày hè">
                                                Làm thạch trái cây cho ngày hè                                                                </a>
                                            </h3>
                                        </div>
                                        <section class="description">Thạch hoa quả&nbsp;Giống như một viên kim cương nhỏ, lớp thạch trong veo bên ngoài bao phủ những miếng hoa quả tươi ngon bên trong luôn có một sức hấp…                                                        </section>
                                            <div class="blog-readmore">
                                                <a href="http://foodstore.myzozo.net/lam-thach-trai-cay-cho-ngay-he" class="button" title="Đọc thêm">Đọc thêm</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>       -->
                    </div>
                </div>
                <div class="pav-pagination clearfix">
                </div>
            </div>
        </section>        
    </div>
</section>