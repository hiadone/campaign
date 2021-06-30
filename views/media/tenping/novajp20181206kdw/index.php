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
  <meta name="format-detection" content="telephone=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>노바 조인트 파워</title>
  
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

</head>

<body>
	<div class="container">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<section><img src="<?=$AD_DIR?>/images/title4.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/title.jpg"></section>
		
		<section style="padding:0 10px; font-size:12px;">
			날짜 : 
			<script language="javascript">
				today=new Date();
				document.write(today.getFullYear().toString(),".",today.getMonth()+1,".",today.getDate()-1);
			</script>
		</section>
		<div style="line-height:26px; padding:10px; font-weight:600;">통풍은 중년층이 자주 걸린다는 인식이 있었다. 실제로 국민건강보험공단
의 통계 자료에 따르면, 2014년 기준으로 50대 남성 통풍 환자의 수가 약 7만 8천여 명으로 가장 많았다. 하지만 최근들어 급성 통풍으로 고생하는 젊은층이 늘어나고 있다. 2012년부터 4년간 20~30대 남성 통증 환자는 35%나 증가했다는 통계가 있다. 이제는 젊은층도 통풍, 통풍성 관절염의 고통에서 안전하지 않다.</div>
		<section><img src="<?=$AD_DIR?>/images/joint_img02.jpg"></section>
		<div style="line-height:26px; padding:10px; font-weight:600;">
통풍과 산후풍은 매우 비슷한 질병이다. 이름에서도 알 수 있듯이 바람만 
불어도 부위를 가리지 않고 고통을 유발한다. 그러나 최근에 LCM 사이언스에서 동송근과 천연한방원료를 이용하여 수술없이도 치료를 할 수 있는 "노바조인트파워"를 개발해 화제가 되고 있다.
		</div> 
		<section><img src="<?=$AD_DIR?>/images/joint_img03_1.jpg"></section>
		<div style="line-height:26px; padding:10px; font-weight:600;">
    노바조인트파워의 주 원료인 동송근은 동쪽으로 뻗은 한국 재래 소나무뿌
리로 관절염, 통풍, 산후풍 치료에 효과가 입증되고있는 천연원료이다. 또한 모든 성분이 100% 천연성분으로 만들어졌다. 또한 제품 효능을 인정받아 미국 보건 복지부, 식약청, SGS 등 여려곳에서 인증받은 신뢰할 수 있는 제품이다.
		</div>
		<section><img src="<?=$AD_DIR?>/images/joint_img03_2.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/joint_img04.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/event_img01.jpg"></section>


        <section class="inDB">
        	<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
			<div class="inbox">
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
							<td><input type="number" class="form-class input" name="mlh_age" id="mlh_age" label="나이" style="width:80px; float:left;"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
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
								<div class="checkbox">
									<input type="checkbox" name="" id="agree" checked> <label for="agree">개인정보 수집 및 이용동의</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<p style="color:#fff;font-size:12px;text-align:center;">※ 빈칸을 작성 하시고 무료체험 신청하기 버튼을 클릭해주세요!</p>
				<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/button.jpg" style="max-width: 100%;"></a>
				
				<p style="text-align:center; font-style:oblique; color:#172458;">직접 드셔보시면 압니다. 체험 후 결정하세요!</p>

			</div>
		</section>
<?php echo form_close(); ?>

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