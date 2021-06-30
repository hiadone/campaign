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
<title>Beauty Today</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">


<!-- Performax Web CPA Tracker v1 :: Landing Tag -->

<style>
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

<div class="db_click"><a href="#consult"><img src="<?=$AD_DIR?>/images/DB_click.png" class="img100"></a></div>

  <div class="container" style="width: 100%">
 
    <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close alert-dismissible alert-info">', '</div>'); ?>

		<div class="img-area"><img src="<?=$AD_DIR?>/images/header.jpg" class="img100"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/img001.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img002.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img003.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img004.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img005.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img006.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/event.jpg" class="img100"></div>
    

		
		<div id="consult" class="consult_wrap">
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
                    <tr>
                            <th>이름</th>
                            <td><input type="text" id="mlh_name" name="mlh_name" class="width50 input" label="이름"></td>
                        </tr>
                        <tr>
                            <th>성별</th>
                            <td><input type="radio" id="sex_fm"  name="mlh_gender" value="1" checked>
                                <label for="sex_fm" class="mr20">여성</label>
                                <input type="radio" id="sex_m"  name="mlh_gender" value="2">
                                <label for="sex_m">남성</label></td>
                        </tr>
                        <tr>
                            <th>나이</th>
                            <td><input type="text" id="mlh_age" name="mlh_age" class="width25 input" label="나이">
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
                        <tr>
                            <th class="v-top">문의사항</th>
                            <td><textarea id="mlh_text" name="mlh_text" class="width95"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="a-center"><input type="checkbox" id="agree" checked="checked"> <label for="agree">개인정보 수집 및 이용동의</label></td>
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
				
					<p class="cr_btn a-center mb20"><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/btn.jpg" class="width50"></a></p>
                    
                    
                
				<?php echo form_close(); ?>
			</div>
		</div>
		   	
		
		<!-- <div class="img-area"><a href="tel:02-3672-0108"><img src="<?=$AD_DIR?>/images/phone001.gif" class="img100" ></a></div>
		<div class="img-area"><a href="#consult"><img src="<?=$AD_DIR?>/images/phone002.gif" name="consult" class="img100" id="consult" ></a></div> -->
		
        
       
    
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img007.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/footer.jpg" class="img100"></div>

		
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



</body>
</html>


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
