<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<?php echo element('headercontent', element('board', element('list', $view))); ?>
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
<div class="board mt40">
    <h3>상담 신청 리스트</h3>
    <div class="row mb20">
        <div class="col-xs-6 form-inline">
            <?php if ( ! element('access_list', element('board', element('list', $view))) && element('use_rss_feed', element('board', element('list', $view)))) { ?>
                <a href="<?php echo rss_url(element('brd_key', element('board', element('list', $view)))); ?>" class="btn btn-danger btn-sm" title="<?php echo html_escape(element('board_name', element('board', element('list', $view)))); ?> RSS 보기"><i class="fa fa-rss"></i></a>
            <?php } ?>
            
            <?php if (element('use_category', element('board', element('list', $view))) && ! element('cat_display_style', element('board', element('list', $view)))) { ?>
                <select class="form-control px150" onchange="location.href='<?php echo board_url(element('brd_key', element('board', element('list', $view)))); ?>?findex=<?php echo html_escape($this->input->get('findex')); ?>&category_id=' + this.value;">
                    <option value="">카테고리선택</option>
                    <?php
                    $category = element('category', element('board', element('list', $view)));
                    function ca_select($p = '', $category = '', $category_id = '')
                    {
                        $return = '';
                        if ($p && is_array($p)) {
                            foreach ($p as $result) {
                                $exp = explode('.', element('bca_key', $result));
                                $len = (element(1, $exp)) ? strlen(element(1, $exp)) : '0';
                                $space = str_repeat('-', $len);
                                $return .= '<option value="' . html_escape(element('bca_key', $result)) . '"';
                                if (element('bca_key', $result) === $category_id) {
                                    $return .= 'selected="selected"';
                                }
                                $return .= '>' . $space . html_escape(element('bca_value', $result)) . '</option>';
                                $parent = element('bca_key', $result);
                                $return .= ca_select(element($parent, $category), $category, $category_id);
                            }
                        }
                        return $return;
                    }

                    echo ca_select(element(0, $category), $category, $this->input->get('category_id'));
                    ?>
                </select>
            <?php } ?>
        </div>

        <div class="col-md-12">
            <div class="pull-left">
            <?php 
            if(element('post_id',element('post',$view)) !== '627'){
            ?>
                <button type="button" onClick="post_multi_action('media_multi_status_update', '2', '선택하신 항목을 무효처리 하시겠습니까?','<?php echo element('brd_key',element('board',$view))?>');" class="btn btn-danger btn-sm">선택무효</button>
                <button type="button" onClick="post_multi_action('media_multi_status_update', '1', '선택하신 항목을 휴효처리 하시겠습니까?','<?php echo element('brd_key',element('board',$view))?>');" class="btn btn-success btn-sm">선택유효</button>
            <?php } ?>  
            </div>
            <div class=" ">
                <form class="navbar-form navbar-right pull-right" action="<?php echo site_url(uri_string()); ?>" onSubmit="return postSearch(this);">
                    <input type="hidden" name="findex" value="<?php echo html_escape($this->input->get('findex')); ?>" />
                    <input type="hidden" name="category_id" value="<?php echo html_escape($this->input->get('category_id')); ?>" />
                    <div class="form-group">
                        <select class="form-control pull-left px100" name="sfield">
                            <option value="mlh_name" <?php echo ($this->input->get('sfield') === 'mlh_name') ? ' selected="selected" ' : ''; ?>>이름</option>
                            <option value="mlh_mobileno" <?php echo ($this->input->get('sfield') === 'mlh_mobileno') ? ' selected="selected" ' : ''; ?>>핸드폰 번호</option>
                        </select>
                        <input type="text" class="form-control px150" placeholder="Search" name="skeyword" value="<?php echo html_escape($this->input->get('skeyword')); ?>" />
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
           <!--  <div class="searchbuttonbox">
                <button class="btn btn-primary btn-sm pull-right" type="button" onClick="toggleSearchbox();"><i class="fa fa-search"></i></button>
            </div> -->
            <?php if (element('point_info', element('list', $view))) { ?>
                <div class="point-info pull-right mr10">
                    <button class="btn-point-info btn-link" data-toggle="popover" data-trigger="focus" data-placement="left" title="포인트안내" data-content="<?php echo element('point_info', element('list', $view)); ?>"
                    ><i class="fa fa-info-circle fa-lg"></i></button>
                </div>
            <?php } ?>
        </div>
        <script type="text/javascript">
        //<![CDATA[
        function postSearch(f) {
            var skeyword = f.skeyword.value.replace(/(^\s*)|(\s*$)/g,'');
            if (skeyword.length < 2) {
                alert('2글자 이상으로 검색해 주세요');
                f.skeyword.focus();
                return false;
            }
            return true;
        }
        // function toggleSearchbox() {
        //     $('.searchbox').show();
        //     $('.searchbuttonbox').hide();
        // }
        // <?php
        // if ($this->input->get('skeyword')) {
        //     echo 'toggleSearchbox();';
        // }
        // ?>
        <?php if (element('point_info', element('list', $view))) { ?>
        $('.btn-point-info').popover({
            template: '<div class="popover" role="tooltip"><div class="arrow"></div><div class="popover-title"></div><div class="popover-content"></div></div>',
            html : true
        });
        <?php } ?>
        //]]>
        </script>
    </div>

    <?php
    if (element('use_category', element('board', element('list', $view))) && element('cat_display_style', element('board', element('list', $view))) === 'tab') {
        $category = element('category', element('board', element('list', $view)));
    ?>
        <ul class="nav nav-tabs clearfix">
            <li role="presentation" <?php if ( ! $this->input->get('category_id')) { ?>class="active" <?php } ?>><a href="<?php echo board_url(element('brd_key', element('board', element('list', $view)))); ?>?findex=<?php echo html_escape($this->input->get('findex')); ?>&category_id=">전체</a></li>
            <?php
            if (element(0, $category)) {
                foreach (element(0, $category) as $ckey => $cval) {
            ?>
                <li role="presentation" <?php if ($this->input->get('category_id') === element('bca_key', $cval)) { ?>class="active" <?php } ?>><a href="<?php echo board_url(element('brd_key', element('board', element('list', $view)))); ?>?findex=<?php echo html_escape($this->input->get('findex')); ?>&category_id=<?php echo element('bca_key', $cval); ?>"><?php echo html_escape(element('bca_value', $cval)); ?></a></li>
            <?php
                }
            }
            ?>
        </ul>
    <?php
    }
    ?>

    <?php

    $attributes = array('name' => 'fboardlist', 'id' => 'fboardlist');
    echo form_open('', $attributes);
    
    ?>
    <div class="row">전체 : <?php echo element('total_rows', element('data', element('list', $view))); ?>건</div>
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th><input onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /></th>
                    <th>번호</a></th>
                    <th>이름</th>
                    <?php 
                    if(element('post_id',element('post',$view)) === '627'){
                    ?>
                        <th>이메일</th>
                        <th>핸드폰번호</th>
                        <th>신청일시</th>
                        <th>주소</th>
                        <th >임하는 각오</th>
                        <th >action</th>
                    <?php } else { ?>
                        <th>나이</th>
                        <th>핸드폰번호</th>                    
                        <th class="mlh_gender">성별</th>
                        <th>신청일시</th>
                        <th class="per40">문의사항</th>
                        <th>상태</th>
                        <th>사유</th>
                        <th><small>API상태</small></th>
                        <th><small>전송일</small></th>
                    <?php }?>
                    

                    
                    
            
                </tr>
            </thead>
            <tbody>
            <?php
            $mlh_gender=true;
            if (element('list', element('data', element('list', $view)))) {
                foreach (element('list', element('data', element('list', $view))) as $result) {

                    if(element('mlh_gender', $result) > 0) $mlh_gender=false;

                   

                    
            ?>
                 <tr>
                    <th scope="row"><input type="checkbox" name="chk_post_id[]" value="<?php echo element('mlh_id', $result); ?>" id="chk_mlh_id_<?php echo element('mlh_id', $result); ?>"  /></th>
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    <td><?php echo element('display_name', $result); ?></td>

                    <?php 
                    if(element('post_id',element('post',$view)) === '627'){
                    ?>
                        <td><?php echo (element('mlh_email', $result)); ?></td>
                        
                        <td><?php echo is_phone(element('mlh_mobileno', $result)) ? get_phone(element('mlh_mobileno', $result)):(element('mlh_mobileno', $result)); ?></td>
                        <td><?php echo element('display_datetime', $result) ?></td>
                        <td><?php echo html_escape(element('mlh_memo', $result)) ?></td>

                        
                        <td><?php echo html_escape(element(0,explode("||",element('mlh_text', $result)))) ?></td>
                        <td><button type="button" onClick="click_627_view(<?php echo element('mlh_id', $result) ?>);" class="btn btn-outline btn-danger btn-sm mr10" >자세히</button> </td>
                    <?php } else { ?>
                        <td><?php echo (element('mlh_age', $result)); ?> 세</td>
                        <td><?php echo is_phone(element('mlh_mobileno', $result)) ? get_phone(element('mlh_mobileno', $result)):(element('mlh_mobileno', $result)); ?></td>                    
                        <td class="mlh_gender"><?php echo element('mlh_gender', $result) === '2' ? '남성' : '여성'; ?></td>
                        <td><?php echo element('display_datetime', $result) ?></td>
                        <td><?php echo html_escape(element('mlh_text', $result)) ?></td>
                        <!-- <td><a href="<?php echo goto_url(element('mlh_referer', $result)); ?>" target="_blank"><?php echo element('mlh_referer', $result); ?></a></td> -->
                        <td><a href="javascript:post_action_media('media_status_update', '<?php echo element('mlh_id', $result);?>','<?php echo element('brd_key',element('board',$view))?>', '<?php echo element('mlh_status', $result) ==='1' ? '2':'1';?>');" class="btn <?php echo element('mlh_status', $result) ==='1' ? 'btn-success':'btn-danger';?> btn-xs"><?php echo element('mlh_status', $result) === '1' ? '유효' : '무효'; ?></a></td>
                        <td><input type="text" class="px100"   name="mlh_memo[<?php echo element('mlh_id', $result);?>]" id="mlh_memo_<?php echo element('mlh_id', $result);?>" data-mlh_id="<?php echo element('mlh_id', $result);?>" value="<?php echo html_escape(element('mlh_memo', $result)) ?>" /></td>

                        
                        <?php
                         
                            if(element('mlh_api_flag2', $result) === "1") echo "<td>".element('mlh_msg2', $result)."</td>";
                            else echo "<td>-</td>";

                            echo "<td>".element('display_rst2_datetime', $result,'-')."</td>";
                          
                         ?>
                    <?php }?>

                    
                </tr>
            <?php
                }
            }
            if ( ! element('notice_list', element('list', $view)) && ! element('list', element('data', element('list', $view)))) {
            ?>
                <tr>
                    <td colspan="6" class="nopost">게시물이 없습니다</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php echo form_close(); ?>

    <div class="border_button">
        <div class="pull-left mr10">
            <a href="<?php echo element('list_url', element('list', $view)); ?>" class="btn btn-default btn-sm">전체목록</a>
            <?php 
            if(element('post_id',element('post',$view)) !== '627'){
            ?>
            <a href="<?php echo element('list_url', element('list', $view)); ?>?tenpingstatus=1" class="btn btn-success btn-sm">유효목록</a>
            <a href="<?php echo element('list_url', element('list', $view)); ?>?tenpingstatus=2" class="btn btn-danger btn-sm">무효목록</a>
            <?php } ?>
        </div>
        <div class="box-info">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <?php if (element('is_admin', $view)) { ?>
                <button type="button" class="btn btn-outline btn-warning btn-sm mr10" onClick="post_multi_action('multi_media_delete', '0', '선택하신 글들을 완전삭제하시겠습니까?','<?php echo element('brd_key',element('board',$view)) ?>');"><i class="fa fa-trash-o"></i> 선택삭제하기</button>

                <button type="button" class="btn btn-outline btn-danger btn-sm mr10" id="export_to_tenping">체크 항목 텐핑 API 연동</button> 
                <?php } ?>
                <button type="button" class="btn btn-outline btn-success btn-sm" id="export_to_excel"><i class="fa fa-file-excel-o"></i> 엑셀 다운로드</button>
            </div>            
        </div>
    </div>
    <nav><?php echo element('paging', element('list', $view)); ?></nav>
</div>

<?php echo element('footercontent', element('board', element('list', $view))); ?>

    
<script type="text/javascript">
//<![CDATA[
$(document).on('click', '#export_to_excel', function(){
    exporturl = '<?php echo site_url('board_post/excel_tenping_history/'.element('brd_key',element('board',$view)).'/'.element('post_id',element('post',$view)) . '?' . $this->input->server('QUERY_STRING', null, '')); ?>';
    document.location.href = exporturl;
});

$(document).on('click', '#export_to_tenping', function() {
        if (confirm("한번 전송한 자료는 수정 할 수 없습니다.\n\n전송하시겠습니까?")) {
            if ($("input[name='chk_post_id[]']:checked").length < 1) {
                alert('항목을 하나 이상 선택하세요.');
                return ;
            }
            <?php
            if (element('list', element('data', element('api_list', $view)))) {
                foreach (element('list', element('data', element('api_list', $view))) as $result) {
                    $status='';
                    $jid='';
                    if(element('mlh_status', $result) ==="2") $status='N';
                    elseif(element('mlh_status', $result) ==="1") $status='S';

                    if(empty(element('jid', $result))) $jid=date('Ymd');
                    else $jid = element('jid', $result);
                    
            ?>
            if($("#chk_mlh_id_<?php echo element('mlh_id',$result)?>").prop("checked")){
                 act_cpaProc('<?php echo element('mlh_id',$result)?>','<?php echo $jid?>','<?php echo $status?>','<?php echo urlencode(preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", element('mlh_memo',$result,'')))?>');
             }
            <?php 
                } 
            } 
            ?>
            alert('API 연동이 완료 되었습니다.');
            document.location.reload();
            return false;
        } else {
            return false;
        }
    });


function act_cpaProc(mlh_id,jid,status,reason) {
    var href;
    
    href = cb_url + '/postact/tenping_cpa_curl/'+jid+'/'+status+'/'+reason;
    $.ajax({
        async : false,
        url : href,
        type : 'get',
        dataType : 'json',
        success : function(response) {

        },
        complete : function (response) {
            if (response.responseJSON.error) {
                alert(response.responseJSON.Message);
                return false;
            } else if (response.responseJSON.success) {
                $.ajax({
                     async : false,
                     url : cb_url + '/media/act_tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
                     type : 'get',
                     dataType : 'json',
                     success : function(data) {
                          
                     }
                 });
            }
        }

    });
}

$(document).on('change', 'input[name^=mlh_memo]', function() {
    

    post_action_media('media_memo_update', $(this).data('mlh_id'),'<?php echo element('brd_key',element('board',$view)) ?>',0);
});


<?php if($mlh_gender) {?>
    $('.mlh_gender').hide();
<?php } ?>
//]]>
</script>