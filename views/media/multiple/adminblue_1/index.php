<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php

$this->managelayout->add_js('https://www.leadtracker.live/static/js/fixel.js'); 
    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta name="format-detection" content="telephone=no"/>
    <title>플래티넘루테인</title>
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
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    input[type="checkbox"] {
        vertical-align: middle;
        margin-right: 5px;
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
        max-width: 730px;
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
    .form_wrap {
        width: 100%;
        padding-top: 10.274%;
        background-image: url(<?php echo $ad_dir ?>/images/101.jpg);
        background-repeat: no-repeat;
        background-position: center top;
        background-size: 100%;
        background-color: #3c4aa3;
    }
    .inp_container {
        width: 93.6986%;
        margin: 0 auto;
    }
    .inp_container .label_box {
        width: 28.8011%;
    }
    .inp_container .label_blind {
        display: block;
        width: 100%;
        height: 5.3424vw;
    }
    .inp_container .inp_box {
        vertical-align: top;
        padding-bottom: 2.7397vw;
        padding-right: 21.2299%;
        font-size: 0;
    }
    .inp_container .inp {
        height: 5.3425vw;
        box-sizing: border-box;
        padding: 1px 0;
        border: 1px solid #000;
        font-size: 4.9315vw;
        background-color: #ffffff;
        font-family: 'NanumGothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
    }
    .inp_container .inp_normal {
        width: 100%;
    }
    .inp_container .inp_textarea {
        width: 100%;
        height: 7.6713vw;
    }
    .inp_container .inp_tel {
        width: 30%;
    }
    .inp_container .inp_tel:not(:first-child) {
        margin-left: 2%;
    }
    .inp_container .inp_check_box {
        padding-bottom: 10px;
        background-color: #fff; 
        font-size: 14px;
        vertical-align: middle;
    }
    .footer {
        font-size: 13px;
        padding: 5%;
        word-break: keep-all;
    }

    @media screen and (min-width: 731px){
        .form_wrap {
            padding-top: 75px;
        }
        .inp_container .inp {
            height: 39px;
            font-size: 36px;
        }
        .inp_container .inp_textarea {
            height: 56px;
        }
        .inp_container .inp_box {
            padding-bottom: 20px;
        }
        .inp_container .label_blind {
            height: 39px;
        }
    }
    @media screen and (max-width: 360px) {
        .inp_container .inp_check_box {
            font-size: 13px;
        }
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
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/1.jpg" alt="눈건강에 도움을 줄 수 있는 플래티넘 마리골드" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/2.gif" alt="후불제 판매 실시" class="img"></div>

        <!-- dbform01 -->
        <div class="form_wrap">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents01(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno">      
            
                <table class="inp_container">
                    <tbody>
                        <tr>
                            <th class="label_box"><label for="mlh_name" class="label_blind"><span class="blind">이름</span></label></th>
                            <td class="inp_box"><input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name" class="input01 inp inp_normal" label="이름"></td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_age" class="label_blind"><span class="blind">나이</span></label></th>
                            <td class="inp_box"><input type="tel" name="mlh_age" id="mlh_age" class="input01 inp inp_normal" maxlength="2" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_mobileno1" class="label_blind"><span class="blind">번호</span></label></th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1" class="input01 inp inp_tel" maxlength="3" label="연락처" value="<?php echo set_value('mlh_mobileno1', element('mlh_mobileno1', element('post', $view))); ?>">
                                <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="input01 inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>">
                                <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="input01 inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_text" class="label_blind"><span class="blind">문의</span></label></th>
                            <td class="inp_box"><textarea name="mlh_text" id="mlh_text" class="inp inp_textarea input01" label="문의"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></td>
                        </tr>
                        <tr>
                            <td class="box_center inp_check_box" colspan="2"><input type="checkbox" name="agree" id="agree01" class="inp_check" checked>개인정보 수집 정책에 동의 합니다.
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
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="btn_box">
                    <button type="submit" class="btn_img"><img src="<?php echo $ad_dir ?>/images/btn1.jpg" alt="이벤트 응모하기" class="img"></button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- dbform01 end -->
        
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/3.jpg" alt="눈을 위한 건강기능식품 플래티넘 마리골드" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/4.jpg" alt="침침한 눈 흐릿한 눈 걱정되세요? 무료체험 먼저 해보세요" class="img"></div>
       
        <!-- dbform02 -->
        <div class="form_wrap">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno_2">      
            
                <table class="inp_container">
                    <tbody>
                        <tr>
                            <th class="label_box"><label for="mlh_name_2" class="label_blind"><span class="blind">이름</span></label></th>
                            <td class="inp_box"><input type="text" name="mlh_name" id="mlh_name_2" class="input02 inp inp_normal" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_age_2" class="label_blind"><span class="blind">나이</span></label></th>
                            <td class="inp_box"><input type="tel" name="mlh_age" id="mlh_age_2" class="input02 inp inp_normal" maxlength="2" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_mobileno1_2" class="label_blind"><span class="blind">번호</span></label></th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1_2" class="input02 inp inp_tel" maxlength="3" label="연락처" value="<?php echo set_value('mlh_mobileno1', element('mlh_mobileno1', element('post', $view))); ?>">
                                <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2_2" class="input02 inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>">
                                <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3_2" class="input02 inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_text_2" class="label_blind"><span class="blind">문의</span></label></th>
                            <td class="inp_box"><textarea name="mlh_text" id="mlh_text_2" class="inp inp_textarea input02" label="문의"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></td>
                        </tr>
                        <tr>
                            <td class="box_center inp_check_box" colspan="2"><input type="checkbox" name="agree" id="agree02" class="inp_check" checked>개인정보 수집 정책에 동의 합니다.
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
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="btn_box">
                    <button type="submit" class="btn_img"><img src="<?php echo $ad_dir ?>/images/btn1.jpg" alt="이벤트 응모하기" class="img"></button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- dbform02 end -->
       
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/5.gif" alt="기능성 원료인 타게티스 이렉타 추출물 인체적용시험 결과" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/6.jpg" alt="플레티넘 마리골드 원료" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/7.jpg" alt="눈의 노화를 늦춰주는 타게티스 이렉타 지금 시작하세요!" class="img"></div>

        <!-- dbform03 -->
        <div class="form_wrap">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents03(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno_3">    
                <table class="inp_container">
                    <tbody>
                        <tr>
                            <th class="label_box"><label for="mlh_name_3" class="label_blind"><span class="blind">이름</span></label></th>
                            <td class="inp_box"><input type="text" name="mlh_name" id="mlh_name_3" class="input03 inp inp_normal" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_age_3" class="label_blind"><span class="blind">나이</span></label></th>
                            <td class="inp_box"><input type="tel" name="mlh_age" id="mlh_age_3" class="input03 inp inp_normal" maxlength="2" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_mobileno1_3" class="label_blind"><span class="blind">번호</span></label></th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1_3" class="input03 inp inp_tel" maxlength="3" label="연락처" value="<?php echo set_value('mlh_mobileno1', element('mlh_mobileno1', element('post', $view))); ?>">
                                <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2_3" class="input03 inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>">
                                <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3_3" class="input03 inp inp_tel" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="label_box"><label for="mlh_text_3" class="label_blind"><span class="blind">문의</span></label></th>
                            <td class="inp_box"><textarea name="mlh_text" id="mlh_text_3" class="inp inp_textarea input03" label="문의"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></td>
                        </tr>
                        <tr>
                            <td class="box_center inp_check_box" colspan="2"><input type="checkbox" name="agree" id="agree03" class="inp_check" checked>개인정보 수집 정책에 동의 합니다.
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
                            </td>
                        </tr>
                    </tbody>
                </table>
          
                <div class="btn_box">
                    <button type="submit" class="btn_img"><img src="<?php echo $ad_dir ?>/images/btn1.jpg" alt="이벤트 응모하기" class="img"></button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- dbform03 end -->

        <div class="footer">
            사업자 : 새별 | 등록번호 : 830-51-00174 | originalblue@nate.com | 사업자소재지 : 경기도 남양주시 다산순환로 135, 3102동 201호(다산동, 유승한내들골든뷰) 
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

        function submitContents01(f) {
            var flag = false;
            var href;


            $('.input01').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree01"]').is(":checked")) {
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

        function submitContents02(f) {
            var flag = false;
            var href;


            $('.input02').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree02"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno_2").val($("#mlh_mobileno1_2").val()+$("#mlh_mobileno2_2").val()+$("#mlh_mobileno3_2").val());
                        
                    }
                });

                return flag;

                
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

            return false;
        }

        function submitContents03(f) {
            var flag = false;
            var href;


            $('.input03').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree03"]').is(":checked")) {

                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                    }
                });

                return flag;

                
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

            return false;
        }

    <?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>