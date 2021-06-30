<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />

<script src="http://www.beelineinsu2.com/@jscss/js/jquery.cookie.js"></script>
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>메디컬 토픽</title>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        body {
            min-width: 320px;
            font-family: 'Nanum Gothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            background-color: #333;
        }
        table {
            border-collapse: separate;
            border-spacing:0;
        }
        a {
            text-decoration: none;
        }
        .wrap {
            width: 100%;
            max-width: 818px;
            margin: 0 auto;
            padding-bottom: 14.3%;
            background-color: #fff;
        }
        .container {
            padding: 0 5%;
        }
        .bottom_fixed {
            position: fixed;
            bottom: 0;
            width: 100%;
            max-width: 818px;
            z-index: 500;
            font-size: 0;
        }
        .bottom_fixed img {
            width: 100%;
            font-size: 14px;
        }
        .img_box {
            width: 100%;
            font-size: 0;
        }
        .img_box img {
            width: 100%;
            font-size: 14px;
        }
        .tit01 {
            font-family: 'NanumBarunGothicBold','NanumBarunGothic',sans-serif;
            font-size: 34px;
            line-height: 57px;
            padding-bottom: 10px;
        }
        .tit02 {
            font-family: 'NanumBarunGothicBold','NanumBarunGothic',sans-serif;
            font-size: 24px;
            padding-top: 20px;
            line-height: 40px;
            margin-bottom: 5.7%;
        }
        .tit02 .red {
            color: #f00;
            font-weight: bold;
        }
        .txt_news {
            margin: 5.7% 0;
            font-size: 26px;
            line-height: 42px;
        }
        .caption {
            font-size: 13px;
        }
        .video {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 53.178%;
        }
        .video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* form */
        .form_container {
            background-color: #f9f9f9;
        }
        .db_form .ad_txt {
            padding: 10px 0;
            text-align: center;
            font-size: 12px;
        }
        .db_form .date {
            margin: 10px 0 5px;
            text-align: center;
            font-size: 20px;
            font-family: '맑은고딕 Bold',MGB,sans-serif;
        }
        .db_form .form_table {
            width: 90%;
            max-width: 572px;
            margin: 15px auto 0;
        }
        .db_form .tr_h {
            height: 8px;
        }
        .db_form .cell {
            padding: 5px;
            background-color: #fff;
            border: 1px solid #000;
        }
        .db_form .label_cell {
            border-right: none;
            width: 30%;
            font-size: 0;
        }
        .db_form .label_cell img {
            font-size: 14px;
            width: 98%;
        }
        .db_form .inp_cell {
            width: 70%;
            border-left: none;
        }
        .db_form .inp {
            border: none;
            background-color: transparent;
            width: 97%;
            height: 30px;
            padding: 3px 5px;
            font-size: 15px;
        }
        .db_form .inp:focus {
            outline: none;
        }
        .db_form .agree_box {
            text-align: center;
            padding: 2% 0%;
            line-height: 18px;
            font-size: 12px;
        }
        .db_form .agree_box .link {
            color: #687ec7;
        }
        .db_form .agree_box .inp_check {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }
        .db_form .btn_box {
            padding: 10px 0;
            text-align: center;
        }
        .db_form .btn {
            width: 80%;
            font-size: 0;
            background-color: transparent;
            border: none;
        }
        .db_form .btn img{
            font-size: 14px;
            width: 100%;
        }
        .db_form .agree_info_box {
            display: none;
            padding: 10px;
            margin: 0 0 20px 0;
            border: 1px solid #c2c2c2;
            border-radius: 5px;
            text-align: left;
            background-color: #fff;
        }
        .db_form .btn_info_box {
            text-align: right;
        }
        .db_form .btn_info_box a {
            float: right;
        }
        .db_form .agree_tit {
            margin: 0;
            line-height: 25px;
            padding: 0;
            color: #444;
            font-size: 13px;
        }
        .db_form .agree_txt {
            line-height: 19px;
            font-size: 12px;
            color: #444;
            letter-spacing: -1px;
        }

        @media screen and (min-width: 819px) {
            .wrap {
                padding-bottom: 117px;
            }
            .tit02 {
                margin-bottom: 42px;
            }
            .txt_news {
                margin: 42px 0;
            }
            .db_form .btn {
                width: 700px;
            }
            .tit01 {
                font-size: 44px;
            }
            .tit02 {
                font-size: 32px;
            }
        }
        @media screen and (max-width: 600px) {
            .container {
                padding: 0 4%;
            }
            .tit01 {
                font-size: 23.5px;
                font-weight: bold;
                line-height: 37px;
                letter-spacing: -2px;
            }
            .tit02 {
                font-size: 17px;
                line-height: 30px;
                letter-spacing: -1px;
                padding-top: 10px;
            }
            .txt_news {
                font-size: 18px;
                line-height: 25px;
            }
            .db_form .date {
                font-size: 15px;
                letter-spacing: -1px;
            }
            .db_form .agree_box {
                font-size: 11px;
                letter-spacing: -1px;
            }
            .db_form .btn_info_box a {
                width: 36%;
            }
            .db_form .btn_info_box img {
                width: 100%;
            }
        }
        @media screen and (max-width: 359px) {
            .db_form .agree_box {
                font-size: 10px;
            }
            .db_form .date {
                margin: 5px 0 5px;
                font-size: 13px;
                letter-spacing: -2px;
            }
            .db_form .ad_txt {
                font-size: 12px;
                letter-spacing: -2px;
            }
        }


        .alert 
            {
                padding: 20px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
                font-size:18px;
                line-height: 27px;
            }
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}

.alert-info {
  background-image: -webkit-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
  background-image: -o-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
  background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#b9def0));
  background-image: linear-gradient(to bottom, #d9edf7 0%, #b9def0 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);
  background-repeat: repeat-x;
  border-color: #9acfea;
}
    </style>
    <script>
var DBIS_QS = window.location.href.split('?');var DBIS_PARAM= (DBIS_QS[1] != undefined) ? DBIS_QS[1].split('&') : '';var DBIS_CNT=  DBIS_PARAM.length;for(var i=0;i<DBIS_CNT;i++) {var DBIS_CD = DBIS_PARAM[i].split('=');if(DBIS_CD[0]=='CD') {if(DBIS_CD[1]!='') {var
DBIS_OLD = $.cookie("DBIS");if(DBIS_OLD!=DBIS_CD[1]) {var nowtime = new Date();now = nowtime.getFullYear() + "" +  (nowtime.getMonth() + 1 < 10 ? "0" + (nowtime.getMonth() + 1) : nowtime.getMonth() + 1) + "" + (nowtime.getDate() < 10 ? "0" +
nowtime.getDate() : nowtime.getDate());$.cookie("DBIS",null);$.cookie("DBIS",DBIS_CD[1]+"_DBIS_"+now, { expires: 30, path: '/' });}break;}}}
</script>
    <script src="https://www.leadtracker.live/static/js/fixel.js"></script>
</head>
<body>
    <div class="wrap">
        
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="bottom_fixed">
            <a href="#formBox"><img src="<?php echo $ad_dir ?>/images/btn_newSb.png" alt="무료상담 신청 및 가격 알아보기"></a>
        </div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/event_main_01.jpg" alt="메디컬 토픽"></div>
        <div class="container">
            <div class="tit01">
                무릎,허리,손목 등 관절고민<br>
                <strong>라이토 플렉스 3주 섭취로 호전되는 효과</strong>
            </div>
            <div class="tit02">
                <span class="red">- 류마티스까지 잡는 관절효자상품, 불만족시 환불!</span>
                <br>
                - 라이토플렉스, 재구매율 89.1% 달성!
            </div>
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_01.jpg" alt="특보 로즈힙, 관절건강 통증개선 효과 집중 조명"></div>
            <div class="txt_news">
                슈퍼푸드 하면 블루계열의 베리류가 대표적인데 최근 붉은색 슈퍼푸드인 로즈힙이 관절에 대한 효과가 부각되면서 이슈가 되고 있다. 그렇다면 과연 로즈힙은 몸 속에서 어떤 기능을 하기에 관절에 좋은 효과가 나는 것일까? 로즈힙 성분과 효능에 대해 알아본다.
            </div>
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_03.gif" alt="로즈힙 영양소"></div>
            <div class="txt_news">
                로즈힙은 1999년 항염효과 및 면역력개선효과가 있다는 것이 확인되면서 유럽과 미국에서는 일찍이 관절기능개선 건강식품으로 신뢰를 받고 있으며, 스웨덴에서는 처방에 의해 국가에서 글루코사민을 지급함에도 환자들은 로즈힙을 구매하여 섭취하고 있다고 한다.능성을 줄였다. 이 외에도 수술 시간을 단축시켜 환자의 수술 부담감을 줄였다.
            </div>
            <div class="txt_news">
                로즈힙 분말을 하루 5g씩 3주만 섭취해도 관절개선에 대한 효과를 바로 볼 수 있는데, 최근 유럽 연골건강기능식품 1위 로 선정, 로즈힙 분말 100%로 만들어진 '라이토플렉스'가 드디어 국내에서 20만개 이상 판매되며 이슈가 되고 있다.
            </div>
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_02.jpg" alt="임상테스트 결과"></div>
            <div class="txt_news">
                라이토플렉스는 일찍이 식약처로부터 인정받은 관절 및 연골건강 기능식품의 원료인 덴마크 오리지널 로즈힙 분말 100%가 함유 되어있고, 특수저온 건조 방식으로 과육은 물론 씨와 껍질까지 통으로 갈아서 만든 순식물성 제품이기 때문에 부작용이 없다는 것이 큰 장점이다.
            </div>
            <div class="txt_news">
                실제 라이토플렉스 구매고객 약 2,300명을 대상으로 설문조사를 시행한 결과, 통증이 유의미하게 호전되고 관절의 움직이 많이 부드러워졌다고 응답한 비율이 94.6%에 달하며, 이들 중 재구매로 이루어진 고객의 비율은 89.1%로 높은 수치를 나타내었다.
                <div class="caption">
                    [개인마다 효능에 차이가 있을 수 있습니다]
                </div>
            </div>
            
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/FueiW2gWszI?autoplay=1&amp;loop=1&amp;playsinline=1" frameborder="0" allowfullscreen=""></iframe>
        </div>
        <div class="form_container" id="formBox">
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_04.jpg" alt="망설이지 말고 지금 관절 고통에서 벗어나세요"></div>
            <div class="db_form">
                <div class="ad_txt">안심하세요! 라이토플렉스에서는 고객님의 소중한 개인정보를 <br>상담 외 어떠한 목적으로도 사용하지 않습니다.</div>
                <div class="date">이벤트 기간 : 2019년 08월 01일 ~ 2019년 08월 31일 까지</div>
                <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            
            
                    <table class="form_table">
                        <tbody>
                            <tr>
                                <th class="cell label_cell"><img src="<?php echo $ad_dir ?>/images/name_02.png" alt="성함"></th>
                                <td class="cell inp_cell"><input type="text" value="<?php echo set_value('mlh_name',$this->input->post('mlh_name')); ?>" class="inp input" id="mlh_name" name="mlh_name" label="성함"></td>
                            </tr>
                            <tr class="tr_h"></tr>
                            <tr>
                                <th class="cell label_cell"><img src="<?php echo $ad_dir ?>/images/age.png" alt="나이"></th>
                                <td class="cell inp_cell"><input type="number" value="<?php echo set_value('mlh_age',$this->input->post('mlh_age')); ?>" class="inp input" maxlength="2" name="mlh_age" id="mlh_age" label="나이"></td>
                            </tr>
                            <tr class="tr_h"></tr>
                            <tr>
                                <th class="cell label_cell"><img src="<?php echo $ad_dir ?>/images/phone_01.png" alt="전화번호"></th>
                                <td class="cell inp_cell"><input type="tel"  class="inp input" maxlength="15" id="mlh_mobileno" name="mlh_mobileno" label="연락처" value="<?php echo set_value('mlh_mobileno',$this->input->post('mlh_mobileno')); ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="" style="color:red;font-family: bold;font-size:20px;text-align:center;">
                   <?php 
                   $comment='';
                   if(!empty(element('campaign_age',element('extravars',element('post', $view)))) || element('campaign_gender',element('extravars',element('post', $view))) !=='제한없음'){
                       $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                       $campaign_age[0]=trim($campaign_age[0]);
                       $campaign_age[1]=trim($campaign_age[1]);

                       if(!empty($campaign_age[0])) $comment=$campaign_age[0].'세 이상 ';
                       if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하 ';
                       if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                       $comment .='만 참여 가능합니다.';

                       echo $comment;
                   }
                       
                   ?>
                </div>
                    <div class="agree">
                        <div class="agree_box">
                            <input type="checkbox" name="agree" id="agree" class="inp_check">
                            <label for="agree" class="label">아래의 개인정보 수집 및 이용에 관한 내용을 확인하고 동의함 </label>
                            <a href="" class="link link-detail">[자세히 보기]</a>
                        </div>
                        <div class="agree_info_box">
                            <div class="btn_info_box"><a href=""><img src="<?php echo $ad_dir ?>/images/agBox_c.jpg" alt="개인정보 취급방침보기"></a></div>
                            <div class="agree_info">
                                <h2 class="agree_tit">개인정보수집정책</h2>
                                <ul class="agree_txt">
                                    <li>개인정보 수집 및 이용</li>
                                    <li>개인정보 수집주체 : 아벨라큐브</li>
                                    <li>개인정보 수집항목 : 이름, 나이, 전화번호</li>
                                    <li>개인정보 수집 및 이용목적 : 아벨라큐브에서 라이토플렉스 상담 활용 (전화, 문자)</li>
                                    <li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li>
                                    <li><br></li>
                                </ul>
                                <h2 class="agree_tit">개인정보 취급 위탁</h2>
                                <ul class="agree_txt">
                                    <li>개인정보 취급 위탁을 받는자 : (주)케어랩스</li>
                                    <li>개인정보 취급 위탁을 하는 업무의 내용 : 고객정보 저장 및 서버관리</li>
                                    <li><br></li>
                                    <li>*상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 라이토플렉스 관리 상담 및 이벤트 참여가 불가능합니다.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn_box">
                        <button class="btn" type="submit"><img src="<?php echo $ad_dir ?>/images/db_btn.png" alt="무료상담 신청 및 가격 알아보기"></button>
                    </div>
                    <?php echo form_close(); ?>
                <div class="date">이벤트 기간 : 2019년 08월 01일 ~ 2019년 08월 31일 까지</div>
                <div class="ad_txt">
                    안심하세요! 아벨라큐브에서는 고객님의 소중한 개인정보를 <br> 
                    상담 외 어떠한 목적으로도 사용하지 않습니다. <br>
                    <br>
                    대상 : GDN 이용자
                </div>
            </div>
        </div>
        <div class="container">
            <div class="txt_news">
                특히 라이토플렉스의 큰 차별점은 GOPO(고포)라는 로즈힙에서 나오는 관절과 연골을 위한 기능성분으로 덴마크 hyben-vital사가 천연로즈힙을 특허된 특수방식으로 건조하여 활성화한 특성물질이 포함 되어있다.
            </div>
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_05.gif" alt="관절"></div>
            <div class="txt_news">
                미국의 과학전문지 &lt;라이브사이언스&gt;는 로즈힙분말에 있는 GOPO(고포)라는 특허물질이 관절염과 통증을 완화 해준다는 연구발표를 하였고, 라이토플렉스는 GOPO(고포) 성분을 포함하고 있어 관절통증과 뻣뻣함을 줄이고 관절조직을 보호, 잠재적으로 재생까지도 할 수 가 있다고 하였다.
            </div>
            <div class="txt_news">
                현재 관절건강기능식품 분야 최단시간 20만개 판매돌파를 한 라이토플렉스에서는 추가분 증정 및 효과 없을 시 100% 환불 보장제도를 시행 하고 있다고 하니, 관절로 고민하시는 분들은 망설이지말고 이 기회를 놓치지 않길 바라겠다.
            </div>
        </div>
        <div class="video">
            <iframe src="https://www.youtube.com/embed/FueiW2gWszI?autoplay=1&amp;loop=1&amp;playsinline=1" frameborder="0" allowfullscreen=""></iframe>
        </div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_04.jpg" alt="망설이지 말고 지금 관절 고통에서 벗어나세요"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/img_06.jpg" alt="상호명: 제이에스 바이오, 대표자: 안선형, 사업자 등록번호: 545-30-00271, 사업장소재지: 서울 특별시 성동구 왕십리로 26길 9"></div>
    </div>

    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
    <script>
        // [자세히 보기]클릭시 
        $('.link-detail').on('click', function(){
            $('.agree_info_box').toggle();
            return false;
        });
    </script>
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
    
     if($('input:checkbox[id="agree"]').is(":checked")){
        $('.loading').show();
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

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
    
     if($('input:checkbox[id="agree2"]').is(":checked")){
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

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

function cpaProc(mlh_id) {
    $('.preloader').show();
    var href;

    
     
    href = cb_url + '/postact/linkasia_beelineinsu_cpa_curl/'+mlh_id+'/<?php echo $this->session->flashdata('mlh_mobileno') ?>/'+encodeURIComponent("<?php echo $this->session->flashdata('mlh_name') ?>")+'/<?php echo $this->session->flashdata('mlh_age') ?>';
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
                     url : cb_url + '/media/act_laProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
                     type : 'get',
                     dataType : 'json',
                     success : function(data) {
                          
                     }
                 });

                $('.preloader').hide();
                if (response.responseJSON.ResultCode == '1111') {
                    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>');
                }
           
           }
                
                

            
           
        }

    });


    
}

<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>);   
    $('.loading').hide();
<?php } ?>


//]]>
 </script>
