<?php
// load ra file head
$this->load->view('admin/news/head', $this->data);
?>
<div class="line"></div>
<div class="wrapper">
    <?php $this->load->view('admin/message', $this->data); ?>
    <div class="widget">
        <div class="title">
            <h6>Danh sách tin tức</h6>
            <div class="num f12">Tổng số: <b><?php echo $total_rows; ?></b></div>
        </div>
        <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
            <thead class="filter"><tr><td colspan="8">
                    <form method="get" action="" class="list_filter form">
                        <table width="80%" cellspacing="0" cellpadding="0"><tbody>
                            <tr>
                                <td style="width:40px;" class="label"><label for="filter_id">Mã số</label></td>
                                <td class="item"><input type="text" style="width:55px;" id="filter_id" value="<?php echo $this->input->get('id'); ?>" name="id"></td>
                                <td style="width:40px;" class="label"><label for="filter_id">Tên</label></td>
                                <td style="width:155px;" class="item"><input type="text" style="width:155px;" id="filter_iname" value="<?php echo $this->input->get('name'); ?>" name="name"></td>
                                <td style="width:60px;" class="label"><label for="filter_status">Thể loại</label></td>
                                <td class="item">
                                    <select name="catalog">
                                        <option value=""></option>
                                        <!-- kiem tra danh muc co danh muc con hay khong -->
                                    <?php foreach ($catalog_list as $row): ?>
                                            <option value="<?php echo $row->id; ?>" label="<?php echo $row->name; ?>">
                                                <?php echo $row->name; ?>
                                            </option>
                                    <?php endforeach; ?>
                                    </select>
                                </td>

                                <td style="width:150px">
                                    <input type="submit" value="Lọc" class="button blueB">
                                    <input type="reset" onclick="window.location.href = '<?php echo admin_url('news'); ?>'; " value="Reset" class="basic">
                                </td>
                            </tr>
                        </tbody>
                     </table>
                    </form>
                </td>
                </tr>
            </thead>
            <thead>
            <tr>
                <td style="width:10px;"><img src="<?php echo public_url(); ?>/admin/images/icons/tableArrows.png" /></td>

                <td style="width: 100px;">Tên tin tức</td>
                <td style="width: 100px;">Danh mục</td>
                <td style="width: 100px;">Nội dung</td>
                <td style="width: 50px;">Ngày tạo</td>
                <td style="width: 50px;">Hình ảnh</td>
                <td style="width: 20px;">Lượt xem</td>
                <td style="width:100px;">Chức năng</td>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="8">
                    <div class="list_action itemActions">
                        <a href="#submit" id="submit" class="button blueB" url="<?php echo admin_url('news/delete_all'); ?>">
                            <span style='color:white;'>Xóa hết</span>
                        </a>
                    </div>

                    <div class='pagination'>
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </td>
            </tr>
            </tfoot>

            <tbody>
            <?php foreach ($list as $row): ?>
                <tr class="row_<?php echo $row->id; ?>">
                    <td><input type="checkbox" name="id[]" value="<?php echo $row->id; ?>" /></td>
                    <td ><?php echo $row->name; ?></td>
                    <td style="width: 200px;"><?php echo $row->name_categories; ?></td>
                    <td> Xem chi tiết... </td>
                    <td><?php echo $row->creates; ?></td>
                    <td style="text-align: center;"><img src="<?php echo  base_url('upload/tin-tuc/'.$row->image); ?>" style="width: 100px; height: 70px;"></td>
                    <td><?php echo $row->view; ?></td>
                    <td class="option">
                        <a href="<?php echo admin_url('news/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                            <img src="<?php echo public_url(); ?>/admin/images/icons/color/edit.png" />
                        </a>
                        <a href="<?php echo admin_url('news/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                            <img src="<?php echo public_url(); ?>/admin/images/icons/color/delete.png" />
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>
<div class="clear mt30">
    
</div>
