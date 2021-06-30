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

  <title>에이지레스 스칼프</title>
  
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
		<section><img src="<?=$AD_DIR?>/images/01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img_01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img_02.jpg"></section>
		<!-- <section class="movie movie169">
			<video id="videoid" type="video/mp4" src="http://h2ad.co.kr/landing/ag/mimg1/hir.mp4" width="100%" height="230" controls="" poster="http://h2ad.co.kr/landing/ag/mimg1/capture_img.png"></video>
		</section> -->
		
		<section><img src="<?=$AD_DIR?>/images/img_03.jpg"></section>
		<section>
			<p>미FDA연구소와 국내 약학대학교,한의과대학의 연구팀은 모발 성장을 촉진하는 식물줄기세포추출물과 복합펩타이드 물질을 개발하였다. 식물줄기세포추출물과 복합펩타이드 물질은 모근과 두피를 건강하고 청결하게 유지시켜주며, 두피 피부세포의 재생을 촉진하며 두피 피부를 보호하는 역할을 하기 때문에 모발상태를 개선시킨다. 현재 탈모 토탈 솔루션 "에이지레스 스칼 프" 출시를 기념하여 무료체험 이벤트를 진행중이며, 지금 신청하면 30일간 직접 써볼 수 있다.</p>
		</section>
		<section><img src="<?=$AD_DIR?>/images/img_04.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img_05.jpg"></section>
		<section>
			<p>일반적인 탈모방지 성분들은 두피의 세포막을 통과하지 못해 효과를 보기 힘들다. 그러나 "에이지레스 스칼프"는 화학성분, 실리콘을 첨가하지 않았으며 대나무수와 센티드제라늄 오일 함유로 두피 세포막에 침투하여 탈모 효소인 DHT를 억제할뿐 아니라 손상된 두피 세포막을 개선시켜 머리카락이 다시 자랄 수 있는 환경을 조성하고, 새로운 모근을 생성시켜 시술없이도 풍성한 모발을 기대할 수 있다.</p>
		</section>
		<section><img src="<?=$AD_DIR?>/images/db_bg.jpg"></section>
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
						<td><input type="number" class="form-class input" name="mlh_age" id="mlh_age" label="나이"  style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
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
					<tr>
						<td colspan="2">
							<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/button.jpg" style="max-width: 100%;"></a>
						</td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</section>
		<section><img src="<?=$AD_DIR?>/images/img4.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img5.jpg"></section>
		<section>
			<p>"에이지레스 스칼프"는 시중의 많은 샴푸에 쓰이고 있는 거품 세정제와 두 피 모공을 막아 트러블을 발생시키는 모발코팅제 실리콘을 사용하지 않았다. 천연식물에서 추출한 식물줄기세포추출물과 올리브 오일, 락토바실러스, 센티드제라늄, 쌀 캘러스 배양추출물, 멘톨등을 사용하여 두피를 건강하게 만들어 모발을 생성시킨다. 5일만 사용해봐도 기존 제품들과는 차별되는점을 바로 느낄수 있다.</p>
		</section>
		<section><img src="<?=$AD_DIR?>/images/img_08.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img_07.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img_11.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/img_10.jpg"></section>
		<section>
			<p>LCM SCIENCE는 100% 천연성분에서 추출만 성분으로만 탈모 개선에 크게 기여하는 물질로만 "에이지레스 스칼프" 개발에 성공했다. 현재 지금은 스페인, 이탈리아, 일본 등 다양한 나라에 수출을 하고 있는 상태이다.</p>
		</section>
		<section><img src="<?=$AD_DIR?>/images/img_09.jpg"></section>
		<section class="inDB">
			<p><img src="<?=$AD_DIR?>/images/db_bg.jpg"></p>
			<p><img src="<?=$AD_DIR?>/images/img_12.jpg"></p>
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
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
						<td><input type="text" class="form-class input2" id="mlh_name" name="mlh_name" label="이름"></td>
					</tr>
					<tr>
						<th>나이</th>
						<td><input type="number" class="form-class input2" name="mlh_age" id="mlh_age" label="나이" style="width:auto; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">세</label></td>
					</tr>
					<tr>
						<th>연락처</th>
						<td><input type="tel" class="form-class input2" id="mlh_mobileno" name="mlh_mobileno" label="연락처"></td>
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
						<td colspan="2">
							<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/button.jpg" style="max-width: 100%;"></a>
						</td>
					</tr>
				</tbody>
			</table>
		</section>

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