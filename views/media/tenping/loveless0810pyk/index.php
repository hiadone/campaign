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
<title>Endless young breass</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<!--
<script type='text/javascript' src='http://www.mobipopcon.com/js/jquery.cookie.js'></script>
<script type='text/javascript' src='http://www.mobipopcon.com/js/shortcut.js'></script>
-->

<!--스크롤부드럽게 -->
<script type="text/javascript" src="<?=$AD_DIR?>/js/jquery.scrollTo-min.js"></script>
<script type="text/javascript">
var scrollTab = function (sObj) {
  // $.scrollTo($("#" + sObj), 1000);

  var offset = $("#" + sObj).offset();
  $('html, body').animate({scrollTop : offset.top}, 300);
}
</script>
<!--스크롤부드럽게 -->

<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">
<style>
	.container { margin-bottom:30px; }
	@media (min-width:375px) { 
		.container { margin-bottom:40px; }
	}
	@media (min-width:414px) { 
		.container { margin-bottom:50px; }
	}
	@media (min-width:768px) { 
		.container { margin-bottom:100px; }
	}
	  .alert {
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


<div id="wrap">
	
	<div class="db_click"><a href="javascript:scrollTab('consult');"><img src="<?=$AD_DIR?>/images/scroll.png" class="img100"></a></div>

	<div class="container" style="width:100%;">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news001.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news002.gif" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news003.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news004.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news005.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news006.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news007.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news008.jpg" class="img100" style="display:block;"></div>

       
        
        
        

        <div id="consult" class="consult_wrap">
        	<div class="img-area"><img src="<?=$AD_DIR?>/images/db_top.jpg" class="img100" style="display:block;"></div>
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
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text"  class="width95 input" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text"  class="width50 input" name="mlh_age" id="mlh_age" label="나이">
								<span style="color:#333">세</span></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" class="width25 input" name="mlh_mobileno1" id="mlh_mobileno1" label="휴대전화">
								<span style="color:#333">-</span>
								<input type="tel" class="width25 input" name="mlh_mobileno2" id="mlh_mobileno2" label="휴대전화">
								<span style="color:#333">-</span>
								<input type="tel"  class="width25 input" name="mlh_mobileno3" id="mlh_mobileno3" label="휴대전화"></td>
						</tr>
					<!---	<tr>
							<th>이메일</th>
							<td><input type="text" id="M_EMAIL" class="width95"></td>
						</tr> -->
						<tr>
							<th class="v-top">문의사항</th>
							<td><textarea  class="width95 input" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" class="a-center"><input type="checkbox" id="agree" checked> <label for="agree"><span style="color:#333">개인정보 수집 및 이용동의</span></label></td>
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
					</tbody>
				</table>
				</div>
				


                <p class="a-center pb50"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/db_btn.jpg" style="max-width: 70%;" class="img60 mt20"></a></p>
		</div>
		<?php echo form_close(); ?>

		<!--<div class="blank100"></div>-->




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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.')
     


    
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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.')
     


    
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
