<?php
// load ra file head
$this->load->view('admin/news/head', $this->data);
?>
<div class="line">
    
</div>
<div class="wrapper">
    <!-- Form -->
    <form enctype="multipart/form-data" method="post" action="<?php echo admin_url('news/add'); ?>" id="form" class="form">
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img class="titleIcon" src="<?php echo public_url(); ?>/admin/images/icons/dark/add.png">
                    <h6>Thêm mới Sản phẩm</h6>
                </div>
                <ul class="tabs">
                    <li><a href="#tab1">Nhập thông tin vào bên dưới</a></li>
<!--                <li><a href="#tab2">SEO Onpage</a></li>
                    <li><a href="#tab2">Bài viết</a></li>
-->

                </ul>

                <div class="tab_container">
                    <div class="tab_content pd0" id="tab1">
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Tên bài viết<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('name'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft">Hình ảnh đại diện:<span class="req">*</span></label>
                            <div class="formRight">
                                <input type="file" name="image" id="image">

                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_cat" class="formLeft">Danh mục bài viết:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="catalog">
                                    <option value="">Chọn danh mục</option>
                                    <!-- kiem tra danh muc co danh muc con hay khong -->
                                    <?php foreach ($catalog_list as $row): ?>
                                                <option value="<?php echo $row->id; ?>">
                                                    <?php echo $row->name; ?>
                                                </option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                                <div class="clear error" name="cat_error"><?php echo form_error('catalog'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_cat" class="formLeft">Tin này sẽ:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="status">
                                    <option value="0" >
                                                    Ẩn trên website
                                                </option>
                                                <option value="1" selected>
                                                    Hiện trên website
                                                </option>
                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                                <div class="clear error" name="cat_error"><?php echo form_error('catalog'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="formRow">
                            <label for="param_sale" class="formLeft">Nội dung:</label>
                            <div class="formRight">
                                 <textarea class="editor" id="param_content" name="content"></textarea>
                                <script>
                                    CKEDITOR.replace( 'param_content',{
                                        filebrowserBrowseUrl : $('base').attr('href')+ 'public/ckfinder/ckfinder.html',
                                        filebrowserImageBrowseUrl: $('base').attr('href')+ 'public/ckfinder/ckfinder.html?type=Images',
                                        filebrowserFlashBrowseUrl: $('base').attr('href')+ 'public/ckfinder/ckfinder.html?type=Flash',
                                        filebrowserUploadUrl: $('base').attr('href')+ 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                        filebrowserImageUploadUrl: $('base').attr('href')+ 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl: $('base').attr('href')+ 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                        }
                                    );
                                </script>

                               <div class="clear error" name="content_error"><?php echo form_error('content'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow hide"></div>
                    </div>
                </div><!-- End tab_container-->
                <div class="formSubmit">
                    <input type="submit" class="redB" value="Thêm mới">
                    <input type="reset" class="basic" value="Hủy bỏ">
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
    </form>
</div>