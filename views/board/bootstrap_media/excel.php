<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
<style type="text/css">
th {font-weight:bold;padding:5px; min-width:120px; width:120px; _width:120px; text-align:center; line-height:18px; font-size:12px; color:#959595; font-family:dotum,돋움; border-right:1px solid #e4e4e4;}
td {text-align:center; line-height:40px; font-size:12px; color:#474747; font-family:gulim,굴림; border-right:1px solid #e4e4e4;}
</style>



        <table class="table table-hover">
            <thead>
                <tr>
                    <th>이름</th>
                    <th>핸드폰번호</th>
                    <th>생년월일</th>
                    <th>성별</th>
                    <th>인증일시</th>
                    <th>유입 URL</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (element('list', element('data', $view))) {
                foreach (element('list', element('data', $view)) as $result) {
            ?>
                 <tr>
                    <td><?php echo element('display_name', $result); ?></td>
                    <td><?php echo get_phone(element('msh_mobileno', $result)); ?></td>
                    <td><?php echo get_birthdate(element('msh_birthdate', $result)); ?></td>
                    <td><?php echo element('msh_gender', $result) === '1' ? '남성' : '여성'; ?></td>
                    <td><?php echo element('msh_datetime', $result); ?></td>
                    <td><a href="<?php echo goto_url(element('msh_referer', $result)); ?>" target="_blank"><?php echo element('msh_referer', $result); ?></a></td>
                    
                </tr>
            <?php
                }
            }
            if (  ! element('list', element('data',  $view))) {
            ?>
                <tr>
                    <td colspan="6" class="nopost">게시물이 없습니다</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    
