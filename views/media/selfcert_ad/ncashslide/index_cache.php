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
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><meta http-equiv="Pragma" content="no-cache">
   <meta http-equiv="Cache-Control" content="no-cache">
   <meta http-equiv="Expires" content="-1">
    <title>캐시슬라이드 & 하이마트 룰렛이벤트!</title>
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/reset.css?_u=<?php echo date('ymdihs') ?>">
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/common.css?_u=<?php echo date('ymdihs') ?>">
    
</head>
<body>
    <div class="wrap roullete_event01">
        <div class="img_box">
            <h1 class="blind">꽝없는 룰렛 100%당첨 행운의 룰렛</h1>
            <img src="<?php echo $ad_dir ?>/images/landing_01_top.png" alt="꽝없는 룰렛 100%당첨 행운의 룰렛">
        </div>
        <div class="event_info_container01">
            <dl class="info_list">
                <div class="info_box clearfix">
                    <dt class="info_title">기&#32;&#32;간</dt>
                    <dd class="info_txt">10월 25일 ~ 10월 31일 (7일간)</dd>
                </div>
                <div class="info_box clearfix">
                    <dt class="info_title">대&#32;&#32;상</dt>
                    <dd class="info_txt">하이마트앱 설치 후 최초 실행 회원</dd>
                </div>
                <div class="info_box clearfix">
                    <dt class="info_title">적&#32;&#32;립</dt>
                    <dd class="info_txt">캐시는 11월 12일(화) 지급예정</dd>
                </div>
            </dl>
        </div>
        <div class="landing_readme">
            <div class="readme_bg">
                <h2 class="readme_tit">
                <img src="<?php echo $ad_dir ?>/images/icon_notice.svg" alt="아이콘" class="readme_icon"> 꼭 읽어주세요!
                </h2>
                <div class="readme_txt">
                - <b>하이마트앱 설치후, 반드시 실행까지 완료하셔야 합니다.</b> <br>
                - 룰렛 이벤트는 캐시슬라이드 회원당 1회만 참여 가능합니다.
                </div>
            </div>
        </div>
        
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/landing_02_bottom.png" alt="이벤트 정보">
        </div>
        <div class="userid_form download_btn_box">
            
            <div class="btn_box download roullete_event02 ">
                <div class="download_btn_box">
                    <div class="download_tit">
                        <strong>하이마트앱</strong> 설치 후 실행하기
                        <?php echo $this->input->get('store') ?>
                    </div>
                    
                        <?php 

                        if($this->input->get('store')==='one'){
                            echo    '<a class="download_btn" id="btn_one"><img src="'.$ad_dir.'/images/icon_one.png" alt="안드로이드 아이콘" class="icon" ><span>안드로이드 앱 다운로드</span></a>';
                        } else {
                         echo    '<a class="download_btn" id="btn_android"><img src="'.$ad_dir.'/images/icon_android.png" alt="안드로이드 아이콘" class="icon" > 
                        <span>안드로이드 앱 다운로드</span></a>';
                        }    
                        ?>
                        
                        
                    
                    <!-- 원스토어 -->
                    <!-- <a class="download_btn">
                        <img src="<?php echo $ad_dir ?>/images/icon_one.png" alt="IOS아이콘" class="icon" > 
                        <span>원스토어 앱 다운로드</span>
                    </a> -->
                </div>
                <div style="font-size: 13px; margin-top: 3%;  line-height: 1.4; letter-spacing: -0.07em;text-align: left; word-break: keep-all; color: #414141">※ 하이마트앱 설치 후, 반드시 실행까지 완료하셔야 합니다.</div>
                <div style="font-size: 13px; margin-top: 1%;  line-height: 1.4; letter-spacing: -0.07em;text-align: left; word-break: keep-all; color: #414141">※ 앱실행 후, 본 이벤트 페이지로 돌아오셔야 참여하실 수 있습니다.</div>
            </div>
            
        </div>
         <!-- 유의사항 -->
        <div class="event_notice">
            <h2 class="notice_tit"><img src="<?php echo $ad_dir ?>/images/icon_notice.svg" alt="아이콘" class="notice_icon"> 이벤트 유의사항</h2>
            <ul class="notice_list">
                <li class="notice_item">- 캐시슬라이드 비회원은 캐시 적립이 불가합니다.</li>
                <li class="notice_item">- 안드로이드에서만 설치가 가능합니다.</li>
                <li class="notice_item">- 룰렛 이벤트는 하이마트앱 설치후 최초 실행시 참여 가능합니다.</li>
                <li class="notice_item">- 룰렛 이벤트는 캐시슬라이드 회원당 1회만 참여 가능합니다. (중복 참여 불가)</li>
                <li class="notice_item">- 캐시지급일은 내부사정에 의해 변경될 수 있습니다.</li>
                <li class="notice_item">- 부정적인 방법으로 참여시 이벤트 참여가 무효 처리됩니다.</li>
                <li class="notice_item">- 문의 사항은 이벤트 페이지내 [문의하기]를 통해 문의 바랍니다. </li>
                <li class="notice_item">- 5만 캐시 이상의 당첨자는 제세 공과금이 발생됩니다. (본인부담)</li>
            </ul>
        </div>
        <div class="btn_cs_box">
            <a href="http://dbpopcon.com/media_write/b-2-1" class="btn_csboard" target="_blank">문 의 하 기 <span class="arrow"></span></a>
        </div>

        
        
    </div>
    <div class="loading" style="display:none">
            <div class="dot_container" >
                <div class="dot dot01"></div>
                <div class="dot dot02"></div>
                <div class="dot dot03"></div>
            </div>
        </div>    
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

</body>
</html>