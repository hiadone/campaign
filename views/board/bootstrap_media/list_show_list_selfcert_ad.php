<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<?php echo element('headercontent', element('board', element('list', $view))); ?>
<?php 
$param =& $this->querystring;
 ?>
<div class="board mt40">
    <h3>이벤트 참여 리스트</h3>
    <div class="row mb20">
        <div class="col-xs-6 form-inline">
            
            <?php 
            if(element('post_id',element('post',$view)) ==="325")
                $msh_event_result = array();
            else 
                $msh_event_result = array(1=>'1등',2=>'2등',3=>'3등',4=>'4등',5=>'5등');
                
            ?>
            <div class="col-md-12 mb20">
                <ul class="nav nav-tabs ">
                    <li role="presentation" <?php if ( ! $this->input->get('msh_event_result')) { ?>class="active" <?php } ?>><a href="<?php echo current_url().'?'.$param->replace('msh_event_result');?>">매체 전체 (<?php echo  number_format(element('total',element('category', element('list', $view)))); ?>)</a></li>
                    <?php
                    
                    if ($msh_event_result) {
                        foreach ($msh_event_result as $mkey => $mval) {
                            if(empty($mval)) continue;
                    ?>
                        <li role="presentation" <?php if ($this->input->get('msh_event_result') === $mkey) { ?>class="active" <?php } ?>><a href="<?php echo current_url().'?'.$param->replace(array('msh_event_result','page_sub')).'&msh_event_result='.$mkey; ?>"><?php echo html_escape($mkey); ?> (<?php echo  number_format(element($mkey,element('category', element('list', $view)))); ?>)</a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class=" ">
                <form class="navbar-form navbar-right pull-right" action="<?php echo site_url(uri_string()); ?>" onSubmit="return postSearch(this);">
                    <input type="hidden" name="findex" value="<?php echo html_escape($this->input->get('findex')); ?>" />
                    <input type="hidden" name="category_id" value="<?php echo html_escape($this->input->get('category_id')); ?>" />
                    <div class="form-group">
                        <select class="form-control pull-left px100" name="sfield">
                        <?php if(element('post_id',element('post',$view)) ==="325"){?>
                            <option value="msh_dupinfo" <?php echo ($this->input->get('sfield') === 'msh_dupinfo') ? ' selected="selected" ' : ''; ?>>피망 Payload</option>
                            <option value="msh_adid" <?php echo ($this->input->get('sfield') === 'msh_adid') ? ' selected="selected" ' : ''; ?>>ADID</option>

                        <?php }elseif(element('post_id',element('post',$view)) ==="153"){ ?>                        
                            <option value="msh_name" <?php echo ($this->input->get('sfield') === 'msh_name') ? ' selected="selected" ' : ''; ?>>이름</option>
                            <option value="msh_mobileno" <?php echo ($this->input->get('sfield') === 'msh_mobileno') ? ' selected="selected" ' : ''; ?>>핸드폰 번호</option>
                            
                        <?php } else { ?>   
                            <option value="msh_mem_id" <?php echo ($this->input->get('sfield') === 'msh_mem_id') ? ' selected="selected" ' : ''; ?>>아이디</option>
                            <option value="msh_dupinfo" <?php echo ($this->input->get('sfield') === 'msh_dupinfo') ? ' selected="selected" ' : ''; ?>>ADID</option>
                            
                        <?php } ?>
                        </select>
                        <input type="text" class="form-control px150" placeholder="Search" name="skeyword" value="<?php echo html_escape($this->input->get('skeyword')); ?>" />
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            
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
      
        // $('.btn-point-info').popover({
        //     template: '<div class="popover" role="tooltip"><div class="arrow"></div><div class="popover-title"></div><div class="popover-content"></div></div>',
        //     html : true
        // });
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
        <table class="table table-hover">
            <?php if(element('post_id',element('post',$view)) ==="325"){?>

             
            
            <thead>
                <tr>
                    <th><input onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /></th>
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
                    <th><input onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /></th>
                    <th>번호</th>
                    <!-- <th>아이디</th> -->
                    <th>이름</th>
                    <th>핸드폰번호</th>
                    <th>생년월일</th>
                    <th>성별</th>
                    <th>랭킹</th>
                    <th>본인인증일시</th>                    
                    <th>포스트백전송일시</th>
                    <th>이벤트참여일시</th>
                </tr>
            </thead>
            <?php } else {?>
            <thead>
                <tr>
                    <th><input onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /></th>
                    <th>번호</th>
                    <!-- <th>아이디</th> -->
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
            if (element('list', element('data', element('list', $view)))) {
                foreach (element('list', element('data', element('list', $view))) as $result) {
            ?>
                 <tr>
                    <?php if(element('post_id',element('post',$view)) ==="325"){?>
                    <th scope="row" ><input type="checkbox" name="chk_post_id[]" value="<?php echo element('msh_id', $result); ?>" id="chk_mlh_id_<?php echo element('msh_id', $result); ?>"  /></th>
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
                    <th scope="row" ><input type="checkbox" name="chk_post_id[]" value="<?php echo element('msh_id', $result); ?>" id="chk_mlh_id_<?php echo element('msh_id', $result); ?>"  /></th>
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    <!-- <td><?php echo element('msh_mem_id', $result); ?></td> -->
                    <td><?php echo element('display_name', $result); ?></td>
                    <td><?php echo get_phone(element('msh_mobileno', $result)); ?></td>
                    <td><?php echo get_birthdate(element('msh_birthdate', $result)); ?></td>
                    <td><?php if(element('msh_gender', $result)) echo element('msh_gender', $result) === '1' ? '남성' : '여성'; ?></td>
                    
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
                     <!-- <td><input type="text" class="px100"   name="msh_memo[<?php echo element('msh_id', $result);?>]" id="mlh_memo_<?php echo element('msh_id', $result);?>" data-msh_id="<?php echo element('msh_id', $result);?>" value="<?php echo html_escape(element('msh_memo', $result)) ?>" /></td> -->
                     <?php } else {?>
                    <th scope="row" ><input type="checkbox" name="chk_post_id[]" value="<?php echo element('msh_id', $result); ?>" id="chk_mlh_id_<?php echo element('msh_id', $result); ?>"  /></th>
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    <!-- <td><?php echo element('msh_mem_id', $result); ?></td> -->
                    <td><?php echo element('msh_mem_id', $result); ?></td>
                    <td><?php echo element('msh_dupinfo', $result); ?></td>
                    <td>
                        <?php                        
                        
                        if(element('msh_val1', $result) ==='1')
                            echo '<button type="button" class="btn btn-xs btn-info">뉴인스톨</button>';
                        elseif(element('msh_val1', $result) ==='2')
                            echo '<button type="button" class="btn btn-xs btn-warning">리인스톨</button>';
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
            <a href="<?php echo element('list_url', element('list', $view)); ?>?msh_event_result=all" class="btn btn-success btn-sm">이벤트참여현황</a>

            
                <a href="<?php echo element('list_url', element('list', $view)); ?>?msh_val1=1" class="btn btn-info btn-sm">뉴인스톨</a>
                <a href="<?php echo element('list_url', element('list', $view)); ?>?msh_val1=2" class="btn btn-warning btn-sm">리인스톨</a>
                <a href="<?php echo element('list_url', element('list', $view)); ?>?msh_val1=3" class="btn btn-danger btn-sm">리오픈</a>
                <a href="<?php echo element('list_url', element('list', $view)); ?>?msh_val1=4" class="btn btn-success btn-sm">참여버튼</a>
                <a href="<?php echo element('list_url', element('list', $view)); ?>?msh_val1=none" class="btn btn-primary btn-sm">미 포스트백</a>
                
            
        </div>
        <div class="box-info">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <?php if (element('is_admin', $view)) { ?>

                <button type="button" class="btn btn-outline btn-warning btn-sm mr10" onClick="post_multi_action('multi_media_delete', '0', '선택하신 글들을 완전삭제하시겠습니까?','<?php echo element('brd_key',element('board',$view)) ?>');"><i class="fa fa-trash-o"></i> 선택삭제하기</button>
                
                <!-- <button type="button" class="btn btn-outline btn-warning btn-sm mr10" onClick="post_multi_action('multi_media_send', '0', '선택하신 항목에 이벤트 이메일을 발송합니다.','<?php echo element('brd_key',element('board',$view)) ?>');"><i class="fa fa-trash-o"></i> 이벤트메일발송</button> -->
                
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
    exporturl = '<?php echo site_url('board_post/excel_selfcert_history/'.element('brd_key',element('board',$view)).'/'.element('post_id',element('post',$view)) . '?' . $this->input->server('QUERY_STRING', null, '')); ?>';
    document.location.href = exporturl;
});

$(document).on('change', 'input[name^=msh_memo]', function() {
    

    post_action_media('media_memo_update', $(this).data('msh_id'),'<?php echo element('brd_key',element('board',$view)) ?>',0);
});
//]]>
</script>

