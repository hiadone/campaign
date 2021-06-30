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
<meta name="format-detection" content="telephone=no">

<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">

<style>
.movie { 
	position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
    padding-bottom: 56.25%;
}
.movie > iframe { 
	position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
footer { 
	position: fixed;
	width:100%;
	bottom:0;
	left:0;
	text-align:center;
	z-index:99;
	cursor:pointer;
}
footer img { 
	max-width:100%;
	vertical-align:bottom;
}
@media (min-width:640px) { 
	#wrap { 
		margin-bottom:80px;
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
p{

	margin: 0;
};
</style>

<script type="text/javascript">
function fnMove(){
        var offset = $(".cont").offset();
        $('html, body').animate({scrollTop : offset.top}, 400);
    }
</script>
</head>
<body>

<footer onClick="fnMove();">
	<img src="<?=$AD_DIR?>/images/scroll_img.png?ver=1.0">
</footer>

<div id="wrap">


	<div class="container" style="width: 100%">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c01.jpg" class="img100" style="display:block;"></div>

		

		<div class="img-area"><img src="<?=$AD_DIR?>/images/c02.jpg" class="img100" style="display:block;"></div>

		<div class="a-center movie">
			<iframe width="100%" src="https://www.youtube.com/embed/zvbaIpLZC0I" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="img-area"><img src="<?=$AD_DIR?>/images/c03.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c04.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c05.jpg?ver=1.0" class="img100" style="display:block;"></div>

		<div class="img-area aaa"><img src="<?=$AD_DIR?>/images/c06.jpg" class="img100" style="display:block;"></div>

		<div class="img-area"><img src="<?=$AD_DIR?>/images/c07.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c08.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c09.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c10.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c11.jpg?ver=1.1" class="img100" style="display:block;"></div>
		
		       
        <div class="consult_wrap">
            <div class="cont">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">  							
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
                <table class="consult1 width90">
					<colgroup>
					<col width="28%">
					<col width="72%">
					</colgroup>
					<thead>
						<tr>
							<th colspan="2">
							<h3>※신청양식※</h3>
							<summary>개인정보를 입력해주시면 더욱 빠르고 정확한<br>상담이 가능합니다.</summary>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text"  class="width95 input" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text"  class="width50 input" name="mlh_age" id="mlh_age" label="나이">
								<span style="color:#666">세</span></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" id="mlh_mobileno1" name="mlh_mobileno1" class="width25 input" label="휴대전화">
								<span style="color:#666">-</span>
								<input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" class="width25 input" label="휴대전화">
								<span style="color:#666">-</span>
								<input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" class="width25 input" label="휴대전화"></td>
						</tr>
					<!---	<tr>
							<th>이메일</th>
							<td><input type="text" id="M_EMAIL" class="width95"></td>
						</tr> -->
						<tr>
							<th class="v-top">상담내용</th>
							<td><textarea  class="width95 input"  id="mlh_text" name="mlh_text" label="상담내용"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" class="a-center"><input type="checkbox" id="agree" checked> <label for="agree"><span style="color:#666">개인정보 수집 및 이용동의</span></label></td>
						</tr>
					</tbody>
				</table>
				</div>
				<p class="a-center pb50"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/db_btn.jpg" style="border: 0px;width:60%"></a></p>

                <?php echo form_close(); ?>
		</div>

		<!-- <div class="footer">
			<img src="<?=$AD_DIR?>/images/copy_tal.jpg">
		</div> -->


        <div style="height:50px;"></div>
	</div>
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
                $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                
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

</body>
</html>