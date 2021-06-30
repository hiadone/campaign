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
            <button type="button" class="btn btn_full btn_main" id="btn_main" >참 여 완 료</button>
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
            <div class="popup_container popup_normal" id="pop01">
                <div class="popup_content">
                    <div class="popup_text">이벤트 참여가 완료되었습니다</div>
                    <div class="popup_text_sub">대박복권은 <span class="txt_emph">2019.12.03(화)</span> 일괄지급 예정입니다.</div>
                </div>
                <div class="btn_box">
                    <button class="btn_popup btn-dark" onclick="closePopup('pop01')">확 인</button>
                </div>
            </div>
            <div class="popup_container popup_normal" id="pop02">
                <div class="popup_content">
                    <div class="popup_text">
                        <div class="popup_text">이벤트 참여가 최종 확인 되면</div>                        
                        <div class="popup_text_sub">대박복권은 <span class="txt_emph">2019.12.03(화)</span> 일괄지급 됩니다.</div>
                        
                    </div> 
                </div>
                <div class="btn_box">
                    <button class="btn_popup btn-dark" onclick="closePopup('pop02')">확 인</button>
                </div>
            </div>
            <div class="popup_container popup_normal" id="pop03">
                <div class="popup_content">
                    <div class="popup_text">이미 참여하셨습니다.</div>
                    <div class="popup_text_sub">대박복권은 <span class="txt_emph">2019.12.03(화)</span> 일괄지급 예정입니다.</div>
                </div>
                <div class="btn_box">
                    <button class="btn_popup btn-dark" onclick="closePopup('pop03')">확 인</button>
                </div>
            </div>
            <div class="popup_container popup_normal" id="pop04">
                <div class="popup_content">
                    <div class="popup_text">잘못된 접근입니다. 이벤트에 다시 참여해 주세요</div>
                    
                </div>
                <div class="btn_box">
                    <button class="btn_popup btn-dark" onclick="closePopup('pop04')">확 인</button>
                </div>
            </div>
        </div>

        
    </div>

    <!-- popup scirpt 임시 -->
    <script>
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

 $("#btn_main").click(function(){  
 
        $.ajax({
          type: "POST",
          url: "/postact/pmang_chk/<?php echo element('post_id',element('selfcert', $view))?>",
          data: {            
                msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(response) {
            if(response.resultcode=="1"){
                 openPopup('pop01');
            } else if(response.resultcode=="3"){
                openPopup('pop03');
            } else if(response.resultcode=="2"){
                openPopup('pop02');
            } else {
                openPopup('pop04');
            }

          }
        });
    });

<?php /* ?>
 $(document).ready(function(){
            $.ajax({
              type: "POST",
              url: "/postact/pmangnhimart_query_curl/<?php echo element('post_id',element('selfcert', $view))?>",
             data: {            
                    msh_key :"<?php echo element('msh_key',element('selfcert', $view))?>" ,                    
                    csrf_test_name: cb_csrf_hash
                },
              dataType: "json",
              cache: false,
              async: false,
              success: function(response) {
                if(response.resultcode=="2"){
                    
                    
                    return false;    
                }
                
              }
            });
        });
        <?php */ ?>
    </script>
</body>
</html>