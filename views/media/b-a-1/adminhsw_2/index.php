
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>iNGR</title>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body,
        html{
            width: 100%;
            max-width: 730px; 
            margin: 0 auto;
        }
        .hidden{
            width:1px;
            height:1px;
            position:absolute;
            overflow:hidden;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
            clip: rect(1px, 1px, 1px, 1px);
        }
        .img_box{
            font-size: 0;
        }
        .img_box img{
            width: 100%;
        }
        [class*="form_db"] button[type="submit"] {
            display: block;
            padding: 0;
            margin: 0 auto;
            background-color: transparent;
            border: none;
            font-size: 0;
        }
        .form_db01 {
            padding-bottom: 5%;
            background-color: #fe6e6d;
            font-family: 'Nanum Gothic', sans-serif;
        }
        .form_db01 .inp_box {
            width: 95%;
            margin: 0 auto 5%;
            padding: 4% 2%;
            box-sizing: border-box;
            background-color: #fff;
        }
        .form_db01 .inp_list {
            overflow: hidden;
        }
        .form_db01 .lab,
        .form_db01 .inp {
            height: 40px;
            margin-bottom: 5%;
        }
        .form_db01 .lab {
            width: 20%;
            font-size: 20px;
            line-height: 40px;
            float: left;
        }
        .form_db01 .inp {
            width: 80%;
            float: right;
        }
        .form_db01 .inp_txt{
            height: 15vw;
            min-height: 60px;
            max-height: 80px;
            margin-bottom: 0;
        }
        .form_db01 .inp input,
        .form_db01 .inp textarea{
            box-sizing: border-box;
            font-size: 16px;
            border: 1px solid #5b5b5b;
        }
        .form_db01 .inp_name input{
            width: 100%;
            height: 100%;
        }
        .form_db01 .inp_age input {
            width: 56%;
            height: 100%;
        }
        .form_db01 .inp_tel input{
            width: calc(33% - 10px);
            height: 100%;
        }
        .form_db01 .inp_txt textarea{
            width: 100%;
            height: 100%;
        }
        .form_db01 button[type="submit"] {
            width: 90%;
            box-sizing: border-box;
            padding: 2% 0;
            background-color: #fcff00;
            border-radius: 80px;
        }
        .form_db01 button[type="submit"] img{
            max-width: 75%;
        }
        .form_db02 {
            font-family: 'Nanum Gothic', sans-serif;
        }
        .form_db02 .inp_box{
            width: 95%;
            padding: 3% 8%;
            box-sizing: border-box;
            margin: 0 auto 6%;
            border: 1px solid #000;
            background: #fff url(<?php echo $ad_dir ?>/images/back.png) no-repeat center top;
            background-size: cover;
        }
        .form_db02 .form_tit,
        .form_db02 .form_txt {
            text-align: center;
            font-weight: normal;
        }
        .form_db02 .form_tit{
            font-size: 20px;
            margin-bottom: 5%;
        }
        .form_db02 .form_txt{
            font-size: 15px;
            margin-bottom: 5%;
        }
        .form_db02 .inp_list {
            overflow: hidden;
        }
        .form_db02 .lab,
        .form_db02 .inp{
            height: 50px;
            margin-bottom: 3%;
        }
        .form_db02 .lab {
            width: 20%;
            float: left;
            font-size: 22px;
            line-height: 50px;
        }
        .form_db02 .inp{
            width: 80%;
            float: right;
        }
        .form_db02 .inp input,
        .form_db02 .inp textarea {
            font-size: 16px;
            border: 1px solid #000; 
            box-shadow: inset 3px 3px 5px rgba(0,0,0,0.1);
            box-sizing: border-box;
            padding: 5px;
        }
        .form_db02 .inp input{
            height: 100%;
            box-sizing: border-box;
        }
        .form_db02 .inp_name input ,
        .form_db02 .inp_age input {
            width: 56%;
        }
        .form_db02 .inp_tel input {
            width: calc(33% - 10px);
        }
        .form_db02 .inp_txt {
            height: 20vw;
            min-height: 100px;
            max-height: 147px;
        }
        .form_db02 .inp_txt textarea {
            width: 100%;
            height: 100%;
        }
        .form_db02 button[type="submit"]{
            max-width: 86%;
            margin-bottom: 6%;
        }
        .form_db02 button[type="submit"] img{
            width: 100%;
        }
        /* media */
        @media screen and (max-width: 600px) and (min-width: 431px){
            .form_db01 .lab {
                font-size: 18px;
            }
            /* */
            .form_db02 .inp_box{
                padding: 3% 6%;
            }
            .form_db02 .form_tit{
                font-size: 18px;
            }
            .form_db02 .form_txt{
                font-size: 13px;
            }
            .form_db02 .lab,
            .form_db02 .inp{
                height: 40px;
                margin-bottom: 4%;
            }
            .form_db02 .lab {
                font-size: 18px;
                line-height: 40px;
            }
            .form_db02 .inp_txt {
                height: 20vw;
                min-height: 100px;
                max-height: 147px;
            }
        /* == */
        }
        @media screen and (max-width: 430px) and (min-width: 5px){
            .form_db01 .lab {
                width: 25%;
                font-size: 16px;
            }
            .form_db01 .inp {
                width: 75%;
            }
            /* */
            .form_db02 .inp_box{
                padding: 3%;
            }
            .form_db02 .form_tit{
                font-size: 18px;
            }
            .form_db02 .form_txt{
                font-size: 12px;
            }
            .form_db02 .lab,
            .form_db02 .inp{
                height: 40px;
                margin-bottom: 4%;
            }
            .form_db02 .lab {
                width: 25%;
                font-size: 16px;
                line-height: 40px;
            }
            .form_db02 .inp{
                width: 75%;
            }
            .form_db02 .inp_txt {
                height: 20vw;
                min-height: 100px;
                max-height: 147px;
            }
            .form_db02 .inp_name input ,
            .form_db02 .inp_age input {
                width: 70%;
            }
            .alert 
            {
                padding: 20px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
                font-size:18px;
                font-weight: bold;
            }

           
        /* == */    
        }

        .autowrap { margin:0 auto 15px; }
        .autosize { position:relative; height: 0; padding-bottom: 56.25%; overflow: hidden; margin:0; }
        .autosize iframe, .autosize object, .autosize embed { position: absolute; top: 0; left: 0; width: 100%; height:100%; }
    </style>
</head>
<body>
    <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
    <div class="img_box">
        <img src="<?php echo $ad_dir ?>/images/tal_01.png" alt="향토유전자원연구소 피재호박사 탈모 연구결실">
        <img src="<?php echo $ad_dir ?>/images/tal_02.png" alt="탈모원인호르몬 억제, 4주내 변화 확인">
        <img src="<?php echo $ad_dir ?>/images/tal_03.png" alt="4배 빠르게 모발 모근 생성 유도">
    </div>
    <!-- 동영상 -->
    
    <div class="img_box autosize" >
        <iframe style=""
         src="https://www.youtube.com/embed/zvbaIpLZC0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <!-- 동영상 -->
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_05.png" alt="파재호교수 기사"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_06.png" alt="탈젠 임상데이터 탈젠사용 후 탈모 억제 작용으로 모발성장 4배이상증가"></div>
    <div class="img_box">
        <img src="<?php echo $ad_dir ?>/images/tal_07.png" alt="탈젠 고객감사 사은품 증정이벤트">
        <p class="hidden">
            지금구매하시는 모든분께 한달동안 사용해보고 효과 없다면 100% 환불보장
            탈젠 구매하시면 투피전동 마사지기 선착순 100명 무료증정
            본 이벤트는 조기마감 될 수 있습니다. 1인 1회 신청가능하며 중복신청 불가
        </p>
    </div>
    <div class="form_db01">
        <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">    
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <div class="inp_box">
                <dl class="inp_list">
                    <dt class="lab"><label for="">이름</label></dt>
                    <dd class="inp inp_name">
                        <input type="text" class="input" id="mlh_name" name="mlh_name" label="이름">
                    </dd>
                    <dt class="lab"><label for="">나이</label></dt>
                    <dd class="inp inp_age">
                        <input type="number" class=" input" name="mlh_age" id="mlh_age" label="나이" >
                    </dd>
                    <dt class="lab"><label for="">연락처</label></dt>
                    <dd class="inp inp_tel">
                        <input type="tel" class="input" id="mlh_mobileno1" name="mlh_mobileno1" label="연락처" maxlength="3"> -
                        <input type="tel" class="input" id="mlh_mobileno2" name="mlh_mobileno2" label="연락처" maxlength="4"> -
                        <input type="tel" class="input" id="mlh_mobileno3" name="mlh_mobileno3" label="연락처" maxlength="4">
                    </dd>
                    <dt class="lab"><label for="">상담내용</label></dt>
                    <dd class="inp inp_txt">
                        <textarea class="input" rows="4" id="mlh_text" name="mlh_text" label="상담내용"></textarea>
                    </dd>
                </dl>
                <div class="" style="color:red;font-family: bold;font-size:20px;text-align:center;">
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


            
            
            <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn_yellow.png" alt="제품상담신청하기"></button>
        <?php echo form_close(); ?>
    </div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_09.png" alt="임상 및 제품효능 테스트 결과"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_10.png" alt="성분 99.9% 흡수력, 탈모 잡는다"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_11.png" alt="블로그 후기"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_12.png" alt="한달사용후 제품 불만족시 100% 환불보장 구매고객 선착순 100명 두피전동마사지기 무료증정"></div>
    <div class="form_db02">
        <h2 class="tit img_box">
            <img src="<?php echo $ad_dir ?>/images/form_tit.png" alt="1대1 전문 상담원을 통해 탈모고민 무료상담해 드립니다">
        </h2>
        <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">  
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <div class="inp_box">
                <h3 class="form_tit">※ 신청양식 ※</h3>
                <p class="form_txt">개인정보를 입력해주시면 더욱 빠르고 정확한 상담이 가능합니다.</p>
                <dl class="inp_list">
                    <dt class="lab"><label for="">이름</label></dt>
                    <dd class="inp inp_name">
                        <input type="text" class="input2" id="mlh_name" name="mlh_name" label="이름">
                    </dd>
                    <dt class="lab"><label for="">나이</label></dt>
                    <dd class="inp inp_age">
                        <input type="number" class=" input2" name="mlh_age" id="mlh_age" label="나이" >
                    </dd>
                    <dt class="lab"><label for="">연락처</label></dt>
                    <dd class="inp inp_tel">
                        <input type="tel" class="input2" id="mlh_mobileno_1" name="mlh_mobileno1" label="연락처" maxlength="3"> -
                        <input type="tel" class="input2" id="mlh_mobileno_2" name="mlh_mobileno2" label="연락처" maxlength="4"> -
                        <input type="tel" class="input2" id="mlh_mobileno_3" name="mlh_mobileno3" label="연락처" maxlength="4">
                    </dd>
                    <dt class="lab"><label for="">상담내용</label></dt>
                    <dd class="inp inp_txt">
                        <textarea class="input2" rows="4" id="mlh_text" name="mlh_text" label="상담내용"></textarea>
                    </dd>
                </dl>
                   <div class="" style="color:red;font-family: bold;font-size:20px;text-align:center;">
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
            
            <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn_red.png" alt="제품상담 신청하기"></button>
        <?php echo form_close(); ?>
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
        // href = cb_url + '/postact/media_click/' + $('#post_id').val() ;
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


    $('.input2').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree2"]').is(":checked")){
        // href = cb_url + '/postact/media_click/' + $('#post_id').val() ;
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}

function cpaProc(mlh_id,post_md) {
    var href;

    // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
     
    href = cb_url + '/postact/tenping_query_curl/<?php echo $jid?>/<?php echo $uid?>/<?php echo $at?>/'+post_md+mlh_id;

    $.ajax({
        async : false,
        url : href,
        type : 'get',
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
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
    $('.loading').hide();
<?php } ?>

//]]>
 </script>