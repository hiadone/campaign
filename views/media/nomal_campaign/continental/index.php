<?php 

$this->managelayout->add_meta('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'); 
$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">'); 
$this->managelayout->add_meta('<meta name="robots" content="index,follow">'); 

$this->managelayout->add_meta('<meta property="og:title" content="콘티넨탈타이어 이벤트 체험단" />'); 
$this->managelayout->add_meta('<meta property="og:url" content="" />'); 
$this->managelayout->add_meta('<meta property="og:description" content="" />'); 
$this->managelayout->add_meta('<meta property="og:image" content="" />'); 
$this->managelayout->add_meta('<meta property="og:image:width" content="1200" />'); 
$this->managelayout->add_meta('<meta property="og:image:height" content="630" />'); 


$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css(element('view_skin_url', $layout)."/css/style.css"); 
$this->managelayout->add_js('//dmaps.daum.net/map_js_init/postcode.v2.js'); 

    

    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_cid'])) $jid=$_GET['adpot_cid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>    




	<title>콘티넨탈타이어 이벤트 체험단</title>

	<style>
    .alert 
    {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-size:18px;
        line-height: 27px;
    }
    .alert h4 {
      margin-top: 0;
      color: inherit;
    }
    .alert .alert-link {
      font-weight: bold;
    }
    .alert > p,
    .alert > ul {
      margin-bottom: 0;
    }
    .alert > p + p {
      margin-top: 5px;
    }
    .alert-dismissable,
    .alert-dismissible {
      padding-right: 35px;
    }
    .alert-dismissable .close,
    .alert-dismissible .close {
      position: relative;
      top: -2px;
      right: -21px;
      color: inherit;
    }
    .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6;
    }
    .alert-success hr {
      border-top-color: #c9e2b3;
    }
    .alert-success .alert-link {
      color: #2b542c;
    }
    .alert-info {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1;
    }
    .alert-info hr {
      border-top-color: #a6e1ec;
    }
    .alert-info .alert-link {
      color: #245269;
    }
    .alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc;
    }
    .alert-warning hr {
      border-top-color: #f7e1b5;
    }
    .alert-warning .alert-link {
      color: #66512c;
    }
    .alert-danger {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1;
    }
    .alert-danger hr {
      border-top-color: #e4b9c0;
    }
    .alert-danger .alert-link {
      color: #843534;
    }

    .alert-info {
      background-image: -webkit-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
      background-image: -o-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
      background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#b9def0));
      background-image: linear-gradient(to bottom, #d9edf7 0%, #b9def0 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);
      background-repeat: repeat-x;
      border-color: #9acfea;
    }
        </style>
</head>
<body>

	<div class="container">

		<?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>

		<section><img src="<?=$AD_DIR?>/images/con01.jpg" alt="" /></section>
		<section><img src="<?=$AD_DIR?>/images/con02.jpg" alt="" /></section>
		<section><img src="<?=$AD_DIR?>/images/con03.jpg" alt="" /></section>
		<section><img src="<?=$AD_DIR?>/images/con04.jpg" alt="" /></section>
		<section class="form-group">
			<div class="form-box"> <!--// div 또는 form //-->
				<?php
				$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
				echo form_open(current_full_url(), $attributes);
				?>
				<input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
				<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
				<input type="hidden" name="jid" value="<?php echo $jid?>">     				
				<input type="hidden" name="mlh_age" value="0">
				<input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
				<input type="hidden" name="mem_zipcode" id="mlh_mobileno" value="">
				<input type="hidden" name="mem_address2"  value="">
				<input type="hidden" name="mem_address3"  value="">
				<input type="hidden" name="mem_address4"  value="">
				<div class="list-group">
					<summary class="warning">* 표시는 필수 입력 항목 입니다.</summary>
					<div class="item">
						<p>이름<mark>*</mark></p>
						<input type="text" name="mlh_name" id="mlh_name"  class="input-class input" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" />
					</div>
					<div class="item">
						<p>휴대폰 번호<mark>*</mark></p>
						<div class="col-group">
							<div class="col">
								<select name="mlh_mobileno1" id="mlh_mobileno1" class="input-class input" label="연락처" />
									<option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
                                    <option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
									<option value="016">016</option>
									<option value="019">019</option>
								</select>
							</div>
							<div class="col">
								<input type="text" name="mlh_mobileno2" id="mlh_mobileno2" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>" class="input-class input" label="연락처" />
							</div>
							<div class="col">
								<input type="text" name="mlh_mobileno3" id="mlh_mobileno3" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>" class="input-class input" label="연락처" />
							</div>
						</div>
					</div>
					<div class="item">
						<p>이메일 주소<mark>*</mark></p>
						<input type="email" name="mlh_email" id="mlh_email"  class="input-class input" label="이메일" value="<?php echo set_value('mlh_email', element('mlh_email', element('post', $view))); ?>" />
					</div>
					<div class="item">
						<p>주소<mark>*</mark></p>
						<small>(타이어 장착 희망 지역 및 기념품 발송을 위한 정보입니다.)</small>
						<input type="text" onclick="win_zip('fwrite', 'mem_zipcode', 'mem_address1', 'mem_address2', 'mem_address3', 'mem_address4');" name="mem_address1" id="mem_address1" value="<?php echo set_value('mem_address1', element('mem_address1', element('post', $view))); ?>" class="input-class input" readonly="readonly" label="주소" />
					</div>
					<div class="item">
						<p>활동 커뮤니티 공식명 1</p>
						<input type="text" name="etc_val1" value="<?php echo set_value('etc_val1', element('etc_val1', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>활동 커뮤니티 주소 1 (URL)</p>
						<input type="text" name="etc_val2" value="<?php echo set_value('etc_val2', element('etc_val2', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>활동 커뮤니티 공식명 2</p>
						<input type="text" name="etc_val3" value="<?php echo set_value('etc_val3', element('etc_val3', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>활동 커뮤니티 주소 2 (URL)</p>
						<input type="text" name="etc_val4" value="<?php echo set_value('etc_val4', element('etc_val4', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>블로그 주소 (URL)</p>
						<input type="text" name="etc_val5" value="<?php echo set_value('etc_val5', element('etc_val5', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>인스타그램 ID</p>
						<input type="text" name="etc_val6" value="<?php echo set_value('etc_val6', element('etc_val6', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>유튜브 주소</p>
						<input type="text" name="etc_val7" value="<?php echo set_value('etc_val7', element('etc_val7', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>유튜브 닉네임</p>
						<input type="text" name="etc_val8" value="<?php echo set_value('etc_val8', element('etc_val8', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						<p>페이스북 주소</p>
						<input type="text" name="etc_val9" value="<?php echo set_value('etc_val9', element('etc_val9', element('post', $view))); ?>" class="input-class" />
					</div>
					<div class="item">
						
						<p>자동차 제조사<mark>*</mark></p>
						<select name="etc_val10" class="input-class option" label="자동차 제조사" />
							<option value="">선택</option>

							<?php 
							$etc_val10 = array("메르세데스-벤츠",
"BMW",
"GM대우",
"기아",
"닛산",
"람보르기니",
"랜드로버",
"렉서스",
"로터스",
"르노삼성",
"링컨",
"마세라티",
"마이바흐",
"미니",
"미쓰비시",
"벤틀리",
"볼보",
"사브",
"쉐보레",
"스마트",
"스즈키",
"시트로엥",
"쌍용",
"아우디",
"애스턴마틴",
"인피니티",
"재규어",
"지프",
"캐딜락",
"크라이슬러",
"토요타",
"페라리",
"포드",
"포르쉐",
"폭스바겐",
"푸조",
"피아트",
"현대",
"혼다",)
							 ?>
							 <?php 
							 foreach($etc_val10 as $value){

							 	echo "<option ".set_select('etc_val10', $value)." >".$value."</option>";
							 }
							  ?>
							
						</select>
					</div>
					<div class="item">
						<p>차량 모델명<mark>*</mark></p>
						<input type="text" name="etc_val11" value="<?php echo set_value('etc_val11', element('etc_val11', element('post', $view))); ?>" class="input-class input" label="차량 모델명" />
						<summary class="ex">예) E클래스, G80, 5시리즈</summary>
					</div>
					<div class="item">
						<p>타이어 사이즈(전륜)<mark>*</mark></p>
						<div class="col-group">
							<div class="col">
								<select name="front_size_1" id="front_size_1" class="input-class option" label="전륜 단면폭" />
									<option value="">단면폭</option>
									
									<option <?php echo set_select('front_size_1','125'); ?>>125</option>
									<?php 
									for($i=145 ; $i <= 325 ;$i+=10){

										echo  "<option ".set_select('front_size_1',$i)." >".$i."</option>";
									}
									?>
								</select>
							</div>
							<div class="col">
								<select name="front_size_2" id="front_size_2" class="input-class option" label="전륜 편평비" />
									<option value="">편평비</option>
									<option  <?php echo set_select('front_size_2','R'); ?>>R</option>
									<?php 
									for($i=80 ; $i >= 30 ;$i-=5){

										echo  "<option ".set_select('front_size_2',$i)." >".$i."</option>";
									}
									?>
								</select>
							</div>
							<div class="col">
								<select name="front_size_3" id="front_size_3" class="input-class option" label="전륜 인치" />
									<option value="">인치</option>

									<?php 
									for($i=12 ; $i <= 22 ;$i++){

										echo  "<option ".set_select('front_size_3',$i)." >".$i."</option>";
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="item">
						<p>타이어 사이즈(후륜)<mark>*</mark></p>
						<div class="col-group">
							<div class="col">
								<select name="back_size_1" id="back_size_1" class="input-class option" label="후륜 단면폭" />
									<option value="">단면폭</option>
									<option <?php echo set_select('back_size_1','125'); ?>>125</option>
									<?php 
									for($i=145 ; $i <= 325 ;$i+=10){

										echo  "<option ".set_select('back_size_1',$i)." >".$i."</option>";
									}
									?>
								</select>
							</div>
							<div class="col">
								<select name="back_size_2" id="back_size_2" class="input-class  option" label="후륜 편평비" />
									<option value="">편평비</option>
									<option  <?php echo set_select('back_size_2','R'); ?>>R</option>
									<?php 
									for($i=80 ; $i >= 30 ;$i-=5){

										echo  "<option ".set_select('back_size_2',$i)." >".$i."</option>";
									}
									?>
								</select>
							</div>
							<div class="col">
								<select name="back_size_3" id="back_size_3" class="input-class option" label="후륜 인치" />
									<option value="">인치</option>

									<?php 
									for($i=12 ; $i <= 22 ;$i++){

										echo  "<option ".set_select('back_size_3',$i)." >".$i."</option>";
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?=$AD_DIR?>/images/db_foot.jpg" alt="" />
					</div>
					<div class="item">
						<p class="summary">체험단에 임하는 각오' 혹은<br/>내가 반드시 뽑혀야만 하는 이유'를 자유롭게 기술해주세요</p>

						<textarea class="input-class" rows="5" id="mlh_text" name="mlh_text" label="체험단에 임하는 각오"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>

						<textarea class="input-class" rows="5" id="mlh_text2" name="mlh_text2" style="display:none;"></textarea>
						
						<ul>
							<li>개인정보의 수집 이용목적 : 이벤트 참여에 따른 본인확인, 기념품 배송</li>
							<li>수집하는 개인정보의 항목 : 이름, 핸드폰, 이메일, 활동 커뮤니티, SNS, 자동차 정보, 체험각오</li>
							<li>개인정보의 보유 및 이용기간 : 이용 목적이 달성된 후에는 예외 없이 해당 정보를 지체 없이 파기</li>
						</ul>
						<label class="checkbox">
							<input type="checkbox" name="agree" id="agree" /> 개임정보 수집/이용에 동의합니다.
						</label>
					</div>
					<div class="item">
						<div class="btn-group">
							<button type=""><img src="<?=$AD_DIR?>/images/db_btn.png" alt=""/></button>
							<div class="sns-group">
								<a href="https://www.facebook.com/continentaltirekorea/" target="_blank" class="ic ic-fb"></a>
								<a href="https://www.instagram.com/continentaltirekorea/" target="_blank" class="ic ic-insta"></a>
								<a href="https://www.youtube.com/channel/UCBm5wgsfmQxQ_SuerJ55SFw" target="_blank" class="ic ic-yt"></a>
								<p>콘티넨탈 타이어 코리아 공식 SNS</p>
							</div>
							<a href="https://www.continental-tires.co.kr/car" target="_blank"><img src="<?=$AD_DIR?>/images/link_btn.jpg" alt=""/></a>
						</div>
					</div>
				</div>
			</div>
		</section>


	</div>

</body>
</html>
<script>
        // popup
        

        

        // 한글 조사변경
        function getPostWord(str, firstVal, secondVal) {
            try {
                var lastStr = str[str.length - 1].charCodeAt(0);
                if (lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if (lastCharIndex > 0) {
                    if (firstVal === "으로" && lastCharIndex === 8)
                        str += secondVal;
                    else
                        str += firstVal;
                } else {
                    str += secondVal;
                }
            } catch (e) {
                console.error(e);
            }

            return str;
        }
        // firstVal :: 으로 / 을 / 이 / 은 / 과
        // secondVal :: 로 / 를 / 가 / 는 / 와 

        function submitContents(f) {
            var flag=false;
            var href;

            

			

			

            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            $('.option option:selected').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).parent().attr('label'),'을','를') + '입력해 주세요');
                    $(this).parent().focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_click/' + $('#post_id').val()  ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());

                        $("#mlh_text2").val("활동 커뮤니티 공식명 1 :"+$("input[name='etc_val1']").val()+"\n활동 커뮤니티 주소 1 (URL) :"+$("input[name='etc_val2']").val()+"\n활동 커뮤니티 공식명 2 :"+$("input[name='etc_val3']").val()+"\n활동 커뮤니티 주소 2 (URL) :"+$("input[name='etc_val4']").val()+"\n블로그 주소 (URL) :"+$("input[name='etc_val5']").val()+"\n인스타그램 ID :"+$("input[name='etc_val6']").val()+"\n유튜브 주소 :"+$("input[name='etc_val7']").val()+"\n유튜브 닉네임 :"+$("input[name='etc_val8']").val()+"\n페이스북 주소 :"+$("input[name='etc_val9']").val()+"\n자동차 제조사 :"+$("select[name='etc_val10'] option:selected").val()+"\n차량 모델명 :"+$("input[name='etc_val11']").val() +"\n타이어 사이즈(전륜) :"+$("#front_size_1").val()+" - "+$("#front_size_2").val()+" - "+$("#front_size_3").val() +"\n타이어 사이즈(후륜) :"+$("#back_size_1").val()+" - "+$("#back_size_2").val()+" - "+$("#back_size_3").val() );
                        
                    }
                });

                

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
            return false;
        }

        function submitContents_(f) {

            var flag=false;
            var href;

            

            $('.input_').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree_"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_click/' + $('#post_id_').val() ;

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
             
            href = cb_url + '/postact/adpot_query_curl/<?php echo $jid?>';

            $.ajax({
                async : false,
                url : href,
                data : {mlh_name : '<?php echo $this->session->flashdata('mlh_name') ?>',mlh_mobileno : '<?php echo $this->session->flashdata('mlh_mobileno') ?>', csrf_test_name : cb_csrf_hash},
                type : 'post',
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
                $('.loading').hide();
                
        <?php } ?>
    </script>


