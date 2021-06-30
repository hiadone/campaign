<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $AD_DIR  = element('view_skin_url', $layout);
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
  <link rel="stylesheet" href="<?=$AD_DIR?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=$AD_DIR?>/css/style.css"/>
  
    
      <style>
.alert 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size:18px;
    font-weight: bold;
}

 .lotto_join{
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
        }
        .lotto_join .lotto_join_top{
            font-size: 0;
        }
        .lotto_join .lotto_join_top img{
            width: 100%;
            font-size: 10px;
        }
        .lotto_join .lotto_join_bottom form{
            padding: 0;
            margin: 0;
            font-size: 0;
        }
        .lotto_join .lotto_join_bottom ul{
            list-style: none;
            margin: 0;
            background-color: #538bd5;
            padding: 9% 6%;
        }
        .lotto_join .lotto_join_bottom li{
            list-style: none;
            padding: 0;
            margin: 0 0 8%;
        }
        .lotto_join .lotto_join_bottom li:last-child{
            margin-bottom: 0;
        }
        .lotto_join .lotto_join_bottom input[type="text"],
        .lotto_join .lotto_join_bottom input[type="tel"],
        .lotto_join .lotto_join_bottom input[type="number"]{
            width: 100%;
            height: 60px;
            padding: 0 3%;
            box-sizing: border-box;
            font-size: 22px;
            border:1px solid #bbb;
        }
        .lotto_join .lotto_join_bottom button{
            padding: 0;
            margin: 0;
            font-size: 0;
            border: none;
            background-color: transparent;
        }
        .lotto_join .lotto_join_bottom button img{
            font-size: 10px;
            width: 100%;
        }
        .big_screen{
            display: block;
        }
        .small_screen{
            display: none;
        }
        @media screen and (max-width:580px) and (min-width:431px){
            .lotto_join .lotto_join_bottom input[type="text"],
            .lotto_join .lotto_join_bottom input[type="tel"],
            .lotto_join .lotto_join_bottom input[type="number"]{
                height: 46px;
                font-size: 16px;
            }
        }
        @media screen and (max-width:430px) and (min-width:5px){
            .lotto_join .lotto_join_bottom input[type="text"],
            .lotto_join .lotto_join_bottom input[type="tel"],
            .lotto_join .lotto_join_bottom input[type="number"]{
                height: 40px;
                font-size: 16px;
            }
            .big_screen{
                display: none;
            }
            .small_screen{
                display: block;
            }
        }
</style>
</head>

<body class="header-fixed" style="background-color: #fff;">
<div class="wrapper" style="">
    <div class="container content" style="padding-top:0px; background-color: #fff;max-width:700px;">
        <div class="container" style="padding:0px;max-width:700px;">
            <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
            <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
            <div class="row">
                <!-- <div class="col-md-12 margin-bottom-30 text-center hidden-xs">
                    <h1 class="title-v2 text-bold" style="line-height: 1.2; color: #1c75ee;">Upgrade Your Life
                        <br>
                        <br>
                        <span class="color-darker text-bold h2">로또 1등, 더 이상 꿈이 아닌 현실로 다가옵니다.
                                    <br>
                                    <span class="color-red text-bold h1" style="text-decoration: underline;">이번주 예상번호 받고 1등 당첨 주인공이 되세요!</span>
                    </h1>
                </div>
                <div class="col-md-12 margin-bottom-30 text-center visible-xs">
                    <h3 class="title-v2 text-bold" style="line-height: 1.5; color: #1c75ee;">Upgrade Your Life
                        <br>
                        <br>
                        <span class="color-darker text-bold h3">로또 1등, 더 이상 꿈이 아닌 현실로 다가옵니다.
                                    <br>
                                    <br>
                                    <span class="color-red text-bold h3" style="text-decoration: underline;">이번주 예상번호 받고
                                        <br>1등 당첨 주인공이 되세요!</span>
                    </h3>
                </div> -->

            </div>
            <div class="row">
                <!-- <div class="col-md-12 margin-bottom-30 text-center hidden-xs">
                    <h1 class="color-red text-bold">:::::: 무료로 받아보시고 결정해도 늦지 않습니다 ::::::</h1>
                </div>
                <div class="col-md-12 margin-bottom-30 text-center visible-xs">
                    <h3 class="color-red text-bold">무료로 받아보시고<br>결정해도 늦지 않습니다</h>
                    </h3>
                </div> -->
                <section><img src="<?=$AD_DIR?>/images/a1.jpg"></section>
                <section><img src="<?=$AD_DIR?>/images/a3.gif"></section>
                <!-- <section><img src="<?=$AD_DIR?>/images/a4.jpg"></section> -->
                <div class="col-md-12" id="join" style="padding:0px;">
                    <?php
                    $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                    echo form_open(current_full_url(), $attributes);
                    ?>
                    <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                    <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                    <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                    <input type="hidden" name="jid" value="<?php echo $jid?>">                  
                    <div class="lotto_join">
                        <div class="lotto_join_top"><img src="<?=$AD_DIR?>/images/lot190110.jpg" alt="통계분석 기반의 무료번호로 1등 당첨의 주인공이 되세요"></div>
                        <div class="lotto_join_bottom">
                            <form action="">
                                <ul class="">
                                    <li class=""><input class="form-control input" type="text" placeholder="이름" id="mlh_name" name="mlh_name" label="이름"></li>
                                    <li class=""><input class="form-control input" type="tel" placeholder="휴대폰 번호" id="mlh_mobileno" name="mlh_mobileno" label="휴대폰번호"></li>
                                    <li class=""><input class="form-control input" type="number" placeholder="나이 (30~70세만 신청가능합니다.)" name="mlh_age" id="mlh_age" label="나이"></li>
                                </ul>
                                <button type="submit" style="display: block">
                                    <img src="<?=$AD_DIR?>/images/lotto_shorcut.jpg" alt="무료당첨번호 받기" class="big_screen">
                                    <img src="<?=$AD_DIR?>/images/lotto_shorcut_small.jpg" alt="무료당첨번호 받기" class="small_screen">
                                </button>
                                
                            </form>
                        </div>
                        
                    </div>

                       
                    <?php echo form_close(); ?>
                </div>
                <section><img src="<?=$AD_DIR?>/images/a5.jpg"></section>
            </div>
        </div>
    </div>


</div>
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
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
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