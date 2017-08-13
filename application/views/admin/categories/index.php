<?php
// load ra file head
$this->load->view('admin/categories/head', $this->data);
?>
<div class="line"></div>
<div class="wrapper">
    <?php $this->load->view('admin/message', $this->data); ?>
    <div class="widget">
        <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
            <thead>
            <tr>
                <td style="width:10px;"><img src="<?php echo public_url(); ?>/admin/images/icons/tableArrows.png" /></td>

                <td style="width: 100px;">Tên danh muc</td>
                <td style="width:100px;">Mô tả</td>
                <td style="width:100px;">Chức năng</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="8">
                    <div class="list_action itemActions">
                        <a href="#submit" id="submit" class="button blueB" url="<?php echo admin_url('categories/delete_all'); ?>">
                            <span style='color:white;'>Xóa hết</span>
                        </a>
                    </div>
                    <div class='pagination'>
                    </div>
                </td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr class="row_<?php echo $row->id; ?>">
                    <td><input type="checkbox" name="id[]" value="<?php echo $row->id; ?>" /></td>
                    <td ><?php echo $row->name; ?>
                    </td>
                    <td ><?php echo $row->decription; ?>
                    </td>
                    <td class="option">
                        <a href="<?php echo admin_url('categories/edit/'.$row->id); ?>" title="Chỉnh sửa" class="tipS ">
                            <img src="<?php echo public_url(); ?>/admin/images/icons/color/edit.png" />
                        </a>
                        <a href="<?php echo admin_url('categories/delete/'.$row->id); ?>" title="Xóa" class="tipS verify_action" >
                            <img src="<?php echo public_url(); ?>/admin/images/icons/color/delete.png" />
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="clear mt30"></div>
