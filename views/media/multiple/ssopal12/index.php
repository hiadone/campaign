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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
    <title>강남팔팔V맥스</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif;
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
        .form_container {
            /* padding-top: 3.4246%; */
            padding-top: 43.836%;
            /* background-color: #afafaf; */
            /* background-image: url('<?=$AD_DIR?>/images/777.jpg'); */
            background-image: url('<?=$AD_DIR?>/images/123.jpg');
            background-position: center top;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .form_container02 {
            background-image: url('<?=$AD_DIR?>/images/12345.jpg');
        }
        .form_container .btn_img {
            margin: 4.1096% 0;
        }
        .inp_list .row { 
            /* margin-bottom: 1.4%; */
            margin-bottom: 5.4794%;
        }
        .inp_list .label_box {
            width: 30.1369%;
            /* height: 4.7945vw;
            max-height: 35px; */
            height: 5.4794vw;
            max-height: 40px;
            float: left;
        }
        .inp_list .label_blind {
            display: block;
            width: 63%;
            height: 100%;
            margin-left: 37%;
        }
        .inp_list .inp_box {
            float: right;
            width: 69.8631%;
            font-size: 0;
        }
        .inp_list .inp {
            /* height: 4.7945vw;
            max-height: 35px; */
            height: 5.4794vw;
            max-height: 40px;
            border: 2px inset;
            border-radius: 7px;
            /* border: none; */
            background-color: #fff;
            /* font-size: 36px; */
            font-size: 4.9315vw;
        }
        .inp_list .inp_normal {
            /* width: 66.6666%; */
            width: 59.6078%;
        }
        .inp_list .inp_tel {
            /* width: 20%; */
            width: 24.5098%;
            margin-right: 1.9607%;
        }
        .inp_list .inp_textarea {
            /* width: 66.6666%;
            height: 7.3972vw;
            max-height: 54px; */
            width: 84.3138%;
            height: 6.8494vw;
            max-height: 50px;
        }
        .check_box {
            margin: 10px 0;
        }
        .check_box .inp_check {
            width: 18px;
            height: 18px;
            vertical-align: middle;
        }
        .check_box .label_check {
            font-size: 16px;
            letter-spacing: -1px;
        }
        .txt_emph {
            color: #a40400;
        }
        /* @media screen and (max-width: 730px){
            .inp_list .inp {
                font-size: 4.9315vw;
            }
        }
        
        @media screen and (max-width: 540px){
            .form_container {
                padding-top: 4%;
                background-size: 122%;
            }   
            .inp_list .row { 
                margin-bottom: 2%;
            }
            .inp_list .label_box {
                width: 26%;
                height: 5.8vw;
            }
            .inp_list .inp_box {
                float: right;
                width: 74%;
                font-size: 0;
            }
            .inp_list .inp {
                height: 5.8vw;
                max-height: 35px;
                border: none;
                background-color: #fff;
            }
            .inp_list .inp_normal {
                width: 78%;
            }
            .inp_list .inp_tel {
                width: 24%;
                margin-right: 2.4%;
            }
            .inp_list .inp_textarea {
                width: 78%;
                height: 9.5vw;
                max-height: 54px;
            }
            .check_box .label_check {
                font-size: 14px;
            }
        } */
        
        @media screen and (min-width: 731px) {
            .form_container {
                padding-top: 320px;
            }
            .inp_list .inp { 
                font-size: 36px;
            }
        }
        @media screen and (max-width: 580px) {
            .inp_list .row { 
                margin-bottom: 5%;
            }
        }
        @media screen and (max-width: 430px) {
            .inp_list .row { 
                margin-bottom: 4.5%;
            }
        }
        @media screen and (max-width: 359px) {
            .inp_list .row { 
                margin-bottom: 4.2%;
            }
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

        <div class="img_box"><img src="<?=$AD_DIR?>/images/1.jpg" alt="중년남성의 자신감 남자의 건강한 전립선을 위한 선택" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/main.gif" alt="강남팔팔 V맥스 30분 무료증정" class="img"></div>

        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/1a.jpg" alt="시원하게 콸콸콸 남자의 건강한 전립선을 위해" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/2b.jpg" alt="쏘팔메토 야뇨 소변속도 느림개선 전립선건강 불편함 개선 확인 완료" class="img"></div>
        <div class="img_box"><a href="#formContainer"><img src="<?=$AD_DIR?>/images/nbtn1.jpg" alt="무료체험 신청하기" class="img"></a></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/3c.jpg" alt="쏘팔메토 강남팔팔 V맥스 효과" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/4d.jpg" alt="쏘팔메토 강남팔팔 V맥스 효과" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/5e.jpg" alt="쏘팔메토 강남팔팔 V맥스 원료" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/6f.jpg" alt="쏘팔메토 이벤트 첫번째 30일분 무료증정 두번째 불만족시 100% 환불보장" class="img"></div> -->
        <div class="form_container" id="formContainer01">
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
                    <dl class="inp_list">
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_name" class="label_blind"><span class="blind">이름</span></label>
                            </dt>
                            <dd class="inp_box">
                                <input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name" class="input inp inp_normal" label="이름">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_mobileno1" class="label_blind"><span class="blind">연락처</span></label>
                            </dt>
                            <dd class="inp_box">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1" class="input inp inp_tel" maxlength="3" label="연락처">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno2" class="input inp inp_tel" maxlength="4" label="연락처">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno3" class="input inp inp_tel" maxlength="4" label="연락처">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_age" class="label_blind"><span class="blind">나이</span></label>
                            </dt>
                            <dd class="inp_box">
                                <input type="tel" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" name="mlh_age" id="mlh_age" class="input inp inp_normal" maxlength="2" label="나이">                                
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_text" class="label_blind"><span class="blind">문의</span></label>
                            </dt>
                            <dd class="inp_box">
                                <textarea name="mlh_text" id="mlh_text" class="input inp inp_textarea" label="문의"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </dd>
                        </div>
                    </dl>

                    <div class="box_center check_box">
                        <input type="checkbox" name="agree" id="agree" class="inp_check" checked>
                        <label for="agree" class="label_check">개인정보 수집/이용 동의</label>
                    </div>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:16px;text-align: center;">
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
                </div>
                <!-- <div class="box_center txt_emph">30세 이상만 신청 가능합니다</div> -->
                <!-- <div class="img_box">
                    <button class="btn_img" type="submit"><img src="<?=$AD_DIR?>/images/nbtn22.jpg" alt="30일 무료체험 신청하기" class="img"></button>
                </div> -->
                <div class="img_box">
                    <button class="btn_img" type="submit">
                        <img src="<?=$AD_DIR?>/images/btn1.jpg" alt="30일분 무료받기" class="img">
                    </button>
                </div>
            <?php echo form_close(); ?>
        </div>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/2.jpg" alt="야뇨 소변속도 느림개선 전립선 겅강 불편함 개선 확인 완료" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/3.jpg" alt="기능성 원료인 오타고사놀 인체 시험 결과 지구력 증지에 도움을 줄 수 있음을 확인" class="img"></div>

        <a href="#formContainer02" class="btn_img"><img class="img" src="<?=$AD_DIR?>/images/btn2.gif" alt="30일분 무료증정 클릭"></a>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/4.jpg" alt="강남팔팔 V맥스 주원료" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/5.jpg" alt="강남팔팔 V맥스는 GMP허가 받은 미국 건강기능 식품 제조 전문업체 US Pharmatech Inc. 에서 제조한 직수입완제품 정품이므로 안심하고 섭취하세요" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/last.gif" alt="강남팔팔 V맥스 특별혜택 30일분 무료증정" class="img"></div>

        <div class="form_container form_container02" id="formContainer02">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">       
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">           
            <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno_">      
                <div class="form_box">
                    <dl class="inp_list">
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_name2" class="label_blind"><span class="blind">이름</span></label>
                            </dt>
                            <dd class="inp_box">
                                <input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name2" class="input02 inp inp_normal" label="이름">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_mobileno_1" class="label_blind"><span class="blind">연락처</span></label>
                            </dt>
                            <dd class="inp_box">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno_1" class="input02 inp inp_tel" maxlength="3" label="연락처">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno_2" class="input02 inp inp_tel" maxlength="4" label="연락처">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno_3" class="input02 inp inp_tel" maxlength="4" label="연락처">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_age02" class="label_blind"><span class="blind">나이</span></label>
                            </dt>
                            <dd class="inp_box">
                                <input type="tel" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" name="mlh_age" id="mlh_age02" class="input02 inp inp_normal" maxlength="2" label="나이">                                
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box">
                                <label for="mlh_text02" class="label_blind"><span class="blind">문의</span></label>
                            </dt>
                            <dd class="inp_box">
                                <textarea name="mlh_text" id="mlh_text02" class="input02 inp inp_textarea" label="문의"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </dd>
                        </div>
                    </dl>

                    <div class="box_center check_box">
                        <input type="checkbox" name="agree" id="agree02" class="inp_check" checked>
                        <label for="agree02" class="label_check">개인정보 수집/이용 동의</label>
                    </div>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:16px;text-align: center;">
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
                </div>
                <!-- <div class="box_center txt_emph">30세 이상만 신청 가능합니다</div> -->
                <!-- <div class="img_box">
                    <button class="btn_img" type="submit"><img src="<?=$AD_DIR?>/images/nbtn22.jpg" alt="30일 무료체험 신청하기" class="img"></button>
                </div> -->
                <div class="img_box">
                    <button class="btn_img" type="submit">
                        <img src="<?=$AD_DIR?>/images/btn1.jpg" alt="30일분 무료받기" class="img">
                    </button>
                </div>
            <?php echo form_close(); ?>
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
        function getPostWord(str,firstVal,secondVal) {
            try {
                var lastStr = str[str.length-1].charCodeAt(0);
                if(lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if(lastCharIndex > 0) {
                    if(firstVal === "으로" && lastCharIndex === 8)
                        str += secondVal;
                    else
                        str += firstVal;
                } else {
                    str += secondVal;
                }
            } catch(e) {
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

            if($('input[id="agree"]').is(":checked")){
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
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
            return false;
        }

        function submitContents02(f) {
            var flag=false;
            var href;


            $('.input02').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree02"]').is(":checked")){
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno_").val($("#mlh_mobileno_1").val()+$("#mlh_mobileno_2").val()+$("#mlh_mobileno_3").val());
                        
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