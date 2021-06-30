<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">'); 
$this->managelayout->add_meta('<meta name="apple-mobile-web-app-capable" content="no">'); 
$this->managelayout->add_meta('<meta name="robots" content="index,follow">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 





    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_cid'])) $jid=$_GET['adpot_cid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>    


<title>당바이오</title>

<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/client.css?v=1">

<style>
        * {
            padding: 0;
            margin: 0;
        }

        ul, ol, li, dt, dd {
            list-style: none;
        }

        body {
            font-family: 'NanumSquare', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            font-size: 100%;
            color: #333;
            line-height: 1;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        video:focus {
            outline: none;
        }
        input[type="text"],input[type="number"],input[type="tel"]{
            text-indent: 5px;
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
        .fl_left {
            float: left;
        }
        .fl_right {
            float: right;
        }

        .wrap {
            width: 100%;
            min-width: 320px;
            max-width: 700px;
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

        .txt_center {
            text-align: center;
        }

        .txt_emph {
            color: #d51430;
            font-weight: bold;
        }

        .txt_bold {
            font-weight: bold;
        }

        .gif02 {
            padding: 0 4.2858%;
        }
        .gif03 {
            padding: 0 3.4286%;
        }
        .gif03 .gif_gif_box {
            float: left;
            width: 57.6687%;
        }
        .gif03 .gif_img_box {
            float: right;
            width: 42.3313%;
        }
        .gif04 {
            padding: 0 3.4286%;
        }
        .video_box {
            width: 100%;
        }
        .video_box .video {
            width: 100%;
        }

        .gif_container {
            padding-left: 5.7%
        }
        .gif_container .gif_box01 {
            position: relative;
            width: 66.202%;
            font-size: 0;
        }
        .gif_container .gif_box01 .tag {
            position: absolute;
            width: 18.8572vw;
            max-width: 132px;
            top: -5.93%;
            right: -8.24%;
        }
        .gif_container .gif_box02 {
            width: 33.783%;
            font-size: 0;
        }
        .gif_container .img {
            width: 100%;
            font-size: 10px;
        }
        /*  */
        .title_box01 {
            padding: 0 2% 5%;
        }

        /* popup */
        .popup_wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 900;
            display: none;
        }

        .popup_container_agree {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 90%;
            max-width: 640px;
            height: 90%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .popup_container_agree .popup_content {
            overflow-y: auto;
            padding: 8% 5%;
            height: calc(100% - 50px);
            box-sizing: border-box;
            font-size: 13px;
            line-height: 1.4;
        }

        .popup_container_agree .title01 {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: bold;
        }

        .popup_container_agree .txt {
            margin-top: 10px;
        }

        .popup_container_agree .title02 {
            margin-top: 14px;
            font-size: 14px;
            font-weight: bold;
        }

        .popup_container_agree .table {
            margin-top: 10px;
        }

        .popup_container_agree .table table {
            width: 100%;
            border-collapse: collapse;
        }

        .popup_container_agree .table th,
        .popup_container_agree .table td {
            padding: 5px 3px;
            text-align: center;
            border: 1px solid #999;
        }

        .popup_container_agree .popup_btn_box {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .popup_container_agree .btn_close {
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            background-color: #333;
            color: #fff;
            font-size: 16px;
        }
        /* 알아보기 버튼 */
        .go_form_fixed {
            width: 117px;
            max-width: 27%;
            position: absolute;
            /* top: 20%; */
            bottom: 18%;
            right: 4%;
            z-index: 800;
        }

        .go_form_fixed .btn_close {
            position: absolute;
            top: -12.5px;
            right: -12.5px;
            width: 25px;
            border-radius: 50%;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.15);
            border: none;
        }
        /* form */
        .form_container {
            padding: 0;
            /* background-image: url('<?=$AD_DIR?>/images/db_bg.jpg'); */
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: 100%;
        }
        .form_table {
            width: 94%;
            margin: 0 auto;
        }
        .form_table .lab_box {
            padding: 0 4.5% 4.5% 0;
            text-align: right;
            white-space: nowrap;
        }
        .form_table .lab {
            font-size: 6vw;
            color: #2f2d2d;
            font-weight: normal;
        }
        .form_table .inp_box {
            padding: 0 0 4.5% 0;
            font-size: 4vw;
            color: #2f2d2d;
        }
        .form_table .inp {
            width: 75%;
            height: 7.1429vw;
            max-height: 50px;
            padding: 3px;
            box-sizing: border-box;
            border: 1px solid #a8a8a8;
            box-shadow: inset 3px 3px 5px rgba(0, 0, 0, 0.1);
            font-size: 4vw;
            color: #2f2d2d;
        }
        .form_table .inp_radio {
            vertical-align: middle;
        }
        .form_table .inp_radio:not(:first-child) { 
            margin-left: 3%;
        }
        .form_table .lab_radio { 
            vertical-align: middle;
        }
        .form_container .btn_img {
            width: 87.4286%;
        }
        .form_container .txt_notice {
            margin: 4% 0;
            color: #848484;
            line-height: 1.4;
        }
        .form_container .txt_notice01 {
            font-size: 3.2858vw;
        }
        .form_container .txt_notice02 {
            font-size: 2.8572vw;
        }
        .form_container .btn_box {
            position: relative;
            margin-top: 2%;
        }
        .form_container .tag_btnimg {
            position: absolute;
            top: -54%;
            right: 2%;
            width: 15.1429%;
        }
        .form_container .inp_agree {
            vertical-align: middle;
        }
        .form_container .agree_check {
            font-size: 13px;
            vertical-align: middle;
            color: #989898;
        }
        .form_container .btn_popup {
            background-color: transparent;
            border: none;
            font-size: 13px;
            vertical-align: middle;
            color: #989898;
        }
        /* 추가 댓글 스타일 */
        .comment_container {
            /*margin-top: 40px;*/
            margin-bottom: 11%;
            border-top: 1px solid #efefef;
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        .comment_container .comment_amount {
            padding: 0 28px;
            font-size: 15px;
            font-weight: 800;
            color: #000;
            line-height: 48px;
        }
        .comment_container .comment_margin_box {
            height: 12px;
            border-top: 1px solid #efefef;
            border-bottom: 1px solid #efefef;
            background-color: #f1f2f4;
        }
        .comment_container .comment_tab_list {
            padding: 0 28px;
            border-bottom: 1px solid #efefef;
        }
        .comment_container .comment_tab {
            margin-right: 24px;
            font-size: 15px;
            font-weight: 600;
            color: #000;
            line-height: 64px;
        }
        .comment_container .comment_tab_active {
            text-decoration: underline;
            text-underline-position: under;
        }
        .comment_container .comment_form {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #efefef;
        }
        .comment_container .comment_inp {
            float: left;
            width: calc(100% - 110px);
            padding: 13px 10px;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ddd;
            cursor: text;
        }
        .comment_container .comment_btn_submit {
            float: right;
            width: 100px;
            padding: 13px 0;
            font-size: 16px;
            text-align: center;
            border-radius: 5px;
            color: #fff;
            background-color: #2565cf;
        }
        .comment_container .comment_box {
            padding: 30px 18px;
            border-bottom: 1px solid #efefef;
        }
        .comment_container .comment_profile {
            float: left;
            margin-right: 12px;
            width: 35px;
        }
        .comment_container .comment_profile .img {
            width: 100%;
        }
        .comment_container .comment_best {
            float: left;
            width: 46px;
            margin-right: 10px;
            margin-top: 2px;
        }
        .comment_container .comment_best .img {
            width: 100%;
        }
        .comment_container .comment_info {
            float: left;
        }
        .comment_container .comment_user {
            font-size: 15px;
            color: #000;
            font-weight: bold;
        }
        .comment_container .comment_date {
            margin-top: 4px;
            font-size: 12px;
            color: #b8b8b8;
        }
        .comment_container .comment_body {
            margin-top: 14px;
            padding-left: 45px;
        }
        .comment_container .comment_text {
            font-size: 18px;
            line-height: 1.4;
            color: #4f4f4f;
            word-break: keep-all;
        }
        .comment_container .comment_images {
            margin-top: 10px;
        }
        .comment_container .comment_images .img {
            width: 29.887%;
            margin-right: 1.6%;
        }
        .comment_container .comment_btn_box {
            margin-top: 5.14%;
            text-align: right;
        }
        .comment_container .comment_btn {
            vertical-align: middle;
            font-size: 13px;
            margin-left: 6px;
            cursor: pointer;
        }
        .comment_container .comment_btn .icon {
            vertical-align: text-bottom;
            width: 16px;
        }
        .comment_container .comment_btn_like {
            color: #f00;
        }
        .comment_container .comment_btn_unlike {
            color: #000;
        }
        .comment_container .comment_more_box {
            padding-top: 24px;
            text-align: center;
        }
        .comment_container .comment_btn_more {
            font-size: 16px;
            font-weight: bold;
        }
        .comment_container .comment_btn_more .emph_num {
            color: #001eff;
        }

        /* 추가 댓글 스타일 end */


        @media screen and (min-width: 481px){
            .form_table .lab {
                font-size: 36px;
            }
            .form_table .inp_box {
                font-size: 26px;
                color: #2f2d2d;
            }
            .form_table .inp {
                font-size: 28px;
            }
            .form_container .txt_notice01 {
                font-size: 23px;
            }
            .form_container .txt_notice02 {
                font-size: 20px;
            }
            .form_container .agree_check {
                font-size: 16px;
            }
            .form_container .btn_popup {
                font-size: 16px;
            }
        }
        @media screen and (max-width: 480px){
            .comment_container .comment_text {
                font-size: 16px;
            }
        }

        .inDB,
        .inDB * {
            outline:none;
            padding:0;            
            border:0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .inDB {
            color:#fff;
            background-color: #00c993;
            padding:20px 10px;
        }

        @media screen and (min-width: 481px){
            .inbox dl dt,.inbox dl dd { display:table-cell;vertical-align:middle; font-size:24px; }
            .inbox input[type="text"],.inbox input[type="number"] { width:100%; font-size:22px; font-weight:bold; background: #fff; border:0; padding:4px; }
            .inbox .radio label { font-size:22px; margin-left: 3px; letter-spacing:-.5px; }
            .inbox .checkbox { text-align: center; font-size:20px; }
            .inbox summary { display:block;  text-align:center; color:#000; font-size:22px;font-weight:bold; margin-top:15px; line-height: 150%;}
        }

        @media screen and (max-width: 480px){
            .inbox dl dt,.inbox dl dd { display:table-cell;vertical-align:middle; font-size:16px; }
            .inbox input[type="text"],.inbox input[type="number"] { width:100%; font-size:14px; font-weight:bold; background: #fff; border:0; padding:4px; }
            .inbox .radio label { font-size:14px; margin-left: 3px; letter-spacing:-.5px; }
            .inbox .checkbox { text-align: center; font-size:12px; }
            .inbox summary { display:block;  text-align:center; color:#000; font-size:14px;font-weight:bold; margin-top:15px; line-height: 150%;}
        }

        .inbox dl { display:table;width:100%; margin-bottom:20px;padding-top:20px; }
        
        .inbox dl dt { width:15%; text-align:center; font-weight:bold; }
        .inbox dl dd { width:35%; }
        .inbox dl.nth3 .sec1 { width:20%; }
        .inbox dl.nth3 .sec2 { width:30%; }
        
        .inbox .radio { display: inline-block; cursor:pointer; }
        
        .inbox .radio + .radio { margin-left:10px; }
        .inbox .db-btn { text-align:center; padding:10px 0; }
        .inbox .db-btn img { max-width:250px; vertical-align:bottom; }
        
        .inbox .checkbox input[type="checkbox"] { position: relative; top:3px; margin-right: 3px; }
        .inbox .checkbox span { cursor: pointer; }
        button , label { cursor: pointer; }

    </style>
    <style>
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



<div id="view-app">
	<?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
	<?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
<p><img src="<?=$AD_DIR?>/images/c01.png"></p><p><span style="font-size: 16px;"></span></p><div class="form-preset" style="background-color:#CFD8DC"><div class="form-header"><h6></h6></div>


<table><tbody>
<?php
$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
echo form_open(current_full_url(), $attributes);
?>
<input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
<input type="hidden" name="jid" value="<?php echo $jid?>">     
<input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
<input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno"> 
<tr>
<th>이름</th><td><input name="mlh_name" id="mlh_name" class="form-control input"  type="text" placeholder="이름을 입력해주세요" autocomplete="off" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td></tr>
<tr>
<th>나이</th>
<td><input name="mlh_age" id="mlh_age" class="form-control input"  type="number" maxlength="3" placeholder="나이를 입력해주세요" autocomplete="off" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></td></tr>
<tr>
<th>연락처</th>
<td><div class="input-group input-group-justified"><div class="input-group">
<select name="mlh_mobileno1" id="mlh_mobileno1" class="form-control input" label="연락처">
	<option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
	<option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
	<option <?php echo set_select('mlh_mobileno1', '016'); ?>>016</option>
	<option <?php echo set_select('mlh_mobileno1', '017'); ?>>017</option>
	<option <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
	<option <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
</select>
</div>
<div class="input-group">
<input name="mlh_mobileno2" id="mlh_mobileno2" class="form-control input"  type="number" maxlength="4" autocomplete="off" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"></div>
<div class="input-group"><input name="mlh_mobileno3" id="mlh_mobileno3" class="form-control input"  type="number" maxlength="4" autocomplete="off" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>"></div></div></td>
</tr>
<tr><th>문의사항</th>
<td><textarea name="mlh_text" id="mlh_text" class="form-control input" placeholder="문의사항을 입력해주세요" rows="5" autocomplete="off" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></td>
</tr></tbody></table>

<div class="form-footer"><div class="btn-agree">
<label><input type="checkbox" name="agreement" id="agree" style="margin-right:4px;"  checked=""><span>개인정보수집 정책에 동의합니다.</span></label> <a href="#" class="btn-show">[자세히 보기]</a></div>
<div class="agreement"><h3>개인정보수집정책</h3><ol><li>개인정보 수집 및 이용</li><li>개인정보 수집항목 : 이름, 성별, 연락처, 내용</li><li>개인정보 수집 및 이용목적 : 상담 활용 (전화, 문자)</li><li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li><li>상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 상담 안내 및 이벤트 참여가 불가능 합니다.</li></ol></div>

<div class="btn-agree2"><label><input type="checkbox" name="agreement2" id="agree2" style="margin-right:4px;"  checked=""><span>광고성정보수집 정책에 동의합니다.</span></label> <a href="#" class="btn-show">[자세히 보기]</a></div>

<div class="agreement2"><h3>광고성 수신 동의</h3><ol><li>이용목적</li><li>- 상품, 서비스의 판매, 정보제공, 홍보, 가입권유 활동(쿠폰발송 등 판촉광고포함), 리서치(고객설문/시장조사 및 고객만족도, 조사), 제반 이벤트/프로모션 활동(사은행사, 판촉행사 등), 상품/서비스에 대한 이용실적 정보 및 활용</li><li>* 전자우편(E-mail) / 우편물(DM) / 문자(SMS, LMS, MMS) / 대면접촉/텔레마케팅(전화) , 메신저(카카오톡, 라인 등), 우편 등의 방법을 통해 정보 정송</li></ol><ol><li>수집항목</li><li>- 이용자 등의 성명 , 암호화된 동일 인식별정보(CI), 성별, 주소(집/회사), 연락처(휴대전화번호, 유선전화번호), 이메일 주소, 서비스 이용과정에서 발생한 상품 또는 서비스 구매 내역, 접속기록</li></ol><ol><li>보유기간</li><li>- 이용자 등의 개인정보는 서비스 운영기간 동안 보유, 이용되며 , 광고성 정보 등을 제공 받는 일에 거부하는 의사를 밝힐 경우 지체 없이 파기합니다.</li></ol></div>

<div class="btn-submit"><button type="submit" class="btn_submit btn_img"><img src="<?=$AD_DIR?>/images/btn.png" alt="무료체험신청하기" style="vertical-align: middle; width: 100%; height: auto;"></button>
	
<p>기입하신 수집된 정보는 본 이벤트 이외에 어떤용도로도 사용되지 않습니다!</p></div></div></div>
<?php echo form_close(); ?>

<p></p><p><img src="<?=$AD_DIR?>/images/c02.png"></p>
<p><span style="font-size: 16px;"></span></p><div class="form-preset" style="background-color:#CFD8DC"><div class="form-header"><h6></h6></div>
<?php
$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
echo form_open(current_full_url(), $attributes);
?>
<input type="hidden" name="post_id" id="post_id_" value="<?php echo element('post_id',element('post', $view));?>">
<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
<input type="hidden" name="jid" value="<?php echo $jid?>">     
<input type="hidden" name="multi_code" id="multi_code_" value="<?php echo element('multi_code',$view);?>">
<input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno_"> 

<table><tbody><tr><th>이름</th><td><input name="mlh_name" id="mlh_name_" class="form-control input2"  type="text" placeholder="이름을 입력해주세요" autocomplete="off" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td></tr>
<tr><th>나이</th><td><input name="mlh_age" id="mlh_age_" class="form-control input2"  type="number" maxlength="3" placeholder="나이를 입력해주세요" autocomplete="off" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" ></td></tr>
<tr><th>연락처</th><td><div class="input-group input-group-justified"><div class="input-group">
<select name="mlh_mobileno1" id="mlh_mobileno1_" class="form-control input2" label="연락처">
<option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
	<option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
	<option <?php echo set_select('mlh_mobileno1', '016'); ?>>016</option>
	<option <?php echo set_select('mlh_mobileno1', '017'); ?>>017</option>
	<option <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
	<option <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
</select>
</div>
<div class="input-group"><input name="mlh_mobileno2" id="mlh_mobileno2_" class="form-control input2" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"  type="number" maxlength="4" autocomplete="off" onblur="numcheck2(this)"></div>
<div class="input-group"><input name="mlh_mobileno3" id="mlh_mobileno3_" class="form-control input2" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>"  type="number" maxlength="4" autocomplete="off" onblur="numcheck2(this)"></div>
</div></td></tr>
<tr><th>문의사항</th><td><textarea name="mlh_text" id="mlh_text_" class="form-control input2" placeholder="문의사항을 입력해주세요" rows="5" autocomplete="off" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></td></tr></tbody>
</table>

<div class="form-footer"><div class="btn-agree"><label><input type="checkbox" id="agree3" name="agreement" style="margin-right:4px;"  checked=""><span>개인정보수집 정책에 동의합니다.</span></label> <a href="https://www.ysad.co.kr/ad/6ecebc549b7826f313f20713eef6aff3#" class="btn-show">[자세히 보기]</a></div>

<div class="agreement"><h3>개인정보수집정책</h3><ol><li>개인정보 수집 및 이용</li><li>개인정보 수집항목 : 이름, 성별, 연락처, 내용</li><li>개인정보 수집 및 이용목적 : 상담 활용 (전화, 문자)</li><li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li><li>상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 상담 안내 및 이벤트 참여가 불가능 합니다.</li></ol></div>

<div class="btn-agree2"><label><input type="checkbox" name="agreement2" id="agree4" style="margin-right:4px;"  checked=""><span>광고성정보수집 정책에 동의합니다.</span></label> <a href="#" class="btn-show">[자세히 보기]</a></div>

<div class="agreement2"><h3>광고성 수신 동의</h3><ol><li>이용목적</li><li>- 상품, 서비스의 판매, 정보제공, 홍보, 가입권유 활동(쿠폰발송 등 판촉광고포함), 리서치(고객설문/시장조사 및 고객만족도, 조사), 제반 이벤트/프로모션 활동(사은행사, 판촉행사 등), 상품/서비스에 대한 이용실적 정보 및 활용</li><li>* 전자우편(E-mail) / 우편물(DM) / 문자(SMS, LMS, MMS) / 대면접촉/텔레마케팅(전화) , 메신저(카카오톡, 라인 등), 우편 등의 방법을 통해 정보 정송</li></ol><ol><li>수집항목</li><li>- 이용자 등의 성명 , 암호화된 동일 인식별정보(CI), 성별, 주소(집/회사), 연락처(휴대전화번호, 유선전화번호), 이메일 주소, 서비스 이용과정에서 발생한 상품 또는 서비스 구매 내역, 접속기록</li></ol><ol><li>보유기간</li><li>- 이용자 등의 개인정보는 서비스 운영기간 동안 보유, 이용되며 , 광고성 정보 등을 제공 받는 일에 거부하는 의사를 밝힐 경우 지체 없이 파기합니다.</li></ol></div>

<div class="btn-submit"><button type="submit" class="btn_submit btn_img"><img src="<?=$AD_DIR?>/images/btn.png" alt="무료체험신청하기" class="img" style="vertical-align: middle; width: 100%; height: auto;"></button>
<p>기입하신 수집된 정보는 본 이벤트 이외에 어떤용도로도 사용되지 않습니다!</p></div></div></div>
<p><img src="<?=$AD_DIR?>/images/foot2.jpg"></p>
<p><img src="<?=$AD_DIR?>/images/foot1.jpg"></p>
</div>


<?php echo form_close(); ?>
<div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
    <div class="dot_container" >
        <div class="dot dot01"></div>
        <div class="dot dot02"></div>
        <div class="dot dot03"></div>
    </div>
</div>
<script type="text/javascript">
$(document).on('click', '.btn-agree .btn-show', function(event) {
  event.preventDefault();
  $('.agreement').css({'display': 'block'});
});

$(document).on('click', '.btn-agree2 .btn-show', function(event) {
  event.preventDefault();
  $('.agreement2').css({'display': 'block'});
});

	
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

            if ($('input[id="agree"]').is(":checked") && $('input[id="agree2"]').is(":checked")) {
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
            } else alert('개인정보 수집 및 광고성정보수집 동의를 체크 해주시기 바랍니다.');

            return false;
        }

        function submitContents2(f) {
            var flag = false;
            var href;


            $('.input2').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree3"]').is(":checked") && $('input[id="agree4"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id_').val() +'/' + $('#multi_code_').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno_").val($("#mlh_mobileno1_").val()+$("#mlh_mobileno2_").val()+$("#mlh_mobileno3_").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 광고성정보수집 동의를 체크 해주시기 바랍니다.');

            return false;
        }

         <?php if($this->session->flashdata('mlh_id')){?>    
            
            $('.loading').hide();
        <?php } ?>
    </script>
</body>
</html>