<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css"); 



    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>    

    <title>듀얼소닉</title>

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
            line-height: 1.5;
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
        input,button {
            font-family: 'NanumSquare', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
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
            max-width: 800px;
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
            padding: 14px 5.6875% 23px;
        }
        .gif02 .img_box {
            box-shadow: 2px 5px 21px rgba(0,0,0,0.2);
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
        .use_gif {
            padding: 0 3.5% 9.357%;
            background-color: #f6d5c1;
        }
        .use_gif .gif_box {
            width: 49.3280%;
            font-size: 0;
        }
        .use_gif .gif {
            width: 100%;
            font-size: 10px;
        }
        .tech_container {
            padding: 0 3.5%;
            background-image: url('<?=$AD_DIR?>/images/dd_05_02.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center top;
            background-color: #120403;
        }
        .tech_container .tech01 {
            position: relative;
            width: 49.3280%;
        }
        .tech_container .tech01 .img {
            width: 100%;
        }
        .tech_container .tech01 .gif {
            position: absolute;
            top: 19.6%;
            left: 50%;
            transform: translateX(-50%);
            width: 92.5%;
        }
        .tech_container .tech02 {
            width: 49.3280%;
        }
        .tech_container .tech02 .img {
            width: 100%;
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
            padding: 12% 0 7.5%;
            background-color: #f6f1ec;
            /* background-image: url('<?=$AD_DIR?>/images/db_bg.png'); */
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: 100%;
        }
        .form_table {
            width: 94%;
            margin: 0 auto;
        }
        .form_table .lab_box {
            padding: 0 0 3.192% 0;
            text-align: right;
            white-space: nowrap;
            vertical-align: middle;
        }
        .form_table .lab {
            /* font-size: 6vw; */
            color: #737373;
            font-weight: normal;
        }
        .form_table .lab .img {
            font-size: 6vw;
            height: 5.25vw;
            max-height: 42px;
            min-height: 24px;
            vertical-align: text-top;
        }
        .form_table .inp_box {
            padding: 0 0 3.192% 3.591%;
            font-size: 3vw;
            color: #646464;
            vertical-align: middle;
        }
        .form_table .inp {
            width: 75%;
            height: 5.25vw;
            max-height: 42px;
            min-height: 36px;
            padding: 3px;
            box-sizing: border-box;
            border: 1px solid #a8a8a8;
            box-shadow: inset 3px 3px 5px rgba(0, 0, 0, 0.1);
            font-size: 3vw;
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
        .form_table .inp_name,
        .form_table .inp_age {
            width: 60%;
        }
        .form_table .inp_tel {
            width: 80%;
            min-width: 160px;
        }
        .form_table .inp_txt {
            width: 70%;
        }
        .form_container .btn_box {
            margin-top: 6%;
            font-size: 0;
        }
        .form_container .btn_img {
            width: 75%;
            max-width: 527px;
        }
        .form_container .txt_notice {
            margin: 4% 0;
            font-size: 2.8572vw;
            color: #848484;
            line-height: 1.4;
        }
        .form_container .inp_agree {
            vertical-align: middle;
        }
        .form_container .agree_check {
            margin-top: 2.5%;
            font-size: 16px;
            font-weight: bold;
            vertical-align: middle;
            color: #9b9b9b;
        }
        .form_container .btn_popup {
            background-color: transparent;
            border: none;
            font-size: 16px;
            font-weight: bold;
            vertical-align: middle;
            color: #9b9b9b;
        }
        /* 추가 댓글 스타일 */
        .comment_container {
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
            line-height: 1;
        }
        .comment_container .comment_date {
            margin-top: 4px;
            font-size: 12px;
            color: #b8b8b8;
            line-height: 1;
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
            margin-top: 36px;
            text-align: right;
        }
        .comment_container .comment_btn {
            vertical-align: middle;
            font-size: 13px;
            margin-left: 6px;
            cursor: pointer;
        }
        .comment_container .comment_btn .icon {
            vertical-align: middle;
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

        @media screen and (min-width: 801px){
            .form_table .lab .img {
                font-size: 36px;
            }
            .form_table .inp_box {
                font-size: 24px;
            }
            .form_table .inp {
                font-size: 28px;
            }
            .form_container .txt_notice {
                font-size: 20px;
            }
            .form_container .agree_check {
                font-size: 20px;
            }
            .form_container .btn_popup {
                font-size: 20px;
            }
        }
        @media screen and (max-width: 500px){
            .form_container {
                padding: 12% 0 10%;
            }
            .form_table .inp_box {
                font-size: 16px;
            }
            .form_table .inp {
                font-size: 18px;
            }
            .form_container .agree_check {
                font-size: 13px;
            }
            .form_container .btn_popup {
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
    <?php if(element('multi_code',$view)==='adtive' || element('multi_code',$view)==='adtive2'){ ?>
                         <!-- 타겟푸시_L6444448 -->
            <script src='//cdn.targetpush.co.kr/js/targetpush.js'  charset='utf-8'></script>
            <script> (function(){adtive_target_push.start('L6444448')}(document)) </script>
            <!--// 타겟푸시_L6444448 -->
    <?php } ?>
    <?php if(strtolower(element('multi_code',$view))==='gdn'){ ?>
            <!-- Global site tag (gtag.js) - Google Ads: 661874705 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-661874705"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-661874705'); </script>

            <?php if($this->session->flashdata('mlh_id')){ ?>

            <!-- Event snippet for Website lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-661874705/MAsZCMbg88gBEJHQzbsC'}); </script>
      
        

            <?php } ?>
        <?php } ?>
        <?php if(strtolower(element('multi_code',$view))==='ct'){ ?>

                <script type='text/javascript'>
                    !function (w,d,s,u,t,ss,fs) {
                        if(w.ex2cts)return;t=w.ex2cts={};if(!window.t) window.t = t;
                        t.push = function() {t.callFunc?t.callFunc.apply(t,arguments) : t.cmd.push(arguments);};
                        t.cmd=[];ss = document.createElement(s);ss.async=!0;ss.src=u;
                        fs=d.getElementsByTagName(s)[0];fs.parentNode.insertBefore(ss,fs);
                    }(window,document,'script','//st2.exelbid.com/js/cts.js');
                    ex2cts.push('init', '5ef0036af1c49a1a0d8b4567');
                </script>


                <?php if($this->session->flashdata('mlh_id')){ ?>

                <script> ex2cts.push('purchase');</script>
          
            

                <?php } ?>
            <?php } ?>   
                 
        <script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
        <script type="text/javascript">
              kakaoPixel('7431202530174679533').pageView();
        </script>

<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>

        <!-- <div class="go_form_fixed js-fixed-btn" id="btnGoFormFixed">
            <a href="#formContainer" class="btn_img btn_goform"><img src="<?=$AD_DIR?>/images/btn_goform.png" class="img" alt="자세하게 알아보기"></a>
            <button class="btn_img btn_close" type="button" onclick="closeGoFormBtn();"><img src="<?=$AD_DIR?>/images/btn_fixed_close.png" class="img" alt="닫기"></button>
        </div> -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_01.png" alt="25세부터 서서히 40대부터는 급감하는 콜라겐 보충 안하면 순식간에 피부 탄력 무너져.." class="img"></div> -->
        <!-- gif01 -->
        <!-- <div class="gif01"> -->
            <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_02.gif" alt="듀얼소닉 사용예시영상" class="img"></div> -->
            <!-- <div class="video_box">
                <video class="video" preload="metadata" draggable="true" controls muted playsinline autoplay loop poster="<?=$AD_DIR?>/images/thum_video02.jpg">
                    <source src="<?=$AD_DIR?>/video/video02.mp4" type="video/mp4">
                    브라우저가 비디오 태그를 지원하지 않습니다.
                </video>
            </div>
        </div> -->

        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_03.png" alt="기사내용" class="img"></div> -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_01.jpg" alt="피부과가 아닌 집에서 답을 찾다" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_02.jpg" alt="듀얼소닉 이런분들이 쓰면 좋아요~!" class="img"></div>

        <!-- dbform -->
        <div class="form_container" id="formContainer" style="background-image: url('<?=$AD_DIR?>/images/bg_form__02.jpg');">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">


                <table class="form_table">
                    <tbody>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_name" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_name.png" alt="성함" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input" label="성함" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_mobileno" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_tel.png" alt="연락처" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_tel input" label="연락처" placeholder="숫자만 적어주세요" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_age" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_age.png" alt="나이" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_age" id="mlh_age" class="inp inp_age input" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_gender.png" alt="성별" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" value="1" name="mlh_gender" id="mlh_gender1" class="input inp_radio" label="성별"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                <label for="mlh_gender1" class="lab_radio">여성</label>
                                
                                <input type="radio" value="2" name="mlh_gender" id="mlh_gender2" class="input inp_radio" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                <label for="mlh_gender2" class="lab_radio">남성</label>
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_text" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_time.png" alt="통화가능한시간대" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_text" id="mlh_text" class="inp inp_txt input" label="통화가능한시간대" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_item.png" alt="렌탈상품" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" name="mlh_goods_type" id="mlh_goods_type1" class="input inp_radio" label="렌탈상품" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ,true); ?>>
                                <label for="mlh_goods_type1" class="lab_radio">럭셔리</label>
                                
                                <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2" class="input inp_radio" label="렌탈상품" <?php echo set_checkbox('mlh_goods_type','2'); ?>>
                                <label for="mlh_goods_type2" class="lab_radio">프로페셔널</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="agree_check agree_box txt_center">
                    <input type="checkbox" name="agree" id="agree" class="inp_agree" checked> 
                    <label for="agree" class="lab_agree">개인정보 수집 및 활용 동의</label>
                    | <button class="btn_popup" type="button" onclick="openPopup('popupAgree')">약관보기</button>
                </div>
                <div class="btn_box txt_center">
                    <button class="btn_img"><img src="<?=$AD_DIR?>/images/btn_form.png" alt="더 자세히 알아보기" class="img"></button>
                </div>
                <!-- <div class="txt_center txt_notice" >
                    당일 렌탈 혜택은 지금, 이 페이지에서만 가능한 이벤트 입니다. <br>
                    기입된 정보는 본 이벤트 외에 어떠한 용도로도 사용되지 않습니다. 

                </div> -->
            <?php echo form_close(); ?>
        </div>
        <!-- dbform end -->

        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15.jpg" alt="듀얼소닉 후기 댓글" class="img"></div> -->

        <!-- 후기 댓글 -->
        <!-- <div class="comment_container">
            <div class="comment_amount">댓글 287</div>
            <div class="comment_margin_box"></div>
            <div class="comment_tab_list">
                <a href="#formContainer" class="comment_tab comment_tab_active">추천순</a>
                <a href="#formContainer" class="comment_tab">최신순</a>
                <a href="#formContainer" class="comment_tab">과거순</a>
            </div>
            <div class="comment_form clearfix">
                <div class="comment_inp">로그인 후 작성이 가능합니다.</div>
                <a href="#formContainer" class="comment_btn_submit">댓글입력</a>
            </div>

            <div class="comment_list"> -->
                <!-- 1 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_best">
                            <img src="<?=$AD_DIR?>/images/best.png" alt="best" class="img">
                        </div>
                        <div class="comment_info">
                            <div class="comment_user">lovedamon</div>
                            <div class="comment_date">2020.08.01  14:43</div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            저는 관리샵에서 일하고있습니다. 지인 추천으로 렌탈하여 이용해봤는데
                            확실히 얼굴선이 정리되고 팔자주름 개선 효과 있습니다. 직업이 직업인만큼
                            임상이 습관이라 왼쪽, 오른쪽, 비포 애포터 확실하게 테스트 해봤고요.
                            제가 가장 확연히 좋다 느낀 부위는 45도 광대, 팔자주름, 리프팅이에요. <br>
                            좀 더 익숙해지면 목주름 관리도 해보려고요. 부디 피부가 얇아지지 않고 오래
                            이용할 수 있었으면 좋겠네요.
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            425
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            2
                        </span>
                    </div>
                </div> -->
                <!-- 2 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">slad***</div>
                            <div class="comment_date">2020.08.15  22:56</div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                        제가 뉴아, 프라엘, 뉴스킨의 고주파, LED, 갈바닉 등 홈케어 제품 꽤 써봤는데
듀얼소닉은 몇 차원이 다른제품입니다. 몇 달 전 피부과에서 더블로 한 번 잘못
받았다가 얼굴 뒤집어져서 나랑 초음파는 안맞는 건가..싶었는데 듀얼소닉으로
한 번에 100샷 정도를 일주일에 1~2번씩 사용하니 부담도 적고, 피부개선도
기대 이상이라 놀랐어요. 제가 이거 구매하려고 한 4달 고민한 것 같은데, 
최근에 결국 샀고, 결과는 대만족 입니다. 좋은 제품 감사합니다!
                        </div>
                        <div class="comment_images clearfix">
                            <img src="<?=$AD_DIR?>/images/img01.png" alt="후기이미지" class="img">
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            401
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            2
                        </span>
                    </div>
                </div> -->
                <!-- 3 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">wool860215</div>
                            <div class="comment_date">2020.08.03  09:12 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            어릴 때부터 볼살로 엄청 고민하고 있어서 각종 미용 시술 받아봤구요,
                            예약하기 귀찮고 관리 받을 시간이 안맞다 보니 자연스레 나이가 들어
                            얼굴처짐이 생겨 불독같아 보여 몇일 고민하다 렌탈 구매하게 됐네요<br>
                            하고 나니 금방 얼굴 리프팅 효과 나구요, 병원에서 하는 시술 방법과 동일
                            한데 괜히 고생할 필요 없이 원하는 시간대 할 수 있어서 만족합니다. 홈케어
                            많이 구입해봤지만 즉각적으로 반응 온 제품은 이 제품이라 강추합니다     
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            381 
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            4
                        </span>
                    </div>
                </div> -->
                <!-- 4 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">psa3611</div>
                            <div class="comment_date">2020.08.08  10:25 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            어머나, 세상에.. 너무 좋습니다. 탄력이 떨어져서 고민 끝에 주문을 했는데
                            너무 잘한 선택인 것 같아요. 워낙 고가 제품이라 정말 망설였는데
                            사용하고는 확신이 생겼습니다. 꾸준히 사용해서 더 좋은 효과를 보고 싶네요
                            좋은 제품 만들어 주셔서 진심으로 감사 드립니다. 저와 같은 고민 가지신
                            분들도 꼭 저와 같은 기분 좋은 경험 해보시길 권해드립니다.        
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            297
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            3
                        </span>
                    </div>
                </div> -->
                <!-- 5 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">ehwk06</div>
                            <div class="comment_date">2020.08.10  11:52 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            받자마자 바로 사용했는데요, 이틀 뒤에 보는 사람마다 살빠졌다네요<br>
                            턱이랑 이중턱은 확실하게 리프팅되네요~ 뾰족해졌어요 ㅋㅋ
                            <br>
                            팔자주름은 더 지켜볼게요 아직 이르니까 좀 더 하다보면 효과가 있겠죠?
                            편하게 관리받을 수 있다는게 제일 장점인 것 같아요 
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            199
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            1
                        </span>
                    </div>
                </div> -->
                <!-- 6 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">young0193</div>
                            <div class="comment_date">2020.08.18  17:11 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            얼굴에 좋다는 기계는 다 써봐서 반신반의 마지막이라는 마음으로 구매
                            했는데 진짜 좋아요!!!! 첨이지만 저는 강도를 좀 있게 5단계로 했는데
                            한 번 시술로도 완전 틀려요!!!! 광도나고, 인디언 주름도 사라진듯..
                            완전 대박이에요~!!!!
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            151
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            2
                        </span>
                    </div>
                </div> -->
                <!-- 7 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="프로필사진 없음" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">pyj0830</div>
                            <div class="comment_date">2020.08.15  22:59 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            안녕하세요. 30대 초반 주부입니다. 먼저 저는 슈링크를 평소에 주기적으로
                            시술받았던 주부인데요. 시간 내서 가는게 보통 일이 아닌지라 우연히 듀얼소닉을 보고 2달 고민만하다가 이렇게 렌탈하게 되었네요. 도착하자마자 풀페이스
                            해보니 확실히 코 옆 팔자 시작점이 올라가긴 하네요. 익숙치 않아 서툴렀지만
                            방법도 쉽고 어느정도 보이니 너무 만족하고 있어요. 집에 좋다는 고주파
                            피부미용기기 3개 있는데 처분해도 되겠어요.. 이게 최고네요♥    
                        </div>
                        <div class="comment_images">
                            <img src="<?=$AD_DIR?>/images/img02.png" alt="후기이미지" class="img">
                            <img src="<?=$AD_DIR?>/images/img03.png" alt="후기이미지" class="img">
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="좋아요" class="icon">
                            108 
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="싫어요" class="icon">
                            3
                        </span>
                    </div>
                </div> -->
            <!-- </div>
            <div class="comment_more_box">
                <a href="#formContainer" class="comment_btn_more">
                    댓글 <span class="emph_num">287개</span> 더 보기
                </a>
            </div>
        </div> -->

        <!-- 후기 댓글 end -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_03.jpg" alt="프로페셔널 vs 럭셔리" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_04_02.jpg" alt="2주에 딱 한번, 15분 씩 ! 4주만에 놀라운 피부 변화 ! " class="img"></div>
        
        <div class="use_gif clearfix">
            <div class="gif_box fl_left"><img src="<?=$AD_DIR?>/images/use_01.gif" alt="얼굴 윤곽 및 사각턱 개선" class="gif"></div>
            <div class="gif_box fl_right"><img src="<?=$AD_DIR?>/images/use_02.gif" alt="목주름 및 탄력 개선" class="gif"></div>
        </div>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_05_01.jpg" alt="따라올 수 없는 듀얼소닉 기술의 품격" class="img"></div>
        
        <div class="tech_container clearfix">
            <div class="tech01 fl_left">
                <img src="<?=$AD_DIR?>/images/dd_tech_01.jpg" alt="듀얼소닉" class="img">
                <img src="<?=$AD_DIR?>/images/duallayer.gif" alt="예시영상" class="gif">
            </div>
            <div class="tech02 fl_right">
                <img src="<?=$AD_DIR?>/images/dd_tech_02.jpg" alt="타사기기" class="img">
            </div>
        </div>
    
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_05_03.jpg" alt="따라올 수 없는 듀얼소닉 기술의 품격" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_06_01.jpg" alt="렌탈 신청시 받을 수 있는 놀라운 혜택!" class="img"></div>
        <div class="gif02">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_06_02.gif" alt="사용예시영상" class="img"></div>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_06_03.jpg" alt="렌탈 신청시 받을 수 있는 놀라운 혜택!" class="img"></div>

        <!-- dbform02 -->
        <div class="form_container" id="formContainer02">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">


                <table class="form_table">
                    <tbody>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_name" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_name.png" alt="성함" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input02" label="성함" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_mobileno" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_tel.png" alt="연락처" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_tel input02" label="연락처" placeholder="숫자만 적어주세요" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_age" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_age.png" alt="나이" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_age" id="mlh_age" class="inp inp_age input02" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_gender.png" alt="성별" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" value="1" name="mlh_gender" id="mlh_gender1" class="input02 inp_radio" label="성별"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                <label for="mlh_gender1" class="lab_radio">여성</label>
                                
                                <input type="radio" value="2" name="mlh_gender" id="mlh_gender2" class="input02 inp_radio" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                <label for="mlh_gender2" class="lab_radio">남성</label>
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_text" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_time.png" alt="통화가능한시간대" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_text" id="mlh_text" class="inp inp_txt input02" label="통화가능한시간대" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_item.png" alt="렌탈상품" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" name="mlh_goods_type" id="mlh_goods_type1" class="input02 inp_radio" label="렌탈상품" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ,true); ?>>
                                <label for="mlh_goods_type1" class="lab_radio">럭셔리</label>
                                
                                <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2" class="input02 inp_radio" label="렌탈상품" <?php echo set_checkbox('mlh_goods_type','2'); ?>>
                                <label for="mlh_goods_type2" class="lab_radio">프로페셔널</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="agree_check agree_box txt_center">
                    <input type="checkbox" name="agree" id="agree2" class="inp_agree" checked> 
                    <label for="agree2" class="lab_agree">개인정보 수집 및 활용 동의</label>
                    | <button class="btn_popup" type="button" onclick="openPopup('popupAgree')">약관보기</button>
                </div>
                <div class="btn_box txt_center">
                    <button class="btn_img"><img src="<?=$AD_DIR?>/images/btn_form.png" alt="더 자세히 알아보기" class="img"></button>
                </div>
                <!-- <div class="txt_center txt_notice" >
                    당일 렌탈 혜택은 지금, 이 페이지에서만 가능한 이벤트 입니다. <br>
                    기입된 정보는 본 이벤트 외에 어떠한 용도로도 사용되지 않습니다. 

                </div> -->
            <?php echo form_close(); ?>
        </div>
        <!-- dbform02 end -->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_16.png" alt="푸터" class="img"></div>

        <!-- 개인정보 처리방침 팝업 -->
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
                    <button type="button" class="btn_close" onclick="closePopup('popupAgree')">닫 기</button>
                </div>
            </div>
        </div>
    </div>
        <!-- 개인정보 처리방침 팝업 end -->
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>   
    <script>
        // popup
        function openPopup(el){
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }
        function closeGoFormBtn() {
            $('#btnGoFormFixed').hide();
        }

        // // fixed btn 스크롤 애니메이션
        // var floatPosition = parseInt($(".js-fixed-btn").offset().top);

        // $(window).scroll(function() {
        //     var scrollTop = $(window).scrollTop();
        //     var newPosition = scrollTop + floatPosition + "px";

        //     $(".js-fixed-btn").stop().animate({
        //         "top" : newPosition
        //     },{
        //         'duration' : 500,
        //         'easing' : 'easeOutCirc',
        //     });

        // }).scroll();

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
            var flag=false;
            var href;

            <?php if(strtolower(element('multi_code',$view))==='CT'){ ?>
                ex2cts.push('track', 'consult');
            <?php } ?>   

            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

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

        function submitContents02(f) {
            var flag=false;
            var href;

            <?php if(strtolower(element('multi_code',$view))==='CT'){ ?>
                ex2cts.push('track', 'consult');
            <?php } ?>   

            $('.input02').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree2"]').is(":checked")){
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
                $('.loading').hide();
                kakaoPixel('7431202530174679533').completeRegistration();
        <?php } ?>
    </script>
</body>
</html>


<?php if(element('multi_code',$view) ==='taboola_pc_RON2' || element('multi_code',$view) ==='taboola_re' || element('multi_code',$view) ==='taboola_mo_RON2'){?>
    <?php if($this->session->flashdata('mlh_id')){ ?>

         <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'complete_registration2', id: 1253631});
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
            <img src='https://trc.taboola.com/1253631/log/3/unip?en=complete_registration2'
                width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->
       




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
<?php } ?>


<?php if(element('multi_code',$view) ==='tenping_news' ){ ?>
        
        <?php if($this->session->flashdata('mlh_id')){ ?>

            <script src="//tenping.kr/scripts/cpa/tenping.cpa.V2_Domain.min.js"></script>
            <script>
                TenpingScript.SendConversion("<?php echo $this->session->flashdata('mlh_mobileno') ? substr($this->session->flashdata('mlh_mobileno'),-4): '' ?>");
            </script>
      
        

        <?php } ?>
        
<?php } ?>


<?php if(element('multi_code',$view) ==='TGM' || element('multi_code',$view) ==='TGP' ){ ?>
        <div id="wp_tg_cts" style="display:none;"></div>

        <script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
        <?php if($this->session->flashdata('mlh_id')){ ?>

      
       <script type="text/javascript">
            var wptg_tagscript_vars = wptg_tagscript_vars || [];
            wptg_tagscript_vars.push((function() {
            return {wp_hcuid:"", /*고객넘버 등 Unique ID (ex. 로그인 ID, 고객넘버 등 )를 암호화하여 대입.주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/ti:"49584", /*광고주 코드 */ty:"PurchaseComplete", /*트래킹태그 타입 */device:"web", /*디바이스 종류 (web 또는 mobile)*/items:[{i:"비용상담 ", /*전환 식별 코드 (한글 , 영어 , 번호 , 공백 허용 )*/t:"비용상담 ", /*전환명 (한글 , 영어 , 번호 , 공백 허용 )*/p:"1", /*전환가격 (전환 가격이 없을경우 1로 설정 )*/q:"1" /*전환수량 (전환 수량이 고정적으로 1개 이하일 경우 1로 설정 )*/}]};}));</script>
      
        

        <?php } else { ?>
        
            <script type="text/javascript">
            var wptg_tagscript_vars = wptg_tagscript_vars || [];
            wptg_tagscript_vars.push((function() {
                return {wp_hcuid:"", /*고객넘버 등 Unique ID (ex. 로그인 ID, 고객넘버 등 )를 암호화하여 대입.주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/ti:"49584", /*광고주 코드 */ty:"Home", /*트래킹태그 타입 */device:"web" /*디바이스 종류 (web 또는 mobile)*/};}));
            </script> 

        <?php } ?>
        
<?php } ?>





