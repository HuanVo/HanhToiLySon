<?php
$price_from = $this->input->get('price_from');
$price_to = $this->input->get('price_to');

?>

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
                         <form name="search_price" action="<?php echo base_url('product/search_price')?>" method="get" enctype="multipart/form-data">
                        <div id="filter-group3">
                            <li>
                                Từ <br/>
                                <select name="price_from" style="width: 90%;"> 
                                    <?php for ($i=0;$i <= 5000000;$i = $i + 200000): ?>
                                        <option <?php echo ($price_from == $i) ? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo number_format($i); ?> VND</option>
                                    <?php endfor; ?>
                                </select>
                            </li>
                        </div>
                        <div id="filter-group3">
                            <li>
                                Đến<br/>
                                <select name="price_to" style="width: 90%;">
                                    <?php for ($i=0;$i <= 5000000;$i = $i + 200000): ?>
                                        <option <?php echo ($price_to == $i) ? 'selected' : ''; ?> value="<?php echo $i; ?>"><?php echo number_format($i); ?> VND</option>
                                    <?php endfor; ?>
                                </select>
                            </li>
                        </div>
                             <br/>
                             <button class="button btn btn-theme-default" type="submit" style="float: left;">Lọc</button>
                         </form>
                    </ul>
                </li>
            </ul>
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