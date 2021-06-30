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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=1400px">
  <meta name="robots" content="index,follow">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>호관원프리미엄</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet" href="<?=$AD_DIR?>/css/jquery.bxslider.css?ver=161020">
    <link rel="stylesheet" href="<?=$AD_DIR?>/css/default.css?ver=161020">
    <link rel="stylesheet" href="<?=$AD_DIR?>/css/demo.css" type="text/css">
    <link rel="stylesheet" href="<?=$AD_DIR?>/css/style.css" type="text/css">
  
    
    <script src="http://www.hoguanwon.com/js/jquery.menu.js?ver=161020"></script>
    <script src="http://www.hoguanwon.com/js/common.js?ver=161020"></script>
    <script src="http://www.hoguanwon.com/js/wrest.js?ver=161020"></script>
    <script src="http://www.hoguanwon.com/js/jquery.bxslider.min.js?ver=161020"></script>
    <script src="http://www.hoguanwon.com/js/rolVideo.min.js?ver=161020"></script>
    <style>
        #hd { z-index:9999; }
        #hd_wrapper { z-index:9999; } 

    .alert 
    {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-size:18px;
        font-weight: bold;
    }

    input
    {
      color:#000;
    }

    </style>
</head>

<body>
<!-- 상단 시작 { -->
<div id="hd">

<script type="text/javascript"  src="<?=$AD_DIR?>/js/jquery.smint.js"></script>
<script type="text/javascript">
    
$(document).ready( function() {
    $('.subMenu').smint({
        'scrollSpeed' : 1000
    });
});
</script>
  
    <div id="hd_wrapper"  style="position:fixed; top: -20px;">
         
        <div class="header">
             
            <div id="logo">
                <img src="<?=$AD_DIR?>/images/top_logo.png" alt="호관원프리미엄">
            </div>
            <div class="menu_skin">

            <ul>
                <li><a href="#" id="s1" class="subNavBtn">호관원 프리미엄 효과</a></li>
                <li><a href="#" id="s2" class="subNavBtn">간편 문의하기</a></li>
                <li><a href="#" id="s3" class="subNavBtn">동진제약 소개</a></li>
                <li><a href="#" id="s5" class="subNavBtn end">호관원 문의하기</a></li>
            </ul>
            <?php echo validation_errors('<div class="alert  alert-warning alert-auto-close" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close alert-dismissible alert-info">', '</div>'); ?>
            </div>
        
            <!-- <div class="menu_skin">
                <ul>
                    <li><a href="#sec01">호관원 프리미엄 효과</li>
                    <li><a href="#sec02">간편 문의하기</li>
                    <li><a href="#sec03">브랜드'자연내림'</li>
                    <li><a href="#sec04">동진제약 소개</li>
                    <li><a href="#sec05">호관원 문의하기</li>
                </ul>
             -->
            <div class="tel_menu">
                <img src="<?=$AD_DIR?>/images/menu_tel.png" alt="1661-3352"/>
            </div>
        </div>
        
    </div>

    <hr>

    
</div>
<!-- } 상단 끝 -->

<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">


<section>

    <div id="sec01" class="section s1"> 
        <ul class="bxslider" id="bx02">
         <li>
            <img src="<?=$AD_DIR?>/images/slid01.jpg" width="100%">
         </li>
         <li>
            <img src="<?=$AD_DIR?>/images/slid02.jpg" width="100%">
         </li>
         <li>
            <img src="<?=$AD_DIR?>/images/slid03.jpg" width="100%">
         </li>
        </ul>
        <script>
                $('#bx02').bxSlider({
                    controls: false,
                    mode: 'fade',
                    pager: true,
                    speed: 200,
                    auto: true, 
                    pause: 3000
                });
            </script>       
            <img src="<?=$AD_DIR?>/images/sec01_1.jpg" width="100%">
            <div style="text-align:center">
                <video id="video1" src="http://www.hoguanwon.com/theme/basic/images/2017_04_03.mp4" controls  width="850" height="500"><!--자동재생끄고싶으면 autoplay 제거 -->
                    이 브라우저는 vedio 태그를 지원하지 않습니다.
                </video>
            </div>
             <script>
                 $('#video1').rolVideo(1);
              </script>
            <img src="<?=$AD_DIR?>/images/sec01_2.jpg" width="100%">
    </div>
</section>
<section>
    <div id="sec02" class="section s2"> 


 <input type=hidden name=sca  value="">
   <div class="section02">
       <ul>
           <li>무릎관절이 안좋을때, 허리가 불편할 때. 목이 불편할 때. 손목관절이 안좋을 때
           <h1>관절건강, 뼈 건강엔 호관원!</h1>
       </li>
       <li class="naver">
       <!--[고객혜택3+1진행중]-->
       </li>
       <li class="side_bn">
           <span>온라인 간편 문의<span>
       </li>
       </ul>

       <?php
        $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
        echo form_open_multipart(current_full_url(), $attributes);
        ?>
        <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
        <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
        <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
        <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
        
       <table align="center" style="padding-top:30px;">
        <colgroup>
           <col width="65" />
           <col width="310" />
           <col width="85" />
           <col width="620" />
        </colgroup>
           <tr>
               <th>이름</th>
               <td><input type="text"  id="mlh_name" name="mlh_name" class=" input" label="이름" ></td>
               <th>나이</th>
               <td><input type="text" id="mlh_age" name="mlh_age" class=" input" label="나이" > 
                   <input type="checkbox" name="wr_3" id="agree" value="동의함" >
                   <span><a href="#layer1" class="btn-example">[개인정보 수집이용 & 마케팅수신동의]<span>
                   <div class="window">
                        <input type="button" href="#" class="close" value="나는야 닫기 버튼(.window .close)"/>
                    </div>
                 </td>
           </tr>
            <tr>
               <th>성별</th>
               <td>
               <ul>
                 <li>
                     <input  type="radio" id="sex_m" name="mlh_gender" value="2"    itemname="성별" checked><label for="man">남</label>
                 </li>
                 <li>
                     <input  type="radio" id="sex_fm" name="mlh_gender"   value="1"  itemname="성별"><label for="wom">여</label>
                 </li>
               </ul>
               </td>
               <th rowspan="2">문의내용</th>
               <td rowspan="2">
                   <input  type="text" id="mlh_text" name="mlh_text" class="textarea"  label="문의사항" itemname="상담내용">                   
                   <input  class="sec02_btn" type="image" src="<?=$AD_DIR?>/images/s_03.jpg" >
               </td>
           </tr>
            <tr>
               <th>연락처</th>
               <td><input type="tel"  id="mlh_mobileno1" name="mlh_mobileno1" class=" input" label="연락처" size="1" > - <input type="tel"  id="mlh_mobileno2" name="mlh_mobileno2" class="input" label="연락처"  size="1"> - <input type="tel"  size="1"  id="mlh_mobileno3" name="mlh_mobileno3" class="input" label="연락처"></td>
           </tr>
       </table>
       <?php echo form_close(); ?>
   </div>


 <div id="layer1" class="pop-layer">
    <div class="pop-container">
        <div class="pop-conts">
            <!--content //-->           
            <p class="ctxt mb20">
                   <b>[개인정보취급방침]</b>
                   <br/>
                   호관원은(이하'회사'는) 고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다. 
                   회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 
                   개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 회사는 개인정보취급방침을 
                   개정하는 웹사이트 공시사항(또는 개별통지)를 통하여 공지할 것입니다.
                   본 방침은 2015년 1월 5일
                   
                   [수집하는 개인정보 항목]
                   회사는 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
                   - 수집항목 :  이름, 나이, 연락처, 주소, 성별, 상담내용
                   - 개인정보수집방법 : 홈페이지(상담신청양식), 전화
                   
                   [개인정보의 수집 및 이용목적]
                   회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.
                   - 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 상담, 요금정산, 구매 및 요금결제, 물품배송 또는 청구지 등 발송
                   
                   [개인정보의 보유 및 이용기간]
                   원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 예외없이 해당 정보를 지체 없이 파기합니다.
                   단, 관계법령의 규정에 의하여 보전할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.
                   - 보존항목 : 이름, 나이, 연락처, 주소
                   - 보존근거 : 전자상거래등에서의 소비자보호에 관한 법률
                   - 보존기간 : 5년
                   - 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년(전자상거래등에서의 소비자보호에 관한 법률)
                   
                   [개인정보의 파기절차 및 방법]
                   회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
                   -파기절차 : 고객님이 상담신청 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함)내부 방침 
                   및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조)일정기간 저장된 후 파기되어집니다.
                   - 파기방법 : 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.
                   
                   [개인정보제공]
                   회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.
                   - 이용자들이 사전에 동의한 경우
                   - 법령의 구정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우
                   
                   [수집한 개인정보의 위탁]
                   회사는 고객님의 동의없이 고객님의 정보를 외부 업체에 위탁하지 않습니다. 향후 그러한 필요가 생길 경우, 
                   위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.
                   
                   [이용자 및 법정대리인의 권리와 그 행사방법]
                   귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다.
                   
                   [개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항]
                   쿠키 등 인터넷 서비스 이용 시 자동 생성되는 개인정보를 수집하는 장치를 운영하지 않습니다.
                   
                   [개인정보에 관한 민원서비스]
                   회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.
                   귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호관련민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다.
                   회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.
                   
                   기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.
                   
                   1. 개인분쟁조정위원회 (www.1336.or.kr/1336)
                   2. 정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)
                   3. 대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)
                   4. 경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)
                   <br/>
                   <b>[마케팅수신동의]</b><br/>
                   이름, 성별, 휴대폰번호, 나이 등을 해지시까지 수집·이용·분석하여 호관원에서 제공하는 건강정보, 배송정보, 고객관리 서비스의 홍보, 프로모션, 이벤트, 혜택 안내를 위해 수집, 이용 활용하는 것, 동의하면 혜택 및 광고 정보를 전화, 단문메시지, 장문메시지 멀티메시지 안내 및 팝업 등으로 전송
            </p>
            <div class="btn-r">
                <a href="#" class="btn-layerClose">X</a>
            </div>
            <!--// content-->
        </div>
    </div>
</div>
 
<!--//-->
<script>
  $('.btn-example').click(function(){
          var $href = $(this).attr('href');
          layer_popup($href);
      });
      function layer_popup(el){
  
          var $el = $(el);        //레이어의 id를 $el 변수에 저장
          var isDim = $el.prev().hasClass('dimBg');   //dimmed 레이어를 감지하기 위한 boolean 변수
  
          isDim ? $('.dim-layer').fadeIn() : $el.fadeIn();
  
          var $elWidth = ~~($el.outerWidth()),
              $elHeight = ~~($el.outerHeight()),
              docWidth = $(document).width(),
              docHeight = $(document).height();
  
          // 화면의 중앙에 레이어를 띄운다.
          if ($elHeight < docHeight || $elWidth < docWidth) {
              $el.css({
                  marginTop: -$elHeight /2,
                  marginLeft: -$elWidth/2
              })
          } else {
              $el.css({top: 0, left: 0});
          }
  
          $el.find('a.btn-layerClose').click(function(){
              isDim ? $('.dim-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
              return false;
          });
  
          $('.layer .dimBg').click(function(){
              $('.dim-layer').fadeOut();
              return false;
          });
  
      }
</script>
 

       
    </div>
</section>
<section class="section3">
<img src="<?=$AD_DIR?>/images/sec04.jpg" width="100%">
    <div id="sec03" class="section s3">     
       <ul class="bxslider" id="bx03">
        <li>
          <img src="<?=$AD_DIR?>/images/sec3_slid01.png" width="100%">
        </li>
         <li>
          <img src="<?=$AD_DIR?>/images/sec3_slid02.png" width="100%">
        </li>
       </ul>
       <script>
                $('#bx03').bxSlider({
                    controls: true,
                    mode: 'fade',
                    pager: false,
                });
            </script>       
       <!--<img src="<?=$AD_DIR?>/images/sec03.jpg" width="100%">-->
       
    </div>
</section>

<section>
    <div id="sec05" class="section s5"> 
        <h2>상담신청</h2>
        <div  class="section05">
    <table border=0 cellpadding=0 cellspacing=0 class="customer">
    <colgroup>
           <col width="65" />
           <col width="310" />
           <col width="85" />
           <col width="310" />
           <col width="207" />
        </colgroup>
      <tr>
    <?php
      $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
      echo form_open_multipart(current_full_url(), $attributes);
      ?>
      <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
      <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
      
      <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
      <input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">
        <th>성명</th>
        <td><input  type="text" id="mlh_name" name="mlh_name" class="input2" label="성명" ></td>
        <th>전화번호</th>
        <td>
            <input type="tel" class="ed"  id="mlh_mobileno_1" name="mlh_mobileno1" class="input2" label="전화번호">-
            <input type="tel"  class='ed' id="mlh_mobileno_2" name="mlh_mobileno2" class="input2" label="전화번호" maxlength="4">-
            <input type="tel"  class='ed' id="mlh_mobileno_3" name="mlh_mobileno3" class="input2" label="전화번호" maxlength="4"></td>
        <td rowspan="3" style="text-align: right;">
           <input  type="image" src="<?=$AD_DIR?>/images/cs_btn.png" alt="상담신청" >
           </td>
      </tr>
      <tr>
      <th>성별</th>
      <td>
        <ul>
          <li>
            <input  type="radio" id="sex_m"  name="mlh_gender" value="2" checked><label for="man1">남</label>
          </li>
          <li>
             <input  type="radio" id="sex_fm"  name="mlh_gender" value="1" ><label for="wom1">여</label>
          </li>
        </ul>
      </td>
      <th colspan="2">상담내용</th>
      </tr>
      <tr>
        <th>나이</th>
        <td><input name="mlh_age" id="mlh_age" type="text"  class='ed input2' maxlength="4" label="나이"></td>
        <td rowspan="2" colspan="2" >
        <input  type="text" id="mlh_text" name="mlh_text" label="문의사항" class="text_content input2">
      </td>
        </tr>     
        <tr>
            <td colspan="2">
                <input type="checkbox" name="wr_3" id="agree2"><span><a href="#layer2" class="btn-example">[개인정보 수집이용 & 마케팅수신동의]</span>
            </td>
        </tr>     
    </table>
<div id="layer2" class="pop-layer">
    <div class="pop-container">
        <div class="pop-conts">
            <!--content //-->           
            <p class="ctxt mb20">
                   <b>[개인정보취급방침]</b>
                   <br/>
                   호관원은(이하'회사'는) 고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다. 
                   회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 
                   개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 회사는 개인정보취급방침을 
                   개정하는 웹사이트 공시사항(또는 개별통지)를 통하여 공지할 것입니다.
                   본 방침은 2015년 1월 5일
                   
                   [수집하는 개인정보 항목]
                   회사는 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.
                   - 수집항목 :  이름, 나이, 연락처, 주소, 성별, 상담내용
                   - 개인정보수집방법 : 홈페이지(상담신청양식), 전화
                   
                   [개인정보의 수집 및 이용목적]
                   회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.
                   - 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 상담, 요금정산, 구매 및 요금결제, 물품배송 또는 청구지 등 발송
                   
                   [개인정보의 보유 및 이용기간]
                   원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 예외없이 해당 정보를 지체 없이 파기합니다.
                   단, 관계법령의 규정에 의하여 보전할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.
                   - 보존항목 : 이름, 나이, 연락처, 주소
                   - 보존근거 : 전자상거래등에서의 소비자보호에 관한 법률
                   - 보존기간 : 5년
                   - 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년(전자상거래등에서의 소비자보호에 관한 법률)
                   
                   [개인정보의 파기절차 및 방법]
                   회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.
                   -파기절차 : 고객님이 상담신청 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함)내부 방침 
                   및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조)일정기간 저장된 후 파기되어집니다.
                   - 파기방법 : 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.
                   
                   [개인정보제공]
                   회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.
                   - 이용자들이 사전에 동의한 경우
                   - 법령의 구정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우
                   
                   [수집한 개인정보의 위탁]
                   회사는 고객님의 동의없이 고객님의 정보를 외부 업체에 위탁하지 않습니다. 향후 그러한 필요가 생길 경우, 
                   위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.
                   
                   [이용자 및 법정대리인의 권리와 그 행사방법]
                   귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다.
                   
                   [개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항]
                   쿠키 등 인터넷 서비스 이용 시 자동 생성되는 개인정보를 수집하는 장치를 운영하지 않습니다.
                   
                   [개인정보에 관한 민원서비스]
                   회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.
                   귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호관련민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다.
                   회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.
                   
                   기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다.
                   
                   1. 개인분쟁조정위원회 (www.1336.or.kr/1336)
                   2. 정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4)
                   3. 대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600)
                   4. 경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)
                   <br/>
                   <b>[마케팅수신동의]</b><br/>
                   이름, 성별, 휴대폰번호, 나이 등을 해지시까지 수집·이용·분석하여 호관원에서 제공하는 건강정보, 배송정보, 고객관리 서비스의 홍보, 프로모션, 이벤트, 혜택 안내를 위해 수집, 이용 활용하는 것, 동의하면 혜택 및 광고 정보를 전화, 단문메시지, 장문메시지 멀티메시지 안내 및 팝업 등으로 전송
            </p>
            <div class="btn-r">
                <a href="#" class="btn-layerClose">X</a>
            </div>
            <!--// content-->
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<!--//-->
<script>
  $('.btn-example').click(function(){
          var $href = $(this).attr('href');
          layer_popup($href);
      });
      function layer_popup(el){
  
          var $el = $(el);        //레이어의 id를 $el 변수에 저장
          var isDim = $el.prev().hasClass('dimBg');   //dimmed 레이어를 감지하기 위한 boolean 변수
  
          isDim ? $('.dim-layer').fadeIn() : $el.fadeIn();
  
          var $elWidth = ~~($el.outerWidth()),
              $elHeight = ~~($el.outerHeight()),
              docWidth = $(document).width(),
              docHeight = $(document).height();
  
          // 화면의 중앙에 레이어를 띄운다.
          if ($elHeight < docHeight || $elWidth < docWidth) {
              $el.css({
                  marginTop: -$elHeight /2,
                  marginLeft: -$elWidth/2
              })
          } else {
              $el.css({top: 0, left: 0});
          }
  
          $el.find('a.btn-layerClose').click(function(){
              isDim ? $('.dim-layer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
              return false;
          });
  
          $('.layer .dimBg').click(function(){
              $('.dim-layer').fadeOut();
              return false;
          });
  
      }
</script>

       <div class="cs_list">
    <div class="cs_list01">
    <h2 class="sound_only">최신글</h2>
    <div class="cs_title"></div>
<!-- 목록 카우셀 { -->                    
<div class="bo_lst_casel shadow bo_lst_cont lt">
    <!-- 카우셀 { -->               
        <div class="bo_lst_casel_hd">
            <div class="bo_lst_casel_tit">
                <h3 class="lt_title">상담신청현황</h3>
                <h4></h4>
                <div class="count"></div>
            </div>
            <ul class="it_listtitle">
                <li style="width: 20%">신청자</li>
                <li style="width: 49%">상담내용</li>
                <li style="width: 30%">연락처</li>
            </ul>
            <div class="casel_control">
                <span class="prev"></span>
                <span class="next"></span>
            </div>
        </div>
        <div class="bo_lst_casel_in">
                        <ul class="bo_lst_in_casel" id="nowin_0">
            <li class='casel_name'><span class="sv_guest">최경숙</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>4216</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_1">
            <li class='casel_name'><span class="sv_guest">김영동</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>8710</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_2">
            <li class='casel_name'><span class="sv_guest">김영동</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>8710</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_3">
            <li class='casel_name'><span class="sv_guest">김영동</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>8710</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_4">
            <li class='casel_name'><span class="sv_guest">김영동</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>8710</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_5">
            <li class='casel_name'><span class="sv_guest">김철현</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>7464</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_6">
            <li class='casel_name'><span class="sv_guest">박옥순</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>8730</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_7">
            <li class='casel_name'><span class="sv_guest">박상필</span></li><li class='casel_tit'><span><b> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>6106</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_8">
            <li class='casel_name'><span class="sv_guest">김명순</span></li><li class='casel_tit'><span><b>> 상담신청합니다 <img src="<?=$AD_DIR?>/images/icon_new.gif" alt="새글">   </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>6151</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_9">
            <li class='casel_name'><span class="sv_guest">김민희 </span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>1187</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_10">
            <li class='casel_name'><span class="sv_guest">박향숙</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>5319</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_11">
            <li class='casel_name'><span class="sv_guest">장천익</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>1655</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_12">
            <li class='casel_name'><span class="sv_guest">이홍기</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>8588</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_13">
            <li class='casel_name'><span class="sv_guest">엄흥섭</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>3338</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_14">
            <li class='casel_name'><span class="sv_guest">김세진</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>5006</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_15">
            <li class='casel_name'><span class="sv_guest">엄흥섭</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>3338</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_16">
            <li class='casel_name'><span class="sv_guest">장옥란</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>5217</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_17">
            <li class='casel_name'><span class="sv_guest">김 종 관</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>9537</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_18">
            <li class='casel_name'><span class="sv_guest">한은경</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>4962</span></li>             </ul>
                        <ul class="bo_lst_in_casel" id="nowin_19">
            <li class='casel_name'><span class="sv_guest">박성주</span></li><li class='casel_tit'><span><b> 상담신청합니다    </b></span></li><li class='casel_date'><span>010</span><span>- **** -</span><span>1727</span></li>             </ul>
                    </div>
      </div>
</div>

</div>
</div>
   
<script>
var casel_auto = true;
var casel_speed = 3000; // 기본 3초설정
var casel_time;

function runNowTimer() {

    casel_time = setInterval(showSlideUp, casel_speed);
    casel_auto = true;  
}

function showSlideUp() {

    var index = 0;
    var html = $(".bo_lst_in_casel:eq(" +index+ ")").html();
    var id = $(".bo_lst_in_casel:eq(" +index+ ")").attr("id");

    $(".bo_lst_in_casel:eq(" +index+ ")").slideUp(300, function(){
        $(".bo_lst_in_casel:eq(" +index+ ")").remove();
    });

    $(".bo_lst_casel_in").append("<ul id='" +id+ "' class='bo_lst_in_casel'>" + html + "</ul>");

}

function showNowNext() {

    var index = 0;
    var html = $(".bo_lst_in_casel:eq(" +index+ ")").html();
    var id = $(".bo_lst_in_casel:eq(" +index+ ")").attr("id");

    $(".bo_lst_in_casel:eq(" +index+ ")").slideUp(0, function(){
        $(".bo_lst_in_casel:eq(" +index+ ")").remove();
    });

    $(".bo_lst_casel_in").append("<ul id='" +id+ "' class='bo_lst_in_casel'>" + html + "</ul>");

}

$(".casel_control span").click(function(){

    if($(this).index() == 0)
    {
        var index = $(".bo_lst_in_casel").length - 1;
        var html = $(".bo_lst_in_casel:eq(" +index+ ")").html();

        $(".bo_lst_in_casel:eq(" +index+ ")").slideDown(100, function(){
            $(".bo_lst_in_casel:eq(" +index+ ")").remove();
        });

        $(".bo_lst_in_casel:eq(0)").before("<ul class='bo_lst_in_casel'>" + html + "</ul>");
    }
    else
    {
        showNowNext();
    }

});

$(".bo_lst_cont").mouseenter(function(){
    if(!casel_auto) return false;
    clearInterval(casel_time);
    casel_auto = false;
});

$(".bo_lst_cont").mouseleave(function(){
    runNowTimer();
});

runNowTimer();
</script>
       </div>
    </div>
</section>

    </div>
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft" >
    <div class="top_btn"><a href="#" class="top"><img src="<?=$AD_DIR?>/images/top_btn.png"></a></div>
    <div id="ft_copy">
        <div id="ft_company">
            ㈜더좋은세상 ㅣ 대표이사 : 배용호 ㅣ 사업자등록번호 : 308-09-62387 ㅣ 대전광역시 중구 계백로 1719, 1611호(오류동, 센트리아오피트텔) ㅣ 전화번호 : 1661-3352<br/>
            전화권유판매업신고증 제 2017-대전중구-0011호 ㅣ 개인정보관리책임자 : 조우철 ㅣ 건강기능식품광고심의필 : 180110146
            <br/><br/>
            Copyrights (C) 2016 호관원. All Rights Reserved.<br>
        </div>
    </div>
</div>


<!-- } 하단 끝 -->

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
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

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
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

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


function cpaProc(mlh_id) {
    var href;

    // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
     
    // href = cb_url + '/postact/daine_query_curl/<?php echo urlencode($this->session->flashdata('mlh_name')) ?>/<?php echo $this->session->flashdata('mlh_age') ?>/<?php echo $this->session->flashdata('mlh_mobileno') ?>/<?php echo urlencode($this->session->flashdata('mlh_text')) ?>';

    href = 'http://com.daine.co.kr/utf/hgw/hi.jsp';
    $.ajax({
        async : false,
        url : href,
        type : 'post',
        data: "name=<?php echo $this->session->flashdata('mlh_name') ?>&age=<?php echo $this->session->flashdata('mlh_age') ?>&phone=<?php echo $this->session->flashdata('mlh_mobileno') ?>&memo=<?php echo $this->session->flashdata('mlh_text') ?>", 
        dataType : 'json',
        success : function(response) {
            
        
        },
        error : function(response) {
        },
        complete : function (response) {
           //  if (response.responseJSON.error) {
           //  alert(response.responseJSON.Message);
           //  return false;
           // } else if (response.responseJSON.success) {
           //  $.ajax({
           //       async : false,
           //       url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.data.code+'/'+response.responseJSON.data.result_msg,
           //       type : 'get',
           //       dataType : 'json',
           //       success : function(data) {
                      
           //       }
           //   });
       
           //  }
           
        }

    });
}

<?php if($this->session->flashdata('mlh_id')){?>

    cpaProc("<?php echo $this->session->flashdata('mlh_id') ?>");
    
<?php } ?>

    
//]]>
</script>

</body>
</html>