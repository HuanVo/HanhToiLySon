<aside id="sidebar-left" class="col-sm-2">
        <div id="column-left" class="hidden-xs sidebar">
                              <div class="box category">
        <div class="box-heading"><span>Danh mục</span></div>

        <div class="box-content">
            <ul class="box-category list">
                 <?php  foreach ($catalog_list as $row): ?>
                                    <li class="">
                                                    <a href="<?php echo base_url('san-pham/danh-muc/'.seoname($row->name).'/'.$row->id_catalog); ?>" class=""><?php echo'<b >'. $row->name.'</b>'; ?></a>
                                    </li>
                                   
                 <?php endforeach; ?>
            </ul>
        </div>
    </div>
                               <div class="box filter">
    <div class="box-heading">
        <span>Lọc</span>
        <em class="line"></em>
    </div>
    <div class="box-content">
        <ul class="box-filter clearfix">
                            <li>
                    <span id="filter-group3">Giá Bán</span>
                    <ul class="clearfix">
                                                    <div id="filter-group3">
                                                                    <li>
                                        <input name="filter[]" value="14" id="filter14" type="checkbox">
                                        <label for="filter14">&gt;100.000đ</label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group3">
                                                                    <li>
                                        <input name="filter[]" value="12" id="filter12" type="checkbox">
                                        <label for="filter12">0 - 50.000đ </label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group3">
                                                                    <li>
                                        <input name="filter[]" value="13" id="filter13" type="checkbox">
                                        <label for="filter13">50.000đ - 100.000đ</label>
                                    </li>
                                                            </div>
                                            </ul>
                </li>
                            <li>
                    <span id="filter-group4">Màu Sắc</span>
                    <ul class="clearfix">
                                                    <div id="filter-group4">
                                                                    <li>
                                        <input name="filter[]" value="17" id="filter17" type="checkbox">
                                        <label for="filter17">Vàng</label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group4">
                                                                    <li>
                                        <input name="filter[]" value="15" id="filter15" type="checkbox">
                                        <label for="filter15">Xanh </label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group4">
                                                                    <li>
                                        <input name="filter[]" value="16" id="filter16" type="checkbox">
                                        <label for="filter16">Đỏ</label>
                                    </li>
                                                            </div>
                                            </ul>
                </li>
                    </ul>
        <a id="button-filter" class="button btn btn-theme-default">Lọc Tìm kiếm</a>
    </div>
</div>                      
    
<script type="text/javascript">&lt;!--
    $('#banner1473771728').owlCarousel({
        items: 6,
        autoPlay: 3000,
        singleItem: true,
        navigation: false,
        pagination: false,
        transitionStyle: 'fade'
    });
    --&gt;</script>
                    </div>
    </aside>