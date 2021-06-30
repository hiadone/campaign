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
<html>
<head>
<title>피부속부터 변화시키는 놀라움 cr-5</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">


<!--스크롤부드럽게 -->
<script type="text/javascript" src="<?=$AD_DIR?>/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript">
var scrollTab = function (sObj) {
  $.scrollTo($("#" + sObj), 0);
}
</script>
<!--스크롤부드럽게 -->


</head>
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
<body>
<div id="wrap">

<div class="db_click"><a href="#consult"><img src="<?=$AD_DIR?>/images/DB_click.png" class="img100"></a></div>

  <div class="container" style="width: 100%">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/header.jpg" class="img100"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/img001.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img002.gif?ver=0.1" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img003.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img004.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img005.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img006.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img007.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img008.jpg" class="img100"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/img009.gif" class="img100"></div>
		
        
		<div id="consult" class="consult_wrap">
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
					<tbody class="con_m">
						<tr>
							<th>이름</th>
							<td><input type="text"  class="width95 input" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>성별</th>
							<td><input type="radio" class="input" id="sex_fm"  name="mlh_gender" value="1" checked>
							    <label for="sex_fm" class="mr20">여성</label>
							    <input type="radio" class="input" id="sex_m"  name="mlh_gender" value="2">
							    <label for="sex_m">남성</label></td>

							
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text"  class="width50 input" name="mlh_age" id="mlh_age" label="나이">
								세</td>
						</tr>
						<tr>
							<th>휴대전화</th>
							<td><input type="tel" id="mlh_mobileno1" name="mlh_mobileno1" class="width25 input" label="휴대전화">
								-
								<input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" class="width25 input" label="휴대전화">
								-
								<input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" class="width25 input" label="휴대전화"></td>
						</tr>
                        <!--
						<tr>
							<th>이메일</th>
							<td><input type="text" id="M_EMAIL" class="width95"></td>
						</tr>
                        -->
						<tr>
							<th class="v-top">문의사항</th>
							<td><textarea class="width95 input" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" class="a-center"><input type="checkbox" id="agree" checked="checked"> <label for="agree">개인정보 수집 및 이용동의</label></td>
						</tr>
					</tbody>
				</table>
				<p class="cr_btn a-center mb20"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.jpg" style="max-width: 100%;"></a></p>
                <?php echo form_close(); ?>
			</div>
		</div>
		   	
		<!--전화하기/상담하기
		<div class="img-area"><a href="tel:02-3672-0108"><img src="<?=$AD_DIR?>/images/phone001.gif" class="img100" ></a></div>
		<div class="img-area"><a href="#consult"><img src="<?=$AD_DIR?>/images/phone002.gif" name="consult" class="img100" id="consult" ></a></div>-->
		
        
       
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img010.jpg" class="img100"></div>

		
	</div>
    

    <div class="hg70"></div> 
</div>


<map name="Map" id="Map">
  <area shape="rect" coords="23,282,214,483" href="https://www.youtube.com/watch?v=VGZ2B8EhJCg&feature=youtu.be" target="_blank" alt="나비편" />
  <area shape="rect" coords="212,280,412,482" href="https://www.youtube.com/watch?v=QBBK0rqmAow&feature=youtu.be" target="_blank" alt="레드벨벳편"/>
  <area shape="rect" coords="422,281,612,481" href="https://www.youtube.com/watch?v=x3jrkGOzJqw&feature=youtu.be" target="_blank" alt="거미편" />
  <area shape="rect" coords="121,494,311,695" href="https://www.youtube.com/watch?v=gYPV7lXZ5eI&feature=youtu.be" target="_blank" alt="전효성편" />
  <area shape="rect" coords="320,493,512,696" href="https://www.youtube.com/watch?v=oZ_149BM4aI&feature=youtu.be" target="_blank" alt="은지원편" />
</map>



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

</body>
</html>