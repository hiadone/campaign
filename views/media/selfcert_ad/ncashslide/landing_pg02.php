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
    <title>중고나라 & 하이마트 룰렛이벤트!</title>
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/reset.css?_u=<?php echo date('ymdihs') ?>">
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/common.css?_u=<?php echo date('ymdihs') ?>">
    
</head>
<body>
    <div class="wrap roullete_event02">
        <!-- 이미지 -->
        <div class="img_box">
            <h1 class="blind">꽝없는 룰렛 이벤트 행운의 룰렛</h1>
            <img src="<?php echo $ad_dir ?>/images/landing_02_top.png?u_=<?php echo date('Ymdhis')?>" alt="제목이미지">
        </div>
        <!-- 앱다운로드 -->
		

        <div class="btn_box download">
            <!-- <a href="" class="btn_img"><img src="images/landing_02_btn.png" alt="앱다운로드하러가기"></a> -->
            <div class="download_btn_box">
                <div class="download_tit">
                    <strong>하이마트앱</strong> 설치 후 실행하기
                    <div style="font-size: 13px; margin-top: 3%; color: #ad0000; line-height: 1.4;">※ <b>하이마트앱 설치후 , 반드시 실행 까지 완료 하여샤 합니다.</b></div>
                </div>
                <a  class="download_btn" id="btn_android">
                    <img src="<?php echo $ad_dir ?>/images/icon_android.png?u_=<?php echo date('Ymdhis')?>" alt="안드로이드 아이콘" class="icon" > 
                    <span>안드로이드 앱 다운로드</span>
                </a>
                <a  class="download_btn" id="btn_ios">
                    <img src="<?php echo $ad_dir ?>/images/icon_mac.png?u_=<?php echo date('Ymdhis')?>" alt="IOS아이콘" class="icon" > 
                    <span>IOS 앱 다운로드</span>
                </a>
            </div>
        </div>

        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/landing_02_bottom.png?u_=<?php echo date('Ymdhis')?>" alt="이벤트 정보">
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
<script>
    
    $("#btn_android").click(function(){
        $('.loading').show();
        $.ajax({
          type: "POST",
          url: "/postact/msh_status_chk/<?php echo element('post_id',element('selfcert', $view))?>",
          data: {            
                msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(response) {
            if(response.result_code=="2"){
                alert(response.Message);
                $('.loading').hide();
                return false;    
            }
            if(response.result_code=="1"){
                var objPopup=  window.open("http://tracking.performix.co.kr/aff_c?offer_id=616&aff_id=1042&aff_sub=<?php echo element('code', $view);?>", "_blank");
                window.setTimeout(function() {

                    if(objPopup!= null) objPopup.close();
                    $('.loading').hide();
                    location.href="<?php echo base_url('media/reward_render/'.element('brd_key', $view).'/'.element('code', $view)) ?>";            
                }, 8000);
                return false;    
            }

            if(response.result_code=="3"){
                
                
                    $('.loading').hide();
                location.href = "<?php echo base_url('media/reward_render/'.element('brd_key', $view).'/'.element('code', $view)) ?>";            
                
                return false;    
            }

          }
        });
    });


    $("#btn_ios").click(function(){
        $('.loading').show();
        $.ajax({
          type: "POST",
          url: "/postact/msh_status_chk/<?php echo element('post_id',element('selfcert', $view))?>",
          data: {            
                msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(response) {
            if(response.result_code=="2"){
                alert(response.Message);
                $('.loading').hide();
            }
            if(response.result_code=="1"){
                var objPopup=  window.open("http://tracking.performix.co.kr/aff_c?offer_id=670&aff_id=1042&aff_sub=<?php echo element('code', $view);?>", "_blank");
                window.setTimeout(function() {

                    if(objPopup!= null) objPopup.close();
                    $('.loading').hide();
                    location.replace("<?php echo base_url('media/reward_render/'.element('brd_key', $view).'/'.element('code', $view)) ?>");            
                }, 8000);
                return false;    
            }

            if(response.result_code=="3"){
                
                
                    $('.loading').hide();
                location.replace("<?php echo base_url('media/reward_render/'.element('brd_key', $view).'/'.element('code', $view)) ?>");            
                
                return false;    
            }

          }
        });
    });
</script>


