<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 




    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>  

    <title>경남제약 컷앤컷 다이어트</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">    
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        ul, ol, li, dt, dd {
            list-style: none;
        }
        body {
            font-family: 'Nanum Gothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            font-size: 100%;
            color: #333;
            line-height: 1.5;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        video:focus {
            outline: none;
        }
        input[type="text"],input[type="number"],input[type="tel"]{
            text-indent: 5px;
        }
        input,button, textarea {
            font-family: 'Nanum Gothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        .blind {
            position: absolute;
            overflow: hidden;
            clip: rect(0 0 0 0);
            margin: -1px;
            width: 1px;
            height: 1px;
        }
        .clearfix:after {
            content: '';
            display: block;
            clear: both;
        }
        .fl_left {
            float: left;
        }
        .fl_right {
            float: right;
        }
        .wrap {
            width: 100%;
            min-width: 320px;
            max-width: 720px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        .img_box,
        .btn_img {
            font-size: 0;
        }
        .btn_img {
            background-color: transparent;
            border: none;
            padding: 0;
        }
        .img_box .img,
        .btn_img .img {
            font-size: 12px;
            width: 100%;
        }
        .txt_center {
            text-align: center;
        }
        .txt_emph {
            color: #d51430;
            font-weight: bold;
        }
        .txt_bold {
            font-weight: bold;
        }
        .header {
            position: fixed;
            top: 0;
            z-index: 400;
            width: 100%;
            min-width: 320px;
            max-width: 720px;
            transition: background-color .2s;
            font-size: 0;
        }
        .header.h_scroll {
            background-color: rgba(255, 47, 81, 0.95);
        }
        .header .img {
            height: 13.8889vw;
            max-height: 100px;
            min-height: 50px;
            font-size: 10px;
        }
        .img_model_box {
            position: relative;
            z-index: 1;
            width: 77.0834%;
            margin-left: 13.8889%;
            margin-top: -30.1389%;
            margin-bottom: -9.5834%;
        }
        .img_model_box .img_model {
            width: 100%;
        }
        .video_container {
            position: relative;
        }
        .video_container .video_box {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 56.6945vw;
            max-height: 405px;
        }
        .video_container .ifr_video {
            width: 100%;
            height: 100%;
        }
        .footer {
            position: relative;
        }
        .footer .terms_btn_box {
            position: absolute;
            width: 84.72%;
            left: 50%;
            top: 39.9391%;
            transform: translateX(-50%);
        }
        .footer .btn_terms {
            float: left;
            width: 50%;
            height: 5.8334vw;
            max-height: 42px;
            padding: 0;
            border: none;
            opacity: 0;
            background-color: transparent;
        }
        /* form */
        .form_container {
            padding: 45.5556% 0 11.1112%;
            background-image: url('<?=$AD_DIR?>/images/form_bg_01.png'), url('<?=$AD_DIR?>/images/form_bg_03.png'), url('<?=$AD_DIR?>/images/form_bg_02.png');
            background-repeat: no-repeat, no-repeat, repeat-y;
            background-size: 100%, 100%, 100%;
            background-position: center top, center bottom, center top;
        }
        .form_container .form_table {
            width: 80%;
            max-width: 516px;
            margin: 0 auto;
        }
        .form_table .lab_box {
            width: 17.1%;
            white-space: nowrap;
        }
        .form_table .lab_box02 {
            width: 17.5%;
        }
        .form_table .lab {
            color: #fff;
            font-size: 3.6667vw;
            font-weight: normal;
        }
        .form_table .inp_box {
            padding: 7px;
            white-space: nowrap;
            color: #fff;
            font-size: 2.7778vw;
        }
        .form_table .inp {
            width: 100%;
            height: 7.7778vw;
            max-height: 56px;
            min-height: 32px;
            padding: 3px 5px;
            box-sizing: border-box;
            border: 1px solid #c1c1c1;
            font-size: 24px;
        }
        .form_table .lab_gender {
            text-indent: -9999px;
            width: 9.8612vw;
            max-width: 71px;
            min-width: 34px;
            height: 0;
            padding-bottom: 38.97%;
            display: block;
            float: left;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .form_table .lab_gender01 {
            background-image: url('<?=$AD_DIR?>/images/woman_off.png');
        }
        .form_table .lab_gender02 {
            background-image: url('<?=$AD_DIR?>/images/man_off.png');
        }
        .form_table .inp_gender:checked + .lab_gender01 {
            background-image: url('<?=$AD_DIR?>/images/woman_on.png');
        }
        .form_table .inp_gender:checked + .lab_gender02 {
            background-image: url('<?=$AD_DIR?>/images/man_on.png');
        }
        .form_table .inp_mobile {
            width: 29.9%;
        }
        .form_table .inp_textarea {
            height: 18.0556vw;
            max-height: 130px;
            min-height: 80px;
            resize: vertical; 
        }
        .form_container .btn_box {
            font-size: 0;
        }
        .form_container .btn_img {
            width: 80%;
            max-width: 516px;
        }
        .form_container .agree_box {
            font-size: 16px;
            font-weight: 400;
            margin: 10px 0;
            color: #FFF;
        }
        .agree_box .inp_agree {
            vertical-align: middle;
        }
        .agree_box .lab_agree {
            vertical-align: middle;
        }
        /* popup */
        .popup_wrap {
            display: none;
            position: fixed;
            top: 0;
            width: 100%;
            min-width: 320px;
            max-width: 720px;
            height: 100%;
            z-index: 900;
            background-color: rgba(0,0,0,0.3);
        }
        .popup_wrap .popup_container {
            display: none;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 90%;
            border: 1px solid #a1a1a1;
            font-size: 0;
            background-color: #fff;
        }
        .popup_container .popup_head {
            height: 40px;
            padding-top: 5px;
            padding-right: 5px;
            text-align: right;
            font-weight: bold;
            background: #e6e6e6;
        }
        .popup_container .btn_popup_close {
            width: 20px;
            padding: 0;
            border: none;
            background-color: transparent;
        }
        .popup_container .btn_popup_close .img {
            width: 100%;
            font-size: 12px;
        }
        .popup_container .popup_textarea {
            width: 100%;
            padding: 10px 5px;
            box-sizing: border-box;
            color: gray;
            font-size: 12px;
            height: 300px;
            border: 0px;
        }
        .popup_container .popup_textarea:focus {
            outline: none;
        }

        @media screen and (min-width: 721px) {
            .form_table .lab {
                font-size: 26.4px;
            }
            .form_table .inp_box {
                font-size: 20px;
            }
        }
        @media screen and (max-width: 430px) {
            .form_container .agree_box {
                font-size: 13px;
            }
            .form_table .inp {
                font-size: 16px;
            }
            .form_table .lab {
                font-size: 16px;
            }
            .form_table .lab_gender {
                padding-bottom: 40px;
            }
        }
    </style>

<body>
    <div class="wrap">
        <div class="header clearfix js-header">
            <a href="tel:080-858-0200" class="fl_left"><img class="img" src="<?=$AD_DIR?>/images/top_01.png" alt="컷앤컷다이어트"></a>
            <a href="tel:080-858-0200" class="fl_right"><img class="img" src="<?=$AD_DIR?>/images/top_02.png" alt="컷앤컷다이어트"></a>
        </div>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/con1.png" alt="컷앤컷 다이어트" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con2.png" alt="컷앤컷 효과" class="img"></div>

        <!-- form -->
        <div class="form_container">
            <form onsubmit="return submitContents(this)">
                <table class="form_table">
                    <tbody>
                        <tr>
                            <th class="lab_box"><label for="mlh_name" class="lab">이름</label></th>
                            <td class="inp_box" colspan="3"><input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input" label="이름"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><span class="lab">성별</span></th>
                            <td class="inp_box inp_box_left">
                                <input type="radio" name="gender" id="gender01" class="blind inp_gender input" value="1" checked label="성별">
                                <label for="gender01" class="lab_gender lab_gender01">여</label>
                                <input type="radio" name="gender" id="gender02" class="blind inp_gender input" value="2" label="성별">
                                <label for="gender02" class="lab_gender lab_gender02">남</label>
                            </td>
                            <th class="lab_box lab_box02"><label for="mlh_age" class="lab">나이</label></th>
                            <td class="inp_box inp_box_right"><input type="number" name="mlh_age" id="mlh_age" class="inp inp_age input" label="나이"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_height" class="lab">키</label></th>
                            <td class="inp_box"><input type="number" name="mlh_height" id="mlh_height" class="inp inp_height input" label="키"></td>
                            <th class="lab_box lab_box02"><label for="mlh_weight" class="lab">체중</label></th>
                            <td class="inp_box inp_box_right"><input type="number" name="mlh_weight" id="mlh_weight" class="inp inp_weight input" label="체중"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_mobileno1" class="lab">연락처</label></th>
                            <td class="inp_box" colspan="3">
                                <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1" class="inp inp_mobile input" maxlength="3" label="연락처"> -
                                <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="inp inp_mobile input" maxlength="4" label="연락처"> -
                                <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="inp inp_mobile input" maxlength="4" label="연락처">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_text" class="lab">문의</label></th>
                            <td class="inp_box" colspan="3"><textarea name="mlh_text" id="mlh_text" class="inp inp_textarea input" label="문의"></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn_box txt_center">
                    <button class="btn_img"><img src="<?=$AD_DIR?>/images/form_btn.png" class="img"></button>
                </div>
                <div class="agree_box txt_center">
                    <input type="checkbox" name="agree" id="agree" class="inp_agree" checked>
                    <label for="agree" class="lab_agree">개인정보 수집 및 이용에 동의 [개인정보취급방침]</label> 
                </div>
            </form>
        </div>
        <!-- form end -->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/con3.png" alt="컷앤컷다이어트 check it" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con4.png" alt="컷앤컷 다이어트 왜 건강한 다이어트일까?" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con5.png" alt="당신의 작은 시도가 몸의 아름다운 변화를 가져다 줍니다." class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con6.png" alt="diet 바르게, 제대로, 즐겁게!" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con7.png" alt="믿을 수 있는 컷앤컷 다이어트 기능성분" class="img"></div>
        <div class="img_box video_container">
            <img src="<?=$AD_DIR?>/images/con8.png" alt="워너비 몸매 클라라의 컷앤컷 이야기" class="img">
            <div class="video_box">
                <iframe src="https://www.youtube.com/embed/6jqRPR_PGOQ" frameborder="0" allowfullscreen class="ifr_video"></iframe>
            </div>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con9.png" alt="굶지말고 먹는 즐거움도 누리면서, 운동과 병행하면 건강한 다이어트! 이제 시작해 보세요" class="img"></div>
        <div class="img_box">
            <div class="img_model_box">
                <img src="<?=$AD_DIR?>/images/model2.png" alt="모델" class="img_model">
            </div>
            <img src="<?=$AD_DIR?>/images/con10.png" alt="섭취쉽고, 간편하게 다이어트를 원하시는 분께" class="img">
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/con11.png" alt="경남제약 컷앤컷다이어트는 식약처에서 기능성을 인정받은 성분을 사용하여 안전한 건강기능 식품입니다." class="img"></div>
        <div class="img_box footer">
            <img src="<?=$AD_DIR?>/images/footer_c.png" alt="푸터" class="img">
            <div class="terms_btn_box">
                <button type="button" class="btn_terms" onclick="openPopup('term01')">상품의 구매, 이용에 관한 약관</button>
                <button type="button" class="btn_terms" onclick="openPopup('term02')">개인정보처리방침</button>
            </div>
        </div>

        <div class="popup_wrap" id="popupWrap">
            <!-- 상품의 구매, 이용에 관한 약관 -->
            <div id="term01" class="popup_container">
                <div class="popup_head">
                    <button class="btn_popup_close" type="button" onclick="closePopup('term01')">
                        <img class="img" src="<?=$AD_DIR?>/images/close_btn_white.gif" alt="닫기">
                    </button>
                </div>
                <textarea class="popup_textarea" readonly>경남제약 컷앤컷다이어트 상품의 구매, 이용에 관한 약관
        
제 1장 제품 및 판매목적
제1조 (목적)
이 약관은 케이디헬스케어(이하 “회사”라 함)가 판매하는“컷앤컷_더블”, “컷앤컷_돌외” (이하 “다이어트식품”이라 함)의판매에 관한 규정 및 기타서비스 (이하 “서비스”라 함)를이용하는 자간의 권리, 의무를 확정하고 이를 이행함으로써 상호발전을 도모하는 것을 그 목적으로 합니다.

제2조(약관의 명시, 효력과 개정)
1. 회사는 이 약관의 내용을 제품명, 회사의 상호, 영업소소재지, 사업자등록번호와 함께 회원이 확인할 수 있도록 “상품의랜딩페이지 하단” 링크로 게시합니다.
2. 회사는 약관의 규제에 관한 법률, 전자거래기본법,전자서명법, 정보통신망 이용 촉진 및 정보보호등에 관한 법률,전자상거래등에서의 소비자보호에 관한 법률, 전자금융거래법 등관련법을 위배하지 않는 범위에서 본 약관을 개정할 수 있습니다.
3. 회사가 약관을 개정할 경우에는 적용일자 및 개정사유를명시하여 현행 약관과 함께 초기화면에 그 적용일자 14일이전부터 적용일자 전일까지 공지합니다.

제3조 (상품 및 서비스의 종류)
1. 회사가 제공하는 상품 및 서비스는 다음과 같습니다.
 1) 다이어트 식품
①컷앤컷_더블
②컷앤컷_돌외

  2) 서비스
 ① 유선상으로 안내하는 회원의 건강정보
제2장 이용계약 및 정보보호

제4조 (구매 서비스 이용계약의 성립)
1. 상품의 이용계약(이하 "이용계약"이라고 합니다)은 회사가제공하는 상품 및 서비스를 인터넷 배너 광고 및 기타 광고를통해 전달하며, 해당 페이지에서 연락처를 남긴 회원에게 “회사가 유선으로 안내를 하여 구매에 동의한 회원에 대하여 회사가이를 승낙함으로써 성립합니다.
2. 상품의 안내 신청은 만 14세 이상의 개인 또는 사업(개인사업자 및 법인사업자)가 할 수 있으며, 이용신청자는실명으로 가입신청을 해야 하며, 실명이 아니거나 타인의 정보를도용하는 경우 서비스이용이 제한되거나 관련 법령에 의거처벌받을 수 있습니다.

제5조 (개인정보의 변경, 보호)
1. 회원은 상품 구매 및 서비스이용신청 시 허위의 정보를제공하여서는 아니 되며, 기재한 사항이 변경되었을 경우에는 즉시변경사항을 최신의 정보로 수정하여야 합니다.
2. 수정하지 않은 정보로 인하여 발생하는 손해는 당해 회원이전적으로 부담하며, 회사는 이에 대하여 아무런 책임을 지지않습니다.
3. 회사는 이용계약을 위하여 회원이 제공한 정보를 회사 서비스운영을 위한 목적 이외의 용도로 사용하거나 이용자의 동의 없이제3자에게 제공하지 않습니다. 단, 다음 각 호의 경우에는 예외로합니다.
 1) 법령에 근거하여 회원정보의 이용과 제3자에 대한 정보제공을 허용하고 있는 경우
 2) 배송업무에 필요한 최소한의 회원정보를 알려 주는 경우
 3) 기타 회사의 약관 및 정책에 따라 이용자의 동의를 구한 경우

제3장 “다이어트 식품” 구매 관련

제6조 (매매계약의 체결 및 대금 결제)
1. 상품의 매매계약은 회원이 “회사”가 제시한 상품의 판매조건에 응하여 청약의 의사표시를 하고 이에 대하여 판매자가승낙의 의사표시를 함으로써 체결됩니다.
2. 회사는 회원이 현금, 카드 기타의 방법으로 매매 대금을결제할 수 있는 방법을 제공합니다.
3. 매매 대금의 결제와 관련하여 구매자가 입력한 정보 및 그정보와 관련하여 발생한 책임과 불이익은 전적으로 구매자가부담하여야 합니다.
4. 상품을 주문한 후 일정 기간 내에 매매대금을 결제하지 않을경우 회사는 당해 주문을 회원의 동의 없이 취소할 수 있습니다.
5. 회사는 구매자의 상품 매매계약 체결 내용을 확인할 수 있도록조치하며, 매매계약의 취소 방법 및 절차를 안내합니다.
6. 회사는 구매자가 매매대금 결제 시 사용한 결제수단에 대해정당한 사용권한을 가지고 있는지의 여부를 확인할 수 있으며,이에 대한 확인이 완료될 때까지 거래진행을 중지하거나, 확인이불가한 해당거래를 취소할 수 있습니다.
7. 구매자가 실제로 결제하는 금액은 판매자가 정한 공급원가,기본이용료, 상품에 적용된 배송비, 상품의 기타 서비스, 상품의옵션등이 적용된 경우 옵션의 금액등이 적용된 금액(실구매액)이며구매자에게 발행되는 구매증빙서(현금영수증, 세금계산서,신용카드매출전표 등)는 실구매액으로 발행됩니다.

제7조 (배송)
1. 배송 소요기간은 입금 또는 대금결제 확인 일의 익일을기산일로 하여 배송이 완료되기까지의 기간을 말합니다.
2. 회사는 구매자의 입금 또는 대금결제에 대한 확인을 한 후3영업일 이내에 배송에 필요한 조치를 취합니다.
3. 공휴일 및 기타 휴무일 또는 천재지변 등 불가항력적인 사유가발생한 경우 그 해당기간은 배송 소요기간에서 제외됩니다.
4. 회사는 배송과 관련하여 구매자와 배송업체 및 금융기관등과의 사이에 발생한 분쟁은 당사자들 간의 해결을 원칙으로하며, 회사는 어떠한 책임도 부담하지 않습니다.
5. “회사”가 발송을 한 후에 구매자가 수취확인을 하지 않아 배송중 상태가 지연될 경우, 회사는 발송확인일로부터 2주 이내에수취확인요청을 안내 할 수 있습니다. 회사의 안내 이후에도구매자의 수취확인이 이루어지지 않을 경우 3일이 경과한 시점에자동으로 배송완료로 전환될 수 있으며 이 경우 실제 구매자가상품을 수령하지 못한 경우에 구매자는 미수취신고를 할 수있습니다.

제8조 (취소)
1. 회원은 구매한 상품이 발송되기 전까지 구매를 취소할 수있으며, 배송중인 경우에는 취소가 아닌 반품절차에 따라처리됩니다.
2. 회원이 결제를 완료한 후 배송대기, 배송요청 상태에서는취소신청 접수 시 특별한 사정이 없는 한 즉시 취소처리가완료됩니다.
3. 배송준비 상태에서 취소 신청한 때에 이미 상품이 발송이 된경우에는 발송된 상품의 왕복 배송비를 구매자가 부담하는 것을원칙으로 하며, 취소가 아닌 반품절차에 따라 처리됩니다.
4. 취소처리에 따른 환불은 카드결제의 경우 취소절차가 완료된즉시 결제가 취소되며, 현금결제의 경우에는 3영업일 이내에현금잔고로 환불됩니다.

제9조 (반품)
1. 회원은 “회사”의 상품 발송 시로부터 배송완료일 후 7일이내까지 관계법령에 의거하여 반품을 신청할 수 있습니다.
2. 반품에 관한 일반적인 사항은 전자상거래등에서의 소비자보호에관한 법률 등 관련법령이 “회사”가 제시한 조건보다 우선합니다.
3. 반품에 소요되는 비용은 반품에 대한 귀책사유가 있는 자에게일반적으로 귀속됩니다. (단순변심 : 구매자부담, 상품하자 :“회사”부담 등)
4. 반품 신청 시 반품송장번호를 미기재하거나 반품사유에 관하여“회사”에게 정확히 통보(또는 서면)하지 않을 시 반품처리 및환불이 지연될 수 있습니다.
5. 반품에 따른 환불은 반품 상품이 “회사”에 도착되고 반품사유및 반품 배송비 부담자가 확인된 이후에 현금결제의 경우에는3영업일 이내에 현금잔고로 환불되고, 카드 결제의 경우 즉시결제가 취소됩니다.
6. 반품 배송비를 구매자가 부담하여야 하는 경우 반품 배송비의추가 결제가 이루어지지 않으면 환불이 지연될 수 있습니다.

제10조 (교환)
1. 회원은 “회사”의 상품 발송 시로부터 배송완료일 후7일이내까지 관계법령에 의거하여 교환을 신청할 수 있습니다.
2. 교환신청을 하더라도 판매자에게 교환할 물품의 재고가 없는경우에는 교환이 불가능하며, 이 경우에 해당 교환신청은 반품으로처리됩니다.
3. 교환에 소요되는 비용은 물품하자의 경우에는 판매자가 왕복배송비를 부담하나 구매자의 변심에 의한 경우에는 구매자가부담합니다.

제11조 (환불)
1. “회사”는 구매자의 취소 또는 반품에 의하여 환불사유가발생할 시 현금결제의 경우에는 3영업일 이내에 구매자가 알려 준통장에 현금으로 해당 금액을 환불하고 카드결제의 경우에는 즉시결제가 취소됩니다.
2. 카드결제를 통한 구매건의 환불은 원칙적으로 카드결제 취소를통해서만 가능합니다.
3. 회원은 현금잔고로 환불된 금액을 통장으로 입금 받고자 하는경우에는 별도로 지정한 자신의 출금계좌로 현금출금요청을 통해출금할 수 있습니다

제12조 (반품/교환/환불의 적용 배제)
구매자는 다음 각 호의 경우에는 구매자가 환불 또는 교환을요청할 수 없습니다.
 1) 구매자의 귀책사유로 말미암아 상품이 멸실ㆍ훼손된 경우
 2) 구매자의 사용 또는 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우
 3) 시간의 경과에 의하여 재판매가 곤란할 정도로 상품의 가치가 현저히 감소한 경우
 4) 복제가 가능한 상품의 포장을 훼손한 경우
5) 기타 구매자가 환불 또는 교환을 요청할 수 없는 합리적인사유가 있는 경우

제5장 이용자 관리 및 보호

제13조 (이용자 관리)
1. 회사는 이 약관의 본지와 관련 법령 및 상거래의 일반원칙을위반한 회원에 대하여 다음과 같은 조치를 할 수 있습니다.
 1) 회사가 부가적으로 제공한 혜택의 일부 또는 전부의 회수
 2) 특정서비스 이용제한
 3) 이용계약의 해지
 4) 손해배상의 청구
2. 회사가 전항 각 호에 정한 조치를 할 경우 회사는 사전에회원에게 유선 또는 이메일로 통보하며, 회원의 연락이 두절되거나긴급을 요하는 것과 같이 부득이한 경우 선 조치 후 사후 통보할수 있습니다.
3. 회원은 본 조에 의한 회사의 조치에 대하여 항변의 사유가있는 경우 이에 대하여 항변을 할 수 있습니다.

제14조 (저작물 책임)
1. 회사는 서비스를 이용함에 있어 저작권자의 저작권 보호를위한 정책을 수립하여 운영하며 회원은 회사의 저작권 정책을준수하여야 합니다.
2. 회원이 회사가 제공하는 구매서비스를 이용하면서 작성한상품평, Q&amp;A 등 각종 게시물의 저작권은 이를 작성한 회원본인에게 있으며, 해당 게시물이 타인의 저작권을 침해하는 경우그에 대한 책임은 회원 본인이 부담합니다.
3. 회사는 게시물이 다음 각 호에 해당하는 경우 사전 통보 없이해당 게시물을 삭제하거나 게시자에 대하여 특정서비스의이용제한, 이용계약의 해지 등의 조치를 할 수 있습니다.
 1) 대한민국의 법령을 위반하는 내용을 포함하는 경우
 2) 관계법령에 의거 판매가 금지된 불법제품 또는 음란물을 게시, 광고하는 경우
 3) 허위 또는 과대광고의 내용을 포함하는 경우
 4) 타인의 권리나 명예, 신용 기타 정당한 이익을 침해하는 경우
 5) 직거래 유도 또는 타 사이트의 링크를 게시하는 경우
 6) 정보통신기기의 오작동을 일으킬 수 있는 악성코드나 데이터를 포함하는 경우
 7) 사회 공공질서나 미풍양속에 위배되는 경우
 8) 회사가 제공하는 상품판매 및 서비스의 원활한 진행을 방해하는 것으로 판단되는 경우
4. 회원이 작성한 쇼핑웹진, 상품평, Q&amp;A등 각종 게시물은“회사”의 상품 판촉, 홍보등을 위하여 회사가 제휴한 타사이트에복제, 배포, 전송, 전시 될 수 있으며, 본질적인 내용에 변경을가하지 않는 범위 내에서 수정, 편집될 수 있습니다.

제6장 기타

제15조 (약관 외 준칙 및 관련 법령과의 관계)
1. 이 약관에 명시되지 않은 사항은 전자상거래등에서의소비자보호에 관한 법률 등 관련 법령의 규정과 일반 상관례에의합니다.
2. 회사가 제공하는 구매 서비스를 통하여 거래한 경우,전자상거래등에서의 소비자보호에 관한 법률 등 관련 법령이 해당거래 당사자에게 우선적으로 적용되고, 거래 당사자는 이 약관의규정을 들어 거래 상대방에 대하여 면책을 주장할 수 없습니다.
3. 회사는 필요한 경우 특정 서비스에 관하여 적용될 사항(이하“개별약관”이라고 합니다)을 정하여 이를 회사 홈페이지 등을통해 미리 공지할 수 있습니다.
4. 회사는 전항의 개별약관에 변경이 있을 경우, 시행 14일이전에 해당 변경사항을 공지합니다.
5. 회원은 이 약관 및 개별약관의 내용에 변경이 있는지 여부를주시하여야 하며, 변경사항의 공지가 있을 시에는 이를 확인하여야합니다.

제16조 (관할법원)
이 약관과 회사와 회원 간의 서비스 이용계약 및 회원 상호간의분쟁에 대해 회사를 당사자로 하는 소송이 제기될 경우에는 회사의본사 소재지를 관할하는 법원을 합의관할법원으로 정합니다.


부칙
제1조 (적용일자)
이 약관은 2020.09.01 일부터 적용됩니다.
                </textarea>
            </div>
            <!-- 개인정보처리방침 -->
            <div id="term02" class="popup_container">
                <div class="popup_head">
                    <button class="btn_popup_close" type="button" onclick="closePopup('term02')">
                        <img class="img" src="<?=$AD_DIR?>/images/close_btn_white.gif" alt="닫기">
                    </button>
                </div>
                <textarea class="popup_textarea" readonly>▶개인정보처리방침
경남제약 컷앤컷다이어트의 개인정보 처리 방침을 알려드립니다.
&lt;경남제약 컷앤컷다이어트&gt;는「개인정보보호법」에 따라정보주체의 ⓒ개인정보와 권익을 보호하고 개인정보 열람 등의요구사항을 원활하게 처리할 수 있도록 다음과 같은 개인정보처리방침을 수립운영하고 있습니다.
________________________________________

경남제약 컷앤컷다이어트 홈페이지 개인정보 처리방침은 다음과같은 내용을 담고 있습니다.

    개인정보의 처리목적
    수집하는 개인정보 항목
    개인정보의 처리 및 보유기간
    개인정보의 제3자 제공에 관한 사항
    개인정보처리의 위탁에 관한 사항
    개인정보의 파기 절차 및 방법
    개인정보의 안전성 확보 조치
    정보주체의 권리의무 및 그 행사방법에 관한 사항
    권익침해 구제방법
    개인정보 수집장치(쿠키)의 설치 및 거부에 관한 사항
    개인정보 보호책임자에 관한 사항
    개인정보 처리방침의 변경에 관한 사항

1. 개인정보의 처리목적
&lt;경남제약 컷앤컷다이어트&gt;는 개인정보를 다음의 목적을위해 처리하며, 목적 이외의 용도로는 사용되지 않습니다. 이용목적이 변경될 시에는 사전 동의를 구할 예정입니다.
    가. 다이어트 상담 및 고객 관리 등 다이어트에 필요한 서비스를 제공하기 위하여 개인정보를
    처리합니다.
    나. 서비스 이용 시 문의에 대한 질문 접수 및 응답 등을 목적으로 개인정보를 처리합니다.

2. 수집하는 개인정보 항목
&lt;경남제약 컷앤컷다이어트&gt;는 회원관리, 각종 서비스 제공등을 위한 필수정보 및 선택정보를 아래와 같이 수집하고 있습니다.
    가. 수집항목
    1) 다이어트 상담 및 고객 관리 등 다이어트에 필요한 서비스를 제공하기 위하여 개인정보를 처리합니다.
    필수항목 : 성명, 성별, 나이, 연락처, 이메일
    기타항목 : 다이어트 상담을 위한 또는 회사가 필요한 정보
    2) 서비스 신청 시 필요한 개인정보의 범위
    서비스 받을 곳의 주소, 신체 요건, 연락처, 개인맞춤 서비스를 제공하기 위한 기타 자료
    3) 기타
    상담 신청 및 상담 완료 일시, 서비스 이용기록, 불량 이용기록
    나. 수집방법
    1) 홈페이지 상담 게시판, 서비스 신청 등을 통한 온라인상에서의 개인정보 수집
    2) 서면양식, 전화/팩스를 통한 회원가입
    3) 로그 분석 프로그램 등을 통한 생성정보 수집

3. 개인정보의 처리 및 보유기간
정보주체의 개인정보는 원칙적으로 아래의 명시한 기간 동안보존하고, 개인정보의 처리목적이 달성되면 지체 없이 파기합니다.단, 상법, 세법 등 관계 법령의 규정에 따라 법에서 지정한 기간동안은 보존 될 수 있습니다.
    가. 서비스 이용을 위한 고객정보의 경우 : 서비스 만료 후 특별한 사유가 없을 시 폐기
    나. A/S가 필요한 경우 고객과의 소통이 있는 기간 중 암묵적 보관

4. 개인정보의 제3자 제공에 관한 사항
&lt;경남제약 컷앤컷다이어트&gt;는 원칙적으로 정보주체의개인정보를 개인정보의 처리목적에서 명시한 범위 내에서처리하며, 정보주체의 사전 동의 없이는 본래의 범위를 초과하여처리 하거나 제3자에게 제공하지 않습니다. 단, 다음의 경우에는개인정보를 제3자 제공 및 공개할 수 있습니다.
    가. 정보주체가 사전에 동의한 경우
    나. 서비스 제공에 따른 요금 정산을 위하여 필요한 경우
    다. 회사에서 지정하는 서비스 이용을 위한 다이어트 관리 관련 자
    라. 법령 등에 의해 제공이 요구되는 경우
5. 개인정보처리의 위탁에 관한 사항
&lt;경남제약 컷앤컷다이어트&gt;는 민원사항 처리 등의 원활한업무 수행을 위하여 아래와 같이 개인정보 책임자를 지정하고있으며, 관계 법령에 따라 개인정보가 안전하게 관리될 수 있도록필요한 사항을 규정하고 있습니다.
경남제약 컷앤컷다이어트의 개인정보 책임자의 정보와 업무 내용은아래와 같습니다.

    개인정보 관리 책임자 정보
    이름: 허훈
    연락처: 080-853-0300
    전자메일: qkek0077@naver.com

    개인정보 관리 책임자 업무
    -개인정보 유출 방지를 위한 관리
    -개인정보 보완의 업무
    -개인정보 파기의 업무
개인정보보호 관련 법규의 준수, 개인정보에 관한 제3자 제공금지 및 책임 소재 등을 명확히 규정하여 계약내용을 보관 및감독하고 있으며, 업체 변경 시 공지사항 및 개인정보 처리방침등을 통해 고지하겠습니다.

6. 개인정보의 파기 절차 및 방법
&lt;경남제약 컷앤컷다이어트&gt;는 원칙적으로 개인정보처리목적이 달성된 경우에는 지체 없이 해당 개인 정보를파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.
가. 파기절차
정보주체가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져 내부방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시파기됩니다. 이 때 DB로 옮겨진 개인정보는 법률에 의한 경우가아니고서는 다른 목적으로 이용되지 않습니다.
나. 파기기한
    1) 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 30일 이내에 파기합니다.
   단 서비스 기간이 추가 되거나 A/S 발생시 연장이 될 수 있습니다
    2) 다음 경우와 같이 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 30일 이내에 파기합니다.
    ① 개인정보의 처리 목적이 달성된 경우
    ② 해당 서비스가 폐지된 경우
    ③ 해당 사업이 종료 된 경우
    ④ 관계법령의 규정에 의하여 보존할 필요가 있는 경우 아래와 같이 관계법령에서 정한 일정한
    기간 동안 회원정보를 보관합니다.
    서비스 이용기록, 접속 로그, 접속 IP 정보 : 3개월(통신비밀보호법)
    계약 또는 청약철회 등에 관한 기록 : 5년(전자상거래 등에서의 소비자보호에 관한 법률)
    대금결제 및 재화 등의 공급에 관한 기록
: 5년(전자상거래 등에서의 소비자보호에 관한 법률)
    소비자의 불만 또는 분쟁처리에 관한 기록
: 3년(전자상거래 등에서의 소비자보호에 관한 법률)
다. 파기방법
종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여파기합니다.
전자적 파일 형태의 개인정보는 기록을 재생할 수 없는 기술적방법을 사용합니다.

7. 개인정보의 안전성 확보 조치
개인정보보호법 제29조에 따라 개인정보처리자는 개인정보가 분실,도난, 누출, 변조 또는 훼손되지 아니하도록 내부 관리계획을수립하는 한편, 아래와 같은 안전성 확보 조치를 취하고 있습니다.
    가. 기술적조치
    1) 개인정보의 안전한 저장을 위하여 비밀번호를 암호화하여 저장하고 있습니다.
    2) 백신프로그램을 이용하여 컴퓨터바이러스에 의한 피해를 방지하기 위한 조치를 취하고 있습니다.
    3) 해킹 등 외부침입에 대비하여 침입차단시스템 등을 설치하여 보안에 만전을 기하고 있습니다.
    나. 관리적조치
    1) 수행하는 업무에 따라 개인정보에 대한 접근 권한을 제한하고 있습니다.
    2) 개인정보를 처리하는 직원을 대상으로 개인정보보호에 관한 정기적인 교육 및 외부 위탁교육을 실시하고 있으며, 개인정보보호에 관한 법령을 준수하도록 철저히 관리감독 하고 있습니다.
    다. 물리적조치
    1) 개인정보는 안전한 보관을 위하여 잠금장치 등 물리적 접근방지를 위한 보호 조치를 취하고 있습니다.
    2) 개인정보처리시스템은 통제구역으로 설정하여 비인가자의 출입을 통제하는 전산실에 설치관리하고 있습니다.

8. 정보주체의 권리의무 및 그 행사방법에 관한 사항
    가.「개인정보보호법」 제4조(정보주체의 권리), 제35조(개인정보의 열람),
    제36조(개인정보의 정정삭제), 제37조(개인정보의 처리정지 등)에 따라 정보주체는 경남제약 컷앤컷다이어트가 보유하고 있는 개인정보의 열람, 정정삭제, 처리정지를 청구할 수 있습니다.
    나. 단, 다음에 해당하는 경우에는 개인정보의 열람, 정정삭제, 처리정지를 제한할 수 있습니다.
    1) 법률에 특별한 규정이 있거나 법령상 의무를 준수하기 위하여 불가피한 경우
    2) 다른 사람의 생명신체를 해할 우려가 있거나 다른 사람의 재산과 그 밖의 이익을 부당 하게 침해할 우려가 있는 경우
    다. 열람, 정정삭제, 처리정지 절차는 다음과 같습니다.
    1) 경남제약 컷앤컷다이어트 홈페이지 이용자는 언제든지 등록되어 있는 본인의 개인정보를 정정 요청을 할 수 있습니다
    2) 홈페이지를 통해 열람, 정정삭제가 어려울 경우 회사에 연락하여 정정을 요청 할 수 있습니다

9. 권익침해 구제방법
정보주체는 개인정보침해로 인한 구제를 받기 위하여개인정보분쟁조정위원회, 한국인터넷진흥원 개인정보침해신고센터등 아래의 기관을 통해 분쟁해결이나 상담 등을 신청할 수있습니다.
    1) 개인정보분쟁조정위원회 : (국번 없이) 118(내선 2번)
    2) 정보보호마크인증위원회 : 02-580-0533~4 (http://eprivacy.r.kr)
    3) 대검찰청 첨단범죄수사과 : 02-3480-2000 (http://www.sp.g.kr)
    4) 경찰청 사이버테러대응센터 : 02-392-0330 (http://www.ctrc.g.kr)

10. 개인정보 수집장치(쿠키)의 설치 및 거부에 관한 사항
회사는 이용자의 정보를 수시로 저장하고 찾아내는 쿠키(ckie)를운용합니다. 쿠키란 회사의 웹사이트를 운영하는 데 이용되는서버가 이용자의 브라우저에 보내는 아주 작은 텍스트 파일로서이용자의 컴퓨터 하드디스크에 저장됩니다. 회사는 다음과 같은목적을 위해 쿠키를 사용합니다.
- 회원과 비회원의 접속빈도나 방문시간 등을 분석하기 위한자료로 이용됩니다.
이용자는 쿠키설치에 대한 선택권을 가지고 있습니다. 따라서,이용자는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든쿠키의 저장을 거부할 수도 있습니다.
    가.쿠키설정 방법
     설정방법 예(익스플로러8.0을 사용하고 있는 경우)
    「도구」메뉴에서「인터넷옵션」을 선택합니다.「개인정보 탭」을 클릭합니다.
    「설정」을 이용하여 본인에게 맞는 쿠키허용 수준을 설정하시면 됩니다.
    「도구」 메뉴에서 「인터넷옵션」 을 선택합니다.
    「일반」 탭을 클릭하여 '검색기록' 의 「설정」 으로 들어가서, 「파일보기」 를
 통해 확인합니다.
    나.쿠키거부 방법
쿠키 설정을 거부하는 방법으로는 이용자가 사용하시는 웹브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수있습니다.
     설정방법 예(익스플로러8.0을 사용하고 있는 경우)
    「도구」 메뉴에서 「인터넷옵션」 을 선택합니다.
    「개인정보 탭」 을 클릭합니다.
    「설정」 을 이용하여 상위레벨로 하여 "모든 쿠키차단"으로 설정하시면 됩니다.
     단, 이용자께서 쿠키설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.
11. 개인정보 보호책임자에 관한 사항
개인정보 보호책임자 이름: 허훈 , 연락처: 080-853-0300전자메일: qkek0077@naver.com
12. 개인정보 처리방침의 변경에 관한 사항
개인정보처리방침은 법령 개정에 따른 내용의 추가, 삭제 및정정이 있는 경우에는 홈페이지의 '공지사항'을 통해 사전 고지할예정입니다.
    1) 개인정보 처리방침 시행일자 : 2005.10.01
    2) 개인정보 처리방침 일부개정 : 2007.11.07
    3) 개인정보 처리방침 일부개정 : 2011.09.30
    4) 개인정보 처리방침 전면개정 : 2012.03.30



▶이용약관
경남제약 컷앤컷다이어트의 이용약관을 알려드립니다.

제1장. 총칙

제1조 목적
이 약관은 경남제약 컷앤컷다이어트(이하 "경남제약컷앤컷다이어트" 또는 "회사"라 합니다)가 제공하는 경남제약컷앤컷다이어트 홈페이지 서비스(이하 "서비스"라 합니다)의이용조건 및 절차에 관한 사항, 회사와 이용자의 권리와 의무 및책임에 관한 사항 등을 규정함을 목적으로 합니다.
제2조 약관의 효력 및 변경
    1. 이 약관은 경남제약 시스템다이어트 이지컷 홈페이지에서 제공하는 서비스를 이용하고자 하는 모든이용자에 대하여 그 효력을 발생합니다.
    2. 이 약관의 내용은 서비스 화면에 게시하거나 기타의 방법으로 고객에게 공시하고, 고객이 서비스에 가입함으로써 효력을 발생합니다.
    3. 회사가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 그 적용일자 7일 이전부터 적용일자 전일까지 제12조 2항에서 정한 방법으로 공지합니다. 다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 고객은 개정된 약관에 동의하지 아니하는 경우 본인의 고객등록을 취소(고객탈퇴)할 수 있으며, 계속 사용하는 경우에는 약관 개정에 대한 동의로 간주합니다. 개정된 약관은 공지와 동시에 그 효력이 발생됩니다.
제3조 약관 이외의 준칙
이 약관에 명시되지 않은 사항은 정보이용 관련법령 및 정보제공규정에 따릅니다.
제4조 용어의 정의
    1. 고객 : 사이트에 접속하여 본 약관에 동의하고, 개인정보를 제공하는 고객으로 회사와
   서비스 이용계약을 체결한 개인이나 법인 또는 법인에 준하는 단체
    2. 운영자 : 서비스의 전반적인 관리와 원활한 운영을 위하여 회사가 선정한 자
    3. 서비스 중지 : 정상 이용 중 회사가 정한 일정한 요건에 따라 일정기간 동안 서비스의 제공을
   중지하는 것
    4. 개인정보 삭제 : 회사 또는 고객이 서비스 이용 만료 후 정보 삭제 및 폐기

제2장. 서비스 이용계약

제5조 이용계약의 성립
    1. 고객은 이 약관에 동의한다는 의사표시를 한 후 회사가 정한 가입양식에 따라 고객 정보를 기입 함으로써 정보이용을 신청합니다.
    2. 이용계약은 고객의 이용신청에 대하여 회사가 승낙함으로써 성립합니다.
제6조 이용신청
이용신청은 서비스의 신규고객가입 화면에서 고객이 다음 사항을가입신청 양식에 기록하여 신청합니다.
    1. 성명
    2. 나이
    3. 성별
    4. 전화번호
    5. 거주지역
    6. 이동전화번호 등 기타 회사가 필요하다고 인정하는 사항
제7조 이용신청의 승낙
회사는 제6조에서 정한 사항을 정확히 기재하여 이용 신청한고객에 대하여 서비스 이용 신청을 승낙합니다.
제8조 이용신청에 대한 승낙의 제한
회사는 다음의 각 호에 해당하는 신청에 대하여는 승낙을 하지않을 수 있습니다.
    1. 기술상 서비스 제공이 불가능한 경우
    3. 실명이 아니거나, 다른 사람의 명의사용 등 등록 내용을 허위로 기재하여 신청하는 경우
    4. 이용자 등록사항을 누락하거나 오기하여 신청하는 경우
    5. 사회의 안녕질서 또는 미풍양속을 저해하거나, 저해할 목적으로 신청한 경우
    6. 기타 회사가 정한 이용신청 요건에 충족되지 않는 경우

제3장. 이용계약의 변경 및 탈퇴

제9조 이용계약의 변경
    1. 고객은 이용 신청 시 등록한 사항이 변경되었을 경우 회사가 정한 방법에 의하여 변경 등록하여야 합니다.
    2. 회사는 직권으로 고객 정보를 임의로 변경할 수 있습니다.
제10조 고객 탈퇴
고객이 서비스 이용계약을 해지하고자 할 경우 서비스 내 고객가입해지화면에서 해지 신청을 하여야 합니다.
제11조 고객에 대한 통지
    1. 회사가 고객에 대해 통지를 하는 경우, 고객이 회사에 제출한 전자우편 주소로 할 수 있습니다.
    2. 회사는 불특정 다수 고객에 대한 통지의 경우 서비스 게시판에 게시함으로써 개별통지에 갈음 할 수 있습니다.
    3. 회사는 서비스를 통해 고객의 컴퓨터에 쿠키를 전송할 수 있습니다. 고객은 쿠키 수신을 거부하거나 쿠키 수신에 대해 경고하도록 브라우저 설정을 변경할 수 있습니다.
제12조 고객 정보 사용에 대한 동의
    1. 회사가 이용 신청서에 기재를 요구하는 고객 정보는 본 이용계약을 이행하고 이용 계약상 서비스제공을 위한 목적으로 이용합니다.
    2. 고객들이 서비스를 편리하게 사용할 수 있도록 하기 위해 고객정보는 회사에 제공될 수 있습니다. 이 경우 회사는 사전에 공지하며 이에 동의하지 않는 고객은 등록을 취소 할 수 있습니다.
    다만, 계속 이용하는 경우 동의하는 것으로 간주합니다.
    3. 회사가 이용자의 개인식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를받습니다.
    4. 제공된 개인정보는 당해 이용자의 동의 없이 제3자에게 제공할 수 없으며, 이에 대한 모든 책임은회사가 집니다. 다만, 다음의 경우에는 예외로 합니다.
    ① 관계법령에 의하여 국가기관으로부터 요구 받은 경우
    ② 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별 할 수 없는 형태로 제공하는 경우
    ③ 기타 관계법령에서 정한 절차에 따른 요청이 있는 경우
    5. 제10조(고객탈퇴) 및 제11조(고객자격의 상실)의 규정에 의하여 서비스 이용계약이 종료 된때에는 회사는 고객정보를 즉시 삭제합니다.

제4장. 서비스 이용

제13조 서비스의 이용 시간
    1. 서비스의 이용은 연중무휴 1일 24시간을 원칙으로 합니다. 다만, 회사의 업무상이나 기술상의 이유로 서비스가 일시 중지될 수 있으며, 운영 상의 목적으로 회사가 정한 기간에는 서비스가일시 중지될 수 있습니다. 이러한 경우 회사는 사전 또는 사후에 이를 공지합니다.
    2. 회사는 고객의 이용신청을 승낙한 때부터 서비스를 무료로 개시합니다. 단, 회사의 업무상 또는기술상의 장애로 인해 서비스를 개시하지 못하는 경우 그 내용을 사전에 공지합니다.
    3. 회사는 서비스를 일정범위로 분할하여 각 범위별로 이용 가능한 시간을 별도로 정할 수 있으며,이 경우 그 내용을 사전에 공지합니다.
제14조 서비스의 내용
    1. 회사가 제공하는 서비스는 다음과 같습니다.
    ① 회사소개, 사업소개 및 컨텐츠에 대한 정보 제공 서비스
    ② 회사 제공 컨텐츠 관련 고객 서비스
    서비스 안내, 이용 및 요금 안내
    다이어트 관리 및 프로그램 설계
    고객의 서비스 신청
    ③ 관리를 위한 서비스
    ④ 회사 서비스관련 지식정보 제공 서비스
    ⑤ 회사 홍보와 관련된 정보 제공 서비스
    ⑥ 기타 회사가 정하는 서비스
    2. 회사는 상당한 이유가 있는 경우 본 서비스의 내용을 추가 또는 변경할 수 있습니다. 이 경우 회사는 변경될 서비스의 내용 및 제공일자를 제12조 2항에서 정한 방법으로 고객에게 통지 합니다.
제15조 정보의 제공 및 광고의 게재
    1. 회사는 서비스를 운영함에 있어 각종 정보를 서비스 화면에 게재하거나 전자우편 및 SMS(MMS)등의 방법으로 고객에게 제공할 수 있습니다.
    2. 회사는 게시물에 관련된 세부 이용지침을 별도로 정하여 시행할 수 있으며, 고객은 그 지침에 따라 각종 게시물을 등록 또는 삭제하여야 합니다.
    3. 회사가 작성한 저작물에 대한 저작권 및 기타 지적재산권은 회사에 있습니다.
    4. 고객은 서비스를 이용하여 얻은 정보를 가공, 판매하는 행위 등 서비스에 게재된 자료를 영리목적으로 이용하거나 제3자에게 이용하게 할 수 없으며, 게시물에 대한 저작권 침해는    관계법령에 적용을 받습니다.
제16조 홈페이지 내용물의 삭제 및 수정
    1. 회사는 고객에게 서비스를 제공하고 있는 중 홈페이지 내 내용의 일부를 사전통지 없이 수정 및삭제할 수 있으며, 이에 대해 회사는 어떠한 책임도 지지 않습니다.
    2. 회사는 게시물에 관련된 세부 이용지침을 별도로 정하여 시행할 수 있으며, 고객은 그 지침에따라 각종 게시물을 등록 또는 삭제하여야 합니다.
    3. 회사가 작성한 저작물에 대한 저작권 및 기타 지적재산권은 회사에 있습니다.
    4. 고객은 서비스를 이용하여 얻은 정보를 가공, 판매하는 행위 등 서비스에 게재된 자료를 영리목적으로 이용하거나 제3자에게 이용하게 할 수 없으며, 게시물에 대한 저작권 침해는 관계법령에 적용을 받습니다.

제5장. 권리와 의무

제17조 회사의 의무
    1. 회사는 특별한 사유가 없는 한 서비스 제공 설비를 항상 운용 가능한 상태로 유지보수를 하여야하며, 안정적으로 서비스를 제공할 수 있도록 최선의 노력을 다하여야 합니다.
    2. 회사는 이용자가 안전하게 서비스를 이용할 수 있도록 이용자의 개인 정보 보호를 위하여 노력합니다. 고객의 개인정보보호에 관한 사항은 관련법령 및 회사가 정하는 “개인정보처리방침”에정한 바에 따릅니다. 개인정보의 수집 및 이용, 제공, 처리위탁에 대해서는 별도 동의를 받습니다.
    3. 회사는 서비스와 관련한 고객의 불만사항이 접수되는 경우 이를 즉시 처리 하여야 하며, 즉시처리가 곤란한 경우 그 사유와 처리일정을 서비스 또는 전자우편을 통하여 동 고객에게 통지 합니다.
제18조 고객의 의무
    1. 고객은 관계 법령, 본 약관의 규정, 이용안내 및 서비스 상에 공지한 주의사항, 회사가 통지하는 사항을 준수하여야 하며, 회사의 업무에 방해되는 행위를 하여서는 안 됩니다.
    2. 고객은 회사의 사전 동의 없이 서비스를 이용하여 어떠한 영리행위도 할 수 없으며, 법에 저촉되는 자료를 배포 또는 게재할 수 없습니다.
    3. 고객은 전화번호, 고객번호 등 자기신상정보의 변경사항 발생시 즉각 회사에 공지를 해야합니다. 고객정보 변경을 알리지 않아 발생하는 모든 결과에 대한 책임은 고객에게 있습니다.
    4. 고객은 서비스와 관련하여 다음 사항을 하여서는 안 됩니다.
    ① 고객정보 입력 시 허위내용의 등록
    ② 서비스에 게시된 정보의 부정적인 내용 유포
    ③ 회사가 정한 정보 이외의 정보(컴퓨터프로그램 등)의 송신 또는 게시
    ④ 다른 고객의 ID를 부정하게 사용하는 행위
    ⑤ 해킹행위 또는 컴퓨터 바이러스 유포행위
    ⑥ 회사 혹은 기타 제3자의 저작권 등 지적재산권에 대한 침해
    ⑦ 회사의 서비스 운영의 방해
    ⑧ 회사 혹은 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위
제19조 양도금지
고객은 서비스의 이용권한, 기타 이용 계약상 지위를 타인에게양도, 증여할 수 없으며 이를 담보로 제공할 수 없습니다.
제20조 손해배상
    1. 회사가 제공하는 서비스와 관련하여 고객에게 어떠한 손해가 발생하더라도 회사의 과실에 의한경우를 제외하고 이에 대하여 책임을 지지 않습니다.
    2. 회사는 고객이 제18조에 따른 의무를 다하지 않아 고객에게 발생한 손해에 대해서는 어떠한 경우라도 책임을 지지 않습니다.
제21조 면책사항
    1. 회사는 고객이 서비스를 통해 게재 또는 전송한 정보, 자료, 사실의 정확성, 신뢰성 등 내용에관하여 어떠한 보증도 하지 아니하며, 고객의 서비스 자료에 대한 취사선택 또는 이용으로발생하는 손해 등에 대해 책임을 지지 아니합니다.
    2. 회사는 고객이 서비스의 이용과 관련하여 기대하는 이익의 상실이나 서비스를 통하여 얻은 자료로 인한 손해 등에 관하여 책임을 지지 아니 합니다.
    3. 회사는 고객 상호간 또는 고객과 제3자 상호간에 서비스를 매개로 발생한 분쟁에 대해서는 개입 할 의무가 없으며 이로 인한 손해를 배상할 책임도 없습니다.
    4. 회사는 고객의 귀책사유로 인하여 서비스 이용의 장애가 발생한 경우에는 책임이 면제됩니다.
    특히, 청구서 E-Mail발송과 관련하여 고객 측 서버의 장애나 문제로 발생한 청구서 미 수신에
    관하여 회사는 책임을 지지 아니합니다.
    5. 본 약관의 규정을 위반함으로 인하여 회사에 손해가 발생하게 되는 경우, 이 약관을 위반한고객은 회사에 발생되는 모든 손해를 배상하여야 하며, 동 손해로부터 회사를 면책시켜야 합니다.
    6. 회사는 서비스에서 제공되는 전자우편의 메시지, 게시판의 게시물 등이 보유되는 최대 일수,송수신 할 수 있는 전자우편 메시지의 최대크기 등을 제한 할 수 있습니다.
제22조 분쟁의 해결
    1. 회사와 고객은 서비스와 관련하여 발생한 분쟁을 원만하게 해결하기 위하여 필요한 모든 노력을하여야 합니다.
    2. 제1항의 노력에도 불구하고 분쟁이 해결되지 않을 경우, 양 당사자는 민사 소송법상의 관할법원에 소를 제기할 수 있습니다.
    3. 동 소송에는 대한민국 법령을 적용합니다.

&lt;부칙&gt;
이 약관은 2020년 09월 01일부터 시행합니다
                </textarea>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 50) {
                    $(".js-header").addClass("h_scroll");
                } else {
                    $(".js-header").removeClass("h_scroll");
                }
            });
        });

        // popup
        function openPopup(el){
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }

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

            if($('input[id="agree"]').is(":checked")){
                //  $('.loading').show();
                // href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                // $.ajax({
                //     async : false,
                //     url : href,
                //     type : 'get',
                //     dataType : 'json',
                //     complete : function(data) {
                //         // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                //     }
                // });

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
            return false;
        }

    </script>
</body>
</html>