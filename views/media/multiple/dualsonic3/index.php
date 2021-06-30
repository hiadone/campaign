<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css"); 



    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_cid'])) $jid=$_GET['adpot_cid'];
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


        @media screen and (min-width: 701px){
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
        @media screen and (max-width: 430px){
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

        @media screen and (min-width: 701px){
            .inbox dl dt,.inbox dl dd { display:table-cell;vertical-align:middle; font-size:24px; }
            .inbox input[type="text"],.inbox input[type="number"] { width:100%; font-size:22px; font-weight:bold; background: #fff; border:0; padding:4px; }
            .inbox .radio label { font-size:22px; margin-left: 3px; letter-spacing:-.5px; }
            .inbox .checkbox { text-align: center; font-size:20px; }
            .inbox summary { display:block;  text-align:center; color:#000; font-size:22px;font-weight:bold; margin-top:15px; line-height: 150%;}
        }

        @media screen and (max-width: 430px){
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

        <script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
        <script type="text/javascript">
              kakaoPixel('7431202530174679533').pageView();
        </script>
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>

        <div class="go_form_fixed js-fixed-btn" id="btnGoFormFixed">
<!--             <a href="#formContainer" class="btn_img btn_goform"><img src="<?=$AD_DIR?>/images/btn_goform.png" class="img" alt="자세하게 알아보기"></a>
            <button class="btn_img btn_close" type="button" onclick="closeGoFormBtn();"><img src="<?=$AD_DIR?>/images/btn_fixed_close.png" class="img" alt="닫기"></button> -->
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_1.jpg" alt="수시로 가던 피부과, 이제 절대 안가요!" class="img"></div>
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15.gif" alt="듀얼소닉 수상 내역" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_16.jpg" alt="듀얼소닉 수상 내역" class="img"></div>        
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_1_1.jpg" alt="수시로 가던 피부과, 이제 절대 안가요!" class="img"></div> -->
        <section class="inDB">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <div class="inbox">
                <dl>
                    <dt>
                        <label for="mlh_name" class="lab">이 름</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                    </dd>
                    <dt>성 별</dt>
                    <dd>
                        <input type="radio" value="1" name="mlh_gender" id="mlh_gender1" class="input inp_radio" label="성별"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                        <label for="mlh_gender1" class="lab_radio">여성</label>
                        
                        <input type="radio" value="2" name="mlh_gender" id="mlh_gender2" class="input inp_radio" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                        <label for="mlh_gender2" class="lab_radio">남성</label>
                    </dd>
                </dl>
                <dl>
                    <dt>                    
                        <label for="mlh_mobileno" class="lab">연락처</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_tel input" label="연락처"  value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                        
                    </dd>
                    <dt>                    
                        <span class="lab">제 품</span>
                    </dt>
                    <dd>
                        <div class="radio">
                            <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2" class="input inp_radio" label="렌탈상품" <?php echo set_checkbox('mlh_goods_type','2',true); ?> /><label for="mlh_goods_type2" class="lab_radio">프로</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="mlh_goods_type" id="mlh_goods_type1" class="input inp_radio" label="렌탈상품" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ); ?> /><label for="mlh_goods_type1" class="lab_radio">럭셔리</label>
                        </div>
                    </dd>
                </dl>
                <dl class="nth3">
                    <dt><label for="mlh_age" class="lab">나 이</label></dt>
                    <dd class="sec1">
                        <input type="number" name="mlh_age" id="mlh_age" class="inp inp_age input" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" placeholder="숫자로..."/>                        
                    </dd>
                    <dt class="sec2"><label for="mlh_text" class="lab">상담가능시간</label></dt>
                    <dd>
                        <input type="text" name="mlh_text" id="mlh_text" class="inp inp_txt input" label="상담가능시간" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                    </dd>
                </dl>

                <p class="db-btn"><button class="btn_img"><img src="<?=$AD_DIR?>/images/db-btn.png" alt="" /></button></p>
                <div class="checkbox">
                    <input type="checkbox" name="agree" id="agree" checked/><label for="agree">개인정보 수집 정책에 동의합니다</label> | <span  onclick="openPopup('popupAgree')">약관보기</span>
                </div>
                <summary>
                    기입된 정보는 본 이벤트 외에<br/>어떠한 용도로도 사용되지 않습니다
                </summary>
            </div>
            <?php echo form_close(); ?>
        </section>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_2.jpg" alt="수시로 가던 피부과, 이제 절대 안가요!" class="img"></div>
        <div class="img_box" style="margin-bottom:10px;"><img src="<?=$AD_DIR?>/images/du_3.jpg" alt="임상 시험" class="img"></div>
        
        <!-- <div class="img_box " style="margin-top:20px;"><img src="<?=$AD_DIR?>/images/du_4.jpg" alt="듀얼소닉 인체 시험결과" class="img"></div> -->
        
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_5.jpg" alt="감히 따라올 수 없는 듀얼소닉 기술의 품격" class="img"></div>
        

        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_6.jpg" alt="듀얼소닉 구성" class="img"></div>
        <div class="gif01">
            <div class="img_box">
                <img src="<?=$AD_DIR?>/images/du_gif.gif" alt="듀얼소닉 사용예시영상" class="img">
            </div>
            <!-- <div class="video_box">
                <video class="video" preload="metadata" draggable="true" controls muted playsinline autoplay loop poster="<?=$AD_DIR?>/images/thum_video02.jpg">
                    <source src="<?=$AD_DIR?>/video/video02.mp4" type="video/mp4">
                    브라우저가 비디오 태그를 지원하지 않습니다.
                </video>
            </div> -->
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_7.jpg" alt="프로페셔널 vs 럭셔리" class="img"></div>
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_8.jpg" alt="듀얼소닉 실제사용자 후기" class="img"></div>

        <!-- gif04 -->
        <!-- <div class="gif04">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/du_13.gif" alt="뷰티앤 부티의 듀얼소닉 소개 영상" class="img"></div>
        </div> -->
        <!-- video gif파일 video로 교체 -->
        <!-- <div class="gif04">
            <div class="video_box">
                <video class="video" preload="metadata" draggable="true" controls muted playsinline autoplay loop poster="<?=$AD_DIR?>/images/thum_video01.jpg">
                    <source src="<?=$AD_DIR?>/video/video01.mp4" type="video/mp4">
                    브라우저가 비디오 태그를 지원하지 않습니다.
                </video>
            </div>
        </div> -->
        
        
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_9.jpg" alt="듀얼소닉 수상 내역" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_10.jpg" alt="듀얼소닉 수상 내역" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15.gif" alt="듀얼소닉 수상 내역" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_16.jpg" alt="듀얼소닉 수상 내역" class="img"></div>        

        
        
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/event_8.gif?u=<?php echo date('Ymd') ?>" alt="이벤트" class="img"></div> -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_17_1.jpg" alt="렌탈신청혜택_1" class="img"></div> -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_1_1.jpg" alt="수시로 가던 피부과, 이제 절대 안가요!" class="img"></div> -->
        <section class="inDB">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents_(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id_" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code_" value="<?php echo element('multi_code',$view);?>">
            <div class="inbox">
                <dl>
                    <dt>
                        <label for="mlh_name_" class="lab">이 름</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_name" id="mlh_name_" class="inp inp_name input_" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                    </dd>
                    <dt>성 별</dt>
                    <dd>
                        <input type="radio" value="1" name="mlh_gender" id="mlh_gender1_" class="input_ inp_radio" label="성별"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                        <label for="mlh_gender1_" class="lab_radio">여성</label>
                        
                        <input type="radio" value="2" name="mlh_gender" id="mlh_gender2_" class="input_ inp_radio" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                        <label for="mlh_gender2_" class="lab_radio">남성</label>
                    </dd>
                </dl>
                <dl>
                    <dt>                    
                        <label for="mlh_mobileno_" class="lab">연락처</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_mobileno" id="mlh_mobileno_" class="inp inp_tel input_" label="연락처"  value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                        
                    </dd>
                    <dt>                    
                        <span class="lab">제 품</span>
                    </dt>
                    <dd>
                        <div class="radio">
                            <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2_" class="input_ inp_radio" label="렌탈상품" <?php echo set_checkbox('mlh_goods_type','2',true); ?> /><label for="mlh_goods_type2_" class="lab_radio">프로</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="mlh_goods_type" id="mlh_goods_type1_" class="input_ inp_radio" label="렌탈상품" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ); ?> /><label for="mlh_goods_type1_" class="lab_radio">럭셔리</label>
                        </div>
                    </dd>
                </dl>
                <dl class="nth3">
                    <dt><label for="mlh_age_" class="lab">나 이</label></dt>
                    <dd class="sec1">
                        <input type="number" name="mlh_age" id="mlh_age_" class="inp inp_age input_" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" placeholder="숫자로..."/>                        
                    </dd>
                    <dt class="sec2"><label for="mlh_text_" class="lab">상담가능시간</label></dt>
                    <dd>
                        <input type="text" name="mlh_text" id="mlh_text_" class="inp inp_txt input_" label="상담가능시간" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                    </dd>
                </dl>

                <p class="db-btn"><button class="btn_img"><img src="<?=$AD_DIR?>/images/db-btn.png" alt="" /></button></p>
                <div class="checkbox">
                    <input type="checkbox" name="agree" id="agree_" checked/><label for="agree_">개인정보 수집 정책에 동의합니다</label> | <span  onclick="openPopup('popupAgree')">약관보기</span>
                </div>
                <summary>
                    기입된 정보는 본 이벤트 외에<br/>어떠한 용도로도 사용되지 않습니다
                </summary>
            </div>
            <?php echo form_close(); ?>
        </section>
        
        
        

        <!-- dbform end -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15_1.png" alt="렌탈혜택" class="img"></div> -->

        <!-- 후기 댓글 -->
        

        <!-- 후기 댓글 end -->

        <div class="img_box" ><img src="<?=$AD_DIR?>/images/du_footer.jpg" alt="안내" class="img"></div>
        <!-- dbform -->

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

        // fixed btn 스크롤 애니메이션
        var floatPosition = parseInt($(".js-fixed-btn").offset().top);

        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var newPosition = scrollTop + floatPosition + "px";

            $(".js-fixed-btn").stop().animate({
                "top" : newPosition
            },{
                'duration' : 500,
                'easing' : 'easeOutCirc',
            });

        }).scroll();

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

        function submitContents_(f) {

            var flag=false;
            var href;

            <?php if(strtolower(element('multi_code',$view))==='CT'){ ?>
                ex2cts.push('track', 'consult');
            <?php } ?>   

            $('.input_').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree_"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id_').val() +'/' + $('#multi_code_').val() ;

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

        function cpaProc(mlh_id,post_md) {
            var href;

            // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
             
            href = cb_url + '/postact/adpot_query_curl/<?php echo $jid?>';

            $.ajax({
                async : false,
                url : href,
                data : {mlh_name : '<?php echo $this->session->flashdata('mlh_name') ?>',mlh_mobileno : '<?php echo $this->session->flashdata('mlh_mobileno') ?>', csrf_test_name : cb_csrf_hash},
                type : 'post',
                dataType : 'json',
                success : function(response) {
                    
                
                },
                error : function(response) {
                },
                complete : function (response) {
                    if (response.responseJSON.error) {
                    alert(response.responseJSON.Message);
                    return false;
                   } else if (response.responseJSON.success) {
                    $.ajax({
                         async : false,
                         url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,

                         type : 'get',
                         dataType : 'json',
                         success : function(data) {
                              
                         }
                     });
               
                    }
                   
                }

            });
        }

        <?php if($this->session->flashdata('mlh_id')){?>        
                $('.loading').hide();
                kakaoPixel('7431202530174679533').completeRegistration();
                <?php if(element('multi_code',$view) ==='adpot'){?>        
                cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
                <?php } ?>
        <?php } ?>
    </script>
</body>
</html>
<?php if(element('multi_code',$view) ==='taboola_pc_RON2' || element('multi_code',$view) ==='taboola_mo_RON2'){?>
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
