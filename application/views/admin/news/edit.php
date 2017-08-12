<?php
// load ra file head
$this->load->view('admin/news/head', $this->data);
?>
<div class="line">
    
</div>
<div class="wrapper">
    <!-- Form -->
    <form enctype="multipart/form-data" method="post" id="form" class="form">
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img class="titleIcon" src="<?php echo public_url(); ?>/admin/images/icons/dark/add.png">
                    <h6>Sửa Sản phẩm</h6>
                </div>
                <ul class="tabs">
                    <li><a href="#tab1">Nhập thông tin vào bên dưới</a></li>
                </ul>
                <div class="tab_container">
                    <div class="tab_content pd0" id="tab1">
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Tên bài viết<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" name="name" value="<?php echo $new_info->name; ?>"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"><?php echo form_error('name'); ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                            <div class="formRight">
                                <input type="file" name="image" id="image" value="<?php echo $new_info->image; ?>">
                                <img src="<?php echo base_url('upload/tin-tuc/'.$new_info->image); ?>" style="width: 100px; height: 70px;">

                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label for="param_cat" class="formLeft">Danh mục bài viết:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="catalog">
                                    <option value="">---Chọn danh mục---</option>
                                    <?php foreach ($categories_list as $ro):?>
                                    <option value="<?php echo $ro->id; ?>" <?php if($ro->id == $new_info->id_categories) echo 'selected'?> >
                                                    <?php echo $ro->name; ?>
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
                                    <option value="0" <?php if($new_info->status === '0') echo 'selected'; ?> >
                                                    Ẩn trên website
                                                </option>
                                                <option value="1" <?php if($new_info->status === '1') echo 'selected'; ?>>
                                                    Hiện trên website
                                                </option>
                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="formRow">
                            <label for="param_sale" class="formLeft">Nội dung:</label>
                            <div class="formRight">
                                 <textarea class="editor" id="param_content" name="content"> <?php echo $new_info->content; ?></textarea>
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
                    <input type="submit" class="redB" value="Sửa bài">
                    <input type="reset" class="basic" value="Hủy bỏ">
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
    </form>
</div>