<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 




    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>  
    <title>컷앤컷</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        ul, ol, li, dt, dd {
            list-style: none;
        }
        body {
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            font-size: 100%;
            color: #333;
            line-height: 1;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        input,
        button {
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
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
        /* gif01 */
        .gif_container01 {
            position: relative;
        }
        .gif_container01 .gif_box {
            position: absolute;
            left: 50%;
            bottom: 9.1899%;/* 76px */
            transform: translateX(-50%);
            width: 72.5%;
            max-width: 580px;
            height: 0;
            padding-bottom: 40.375%;
            overflow: hidden;
            font-size: 0;
        }
        .gif_container01 .gif {
            width: 100%;

            <?php //echo $this->cbconfig->get_device_type() === 'mobile' ? 'height: 125px;' : 'height: 325px;' ?>
            
            font-size: 10px;
        }
        /* gif02 */
        .gif_container02 {
            padding: 0 5.125%;
            background-image: url("<?=$AD_DIR?>/images/bg_pattern.png");
            background-repeat: repeat;
            background-size: 1.875%;
        }
        .gif_container02 .gif_box {
            width: 49.7215%;
            height: 0;
            padding-bottom: 30.7800%;
            box-sizing: border-box;
            border: 1px solid #222;
            overflow: hidden;
            font-size: 0;
        }
        .gif_container02 .gif {
            width: 100%;
            font-size: 10px;
        }

        /* form */
        .form_container {
            padding: 6.25% 0;
            background-color: #2f2f2f;
            background-image: url("<?=$AD_DIR?>/images/form_bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
        }
        .form_container .form_title {
            margin-bottom: 3.5%;
            text-align: center;
            font-size: 0;
        }
        .form_container .form_title .img {
            width: 62.5%;
            max-width: 500px;
            font-size: 10px;
        }
        .form_container .form_table {
            width: 100%;
        }
        .form_container .lab_box {
            width: 14.25%;
            padding-bottom: 2.25%;
            text-align: right;
            vertical-align: middle;
        }
        .form_container .lab {
            font-size: 24px;
            white-space: nowrap;
            font-weight: bold;
            color: #fff;
        }
        .form_container .inp_box {
            width: 85.75%;
            padding-left: 2.25%;
            padding-bottom: 2.25%;
            vertical-align: middle;
        }
        .form_container .inp {
            font-size: 24px;
        }
        .form_container .inp_txt {
            width: 90.27%;
            height: 60px;
            padding: 0 3px;
            box-sizing: border-box;
            border: none;
            background-color: #fff;
        }
        .form_container .lab_radio {
            display: block;
            float: left;
            width: 45.135%;
            height: 60px;
            line-height: 60px;
            text-align: center;
            background-color: #fff;
            font-size: 24px;
            font-weight: 600;
            color: #232323;
        }
        .form_container .inp_gender:checked + .lab_radio {
            background-color: #ff2c4d;
            color: #fff;
        }
        .form_container .agree_box {
            padding: 0 8.25%;
            text-align: right;
        }
        .form_container .inp_agree {
            vertical-align: middle;
        }
        .form_container .lab_agree {
            vertical-align: middle;
            font-size: 16px;
            color: #fff;
        }
        .form_container .btn_box {
            margin-top: 3%;
            text-align: center;
        }
        .form_container .btn_submit {
            width: 80%;
            max-width: 500px;
        }
        .form_container .btn_submit:focus {
            outline: none;
        }
        /* goods_inquiry_container */
        .goods_inquiry_container {
            overflow: hidden;
            background-image: url("<?=$AD_DIR?>/images/bg_pattern.png");
            background-repeat: repeat;
            background-size: 1.875%;
        }
        .goods_inquiry_container .gif_arrow {
            padding: 5.25% 0 1.875%;
            text-align: center;
            font-size: 0;
        }
        .goods_inquiry_container .gif_arrow .gif {
            max-width: 360px;
            width: 45%;
            font-size: 10px;
        }
        .goods_inquiry_container .min_price_box {
            padding: 3.75% 5%;
            text-align: center;
            vertical-align: middle;
            font-size: 26px;
            font-weight: 600;
            word-break: keep-all;
            letter-spacing: -0.03em;
            color: #4a4a4a;
            background-color: #fff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .goods_inquiry_container .price_inp {
            height: 1.5385em;
            text-align: center;
            border-radius: 0;
            border: 1px solid #d5d5d5;
            font-size: 26px;
            color: #2f2f2f;
        }
        .goods_inquiry_container .price_inp:focus {
            outline: none;
        }
        .goods_inquiry_container .price_inp_name {
            width: 4.5385em;
        }
        .goods_inquiry_container .price_inp_price {
            width: 6.4616em;
        }
        .goods_inquiry_container .rolling_inquiry {
            padding: 7% 0;
        }
        .goods_inquiry_container .title_rolling {
            text-align: center;
            font-size: 0;
        }
        .goods_inquiry_container .title_rolling .img {
            max-width: 394px;
            width: 49.25%;
            font-size: 10px;
        }
        .goods_inquiry_container .rolling_container {
            width: 91.75%;
            margin: 3.5% auto 0;
            padding: 4.75%;
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 2px 5px 10px rgba(0,0,0,0.1);
        }
        .rolling_container .rolling_wrap {
            height: 11.4em;
            font-size: 24px;
            overflow: hidden;
        }
        .rolling_container .rolling_list {
            margin-top: -2.3em;
        }
        .rolling_container .rolling_item {
            height: 2.25em;
            border-bottom: 1px solid #c2c2c2;
            font-size: 24px;
            line-height: 2.25;
            letter-spacing: -0.05em;
            color: #4a4a4a;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }
        @media screen and (max-width: 600px) {
            .goods_inquiry_container .min_price_box {
                font-size: 18px;
            }
            .goods_inquiry_container .price_inp {
                font-size: 18px;
            }
            .goods_inquiry_container .price_inp_name {
                width: 4.2em;
            }
            .goods_inquiry_container .price_inp_price {
                width: 6em;
            }
            .rolling_container .rolling_wrap {
                font-size: 18px;
            }
            .rolling_container .rolling_item {
                font-size: 18px;
            }
            .form_container .lab_box {
                width: 18%;
            }
            .form_container .lab {
                font-size: 18px;
            }
            .form_container .inp_box {
                width: 82%;
            }
            .form_container .inp {
                font-size: 18px;
            }
            .form_container .inp_txt {
                height: 48px;
            }
            .form_container .lab_radio {
                height: 48px;
                line-height: 48px;
                font-size: 18px;
            }
            .form_container .btn_box {
                margin-top: 6%;
                text-align: center;
            }
        }
        @media screen and (max-width: 430px) {
            .goods_inquiry_container .min_price_box {
                font-size: 15px;
            }
            .goods_inquiry_container .price_inp {
                font-size: 15px;
            }
            .rolling_container .rolling_wrap {
                font-size: 14px;
            }
            .rolling_container .rolling_item {
                font-size: 14px;
            }
            .form_container .inp_txt {
                height: 42px;
            }
            .form_container .lab_radio {
                height: 42px;
                line-height: 42px;
            }
            .form_container .lab_agree {
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

    <?php if(strtolower(element('multi_code',$view))==='gdn1' || strtolower(element('multi_code',$view))==='gdn2' || strtolower(element('multi_code',$view))==='youtube1' || strtolower(element('multi_code',$view))==='youtube2'){ ?>

           
        <!-- Global site tag (gtag.js) - Google Ads: 481436278 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-481436278"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-481436278');
        </script>

            <?php if($this->session->flashdata('mlh_id')){ ?>

           <!-- Event snippet for 상담신청완료 conversion page -->
           <script>
             gtag('event', 'conversion', {'send_to': 'AW-481436278/XUNSCNjhzucBEPbEyOUB'});
           </script>
            <?php }  ?>
    <?php } ?>  
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <!-- gif_box01 -->
        <div class="img_box gif_container01">
            <img src="<?=$AD_DIR?>/images/cnc_01.png" alt="맘카페 뒤흔든 클라라 다이어트, 식후 이것 1포면 끝? 대체 뭐길래?" class="img">
            <div class="gif_box">
                <img src="<?=$AD_DIR?>/images/selfcam.jpg" alt="영상" class="gif">
            </div>
        </div>

        <!-- form01 -->
        <div class="form_container">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents01(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            
                <div class="form_title"><img src="<?=$AD_DIR?>/images/form_title.gif" alt="선착순 딱 300명 한정 최저가 혜택!" class="img"></div>
                <div class="form_table_contianer">
                    <table class="form_table">
                        <tbody>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_name" class="lab">이 름</label>
                                </th>
                                <td class="inp_box">
                                    <input type="text" id="mlh_name" name="mlh_name" class="inp inp_txt input01" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_mobileno" class="lab">연락처</label>
                                </th>
                                <td class="inp_box">
                                    <input type="tel" id="mlh_mobileno" name="mlh_mobileno" class="inp inp_txt input01" label="연락처" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_age" class="lab">나 이</label>
                                </th>
                                <td class="inp_box">
                                    <input type="tel" id="mlh_age" name="mlh_age" class="inp inp_txt input01" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <span class="lab">성 별</span>
                                </th>
                                <td class="inp_box clearfix">
                                    <input type="radio" id="mlh_gender1" name="mlh_gender" value="1" class="inp inp_gender blind input01" label="성별" <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                    <label for="mlh_gender1" class="lab_radio">여성</label>
                                    <input type="radio" id="mlh_gender2" name="mlh_gender" value="2" class="inp inp_gender blind input01" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                    <label for="mlh_gender2" class="lab_radio">남성</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="agree_box">
                        <input type="checkbox" name="agree" id="agree1" class="inp_agree" checked>
                        <label for="agree1" class="lab_agree">
                            개인정보 수집 및 이용에 동의
                        </label>
                    </div>
                    <div class="btn_box">
                        <button type="submit" class="btn_img btn_submit">
                            <img src="<?=$AD_DIR?>/images/btn_submit.png" alt="가격알아보기" class="img">
                        </button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- form01 end -->

        <!--  -->
        <div class="goods_inquiry_container">
            <div class="gif_arrow">
                <img src="<?=$AD_DIR?>/images/arrow.gif" alt="결과확인" class="gif">
            </div>
            <div class="min_price_box">
                <input type="text" class="price_inp price_inp_name" readonly>
                님의 최소비용은 
                <input type="text" class="price_inp price_inp_price" readonly>
                원 입니다.
            </div>
            <div class="rolling_inquiry">
                <div class="title_rolling"><img src="<?=$AD_DIR?>/images/title_roll.png" alt="실시간 문의 현황" class="img"></div>
                <div class="rolling_container">
                    <div class="rolling_wrap">
                        <ul class="rolling_list">
                            <li class="rolling_item">김기* - 맘카페에서 보고 왔는데, 몇 포 들어 있나요?</li>
                            <li class="rolling_item">이순* - 방금 가격 문의 남겼는데 언제 연락 주시나요</li>
                            <li class="rolling_item">박정* - 뱃살 때문에 스트레스 받는데 정말 효과 있나요?</li>
                            <li class="rolling_item">윤지* - 신청 했는데 제품은 언제 오나요? 빨리 먹고 싶어요</li>
                            <li class="rolling_item">김희* - 식욕 때문에 살이 안 빠지는데 먹으면서도 뺄 수 있나요?</li>
                            <li class="rolling_item">윤옥* - 제 인생 마지막 다이어트가 되길 바랍니다</li>
                            <li class="rolling_item">유희* - 저 먹고 효과 봐서 엄마도 구매하신다고 하는데 지인 소개 할인 같은 건 안되나요? ㅎㅎ</li>
                            <li class="rolling_item">김충* - 남자도 먹어도 되나요…</li>
                            <li class="rolling_item">하현* - 변비 때문에 고민인데, 변비도 해결 될까요?</li>
                            <li class="rolling_item">조수* - 문의 남겼습니다~~ 바로 좀 연락주세요~~</li>
                            <li class="rolling_item">한다* - 컷앤컷더블과 컷앤컷돌외 차이점이 뭔가요</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/cnc_02.jpg" alt="이런분들께 강력추천" class="img"></div> -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/cnc_03_1.jpg" alt="지긋지긋 반복되는 다이어트 올겨울 컷앤컷으로 진짜 끝낸다" class="img"></div>
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/cnc_04.png" alt="컷앤컷더블" class="img"></div> -->
        <!-- gif02 -->
        <!-- <div class="gif_container02 clearfix">
            <div class="gif_box fl_left"><img src="<?=$AD_DIR?>/images/cncdubble01.jpg" alt="가르시니아 열매" class="gif"></div>
            <div class="gif_box fl_right"><img src="<?=$AD_DIR?>/images/cncdubble.gif" alt="가르시니아 작용" class="gif"></div>
        </div> -->
        <!--  -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/cnc_05.jpg" alt="컷앤컷돌외" class="img"></div> -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/cnc_06.jpg" alt="컷앤컷으로 다이어트 종결한 생생후기" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/cnc_07.jpg" alt="믿을수 있는 64년 전통 경남제약 클라라 컷앤컷 다이어트" class="img"></div>

        <!-- form02 -->
        <div class="form_container">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents02(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id2" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code2" value="<?php echo element('multi_code',$view);?>">

                <div class="form_title"><img src="<?=$AD_DIR?>/images/form_title.gif" alt="선착순 딱 300명 한정 최저가 혜택!" class="img"></div>
                <div class="form_table_contianer">
                    <table class="form_table">
                        <tbody>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_name2" class="lab">이 름</label>
                                </th>
                                <td class="inp_box">
                                    <input type="text" id="mlh_name2" name="mlh_name" class="inp inp_txt input02" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_mobileno2" class="lab">연락처</label>
                                </th>
                                <td class="inp_box">
                                    <input type="tel" id="mlh_mobileno2" name="mlh_mobileno" class="inp inp_txt input02" label="연락처"  value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_age2" class="lab">나 이</label>
                                </th>
                                <td class="inp_box">
                                    <input type="tel" id="mlh_age2" name="mlh_age" class="inp inp_txt input02" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <span class="lab">성 별</span>
                                </th>
                                <td class="inp_box clearfix">
                                    <input type="radio" id="mlh_gender1_" name="mlh_gender" value="1" class="inp inp_gender blind input02" label="성별" <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                    <label for="mlh_gender1_" class="lab_radio">여성</label>
                                    <input type="radio" id="mlh_gender2_" name="mlh_gender" value="2" class="inp inp_gender blind input02" label="성별" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                    <label for="mlh_gender2_" class="lab_radio">남성</label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="agree_box">
                        <input type="checkbox" name="agree" id="agree2" class="inp_agree" checked>
                        <label for="agree2" class="lab_agree">
                            개인정보 수집 및 이용에 동의
                        </label>
                    </div>
                    <div class="btn_box">
                        <button type="submit" class="btn_img btn_submit">
                            <img src="<?=$AD_DIR?>/images/btn_submit.png" alt="가격알아보기" class="img">
                        </button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- form02 end -->

        <div class="goods_inquiry_container">
            <div class="gif_arrow">
                <img src="<?=$AD_DIR?>/images/arrow.gif" alt="결과확인" class="gif">
            </div>
            <div class="min_price_box">
                <input type="text" class="price_inp price_inp_name" readonly>
                님의 최소비용은 
                <input type="text" class="price_inp price_inp_price" readonly>
                원 입니다.
            </div>
            <div style="padding-bottom: 10%;"></div>
        </div>

        <div class="img_box">
            <img src="<?=$AD_DIR?>/images/footer.png" alt="footer" class="img">
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

        // form01
        function submitContents01(f){
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

            if ($('input[id="agree1"]').is(":checked")) {
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
        function submitContents02(f){
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

            if ($('input[id="agree2"]').is(":checked")) {
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

        $(document).ready(function(){
            //실시간 문의 현황 롤링
            function rollingText(){
                $('.rolling_list').animate({marginTop: - 2.3 + "em"}, 600, function() { 
                    //첫번째 요소를 마지막 끝에 복사해서 추가
                    $(this).find(".rolling_item:first").clone().appendTo(this);
                    //뒤로 복사된 첫번재 요소 삭제
                    $(this).find(".rolling_item:first").remove();
                    //위치값을 초기화 한다.
                    $(this).css("margin-top", 0);
                });
            }
            setInterval(function() { rollingText(); }, 4000);
        });
    </script>
</body>
</html>