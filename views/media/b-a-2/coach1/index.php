<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

if(strtolower(element('multi_code',$view))==='c050' || strtolower(element('multi_code',$view))==='c050_m'){
$this->managelayout->add_meta('<meta name="google-site-verification" content="A65Rb9Z1ny6wgbId50GdA9JtHAX5-ZEqZS2FbRB_Myw" />');
}

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap"); 



    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_key'])) $jid=$_GET['adpot_key'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>    
    <title>코치투자그룹</title>
    
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        ul, ol, li, dt, dd {
            list-style: none;
        }

        body {
            font-family: 'Noto Sans KR','Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            font-size: 100%;
            line-height: 1;
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
            min-width: 360px;
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
            color: #f44264;
            font-weight: 500;
        }

        .txt_bold {
            font-weight: 500;
        }
        .fl_left {
            float: left;
        }
        .fl_right {
            float: right;
        }
        /* fixed_box */
        .fixed_box {
            position: absolute;
            top: 28%;
            right: 5%; 
            z-index: 100;
            max-width: 20%;
            min-width: 96px;
        }
        .fixed_box .img {
            width: 100%;
        }
        .fixed_box .btn_close {
            position: absolute;
            top: -12.5px;
            right: -12.5px;
            width: 25px;
            border-radius: 50%;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.15);
            border: none;
        }
        /*  */
        .head {
            padding: 3% 6.25%;
            margin-bottom: 6.5%;
            background-color: #ebebeb;
            font-size: 28px;
            letter-spacing: -0.05em;
            word-spacing: -0.05em;
        }
        .head .title_emph {
            position: relative;
            color: #13136e;
            font-weight: bold;
            z-index: 10;
        }
        .head .title_emph:after {
            content: '';
            display: block;
            position: absolute;
            top: 55%;
            right: -3%;
            width: 104%;
            height: 0.6em;
            z-index: -1;
            background-color: rgba(205,205,227,0.7);
        }
        /* title_box */
        .title_box {
            padding: 0 6.25%;
            border-bottom: 1px solid #bcbcbc;
            margin-bottom: 1.25%;
        }
        .title_box .title_sub {
            font-size: 24px;
            color: #13136e;
        }
        .title_box .title01 {
            margin-bottom: 7.43%;
            font-size: 48px;
            font-weight: 500;
            line-height: 1.2;
            letter-spacing: -0.05em;
            word-spacing: -0.05em;
            word-break: keep-all;
        }
        .title_box .title01 .txt_bold {
            font-weight: bold;
        }
        .title_box .title_profile_box {
            margin-bottom: 2.145%;
        }
        .title_box .title_profile_img {
            display: inline-block;
            width: 52px;
            vertical-align: middle;
            font-size: 0;
            margin-right: 4px;
        }
        .title_box .title_profile_img .img {
            width: 100%;
            font-size: 10px;
        }
        .title_box .title_profile_info {
            display: inline-block;
            vertical-align: middle;
            word-spacing: -0.05em;
        }
        .title_box .title_profile_nick {
            font-size: 22px;
            font-weight: 500;
            color: #000;
        }
        .title_box .title_profile_date {
            margin-top: 6px;
            font-size: 22px;
            color: #8b8b8b;
        }
        .title_box .title_btn_container {
            margin-bottom: 2.145%;
        }
        .title_btn_container .icon {
            width: 100%;
            font-size: 10px;
        }
        .title_btn_container .title_btn_box01 .btn {
            display: inline-block;
            width: 45px;
            font-size: 0;
        }
        .title_btn_container .title_btn_box02 .btn {
            display: inline-block;
            width: 44px;
            font-size: 0;
        }
        /* article */
        .article {
            padding: 0 6.25%;
        }
        .article .article_txt_box {
            margin: 6.25% 0;
            font-size: 32px;
            line-height: 1.5;
            color: #393e38;
            letter-spacing: -0.06em;
            word-break: keep-all;
        }
        .article .txt_bold {
            color: #000;
        }
        .article .article_img_box {
            font-size: 0;
        }
        .article_img_box .img {
            font-size: 12px;
            width: 100%;
        }
        /*  */
        .txt_box01 {
            text-align: center;
            font-size: 32px;
            font-weight: 500;
            color: #020e2c;
            letter-spacing: -0.05em;
        }
        .txt_box01 a {
            display: inline-block;
            padding-bottom: 1%;
            border-bottom: 1px solid rgba(2,14,44,0.3);
        }

        /* form */
        .form_container {
            padding-bottom: 8%;
            margin-top: 4.5%;
            background-image: url(<?php echo $ad_dir ?>/images/db_bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
        }
        .form_container .form_title_sub {
            width: 440px;
            margin: 0 auto 5.5%;
            font-size: 18px;
            line-height: 1.77;
            border-radius: 20px;
            color: #fff;
            background-color: rgba(199,210,237,0.2);
            text-align: center;
        }
        .form_container .inp_wrap {
            margin: 0 6.25%;
            padding: 6.2458% 0;
            text-align: center;
            border-radius: 20px;
            background-color: rgba(199,210,237,0.2);
        }
        .form_container .inp_box {
            margin-bottom: 1.4%;
        }

        .form_container .inp {
            height: 60px;
            width: 80%;
            padding: 0 2%;
            box-sizing: border-box;
            border: none;
            background-color: rgba(255,255,255,0.8);
            box-shadow: inset -5px -4px 7px rgba(7,16,61,0.47);
            font-size: 20px;
            font-family: 'Noto Sans KR','Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        .form_container .inp::placeholder {
            color: #020e2c;
        }
        .form_container .btn_box {
            margin-top: 7.1429%;
        }
        .form_container .btn_img {
            max-width: 80%;
            border-radius: 20px;
            box-shadow: 4px 7px 0 rgba(0,10,36,0.6);
        }
        .form_container .agree_container {
            margin-top: 3.429%;
        }
        .form_container .agree_box {
            margin-bottom: 2%;
        }
        .form_container .lab_agree {
            padding-top: 6px;
            padding-left: 26px;
            background-image: url(<?php echo $ad_dir ?>/images/icon_uncheck.png);
            background-position: left center;
            background-repeat: no-repeat;
            font-size: 16px;
            color: #fff;
        }
        .form_container .inp_agree:checked + .lab_agree {
            background-image: url(<?php echo $ad_dir ?>/images/icon_check.png);
        }
        .form_container .btn_agree_detail {
            margin-left: 5px;
            padding: 0 3px;
            border-radius: 0;
            background-color: #fddb64;
            border: none;
            font-size: 16px;
            line-height: 1.25;
        }
        /* comment */
        .content_container {
            margin-top: 2.5%;
            border-top: 1px solid #bcbcbc;
        }
        .content_container .content_head {
            padding: 2.5% 6.25%;
            border-bottom: 1px solid #bcbcbc;
        }
        .content_container .left_box01 {
            font-size: 28px;
            color: #2f2f2f;
            letter-spacing: -0.037em;
            white-space: nowrap;
        }
        .content_container .left_box01 span {
            display: inline-block;
            margin-right: 5%;
        }
        .content_container .right_box01 {
            font-size: 20px;
            color: #7c7c7c;
        }
        .content_container .co_icon01 {
            height: 0.9643em;
            vertical-align: bottom;
        }
        .content_container .co_icon02 {
            height: 0.9em;
            vertical-align: bottom;
        }
        .content_container .left_box02 {
            font-size: 20px;
        }
        .content_container .left_box02 .txt_link {
            margin-right: 8px;
            color: #7c7c7c;
        }
        .content_container .left_box02 .txt_active {
            color: #384a78;
        }
        .content_container .right_box02 {
            font-size: 20px;
            color: #7c7c7c;
        }
        .content_container .toggle_switch {
            vertical-align: top;
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
            border-radius: 20px;
            background-color: #d3d3d3;
            cursor: pointer;
            transition: background-color .2s;
        }
        .content_container .toggle_switch:after {
            content: '';
            position: absolute;
            top: 3px;
            left: 3px;
            width: 14px;
            height: 14px;
            border-radius: 16px;
            background-color: #fff;
            transition: left .2s;
        }
        .content_container .toggle_switch.active {
            background-color: #4CAF50;
        }
        .content_container .toggle_switch.active:after {
            left: 23px;
        }
        .comment_list {
            margin: 0 6.25% 5%;
        }
        .comment_list .comment_box {
            padding: 4.286% 0;
            border-bottom: 1px solid #bcbcbc;
        }
        .comment_list .comment_box:last-child {
            border-bottom: none;
        }
        .comment_box .comment_head {
            margin-bottom: 8px;
            font-size: 24px;
        }
        .comment_box .comment_profile {
            vertical-align: middle;
        }
        .comment_box .comment_nick {
            vertical-align: middle;
            color: #2f2f2f;
        }
        .comment_box .comment_best {
            height: 0.7917em;
            vertical-align: middle;
        }
        .comment_box .comment_body {
            font-size: 22px;
            line-height: 1.5;
            letter-spacing: -0.037em;
            color: #393e38;
        }
        .comment_box .comment_foot {
            margin-top: 2.8572%;
        }
        .comment_box .comment_date {
            margin-top: 1.4286%;
            font-size: 20px;
            color: #7c7c7c;
        }
        .comment_box .comment_btn_box {
            font-size: 20px;
        }
        .comment_box .comment_btn {
            display: inline-block;
            width: 3.5em;
            background-color: #fff;
            border: 1px solid #bcbcbc;
            line-height: 1.55;
            text-align: center;
        }
        .comment_box .comment_btn .icon {
            height: 1.15em;
            vertical-align: middle;
        }
        .comment_box .comment_btn .comment_btn_num01 {
            vertical-align: middle;
            color: #f44264;
        }
        .comment_box .comment_btn .comment_btn_num02 {
            vertical-align: middle;
            color: #7c7c7c;
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
        .popup_container {
            display: none;
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
        .popup_container .popup_body {
            overflow-y: auto;
            padding: 5%;
            height: calc(100% - 50px);
            box-sizing: border-box;
            font-size: 13px;
            line-height: 1.4;
        }
        .popup_container .popup_text_box {
            line-height: 1.35;
            margin: 10px 0;
        }
        .popup_container .popup_text_box h2 {
            font-size: 16px;
        }
        .popup_container .popup_text_box p {
            font-size: 14px;
        }
        .popup_container .popup_btn_box {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .popup_container .btn_close {
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            background-color: #e4bb6f;
            color: #141414;
            font-size: 16px;
        }
        /*  */
        .popup_sms {
            display: none;
            color: #333;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            background: #fff;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            max-width: 700px;
            width: 80%;
        }
        .popup_sms .sms_content {
            padding: 30px 15px;
        }
        .popup_sms .sms_title {
            text-align: center;
            font-size: 15px;
            margin-bottom: 10px;
            font-weight: normal;
        }
        .popup_sms .inp_sms {
            float: left;
            width: 70%;
            height: 30px;
            padding: 5px;
            box-sizing: border-box;
            border: 0 none;
            background: #eee;
            color: #333;
        }
        .popup_sms .btn_sms {
            float: right;
            width: 30%;
            border: 0 none;
            background: #2b3d6e;
            color: #eee;
            height: 30px;
            font-weight: bold;
            cursor: pointer;
        }
        /* 680 - */
        @media screen and (max-width: 680px) {
            .txt_box01 {
                font-size: 24px;
            }
        }
        /* 600 - */
        @media screen and (max-width: 600px) {
            .head {
                font-size: 16px;
            }
            /* title_box */
            .title_box .title_sub {
                font-size: 16px;
            }
            .title_box .title01 {
                font-size: 24px;
            }
            .title_box .title_profile_box {
                margin-bottom: 4%;
            }
            .title_box .title_profile_img {
                width: 36px;
            }
            .title_box .title_profile_nick {
                font-size: 14px;
            }
            .title_box .title_profile_date {
                margin-top: 4px;
                font-size: 14px;
                color: #8b8b8b;
            }
            .title_box .title_btn_container {
                margin-bottom: 4%;
            }
            .title_btn_container .title_btn_box01 .btn,
            .title_btn_container .title_btn_box02 .btn {
                width: 28px;
            }
            
            /* article */
            .article .article_txt_box {
                font-size: 18px;
            }
            /*  */
            .txt_box01 {
                font-size: 16px;
            }
            /* form */
            .form_container .form_title_sub {
                width: 310px;
                font-size: 13px;
            }
            .form_container .inp_wrap {
                border-radius: 10px;
            }
            .form_container .inp {
                height: 36px;
                box-shadow: inset -3px -2px 4px rgba(7,16,61,0.47);
                font-size: 16px;
            }
            .form_container .agree_container {
                margin-top: 3.429%;
            }
            .form_container .btn_img {
                border-radius: 3.5vw;
                box-shadow: 3px 4px 0 rgba(0,10,36,0.6);
            }
            .form_container .lab_agree {
                padding-top: 4px;
                padding-left: 20px;
                background-size: auto 20px;
                font-size: 14px;
            }
            .form_container .btn_agree_detail {
                margin-left: 4px;
                padding: 0 3px;
                font-size: 14px;
            }
            /* comment */
            .content_container .left_box01 {
                font-size: 18px;
            }
            .content_container .right_box01 {
                font-size: 16px;
            }
            .content_container .left_box02 {
                font-size: 16px;
            }
            .content_container .right_box02 {
                font-size: 16px;
            }
            .content_container .left_box02 .txt_link {
                margin-right: 6px
            }
            .comment_box .comment_head {
                margin-bottom: 6px;
                font-size: 18px;
            }
            .comment_box .comment_profile {
                width: 36px;
            }
            .comment_box .comment_body {
                font-size: 16px;
            }
            .comment_box .comment_date {
                font-size: 14px;
            }
            .comment_box .comment_btn_box {
                font-size: 14px;
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

    <?php if(strtolower(element('multi_code',$view))==='c010' || strtolower(element('multi_code',$view))==='c010_m'){ ?>
        <script src="//tenping.kr/scripts/cpa/tenping.cpa.V2_Domain.min.js"></script>
        <?php if($this->session->flashdata('mlh_id')){ ?>
        
        <script>
            TenpingScript.SendConversion( '<?php echo $this->session->flashdata('mlh_mobileno') ?>' );
        </script>
 
        <?php } else{ ?>

        <?php } ?>
    <?php } ?>   
    
    <?php if(strtolower(element('multi_code',$view))==='c02050'){ ?>
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '820940595387658');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=820940595387658&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <?php if($this->session->flashdata('mlh_id')){ ?>
 
        <?php } else{ ?>

        <?php } ?>
    <?php } ?>   
    
     <?php if(strtolower(element('multi_code',$view))==='c030' || strtolower(element('multi_code',$view))==='c030_2'){ ?>

        
          <script type='text/javascript'>
              !function (w,d,s,u,t,ss,fs) {
                  if(w.ex2cts)return;t=w.ex2cts={};if(!window.t) window.t = t;
                  t.push = function() {t.callFunc?t.callFunc.apply(t,arguments) : t.cmd.push(arguments);};
                  t.cmd=[];ss = document.createElement(s);ss.async=!0;ss.src=u;
                  fs=d.getElementsByTagName(s)[0];fs.parentNode.insertBefore(ss,fs);
              }(window,document,'script','//st2.exelbid.com/js/cts.js');
              ex2cts.push('init', '5f180165f1c49af5648b4567');
          </script>


            <?php if($this->session->flashdata('mlh_id')){ ?>

                ex2cts.push('track', 'success');
            <?php } ?>
        </script>        
    <?php } ?>

    <?php if(strtolower(element('multi_code',$view))==='c040'){ ?>

        <script async src ="//cdnet.nasmob.com/adpacker/js/ap_pv_v2.0.js"></script>
        <?php if($this->session->flashdata('mlh_id')){ ?>
            <script>ADPACKER.SCRIPT.setConv();</script>
        <?php } ?>
    <?php } ?>   
    
    <?php if(strtolower(element('multi_code',$view))==='c050' || strtolower(element('multi_code',$view))==='c050_m'){ ?>

        <!-- Global site tag (gtag.js) - Google Ads: 613453579 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-613453579"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-613453579');
        </script>

        
        <?php if($this->session->flashdata('mlh_id')){ ?>

            <!-- Event snippet for 상담신청_기사형 conversion page -->
            <script>
              gtag('event', 'conversion', {'send_to': 'AW-613453579/TuA8CKjootkBEIuewqQC'});
            </script>
        <?php } else{ ?>
            <!-- Event snippet for 상담신청_기사형 conversion page
            In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
            <script>
            function gtag_report_conversion(url) {
              var callback = function () {
                if (typeof(url) != 'undefined') {
                  window.location = url;
                }
              };
              gtag('event', 'conversion', {
                  'send_to': 'AW-613453579/TuA8CKjootkBEIuewqQC',
                  'event_callback': callback
              });
              return false;
            }
            </script>
        <?php } ?>

    <?php } ?>


    <?php if(strtolower(element('multi_code',$view))==='c060'){ ?>

        <!-- Taboola Pixel Code -->
        <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'page_view', id: 1324976});
          !function (t, f, a, x) {
                 if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                 }
          }(document.createElement('script'),
          document.getElementsByTagName('script')[0],
          '//cdn.taboola.com/libtrc/unip/1324976/tfa.js',
          'tb_tfa_script');
        </script>
        <noscript>
          <img src='https://trc.taboola.com/1324976/log/3/unip?en=page_view'
              width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->


        
        <?php if($this->session->flashdata('mlh_id')){ ?>

            <!-- Taboola Pixel Code -->
            <script>
                _tfa.push({notify: 'event', name: 'lead', id: 1324976});
            </script>
            <noscript>
                <img src='https://trc.taboola.com/1324976/log/3/unip?en=lead'
                    width='0' height='0' style='display:none'/>
            </noscript>
            <!-- End of Taboola Pixel Code -->

       
        <?php } ?>

    <?php } ?>

    <?php if(strtolower(element('multi_code',$view))==='c070'){ ?>

       
        <script src="https://www.leadtracker.live/static/js/fixel.js"></script>
        

    <?php } ?>
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <!-- fixed img -->
        <div class="fixed_box js-fixed-btn">
            <a href="#formContainer">
                <img src="<?php echo $ad_dir ?>/images/fixed_img.jpg" alt="인공지능 알파 내일 10배오를 급등주는? 확인하기" class="img">
            </a>
            <button class="btn_img btn_close" type="button" onclick="closeGoFormBtn();">
                <img src="<?php echo $ad_dir ?>/images/btn_fixed_close.png" class="img" alt="닫기">
            </button>
        </div>
        <!-- fixed img end -->
        <div class="head">
            주식토론 인기글 추천주 뉴스/시황 <span class="title_emph">수익인증</span>
        </div>
        <div class="title_box">
            <div class="title_sub">수익인증></div>
            <div class="title01">
                [사진 有] <span class="txt_bold">2,000만원으로 “10억” 모으는데 딱 1년 걸렸네요..</span>
            </div>
            <div class="title_profile_box">
                <div class="title_profile_img"><img src="<?php echo $ad_dir ?>/images/title_profile.png" alt="프로필사진" class="img"></div>
                <div class="title_profile_info">
                    <div class="title_profile_nick">누나떳다</div>
                    <div class="title_profile_date">2020.07.26 10:40 조회 1.2만</div>
                </div>
            </div>
            <div class="title_btn_container clearfix">
                <div class="title_btn_box01 fl_left">
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_01.png" alt="페이스북" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_02.png" alt="트위터" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_03.png" alt="카카오스토리" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_04.png" alt="블로그" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_05.png" alt="밴드" class="icon"></a>
                </div>
                <div class="title_btn_box02 fl_right">
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_01.png" alt="확대" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_02.png" alt="축소" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_03.png" alt="url" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_04.png" alt="프린터" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_05.png" alt="목록" class="icon"></a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="article_txt_box">
                <p>회원님들 안녕하세요~</p>
                <p>오랜만이네요^^ </p>
            </div>
            <div class="article_txt_box">
                <p>가끔씩 주식 정보만 올렸는데 회원님들이 재테크 수익 노하우 공유해달라고 쪽지를 많이 보내주셔서 글 올려요~</p>
            </div>
            <div class="article_txt_box">
                <p>저랑 친한 회원님들은 아시겠지만 <span class="txt_emph">2,000만원으로 1년 만에 10억</span>을 모았어요!</p>
            </div>
            <div class="article_txt_box">
                <p>
                    그래서 회원님들이 저를 투자 전문가로 오해 하시는데..
                </p>
                <p>
                    저는 그냥 평범한 회사원입니다!
                </p>
                <p>
                    일단 인증샷 먼저 올리고 갈게요~^^
                </p>
            </div>
            <div class="article_img_box">
                <img src="<?php echo $ad_dir ?>/images/img_01.jpg" alt="돈다발" class="img">
            </div>
            <div class="article_txt_box">
                <p>
                    손에 쥐고 있어도 믿어지지 않네요ㅎㅎ
                </p>
                <p>
                    저는 중소기업에서 일하는 회사원 입니다. 5년간 죽어라 일했는데도 고작 2천만원 모았어요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    이대로는 안되겠다 싶어 재테크를 알아보기 시작했어요.
                </p>
                <p>
                    요즘 다들 주식 많이 하더라구요?
                </p>
                <p>
                    저도 따라 하다가 1천만원 날리고 손절했죠. 이제 다시는 주식 안해야지! 했는데.. <span class="txt_emph">1억 수익 가능한 급등주 체험단 모집</span> 광고하는 <span class="txt_bold">코치투자그룹</span>을 알게 되었어요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    광고성 글 같았지만 무료체험이라 그냥 신청했어요!
                </p>
                <p>
                    신청하고나니 걱정돼서 여기저기 수소문 해봤는데 지인중에 알고 있는 분들이 있더라구요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    덕분에 저는 정확히 딱 1년 후 10억까지 모을 수 있었습니다. 최근 수익 올려봅니다!
                </p>
            </div>
            <div class="article_img_box">
                <img src="<?php echo $ad_dir ?>/images/img_02.jpg" alt="수익인증 캡처" class="img">
            </div>
            <div class="article_txt_box">
                <p>
                    회원님들, 꿀팁 드릴께요!
                </p>
                <p>
                    이제 혼자 주식 하는 시대는 지났습니다! 
                </p>
                <p>
                    인공지능으로 매수, 매도 타이밍을 자동 분석해주니까 손실 우려가 훨씬 적을 수 밖에 없는 거죠.  
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    오를 종목은 정해져 있다는 것!  혹시 아셨나요? 
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    뉴스/시황/급등주 완벽 분석으로 실검에 오르기 전 먼저 알 수 있는 거죠.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    제가 가끔 올리는 주식 정보도 받아서 올리는거에요ㅎㅎ
                </p>
                <p>
                    일부러 섞어서 올리긴 했는데, 그래도 저 덕분에 익절 하신 회원님들 많으시죠?
                </p>
            </div>
            <div class="article_img_box">
                <img src="<?php echo $ad_dir ?>/images/img_03.jpg" alt="수익인증 캡처" class="img">
            </div>
            <div class="article_txt_box">
                <p>
                    오늘 수익도 올려볼게요 ㅎㅎ
                </p>
                <p>
                    저처럼 주식 모르는 사람도 충분히 수익 올릴 수 있어요.
                </p>
                <p>
                    <span class="txt_emph">3일간 추천해준 종목 8~90%이상</span> 오르는 걸 보니 투자를 안할 수가 없겠더라구요! 
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    선착순 끝나기 전에 얼른 신청하세요!
                </p>
                <p>
                    그럼 다들 부자되세요.
                </p>
            </div>
        </div>
        <div class="txt_box01"><a href="#formContainer">▼ 1년안에 1억 모으기 무료체험 신청하기(선착순) ▼</a></div>
        <!-- db form -->
        <div class="form_container" id="formContainer">
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/db_title.png" alt="1억수익 가능한 급등주 체험단 모집" class="img"></div>
            <div class="form_title_sub">
                ※본 서비스는 코치투자그룹에서 무료로 제공됩니다※
            </div>            
                <?php 
                // $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <!-- <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno">       -->
                <input type="hidden" name="mlh_age" value="0" id="mlh_age">      
                <input type="hidden" name="cfc_num_" value="0" id="cfc_num_">      

                <div class="inp_wrap">
                    <div class="inp_box">
                        <input type="text" name="mlh_name" id="mlh_name" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" class="inp input" placeholder="이름을 입력하세요" label="이름">
                    </div>
                    <div class="inp_box">
                        <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp input" placeholder="전화번호를 입력하세요" label="전화번호" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                    </div>
                    <div class="btn_box">
                        <button type="button" class="btn_img" onclick='submitContents(this)'><img src="<?php echo $ad_dir ?>/images/btn_form.png" alt="3일간 VVIP 종목추천 무료받기" class="img"></button>
                    </div>

                    <div class="agree_container">
                        <div class="agree_box">
                            <input type="checkbox" name="agree01" id="agree01" class="inp_agree blind" checked>
                            <label for="agree01" class="lab_agree">개인정보 수집동의 및 이용동의 </label>
                            <button type="button" class="btn_agree_detail" onclick="openPopup('popupAgreement')">자세히보기</button>
                        </div>
                        <div class="agree_box">
                            <input type="checkbox" name="agree02" id="agree02" class="inp_agree blind" checked>
                            <label for="agree02" class="lab_agree">마케팅 정보 수신동의 </label>
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- db form end -->

        <!-- 댓글 -->
        <div class="content_container">
            <div class="content_head clearfix">
                <div class="fl_left left_box01">
                    <span>
                        <img src="<?php echo $ad_dir ?>/images/icon_01.png" alt="" class="co_icon01">
                        댓글 68
                    </span>
                    <span>
                        <img src="<?php echo $ad_dir ?>/images/icon_02.png" alt="" class="co_icon01">
                        좋아요 1,025
                    </span>
                </div>
                <div class="fl_right right_box01">
                    <a href="#formContainer">
                        <img src="<?php echo $ad_dir ?>/images/icon_03.png" alt="" class="co_icon02">
                        공유 | 신고
                    </a>
                </div>
            </div>
            <div class="content_head clearfix">
                <div class="fl_left left_box02">
                    <a href="#formContainer" class="txt_link txt_active">댓글 등록순</a>
                    <a href="#formContainer" class="txt_link ">최신순</a>
                </div>
                <div class="fl_right right_box02">
                    댓글알림
                    <div class="toggle_switch js-toggle-switch"></div>
                </div>
            </div>
            <div class="comment_list">
                <!-- 01 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_01.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">지은아빠부자되자</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            저도 코치 하고 있었습니다. 벌써 수익 20퍼센트에 30프로 매도랑..
                        </p>
                        <p>
                            혼자하는 주식이 아니라 전문가와 함께하니 확실히 다르네요. 든든합니다
                        </p>
                        <p>
                            덕분에 오늘도 이렇게 벌어가네요. 실현손익 보는 재미에 포옥 빠졌네요!
                        </p>
                        <p>
                            요거 때문에 회사를 취미로 다닙니다 ㅋㅋㅋㅋ
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">
                            2020년 07월 26일 18:12
                        </div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">202</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 02 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_02.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">잼난인생</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            진짜 주식은 한순간이네요ㅎㅎ 매도 매수 시기 정확합니다! 
                        </p>
                        <p>
                            원금 복구하려면 시간 좀 걸리겠지만 코치 믿고 갑니다ㅎㅎㅎ
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">2020년 07월 26일 20:01</div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">153</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">7</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 03 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_03.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">익절가즈아</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            누나떳다님 믿고 신청했어요. 덕분에 이번 달 200만원 더 벌게 생겼습니다.
                        </p>
                        <p>
                            너무 감사해요. 앞으로 잘 따라가겠습니다. 크던 작던간에 무조건 수익은 나네요.
                        </p>
                        <p>
                            처음 며칠은 조금 올라서 기대 안했는데 지금은 아주 쏠쏠합니다. 
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">2020년 07월 27일 18:55</div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">132</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 04 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_04.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">강남건물주</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            요즘 코로나 때문에 주식장 맛 갔던데.. 주식을 안할 수도 없고 정보는 없고.. 진짜 죽을 맛이었습니다.
                        </p>
                        <p>
                            덕분에 코치 알았네요 오랜만에 상한가 하나 봤어요
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">2020년 07월 27일 19:33</div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">102</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">7</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 댓글 end -->

        
        <div class="popup_wrap" id="popupWrap">
            <!-- sms -->
            <div class="popup_sms" id="popupSMS">
                <div class="sms_content">
                    <div class="sms_title">
                        <b>문자(SMS)</b>로 발송된 인증번호를 입력하세요.
                    </div>
                    <div class="sms_box clearfix">
                        <input type="number" name="cfc_num" id="cfc_num" placeholder="인증번호" class="inp_sms">
                        <button type="button" onclick="smsmap()" class="btn_sms">확인</button>
                    </div>
                </div>
            </div>
            <!-- 개인정보 취급방침 -->
            <div class="popup_container" id="popupAgreement">
                <div class="popup_body">
                    <div class="popup_text_container">
                        <div class="popup_text_box">
                            <h2>개인정보처리방침</h2>
                        </div>
                        <div class="popup_text_box">
                            <p>‘코치투자그룹’는 (이하 ‘회사’는) 고객님의 개인정보를 중요시하며, “정보통신망 이용촉진 및 정보보호”에 관한 법률을 준수하고 있습니다.</p>
                            <p>회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.</p>
                            <p>회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</p>
                            <p>ο 본 방침은 : 2019년 1월 2 일 부터 시행됩니다</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 수집하는 개인정보 항목</p>
                            <p>회사는 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>
                            <p>ο 수집항목 : 이름 , 나이, 직업군, 입금자명, 연락처, 카카오톡ID, 네이버ID, 가입 권유자(추천인), 수익률관련 항목, 주식 투자 경력, 투자목적, 투자가능시간, 투자성향</p>
                            <p>ο 개인정보 수집방법 : 홈페이지 및 카페(회원가입), 가입신청서, 설문지</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보의 수집 및 이용목적</p>
                            <p>회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.</p>
                            <p>ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산</p>
                            <p>콘텐츠 제공 , 구매 및 요금 결제 , 물품배송 또는 청구지 등 발송 , 금융거래 본인 인증 및 금융 서비스</p>
                            <p>ο 회원 관리</p>
                            <p>회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 , 연령확인 , 불만처리 등 민원처리 , 고지사항 전달</p>
                            <p>ο 마케팅 및 광고에 활용</p>
                            <p>이벤트 등 광고성 정보 전달 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계</p>
                            <p>ο 기타 목적</p>
                            <p>서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인 이용</p>
                            <p>고지사항 전달, 불만사항의 의사소통 경로 확보, 교육회/강연회 참여 방법 안내 등</p>
                            <p>신규서비스 등 최신정보 안내 및 개인맞춤서비스 제공을 위한 자료</p>
                            <p>교육회/강연회 참여 상담등 문의사항에 관한 정확한 답변</p>
                            <p>불량회원 부정이용 방지 및 비인가 사용방지</p>
                            <p>자사 서비스 및 재무설계 관련 상품 안내</p>
                            <p>기타 원활한 양질의 서비스 제공 등</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보의 보유 및 이용기간</p>
                            <p>원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.</p>
                            <p>보존 항목 : 이름 , 나이, 직업군, 입금자명, 연락처, 카카오톡ID, 네이버ID, 가입 권유자(추천인), 수익률관련 항목, 주식 투자 경력, 투자목적, 투자가능시간, 투자성향, 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 , 결제기록</p>
                            <p>보존 근거 : 고객지원, 부정이용 등</p>
                            <p>보존 기간 :</p>
                            <p>가. 계약 또는 청약철회 등에 관한 기록</p>
                            <p>– 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                            <p>– 보존 기간 : 5년</p>
                            <p>나. 대금결제 및 재화 등의 공급에 관한 기록</p>
                            <p>– 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                            <p>– 보존 기간 : 5년</p>
                            <p>다. 소비자의 불만 또는 분쟁처리에 관한 기록</p>
                            <p>– 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                            <p>– 보존 기간 : 3년</p>
                            <p>라. 본인 확인에 관한 기록</p>
                            <p>– 보존 이유 : 정보통신 이용촉진 및 정보보호 등에 관한 법률</p>
                            <p>– 보존 기간 : 6개월</p>
                            <p>마. 방문에 관한 기록</p>
                            <p>– 보존 이유 : 통신비밀보호법</p>
                            <p>– 보존 기간 : 3개월</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보의 파기절차 및 방법</p>
                            <p>회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.</p>
                            <p>ο 파기절차</p>
                            <p>회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다.</p>
                            <p>별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다.</p>
                            <p>ο 파기방법</p>
                            <p>– 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보 제공</p>
                            <p>회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다</p>
                            <p>– 이용자들이 사전에 동의한 경우</p>
                            <p>– 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 수집한 개인정보의 위탁</p>
                            <p>회사는 현재 서비스 이행을 위해 외부 업체에 위탁하지 아니합니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                ■ 이용자 및 법정대리인의 권리와 그 행사방법
                            </p>
                            <p>
                                이용자는 언제든지 등록되어 있는 자신의 개인정보를 조회하거나 수정할 수 있으며 가입 해지를 요청할 수도 있습니다.
                            </p>
                            <p>
                                이용자들의 개인정보 조회,수정을 위해서는 ‘개인정보변경'(또는 ‘회원정보수정’ 등)을 가입 해지(동의철회)를 위해서는 “회원탈퇴”를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다.
                            </p>
                            <p>
                                혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체 없이 조치하겠습니다.
                            </p>
                            <p>
                                귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 하겠습니다.
                            </p>
                            <p>
                                회사는 이용자의 요청에 의해 해지 또는 삭제된 개인정보는 “회사가 수집하는 개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                ■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항
                            </p>
                            <p>
                                회사는 귀하의 정보를 수시로 저장하고 찾아내는 ‘쿠키(cookie)’ 등을 운용합니다. 쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 회사은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다.
                            </p>
                            <p>
                                ▶ 쿠키 등 사용 목적
                            </p>
                            <p>
                                – 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공
                            </p>
                            <p>
                                귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.
                            </p>
                            <p>
                                ▶ 쿠키 설정 거부 방법
                            </p>
                            <p>
                                예: 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.
                            </p>
                            <p>
                                설정방법 예(인터넷 익스플로어의 경우)
                            </p>
                            <p>
                                : 웹 브라우저 상단의 도구 – 인터넷 옵션 – 개인정보
                            </p>
                            <p>
                                단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                ■ 개인정보에 관한 민원서비스
                            </p>
                            <p>
                                회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.
                            </p>
                            <p>
                                고객서비스담당 부서 : 고객지원센터
                            </p>
                            <p>
                                전화번호 : 1644-0656
                            </p>
                            <p>
                                개인정보관리책임자 성명 : 한준호
                            </p>
                            <p>
                                이메일 : coachinvest@coachinvest.kr
                            </p>
                            <p>
                                귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다
                            </p>
                        </div>
                    </div>
                </div>
                <div class="popup_btn_box">
                    <button type="button" class="btn_close" onclick="closePopup('popupAgreement')">닫기</button>
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
        // popup
        function openPopup(el){
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }
        // 댓글 스위치 모양 
        $('.js-toggle-switch').on('click',function(){
            $(this).toggleClass('active');
        });
        // fixed btn 닫기
        function closeGoFormBtn() {
            $('.js-fixed-btn').hide();
        }
        // fixed btn 스크롤 애니메이션
        var floatPosition = parseInt($(".js-fixed-btn").css('top'));

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


            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree01"]').is(":checked") && $('input[id="agree02"]').is(":checked")){

                
                
                // $('.loading').show();
                href = cb_url + '/postact/smssend';

                $.ajax({
                    async : false,
                    url : href,
                    type : 'post',
                    data: {
                        post_id: $('#post_id').val(),
                        mlh_mobileno: $("#mlh_mobileno").val(),
                        mlh_name: $('#mlh_name').val(),
                        multi_code: $('#multi_code').val(),
                        post_title: "<?php echo element('post_title',element('post', $view));?>",                        
                        csrf_test_name: cb_csrf_hash,
                    },      
                    dataType : 'json',
                    success : function(data) {
                        
                        if (data.result=='error') {
                            alert(data.message);
                            return false;
                        } else if (data.result=='success') {
                            alert('발송 하였습니다. 인증번호를 입력해 주세요');
                            openPopup('popupSMS');

                            // //alert(data.success);
                            // $('.' + classname).text(number_format(String(data.count)));
                            // $('#btn-' + classname).effect('highlight', {color : '#f37f60'}, 300);
                        }
                    },
                    complete : function(data) {
                        // $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                    }
                });

                return ;
                // 
                // $('.loading').show();
                // href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                // $.ajax({
                //     async : false,
                //     url : href,
                //     type : 'get',
                //     dataType : 'json',
                //     complete : function(data) {
                //         // $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                //     }
                // });

                // return flag;
            } else alert("개인정보 수집 및 이용동의 \n 마케팅 정보 수신동의를 체크 해주시기 바랍니다.");
            
            return false;
        }

        function smsmap() {
            var flag=false;
            var href;


            if(!$('#cfc_num').val()) {
                alert('인증번호를 입력해 주세요');
                return ;
            }

            

                
                
                // $('.loading').show();
                href = cb_url + '/postact/smsmap';

                $.ajax({
                    async : false,
                    url : href,
                    type : 'post',
                    data: {
                        post_id: $('#post_id').val(),
                        mlh_mobileno: $("#mlh_mobileno").val(),
                        mlh_name: $('#mlh_name').val(),
                        multi_code: $('#multi_code').val(),
                        cfc_num: $('#cfc_num').val(),                        
                        csrf_test_name: cb_csrf_hash,
                    },      
                    dataType : 'json',
                    success : function(data) {
                        
                        if (data.result=='error') {
                            alert(data.message);
                            return false;
                        } else if (data.result=='success') {
                            
                            $('#cfc_num_').val($('#cfc_num').val());
                            $('#fwrite').submit();
                            return true;
                            // //alert(data.success);
                            // $('.' + classname).text(number_format(String(data.count)));
                            // $('#btn-' + classname).effect('highlight', {color : '#f37f60'}, 300);
                        }
                    },
                    complete : function(data) {
                        // $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                    }
                });
            
            return false;
        }

        function cpaProc(mlh_id) {
            var href;

            // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
             
            // href = cb_url + '/postact/daine_query_curl/<?php echo urlencode($this->session->flashdata('mlh_name')) ?>/<?php echo $this->session->flashdata('mlh_age') ?>/<?php echo $this->session->flashdata('mlh_mobileno') ?>/<?php echo urlencode($this->session->flashdata('mlh_text')) ?>';

            href = "<?php echo base_url('postact/daine_query_curl') ?>";
            $.ajax({
                async : false,
                url : href,
                type : 'post',
                data: {
                    mlh_name: "<?php echo $this->session->flashdata('mlh_name') ?>",
                    mlh_mobileno: "<?php echo $this->session->flashdata('mlh_mobileno') ?>",
                    multi_code: "<?php echo element('multi_code',$view) ?>",
                    csrf_test_name: cb_csrf_hash,
                },                
                dataType : 'json',
                success : function(response) {
                    
                
                },
                error : function(response) {
                },
                complete : function (response) {
                   if (response.responseJSON.result) {
                    $.ajax({
                         async : false,
                         url : cb_url + '/media_multiple/act_update/' +mlh_id+'/'+encodeURIComponent(response.responseJSON.result),
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
    cpaProc("<?php echo $this->session->flashdata('mlh_id') ?>");

    <?php if(strtolower(element('multi_code',$view))==='c070'){ ?>
        
       _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>');
    <?php } ?>

    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>