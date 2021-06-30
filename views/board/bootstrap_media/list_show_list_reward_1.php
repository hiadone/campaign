<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<?php echo element('headercontent', element('board', element('list', $view))); ?>

<div class="board mt40">
    <h3>본인 인증 리스트</h3>
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

        <div class="col-md-6">
            <div class=" ">
                <form class="navbar-form navbar-right pull-right" action="<?php echo site_url(uri_string()); ?>" onSubmit="return postSearch(this);">
                    <input type="hidden" name="findex" value="<?php echo html_escape($this->input->get('findex')); ?>" />
                    <input type="hidden" name="category_id" value="<?php echo html_escape($this->input->get('category_id')); ?>" />
                    <div class="form-group">
                        <select class="form-control pull-left px100" name="sfield">
                            <option value="msh_name" <?php echo ($this->input->get('sfield') === 'msh_name') ? ' selected="selected" ' : ''; ?>>이름</option>
                            <option value="msh_mobileno" <?php echo ($this->input->get('sfield') === 'msh_mobileno') ? ' selected="selected" ' : ''; ?>>핸드폰 번호</option>
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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><input onclick="if (this.checked) all_boardlist_checked(true); else all_boardlist_checked(false);" type="checkbox" /></th>
                    <th>번호</th>
                    <th>main KEY</th>
                    <th>이름</th>
                    <th>핸드폰번호</th>
                    <th>생년월일</th>
                    <th>성별</th>
                    <th>인증일시</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            if (element('list', element('data', element('list', $view)))) {
                foreach (element('list', element('data', element('list', $view))) as $result) {
            ?>
                 <tr>
                    <th scope="row" ><input type="checkbox" name="chk_post_id[]" value="<?php echo element('msh_id', $result); ?>" id="chk_mlh_id_<?php echo element('msh_id', $result); ?>"  /></th>
                    <td><?php echo number_format(element('num', $result)); ?></td>
                    <td><?php echo element('msh_mem_id', $result); ?></td>
                    <td><?php echo element('display_name', $result); ?></td>
                    <td><?php echo get_phone(element('msh_mobileno', $result)); ?></td>
                    <td><?php echo get_birthdate(element('msh_birthdate', $result)); ?></td>
                    <td><?php echo element('msh_gender', $result) === '1' ? '남성' : '여성'; ?></td>
                    <td><?php echo element('display_datetime', $result) ?></td>
                    
                    
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
            <a href="<?php echo element('list_url', element('list', $view)); ?>?tenpingstatus=1" class="btn btn-success btn-sm">유효목록</a>
            <a href="<?php echo element('list_url', element('list', $view)); ?>?tenpingstatus=2" class="btn btn-danger btn-sm">무효목록</a>
        </div>
        <div class="box-info">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <?php if (element('is_admin', $view)) { ?>

                <button type="button" class="btn btn-outline btn-warning btn-sm mr10" onClick="post_multi_action('multi_media_delete', '0', '선택하신 글들을 완전삭제하시겠습니까?','<?php echo element('brd_key',element('board',$view)) ?>');"><i class="fa fa-trash-o"></i> 선택삭제하기</button>
                
                
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
//]]>
</script>

