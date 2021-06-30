<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
<style type="text/css">
th {font-weight:bold;padding:5px; min-width:120px; width:120px; _width:120px; text-align:center; line-height:18px; font-size:12px; color:#959595; font-family:dotum,돋움; border-right:1px solid #e4e4e4;}
td {text-align:center; line-height:40px; font-size:12px; color:#474747; font-family:gulim,굴림; border-right:1px solid #e4e4e4;}
</style>
<table width="100%" border="1" bordercolor="#E4E4E4" cellspacing="0" cellpadding="0">
        <tr>
            <th height="40">제목</th>
            <th>그룹명</th>
            <th>일시</th>
            <?php if($this->uri->segment(2) === 'real_click_list') {?>
                <th>유입 URL</th>
            <?php } ?>
            <th>PREFIJO</th>
            <th>PIXEL</th>
        </tr>
        <?php
    if (element('list', element('data', $view))) {
        foreach (element('list', element('data', $view)) as $result) {
    ?>
        <tr>
            <td><?php echo html_escape(element('post_title', $result)); ?><a href="<?php echo goto_url(element('post_url', $result)); ?>" target="_blank"><span class="fa fa-external-link"></span></a></td>
            <td><?php echo html_escape(element('member_group_name', $result)); ?></td>
            <td><?php echo display_datetime(element('display_datetime', $result), 'full'); ?></td>
            <!-- <td><?php echo element('pl_hit', $result) ? element('pl_hit', $result) : ''; ?></td> -->
            
            <?php if($this->uri->segment(2) === 'real_click_list') {?>
            <td  style="width:35%;word-break:break-all;"><?php if(element('mlc_referrer', $result)){ ?><i class="fa fa-link"></i><a href="<?php echo goto_url(prep_url(urldecode(element('mlc_referrer', $result)))); ?>" target="_blank"><?php echo prep_url(urldecode(element('mlc_referrer', $result))); ?></a><?php } ?></td>
            <?php } ?>

            
           
            <td><?php echo element('prefijo', $result); ?></td>
            <td><?php echo element('pixel', $result); ?></td>
            
            <!-- <td><input type="checkbox" name="chk[]" class="list-chkbox" value="<?php echo element(element('primary_key', $view), $result); ?>" /></td> -->
        </tr>
    <?php
        }
    }
    if ( ! element('list', element('data', $view))) {
    ?>
        <tr>
            <td colspan="11" class="nopost">자료가 없습니다</td>
        </tr>
    <?php
    }
    ?>
</table>
