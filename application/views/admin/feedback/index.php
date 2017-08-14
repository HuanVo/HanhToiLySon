<?php
// load ra file head
$this->load->view('admin/feedback/head', $this->data);
?>
<div class="line"></div>
<div class="wrapper">
    <?php $this->load->view('admin/message', $this->data); ?>
    <div class="widget">
        <div class="title">
            <h6>Danh sách danh mục giao dịch</h6>
            <div class="num f12">Tổng số: <b><?php echo $total_rows; ?></b></div>
        </div>

        <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
            <thead class="filter"><tr><td colspan="8">
                    <form method="get" action="" class="list_filter form">
                        <table width="80%" cellspacing="0" cellpadding="0"><tbody>

                            <tr>
                                <td style="width:40px;" class="label"><label for="filter_id">Mã số</label></td>
                                <td class="item"><input type="text" style="width:55px;" id="filter_id" value="<?php echo $this->input->get('id'); ?>" name="id"></td>
                                <td style="width:150px">
                                    <input type="submit" value="Lọc" class="button blueB">
                                    <input type="reset" onclick="window.location.href = '<?php echo admin_url('feedback'); ?>'; " value="Reset" class="basic">
                                </td>

                            </tr>
                            </tbody></table>
                    </form>
                </td></tr>
            </thead>
            <thead>
            <tr>
                <td style="width:10px;">
                    <img src="<?php echo public_url(); ?>/admin/images/icons/tableArrows.png" />
                </td>
                <td style="width: 100px;">Mã số</td>
                <td style="width: 100px;">Người gửi</td>
                <td style="width:100px;">Địa chỉ email</td>
                <td style="width:100px;">Nội dung</td>
                <td style="width:100px;">Chức năng</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="8">
                    <div class="list_action itemActions">
                        <a href="#submit" id="submit" class="button blueB" url="<?php echo admin_url('feedback/delete_all'); ?>">
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
                    
                    <td>
                        <input type="checkbox" name="id[]" value="<?php echo $row->id; ?>" />
                    </td>
                    <td>
                        <?php echo $row->id;?>
                    </td>
                    <td>
                        <?php echo $row->name;?>
                    </td>
                    
                    <td > 
                        <?php echo $row->email; ?>
                    </td>
                    <td >
                        <textarea> <?php echo $row->content; ?></textarea>
                    </td>
                    
                    <td class="option">
                        <a href="gmail.com" target="_blank" title="trả lời phản hồi" class="tipS verify_action" >
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo admin_url('feedback/delete/'.$row->id); ?>" title="Xóa phản hồi" class="tipS verify_action" >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                    
                </tr>
                
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>
<div class="clear mt30"></div>
