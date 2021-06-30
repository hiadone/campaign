<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
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

    <title>하이마트앱 설치후 실행하면 게임머니&복권 무조건 100% 지급!</title>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">        
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/common.css?_u=<?php echo date('ymdihs') ?>">
    
</head>
<body>

    <div class="wrap">
        <div class="event_head">
            <h1 class="blind">하이마트 앱설치 & 실행하면 게임머니 or 복권 지급!!</h1>
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/landing_head.png" alt="" class="img"></div>
        </div>
        <div class="btn_box btn_applink">
            <a id="btn_android" class="btn btn_full btn_main"><i class="material-icons icon_font">android</i> 하이마트 앱 설치하러가기<i class="material-icons icon_font">keyboard_arrow_right</i></a>
        </div>
        <div class="event_info_container">
            <h2 class="blind">이벤트 정보</h2>
            <dl class="event_info_list">
                <div class="row clearfix">
                    <dt class="event_info_dt">기 간</dt>
                    <dd class="event_info_dd">2019.11.22(금) ~ 11.29(금)</dd>
                </div>
                <div class="row clearfix">
                    <dt class="event_info_dt">참여대상</dt>
                    <dd class="event_info_dd">하이마트앱 설치 후 최초 <span class="txt_bold">실행회원</span></dd>
                    <dd class="event_info_dd_sub txt_emph">※ 앱실행 후, 본 이벤트 페이지로 돌아오셔서 참여완료 버튼을 클릭해주세요.</dd>
                </div>
                <div class="row clearfix">
                    <dt class="event_info_dt">혜 택</dt>
                    <dd class="event_info_dd">뉴맞고 최대 1억냥 대박 복권 (응모자 전원 지급)</dd>
                </div>
                <div class="row clearfix">
                    <dt class="event_info_dt">지급일</dt>
                    <dd class="event_info_dd">2019.12.03(화) 일괄지급(예정)</dd>
                </div>
            </dl>
        </div>
        <div class="event_rule_container">
            <h2 class="title">참여방법</h2>
            <ol class="rules_list clearfix">
                <li class="rule_item">
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/rule01.jpg" alt="step1" class="img"></div>
                    <div class="txt_box">하이마트 앱 설치후 실행하기</div>
                </li>
                <li class="rule_item">
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/rule02.jpg" alt="step2" class="img"></div>
                    <div class="txt_box">앱 실행후 메인페이지 확인하기</div>
                </li>
                <li class="rule_item">
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/rule03.jpg" alt="step3" class="img"></div>
                    <div class="txt_box">본 이벤트 페이지로 와서 참여완료클릭</div>
                </li>
            </ol>
        </div>
        <div class="event_notice_container">
            <h2 class="title">
                <i class="material-icons icon_font txt_emph">error_outline</i>꼭 읽어보세요<span class="txt_italic">!</span>
            </h2>
            <ul class="event_notice_list">
                <li class="event_notice_item txt_emph">1인당 1회 응모 가능하며, 동일한 ID의 중복 응모는 불가합니다.</li>
                <li class="event_notice_item">안드로이드에서만 설치가 가능합니다.</li>                
                <li class="event_notice_item">이벤트는 하이마트앱 설치후 최초 실행시 참여 가능합니다.</li>
                <li class="event_notice_item">지급일은 내부사정에 의해 변경될 수 있습니다.</li>
                <li class="event_notice_item">부정적인 방법으로 참여시 이벤트 참여가 무효 처리됩니다.</li>
                <li class="event_notice_item">문의 사항은 이벤트 페이지내 [문의하기]를 통해 문의바랍니다.</li>
            </ul>
        </div>
        <div class="btn_box btn_cslink">
            <a href="http://dbpopcon.com/media_write/b-2-1" class="btn btn_full btn-primary">문 의 하 기<i class="material-icons icon_font">keyboard_arrow_right</i></a>
        </div>
        <div class="popup_wrap">
            <div class="popup_container popup_imgonly01" id="landingPop">
                <div class="popup_content img_box">
                    <a id="btn_android_2"><img src="<?php echo $ad_dir ?>/images/landing_pop.jpg" alt="하이마트 앱설치후 실행하면 뉴맞고 최대 1억냥 대박복권 무조건 100% 지급" class="img"></a>
                </div>
                <div class="btn_box">
                    <a id="btn_android_1" class="btn_popup btn_main">게임머니 받으러가기 <i class="material-icons icon_font">keyboard_arrow_right</i></a>
                </div>
                <div class="btn_close_box">
                    <!-- 마켓 링크영역 -->
                    <a class="btn_close" id="btn_android_3">
                        <i class="material-icons icon_font">close</i>
                    </a>
                    <!-- 실제 닫기버튼 -->
                    <button class="btn_close_hide" onclick="closePopup('landingPop')"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="loading" style="display:none">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
    
</body>
</html>

<script type="text/javascript">
//<![CDATA[
    

$("#btn_android,#btn_android_1,#btn_android_2,#btn_android_3").click(function(){

    var flag=true;
    
   
    
    // if(!trim($('input[name="uuid"]').val())) {       
    //     alert('캐시 슬라이드 ID 를 입력해 주세요');
    //     $('input:[name="uuid"]').focus();
    // }

    // if($('input:checkbox[id="agree"]').is(":checked")){
    //     flag=true;        
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');

    if(flag){
        $('.loading').show();
        $.ajax({
          type: "POST",
          url: "/postact/msh_key_set/<?php echo element('post_id',element('post', $view));?>",
         data: {            
                adiscopePayload :"<?php echo $this->input->get('adiscopePayload') ?>" ,
                adid :"<?php echo $this->input->get('adid') ?>" ,
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(response) {
            
            if(response.resultcode=="2"){
                alert(response.message);
                $('.loading').hide();
                return false;    
            }
            if(response.resultcode=="1"){
                var objPopup=  window.open("http://tracking.performix.co.kr/aff_c?offer_id=770&aff_id=1042&aff_sub="+response.msh_key, "_blank");
                // var objPopup=  window.open("http://tracking.performix.co.kr/aff_c?offer_id=784&aff_id=1042&aff_sub="+response.msh_key, "_blank");
                window.setTimeout(function() {

                    if(objPopup!= null) objPopup.close();
                    $('.loading').hide();
                    location.replace("<?php echo base_url('media/reward_render/'.element('post_id',element('post', $view))) ?>/"+response.msh_key);
                }, 8000);
                return false;    
            }

            if(response.resultcode=="3"){
                
                
                    $('.loading').hide();                
                    location.replace("<?php echo base_url('media/reward_render/'.element('post_id',element('post', $view))) ?>/"+response.msh_key);
                return false;    
            }

          }
        });
    }
});






// popup open close 
var elPopupWrap = document.querySelector('.popup_wrap');

function openPopup(elId){
    var el = document.getElementById(elId);
    elPopupWrap.style.display = "block";
    el.style.display = "block";
}
function closePopup(elId){
    var el = document.getElementById(elId);
    elPopupWrap.style.display = "none";
    el.style.display = "none";
}
openPopup('landingPop');

//]]>
</script>
