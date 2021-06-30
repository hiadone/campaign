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
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이스크림 홈런</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif;
        }
        ul,dl,ol,li,dt,dd {
            list-style: none;
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
            padding-bottom: 21.1112%;
        }
        .img_box{
            display: block;
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
        .fixed_box {
            position: fixed;
            z-index: 500;
            bottom: 0;
            width: 100%;
            min-width: 320px;
            max-width: 720px;

        }
        .slide_wrap01 {
            background-color: #f6f6f6;
        }
        .slide_container {
            max-width: 600px;
            margin: 0 auto;
        }
        .slide_container .slide_box {
            text-align: center;
        }
        .slide_container .slide_box .img {
            width: 80%;
        }
        .slide_container .slide_next,
        .slide_container .slide_prev {
            width: 27px;
            height: 44px;
            top: 64%;
            background-image: url(<?php echo $AD_DIR?>/images/arrow.png);
            background-repeat: no-repeat;
        }
        .slide_container .slide_next:after,
        .slide_container .slide_prev:after {
            content: none;
        }
        .slide_container .slide_next {
            background-position: 100% center;
        }
        .slide_container .slide_prev {
            background-position: 0 center;
        }

        .form_container .form_inner {
            max-width: 360px;
            padding: 0 8px;
            box-sizing: border-box;
            margin: 0 auto;
        }
        .form_txt_box .inp_box:not(:first-child) {
            margin-top: 4px;
        }
        .form_txt_box .inp_txt {
            width: 100%;
            height: 43px;
            color: #aeaeae;
            font-size: 15px;
            text-indent: 14px;
            background-color: #efefef;
            border: none;
        }
        .form_radio_box {
            margin-top: 6px;
        }
        .form_radio_box .title {
            font-size: 14px;
            padding: 5px 0 5px 5px;
            color: #535353;
            font-weight: bold;
        }
        .form_radio_box .title .small {
            font-size: 11px;
            color: #aeaeae;
            font-weight: normal;
        }
        .radio_container .inp_box {
            float: left;
            width: calc(33.3334% - 4px);
            height: 40px;
            text-align: center;
            margin: 0 2px 4px;
        }
        .radio_container .lab_radio {
            display: block;
            text-align: center;
            border: 2px solid #a6a6a6;
            font-size: 13px;
            color: #a6a6a6;
            line-height: 36px;
        }
        .radio_container .inp_radio_blind:checked
        + .lab_radio {
            border: 2px solid #f26722;
            color: #f26722;
        }
        .form_noti_box {
            margin-top: 6px;
        }
        .form_noti_box .noti_box {
            position: relative;
            padding-left: 8px;
            color: #aeaeae;
            font-size: 11px;
            word-break: keep-all;
        }
        .form_noti_box .noti_box:before {
            content: '';
            display: block;
            position: absolute;
            top: 8px;
            left: 3px;
            width: 1px;
            height: 1px;
            background-color: #aeaeae;
        }
        .form_check_agree .agree_box {
            margin-top: 4px;
            padding-bottom: 6px;
            border-bottom: 1px solid #929292;
            position: relative;
            min-height: 27px;
            padding: 9px 0 4px 16px;
        }
        .form_check_agree .inp_check {
            -webkit-appearance: none;
            width: 15px;
            height: 15px;
            margin-top: 1px;
            background-image: url(<?php echo $AD_DIR?>/images/sp_rtn.png);
            background-position: -168px 0;
            background-size: 200px 190px;
            background-color: #fff;
            position: absolute;
            left: 0;
            top: 12px;
        }
        .form_check_agree .inp_check:checked {
            background-position: -185px 0;
        }
        .form_check_agree .lab_agree {
            font-size: 12px;
            color: #535353;
            letter-spacing: -0.09em;
            padding: 4px;
        }
        .form_check_agree .btn_show_agree {
            background-color: transparent;
            color: #f26722;
            font-size: 12px;
            float: right;
            border: none;
            padding: 4px;
        }
        .form_container .noti_emph {
            color: #f00;
            padding-bottom: 40px;
            font-size: 12px;
        }
        .video_box {
            position: relative;
        }
        .video_box .thumb_img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .popup_wrap {
            display: none;
            position: fixed;
            z-index: 900;
            top: 0;
            width: 100%;
            min-width: 320px;
            max-width: 720px;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .popup_container {
            display: none;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            height: 200px;
            overflow-y: auto;
            padding-top: 10px;
            width: 90%;
            border-radius: 4px;
            background-color: #fff;
        }
        .popup_container .popup_title01 {
            text-align: center;
            padding: 11px 0 8px;
            border-bottom: 1px solid #777777;
            font-size: 14px;
            color: #555;
            line-height: 20px;
        }
        .popup_container .popup_body {
            padding: 10px;
        }
        .popup_container .popup_title02 {
            font-weight: bold;
            color: #777;
            font-size: 14px;
            line-height: 1.4;
            letter-spacing: -0.04em;
        }
        .popup_container .popup_txt {
            color: #777;
            font-size: 12px;
            line-height: 1.4;
            letter-spacing: -0.04em;
        }
        .btn_popup_close {
            position: absolute;
            right: 4px;
            top: 4px;
            width: 31px;
            height: 31px;
            padding: 8px;
            background: transparent;
            border: none;
        }
        .btn_popup_close .img {
            width: 15px;
            height: 15px;
        }
        @media screen and (min-width: 721px) {
            .wrap {
                padding-bottom: 152px;
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
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/sa_m_img_tvcf_191210_01.jpg" alt="초등자존감 아이스크림 홈런" class="img"></div>

        <!-- goform fix -->
        <div class="fixed_box"><a href="#formContainer" class="img_box"><img src="<?php echo $AD_DIR?>/images/m_img_end_191226_btn.png" alt="무료체험 신청하기" class="img"></a></div>

        <!-- video -->
        <div class="video_box">
            <div class="img_box" id="videoContainer" onclick="play();">
                <img src="<?php echo $AD_DIR?>/images/m_img_end_191226_03.jpg" alt="영상" class="img">
                <div class="thumb_img" id="thumbImg"></div>
            </div>
        </div>

        <!-- form -->
        <div class="form_container" id="formContainer">
            <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_db_title_day10.jpg" alt="아이스크림 홈런 10일 무료체험 신청" class="img"></div>
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="mlh_text" id="mlh_text" value="">
            <input type="hidden" name="mlh_age" id="mlh_age" value="0">
            
            
                <div class="form_inner">
                    <div class="form_txt_box">
                        <div class="inp_box">
                            <label for="mlh_name" class="blind">이름</label>
                            <input class="input inp_txt" id="mlh_name" name="mlh_name" placeholder="학부모 성함을 입력하세요" type="text" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                        </div>
                        <div class="inp_box">
                            <label for="mlh_mobileno" class="blind">휴대폰번호</label>
                            <input class="input inp_txt" id="mlh_mobileno" name="mlh_mobileno" placeholder="‘-’ 없이 휴대폰 번호를 입력하세요" type="tel" label="휴대폰번호" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                        </div>
                    </div>
                    <div class="form_radio_box">
                        <div class="title">자녀학년 <span class="small">(2020년 기준/ 자녀 1명만 선택)</span></div>
                        <div class="radio_container">
                            <ul class="clearfix">
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade0" name="mlh_children_grade" type="radio" value="0" checked>
                                    <label class="lab_radio" for="mlh_children_grade0">7세</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade1" name="mlh_children_grade" type="radio" value="1">
                                    <label class="lab_radio" for="mlh_children_grade1">1학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade2" name="mlh_children_grade" type="radio" value="2">
                                    <label class="lab_radio" for="mlh_children_grade2">2학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade3" name="mlh_children_grade" type="radio" value="3">
                                    <label class="lab_radio" for="mlh_children_grade3">3학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade4" name="mlh_children_grade" type="radio" value="4">
                                    <label class="lab_radio" for="mlh_children_grade4">4학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade5" name="mlh_children_grade" type="radio" value="5">
                                    <label class="lab_radio" for="mlh_children_grade5">5학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade6" name="mlh_children_grade" type="radio" value="6">
                                    <label class="lab_radio" for="mlh_children_grade6">6학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade7" name="mlh_children_grade" type="radio" value="7">
                                    <label class="lab_radio" for="mlh_children_grade7">중등 1학년</label>
                                </li>
                                <li class="inp_box">
                                    <input class="inp_radio_blind blind" id="mlh_children_grade8" name="mlh_children_grade" type="radio" value="8">
                                    <label class="lab_radio" for="mlh_children_grade8">중등 2학년</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form_noti_box">
                        <div class="noti_box">2020년 기준 자녀의 학년을 선택해 주세요.</div>
                        <div class="noti_box">중학교 학부모님께는 ‘아이스크림 홈런 중등’에서 안내드릴 예정입니다.</div>
                    </div>
                    <div class="form_check_agree">
                        <div class="agree_box clearfix">
                            <input type="checkbox" name="agree01" id="agree" class="inp_check" <?php echo set_value('agree01', element('agree01', element('post', $view))) ? 'checked' : ''; ?>>
                            <label class="lab_agree" for="agree01">개인정보 수집 및 활용동의</label>
                            <button type="button" class="btn_show_agree" onclick="openPopup('#popup01');">내용보기</button>
                        </div>
                        <div class="agree_box clearfix">
                            <input type="checkbox" name="agree02" id="agree02" class="inp_check" <?php echo set_value('agree02', element('agree02', element('post', $view))) ? 'checked' : ''; ?>>
                            <label class="lab_agree" for="agree02">마케팅 활용 동의</label>
                            <button type="button" class="btn_show_agree" onclick="openPopup('#popup02');">내용보기</button>
                        </div>
                    </div>

                </div>
                <div class="btn_box"><button class="btn_img" type="submit"><img src="<?php echo $AD_DIR?>/images/02_db_btn.jpg" alt="무료 신청하기" class="img"></button></div>
                <div class="txt_center noti_emph">※ 무료학습은 1회만 체험하실 수 있습니다.</div>
            <?php echo form_close(); ?>
        </div>
        <!-- form end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_slogan.jpg" alt="초등 스마트 홈러닝 1등 아이스크림 홈런" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_strength.jpg" alt="AI 생활 기록부 1:1 맞춤학습" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_contents_01_top.jpg" alt="초등필수과목 완전학습 학교공부 콘텐츠" class="img"></div>

        <!-- 슬라이드01 -->
        <div class="slide_wrap slide_wrap01">
            <div class="slide_container swiper-container">
                <ul class="slide_list swiper-wrapper">
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_03_2_01.png" alt="오늘의 학습" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_03_2_02.png" alt="국어" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_03_2_03.png" alt="수학" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_03_2_04.png" alt="영어" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_03_2_05.png" alt="사회&과학" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_03_2_06.png" alt="단원평가" class="img"></li>
                </ul>
                <div class="slide_next swiper-button-next"></div>
                <div class="slide_prev swiper-button-prev"></div>
            </div>
        </div>
        <!-- 슬라이드01 end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_contents_01_bottom.jpg" alt="초등 그 이상을 생각한다면?" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_contents_02_top.jpg" alt="수학완성 & 영어완성 콘텐츠" class="img"></div>

        <!-- 슬라이드02 -->
        <div class="slide_wrap slide_wrap02">
            <div class="slide_container swiper-container">
                <ul class="slide_list swiper-wrapper">
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_04_2_01.png" alt="수학완성" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_04_2_02.png" alt="수학완성" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_04_2_03.png" alt="영어완성" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_04_2_04.png" alt="영어완성" class="img"></li>
                </ul>
                <div class="slide_next swiper-button-next"></div>
                <div class="slide_prev swiper-button-prev"></div>
            </div>
        </div>
        <!-- 슬라이드02 end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_contents_02_bottom.jpg" alt="체험도 독서도 코딩도 홈런으로 끝!" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_contents_03_top.jpg" alt="특별학습콘텐츠" class="img"></div>

        <!-- 슬라이드03 -->
        <div class="slide_wrap slide_wrap01">
            <div class="slide_container swiper-container">
                <ul class="slide_list swiper-wrapper">
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_05_2_01.png" alt="글로벌리더십" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_05_2_02.png" alt="홈런 도서관" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_05_2_03.png" alt="3D 체험관" class="img"></li>
                    <li class="slide_box swiper-slide"><img src="<?php echo $AD_DIR?>/images/common_page_03_05_2_04.png" alt="열려라 코딩" class="img"></li>
                </ul>
                <div class="slide_next swiper-button-next"></div>
                <div class="slide_prev swiper-button-prev"></div>
            </div>
        </div>
        <!-- 슬라이드03 end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_contents_03_bottom.jpg" alt="콘텐츠" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_latter.jpg" alt="홈런장학생들의 경험 리뷰" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_step.jpg" alt="아이스크림 홈런 무료체험 과정 안내" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images/03_schooling.jpg" alt="홈런 중학서비스" class="img"></div>


        <div class="popup_wrap">
            <div class="popup_container" id="popup01">
                <div class="popup_title01">개인정보 수집 및 이용에 대한 동의(필수)</div>
                <div class="popup_body">
                    <div class="popup_title02">수집목적</div>
                    <div class="popup_txt">:서비스 제공을 위한 이용자 식별 및 본인여부 확인</div>
                    <div class="popup_txt">:계약 이행을 위한 연락민원 등 고객 고충 처리</div>
                    <div class="popup_title02">수집항목</div>
                    <div class="popup_txt">신청자명, 휴대폰번호</div>
                    <div class="popup_title02">- 보유기간 : 무료 체험 학습 완료 후 5일 이내</div>
                    <div class="popup_txt">※ 서비스 제공을 위해서 필요한 최소한의 개인정보이므로 동의를 해 주셔야 서비스를 이용하실 수 있습니다.</div>
                </div>
                <button class="btn_popup_close" onclick="closePopup('#popup01')"><img src="<?php echo $AD_DIR?>/images/btn_close.png" alt="닫기" class="img"></button>
            </div>
            <div class="popup_container" id="popup02">
                <div class="popup_title01">마케팅 활용 동의(선택)</div>
                <div class="popup_body">
                    <div class="popup_txt">
                        -수집목적 : 새로운 상품 및 서비스에 대한 마케팅, 광고성 정보 전송
                    </div>
                    <div class="popup_txt">
                        -수집항목 : 신청자명, 휴대폰번호
                    </div>
                    <div class="popup_txt">
                        -보유기간 : 무료 체험 학습 완료 후 1년
                    </div>
                    <div class="popup_txt">
                        ※ 동의를 거부하시는 경우에도 무료 체험 학습 서비스는 이용하실 수 있습니다.
                    </div>
                </div>
                <button class="btn_popup_close" onclick="closePopup('#popup02')"><img src="<?php echo $AD_DIR?>/images/btn_close.png" alt="닫기" class="img"></button>
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
        //slide
        var swiper = new Swiper('.slide_container', {
            speed: 800,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 9000,
                disableOnInteraction: false,
            },
        });

        //video
        
        function play(){
            document.getElementById('thumbImg').innerHTML =
            '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/qwLMfjXDgIw?autoplay=1" allow="autoplay" frameborder="0" ></iframe>';
        }
        // popup
        function openPopup(id) {
            $('.popup_wrap').show();
            $(id).show();
        }
        function closePopup(id) {
            $('.popup_wrap').hide();
            $(id).hide();
        }

        // form
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
            var flag=false;
            var href;
            
            

            
            
            
            

            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            $("#mlh_text").val($("label[for='mlh_children_grade"+$('input:radio[name="mlh_children_grade"]:checked').val()+"']").text());
            
            if(!flag) return false;

            if($('input[id="agree02"]').is(":checked")){

                
            } else alert('마케팅 활용 동의를 체크 해주시기 바랍니다.');

            if($('input[id="agree"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
            return false;
        }
<?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>