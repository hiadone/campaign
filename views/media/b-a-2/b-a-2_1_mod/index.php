<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php

    $AD_DIR  = element('view_skin_url', $layout);
    $jid='';
    if(!empty($_GET['adpot_key'])) $jid=$_GET['adpot_key'];
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
    <title>국내최초 신개념 탈모두피 전문관리</title>
    <style>
        /* common */
        * {
            padding: 0;
            margin: 0;
            outline: none;
        }
        body {
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            line-height: 1;
        }
        ul, ol, dl, dt, dd, li {
            list-style: none;
        }
        select {
            background: #fff url('<?=$AD_DIR?>/images/arrow.png') no-repeat center right;
            -webkit-appearance: none;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse !important;
            background-color: transparent;
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
            max-width: 720px;
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
        .form_container {
            padding: 20px 0;
        }
        .form_container01 {
            background-color: #dbeef2;
        }
        .form_container .form_table {
            width: 100%;
        }
        .form_container .lab_box {
            padding: 10px 10px 0 0;
            text-align: right;
            font-size: 13px;
            color: #000;
        }
        .form_container .inp_box {
            padding: 5px 10px 5px 0;
            color: #000;
            font-size: 13px;
        }
        .form_container .inp {
            font-family: "나눔바른고딕", 'Nanum Barun Gothic', "맑은 고딕", 'Malgun Gothic', Helvetica, Arial, sans-serif;
            height: 34px;
            padding: 6px 12px;
            box-sizing: border-box;
            font-size: 14px;
            line-height: 1.42857143;
            color: #012f51;
            border: 1px solid #9b9b9b;
            border-radius: 4px;
            box-shadow: none;
        }
        .form_container .inp_txt {
            width: 100%;
        }
        .form_container .inp_age {
            width: auto;
        }
        .form_container .inp_textarea {
            width: 100%;
            height: auto;
            resize: vertical;
        }
        .form_container .inp_agree {
            vertical-align: middle;
        }
        .form_container .lab_agree {
            font-size: 13px;
            color: #000;
            font-weight: normal;
            cursor: pointer;
        }
        .form_container .agree_box {
            margin-top: 15px;
        }
        .form_container .btn_box {
            margin: 20px 0 15px;
        }
        .form_container .btn_img {
            max-width: 70%;
        }
        .form_container .txt_agreement {
            display: none;
            padding: 10px;
            margin: 10px 10px 20px 10px;
            border: 1px solid #C2C2C2;
            border-radius: 5px;
            text-align: left;
            background-color: #fff;
        }
        .form_container .agreement_title {
            margin: 0;
            line-height: 25px;
            padding: 0;
            color: #444;
            font-size: 14px;
        }
        .form_container .agreement_text {
            padding: 10px 0;
        }
        .form_container .agreement_text li {
            margin: 0;
            padding: 0;
            line-height: 19px;
            font-size: 12px;
            color: #444;
        }
        .form_container .btn_agree_detail {
            color: #999;
            background-color: transparent;
            border: none;
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
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c01.jpg" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c02.jpg" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/ani.gif" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c03.jpg" alt="" class="img"></div>

        <!-- dbform 01 -->
        <div class="form_container form_container01">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents01(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <table class="form_table">
                    <colgroup>
                        <col>
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th class="lab_box"><label for="mlh_name" class="lab">이름</label></th>
                            <td class="inp_box"><input type="text" class="inp input inp_txt" name="mlh_name" id="mlh_name" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_age" class="lab">나이</label></th>
                            <td class="inp_box"><input type="number" class="inp input inp_age" name="mlh_age" id="mlh_age" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"> 세</td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_mobileno" class="lab">휴대전화</label></th>
                            <td class="inp_box"><input type="tel" class="inp input inp_txt" name="mlh_mobileno" id="mlh_mobileno" label="휴대전화" value="<?php echo set_value('mlh_mobileno',$this->input->post('mlh_mobileno')); ?>"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_text" class="lab">문의사항</label></th>
                            <td class="inp_box">
                                <textarea class="inp input inp_textarea" rows="5" name="mlh_text" id="mlh_text" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2" class="t-center">
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
                <div class="agree_check agree_box box_center">
                    <input type="checkbox" name="agree" id="agree" class="inp_agree" checked>
                    <label for="agree" class="lab_agree">개인정보 수집 및 이용동의</label>
                    <button type="button" class="btn_agree_detail" onclick="toggleAgreement('.js-panel-agree-personal-info')">[자세히 보기]</button>
                </div>
                <div class="txt_agreement js-panel-agree-personal-info">
                    <h3 class="agreement_title">개인정보수집정책</h3>
                    <ol class="agreement_text">
                        <li>개인정보 수집 및 이용</li>
                        <li>개인정보 수집항목 : 이름, 성별, 연락처, 내용</li>
                        <li>개인정보 수집 및 이용목적 : 상담 활용 (전화, 문자)</li>
                        <li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li>
                        <li>상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 상담 안내 및 이벤트 참여가 불가능 합니다.</li>
                    </ol>
                </div>
                <div class="agree_box box_center">
                    <input type="checkbox" name="agree_ad" id="agree_ad" class="inp_agree" checked>
                    <label for="agree_ad" class="lab_agree">광고성정보수집 정책에 동의합니다.</label>
                    <button type="button" class="btn_agree_detail" onclick="toggleAgreement('.js-panel-agree-ad')">[자세히 보기]</button>
                </div>
                <div class="txt_agreement js-panel-agree-ad">
                    <h3 class="agreement_title">광고성 수신 동의</h3>
                    <ol class="agreement_text">
                        <li>이용목적</li>
                        <li>- 상품, 서비스의 판매, 정보제공, 홍보, 가입권유 활동(쿠폰발송 등 판촉광고포함), 리서치(고객설문/시장조사 및 고객만족도, 조사), 제반
                            이벤트/프로모션 활동(사은행사, 판촉행사 등), 상품/서비스에 대한 이용실적 정보 및 활용</li>
                        <li>* 전자우편(E-mail) / 우편물(DM) / 문자(SMS, LMS, MMS) / 대면접촉/텔레마케팅(전화) , 메신저(카카오톡, 라인 등), 우편
                            등의 방법을 통해 정보 정송</li>
                    </ol>
                    <ol class="agreement_text">
                        <li>수집항목</li>
                        <li>- 이용자 등의 성명 , 암호화된 동일 인식별정보(CI), 성별, 주소(집/회사), 연락처(휴대전화번호, 유선전화번호), 이메일 주소, 서비스
                            이용과정에서 발생한 상품 또는 서비스 구매 내역, 접속기록</li>
                    </ol>
                    <ol class="agreement_text">
                        <li>보유기간</li>
                        <li>- 이용자 등의 개인정보는 서비스 운영기간 동안 보유, 이용되며 , 광고성 정보 등을 제공 받는 일에 거부하는 의사를 밝힐 경우 지체 없이 파기합니다.
                        </li>
                    </ol>
                </div>
                <div class="btn_box box_center">
                    <button type="submit" class="btn_img"><img src="<?=$AD_DIR?>/images/btn.png" alt="무료체험신청 go" class="img"></button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- dbform 01 end -->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/c04.jpg" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c05.jpg" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c06.jpg" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c07.jpg" alt="" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c08.jpg" alt="" class="img"></div>

        <!-- dbform 02 -->
        <div class="form_container form_container02">
            <?php 
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <table class="form_table">
                    <colgroup>
                        <col>
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th class="lab_box"><label for="mlh_name2" class="lab">이름</label></th>
                            <td class="inp_box"><input type="text" class="inp input02 inp_txt" name="mlh_name" id="mlh_name2" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_age2" class="lab">나이</label></th>
                            <td class="inp_box"><input type="number" class="inp input02 inp_age" name="mlh_age" id="mlh_age2" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"> 세</td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_mobileno2" class="lab">휴대전화</label></th>
                            <td class="inp_box"><input type="tel" class="inp input02 inp_txt" name="mlh_mobileno" id="mlh_mobileno2" label="휴대전화" value="<?php echo set_value('mlh_mobileno',$this->input->post('mlh_mobileno')); ?>"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_text2" class="lab">문의사항</label></th>
                            <td class="inp_box">
                                <textarea class="inp input02 inp_textarea" rows="5" name="mlh_text" id="mlh_text2" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="2" class="t-center">
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
                <div class="agree_check agree_box box_center">
                    <input type="checkbox" name="agree02" id="agree02" class="inp_agree" checked>
                    <label for="agree02" class="lab_agree">개인정보 수집 및 이용동의</label>
                    <button type="button" class="btn_agree_detail" onclick="toggleAgreement('.js-panel-agree-personal-info02')">[자세히 보기]</button>
                </div>
                <div class="txt_agreement js-panel-agree-personal-info02">
                    <h3 class="agreement_title">개인정보수집정책</h3>
                    <ol class="agreement_text">
                        <li>개인정보 수집 및 이용</li>
                        <li>개인정보 수집항목 : 이름, 성별, 연락처, 내용</li>
                        <li>개인정보 수집 및 이용목적 : 상담 활용 (전화, 문자)</li>
                        <li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li>
                        <li>상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 상담 안내 및 이벤트 참여가 불가능 합니다.</li>
                    </ol>
                </div>
                <div class="agree_box box_center">
                    <input type="checkbox" name="agree_ad" id="agree_ad_" class="inp_agree" checked>
                    <label for="agree_ad_" class="lab_agree">광고성정보수집 정책에 동의합니다.</label>
                    <button type="button" class="btn_agree_detail" onclick="toggleAgreement('.js-panel-agree-ad02')">[자세히 보기]</button>
                </div>
                <div class="txt_agreement js-panel-agree-ad02">
                    <h3 class="agreement_title">광고성 수신 동의</h3>
                    <ol class="agreement_text">
                        <li>이용목적</li>
                        <li>- 상품, 서비스의 판매, 정보제공, 홍보, 가입권유 활동(쿠폰발송 등 판촉광고포함), 리서치(고객설문/시장조사 및 고객만족도, 조사), 제반
                            이벤트/프로모션 활동(사은행사, 판촉행사 등), 상품/서비스에 대한 이용실적 정보 및 활용</li>
                        <li>* 전자우편(E-mail) / 우편물(DM) / 문자(SMS, LMS, MMS) / 대면접촉/텔레마케팅(전화) , 메신저(카카오톡, 라인 등), 우편
                            등의 방법을 통해 정보 정송</li>
                    </ol>
                    <ol class="agreement_text">
                        <li>수집항목</li>
                        <li>- 이용자 등의 성명 , 암호화된 동일 인식별정보(CI), 성별, 주소(집/회사), 연락처(휴대전화번호, 유선전화번호), 이메일 주소, 서비스
                            이용과정에서 발생한 상품 또는 서비스 구매 내역, 접속기록</li>
                    </ol>
                    <ol class="agreement_text">
                        <li>보유기간</li>
                        <li>- 이용자 등의 개인정보는 서비스 운영기간 동안 보유, 이용되며 , 광고성 정보 등을 제공 받는 일에 거부하는 의사를 밝힐 경우 지체 없이 파기합니다.
                        </li>
                    </ol>
                </div>
                <div class="btn_box box_center">
                    <button type="submit" class="btn_img"><img src="<?=$AD_DIR?>/images/btn.png" alt="무료체험신청 go" class="img"></button>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- dbform 02 end -->
    </div>
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
    <script>
        //toggleagreement
        function toggleAgreement(panel) {
            $(panel).toggle();
        }
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


            $('.input').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree"]').is(":checked") && $('input[id="agree_ad"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() + '/' + $('#multi_code').val();

                $.ajax({
                    async: false,
                    url: href,
                    type: 'get',
                    dataType: 'json',
                    complete: function (data) {
                        // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());

                    }
                });

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');

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

            if ($('input[id="agree02"]').is(":checked") && $('input[id="agree_ad_"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() + '/' + $('#multi_code').val();

                $.ajax({
                    async: false,
                    url: href,
                    type: 'get',
                    dataType: 'json',
                    complete: function (data) {
                        // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());

                    }
                });

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');

            return false;
        }

        <?php if($this->session->flashdata('mlh_id')){?>    
    
        $('.loading').hide();
        <?php } ?>
    </script>
</body>
</html>