<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php

$this->managelayout->add_js('https://www.leadtracker.live/static/js/fixel.js'); 
    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
    <title>에너지링</title>    
    <style>
    * {
        padding: 0;
        margin: 0;
    }
    ul,ol,li,dt,dd {
        list-style: none;
    }
    body {
        font-family: 'NanumGothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        font-size: 100%;
        color: #333;
        line-height: 1.5;
    }
    a {
        color: inherit;
        text-decoration: none;
    }
    .blind {
        position: absolute;
        overflow: hidden;
        clip: rect(0 0 0 0);
        margin: -1px;
        width: 1px;
        height: 1px;
    }
    .clearfix:after {
        content: '';
        display: block;
        clear: both;
    }
    .wrap {
        width: 100%;
        min-width: 320px;
        max-width: 640px;
        margin: 0 auto;
        box-sizing: border-box;
    }
    .img_box,
    .btn_img {
        font-size: 0;
    }
    .btn_img {
        background-color: transparent;
        border: none;
        padding: 0;
    }
    .img_box .img,
    .btn_img .img {
        font-size: 12px;
        width: 100%;
    }
    .box_center {
        text-align: center;
    }
    .txt_emph {
        color: #d51430;
        font-weight: bold;
    }
    .txt_bold {
        font-weight: bold;
    }

    .inp {border:1px solid #d1d1d1;}
    .form_wrap {
        padding: 16px 0;
        background: #333;
    }
    .form_container {
        width: 95%;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #ddd;
    }
    .form_container .user_inp_container {
        font-size: 14px;
    }
    .form_container .user_inp_container .label_box {
        float: left;
        width: 25%;
        text-align: center;
        padding: 5px;
        box-sizing: border-box;
    }
    .form_container .user_inp_container .label {
        font-weight: bold;
    }
    .form_container .user_inp_container .inp_box {
        float: right;
        width: 75%;
        padding: 5px;
        box-sizing: border-box;
    }
    .form_container .user_inp_container .inp_tel,
    .form_container .user_inp_container .inp_textarea {
        border: 1px solid #d1d1d1;
    }
    .form_container .user_inp_container .inp_tel {
        width: 50px;
        padding: 1px 0;
    }
    .form_container .user_inp_container .inp_textarea {
        width: 95%;
        height: 80px;
        padding: 2px;
    }
    .form_container .txt_emph {
        font-size: 12px;
        padding: 10px 0;
    }
    .form_container .agree_container {
        padding: 5px;
    }
    .form_container .agree_box {
        font-size: 12px;
        line-height: 18px;
    }
    .form_container .agree_box .inp_check {
        vertical-align: middle;
        margin-right: 4px;
    }
    .form_container .agree_box .link_detail:hover {
        text-decoration: underline;
    }
    .form_container .btn_box {
        padding: 10px 0;
    }
    .form_container .btn_submit {
        display: block;
        width: 80%;
        border: none;
        margin: 0 auto;
        background-color: transparent;
    }
    
    .rolling_content_container {
        border: 1px solid #666;
    }
    .rolling_content_container .title {
        width: 100%;
        height: 25px;
        background: #fff;
        text-align: center;
        padding-top: 5px;
    }
    .rolling_content_container .table {
        border: 2px solid #999999;
    }
    .rolling_content_container .box_thead {
        background-color: #ccc;
        font-size: 16px;
        border-bottom: 2px solid #999999;
    }
    .rolling_content_container .table_left,
    .rolling_content_container .table_right {
        box-sizing: border-box;
        height: 30px;
        padding-top: 5px;
        text-align: center;
    }
    .rolling_content_container .table_left {
        float: left;
        width: 20%;
        border-right: 2px solid #999999;
    }
    .rolling_content_container .table_right {
        float: right;
        width: 80%;
    }
    .rolling_content_container .rolling_content_box {
        height: 60px;
        overflow: hidden;
    }
    .rolling_content_container .rolling_content {
        font-size: 11px;
        line-height: 24px;
    }
    .rolling_content_container .content_title {
        float: left;
        width: calc(100% - 50px);
    }
    .rolling_content_container .content_date {
        float: right;
        width: 40px;
        margin-right: 10px;
    }

    .comment_container {
        margin-top: 20px;
    }
    .comment_container .comment_head {
        height: 35px;
        padding: 0 10px;
    }
    .comment_head .comment_num {
        float: left;
        color: #ed232b;
        font-family: arial;
        font-size: 15px;
        font-weight: bold;
        line-height: 1em;
        padding-top: 5px;
    }
    .comment_head .comment_num .img_comment {
        height: 14px;
        vertical-align: baseline;
    }
    .comment_head .btn_right {
        float: right;
    }
    .comment_head .btn_right .img {
        width: auto;
        height: 26px;
    }
    .comment_container .comment_tabbox {
        border-top: 2px solid #a8a8a8;
    }
    .comment_tab_head .tab {
        float: left;
        width: 50%;
        height: 31px;
        padding-top: 10px;
        box-sizing: border-box;
        background-color: #f7f7f7;
        border-bottom: 1px solid #e1e1e1;
    }
    .comment_tab_head .tab.active {
        background-color: #fff;
    }
    .comment_tab_head .tab:not(:last-child) {
        border-right: 1px solid #e1e1e1;
    }
    .comment_tab_head .img_tab {
        height: 11px;
        vertical-align: top;
    }
    .comment_tabbox .comment {
        padding: 15px 10px;
        border-bottom: 1px solid #b6b6b6;
    }
    .comment_tabbox .btn_box .img_left {
        height: 26px;
    }
    .comment_tabbox .btn_box .img_right {
        height: 25px;
    }
    .comment_tabbox .btn_box .img_left {
        float: left;
    }
    .comment_tabbox .btn_box .img_right {
        float: right;
        margin-left: 3px;
    }
    .comment .user_id {
        color: #1940be;
        font-size: 11px;
        font-weight: bold;
        line-height: 24px;
    }
    .comment .comment_txt {
        margin-bottom: 12px;
        color: #666;
        line-height: 1.5em;
        font-size: 12px;
    }
    .comment .comment_date {
        color: #999999;
        font-size: 11px;
        margin-bottom: 8px;
        line-height: 24px;
    }
    .comment .comment_link {
        font-size: 12px;
        margin-bottom: 5px;
    }
    .comment .comment_link .img_icon {
        height: 12px;
        vertical-align: middle;
    }
    .comment .comment_title {
        font-weight: bold;
        font-size: 12px;
    }
    .comment .comment_imgbox {
        font-size: 0;
    }
    .comment .comment_imgbox .img {
        max-width: 100%;
        font-size: 12px;
    }
    .btn_top {
        margin: 20px 10px 8px 0px;
        width: 54px;
        height: 26px;
        float: right;
    }

    .alert 
    {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-size:18px;
        line-height: 27px;
    }
    .alert h4 {
      margin-top: 0;
      color: inherit;
    }
    .alert .alert-link {
      font-weight: bold;
    }
    .alert > p,
    .alert > ul {
      margin-bottom: 0;
    }
    .alert > p + p {
      margin-top: 5px;
    }
    .alert-dismissable,
    .alert-dismissible {
      padding-right: 35px;
    }
    .alert-dismissable .close,
    .alert-dismissible .close {
      position: relative;
      top: -2px;
      right: -21px;
      color: inherit;
    }
    .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6;
    }
    .alert-success hr {
      border-top-color: #c9e2b3;
    }
    .alert-success .alert-link {
      color: #2b542c;
    }
    .alert-info {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1;
    }
    .alert-info hr {
      border-top-color: #a6e1ec;
    }
    .alert-info .alert-link {
      color: #245269;
    }
    .alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc;
    }
    .alert-warning hr {
      border-top-color: #f7e1b5;
    }
    .alert-warning .alert-link {
      color: #66512c;
    }
    .alert-danger {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1;
    }
    .alert-danger hr {
      border-top-color: #e4b9c0;
    }
    .alert-danger .alert-link {
      color: #843534;
    }

    .alert-info {
      background-image: -webkit-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
      background-image: -o-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
      background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#b9def0));
      background-image: linear-gradient(to bottom, #d9edf7 0%, #b9def0 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);
      background-repeat: repeat-x;
      border-color: #9acfea;
    }
    </style>
    
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/top.jpg" alt="헤더" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img01.gif" alt="2019년 화제의 남성을 위한 활력강화 제품" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img02.jpg" alt="이런남성분들게 권해드립니다" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img05.gif" alt="에너지링으로 당신의 성기능을 충전하세요" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img03.jpg" alt="에너지링 구성" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img04.jpg" alt="에너지링 ver.10minutes의 혁신적인 기술력은 10분만에 당신에게 엄청난 변화를 보여드립니다." class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img07.jpg" alt="에너지링 후기" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img06.jpg" alt="에너지링 효과" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/e_img08.jpg" alt="에너지링 고객만족도" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/back.jpg" alt="에너지링 14일 무료체험 이벤트 실시" class="img"></div>

        <div style="height: 20px;background-color: #333;"></div>

        <!-- 실시간 상담현황 -->
        <div class="rolling_content_container" id="goForm">
            <div class="title box_center">실시간 상담현황</div>
            <div class="table">
                <div class="box_thead clearfix">
                    <div class="table_left">이름</div>
                    <div class="table_right">상담내용</div>
                </div>
                <div class="box_tbody rolling_content_box">
                    <ul class="rolling_content_list">
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">김*훈</div>
                            <div class="table_right clearfix">
                                <div class="content_title">사용방법문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">김*률</div>
                            <div class="table_right clearfix">
                                <div class="content_title">프로그램문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">박*영</div>
                            <div class="table_right clearfix">
                                <div class="content_title">성관계 고민문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">김*환</div>
                            <div class="table_right clearfix">
                                <div class="content_title">부부개선 문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">박*현</div>
                            <div class="table_right clearfix">
                                <div class="content_title">가격얼마</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">최*훈</div>
                            <div class="table_right clearfix">
                                <div class="content_title">무료체험신청 문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">이*은</div>
                            <div class="table_right clearfix">
                                <div class="content_title">가격문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 실시간 상담현황 end -->

        <!-- dbform -->
        <div class="form_wrap">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
           <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">            <input type="hidden" name="mlh_name" value="nobody">
            <input type="hidden" name="mlh_age" value="0">
            <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno"> 
                <div class="form_container">
                    <dl class="user_inp_container">
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_mobileno1" class="label">연락처</label></dt>
                            <dd class="inp_box">
                                <select name="mlh_mobileno1" id="mlh_mobileno1" class="inp inp_tel input" label="연락처">
                                    <option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
                                    <option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
                                    <option <?php echo set_select('mlh_mobileno1', '016'); ?>>016</option>
                                    <option <?php echo set_select('mlh_mobileno1', '017'); ?>>017</option>
                                    <option <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
                                    <option <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
                                </select>
                                -
                                <input type="number" name="mlh_mobileno2" id="mlh_mobileno2" class="inp inp_tel input" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>">
                                -
                                <input type="number" name="mlh_mobileno3" id="mlh_mobileno3" class="inp inp_tel input" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_text" class="label">문의사항</label></dt>
                            <dd class="inp_box">
                                <textarea name="mlh_text" id="mlh_text" class="inp inp_textarea input" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
                               <?php 
                               $comment='';
                               if(!empty(element('campaign_age',element('extravars',element('post', $view)))) || element('campaign_gender',element('extravars',element('post', $view))) !=='제한없음'){
                                   $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                                   $campaign_age[0]=trim($campaign_age[0]);
                                   $campaign_age[1]=trim($campaign_age[1]);

                                   if(!empty($campaign_age[0])) $comment=$campaign_age[0].'세 이상 ';
                                   if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하 ';
                                   if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                                   $comment .='만 참여 가능합니다.';

                                   echo $comment;
                               }
                                   
                               ?>
                            </div>
                    <div class="txt_emph box_center">
                        "무료"서비스 신청이며, 14일 무료 이벤트<br>서비스외에 어떤 것으로도 사용하지 않습니다.
                    </div>
                    <div class="agree_container">
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeInfo" checked>
                            <label for="agreeInfo" class="label"> 개인정보 수집 및 활용동의</label>
                        </div>
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeMsg" checked>
                            <label for="agreeMsg" class="label txt_bold">광고성 문자메세지 수신동의</label>
                        </div>
                    </div>
                    <div class="btn_box"><button type="submit" class="btn_submit btn_img"><img src="<?=$AD_DIR?>/images/btn01.gif" alt="무료체험신청하기" class="img"></button></div>
                </div>

            <?php echo form_close(); ?>
        </div>
        <!-- dbform end -->

        <!-- 댓글 -->
        <div class="comment_container clearfix">
            <div class="comment_head clearfix">
                <div class="comment_num"><img src="<?=$AD_DIR?>/images/txt_reply_00.png" alt="댓글" class="img_comment"> <span class="num">372</span></div>
                <div class="btn_right btn_img"><img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img"></div>
            </div>
            <div class="comment_tabbox">
                <div class="comment_tab_head clearfix">
                    <div class="tab box_center"><img src="<?=$AD_DIR?>/images/txt_reply_01.png" alt="좋아요순" class="img_tab"></div>
                    <div class="tab box_center active"><img src="<?=$AD_DIR?>/images/txt_reply_02.png" alt="최신순" class="img_tab">
                    </div>
                </div>
                <ul class="comment_list">
                    <li class="comment">
                        <div class="comment_imgbox"><img src="<?=$AD_DIR?>/images/e_img10.jpg" alt="이*백" class="img"></div>
                        <div class="comment_title">무료 체험 후 가격대비 나쁘지않아 구매했습니다.</div>
                        <div class="comment_txt">나홀로 끙끙 앓고 고민하다 무료체험이라는 좋은 기회가 있어 반신반의 하는 심정으로 체험 해보았는데 개인적으론 만족스러워서 가격도 합리적이여서 구매했습니다!</div>
                        <div class="comment_date"></div>
                        <div class="comment_link"><img src="<?=$AD_DIR?>/images/icon_phone.jpg" alt="모바일" class="img_icon"> | 신고
                        </div>
                        <div class="btn_box clearfix">
                            <img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img_left">
                            <img src="<?=$AD_DIR?>/images/btn_reply_015.gif" alt="싫어요 15" class="img_right">
                            <img src="<?=$AD_DIR?>/images/btn_reply_841.gif" alt="좋아요 841" class="img_right">
                        </div>
                    </li>
                    <li class="comment">
                        <div class="comment_imgbox"><img src="<?=$AD_DIR?>/images/e_img11.jpg" alt="박*진" class="img"></div>
                        <div class="comment_title">배송도 빨라 만족합니다!</div>
                        <div class="comment_txt">비아그라로 별 효과를 못봐 고민이 많던 찰나에 우연히 에너지링 상품 구매해 사용해보니 확실한 효과가있어서 그걸로 만족합니다. 포장도 깔끔하게 오고 배송도 빨라 여러모로 만족스럽네요.</div>
                        <div class="comment_date"></div>
                        <div class="comment_link"><img src="<?=$AD_DIR?>/images/icon_phone.jpg" alt="모바일" class="img_icon"> | 신고
                        </div>
                        <div class="btn_box clearfix">
                            <img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img_left">
                            <img src="<?=$AD_DIR?>/images/btn_reply_021.gif" alt="싫어요 21" class="img_right">
                            <img src="<?=$AD_DIR?>/images/btn_reply_607.gif" alt="좋아요 607" class="img_right">
                        </div>
                    </li>
                    <li class="comment">
                        <div class="comment_imgbox"><img src="<?=$AD_DIR?>/images/e_img12.jpg" alt="김*숙" class="img"></div>
                        <div class="comment_title">잘 사용하고 있으나.. 제가 구매할땐 무료체험 없없는데..</div>
                        <div class="comment_txt">구매해서 만족하고 있습니다. 그래서 주변인에게 선물해주려고 보니 무료체험 이벤트 중이네요.. 뭐 잘쓰고는 있지만 괜히 아쉬운….ㅋㅋ</div>
                        <div class="comment_date"></div>
                        <div class="comment_link"><img src="<?=$AD_DIR?>/images/icon_phone.jpg" alt="모바일" class="img_icon"> | 신고
                        </div>
                        <div class="btn_box clearfix">
                            <img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img_left">
                            <img src="<?=$AD_DIR?>/images/btn_reply_014.gif" alt="싫어요 14" class="img_right">
                            <img src="<?=$AD_DIR?>/images/btn_reply_385.gif" alt="좋아요 385" class="img_right">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn_top">
                <a href="#">
                    <img src="<?=$AD_DIR?>/images/btn_top.gif" width="54" height="26" alt="맨위로">
                </a>
            </div>
        </div>
        <!-- 댓글 end -->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/footer.gif" alt="" class="img"></div>
    </div>
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>   
    <script>
        // 한글 조사변경
        function getPostWord(str, firstVal, secondVal) {
            try {
                var lastStr = str[str.length - 1].charCodeAt(0);
                if (lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if (lastCharIndex > 0) {
                    if (firstVal === "으로" && lastCharIndex === 8)
                        str += secondVal;
                    else
                        str += firstVal;
                } else {
                    str += secondVal;
                }
            } catch (e) {
                console.error(e);
            }

            return str;
        }
        // firstVal :: 으로 / 을 / 이 / 은 / 과
        // secondVal :: 로 / 를 / 가 / 는 / 와 

        function submitContents(f) {
            var flag = false;
            var href;


            $('.input').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agreeInfo"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

            return false;
        }

        // 당일 날짜 넣기
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth() + 1;
        var todayDate = today.getDate();

        var commentDate = todayYear + '-' + todayMonth + '-' + todayDate;
        var rollingDate = '[' + todayMonth + '-' + todayDate + ']';

        $('.rolling_content .content_date').text(rollingDate);
        $('.comment_date').text(commentDate);

        // 실시간 상담현황 롤링콘텐츠 영역
        function rollingContent() {
            $('.rolling_content_list').animate({
                'margin-top': '-30px'
            }, 200, function () {
                $('.rolling_content_list .rolling_content:nth-child(1)').appendTo('.rolling_content_list');
                $('.rolling_content_list').css('margin-top', '0');
            });
        }
        setInterval(rollingContent, 4000);

         <?php if($this->session->flashdata('mlh_id')){?>    
            _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
            $('.loading').hide();
        <?php } ?>
    </script>
</body>
</html>