<?php
    $ad_dir  = element('view_skin_url', $layout);
 if ($this->cbconfig->item('use_selfcert') && ($this->cbconfig->item('use_selfcert_phone') OR $this->cbconfig->item('use_selfcert_ipin'))) {
        $this->managelayout->add_js(base_url('assets/js/member_selfcert.js'));
    }

    $this->managelayout->add_js(base_url('assets/js/Gam01.js'));
    $this->managelayout->add_js(base_url('assets/js/Gam02.js'));


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
    <title>캐시슬라이드 & 하이마트 룰렛이벤트!</title>
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/reset.css?_u=<?php echo date('ymdihs') ?>">
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/common.css?_u=<?php echo date('ymdihs') ?>">
    <style>
        .popup_box03 {
            width: 84%;
        }
        .popup_box03 .popup_txt_box {
            margin-bottom: 0;
        }
        .popup_img_gift {
            width: 100px;
            margin: 10px auto;
            border: 1px solid #ebebeb;
            font-size: 0;
        }
        .popup_img_gift img {
            width: 100%;
            font-size: 12px;
        }
        /* === */
        .pyro > .before, .pyro > .after {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
            animation: 1s bang ease-out 1 backwards, 1s gravity ease-in 1 backwards, 5s position linear 1 backwards;
        }
        .pyro > .before {
            top: 0;
            left: -30%;
        }
        .pyro > .after {
            top: 0;
            right: 0;
            animation-delay: 0.75s, 0.75s, 0.75s;
            animation-duration: 0.75s, 0.75s, 7.75s;
        }
        @keyframes bang {
            to {
                box-shadow: -93px 70.3333333333px #005eff, -33px -371.6666666667px #ff3c00, -78px -310.6666666667px #00ff48, 210px -72.6666666667px #ff6a00, 22px -254.6666666667px #00ff22, -154px 10.3333333333px #ff0900, -126px -338.6666666667px #ff5100, 249px -296.6666666667px #00ff33, -25px 75.3333333333px #00ff9d, -152px -288.6666666667px #ff00e6, 182px 41.3333333333px #2600ff, 47px 31.3333333333px #00ff2f, 77px 3.3333333333px #ff0095, -102px -131.6666666667px #ff0400, 108px -313.6666666667px #0900ff, 49px -261.6666666667px #ff4400, -189px -378.6666666667px #ff0d00, 119px -217.6666666667px #ffc400, -66px 13.3333333333px #ff008c, 160px -200.6666666667px #11ff00, -149px -152.6666666667px #ff00d5, 247px 72.3333333333px #b700ff, 152px -271.6666666667px #002bff, 148px -387.6666666667px #ff2f00, 205px -103.6666666667px #001eff, 122px -367.6666666667px #ff00ea, -185px -48.6666666667px #00d5ff, 41px -305.6666666667px #9500ff, 109px -314.6666666667px #00ffbf, 7px -289.6666666667px #7300ff, -236px -140.6666666667px #5500ff, 39px -354.6666666667px magenta, -123px 33.3333333333px #7300ff, 135px -15.6666666667px #eaff00, -129px 66.3333333333px #ff00d5, -138px -157.6666666667px #00ff09, 5px -77.6666666667px #00ff55, 135px -95.6666666667px #51ff00, 159px -358.6666666667px #8000ff, -195px -23.6666666667px #0004ff, -2px -188.6666666667px #00ffe6, 203px -97.6666666667px #ff2200, 153px -305.6666666667px #00ff2b, -70px -234.6666666667px #ff008c, 124px -197.6666666667px lime, 14px -376.6666666667px #0084ff, 120px -380.6666666667px #00ff66, -169px -304.6666666667px #00ff51, 153px -1.6666666667px #dd00ff, -248px 27.3333333333px #6aff00, -87px 42.3333333333px #b7ff00;
            }
        }
        @keyframes gravity {
            to {
                transform: translateY(200px);
                opacity: 0;
            }
        }
        @keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%;
            }
            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%;
            }
            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%;
            }
            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%;
            }
            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%;
            }
        }
        .popup_celebration {
            padding: 20px 0;
            border: 2px solid #0f1013;
            border-bottom: none;
            background-image: url(<?php echo $ad_dir ?>/images/pop_celebration.jpg?u_=<?php echo date('Ymdhis')?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .popup_celebration .img_box{
            width: 75%;
            margin: -32% auto 0;
        }
        .popup_celebration .img_box img{
            width: 100%;
        }
        .popup_celebration .txt_box {
            text-align: center;
        }
        .popup_celebration .txt_celebration {
            font-size: 18px;
            line-height: 1.4;
        }
        .popup_celebration b {
            font-size: 1.05em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="wrap roullete_event03">
        <div class="img_box">
            <h1 class="blind">꽝없는 룰렛 이벤트 행운의 룰렛</h1>
            <img src="<?php echo $ad_dir ?>/images/landing_03_top.jpg" alt="제목이미지"></div>

        <div class="roullete_wrap">
            <div class="roullete_box">
                <div class="roullete_bg img_box"><img src="<?php echo $ad_dir ?>/images/landing_03_roullete_bg.jpg?u_=<?php echo date('Ymdhis')?>" alt="룰렛 영역" class="img_bg"></div>
                <div class="roullete_pannel"><canvas id="canvas" width="540" height="540">
        <p style="{color: white}" align="center">지원하지 않는 브라우저입니다.</p>
      </canvas></div>
                <div class="roullete_arrow"><img src="<?php echo $ad_dir ?>/images/roullete_arrow.png?u_=<?php echo date('Ymdhis')?>" alt="룰렛 화살표" class="img_arrow"></div>
                <div class="btn_roullete"><button class="btn_img" id="center_image"><img src="<?php echo $ad_dir ?>/images/roullete_btn.png?u_=<?php echo date('Ymdhis')?>" alt="start버튼" class="img_btn" id="img_btn"></button></div>
            </div>
        </div>

        
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/landing_03_midbg.png" alt="">
        </div>
        <div class="event_info_container02"> 
            <div class="userid_form">
                <div style="font-size: 15px;line-height: 1.4;margin-bottom: 10px;">아래 입력창에 캐시슬라이드 ID를 입력하신 후, <br>START 버튼을 눌러주세요!</div>
                <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                    <div class="inp_box clearfix">
                        <input type="text" name="uuid" id="uuid" placeholder="캐시슬라이드 ID를 입력하세요" class="inp userid_inp">
                        <button type="button" class="btn_submit" id="uuid_set">등록</button>
                    </div>
                    
                    <div class="user_agree">
                        <div class="agree_tit01">
                            <input type="checkbox" name="" id="agree" class="agree_checkbox">
                            <label for="agree" class="label_agree">개인정보수집 이용 동의<span class="txt_point">(필수)</span> </label>
                            <button type="button" class="btn_agree_info_popup" onclick="openpopup('agreeInfo');">자세히 보기</button>
                        </div>
                
                    </div>
                
                <?php echo form_close(); ?>
            </div>
            <dl class="info_list">
                <div class="info_box clearfix">
                    <dt class="info_title">기&#32;&#32;간 : </dt>
                    <dd class="info_txt">10월 25일 ~ 10월 31일 (7일간)</dd>
                </div>
                <div class="info_box clearfix">
                    <dt class="info_title">대&#32;&#32;상 : </dt>
                    <dd class="info_txt"> 하이마트앱 설치 후 최초 실행 회원</dd>
                </div>
                <div class="info_box clearfix">
                    <dt class="info_title">적&#32;&#32;립 : </dt>
                    <dd class="info_txt"><span class="txt_emph">  캐시는 11월 12일(화) 지급예정</span></dd>
                    <dd class="info_txt info_caption"><span class="txt_caption">※ 캐시는 이벤트 참여시 입력한 ID로 발송됩니다.</span></dd>
                </div>
            </dl>
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
        
        <strong>3. 개인정보의 처리 및 보유 기간 </strong>                                                               
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
        
        <strong>6. 정보주체와 법정대리인의 권리·의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다. </strong>                                                               
        ① 정보주체는 하이애드원에 대해 언제든지 개인정보 열람,정정,삭제,처리정지 요구 등의 권리를 행사할 수 있습니다.                                                                 
        ② 제1항에 따른 권리 행사는하이애드원에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 하이애드원은(는) 이에 대해 지체 없이 조치하겠습니다.                                                                   
        ③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.                                                                 
        ④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.                                                                 
        ⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.                                                                  
        ⑥ 하이애드원은(는) 정보주체 권리에 따른 열람의 요구, 정정·삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.                                                                 
        
        <strong>7. 처리하는 개인정보의 항목 작성</strong>                                                                
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
        
        <strong>11. 개인정보 처리방침 변경    </strong>                                                               
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
            <!-- 당첨 안내 팝업 -->
            <div class="popup_box popup_box03" id="pop_1">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade01.png" alt="축하합니다"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>1등 10만 포인트</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_1')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_2">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade02.png" alt="축하합니다"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>2등 5만 포인트</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_2')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_3">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade03.png" alt="축하합니다"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>3등 1만 포인트</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_3')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_4">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade04.png" alt="축하합니다"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>4등 1,000 포인트</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_4')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_5">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade05.png" alt="축하합니다"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>5등 100 포인트</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_5')">확 인</button>
                </div>
            </div>
            <!--  -->       
            <div class="popup_box popup_box02" id="pop_6" style="display: none;">
                <div class="popup_txt_box">

                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_6')">확 인</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<script>



$(document).ready(function(){
    
    $('#canvas').css('width',$('.roullete_event03').width()).css('height',$('.roullete_event03').width());
    
});


var lazy_time=0;
var stop_lazy_time=0;
var wheelPower = 3;
var wheelSpinning = false;
var modal_message='';
var stopAngle=0;
var stopRank=6;
var effect='';
var gamePoint=0;



// Vars used by the code in this page to do power controls.

// -------------------------------------------------------
// Function to handle the onClick on the power buttons.
// -------------------------------------------------------

$("#uuid_set").click(function(){

    var flag = false;
    if(!trim($('input[name="uuid"]').val())) {       
        alert('캐시 슬라이드 ID 를 입력해 주세요');
        $('input:[name="uuid"]').focus();
    }


    if($('input:checkbox[id="agree"]').is(":checked")){
        if (!confirm('입력한 ID 는 ' +$('input[name="uuid"]').val()+' 입니다. 계속 진행 합니다.')) 
            return false;
        else flag = true;
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');

    
    

    


    if(flag){
        $.ajax({
          type: "POST",
          url: "/postact/uuid_set/<?php echo element('post_id',element('selfcert', $view))?>",
          data: {            
                msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
                uuid : $('input[name="uuid"]').val(),    
                csrf_test_name: cb_csrf_hash
            },
          dataType: "json",
          cache: false,
          async: false,
          success: function(res) {
            if(res.resultcode=="1"){                  
                alert(res.message);
                
                $("#uuid").attr('disabled','disabled');
                $("#img_btn").attr('src','<?php echo $ad_dir ?>/images/roullete_btn.gif?u_=<?php echo date('Ymdhis')?>');
                return false;
            } else {
                alert(res.message);
                return false;
            }
          }
        });
        
    }
});

function powerSelected(powerLevel)
{

  for(i=1;i<=3;i++) $(".btn10").removeClass("on");
  $("#pw"+powerLevel).addClass("on");
  wheelPower = powerLevel;
}

function goStart()
{

    


    
    
    $.ajax({
      type: "POST",
      url: "/postact/uuid_chk/<?php echo element('post_id',element('selfcert', $view))?>",
      data: {            
            msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
            csrf_test_name: cb_csrf_hash
        },
      dataType: "json",
      cache: false,
      async: false,
      success: function(res) {
        if(res.resultcode=="1"){
              if (wheelSpinning == false)
              {
                if (wheelPower == 1) aWheel.amn.spins = 3;
                else if (wheelPower == 2) aWheel.amn.spins = 6;
                else if (wheelPower == 3) aWheel.amn.spins = 9;
                console.log(1);
                $.ajax({
                  type: "POST",
                  url: "/postact/awheel/<?php echo element('post_id',element('selfcert', $view))?>",
                  data: {            
                        msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
                        csrf_test_name: cb_csrf_hash
                    },
                  dataType: "json",
                  cache: false,
                  async: false,
                  success: function(response) {
                    if(response.result_code=="2"){
                        $("#pop_6 .popup_txt_box").html(response.Message);
                        effect='fail'; 
                        wheelSpinning = false; 
                        stopRank=6;
                        goDone();
                        // aWheel.startAnimation();
                        return false;    
                    }

                    if(response.result_code=="1"){
                        
                        //document.write("<xmp>"+data);
                        stopAngle=response.data.angle;            
                        stopRank = response.data.rank;                       
                        aWheel.rtA = 0;
                        effect='fail'; 
                        wheelSpinning = true; 
                        aWheel.startAnimation();
                        return false;    
                    }

                  }
                });
                }
            } else {
                alert(res.message);
                return false;
            }
        }
    });
        
    
}

function resetWheel()
{
  if(wheelSpinning) aWheel.stopAnimation(false); 
  aWheel.draw();               
  wheelSpinning = false;

  // show_Lazy(1);
}

function goDone(indicatedSgt)
{
  
      //document.write(data);
      $('.popup_back').show();
      $("#pop_"+stopRank).show();
   

}

// var myVar = setInterval(function(){ myTimer() }, 1000);

function myTimer() {
  // if (wheelSpinning) return;
  // if (stop_lazy_time) return;
  // lazy_time++;
  // if (lazy_time==5)
  // {
  //   show_Lazy(2);
  //   $("#lady_wait").addClass("lazy_2");
  // }
  // else if (lazy_time==9)
  // {
  //   show_Lazy(3);
  //   $("#lady_wait").addClass("lazy_3");
  // }
  // else if (lazy_time>15 && lazy_time % 5 == 0)
  // {
  //   show_Lazy(Math.floor((Math.random() * 7) + 1));
  // }
}

function show_Lazy(n) {
  // for(i=1;i<=10;i++) $("#lady_wait").removeClass("lazy_"+i);
  // $("#lady_wait").addClass("lazy_"+n);
}

// $("#lady_wait").hover(function() {
//   lazy_time=0;
//   show_Lazy(9);
//   stop_lazy_time=1;
// });

// $("#lady_wait").mouseenter(function() {
//   lazy_time=0;
//   show_Lazy(9);
//   stop_lazy_time=1;
// });

// $("#lady_wait").mouseleave(function() {
//   lazy_time=0;
//   show_Lazy(1);
//   stop_lazy_time=0;
// });

// $("#lady_wait").click(function() {
//   goStart();
// });

$("#center_image").hover(function() {
  // lazy_time=0;
  // show_Lazy(9);
  // stop_lazy_time=1;
});

$("#center_image").mouseenter(function() {
  // lazy_time=0;
  // show_Lazy(9);
  // stop_lazy_time=1;
});

$("#center_image").mouseleave(function() {
  // lazy_time=0;
  // show_Lazy(1);
  // stop_lazy_time=0;
});

$("#center_image").click(function() {
  goStart();
});

function close_result(boxId) {

  $('.popup_back').hide();
  $('#'+boxId).hide();
  resetWheel();
}


</script>


<script>
  var aWheel = new ARwheel({
    'nS'       : 4,         
    'outerRadius'       : 150,       
    'dM'          : 'image',   
    'dT'          : true,      
    'tFs'      : 22,        
    'textOrientation'   : 'curved',
    'textDirection'     : 'reversed',
    'textAlignment'     : 'outer',
    'tM'        : 5,
    'textFontFamily'    : 'monospace',
    'textStrokeStyle'   : 'black',
    'textLineWidth'     : 2,
    'textFillStyle'     : 'white',
    'nS'     : 20,         
    'sms'     :                
    [
    ],
    'amn' :                   
    {
      'type'     : 'spinToStop',
      'duration' : 5,     
      'spins'    : 8,     
      // 'callbackSound'    : playSound, 
      'soundTrigger'     : 'segment',
      'callbackFinished' : goDone
    }
  });


  var loadedImg = new Image();

  loadedImg.onload = function()
  {
    aWheel.wheelImage = loadedImg; 
    aWheel.draw();
  }

  // Set the image source, once complete this will trigger the onLoad callback (above).
  loadedImg.src = "<?php echo $ad_dir.'/images/roullete_pannel.png?u_='.date('Ymdhis') ?>";

  // function playSound()
  // {
  //   playAudio(audio);
  // }


  // function playAudio(audio)
  // {
  //   var obj=$("#sound");
  //   if (obj.hasClass('sound3')) {
  //     audio.pause();
  //     return;
  //   }

  //   audio.pause();
  //   audio.currentTime = 0;
  //   if (obj.hasClass('sound2')) audio.volume=0.02;
  //   else audio.volume=0.3;
  //   audio.play();
  // }


// $("#sound").click(function() {
//   var obj=$("#sound");
//   if (obj.hasClass('sound1')) {
//     obj.removeClass('sound1');
//     obj.addClass('sound2');
//   }
//   else if (obj.hasClass('sound2')) {
//     obj.removeClass('sound2');
//     obj.addClass('sound3');
//   }
//   else {
//     obj.removeClass('sound2');
//     obj.removeClass('sound3');
//     obj.addClass('sound1');
//   }
// });
// $( "#modal-content" ).click(function() {
//   close_result();
// });




  function openpopup(boxId){
            $('.popup_back').show();
            $('#'+boxId).show();
        }
    function closepopup(boxId){
        $('.popup_back').hide();
        $('#'+boxId).hide();
    }
</script>