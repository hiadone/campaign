<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
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
<!DOCTYPE HTML>
<html lang="ko">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="robots" content="index,follow">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>로또블루</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://www.leadtracker.live/static/js/fixel.js"></script>
  <link href='//fonts.googleapis.com/earlyaccess/notosanskr.css' rel='stylesheet' type='text/css'/>
  <link rel="stylesheet" href="<?=$ad_dir?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=$ad_dir?>/css/style.css"/>
  
    
      <style>

        @font-face {
            font-family: 'BMDOHYEON';
            src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_one@1.0/BMDOHYEON.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        *{
            padding: 0;
            margin: 0;
        }
        ul,
        li{
            list-style: none;
        }
        .wrap{
            max-width: 640px;
            width: 100%;
            min-height: 100vh;
            margin: 0 auto;
            background-color: #e4e4e4;
        }
        .img_box{
            font-size: 0;
        }
        .img_box img{
            width: 100%;
        }
        .dbform_box {
            padding: 3% 6.25%;
        }
        .user_info li{
            font-size: 0;
            height: 60px;
            margin-bottom: 4%;
        }
        .user_info input{
            font-size: 24px;
            width: 100%;
            height: 100%;
            padding: 0 0 0 8px;
            box-sizing: border-box;
            font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif;
        }
        .user_info .user_name,
        .user_info .user_age{
            width: 46%;
        }
        .user_info .user_name {
            float: left;
        }
        .user_info .user_age {
            float: right;
        }
        .user_info .user_phone {
            clear: both;
        }
        .dbform_box .btn_submit{
            display: block;
            max-width: 413px;
            width: 90%;
            margin: 0 auto 5%;
            padding: 14px 0;
            font-size: 0;
            background-color: #538cd3;
            border: none;
            border-radius: 50px;
            text-align: center;
        }
        .dbform_box .btn_submit img{
            max-width: 75%;
        }
        .dbform_box .check_list {
            max-width: 320px;
            margin: 0 auto;
        }
        .check_list li {
            line-height: 1.6;
        }
        .check_list input[type="checkbox"] {
            vertical-align: middle;
        }
        .check_list label {
            font-size: 16px;
            font-family: 'BMDOHYEON',sans-serif;
            color: #737372;
        }
        .blind{
            width:1px;
            height:1px;
            position:absolute;
            overflow:hidden;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
            clip: rect(1px, 1px, 1px, 1px);
        }
        @media screen and (max-width: 430px) and (min-width: 5px){
            .user_info li{
                height: 48px;
            }
            .user_info input{
                font-size: 16px;
            }
            .dbform_box .check_list {
                max-width: 280px;
                margin: 0 auto;
            }
            .check_list label {
                font-size: 14px;
            }
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
</style>
</head>

<body>
    
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
            <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?php echo $ad_dir?>/images/top_01.jpg" alt="로또 1등 당첨 이제는 꿈꿀 수 있다. 번호대공개"></div>
        <div class="dbform_box">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">      
                <ul class="user_info">
                    <li class="user_name"><label for="" class="blind">이름</label><input type="text" class="input" id="mlh_name" name="mlh_name" label="이름" placeholder="이름"></li>
                    <li class="user_age"><label for="" class="blind">나이</label><input type="text" class="input" name="mlh_age" id="mlh_age" placeholder="나이" label="나이"></li>
                    <li class="user_phone"><label for="" class="blind">전화번호</label><input type="tel" class="input" id="mlh_mobileno" name="mlh_mobileno" label="전화번호" placeholder="전화번호"></li>
                </ul>
                <button type="submit" class="btn_submit"><img src="<?php echo $ad_dir?>/images/btn.png" alt="무료 당첨번호 받기"></button>
                <ul class="check_list">
                    <li><input type="checkbox" name="" id="agree01"><label for="agree01"> 개인정보 수집 및 활용동의 &#40;필수&#41;</label></li>
                    <li><input type="checkbox" name="" id="agree02"><label for="agree02"> 개인정보 제 3자 제공동의 &#40;필수&#41;</label></li>
                    <li><input type="checkbox" name="" id="agree03"><label for="agree03"> 광고성 문자메세지/알림톡 수신 동의 &#40;필수&#41;</label></li>
                </ul>
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
<!--/wrapper-->

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
    
     if($('input:checkbox[id="agree01"]').is(":checked")){
        if($('input:checkbox[id="agree02"]').is(":checked")){
            if($('input:checkbox[id="agree03"]').is(":checked")){
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
            } else alert('광고성 문자메세지/알림톡 수신 동의를 체크 해주시기 바랍니다.');
        } else alert('개인정보 제 3자 제공동의를 체크 해주시기 바랍니다.');
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
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
    
     if($('input:checkbox[id="agree"]').is(":checked")){
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

function cpaProc(mlh_id) {
    var href;

    href = "http://lottoblue.co.kr/json/module_join_nha.php";
     $.ajax({
        type: "POST",
        url: href,
        data: {
            "mode": "ok",
            "cmpny": "hiadone",
            "PHONE": "<?php echo $this->session->flashdata('mlh_mobileno')  ?>",
            "NAME": "<?php echo $this->session->flashdata('mlh_name') ?>",
            "AGE": "<?php echo $this->session->flashdata('mlh_age') ?>"
        },
        dataType : 'json',
        complete: function (response) {

            if (response.responseJSON.data.code != '000001') {
                _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>');
            }

            $.ajax({
                 async : false,
                 url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.data.code+'/'+response.responseJSON.data.result_msg,
                 type : 'get',
                 dataType : 'json',
                 success : function(data) {
                      
                 }
             });
       
            
        }
        

    });

    
}

<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>);
    
<?php } ?>

//]]>
 </script>
