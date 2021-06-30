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
  <meta name="Description" content="">
  <meta name="robots" content="index,follow">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>스팀닥터</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
</style>
  <script type="text/javascript">
	$(function () {
		$('#scrollToBottom').bind("click", function () {
			$('html, body').animate({ scrollTop: $(document).height() }, 500);
			return false;
		});
	});
	</script>
</head>

<body>
	<div class="container">
    <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<section style="margin-bottom:10px;"><img src="<?=$AD_DIR?>/images/top.png"></section>
		<section><img src="<?=$AD_DIR?>/images/c01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c02.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
		<section><a href="tel:1644-0591"><img src="<?=$AD_DIR?>/images/tel_btn.jpg"></a></section>
		<section class="inDB">
      <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
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
						<td><input type="number" class="form-class   input" name="mlh_age" id="mlh_age" label="나이"  style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
					</tr>
					<tr>
						<th>연락처</th>
						<td><input type="tel" class="form-class input" id="mlh_mobileno" name="mlh_mobileno" label="연락처"></td>
					</tr>
					<tr>
						<th>문의사항</th>
						<td>
							<textarea class="form-class input" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center">
							<div class="">
								<input type="checkbox" name="" id="agree" checked> <label for="agree">개인정보 수집 및 이용동의</label>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="submit"  class="btn" style="max-width: 100%;" value="무료상담 신청"></a>
						</td>
					</tr>
				</tbody>
			</table>
      <?php echo form_close(); ?>
		</section>

		<footer>
			<p>(주)씨피케이코퍼레이션 대표자:최경식</p>
			<p>서울특별시 구로구 디지털로 272. 1304호(한신아이타워)</p>
			<p>팩스:0303-3444-4795 / 사업자등록번호 : 119-86-88226</p>
			<p>Copyrightⓒ2016 STEAM DOCTOR Co.Ltd All right Reserved.</p>
		</footer>

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



//]]>
 </script>
</body>
</html>
