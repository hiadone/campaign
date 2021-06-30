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
<title>국내최초 신개념 탈모두피 전문관리</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="-1">


<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">

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
</style>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
$(function () {
	$('#scrollToBottom').bind("click", function () {
		$('html, body').animate({ scrollTop: $(document).height() }, 0);
		return false;
	});
});
</script>
</head>
<body>
<div>

	<div class="container">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<section><img src="<?=$AD_DIR?>/images/c01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c02.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/ani.gif"></section>
		<section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
		<section id="inDB">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">  
			<table>
				<colgroup>
					<col width="">
					<col width="">
				</colgroup>
				<tbody>
					<tr>
						<th>이름</th>
						<td><input type="text" class="form-class input" id="mlh_name" name="mlh_name" label="이름"></td>
					</tr>
					<tr>
						<th>나이</th>
						<td><input type="number" class="form-class input" name="mlh_age" id="mlh_age" label="나이" style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
					</tr>
					<tr>
						<th>휴대전화</th>
						<td><input type="tel" class="form-class input" name="mlh_mobileno" id="mlh_mobileno" label="휴대전화"></td>
					</tr>
					<tr>
						<th>문의사항</th>
						<td>
							<textarea class="form-class input" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center">
							<div class="checkbox">
								<input type="checkbox" name="" id="agree" checked> <label for="agree">개인정보 수집 및 이용동의</label>
							</div>
						</td>
					</tr>
					<tr>
					    <td colspan="2" class="a-center" style="color:red;font-family: bold;">
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
					     </td>
					</tr>
					<tr>
						<td colspan="2" class="t-center" style="padding:10px 0;">
							<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.png" style="max-width: 100%;"></a>
						</td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</section>
		<section><img src="<?=$AD_DIR?>/images/c04.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c05.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c06.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c07.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c08.jpg"></section>
		<section id="inDB2">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>"> 
			<table>
				<colgroup>
					<col width="">
					<col width="">
				</colgroup>
				<tbody>
					<tr>
						<th>이름</th>
						<td><input type="text" class="form-class input2" id="mlh_name" name="mlh_name" label="이름"></td>
					</tr>
					<tr>
						<th>나이</th>
						<td><input type="number" class="form-class input2" name="mlh_age" id="mlh_age" label="나이" style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
					</tr>
					<tr>
						<th>휴대전화</th>
						<td><input type="tel" class="form-class input2" name="mlh_mobileno" id="mlh_mobileno" label="휴대전화"></td>
					</tr>
					<tr>
						<th>문의사항</th>
						<td>
							<textarea class="form-class input2" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center">
							<div class="checkbox">
								<input type="checkbox" name="" id="agree2" checked> <label for="agree2">개인정보 수집 및 이용동의</label>
							</div>
						</td>
					</tr>
					<tr>
					    <td colspan="2" class="a-center" style="color:red;font-family: bold;">
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
					     </td>
					</tr>
					<tr>
						<td colspan="2" class="t-center" style="padding:10px 0;">
							<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.png" style="max-width: 100%;"></a>
						</td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</section>
		<section><img src="<?=$AD_DIR?>/images/info.png"></section>
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
    
     if($('input:checkbox[id="agree"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
    
     if($('input:checkbox[id="agree2"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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

<!-- AD-POP SCRIPT / DO NOT ALTER THIS SCRIPT. -->
<!-- COPYRIGHT (C) THE A MEDIA INC. ALL RIGHTS RESERVED. -->
<!-- <iframe src='http://script.theprimead.co.kr/winggoSetCookiePage.php?code=NDI4Nw%3D%3D&_NMNCODE_=' height='0' width='0'></iframe> -->
<!-- END OF AD-POP SCRIPT -->

</body>
</html>