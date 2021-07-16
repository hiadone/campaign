<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<div class="container">
    <div class="board">
        <h3>
            신청 상세 페이지
        </h3>
        <ul class="list-group">
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>이름</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo html_escape(element('display_name', element('data', $view))); ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>이메일</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo html_escape(element('mlh_email', element('data', $view))); ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>핸드폰번호</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo html_escape(element('mlh_mobileno', element('data', $view))); ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>신청일시</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo html_escape(element('display_datetime', element('data', $view))); ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>주소</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo html_escape(element('mlh_memo', element('data', $view))); ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>임하는 각오</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo html_escape(element(0,explode("||",element('mlh_text', element('data', $view))),null,'')); ?>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-sm-2"> <strong>기타</strong></div>
                <div class="col-sm-10" style="min-height:20px;">
                <?php echo nl2br(html_escape(element(1,explode("||",element('mlh_text', element('data', $view))),null,''))); ?>
                </div>
            </li>
        
        </ul>

      

        <div class="pull-right" style="margin:20px;"><button class="btn btn-default" onClick="window.close();">닫기</button></div>
        
    </div>
</div>
