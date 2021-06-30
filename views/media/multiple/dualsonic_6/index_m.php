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
  <meta name="format-detection" content="telephone=no"/>
    <title>듀얼소닉</title>
    <style>
    * {padding: 0;margin: 0;}
    ul,ol,li,dt,dd {list-style: none;}
    body {
        font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        font-size: 100%;
        color: #333;
        line-height: 1.5;
    }
    a {
        color: inherit;
        text-decoration: none;
    }
    video:focus {
        outline: none;
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
        padding-bottom: 49px;
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
    .inp {
        box-sizing: border-box;
        color: #141414;
        border:1px solid #d3d3d3;
        border-radius: 1.5625vw;
        font-size: 15px;
        font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
    }
    .btn_fixed {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 800;
        height: 49px;
    }
    .btn_fixed .img {
        height: 100%;
        width: auto;
    }
    .go_form {
        position: relative;
    }
    .go_form .btn_go_form {
        position: absolute;
        bottom: 2.3%;
        right: 4.6%;
        width: 49.6%;
    }
    .video_box01 {
        position: relative;
        width: 100%;
        height: 0;
    }
    .video_box01_16_9 {padding-bottom: 56.25%;}
    .video_box01_4_3 {padding-bottom: 75%;}
    .video_box01 iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .video_container01 {
        background-image: url('<?php echo $AD_DIR?>/images_m/bg_video01.jpg');
        background-repeat: no-repeat;
        background-color: #b9a698;
        background-size: 100%;
        background-position: center top;
        padding-bottom: 7.8%;
    }
    .video_container01 .video_box02 {
        position: relative;
        height: 0;
        padding-bottom: 54.68%;
    }
    .video_container01 .video_box02 video {
        position: absolute;
        width: 83.6%;
        height: 100%;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: #000;
    }
    .slide_wrap {
        position: relative;
        overflow: hidden;
    }
    .slide_wrap .slide_container {
        width: 400%;
    }
    .slide_wrap .slide_item {
        float: left;
        width: 25%;
    }
    .slide_wrap .btn_slide {
        position: absolute;
        top: 48%;
        right: 0;
        width: 10.939%;
        background-color: transparent;
        border: none;
    }
    .slide_wrap .btn_slide:focus {
        outline: none;
    }
    .video_beauty {
        background-color: #3e1011;
        padding-bottom: 6.25%;
    }
    .video_beauty .viedo_beauty_box {
        width: 92.1875%;
        margin: 0 auto;
        box-sizing: border-box;
        padding: 1.5%;
        background-color: #fff;
        font-size: 0;
    }
    .video_beauty .viedo_beauty_box:not(:first-child) {
        margin-top: 1.8%;
    }
    .video_beauty .viedo_beauty_box video {
        width: 100%;
        font-size: 100%;
    }
    .form_container {
        background-color: #3e1012;
        padding-top: 6.25%;
    }
    .form_container .inp_container {
        padding: 0 7.03125%;
        margin: 0 auto;
    }
    .form_container .inp_box {
        box-sizing: border-box;
        padding: 0 4px;
        color: #fff;
    }
    .form_container .row .inp_box {
        width: 65.4546%;
    }
    .form_container .row_02 {
        padding-left: 10.9090%;
    }
    .form_container .row_02 .inp_box {
        width: 49.99%;
    }
    .form_container .row_02 .inp_box_age {
        width: 57.4%;
    }
    .form_container .row,
    .form_container .row_02 {
        margin-bottom: 3.9%;
    }
    .form_container .cell {
        float: left;
        box-sizing: border-box;
    }
    .form_container .cell:nth-child(2n-1){
        width: 53.46%;
    }
    .form_container .cell:nth-child(2n) {
        width: 46.54%;
        padding-left: 5px;
    }
    .form_container .label_box {
        float: left;
    }
    .form_container .row .label_box {
        width: 34.5454%;
        padding-left: 10.9090%;
        box-sizing: border-box;
    }
    .form_container .row_02 .label_box {
        width: 50.01%;
    }
    .form_container .row_02 .label_box_age {
        width: 42.6%;
    }
    .form_container .inp_box {
        float: left;
        font-size: 3.75vw;
    }
    .form_container .inp {
        height: 7.03vw;
        width: 100%;
        font-size: 4.3vw;
        vertical-align: middle;
    }
    .form_container .row .inp {
        width: 100%;
    }
    .form_container .row .inp_tel {
        width: 28%;
    }
    .form_container .agree_box {
        text-align: center;
        margin-bottom: 4.6%;
    }
    .form_container .inp_check {
        vertical-align: middle;
    }
    .form_container .label_check {
        font-size: 15px;
        color: #fff;
        vertical-align: middle;
        letter-spacing: -0.05em;
    }
    .form_container .btn_box {
        text-align: center;
        font-size: 0;
    }
    .form_container .btn_submit {
        width: 70%;
        max-width: 305px;
    }
    .footer {
    padding: 7% 4% 5%;
    background-color: #ebebeb;
    font-size: 12px;
    color: #414141;
    line-height: 1.6;
    text-align: center;
    }
    .footer .row {
        margin-bottom: 3px;
    }
    .footer strong {
        font-weight: normal;
        color: #141414;
    }
    .btn_popup_agree {
        padding: 4px 8px;
        font-size: 13px;
        line-height: 1;
        background-color: #ddd;
        border: none;
        border-radius: 3px;
    }
    .popup_wrap {
        position: fixed;
        top: 0;
        left: auto;
        width: 100%;
        max-width: 640px;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 900;
        display: none;
    }
    .popup_container_agree {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 90%;
        height: 90%;
        transform: translate(-50%,-50%);
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        display: none;
    }
    .popup_container_agree .popup_content {
        overflow-y: auto;
        padding: 5% 4%;
        height: calc(100% - 45px);
        box-sizing: border-box;
        font-size: 13px;
        line-height: 1.4;
    }
    .popup_container_agree .title01 {
        margin-bottom: 10px;
        font-size: 15px;
        font-weight: bold;
    }
    .popup_container_agree .title02 {
        margin-top: 14px;
        font-size: 14px;
        font-weight: bold;
    }
    .popup_container_agree .txt {
        margin-top: 10px;
    }
    .popup_container_agree .popup_btn_box {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    .popup_container_agree .btn_close {
        display: block;
        width: 100%;
        height: 45px;
        border: none;
        background-color: #333;
        color: #fff;
        font-size: 16px;
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
    @media screen and (min-width: 641px) {
        .wrap {padding-bottom: 49px;}
        .inp {border-radius: 10px;}
        .form_container .inp_box {font-size: 24px;}
        .form_container .inp {
            height: 45px;
            font-size: 28px;
        }
    }
    @media screen and (max-width: 359px) {
        .form_container .label_check {font-size: 13px;}
    }
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
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <!-- 하단 고정 버튼영역 -->
        <div class="btn_fixed btn_img"><a href="#formWrap"><img src="<?php echo $AD_DIR?>/images_m/btn_go_db01.gif" alt="경품 받으러 가기" class="img"></a></div>
        <!-- 본문 -->
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_01.jpg" alt="명품 뷰티 디바이스 듀얼소닉" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_02.jpg" alt="듀얼소닉 특징" class="img"></div>

        <!-- 렌탈 상담 접수하기 GO -->
        <div class="img_box go_form">
            <img src="<?php echo $AD_DIR?>/images_m/a_03.jpg" alt="듀얼소닉 렌탈비용" class="img">
            <div class="btn_go_form btn_img">
                <a href="#formWrap" class="link_go_form"><img src="<?php echo $AD_DIR?>/images_m/btn_go_db02.png" alt="렌탈 상담 접수하기 go" class="img"></a>
            </div>
        </div>
        <!-- 렌탈 상담 접수하기 GO end-->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_04.jpg" alt="듀얼소닉 사용법" class="img"></div>

        <!-- 유튜브 영상영역 -->
        <div class="video_box01 video_box01_16_9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N9B6MQuMBpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- 유튜브 영상영역 end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_05.jpg" alt="듀얼소닉 4주, 그 놀라운 변화" class="img"></div>

        <!-- 이미지 슬라이드 영역 -->
        <div class="slide_wrap">
            <ul class="slide_container">
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide01.jpg" alt="눈가주름 팔자주름감소" class="img"></li>
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide02.jpg" alt="진피치밀도 증가" class="img"></li>
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide03.jpg" alt="안면리프팅개선" class="img"></li>
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide04.jpg" alt="피부 속탄력 증가 피부 속보습 증가" class="img"></li>
            </ul>
            <button class="btn_slide btn_img" id="btnSlide"><img src="<?php echo $AD_DIR?>/images_m/btn_slide.png" alt="다음이미지" class="img"></button>
        </div>
        <!-- 이미지 슬라이드 영역 end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_06.jpg" alt="듀얼소닉 효과" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_07.jpg" alt="듀얼소닉을 직접 경험한 고객님의 생생 리뷰" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_08.jpg" alt="차원이 다른 HIFU리프팅 기기 듀얼소닉" class="img"></div>

        <!-- 영상 -->
        <div class="video_container01">
            <div class="video_box02">
                <video controls preload="metadata">
                    <source src="<?php echo $AD_DIR?>/video_m/video01.mp4#t=0.5" type="video/mp4">
                </video>
            </div>
        </div>
        <!-- 영상 end -->

        <div class="img_box">
            <img src="<?php echo $AD_DIR?>/images_m/a_09.jpg" alt="세계최초 특허 듀얼 레이어 기술 독점개발" class="img">
        </div>
        
        <!-- 렌탈 상담 접수하기 GO -->
        <div class="img_box go_form">
            <img src="<?php echo $AD_DIR?>/images_m/a_03.jpg" alt="듀얼소닉 렌탈비용" class="img">
            <div class="btn_go_form btn_img">
                <a href="#formWrap" class="link_go_form"><img src="<?php echo $AD_DIR?>/images_m/btn_go_db02.png" alt="렌탈 상담 접수하기 go" class="img"></a>
            </div>
        </div>
        <!-- 렌탈 상담 접수하기 GO end-->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_10.jpg" alt="듀얼소닉 기능" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_11.jpg" alt="듀얼소닉 사용전후 사진" class="img"></div>

        <!-- 인기 뷰티 프로그램 속 듀얼소닉 -->
        <div class="video_beauty">
            <div class="viedo_beauty_box">
                <video controls preload="metadata">
                    <source src="<?php echo $AD_DIR?>/video_m/video02.mp4#t=0.5">
                </video>
            </div>
            <div class="viedo_beauty_box">
                <video controls preload="metadata">
                    <source src="<?php echo $AD_DIR?>/video_m/video03.mp4#t=0.5">
                </video>
            </div>
        </div>
        <!-- 인기 뷰티 프로그램 속 듀얼소닉 end -->

        <!-- dbform -->
        <div class="form_wrap" id="formWrap">
             <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_12.jpg" alt="듀얼소닉은 단순 LED빛을 쐬는 기계가 아닙니다. 최첨단 HIFU기술을 통해 피부깊숙한 곳까지 침투하여 단한번 사용에도 기적같은 효과를 선사해드릴것입니다." class="img"></div>
            <div class="form_container">
                <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno"> 
                
                    <div class="form_box">
                        <div class="inp_container">
                            <div class="row clearfix">
                                <div class="label_box img_box">
                                    <label for="mlh_name" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_01.png" alt="이름" class="img_label img"></label>
                                </div>
                                <div class="inp_box"><input class="inp input" label="이름" type="text" name="mlh_name" id="mlh_name" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></div>
                            </div>
                            <div class="row_02 clearfix">
                                <div class="cell clearfix">
                                    <div class="label_box img_box">
                                        <label for="mlh_gender" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_02.png" alt="성별" class="img_label img"></label>
                                    </div>
                                    <div class="inp_box" style="text-align:center">
                                        <input type="radio" value="1" id="mlh_gender1" name="mlh_gender" class="input" label="성별" <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                <label for="mlh_gender1" class="mr20">여성</label><br>
                                <input type="radio" value="2" id="mlh_gender2" name="mlh_gender" class="input" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                <label for="mlh_gender2">남성</label>
                                </div>
                                </div>
                                <div class="cell clearfix">
                                    <div class="label_box img_box label_box_age">
                                        <label for="mlh_age" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_03.png" alt="나이" class="img_label img"></label>
                                    </div>
                                    <div class="inp_box inp_box_age"><input class="inp input" label="나이" type="tel" name="mlh_age" id="mlh_age"  value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="label_box img_box">
                                    <label for="mlh_mobileno1" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_04.png" alt="연락처" class="img_label img"></label>
                                </div>
                                <div class="inp_box">
                                    <select class="input inp inp_tel" name="mlh_mobileno1" id="mlh_mobileno1" label="연락처">
                                        <option value="010" <?php echo set_select('mlh_mobileno1','010' ,true); ?>>010</option>
                                        <option value="011" <?php echo set_select('mlh_mobileno1','011'); ?>>011</option>
                                        <option value="017" <?php echo set_select('mlh_mobileno1','017' ); ?>>017</option>
                                        <option value="018" <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
                                        <option value="019" <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
                                    </select> -
                                    <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="input inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"> -
                                    <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="input inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="label_box img_box">
                                    <span for="" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_03_1.png" alt="렌탈상품" class="img_label img"></span>
                                </div>
                                 <div class="inp_box" style="line-height:34px;padding-left: 10px;">
                                    <input type="radio" value="1" name="mlh_goods_type" id="mlh_goods_type" label="렌탈상품" class="input" <?php echo set_checkbox('mlh_goods_type','1' ,true); ?>>
                                    <label for="mlh_goods_type" class="label_radio">럭셔리</label>
                                    <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type_" label="렌탈상품" class="input" style="margin-left:10px;" <?php echo set_checkbox('mlh_goods_type_','2'); ?>>
                                    <label for="mlh_goods_type_" class="label_radio">프로페셔널</label>
                                </div>
                                
                               
                            </div>
                            <div class="row clearfix">
                                <div class="label_box img_box" style="padding-left: 0;">
                                    <label for="mlh_text" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_05.png" alt="통화가능시간" class="img_label img"></label>
                                </div>
                                <div class="inp_box"><textarea class="inp input" label="통화가능시간" name="mlh_text" id="mlh_text"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></div>
                            </div>
                        </div>
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
                        <div class="agree_box">
                            <input type="checkbox" name="agree" id="agree" class="inp_check">
                            <label for="agree" class="label_check">개인정보 수집 및 제공에 관한 동의</label><br>
                            <button type="button" class="btn_popup_agree" onclick="openPopup('popupAgree')">자세히 보기</button>
                        </div>
                        <div class="btn_box">
                            <button type="submit" class="btn_img btn_submit"><img src="<?php echo $AD_DIR?>/images_m/btn_db.jpg" alt="경품 받으러 가기" class="img"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- dbform end -->
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_13.jpg" alt="듀얼소닉, 따라올수 없는 기술력" class="img"></div>
        <div class="footer">
            <div class="row">
                <strong>지온메디텍</strong> ｜ 경기도 안양시 동안구 학의로 250 관양두산벤처다임 403, 404, 406호
            </div>
            <div class="row">
                대표 : 박종철 ｜ 통신판매신고번호 : 2019-안양동안-0888 ｜ 사업자 등록증 번호 : 888-14-00275
            </div>
            <div class="row">
                TEL : 031-8002-0079 ｜ FAX : 031-360-0811 ｜ E-mail: webmaster@jionmeditech.com
            </div>
        </div>

        <!-- popup -->
        <div class="popup_wrap" id="popupWrap">
            <div class="popup_container_agree" id="popupAgree">
                <div class="popup_content">
                    <div class="title01">개인정보 취급방침</div>
            
                    <div class="txt">
                        지온메디텍 (이하 “회사”)은 고객의 개인정보를 중요시 하며, 『정보통신망이용 촉진 및 정보 보호 등에 관한 법률 』 상의 개인정보보호 규정 및 정보통신부가 제정한 『 개인정보보호 및 취급방침』을 준수하고 있습니다. 회사는 개인정보취급방침을 통해 아래와 같이 제공해주시는 개인정보의 수집 및 이용목적과 개인정보보호를 위한 회사의 조치 사항을 고지합니다.
                    </div>
                    
                    <div class="title02">1. 개인정보 수집 이용 제공 등에 대한 동의</div>
                    <div class="txt">
                        회사는 고객이 회사가 제공하는 안내 및 상담신청에 귀하가 제공한 정보는 개인정보취급방침에 명시된 내용 이외의 목적으로는 사용되지 아니합니다.
                    </div>
                    
                    <div class="title02">2. 수집하는 개인정보의 범위 및 수집방법</div>
                    <div class="txt">
                        회사에서는 귀하의 상담신청 및 서비스신청 등을 위한 필수적인 정보를 입력 받고 있습니다. 
                        <br>- 필수정보 : 성명, 나이, 성별, 전화번호
                        <br>- 서비스 이용과정이나 처리 과정에서 자동으로 생성되어 수집될 수 있는 정보 : IP Address, 참여일시, 유입경로(참여매체), 쿠키, 방문 일시, 서비스 이용 기록, 이용 정지 기록 등
                        <br>- 청구서, 상품 배송지 확인을 위한 수집정보 : 성명, 전화번호, 우편물 수령지(자택 및 직장주소)
                        <br>(본인 이외의 타인에게 직접 배송을 요청할 경우 이름, 주소, 연락처 등 배송에 필요한 개인 식별 정보를 수집하는 것에 대하여 동의합니다.)
                    </div>
                    
                    <div class="title02">3. 개인정보의 수집 및 이용목적</div>
                    <div class="txt">
                        입력하신 정보는 개인별 맞춤 서비스 제공, 이벤트 안내(전화, MMS 등), 상품안내를 위한 자료(전화, MMS 등)로 활용 됩니다.
                    </div>
                    
                    <div class="title02">4. 개인정보의 보유 및 이용기간</div>
                    <div class="txt">
                        개인정보를 수집 동의일로부터 5년간 보유 및 활용하게 되고, 위 보유기간의 경과 즉시 기록을 재생할 수 없는 기술적 방법을 사용하여 동 개인정보를 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다. 
                        <br>&lt; 관련법령에 의한 정보보유 사유 &gt; 
                        <br>- 계약 또는 청약철회 등에 관한 기록 : 5년 
                        <br>- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년
                    </div>
                    
                    <div class="title02">5. 개인정보의 파기절차 및 방법</div>
                    <div class="txt">
                        원칙적으로, 개인정보 수집 및 이용목적이 달성되거나, 개인정보 보유 및 이용기간이 종료한 경우 해당 정보를 지체 없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
                        <br>&lt; 파기절차 &gt; 
                        <br>귀하가 참여한 고객정보는 목적이 달성된 후 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정기간 저장된 후 파기됩니다. 동 개인정보는 법률에 의한 경우가 아니고서는 보유 이외의 다른 목적으로 이용되지 않습니다.
                        <br>&lt; 파기방법 &gt; 
                        <br>- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기하고 
                        <br>- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 
                    </div>
                    
                    <div class="title02">6. 개인정보 수집 이용 제공 등에 대한 동의철회</div>
                    <div class="txt">
                        귀하는 개인정보의 수집 이용 제공에 대한 동의를 본인 및 법정대리인을 통해 철회할 수 있습니다. 동의철회는 명시된 문의전화 또는 이메일 등을 통해 가능합니다.
                    </div>
                    
                    <div class="title02">7. 개인정보의 제 3자 제공 및 취급위탁</div>
                    <div class="txt">
                        회사는 귀하의 개인정보를 &lt;개인정보의 수집목적 및 이용목적&gt;에서 고지한 범위 내에서 사용하며, 동 범위를 초과하여 이용하거나 타인 또는 타기업, 기관에 제공하지 않습니다. 그러나 보다 나은 서비스 제공을 위하여 필요할 경우, 귀하의 개인정보를 제휴사에게 제공하거나 또는 제휴사와 공유할 수 있습니다. 개인정보를 제공하거나 공유할 경우에는 사전에 귀하의 동의를 구하는 절차를 거치게 됩니다.
                        <br>다음은 예외로 합니다. 
                        <br>관계법령에 의하여 수사상의 목적으로 관계기관으로부터의 요구가 있을 경우입니다. 제휴관계에 변화가 있거나 제휴관계가 종결될 때도 같은 절차에 의하여 고지하거나 동의를 구합니다. 
                        <br>통계작성/학술연구나 시장조사를 위하여 특정 개인을 식별할 수 없는 형태로 광고주/협력 사나 연구단체 등에 제공하는 경우 
                        <br>위탁 처리 : 원활한 업무 처리를 위해 이용자의 개인정보를 위탁 처리할 경우 반드시 사전에 위탁처리 업체명과 위탁 처리되는 개인정보의 범위, 업무위탁 목적, 위탁 처리되는 과정, 위탁관계 유지기간 등에 대해 상세하게 고지합니다. 
                        <br>그러나 예외 사항에서도 관계법령에 의하거나 수사기관의 요청에 의해 정보를 제공한 경우에는 이를 당사자에게 고지하는 것을 원칙으로 운영하고 있습니다. 법률상의 근거에 의해 부득이하게 고지를 하지 못할 수도 있습니다. 본래의 수집목적 및 이용목적에 반하여 무분별하게 정보가 제공되지 않도록 최대한 노력하겠습니다.
                    </div>
                    
                    <div class="title02">8. 개인정보 처리 업무의 위탁</div>
                    <div class="txt">
                        가. 회사는 기본적인 서비스 제공, 더 나은 서비스 제공, 고객편의 제공 등 원활한 업무 수행을 위하여 다음과 같이 개인정보 처리 업무를 외부전문업체에 위탁하여 운영하고 있습니다.
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>수탁자</th>
                                    <th>위탁사무 및 목적</th>
                                    <th>보유 및 이용기간</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>㈜하이애드원</td>
                                    <td>회원 정보 DB시스템 유지보수 </td>
                                    <td>고객동의 철회 또는 계약 만료 때 까지</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="txt">
                        나. 회사는 위탁업무계약서 등을 통하여 개인정보보호 관련 법규의 준수, 개인정보에 관한 비밀유지, 개인정보의 제3자 제공 금지, 사고시의 책임 부담, 위탁기간, 처리 종료 후의 개인정보의 반환 또는 파기의무 등을 규정하고, 이를 지키도록 관리하고 있습니다.
                    </div>
                    
                    <div class="title02">9. 개인정보관리책임자 및 민원서비스</div>
                    <div class="txt">
                        귀하의 개인정보를 보호하고 관련한 불만을 처리하기 위하여 회사는 개인정보관리책임자를 두어 귀하의 개인정보를 관리하고 있습니다.
                    </div>
                    
                    <div class="txt">
                        [개인정보관리책임자] 
                        <br>성 명 : 유가을
                        <br>직 위 : 과장
                        <br>연락처 : 
                        <br>팩스번호 : 
                        <br>이메일 : 
                    </div>
                    
                    <div class="txt">
                        [개인정보 관리자] 
                        <br>성  명 : 유가을
                        <br>직  위 : 과장
                        <br>연락처 : 
                        <br>팩스번호:
                        <br>이메일 :
                    </div>
                    <div class="txt">
                        - 정보주체 께서는 회사의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 관리책임자 및 담당부서로 문의하실 수 있습니다. 회사는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다. 
                        <br>- 정보주체는 개인정보 보호법 제35조 및 정보통신망법 제30조에 따른 개인정보의 열람 청구를 관련 부서에 할 수 있습니다. 회사는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.
                    </div>
                    
                    <div class="title02">10. 개인정보 열람청구</div>
                    <div class="txt">
                        정보주체는 개인정보 보호법 제35조 및 정보통신망법 제30조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 회사는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.
                    </div>
                    
                    <div class="txt">
                        가. 개인정보 열람청구 접수ㆍ처리 부서
                        <br>성  명 : 유가을
                        <br>직  위 : 과장
                        <br>연락처 : 
                        <br>팩스번호:
                        <br>이메일 :
                    </div>
                    <div class="title02">11. 만 14 세 미만 아동의 개인정보보호</div>
                    회사는 법정 대리인의 동의가 필요한 만 14세 미만 아동의 정보는 수집하고 있지 않습니다.
                    
                    <div class="title02">12. 권익침해 구제방법</div>
                    <div class="txt">
                        정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다. [아래의 기관은 회사와는 별개의 기관으로서, 회사의 자체적인 개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다]
                    </div>
                    
                    <div class="txt">
                        가. 개인정보보호 종합지원 포털 (행정안전부 운영)
                        <br>소관업무 : 개인정보 침해사실 신고, 상담 신청, 자료제공
                        <br>홈페이지 : www.privacy.go.kr
                        <br>전화 : 02-2100-3394
                    </div>
                    
                    <div class="txt">
                        나. 개인정보 침해신고센터 (한국인터넷진흥원 운영)
                        <br>소관업무 : 개인정보 침해사실 신고, 상담 신청
                        <br>홈페이지 : privacy.kisa.or.kr
                        <br>전화 : (국번없이) 118 - 주소 : (138-950) 서울시 송파구 중대로135 한국인터넷진흥원 개인정보침해신고센터
                    </div>
                    
                    <div class="txt">
                        다. 개인정보 분쟁조정위원회 (한국인터넷진흥원 운영)
                        <br>소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)
                        <br>홈페이지 : privacy.kisa.or.kr
                        <br>전화 : (국번없이) 118 - 주소 : (138-950) 서울시 송파구 중대로135 한국인터넷진흥원 개인정보침해신고센터
                    </div>
                    
                    <div class="txt">
                        라. 경찰청 사이버테러대응센터
                        <br>소관업무 : 개인정보 침해 관련 형사사건 문의 및 신고
                        <br>홈페이지 : www.netan.go.kr
                        <br>전화 : (사이버범죄) 02-393-9112 (경찰청 대표) 1566-0112
                    </div>
                    
                    <div class="title02">13. 정책 변경에 따른 공지의무</div>
                    <div class="txt">
                        이 개인정보처리방침은 2019 년 12월 03 일 에 제정되었으며 법령/정책 또는 보안기술의 변경에 따라 내용의 추가 및 삭제 및 수정이 있을 시에는 변경되는 개인정보처리방침을 시행하기 최소 15일전에 해당 품목별 인터넷페이지를 통해 내용 등을 공지하도록 하겠습니다.
                    </div>
            
                    <div class="txt">
                        - 개인정보처리방침 시행일자 : 2019-12-03
                    </div>
                </div>
                <div class="popup_btn_box">
                    <button class="btn_close" onclick="closePopup('popupAgree')">닫 기</button>
                </div>
            </div>
        </div>
    </div>

     <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
    <script>
        function openPopup(el){      

            $('html, body').css({'overflow': 'hidden', 'height': '100%'}); // 모달팝업 중 html,body의 scroll을 hidden시킴
            $('#element').on('scroll touchmove mousewheel', function(event) { // 터치무브와 마우스휠 스크롤 방지
                event.preventDefault();
                event.stopPropagation();

                return false;
            });
             
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            // $('html, body').css({'overflow': 'auto', 'height': '100%'}); //scroll hidden 해제
            $('#popupWrap').hide();
            $('#'+ el).hide();
            document.location="#formWrap";
        }

        $('#btnSlide').on('click',function(){
            $('.slide_container').animate({'margin-left':'-100%'},0,function(){
                $('.slide_item:first-child').appendTo('.slide_container');
                $(this).css('margin-left','0');
            })
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

            if ($('input[id="agree"]').is(":checked")) {
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
            } else alert('개인정보 수집 및 제공에 관한 동의를 체크 해주시기 바랍니다.');

            return false;
        }
        <?php if($this->session->flashdata('mlh_id')){?>        
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>

<?php if((element('multi_code',$view) ==='dable_pc' || element('multi_code',$view) ==='dable_mo')){ ?>

    <?php if($this->session->flashdata('mlh_id')){ ?>
        <!-- Dable 스크립트 시작 / 문의 support@dable.io -->
        <script>
        (function(d,a,b,l,e,_) {
        d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
        e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/dablena.min.js';
        _=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);
        })(window,document,'dablena','script');
        dablena('init', '001-002-358');
        dablena('track', 'CompleteRegistration');
        </script>
        <!-- Dable 스크립트 종료 / 문의 support@dable.io -->
    <?php } else { ?>
        <!-- Dable 스크립트 시작 / 문의 support@dable.io -->
        <script>
        (function(d,a,b,l,e,_) {
        d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
        e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/dablena.min.js';
        _=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);
        })(window,document,'dablena','script');
        dablena('init', '001-002-358');
        dablena('track', 'PageView');
        </script>
        <!-- Dable 스크립트 종료 / 문의 support@dable.io -->    
    <?php } ?>
<?php } ?>

<?php if((element('multi_code',$view) ==='tg_interest_pc' || element('multi_code',$view) ==='tg_re_pc' || element('multi_code',$view) ==='tg_interest_mo' || element('multi_code',$view) ==='tg_re_mo' ) && $this->session->flashdata('mlh_id')){ ?>
<!-- WIDERPLANET PURCHASE SCRIPT START 2019.12.3 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
    return {
        wp_hcuid:"",             /*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
                          *주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
        ti:"47682",                  /*광고주 코드 */
        ty:"PurchaseComplete",       /*트래킹태그 타입 */
        device:"web",                /*디바이스 종류  (web 또는  mobile)*/
        items:[{i:"비용상담 ",       /*전환 식별 코드  (한글 , 영어 , 번호 , 공백 허용 )*/
            t:"비용상담 ",         /*전환명  (한글 , 영어 , 번호 , 공백 허용 )*/
            p:"1",           /*전환가격  (전환 가격이 없을경우 1로 설정 )*/
            q:"1"            /*전환수량  (전환 수량이 고정적으로 1개 이하일 경우 1로 설정 )*/
        }]
    };
}));
</script>
<script type="text/javascript" src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>


<?php } ?>





<?php if((element('multi_code',$view) ==='taboola_ron_pc' || element('multi_code',$view) ==='taboola_aud_pc' || element('multi_code',$view) ==='taboola_ron_mo'|| element('multi_code',$view) ==='taboola_aud_mo' )){ ?>

    <?php if($this->session->flashdata('mlh_id')){ ?>

        <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'complete_registration', id: 1253631});
          !function (t, f, a, x) {
                 if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                 }
          }(document.createElement('script'),
          document.getElementsByTagName('script')[0],
          '//cdn.taboola.com/libtrc/unip/1253631/tfa.js',
          'tb_tfa_script');
        </script>
        <noscript>
          <img src='https://trc.taboola.com/1253631/log/3/unip?en=complete_registration'
            width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->
        <?php } ?>

    


    <?php } else { ?>
        <!-- Taboola Pixel Code -->
        <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'page_view', id: 1253631});
          !function (t, f, a, x) {
                 if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                 }
          }(document.createElement('script'),
          document.getElementsByTagName('script')[0],
          '//cdn.taboola.com/libtrc/unip/1253631/tfa.js',
          'tb_tfa_script');
        </script>
        <noscript>
          <img src='https://trc.taboola.com/1253631/log/3/unip?en=page_view'
              width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->
    

<?php } ?>

<?php if(element('multi_code',$view) ==='tenping' ){ ?>
    
    <?php if($this->session->flashdata('mlh_id')){ ?>

        <script src="//tenping.kr/scripts/cpa/tenping.cpa.V2_Domain.min.js"></script>
        <script>
            TenpingScript.SendConversion("<?php echo $this->session->flashdata('mlh_mobileno') ? substr($this->session->flashdata('mlh_mobileno'),-4): '' ?>");
        </script>
  
    

    <?php } ?>
    
<?php } ?>

<?php if(element('multi_code',$view) ==='linkA' ){ ?>
    
    <?php if($this->session->flashdata('mlh_id')){ ?>

        <script src="//www.leadtracker.live/static/js/fixel.js"></script>
        <script>
            _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
        </script>
  
    

    <?php } ?>
    
<?php } ?>