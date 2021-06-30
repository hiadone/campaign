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
    
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/first_landing_sian02.css?_u=<?php echo date('ymdihs') ?>">    


</head>
<body>

    <div class="wrap">
        <div class="event_head">
            <h1 class="blind">하이마트 앱설치 & 실행하면 게임머니 or 복권 지급!!</h1>
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/landing_head.png" alt="" class="img"></div>
        </div>
        <div class="btn_box btn_applink">
            <a id="btn_android" class="btn btn_full btn_main">하이마트 앱 설치하러가기<i class="material-icons icon_font">keyboard_arrow_right</i></a>
        </div>
        <div class="event_info_container">
            <h2 class="blind"">이벤트 정보</h2>
            <dl class="event_info_list">
                <div class="row clearfix">
                    <dt class="event_info_dt">기 간</dt>
                    <dd class="event_info_dd">2019.11.18(월) ~ 11.24(일)</dd>
                </div>
                <div class="row clearfix">
                    <dt class="event_info_dt">참여대상</dt>
                    <dd class="event_info_dd">하이마트앱 설치 후 최초 <span class="txt_bold">실행회원</span></dd>
                    <dd class="event_info_dd_sub txt_emph">※ 앱실행 후, 본 이벤트 페이지로 돌아오셔서 참여완료 버튼을 클릭해주세요.</dd>
                </div>
                <div class="row clearfix">
                    <dt class="event_info_dt">혜 택</dt>
                    <dd class="event_info_dd">피망 맞고 게임머니 (추첨을 통해 00명 증정), 복권 (응모자 전원 지급)</dd>
                </div>
                <div class="row clearfix">
                    <dt class="event_info_dt">지급일</dt>
                    <dd class="event_info_dd">2019.11.00(금) 일괄지급(예정)</dd>
                </div>
            </dl>
        </div>
        <div class="event_rule_container">
            <h2 class="title">참여방법</h2>
            <ol class="rules_list clearfix">
                <li class="rule_item">
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/rule01.png" alt="step1" class="img"></div>
                    <div class="txt_box">하이마트 앱 설치후 실행하기</div>
                </li>
                <li class="rule_item">
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/rule02.png" alt="step2" class="img"></div>
                    <div class="txt_box">앱 실행후 메인페이지 확인하기</div>
                </li>
                <li class="rule_item">
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/rule03.png" alt="step3" class="img"></div>
                    <div class="txt_box">참여완료버튼 클릭</div>
                </li>
            </ol>
        </div>
        <div class="event_notice_container">
            <h2 class="title">
                <i class="material-icons icon_font txt_emph">error_outline</i>꼭 읽어보세요<span class="txt_italic">!</span>
            </h2>
            <ul class="event_notice_list">
                <li class="event_notice_item txt_emph">1인당 1회 응모 가능하며, 동일한 ID의 중복 응모는 불가합니다.</li>
                <li class="event_notice_item">이벤트는 하이마트앱 설치후 최초 실행시 참여 가능합니다.</li>
                <li class="event_notice_item">지급일은 내부사정에 의해 변경될 수 있습니다.</li>
                <li class="event_notice_item">부정적인 방법으로 참여시 이벤트 참여가 무효 처리됩니다.</li>
                <li class="event_notice_item">문의 사항은 이벤트 페이지내 [문의하기]를 통해 문의바랍니다.</li>
            </ul>
        </div>
        <div class="btn_box btn_cslink">
            <a href="http://dbpopcon.com/media_write/b-2-1" class="btn btn_full btn-primary">문 의 하 기<i class="material-icons icon_font">keyboard_arrow_right</i></a>
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
    



$("#btn_android").click(function(){

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
                    
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(response) {
            if(response.resultcode=="2"){
                alert(response.Message);
                $('.loading').hide();
                return false;    
            }
            if(response.resultcode=="1"){
                var objPopup=  window.open("http://tracking.performix.co.kr/aff_c?offer_id=616&aff_id=1042&aff_sub="+response.msh_key, "_blank");
                window.setTimeout(function() {

                    if(objPopup!= null) objPopup.close();
                    $('.loading').hide();
                    location.href="<?php echo base_url('media/reward_render/'.element('post_id',element('post', $view))) ?>/"+response.msh_key;
                }, 8000);
                return false;    
            }

            if(response.resultcode=="3"){
                
                
                    $('.loading').hide();                
                location.href="<?php echo base_url('media/reward_render/'.element('post_id',element('post', $view))) ?>/"+response.msh_key;
                return false;    
            }

          }
        });
    }
});


$("#btn_one").click(function(){

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
                    
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(response) {
            if(response.resultcode=="2"){
                alert(response.Message);
                $('.loading').hide();
                return false;    
            }
            if(response.resultcode=="1"){
                var objPopup=  window.open("http://tracking.performix.co.kr/aff_c?offer_id=738&aff_id=1042&aff_sub="+response.msh_key, "_blank");
                window.setTimeout(function() {

                    if(objPopup!= null) objPopup.close();
                    $('.loading').hide();
                    location.href="<?php echo base_url('media/reward_render/'.element('post_id',element('post', $view))) ?>/"+response.msh_key;
                }, 8000);
                return false;    
            }

            if(response.resultcode=="3"){
                
                
                    $('.loading').hide();                
                location.href="<?php echo base_url('media/reward_render/'.element('post_id',element('post', $view))) ?>/"+response.msh_key;
                return false;    
            }

          }
        });
    }
});

//]]>
</script>