<?php
    $ad_dir  = element('view_skin_url', $layout);
 if ($this->cbconfig->item('use_selfcert') && ($this->cbconfig->item('use_selfcert_phone') OR $this->cbconfig->item('use_selfcert_ipin'))) {
        $this->managelayout->add_js(base_url('assets/js/member_selfcert.js'));
    }


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
   <meta http-equiv="Cache-Control" content="no-cache">
   <meta http-equiv="Expires" content="-1">
    <title>중고나라 & 하이마트 룰렛이벤트!</title>
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/reset.css?_u=<?php echo date('ymdihs') ?>">
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/common.css?_u=<?php echo date('ymdihs') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
</head>
<body>
    <div class="wrap roullete_event01">
        <div class="img_box">
            <h1 class="blind">꽝없는 룰렛 이벤트 행운의 룰렛</h1>
            <img src="<?php echo $ad_dir ?>/images/landing_01_top.png?u_=<?php echo date('Ymdhis')?>" alt="이벤트제목">
        </div>
		<div class="landing_readme">
            <div class="readme_bg">
                <h2 class="readme_tit">
                <img src="<?php echo $ad_dir ?>/images/icon_notice.svg?u_=<?php echo date('Ymdhis')?>" alt="아이콘" class="readme_icon"> 꼭 읽어주세요!
                </h2>
                <div class="readme_txt">
                - <b>하이마트앱 설치후 , 반드시 실행 까지 완료 하셔야 합니다.</b> <br>
                - 룰렛 이벤트는 중고나라 회원당 1회만 참여 가능합니다.
                </div>
            </div>
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/landing_01_midbg.png?u_=<?php echo date('Ymdhis')?>" alt="배경이미지">
        </div>
		
        <div class="userid_form">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" id="redirecturl" value="<?php echo base_url('media/step/selfcert_ad/himart_roulette/landing_pg02') ?>">
            <input type="hidden" name="selfcert_type" id="selfcert_type" value="" />


                   
            
                <!-- <input type="text" name="msh_mem_id" id="msh_mem_id" placeholder="중고나라 ID를 입력하세요" class="inp userid_inp"> -->
                <a  onClick="view_event_register();" class="btn_img"><img src="<?php echo $ad_dir ?>/images/landing_01_btn.png?u_=<?php echo date('Ymdhis')?>" alt="이벤트 참여하기"></a>


                 <div class="user_agree">
                    <div class="agree_tit01">
                            <input type="checkbox" name="" id="agree" style="   width: 20px;height: 20px;border: 2px solid #bcbcbc;"><label for="agree">개인정보수집 이용 동의 <span class="txt_point">(필수)</span></label>
                    </div>
                    <div class="btn_box">
                        <button type="button" class="btn_agree_info" onclick="openpopup('agreeInfo');">개인정보 취급방침 보기</button>
                    </div>
                    

                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- 유의사항 -->
        <div class="event_notice">
            <h2 class="notice_tit"><img src="<?php echo $ad_dir ?>/images/icon_notice.svg?u_=<?php echo date('Ymdhis')?>" alt="아이콘" class="notice_icon"> 이벤트 유의사항</h2>
            <ul class="notice_list">
                
                <li class="notice_item">- 중고나라 비회원은 경품 지급이 불가합니다.</li>
                <li class="notice_item">- 룰렛 이벤트는 하이마트앱 설치후 최초 실행시 참여 가능합니다</li>
                <li class="notice_item">- 룰렛 이벤트는 중고나라 회원당 1회만 참여 가능합니다. (중복 참여 불가)</li>
                <li class="notice_item">- 수집된 개인정보는 경품 전달을 위한 목적으로만 활용됩니다.</li>
                <li class="notice_item">- 개인정보 수집에 모두 동의하셔야 최종 응모가 완료됩니다.</li>
                <li class="notice_item">- 경품지급일은 내부사정에 의해 변경될 수 있습니다.</li>
                <li class="notice_item">- 부정적인 방법으로 참여시 이벤트 참여가 무효 처리됩니다.</li>
                <li class="notice_item">- 14세 미만은 이벤트 참여가 불가합니다.</li>                
                <li class="notice_item">- 문의 사항은 이벤트 페이지내 [문의하기]를 통해 문의 바랍니다. </li>
            </ul>
        </div>

        <div class="btn_cs_box">
            <a href="<?php echo base_url('media_write/b-2-1') ?>" class="btn_csboard"  target="_blank">문 의 하 기 <span class="arrow"></span></a>
        </div>
        <div class="popup_back">
            <div class="popup_box popup_box03" style="display: block;">
                <div class="user_agree">
                    <div class="agree_info" id="agreeInfo">
                            <h3 class="agree_tit02">개인정보 처리방침</h3>
                            <div class="txt_box">하이애드원'은 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.						

하이애드원'은(는) 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.																	
○ 본 방침은부터 2019년 1월 1일부터 시행됩니다.																	
																	
<strong>1. 개인정보의 처리 목적</strong>			
'하이애드원'은 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구할 예정입니다.														
가. 민원사무 처리																	
민원인의 신원 확인, 민원사항 확인 등을 목적으로 개인정보를 처리합니다.																	
나. 마케팅 및 광고에의 활용																	
이벤트 및 광고성 정보 제공 및 참여기회 제공 등을 목적으로 개인정보를 처리합니다.																	

<strong>2. 개인정보 파일 현황</strong>																	
1. 개인정보 파일명 : 룰렛 이벤트																	
- 개인정보 항목 : 휴대전화번호, 이름																	
- 수집방법 : 경품행사																	
- 보유근거 : 이벤트 응모, 경품 발송, 이벤트 관련 문의 응대																	
- 보유기간 : 수집일로부터 1년																
- 관련법령 : 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년						

<strong>3. 개인정보의 처리 및 보유 기간	</strong>																
① ('하이애드원')은(는) 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의 받은 개인정보 보유,이용기간 내에서 개인정보를 처리,보유합니다.																	
② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.																	
와 관련한 개인정보는 수집.이용에 관한 동의일로부터까지 위 이용목적을 위하여 보유.이용됩니다.																	
-보유근거 : 이벤트 응모, 경품 발송, 이벤트 관련 문의 응대																	
-관련법령 : 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년						

<strong>4. 개인정보의 제3자 제공에 관한 사항</strong>																	
① (하이애드원)은 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.																	
② (하이애드원)은 다음과 같이 개인정보를 제3자에게 제공하고 있습니다.																	
- 개인정보를 제공받는 자 : 중고나라																	
- 제공받는 자의 개인정보 이용목적 : 휴대전화번호, 로그인ID, 이름																	
- 제공받는 자의 보유.이용기간: 1년												

<strong>5. 개인정보처리 위탁</strong>																	
① ('중고나라')은(는) 원활한 개인정보 업무처리를 위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다.																	
 - 위탁받는 자 (수탁자) : 하이애드원																	
 - 위탁하는 업무의 내용 : 이벤트 응모, 경품 발송, 이벤트 관련 문의 응대																	
 - 위탁기간 : 수집일로부터 1년															
② (하이애드원)은 위탁계약 체결시 개인정보 보호법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 기술적․관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리․감독, 손해배상 등 책임에 관한 사항을 계약서 등 문서에 명시하고, 수탁자가 개인정보를 안전하게 처리하는지를 감독하고 있습니다.																		
③ 위탁업무의 내용이나 수탁자가 변경될 경우에는 지체없이 본 개인정보 처리방침을 통하여 공개하도록 하겠습니다.											

<strong>6. 정보주체와 법정대리인의 권리·의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다.	</strong>																
① 정보주체는 하이애드원에 대해 언제든지 개인정보 열람,정정,삭제,처리정지 요구 등의 권리를 행사할 수 있습니다.																	
② 제1항에 따른 권리 행사는하이애드원에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 하이애드원은(는) 이에 대해 지체 없이 조치하겠습니다.																	
③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.																	
④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.																	
⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.																	
⑥ 하이애드원은(는) 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.																	

<strong>7. 처리하는 개인정보의 항목 작성 	</strong>																
① (하이애드원)은 다음의 개인정보 항목을 처리하고 있습니다.																	
- 필수항목 : 휴대전화번호, 이름														

<strong>8. 개인정보의 파기</strong>					
('하이애드원')은(는) 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.												
-파기절차																	
이용자가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.																	
-파기기한																	
이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.																	
-파기방법																	
전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다.																	
종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.			

<strong>9. 개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항</strong>																	
하이애드원 은 정보주체의 이용정보를 저장하고 수시로 불러오는 ‘쿠키’를 사용하지 않습니다.																

<strong>10. 개인정보 보호책임자 작성 </strong>																	
① 하이애드원(http://www.hiadone.com) 은(는) 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.																	
▶ 개인정보 보호책임자																	
성명 :나보윤																	
직급 :팀장																	
연락처 :02-2105-7414, boyoon@hiadone.com,																	
※ 개인정보 보호 담당부서로 연결됩니다.																	
▶ 개인정보 보호 담당부서																	
부서명 :개발팀																	
담당자 :이현정																	
연락처 :02-2105-7417, mkt_tech@hiadone.com,																	
② 정보주체께서는 하이애드원(‘http://www.hiadone.com/’이하 ‘하이애드원) 의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 하이애드원(‘http://www.hiadone.com/’이하 ‘하이애드원) 은(는) 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.																	

<strong>11. 개인정보 처리방침 변경 	</strong>																
① 이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.												

<strong>12. 개인정보의 안전성 확보 조치 </strong>		
('하이애드원')은(는) 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.															
1. 개인정보의 암호화																	
이용자의 개인정보는 비밀번호는 암호화 되어 저장 및 관리되고 있어, 본인만이 알 수 있으며 중요한 데이터는 파일 및 전송 데이터를 암호화 하거나 파일 잠금 기능을 사용하는 등의 별도 보안기능을 사용하고 있습니다.				
2. 문서보안을 위한 잠금장치 사용																	
개인정보가 포함된 서류, 보조저장매체 등을 잠금장치가 있는 안전한 장소에 보관하고 있습니다.	
                            </div>
                           
                        </div>
                </div>
               
                <div class="btn_box">
                    <button class="popup_btn" onclick="closepopup('agreeInfo')">닫 기</button>
                </div>
            </div>
    </div>
    
    <div id="btn_mem_selfcert_phone" ></div>
</body>

</html>

<script type="text/javascript">
//<![CDATA[
    


function view_event_register() {

    var flag=false;
    var flag_=false;
   
 

    if($('input:checkbox[id="agree"]').is(":checked")){
        flag=true;        
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
    
    if(flag){
        if (!$('#post_id').val()) {
                return false;
            }

                $.ajax({
                  type: "POST",
                  url: "/postact/msh_mobileno_chk/"+$('#post_id').val(),
                  data: {            
                        csrf_test_name: cb_csrf_hash
                    },
                  dataType: "json",
                  cache: false,
                  async: false,
                  success: function(response) {
                    if(response.result_code=="2"){
                        alert(response.Message);
                        flag_ = true;
                        return false;    
                    }

                    if(response.result_code=="1"){
                        
                        location.href="<?php echo base_url('media/step/selfcert_ad/himart_roulette/landing_pg02') ?>/"+response.Message;            
                        flag_ = true;
                        return false;    
                    }

                    if(response.result_code=="3"){
                        
                        
                        
                        location.href = "<?php echo base_url('media/reward_render/selfcert_ad') ?>/"+response.Message;            
                        flag_ = true;
                        return false;    
                    }

                  }
                });
            if(flag_) return false;     
   
            href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

            $.ajax({
                url : href,
                type : 'get',
                dataType : 'json',
                success : function(data) {
                    
                }
            });

            var openurl = cb_url + '/selfcert/phone';

            if ($('#redirecturl').val()) {
                openurl += '?redirecturl=' +  $('#redirecturl').val();

                if ($('#post_id').val()) {
                openurl += '&post_id=' +  $('#post_id').val();
                }
            } else if ($('#post_id').val()) {
                openurl += '?post_id=' +  $('#post_id').val();
            } else return;

            

            if ($('#msh_mem_id').val()) {
                openurl += '&msh_mem_id=' +  $('#msh_mem_id').val();
            }

            
            
            location.href=openurl;
            
    }
    else return false;
}
  function openpopup(boxId){
            $('.popup_back').show();
            $('#'+boxId).show();
        }
        function closepopup(boxId){
            $('.popup_back').hide();
            $('#'+boxId).hide();
        }
//]]>
</script>


