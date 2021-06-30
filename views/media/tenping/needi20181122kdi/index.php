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
<title>니드아이인테리어</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" id="viewport" content="width=device-width, maximum-scale=2, user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">
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
<script type="text/javascript">
	function fnMove(){
		var offset = $("#inDB").offset();
		$('html, body').animate({scrollTop : offset.top}, 400);
	}
</script>

</head>
<body>

<div id="allWrap">
	<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
	<?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
<header>
	<div class="headerBg">
		<div class="headerWrap">
			<div class="header wrap100">
				<article>
					<h2 class="txtc"><img src="<?=$AD_DIR?>/images/main_title.png" width="502" alt="특별한 변화의 바람, 상업공간 인테리어" /></h2>
					<h1 class="txtc moveCTA"><a href="javascript:;" onclick="fnMove();"><img src="<?=$AD_DIR?>/images/main_btn.png" width="300" alt="무료 견젹 신청하기" /></a></h1>
				</article>
			</div><!--header-->
		</div><!--headerWrap-->
	</div><!--headerBg-->
</header>

<section>
	<div id="realtimeBg">
		<div id="realtimeWrap">
			<div id="realtime" class="wrap100">				
				<article>
                    <div class="icon"><img src="<?=$AD_DIR?>/images/realtime_img.png" width="72" alt="" /></div>
                    <div class="title txtc"><img src="<?=$AD_DIR?>/images/realtime_title.png" width="267" alt="견적 신청 현황" /></div>
                    <div class="realtimeBox">
						<div class="realtimeBox01">
							<ul>
								<li>
									<p>서울</p>
									<p>사무실</p>
									<p>김OO</p>
									<p>35분전</p>
								</li>
								<li>
									<p>수원</p>
									<p>카페</p>
									<p>박OO</p>
									<p>45분전</p>
								</li>
								<li>
									<p>부산</p>
									<p>병원</p>
									<p>양OO</p>
									<p>50분전</p>
								</li>
								<li>
									<p>대구</p>
									<p>의류매장</p>
									<p>곽OO</p>
									<p>55분전</p>
								</li>
							</ul>
						</div>
						<div class="realtimeBox02">
							<ul>
								<li>
									<p>부산</p>
									<p>병원</p>
									<p>양OO</p>
									<p>50분전</p>
								</li>
								<li>
									<p>대구</p>
									<p>의류매장</p>
									<p>곽OO</p>
									<p>55분전</p>
								</li>
								<li>
									<p>서울</p>
									<p>사무실</p>
									<p>김OO</p>
									<p>35분전</p>									
								</li>
								<li>
									<p>수원</p>
									<p>카페</p>
									<p>박OO</p>
									<p>45분전</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
			</div><!--realtime-->
		</div><!--realtimeWrap-->
	</div><!--realtimeBg-->
</section>

<section>
	<div id="bestBg">
		<div id="bestWrap">
			<div id="best" class="wrap100">
				<article>
                    <div class="icon"><img src="<?=$AD_DIR?>/images/best_img.png" width="72" alt="" /></div>
                    <div class="title txtc"><img src="<?=$AD_DIR?>/images/best_title.png" width="264" alt="상업공간 BEST" /></div>
                    <div class="galleryBox">
						<div class="galleryPhoto">
							<img src="<?=$AD_DIR?>/images/gallery_img01.jpg" width="493" alt="" />
						</div>
						<div class="galleryList">
							<ul>
								<li>
									<p class="list list-1 over"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 일식전문점</p>
								</li>
								<li>
									<p class="list list-2"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 학원 인테리어</p>
								</li>
								<li>
									<p class="list list-3"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 개인카페</p>
								</li>
								<li>
									<p class="list list-4"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 식당 인테리어</p>
								</li>
								<li>
									<p class="list list-5"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 프렌차이즈</p>
									</li>
								<li>
									<p class="list list-6"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 사무실</p>
								</li>
								<li>
									<p class="list list-7"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 면세점매장</p>
								</li>
								<li>
									<p class="list list-8"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 운동센터</p>
								</li>
								<li>
									<p class="list list-9"><img src="<?=$AD_DIR?>/images/gallery_arrow.png" width="9" alt="" class="listArrow" /> 백화점매장</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
			</div><!--best-->
		</div><!--bestWrap-->
	</div><!--bestBg-->
</section>

<section>
	<div id="benefitBg">
		<div id="benefitWrap">
			<div id="benefit" class="wrap100">
				<article>
                    <div class="icon"><img src="<?=$AD_DIR?>/images/benefit_img.png" width="72" alt="" /></div>
                    <div class="title txtc"><img src="<?=$AD_DIR?>/images/benefit_title.png" width="373" alt="NEED I DESIGN의 특별한 혜택" /></div>
					<ul>
						<li>
							<div>
								<p><img src="<?=$AD_DIR?>/images/benefit_num01.png" width="17" alt="01" /></p>
								<p class="f22 colorf">이상 발생시 <br class="brL" /><span class="yellow">무상 A/S</span></p>
							</div>
						</li>
						<li>
							<div>
								<p><img src="<?=$AD_DIR?>/images/benefit_num02.png" width="29" alt="02" /></p>
								<p class="f22 colorf"><span class="yellow">무료</span> 방문 <br class="brL" />견적 확인</p>
							</div>
						</li>
						<li>
							<div>
								<p><img src="<?=$AD_DIR?>/images/benefit_num03.png" width="23" alt="03" /></p>
								<p class="f22 colorf">시공전 <br class="brL" /><span class="yellow">자제 확인</span> 가능</p>
							</div>
						</li>
						<li class="benefit04">
							<div>
								<p><img src="<?=$AD_DIR?>/images/benefit_num04.png" width="29" alt="04" /></p>
								<p class="f22 colorf">목 공장, <br class="brL" />금속 공장 <span class="yellow">직영</span></p>
							</div>
						</li>
						<li class="benefit05">
							<div>
								<p><img src="<?=$AD_DIR?>/images/benefit_num05.png" width="23" alt="05" /></p>
								<p class="f22 colorf"><span class="yellow">이행보증 <br class="brL" />보험가입</span></p>
							</div>
						</li>
					</ul>
					<div class="coupon txtc pdt35"><img src="<?=$AD_DIR?>/images/benefit_coupon.jpg" width="510" alt="지금 상담 신청시 타업체 대비 10% 할인" /></div>
				</article>
			</div><!--benefit-->
		</div><!--benefitWrap-->
	</div><!--benefitBg-->
</section>

<section>
<div class="formBg">
		<div class="formWrap">
			<div class="form wrap100">
				<article>
					<fieldset>
						<legend>상담신청</legend>
						<div class="formTitle txtc"><img src="<?=$AD_DIR?>/images/form_title.png" width="526" alt="10곳 이상을 비교해도 결론은 NEED I DESIGN" /></div>
						<div class="formBox" id="inDB">
							<?php
							$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
							echo form_open_multipart(current_full_url(), $attributes);
							?>
							<input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
							<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
							<input type="hidden" name="jid" value="<?php echo $jid?>">                  
							<input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
							<input type="hidden" name="mlh_age" id="mlh_age" value="0">
							<div class="formLeft">
								<div class="name control-group" style='width:100%;'>
									<div class="formLabel">
										이름
										<div class="asterisk_name">*</div>
									</div>
									<input type='text'  class="input" id="mlh_name" name="mlh_name" label="이름" />
								</div>
								<div class="phone control-group" style='width:100%;'>
									<div class="formLabel">
										연락처
										<div class="asterisk_phone">*</div>
									</div>
									<input type='tel' class="input" id="mlh_mobileno" name="mlh_mobileno" label="연락처" />
								</div>
								<div class="area control-group" id="user_area">
									<div class="formLabel">
										지역
										<div class="asterisk_area">*</div>
									</div>
									<div class="area_select_wrap">
										<select class="area_select input"  id="q_a" name="q_a" label="지역">
											<option value="">선택</option>
											<option value="1">서울</option>
											<option value="2">경기</option>
											<option value="3">인천</option>
										</select>
									</div>
								</div>
								<div class="memo control-group">
									<div class="formLabel">문의사항</div>
									<textarea autocomplete="off"  class="input"  id="mlh_text" name="mlh_text" label="문의사항"></textarea>
								</div>
								<div class="agree control-group">
									<label>
										<input type="checkbox" name="개인정보보호정책동의" id="agree"  checked />개인정보보호정책에 동의함</label>
								</div>
							</div><!--formLeft-->
							<div class="formRight">
								<div class="form_button"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/form_btn.png" style="max-width: 100%;"></a></div>
							</div><!--formRight-->
						</div><!--formBox-->
					</fieldset>
					<?php echo form_close(); ?>
				</article>
			</div><!--form-->
		</div><!--formWrap-->
	</div><!--formBg-->
</section>

<div id="eventWrap">
	<div class="txtr"><img src="<?=$AD_DIR?>/images/event.png" width="128" alt="10% DC" /></div>
</div>
<div id="quickWrap" class="txtc moveCTA">
	<div><a href="javascript:;" onclick="fnMove();"><img src="<?=$AD_DIR?>/images/quick_text.jpg" width="116" /></a></div>
</div><footer>
	<div id="footerBg">
		<div id="footerWrap">
			<address>
			<div class="footer pdt40 pdb80">
				<!--<p class="footerLogo mgb10"><img src="img/footer_logo.jpg" width="" alt="" /></p>-->
				<p class="color6">
					사이트명 : 니드아이ㅣ상호 :  PK메탈 대표 : 고창배ㅣ사업자등록번호 : 231-12-00117ㅣ주소 : 경기도 파주시 문정로 146-16, 2동ㅣ연락처 :needned01@yopmail.com</p>
			</div>
			</address>
		</div>
	</div>
</footer>

</div><!--allWrap-->
		       




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

</body>
</html>