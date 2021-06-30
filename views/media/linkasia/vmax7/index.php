
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="robots" content="index,follow">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="-1">

<!-- opengraph -->
	<meta property="og:title" content="v-max" />
	<meta property="og:url" content="<?php echo current_url(); ?>" />
	<meta property="og:description" content="의리의 남자 김보성! 그가 남성들에게 적극 추천하는 하루 2알의 기적! V-max" />
	<meta property="og:image" content="http://ad1.newsissue.co.kr/ADHTML/VMAXMO1/images/s01.jpg" />

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="https://www.leadtracker.live/static/js/fixel.js"></script>
	<link href="<?=$AD_DIR?>/common/style.css" rel="stylesheet" />
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
	<title>v-max</title>

</head>
<body>
<div class="container" style="padding:0px;">
	<?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
	<p><img src="<?=$AD_DIR?>/images/c01.jpg"></p>
	
	<section class="DB">
		<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <!-- <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value=""> -->
			<div class="innerBox"  style="padding-left:20px;padding-right:20px;">
				<table>
					<colgroup>
						<col width="70px">
						<col width="">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th><td><input type="text" class="form-class input" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>나이</th><td><input type="number" class="form-class input" name="mlh_age" id="mlh_age" label="나이"style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" class="form-class input"  id="mlh_mobileno" name="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<td colspan="10" class="text-center">
								<div class="checkbox">
									<input type="checkbox" id="agree" checked> <label for="agree">개인정보 수집, 이용 및 제공에 관한동의</label>
								</div>
							</td>
						</tr>
						<tr>
						    <td colspan="2" class="t-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
							<td colspan="10" class="text-center" style="padding:10px;">
								<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><button type="submit" class="" ><img src="<?php echo $AD_DIR?>/images/btn1.jpg" alt="가격 문의 하기"></button></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		<?php echo form_close(); ?>
	</section>
	<p><img src="<?=$AD_DIR?>/images/c02.jpg"></p>
	<section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
	<section><img src="<?=$AD_DIR?>/images/c04.jpg"></section>
	<section class="DB2">
		<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <!-- <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value=""> -->
			<div class="innerBox"  style="padding-left:20px;padding-right:20px;">
				<table>
					<colgroup>
						<col width="70px">
						<col width="">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th><td><input type="text" class="form-class input2" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>나이</th><td><input type="number" class="form-class input2" name="mlh_age" id="mlh_age" label="나이"style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" class="form-class input2"  id="mlh_mobileno" name="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<td colspan="10" class="text-center">
								<div class="checkbox">
									<input type="checkbox" id="agree2" checked> <label for="agree2">개인정보 수집, 이용 및 제공에 관한동의</label>
								</div>
							</td>
						</tr>
						<tr>
						    <td colspan="2" class="t-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
							<td colspan="10" class="text-center" style="padding:10px;">
								<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><button type="submit" class=""><img src="<?php echo $AD_DIR?>/images/btn1.jpg" alt="가격 문의 하기"></button></a>

							</td>

						</tr>
					</tbody>
				</table>
			</div>
		<?php echo form_close(); ?>
	</section>
	<section><img src="<?=$AD_DIR?>/images/end.jpg"></section>
    <div class="preloader js-preloader flex-center " style="display:none;">
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    </div>
</div>




</body>
</html>

<script type="text/javascript">
//<![CDATA[

var doubleSubmitFlag = false;
var doubleSubmitFlag_ = false;
function doubleSubmitCheck(){
    if(doubleSubmitFlag){
        return doubleSubmitFlag;
    }else{
        doubleSubmitFlag = true;
        return false;
    }
}

function doubleSubmitCheck_(){
    if(doubleSubmitFlag_){
        return doubleSubmitFlag_;
    }else{
        doubleSubmitFlag_ = true;
        return false;
    }
}

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

        if(doubleSubmitCheck()) return;

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

        if(doubleSubmitCheck_()) return;
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




function cpaProc(mlh_id) {
    $('.preloader').show();
	var href;

    
     
    href = cb_url + '/postact/linkasia_wellzone_cpa_curl/'+mlh_id+'/<?php echo $this->session->flashdata('mlh_mobileno') ?>/'+encodeURIComponent("<?php echo $this->session->flashdata('mlh_name') ?>")+'/<?php echo $this->session->flashdata('mlh_age') ?>';
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
	                 url : cb_url + '/media/act_laProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
	                 type : 'get',
	                 dataType : 'json',
	                 success : function(data) {
	                      
	                 }
	             });

                $('.preloader').hide();
                if (response.responseJSON.ResultCode == '0000') {
                    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>');
                }
	       
	       }
                
                

            
           
        }

    });


    
}

<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>);
    
<?php } ?>

//]]>
 </script>