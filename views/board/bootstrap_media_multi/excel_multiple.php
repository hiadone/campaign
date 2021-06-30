<meta http-equiv="Content-Type" content="text/html; charset=<?php echo config_item('charset');?>" />
<?php 

if(element('post_id',element('post',$view)) === "89"){
    $q_a=array(1=>'SKT',2=>'KT',3=>'LG',4=>'기타');
    $q_b=array(1=>'갤럭시S9',2=>'갤럭시S9 플러스',3=>'갤럭시노트9',4=>'갤럭시S8',5=>'갤럭시S8 플러스',6=>'갤럭시노트8',7=>'아이폰 8',8=>'아이폰X8',9=>'아이폰8플러스');
    $q_c="";
} else {
    $q_a=array(1=>'혈당',2=>'혈압',3=>'혈행',4=>'콜레스트롤');
    $q_b=array(1=>'예',2=>'아니오');
    $q_c=array(1=>'예',2=>'아니오');
}
 ?>
<style type="text/css">
th {font-weight:bold;padding:5px; min-width:120px; width:120px; _width:120px; text-align:center; line-height:18px; font-size:12px; color:#959595; font-family:dotum,돋움; border-right:1px solid #e4e4e4;}
td {text-align:center; line-height:40px; font-size:12px; color:#474747; font-family:gulim,굴림; border-right:1px solid #e4e4e4;}
</style>



        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width:100px;">이름</th>                    
                    <th style="width:80px;">나이</th>
                    <th style="width:150px;">핸드폰번호</th>
                    <th>매체코드</th>
                    <?php if(element('mlh_gender',element(0,element('list', element('data',$view)))) > 0){ ?>
                    <th >성별</th>
                    <?php } ?>
                    <th style="width:150px;">신청일시</th>
                    <th style="width:400px;">문의사항</th>
                    <?php 

                    if(element('mlh_email',element(0,element('list', element('data',$view)))))
                        echo '<th>주소</th>';
                     ?>
                    <th style="width:100px;">상태</th>
                    <th style="width:150px;">사유</th>
                    <?php 
                    if (element('tenping_extra_vars', element('data',$view))){
                        echo '<th>질문1</th>
                    <th>질문2</th>
                    <th>질문3</th>
                    ';
                    }
                     ?>
                    <th style="width:100px;">API상태</th>
                    <th style="width:150px;">전송일</th>

                </tr>
            </thead>
            <tbody>
            <?php
            
            if (element('list', element('data', $view))) {
                foreach (element('list', element('data', $view)) as $result) {

                    
            ?> 

                 <tr <?php echo element('mlh_status', $result) === '1' ? '' : 'style="background-color: #ff5c57;"'; ?> >
                    <td><?php echo element('display_name', $result); ?></td>                    
                    <td><?php echo (element('mlh_age', $result)); ?></td>
                    <td><?php echo is_phone(element('mlh_mobileno', $result)) ? get_phone(element('mlh_mobileno', $result)):(element('mlh_mobileno', $result)); ?></td>
                    <td><?php echo element('multi_code', $result)?></td>                    
                    <?php if(element('mlh_gender',element(0,element('list', element('data',$view)))) > 0){ ?>
                    <td ><?php echo element('mlh_gender', $result) === '2' ? '남성' : '여성'; ?></td>
                    <?php } ?>
                    <td><?php echo element('mlh_datetime', $result); ?></td>
                    <td><?php echo html_escape(element('mlh_text', $result)) ?></td>
                    <?php 

                    if(element('mlh_email',$result))
                        echo '<td>'.element('mlh_email',$result).'</td>';
                     ?>
                    <td><?php echo element('mlh_status', $result) === '1' ? '유효' : '무효'; ?> </td>
                    <td><?php echo html_escape(element('mlh_memo', $result)) ?></td>
                     <?php 
                    if (element('tenping_extra_vars', element('data', $view))){
                        echo '<td>'.element(element('q_a',element('tenping_extra_vars',$result)),$q_a).'</td>
                    <td>'.element(element('q_b',element('tenping_extra_vars',$result)),$q_b).'</td>
                    <td>'.element(element('q_c',element('tenping_extra_vars',$result)),$q_c).'</td>
                    ';
                    }
                     ?>
                    <?php
                     
                        if(element('mlh_api_flag2', $result) === "1") echo "<td>".element('mlh_msg2', $result)."</td>";
                        else echo "<td>-</td>";
                      
                     ?>
                     <td><?php echo element('mlh_rst2_date', $result,'-')?></td>
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
    
