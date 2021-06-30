
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
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
    <title>Document</title>
    <style>
        html, body, div, a, button, form, dl, dt, dd, ul, ol, li, input, textarea {
            padding: 0;
            margin: 0;
            font-size: 100%;
        }
        body {
            font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif
        }
        .blind {
            position: absolute;
            overflow: hidden;
            clip: rect(0 0 0 0);
            margin: -1px;
            width: 1px;
            height: 1px;
        }
        .wrap {
            position: relative;
            max-width: 640px;
            width: 100%;
            min-width: 320px;
            margin: 0 auto;
        }
        .img_box {
            width: 100%;
            font-size: 0;
        }
        .img_box img {
            width: 100%;
            font-size: 12px;
        }
        .db_form {
            width: 100%;
            padding: 10px;
        }
        .db_form .inp_area {
            margin: 0 auto;
            padding: 20px 0;
        }
        .db_form .inp_wrap { 
            display: table-row;
        }
        .db_form .inp_box {
            display: table-cell;
            width: 77.5%;
            color: #000;
            padding: 5px 10px 5px 0;
            vertical-align: middle;
        }
        .db_form .inp {
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            background-color: #fff;
            color: #555;
            border: 1px solid #ccc;
            font-size: 14px;
            line-height: 1.42857143;
        }
        .db_form .inp_age {
            width: 80px;
        }
        .db_form .inp_tel {
            width: 30%;
            margin-right: 1.2%;
        }
        .db_form .inp_tel:not(:first-child){
            margin-left: 0;
        }
        .db_form .inp_textarea {
            height: 7.14285715em;
        }
        .db_form .label {
            display: table-cell;
            width: 22.5%;
            padding: 0px 10px 0 0;
            text-align: right;
            vertical-align: middle;
            font-size: 14px;
            color: #000;
        }
        .db_form .btn_img {
            font-size: 0;
            border: none;
            background-color: transparent;
        }
        .db_form .btn_img img {
            width: 100%;
            font-size: 12px;
        }
        .btn_box {
            text-align: center;
        }
        .dbbot {
            width: 20%;
            box-sizing: border-box;
            padding-left: 5px;
            border: 1px solid #ccc;
            line-height: 30px;
            height: 30px;
        }
        @media screen and (min-width: 500px){
            .db_form .inp {
                font-size: 16px;
            }
        }

        .alert 
        {
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size:20px;
            font-weight: bold;
        }
    </style>
    <script src="https://www.leadtracker.live/static/js/fixel.js"></script>
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->userdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/new(1).jpg" alt="메가파워겔"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/top.gif" alt="메가파워겔"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/new(2).jpg" alt="비아X라의 70배 효과 이상"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/mid1.gif" alt="예시이미지"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/mid2.gif" alt="메가파워겔 효과"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/new(3).jpg" alt="메가파워겔 효과"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/new(4).jpg" alt="사용후기"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/test.jpg" alt="성기능 자가진단 테스트"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/4dd.jpg" alt="7일 무료체험 지금 바로 신청하세요"></div>

        <!-- form -->
        <div class="db_form" id="formBox">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
                <div class="inp_area">
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mlh_name">이름</label></dt>
                        <dd class="inp_box">
                            <input type="text" id="mlh_name" name="mlh_name" label="이름" class="inp input">
                        </dd>
                    </dl>
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mlh_age">나이</label></dt>
                        <dd class="inp_box">
                            <input type="tel" name="mlh_age" id="mlh_age" label="나이"  class="inp inp_age input" maxlength="2"> 세
                        </dd>
                    </dl>
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mobileno">연락처</label></dt>
                        <dd class="inp_box">
                            <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1" class="inp inp_tel input" maxlength="3" label="연락처">
                            <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="inp inp_tel input" maxlength="4" label="연락처">
                            <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="inp inp_tel input" maxlength="4" label="연락처">
                        </dd>
                    </dl>
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mlh_text">문의사항</label></dt>
                        <dd class="inp_box">
                            <textarea id="mlh_text" name="mlh_text" label="문의사항" class="inp inp_textarea input" row="5"></textarea>
                        </dd>
                    </dl>

                    <div class="item" style="color:red;font-family: bold;font-size:20px;text-align: center;">
                        
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
                <div class="btn_box">
                    <button type="submit" class="btn_img"><img src="<?php echo $ad_dir ?>/images/db_btn.jpg" alt="결과 & 가격알아보기"></button>
                </div>
                <div class="img_box"><img src="<?php echo $ad_dir ?>/images/arrow.gif" alt="무료 자가진단 결과 확인하기"></div>
            <?php echo form_close(); ?>
            <div style="padding:3% 0; background-color: #ededed">
				<div style="text-align: center;font-size:19px;"><input type="text" class="dbbot"> 님의 섭취기간은</div>
				<div style="text-align: center;margin-top:2%;font-size:19px;"><input type="text" class="dbbot"> 로 금액은 <input type="text" class="dbbot"> 입니다.</div>
			</div>
        </div>

        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/new(5).jpg" alt="메가파워겔 효능"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/new(6).jpg" alt="메가파워겔 사용후기"></div>

        <!-- form -->
        <div class="db_form">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite_', 'onSubmit' => 'return submitContents2(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">
                <div class="inp_area">
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mlh_name_">이름</label></dt>
                        <dd class="inp_box">
                            <input type="text" id="mlh_name_" name="mlh_name" label="이름" class="inp input_">
                        </dd>
                    </dl>
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mlh_age_">나이</label></dt>
                        <dd class="inp_box">
                            <input type="tel" name="mlh_age" id="mlh_age_" label="나이"  class="inp inp_age input_" maxlength="2"> 세
                        </dd>
                    </dl>
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mobileno">연락처</label></dt>
                        <dd class="inp_box">
                            <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1_" class="inp inp_tel input_" maxlength="3" label="연락처">
                            <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2_" class="inp inp_tel input_" maxlength="4" label="연락처">
                            <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3_" class="inp inp_tel input_" maxlength="4" label="연락처">
                        </dd>
                    </dl>
                    <dl class="inp_wrap">
                        <dt class="label"><label for="mlh_text">문의사항</label></dt>
                        <dd class="inp_box">
                            <textarea id="mlh_text_" name="mlh_text" label="문의사항" class="inp inp_textarea input_" row="5"></textarea>
                        </dd>
                    </dl>

                    <div class="item" style="color:red;font-family: bold;font-size:20px;text-align: center;">
                        
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
                <div class="btn_box">
                    <button type="submit" class="btn_img"><img src="<?php echo $ad_dir ?>/images/db_btn.jpg" alt="가격알아보기"></button>
                </div>
                <div class="img_box"><img src="<?php echo $ad_dir ?>/images/arrow.gif" alt="무료 자가진단 결과 확인하기"></div>
            <?php echo form_close(); ?>
            <div style="padding:3% 0; background-color: #ededed">
				<div style="text-align: center;font-size:19px;"><input type="text" class="dbbot"> 님의 섭취기간은</div>
				<div style="text-align: center;margin-top:2%;font-size:19px;"><input type="text" class="dbbot"> 로 금액은 <input type="text" class="dbbot"> 입니다.</div>
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
</body>
</html>

<script type="text/javascript">
//<![CDATA[
function submitContents(f) {
    var flag=false;
    var href;


    $('.input').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
     $(".loading").show();
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}


function submitContents2(f) {
    var flag=false;
    var href;


    $('.input_').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
        $(".loading").show();
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}

<?php if($this->session->flashdata('mlh_id')){?>
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $(".loading").hide();
<?php } ?>


//]]>
 </script>