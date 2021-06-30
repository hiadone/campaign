<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #f7f7f7;
            font-size: 14px;
        }
        .blind{
            width:1px;
            height:1px;
            position:absolute;
            overflow:hidden;
            clip: rect(1px 1px 1px 1px); 
            clip: rect(1px, 1px, 1px, 1px);
        }
        .wrap{
            width: 100%;
            min-width: 320px;
            max-width: 640px;
            margin: 0 auto;
            background-color: #fff;
        }
        .img_box{
            font-size: 0;
            margin: 0;
        }
        .img_box img{
            width: 100%;
            font-size: 12px;
        }
        .db_form{
            padding: 15px 0 40px;
            background-color: #fff9e9;
        }
        .db_form .row_:after{
            content: '';
            display: block;
            clear: both;
        }
        .db_form .form_label{
            float: left;
            width: 25%;
            padding: 18px 10px 10px 0;
            box-sizing: border-box;
            text-align: right;
            font-weight: bold;
            font-size: 14px;
        }
        .db_form .inp_box{
            float: left;
            width: 75%;
            padding: 14px 0;
            box-sizing: border-box;
        }
        .db_form .inp_box input[type="text"],
        .db_form .inp_box input[type="tel"],
        .db_form .inp_box select {
            height: 24px;
            padding: 1px;
            border:1px solid #ccc;
        }
        .db_form .inp_box select{
            box-sizing: content-box;
        }
        .db_form .inp_box .text_box{
            width: 89%;
            height: 80px;
            padding: 3px;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto;
            font-size: 13.3333px;
            background-color: #fff;
            border: 1px solid #ccc;
        }
        .db_form .inp_name input{
            width: 100px;
        }
        .db_form .inp_age input{
            width: 80px;
        }
        .db_form .inp_radio input{
            vertical-align: middle;
        }
        .db_form .inp_radio label{
            display: inline-block;
            margin-right: 5px;
            vertical-align: middle;
            font-size: 14px;
        }
        .db_form .inp_tel input,
        .db_form .inp_tel select{
            width: 50px;
        }
        .db_form .btn{
            display: block;
            max-width: 321px;
            width: 80%;
            margin: 14px auto 0;
            font-size: 0;
            background-color: #fff;
            border:1px solid #ccc;
        }
        .db_form .btn img {
            width: 100%;
            font-size: 12px;
        }
        .footer{
            padding: 40px 0 15%;
            text-align: center;
            background-color: #29211e;
        }
        .footer img{
            width: 10%;
            margin-bottom: 14px;
        }
        .footer .text{
            font-size: 14px;
            color: #fff;
        }
        .quick{
            position: fixed;
            bottom: 0;
            z-index: 500;
            width: 100%;
            min-width: 320px;
            max-width: 640px;
            background-color: rgba(28,18,6,0.8);
        }
        .quick:after{
            content: '';
            display: block;
            clear: both;
        }
        .quick a{
            display: block;
        }
        .quick .tel{
            float: left;
            width: 59%;
        }
        .quick .go_db{
            float: right;
            width: 41%;
        }
        .quick img{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
            <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        
        <h1 class="img_box"><img src="<?=$ad_dir?>/images/main_01.jpg" alt="다이어트 왜 이렇게 힘들까"></h1>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_02.jpg" alt="그냥 뺄려고만 하니까"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_03.jpg" alt="3step 으로 구성된 쉬움 다이어트"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_04.jpg" alt="배우 김하늘도 출산 후 쉬움으로 다이어트 성공"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_05.jpg" alt="3주만에 16kg 감량에 성공한 사례까지"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_06.jpg" alt="쉬움 구매고객께 드리는 big 이벤트"></div>
        <div class="db_form" id="form">
            <h2 class="img_box"><img src="<?=$ad_dir?>/images/db_title.jpg" alt="she-um 무료상담 신청하기"></h2>
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open_multipart(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">      
                <dl class="form_list">

                    <div class="row_">
                        <dt class="form_label"><label for="mlh_name">이름</label></dt>
                        <dd class="inp_box inp_name"><input type="text" style="width:60%;" class="input" id="mlh_name" name="mlh_name" label="이름"></dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label"><label for="mlh_age">나이</label> </dt>
                        <dd class="inp_box inp_age"><input type="number" style="width:40%;" class="input " name="mlh_age" id="mlh_age" label="나이"> 세</dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label">성별</dt>
                        <dd class="inp_box inp_radio"> 
                            <input type="radio" id="sex_fm"  name="mlh_gender" value="1" checked>
                            <label for="sex_fm">여성</label>
                            <input type="radio" id="sex_m"  name="mlh_gender" value="2">
                            <label for="sex_m">남성</label>
                        </dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label"><label for="mlh_mobileno">연락처</label> </dt>
                        <dd class="inp_box inp_tel">
                            <input type="tel" style="width:60%;" class="input" name="mlh_mobileno" id="mlh_mobileno" label="연락처">
                        </dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label">개인정보<br>보호정책</dt>
                        <dd class="inp_box info">
                            <textarea name="" id="" class="text_box" readonly >개인정보 취급방침'쉬움다이어트’는 (이하 ‘회사’는) 고객님의 개인정보를 중요시하며, “정보통신망 이용촉진 및 정보보호”에 관한 법률을 준수하고 있습니다. 회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다. 
1. 수집하는 개인정보 항목 
2. 개인정보의 수집 및 이용목적 
3. 개인정보의 보유 및 이용기간 
4. 개인정보의 파기절차 및 방법 
5. 개인정보 제공 
6. 수집한 개인정보의 위탁 
7. 이용자 및 법정대리인의 권리와 그 행사방법 
8. 개인정보 자동 수집 장치의 설치, 운영 및 그 거부에 관한 사항 
9. 개인정보에 관한 민원서비스 

1. 수집하는 개인정보 항목 
회사는 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다. 
- 수집항목 : 이름, 나이, 연락처 
- 이벤트 참여시 : 이름, 나이, 연락처 
- 개인정보 수집방법 : 상담신청, 이벤트 참여 

2. 개인정보의 수집 및 이용목적 회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. - 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 상담, 요금정산, 구매 및 요금결제, 물품배송 또는 청구지 등 발송 ? 이벤트 참여시 : 당파워 이벤트 상담에 활용(전화, 문자) 

3. 개인정보의 보유 및 이용기간 원칙적으로, 개인정보 수집 및 이용목적이 달성되거나 이벤트 참여시 이벤트 페이지에 별도 명시한 수집동의 받은날로부터 동의받은 기간이 만료된 후에는 예외없이 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 
- 보존 항목 : 이름, 나이, 자택전화번호, 휴대전화번호 
- 보존 근거 : 전자상거래등에서의 소비자보호에 관한 법률 - 보존 기간 : 5년 
- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률) 
- 상담 참여시 : 이벤트 페이지에 별도 명시한 수집 동의받은 날로부터 동의받은 기간 동안 보관 

4. 개인정보의 파기절차 및 방법 회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다. 
- 파기절차 고객님이 상담신청 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다. 
- 파기방법 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 

5. 개인정보 제공 회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 에외로 합니다. 
- 이용자들이 사전에 동의한 경우 
- 법령의 규정에 희거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우 

6. 이용자 및 법정대리인의 권리와 그 행사방법 귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 

7. 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항 쿠키 등 인터넷 서비스 이용 시 자동 생성되는 개인정보를 수집하는 장치를 운영하지 않습니다. 

8. 개인정보에 관한 민원서비스 회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다. 귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다. 

- 개인정보관리책임자 : 이름 : 하주한
- 이메일 : hjh0308@naver.com

기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다. 

1. 개인분쟁조정위원회 (www.1336.or.kr/1336) 
2. 정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4) 
3. 대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600) 
4. 경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)</textarea>
                        </dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label"><span class="blind">동의 여부</span></dt>
                        <dd class="inp_box inp_radio">
                            <input type="radio" name="agree" id="agree">
                            <label for="agree">동의합니다</label>
                            <input type="radio" name="agree" id="agree_">
                            <label for="agree_">동의안함</label>
                        </dd>   
                    </div>
                </dl>
                <button type="submit" class="btn"><img src="<?=$ad_dir?>/images/btn.jpg" alt="무료상담 신청하기"></button>
            

            <?php echo form_close(); ?>
        </div>
        
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_07.jpg" alt="식약처에서 기능성을 인정받은 원료"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_08.jpg" alt="믿을수 있는 GMP 인증 제조사에서 만듭니다"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_09.jpg" alt="꼭 확인해 주세요 할랄 인증서"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_10.jpg" alt="이런 분들께 추천드립니다"></div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/main_11.jpg" alt="화제의 쉬움 다이어트"></div>
        <div class="db_form" id="form">
            <h2 class="img_box"><img src="<?=$ad_dir?>/images/db_title.jpg" alt="she-um 무료상담 신청하기"></h2>
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>"> 
                <dl class="form_list">
                    <div class="row_">
                        <dt class="form_label"><label for="mlh_name2">이름</label></dt>
                        <dd class="inp_box inp_name"><input type="text" style="width:60%;"class="input2" id="mlh_name2" name="mlh_name" label="이름"></dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label"><label for="mlh_age2">나이</label> </dt>
                        <dd class="inp_box inp_age"><input type="number" style="width:40%;" class="input2" name="mlh_age" id="mlh_age2" label="나이"> 세</dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label">성별</dt>
                        <dd class="inp_box inp_radio"> 
                            <input type="radio" id="sex_fm2"  name="mlh_gender" value="1" checked>
                            <label for="sex_fm2">여성</label>
                            <input type="radio" id="sex_m2"  name="mlh_gender" value="2">
                            <label for="sex_m2">남성</label>
                        </dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label"><label for="mlh_mobileno2">연락처</label> </dt>
                        <dd class="inp_box inp_tel">
                            <input type="tel" style="width:60%;" class="input2" name="mlh_mobileno" id="mlh_mobileno2" label="연락처">
                        </dd>    
                    </div>
                    <div class="row_">
                        <dt class="form_label">개인정보<br>보호정책</dt>
                        <dd class="inp_box info">
                                <textarea name="" id="" class="text_box" readonly >개인정보 취급방침'쉬움다이어트’는 (이하 ‘회사’는) 고객님의 개인정보를 중요시하며, “정보통신망 이용촉진 및 정보보호”에 관한 법률을 준수하고 있습니다. 회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다. 
1. 수집하는 개인정보 항목 
2. 개인정보의 수집 및 이용목적 
3. 개인정보의 보유 및 이용기간 
4. 개인정보의 파기절차 및 방법 
5. 개인정보 제공 
6. 수집한 개인정보의 위탁 
7. 이용자 및 법정대리인의 권리와 그 행사방법 
8. 개인정보 자동 수집 장치의 설치, 운영 및 그 거부에 관한 사항 
9. 개인정보에 관한 민원서비스 

1. 수집하는 개인정보 항목 
회사는 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다. 
- 수집항목 : 이름, 나이, 연락처 
- 이벤트 참여시 : 이름, 나이, 연락처 
- 개인정보 수집방법 : 상담신청, 이벤트 참여 

2. 개인정보의 수집 및 이용목적 회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. - 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 상담, 요금정산, 구매 및 요금결제, 물품배송 또는 청구지 등 발송 ? 이벤트 참여시 : 당파워 이벤트 상담에 활용(전화, 문자) 

3. 개인정보의 보유 및 이용기간 원칙적으로, 개인정보 수집 및 이용목적이 달성되거나 이벤트 참여시 이벤트 페이지에 별도 명시한 수집동의 받은날로부터 동의받은 기간이 만료된 후에는 예외없이 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. 
- 보존 항목 : 이름, 나이, 자택전화번호, 휴대전화번호 
- 보존 근거 : 전자상거래등에서의 소비자보호에 관한 법률 - 보존 기간 : 5년 
- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률) 
- 상담 참여시 : 이벤트 페이지에 별도 명시한 수집 동의받은 날로부터 동의받은 기간 동안 보관 

4. 개인정보의 파기절차 및 방법 회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다. 
- 파기절차 고객님이 상담신청 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다. 
- 파기방법 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 

5. 개인정보 제공 회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 에외로 합니다. 
- 이용자들이 사전에 동의한 경우 
- 법령의 규정에 희거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우 

6. 이용자 및 법정대리인의 권리와 그 행사방법 귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 

7. 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항 쿠키 등 인터넷 서비스 이용 시 자동 생성되는 개인정보를 수집하는 장치를 운영하지 않습니다. 

8. 개인정보에 관한 민원서비스 회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다. 귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다. 

- 개인정보관리책임자 : 이름 : 하주한
- 이메일 : hjh0308@naver.com

기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다. 

1. 개인분쟁조정위원회 (www.1336.or.kr/1336) 
2. 정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4) 
3. 대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600) 
4. 경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330)</textarea>
                        </dd>   
                    </div>
                    <div class="row_">
                        <dt class="form_label"><span class="blind">동의 여부</span></dt>
                        <dd class="inp_box inp_radio">
                            <input type="radio" name="agree2" id="agree2">
                            <label for="agree2">동의합니다</label>
                            <input type="radio" name="agree2" id="agree_2">
                            <label for="agree_2">동의안함</label>
                        </dd>   
                    </div>
                </dl>
                <button type="submit" class="btn"><img src="<?=$ad_dir?>/images/btn.jpg" alt="무료상담 신청하기"></button>
            <?php echo form_close(); ?>
        </div>
        
    </div>
</body>
</html>

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
    
     if($('input:radio[id="agree"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
    
     if($('input:radio[id="agree2"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
     
    href = cb_url + '/postact/tenping_query_curl/<?php echo $jid?>/<?php echo $uid?>/<?php echo $at?>/'+post_md+mlh_id;
    $.ajax({
        async : false,
        url : href,
        type : 'get',
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
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
<?php } ?>
//]]>
 </script>
</body>
</html>