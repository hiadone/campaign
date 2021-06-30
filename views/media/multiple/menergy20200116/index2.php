<!DOCTYPE HTML>
<html lang="ko">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="robots" content="index,follow">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Expires" content="-1">

  <title>매너지-12</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?=$AD_DIR?>/css/style.css"/>
  <script src='http://code.jquery.com/jquery-latest.min.js' ></script>

<script type='text/javascript'>

	function onlyNumber(event){
			event = event || window.event;
			var keyID = (event.which) ? event.which : event.keyCode;
			if ( (keyID >= 48 && keyID <= 57) || (keyID >= 96 && keyID <= 105) || keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
				return;
			else
				return false;
		}
		function removeChar(event) {
			event = event || window.event;
			var keyID = (event.which) ? event.which : event.keyCode;
			if ( keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
				return;
			else
				event.target.value = event.target.value.replace(/[^0-9]/g, "");
		}

		function fnMove(){
            var offset = $("#inDB").offset();
            $('html, body').animate({scrollTop : offset.top}, 400);
        }

</script>
</head>
<body>

	<div class="container">

		<section><img src="<?=$AD_DIR?>/images/c01.png?V=1"></section>
		
		<section>
			<div class="inDB">
				<div class="inbox">
					<table>
						<colgroup>
							<col width="">
							<col width="">
						</colgroup>
						<tbody>
							<tr>
								<th>이름</th>
								<td><input type="text" class="form-class" name="M_NAME2" id="M_NAME2"></td>
							</tr>
							<tr>
								<th>연락처</th>
								<td>
									<select name="HP2_1" id="HP2_1" class="form-class" style="width: 65px; display:inline-block;">
										  <option value="010">010</option>
										  <option value="011">011</option>
										  <option value="018">018</option>
										  <option value="016">016</option>
										  <option value="017">017</option>
										  <option value="02">02</option>
										  <option value="031">031</option>
										  <option value="032">032</option>
										  <option value="033">033</option>
										  <option value="041">041</option>
										  <option value="042">042</option>
										  <option value="043">043</option>
										  <option value="051">051</option>
										  <option value="052">052</option>
										  <option value="053">053</option>
										  <option value="054">054</option>
										  <option value="055">055</option>
										  <option value="061">061</option>
										  <option value="062">062</option>
										  <option value="063">063</option>
										  <option value="064">064</option>
										  <option value="070">070</option>
										</select>
										<strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
										<input name="HP2_2" id="HP2_2" class="form-class" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)'  style="width: 60px; display:inline-block;" type="tel" maxlength="4">
										<strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
										<input name="HP2_3" id="HP2_3" class="form-class" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style="width: 60px; display:inline-block;" type="tel" maxlength="4">
								</td>
							</tr>
							<tr>
								<th>나이</th>
								<td><input type="number" class="form-class" id="M_AGE2" style="width:80px; float:left;"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
							</tr>
							<tr>
								<th>문의사항</th>
								<td>
									<textarea class="form-class" rows="3" id="M_QUESTION2"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="t-center">
									<div class="checkbox">
										<input type="checkbox" name="" id="agree2" checked> <label for="agree2">개인정보 수집 및 이용동의</label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<p><a onclick="APPLY_SUBMIT2();"><img src="<?=$AD_DIR?>/images/btn.png"></a></p>
				</div>
			</div>
		</section>
		<section><img src="<?=$AD_DIR?>/images/c02.png?v=1"></section>
		<section><img src="<?=$AD_DIR?>/images/c03.png?V=1"></section>


			<section id="inDB"">
			<div class="inDB">
				<div class="inbox">
					<table>
						<colgroup>
							<col width="">
							<col width="">
						</colgroup>
						<tbody>
							<tr>
								<th>이름</th>
								<td><input type="text" class="form-class" name="M_NAME" id="M_NAME"></td>
							</tr>
							<tr>
								<th>연락처</th>
								<td>
									<select name="HP_1" id="HP_1" class="form-class" style="width: 65px; display:inline-block;">
										  <option value="010">010</option>
										  <option value="011">011</option>
										  <option value="018">018</option>
										  <option value="016">016</option>
										  <option value="017">017</option>
										  <option value="02">02</option>
										  <option value="031">031</option>
										  <option value="032">032</option>
										  <option value="033">033</option>
										  <option value="041">041</option>
										  <option value="042">042</option>
										  <option value="043">043</option>
										  <option value="051">051</option>
										  <option value="052">052</option>
										  <option value="053">053</option>
										  <option value="054">054</option>
										  <option value="055">055</option>
										  <option value="061">061</option>
										  <option value="062">062</option>
										  <option value="063">063</option>
										  <option value="064">064</option>
										  <option value="070">070</option>
										</select>
										<strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
										<input name="HP_2" id="HP_2" class="form-class" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)'  style="width: 60px; display:inline-block;" type="tel" maxlength="4">
										<strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
										<input name="HP_3" id="HP_3" class="form-class" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style="width: 60px; display:inline-block;" type="tel" maxlength="4">
								</td>
							</tr>
							<tr>
								<th>나이</th>
								<td><input type="number" class="form-class" id="M_AGE" style="width:80px; float:left;"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
							</tr>
							<tr>
								<th>문의사항</th>
								<td>
									<textarea class="form-class" rows="3" id="M_QUESTION"></textarea>
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
					<p><a onclick="APPLY_SUBMIT();"><img src="<?=$AD_DIR?>/images/btn.png"></a></p>
				</div>
			</div>
			</section>
			<section></section>
			<footer>
				<p><img src="<?=$AD_DIR?>/images/m3.jpg"></p>
				<p><img src="<?=$AD_DIR?>/images/footer.jpg"></p>
			</footer>
</div>


<!--//
<form id="frm" name="frm" method="post">
	<input type="hidden"  name="name"  value="" />
	<input type="hidden"  name="age"  value="" />
	<input type="hidden"  name="phone"  value="" />
</form>
//-->

<script type="text/javascript">
	var CODE_NAME  = "<?=$CODE_NAME?>";
	var MEDIA_CODE = "<?=$MEDIA_CODE?>";
	var USER_AGENT = "<?=$_SERVER['HTTP_USER_AGENT']?>";
	var REFERER_CODE_NAME  = "<?=$REFERER_CODE_NAME?>";
	var REFERER_MEDIA_CODE = "<?=$REFERER_MEDIA_CODE?>";


	var APPLY_SUBMIT = function () {
		
		var M_NAME   = $("[id=M_NAME]").val();
		//var M_HP     = $("[id=M_HP]").val();
		var M_AGE    = $("[id=M_AGE]").val();
		var M_HP     = $("[id=HP_1]").val() + $("[id=HP_2]").val() + $("[id=HP_3]").val();
		var M_QUESTION = $("[id=M_QUESTION]").val();
		
		if ( M_NAME == "" ) { alert( "이름을  입력해주십시요."); $("[id=M_NAME]").focus(); return false; }
		if ( M_AGE == "" ) { alert( "나이를 입력해주십시요."); $("[id=M_AGE]").focus(); return false; }
		//if ( M_HP == "" ) { alert( "전화번호를 입력해주십시요."); $("[id=M_HP]").focus();return false; }
		if ($("#HP_2").val().trim() == "") {
		   alert("전화번호를 입력해 주세요.");
		   $("#HP_2").focus();
		   return false;
		}
		if ($("#HP_3").val().trim() == "") {
		   alert("전화번호를 입력해 주세요.");
		   $("#HP_3").focus();
		   return false;
		}

		if ( M_QUESTION == "" ) { alert( "문의사항을 입력해주십시요."); $("[id=M_QUESTION]").focus();  return false; }

		$.post('/include/process/INSERT_DATA.php',  { CODE_NAME:CODE_NAME , USER_AGENT:USER_AGENT , MEDIA_CODE:MEDIA_CODE , 
													  M_HP:M_HP , M_NAME:M_NAME ,  M_AGE:M_AGE , M_QUESTION:M_QUESTION ,
													  XFOR:"<?=$_SERVER['HTTP_X_FORWARDED_FOR']?>" , 
													  REFERER_CODE_NAME:REFERER_CODE_NAME , REFERER_MEDIA_CODE:REFERER_MEDIA_CODE
		}, function(data){
	//	_tfa.push({notify: 'event', name: 'lead', id: 1244694});

	//	$("[name=name]").val(M_NAME);
	//	$("[name=age]").val(M_AGE);
	//	$("[name=phone]").val(M_HP);

		//$.post('http://com.daine.co.kr/utf/hgw/linkprice.jsp', $('#frm').serialize());

		alert("신청 되었습니다.");     
		//$("#M_HP").val("");
		$("#HP_2").val("");
		$("#HP_3").val("");
		$("#M_NAME").val("");
		$("#M_AGE").val("");
		$("#M_QUESTION").val("");
				
		return true;
		})
	}


		var APPLY_SUBMIT2 = function () {
		
		if ( $("#agree2").is(':checked') == false ) {
			alert("개인정보 수집 및 이용동의하셔야 상담을 신청하실수 있습니다.");
			return false;           
		}
	
		var M_NAME   = $("[id=M_NAME2]").val();
		var M_AGE    = $("[id=M_AGE2]").val();
		//var M_HP     = $("[id=M_HP2]").val();
		var M_HP     = $("[id=HP2_1]").val() + $("[id=HP2_2]").val() + $("[id=HP2_3]").val();
		var M_QUESTION = $("[id=M_QUESTION2]").val();
		
		if ( M_NAME == "" ) { alert( "이름을  입력해주십시요."); $("[id=M_NAME2]").focus(); return false; }
		if ( M_AGE == "" ) { alert( "나이를 입력해주십시요."); $("[id=M_AGE2]").focus(); return false; }
		//if ( M_HP == "" ) { alert( "전화번호를 입력해주십시요."); $("[id=M_HP2]").focus();return false; }
		if ($("#HP2_2").val().trim() == "") {
		   alert("전화번호를 입력해 주세요.");
		   $("#HP2_2").focus();
		   return false;
		}
		if ($("#HP2_3").val().trim() == "") {
		   alert("전화번호를 입력해 주세요.");
		   $("#HP2_3").focus();
		   return false;
		}
		if ( M_QUESTION == "" ) { alert( "문의사항을 입력해주십시요."); $("[id=M_QUESTION2]").focus();  return false; }

		$.post('/include/process/INSERT_DATA.php',  { CODE_NAME:CODE_NAME , USER_AGENT:USER_AGENT , MEDIA_CODE:MEDIA_CODE , 
													  M_HP:M_HP , M_NAME:M_NAME ,  M_AGE:M_AGE , M_QUESTION:M_QUESTION ,
													  XFOR:"<?=$_SERVER['HTTP_X_FORWARDED_FOR']?>" , 
													  REFERER_CODE_NAME:REFERER_CODE_NAME , REFERER_MEDIA_CODE:REFERER_MEDIA_CODE
		}, function(data){
	//	_tfa.push({notify: 'event', name: 'lead', id: 1244694});

	//	$("[name=name]").val(M_NAME);
	//	$("[name=age]").val(M_AGE);
	//	$("[name=phone]").val(M_HP);

		//$.post('http://com.daine.co.kr/utf/hgw/linkprice.jsp', $('#frm').serialize());

		alert("신청 되었습니다.");     
		$("#HP2_2").val("");
		$("#HP2_3").val("");
		$("#M_NAME2").val("");
		$("#M_AGE2").val("");
		$("#M_QUESTION2").val("");
				
		return true;
		})
	}

</script>
</body>
</html>