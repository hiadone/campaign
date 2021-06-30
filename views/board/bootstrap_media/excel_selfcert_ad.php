<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
<style type="text/css">
th {font-weight:bold;padding:5px; min-width:120px; width:120px; _width:120px; text-align:center; line-height:18px; font-size:12px; color:#959595; font-family:dotum,돋움; border-right:1px solid #e4e4e4;}
td {text-align:center; line-height:40px; font-size:12px; color:#474747; font-family:gulim,굴림; border-right:1px solid #e4e4e4;}
</style>



        <table class="table table-hover">
            <?php if(element('post_id',element('post',$view)) ==="325"){?>

             
            
            <thead>
                <tr>
                    
                    <th>번호</th>
                    <th>포스트백 ADID</th>
                    <th>피망 Payload</th>                    
                    <th>상태</th>
                    <th>IP</th>
                    <th>이벤트참여일시</th>
                    <th>포스트백전송일시</th>
                    <th>참여버튼전송일시</th>
                </tr>
            </thead>

            <?php } elseif(element('post_id',element('post',$view)) ==="153"){?>
            <thead>
                <tr>
                     <th>번호</th>
                    
                    <th>이름</th>
                    <th>핸드폰번호</th>
                    <th>생년월일</th>
                    <th>성별</th>
                    <th>랭킹</th>
                    <th>랭킹</th>
                    <th>본인인증일시</th>                    
                    <th>포스트백전송일시</th>
                    <th>이벤트참여일시</th>
                    
                </tr>
            </thead>
            <?php } else {?>
            <thead>
                <tr>
                     <th>번호</th>
                    
                    <th>아이디 </th>
                    <th>ADID</th>                    
                    <th>상태</th>
                    <th>랭킹</th>
                    <th>IP</th>                    
                    <th>이벤트참여일시</th>                    
                    <th>포스트백전송일시</th>
                    <th>룰렛참여일시</th>
                    
                </tr>
            </thead>
            <?php } ?>
            <tbody>
            <?php
            if (element('list', element('data', $view))) {
                foreach (element('list', element('data', $view)) as $result) {
            ?>
                 <tr>
                    <?php if(element('post_id',element('post',$view)) ==="325"){?>                    
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    <!-- <td><?php echo element('msh_mem_id', $result); ?></td> -->
                    <td><?php echo element('msh_adid', $result); ?></td>
                    <td><?php echo urlencode(element('msh_dupinfo', $result)); ?></td>
                    <td>
                        <?php                        
                        
                        if(element('msh_val1', $result) ==='1')
                            echo '<button type="button" class="btn btn-xs btn-info">뉴인스톨</button>';
                        elseif(element('msh_val1', $result) ==='2')
                            echo '<button type="button" class="btn btn-xs btn-warning">리인스톨</button>';
                        elseif(element('msh_val1', $result) ==='3')
                            echo '<button type="button" class="btn btn-xs btn-danger">리오픈</button>';
                        elseif(element('msh_val1', $result) ==='4')
                            echo '<button type="button" class="btn btn-xs btn-success">참여버튼</button>';                       
                        else
                            echo '<button type="button" class="btn btn-xs btn-primary">미포스트백</button>';
                         ?>
                    </td>                    
                    <td><?php echo element('msh_ip', $result) ?></td>                    
                    <td><?php echo element('msh_datetime', $result) ?></td>                    
                    <td><?php echo element('msh_postback_datetime', $result) ?></td>
                    <td><?php echo element('msh_event_datetime', $result) ?></td>

                    <?php }elseif(element('post_id',element('post',$view)) ==="153"){?>
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    
                    <td><?php echo element('display_name', $result); ?></td>
                    <td><?php echo get_phone(element('msh_mobileno', $result)); ?></td>
                    <td><?php echo get_birthdate(element('msh_birthdate', $result)); ?></td>
                    <td><?php echo element('msh_gender', $result) === '1' ? '남성' : '여성'; ?></td>
                    
                    <td>
                    
                    <?php 
                    if(element('msh_event_result', $result)) echo element('msh_event_result', $result).' 등';
                    else if(element('msh_status', $result) ==='1') echo '<button type="button" class="btn btn-xs btn-primary">미 포스트백</button>';
                    else if(element('msh_status', $result) ==='3') echo '<button type="button" class="btn btn-xs btn-danger">비 참여</button>';
                    else echo '-';
                    ?>
                    
                    </td>
                    <td><?php echo element('msh_datetime', $result) ?></td>                    
                    <td><?php echo element('msh_postback_datetime', $result) ?></td>
                    <td><?php echo element('msh_event_datetime', $result) ?></td>
                    <?php } else {?>
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    
                    <td><?php echo element('msh_mem_id', $result); ?></td>
                    <td><?php echo element('msh_dupinfo', $result); ?></td>
                    <td>
                        <?php                        
                        
                        if(element('msh_val1', $result) ==='1')
                            echo '<button type="button" class="btn btn-xs btn-info">뉴인스톨</button>';
                        elseif(element('msh_val1', $result) ==='0')
                            echo '<button type="button" class="btn btn-xs btn-warning">리오픈</button>';
                        else
                            echo '<button type="button" class="btn btn-xs btn-primary">미포스트백</button>';
                         ?>
                    </td>
                    <td>
                    
                    <?php 
                    if(element('msh_event_result', $result)) echo element('msh_event_result', $result).' 등';
                    
                    else echo '-';
                    ?>
                    
                    </td>
                    <td><?php echo element('msh_ip', $result) ?></td>                    
                    <td><?php echo element('msh_datetime', $result) ?></td>                    
                    <td><?php echo element('msh_postback_datetime', $result) ?></td>
                    <td><?php echo element('msh_event_datetime', $result) ?></td>

                    <?php } ?>
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
    
