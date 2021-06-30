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
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="no">
		<meta name="robots" content="index,follow">
		<meta name="format-detection" content="telephone=no">
		
		<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css?v=1">
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
		

		<SCRIPT LANGUAGE="Javascript">
			$(function() {
				$(".inputs").keyup (function () {
					var charLimit = $(this).attr("maxlength");
					if (this.value.length >= charLimit) {
						$(this).next('.inputs').focus();
						return false;
					}
				});
			});
		</SCRIPT>

		<script language = "javascript"> 
            
			var stateObj = { forward: "forward" };
			if (window.history && window.history.pushState) {
				
				if('state' in window.history && window.history.state !== null) window.history.replaceState(stateObj, null, document.location.href);
				else window.history.pushState(stateObj, null, document.location.href);
			
				var popped = ('state' in window.history && window.history.state !== null), initialURL = location.href;

				$(window).bind('popstate', function (event) {
				  // Ignore inital popstate that some browsers fire on page load
				  var initialPop = !popped && location.href == initialURL
				  popped = true
				  if (initialPop) return;             

				  parent.top.location.replace("http://ad1.newsissue.co.kr/?CODE_NAME=LOTTO20180917&MEDIA_CODE");
				});
			 }
	 </script>
	
	</head>
<body>


<div class="container" style="padding:0px">
	<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
	<nav>
		<img src="<?=$AD_DIR?>/images/top.jpg">
	</nav>

	<header>
		<h1><mark>[화제]</mark> 로또 수동당첨비율 5.2% -> 38.7% 급상승 관계자 측, <mark>"조작 없지만 분석토대로 당첨사실 첫 인정"</mark></h1>
		<p><b>- 패턴만 알면 27%이상 당첨확률 월등히 높아..</b></p>
		<div class="header">
			<div class="headerdate">
				<p style="text-align:right;">기사입력 : 2018-10-28 09:13</p>
			</div>
		</div>
	</header>

	<main>
	<section><img src="<?=$AD_DIR?>/images/3.jpg"></section>
	<section>
		경기도 부천시 원미구에 작은 식당을 운영하고 있는 최 씨 부부는 부담스러운 인건비로 인해 고등학생인 아들과 같이 식당을 운영하고 있다.<br><br>
		최근 주변에 소식을 들어보면 "주식해서 손실을 봤다", "집 값이 올랐다" 등 겨우 생활비만 벌고 있는 최 씨 그저 남들얘기 같다.<br><br>
	</section>

	<section><img src="<?=$AD_DIR?>/images/lotto1_1.jpg"></section>
	<section>
		<p class="t-center"><b>*실제 최 씨 부부가 영수증 제공한 828회 영수증</b></p>
		<br>
		국내 개발자들들은 6년간 연구 끝에 타 업체와 비교할 수 없는 100% 자체 기술력 보유로 결국 성공을 이루었다. 간략하게 설명하자면 약 27 여 가지[낙수, 낙첨, 복합수 등] 분석 시뮬레이션을 통해 로또 최적화 조합을 제공한다.<br><br>
		일반인 대상 300명 분석 번호 테스트 결과 수동 당첨 비율이 무려 5.2%-> 38.7% 급증가 했다.<br><br>

		<mark><u>이 말은 즉, 통계상 최대 6주 안에 1명씩은 3등 이상의 고액 당첨이 나오고 있다는 뜻이다.</u></mark>
		<br><br>
		현재 100% 자체 기술력으로 브랜드 가치 1위까지 단번에 오른 <mark><b>해당 업체는 이번 회차 분석 번호를 아무조건 없이 100%무료번호 추출을 실시간 수기로 제공</b></mark>해준다고 하니 빠르게 참여해보길 바란다.
	</section>


	<section class="inDB">
		<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_name" id="mlh_name" value="none">
            <input type="hidden" name="mlh_age" id="mlh_age" value="0">
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
		<div class="inbox">
			<p><img src="<?=$AD_DIR?>/images/dbtt.jpg"></p>
			<table>
				<colgroup>
					<col width="50px">
					<col width="">
				</colgroup>
				<tbody>
					<tr>
						<td colspan="2" style="padding-top:20px;"></td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>
							<input type="tel" id="mlh_mobileno1" name="mlh_mobileno1" class="form-class  input" label="연락처">
							
							<input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" class="form-class  input" label="연락처">
							
							<input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" class="form-class  input" label="연락처">

							
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center">
							<div class="checkbox">
								<input type="checkbox" name="" id="agree" checked> <label for="agree">개인정보 수집 및 이용동의</label>
							</div>
							<p style="padding:10px 0;font-size:12px;">*별도의 회원가입 없이 <span style="color:red;">서비스</span> 정보 제공 후<br>개인정보는 안전하게 폐기 됩니다.</p>
						</td>
					</tr>
                     
					<tr>
						<td colspan="2" class="t-center">
							<p><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/btn01.gif" style="width:100%"></a>
								</p>
							<p><img src="<?=$AD_DIR?>/images/db_img3.gif" style="width:90px;"></p>
							<p><img src="<?=$AD_DIR?>/images/db_1.gif"></p>
						</td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</div>
	</section>
	</main>

	<footer style="border-top:1px solid #a9a9a9;">
		<div class="panel">
			<div class="panel-header">
				<div class="p-left">
					<b><span style="color:red;">네티즌의견</span></b>
				</div>
				<div class="p-right">
					더보기
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="panel-body">
				<h3><img src="<?=$AD_DIR?>/images/best.gif">	lovemo***</h3>
				<p>제가 정말 과장 없이 솔직한 후기 말씀드릴게요. 저는 로또에 관련된 직원도 아닌 일반 인천 사는 두 아이의 아빠입니다. 요즘 이거에 맛들려서 자주 구매를 합니다. 4주간 가장 평이 좋은 3개 업체 분석 번호를 구매해봤는데 이쪽이 확실히 압도적이네요. 이미 유명해서 아실 분들은 아시겠지만 용돈벌이로 좋네요</p>
			</div>
			<div class="panel-footer">
				<p class="p-left">
					답글(7)
				</p>
				<p class="p-right" style="color:#000;">
					추천0 / 반대0
				</p>
				<div class="clear"></div>
			</div>

			<div class="panel-body">
				<h3><img src="<?=$AD_DIR?>/images/best.gif">	piepo***</h3>
				<p>	올해 수동 당첨자가 많이 나온다는 뉴스 보다가 호기심에 신청해봤어요. 3년째 최고 등수 3등 당첨된 게 전부네요. 지인도 추천해주던데 당첨되면 저도 인증 사진 올릴게요.</p>
			</div>
			<div class="panel-footer">
				<p class="p-left">
					답글(3)
				</p>
				<p class="p-right" style="color:#000;">
					추천0 / 반대0
				</p>
				<div class="clear"></div>
			</div>

			<div class="panel-body">
				<h3><img src="<?=$AD_DIR?>/images/best.gif">	money***</h3>
				<p>	로또로 인생 역전 가즈아~!!!!</p>
			</div>
			<div class="panel-footer">
				<p class="p-left">
					답글(1)
				</p>
				<p class="p-right" style="color:#000;">
					추천0 / 반대0
				</p>
				<div class="clear"></div>
			</div>

			<div class="panel-body">
				<h3><img src="<?=$AD_DIR?>/images/best.gif">	gogodd***</h3>
				<p>	로또는 역시 수동이 대세 ㅋ 오늘도 하러 갑니다~</p>
			</div>
			<div class="panel-footer">
				<p class="p-left">
					답글(1)
				</p>
				<p class="p-right" style="color:#000;">
					추천0 / 반대0
				</p>
				<div class="clear"></div>
			</div>

			
			<div class="clear"></div>
		</div>


		<p style="margin-top:15px;padding-bottom:30px;background-color:#f4f4f4;"><img src="<?=$AD_DIR?>/images/footer.gif"></p>
	</footer>


	<section class="inDB">
		<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite2', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_name"  value="none">
            <input type="hidden" name="mlh_age"  value="0">
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">

		<div class="inbox">
			<p><img src="<?=$AD_DIR?>/images/dbtt.jpg"></p>
			<table>
				<colgroup>
					<col width="50px">
					<col width="">
				</colgroup>
				<tbody>
					<tr>
						<td colspan="2" style="padding-top:20px;"></td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>
							<input type="tel" id="mlh_mobileno_1" name="mlh_mobileno1" class="form-class  input2" label="연락처">
							
							<input type="tel" id="mlh_mobileno_2" name="mlh_mobileno2" class="form-class  input2" label="연락처">
							
							<input type="tel" id="mlh_mobileno_3" name="mlh_mobileno3" class="form-class  input2" label="연락처">
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center">
							<div class="checkbox">
								<input type="checkbox" name="" id="agree2" checked> <label for="agree2">개인정보 수집 및 이용동의</label>
							</div>
							<p style="padding:10px 0;font-size:12px;">* 이미 많은사람들에게 <br>입증 됐으며 가짜와의 차이를 확실히 보여드립니다.</p>
						</td>
					</tr>
                    
					<tr>
						<td colspan="2" class="t-center">
							<p><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/btn01.gif" style="width:100%"></a></p>
							<p><img src="<?=$AD_DIR?>/images/db_img3.gif" style="width:90px;"></p>
							<p><img src="<?=$AD_DIR?>/images/db_1.gif"></p>
						</td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</div>
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
                 $("#mlh_mobileno_").val($("#mlh_mobileno_1").val()+$("#mlh_mobileno_2").val()+$("#mlh_mobileno_3").val());
                
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

    href='';
    href = cb_url + '/postact/lotto_query_curl/<?php echo $this->session->flashdata('mlh_mobileno') ?>/go1';
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
            return false;
           }
           
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