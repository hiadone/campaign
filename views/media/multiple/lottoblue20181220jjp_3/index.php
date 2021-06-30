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
      *{
            margin: 0;
            padding: 0;
        }
        .lotto_main{
            max-width: 640px;
            width: 100%;
            margin: 0 auto;
        }
        .img{
            font-size: 0;
        }
        .img img{
            width: 100%;
        }
        .mid{
            padding: 12% 5%;
            background-color: #e4e4e4;
        }
        .mid ul{
            list-style: none;
        }
        .mid li{
            list-style: none;
            margin-bottom: 8%;
        }
        .mid .input_user{
            width: 100%;
            height: 12vw;
            max-height: 58px;
            box-sizing: border-box;
            padding: 0 3%;
            font-size: 16px;
            font-family: 'Malgun Gothic','Dotum',sans-serif;
            border: 1px inset #fff;
        }
        .mid button{
            display: block;
            max-width: 413px;
            font-size: 0;
            margin: 0 auto;
            border: none;
            background-color: transparent;
        }
        .mid button img{
            width: 100%;
        }
        @media (min-width: 430px){
            .mid .input_user{
                font-size: 18px;
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

<body class="header-fixed" style="background-color: #fff;">
    <div class="lotto_main">
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>

        <div class="img img_top">
                <img src="<?=$AD_DIR?>/images/lottoblue0128_top.jpg" alt="">
        </div>
        <div class="mid form">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">      
            
                    <ul>
                        <li><input type="text" class="input_user input"   id="mlh_name" name="mlh_name" label="이름"  placeholder="이름"></li>
                        <li><input type="tel" class="input_user input" placeholder="휴대폰번호" id="mlh_mobileno" name="mlh_mobileno" label="휴대폰번호"></li>
                        <li><input type="number" class="input_user input"  placeholder="나이(30~70세만 신청가능합니다.)" name="mlh_age" id="mlh_age" label="나이"></li>
                    </ul>
                    <button type="submit"><img src="<?=$AD_DIR?>/images/lottoblue0128_btn.png" alt="무료 당첨번호 받기"></button>
                <?php echo form_close(); ?>
            </div>
        <div class="img img_bottom">
                <img src="<?=$AD_DIR?>/images/lottoblue0128_bottom.jpg" alt="">
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