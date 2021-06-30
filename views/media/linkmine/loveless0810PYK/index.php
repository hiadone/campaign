<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
	$AD_DIR  = element('view_skin_url', $layout);
    $adf_key='';
    if(!empty($_GET['adf_key'])) $adf_key=$_GET['adf_key'];

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
  $.scrollTo($("#" + sObj), 1000);
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
	
	<div class="db_click"><a href="#consult"><img src="<?=$AD_DIR?>/images/scroll.png" class="img100"></a></div>

	<div class="container" style="width: 100%">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
		<?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close alert-dismissible alert-info">', '</div>'); ?>
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
            	<input type="hidden" name="adf_key" value="<?php echo $adf_key?>">
            	<input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
                <table class="consult1 width90">
					<colgroup>
					<col width="28%">
					<col width="72%">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text" id="mlh_name" name="mlh_name" class="width50 input" label="이름" ></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text" id="mlh_age" name="mlh_age" class="width25 input" label="나이">
								<span style="color:#333">세</span></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" id="mlh_mobileno1" name="mlh_mobileno1" class="width25 input" label="휴대전화">
								<span style="color:#333">-</span>
								<input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" class="width25 input" label="휴대전화">
								<span style="color:#333">-</span>
								<input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" class="width25 input" label="휴대전화">
						</tr>
						<tr>
							<th class="v-top">문의사항</th>
							<td><textarea id="mlh_text" name="mlh_text" class="width95"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" class="a-center"><input type="checkbox" id="agree" checked> <label for="agree"><span style="color:#333">개인정보 수집 및 이용동의</span></label></td>
						</tr>
					</tbody>
				</table>

				<table class="consult1 width90">
					<colgroup>
					<col width="28%">
					<col width="72%">
					</colgroup>
					<tr>
                        <td colspan="2" class="a-center">
                        <?php 
                        $comment='';
                        if(element('campaign_age',element('extravars',element('post', $view))) || element('campaign_gender',element('extravars',element('post', $view)))){

                            if(element('campaign_age',element('extravars',element('post', $view)))){
                                $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                                if(!empty($campaign_age[0])) $campaign_age[0]=trim($campaign_age[0]);
                                if(!empty($campaign_age[1])) $campaign_age[1]=trim($campaign_age[1]);
                                if(!empty($campaign_age[0]) && !empty($campaign_age[1])) $comment.=$campaign_age[0].'세 이상 ';
                                if(!empty($campaign_age[1]) && !empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하 ';
                            }
                            
                            if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                            if(!empty($comment)) $comment.='만이 참여 가능합니다.';

                            echo $comment;
                        }
                            
                        ?>
                        </td>
                    </tr>
				</table>

				<p class="cr_btn a-center mb20"><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/db_btn.jpg" class="img80"></a></p>
				<?php echo form_close(); ?>

				</div>
                
		</div>


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




function cpaProc(mlh_id) {
    var href;

    href = 'http://api.linkmine.co.kr/callback/cpa.proc?adf_key=<?php echo $adf_key?>&adv_key=<?php echo element('adv_key',element('extravars',element('post', $view)))?>';

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            success : function(response) {
            },
            complete : function (response) {

                
            var data = JSON.parse(response.responseText);

                $.ajax({
                     async : false,
                     url : cb_url + '/media/cpaProc/' +mlh_id+'/'+data.rst+'/'+data.msg,
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


</body>
</html>
