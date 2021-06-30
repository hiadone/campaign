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
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
    <title>노스모</title>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Nanum Gothic','Dotum',sans-serif;
            outline: 0;
        }
        .wrap{
            width: 100%;
            max-width: 640px;
            margin: 0 auto;
            font-size: 0;
        }
        .wrap img{
            width: 100%;
        }
        .dbform{
            background-color: #000;
            font-size: 14px;
            padding: 0 5% 5% 5%;
        }
        .dbform .info{
            text-align: center;
            padding: 5px 5px 5%;
            font-size: 12px;
            line-height: 18px;
            color: #ff0000;
        }
        .dbform form{
            padding: 0 3% 3% 3%;
        }
        .dbform table{
            border-collapse: collapse;
        }
        .dbform th,
        .dbform td{
            padding: 5px;
            line-height: 18px;
            height: 20px;
            vertical-align: middle;
        }
        .dbform th{
            color: #ffefa6;
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }
        .dbform td{
            font-size: 12px;
            color: #000;
        }
        .dbform .input_box{
            font-size: 14px;
            box-sizing: border-box;
        }
        .dbform input[type='text'],
        .dbform input[type='number']{
            width: 80%;
            height: 36px;
        }
        .dbform input[type="tel"],
        .dbform select{
            height: 36px;
        }
        .dbform input[type="tel"]{
            width: 24%;
        }
        .dbform select{
            width: 27%;
        }
        .dbform textarea{
            width: 80%;
            height: 80px;
            border: 1px solid #ccc;
        }
        .dbform button{
            background-color: transparent;
            border: none;
        }
        .dbform .td_btn{
            padding: 10px 0;
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
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <img src="<?php echo $AD_DIR ?>/images/img_01.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_02.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_03.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_04.jpg" alt="노스모">
        <a href="#dbdb">
            <img src="<?php echo $AD_DIR ?>/images/img_05.jpg" alt="노스모">
        </a>
        <img src="<?php echo $AD_DIR ?>/images/img_06.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_07.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_08.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_09.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_10.jpg" alt="노스모">
        <img src="<?php echo $AD_DIR ?>/images/img_11.jpg" alt="노스모">
        <div id="dbdb" class="dbform">
            <div class="info">&#42; 해당 이벤트는 만 30세 이상에게만 자격이 주어집니다.</div>
            
                <?php

                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open(current_full_url(), $attributes);
                ?>

                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">              
                <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">

                <table>
                    <colgroup>
                        <col width="25%">
                        <col width="75%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row" class="title"><label for="username">성&nbsp;&nbsp;&nbsp;&nbsp;명</label></th>
                            <td><input type="text"  class="input_box input" id="mlh_name" name="mlh_name" label="이름"></td>
                        </tr>
                        <tr>
                            <th><label for="age" class="title">나&nbsp;&nbsp;&nbsp;&nbsp;이</label></th>
                            <td><input type="number"  class="input_box input" name="mlh_age" id="mlh_age" label="나이"> 세</td>
                        </tr>


                        <tr>
                            <th><label for="cellnum" class="gap">연락처</label></th>
                            <td>
                                <input type="tel" id="mlh_mobileno1" name="mlh_mobileno1" class="input_box input" label="휴대전화" maxlength="4" size="4" title="핸드폰" > -
                                <input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" maxlength="4" size="4" title="휴대전화" class="input_box input" label="휴대전화"> -
                                <input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" maxlength="4" size="4" title="휴대전화" class="input_box input" label="휴대전화"`></td>
                        </tr>
                        <tr>
                            <th>상담내용</th>
                            <td>
                                <textarea class="input"  id="mlh_text" name="mlh_text" label="상담내용"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="td_btn">                                
                                <button type="submit"><img src="<?php echo $AD_DIR ?>/images/btn.jpg" alt="노스모 가격 알아보러 가기"></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            
            <div style="height:40px; background: #000"></div>
        </div>
        <?php echo form_close(); ?>
        <div style="margin-bottom: 27%;"></div>
    </div>


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
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
                 url : cb_url + '/media/tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
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
<?php } ?>
//]]>
 </script>
</body>
</html>