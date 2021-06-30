<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
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
    <title>핸드폰 최저가 판매</title>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            min-width: 320px;
            font-family: 'Nanum Gothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        table {
            border-collapse:collapse;
            border-spacing:0;
        }
        a {
            text-decoration: none;
        }
        .top_clock {
            height: 90px;
            margin-bottom: 16px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            background-color: #f4f5f6;
            border-bottom: 1px solid #ccc;
            line-height: 80px;
        }
        .top_clock .count {
            font-size: 30px;
            color: #e0882e;
        }
        .img_box {
            text-align: center;
            font-size: 0;
        }
        .img_box img {
            max-width: 730px;
            width: 100%;
            font-size: 14px;
        }
        /* form */
        .db_form {
            max-width: 730px;
            margin: 0 auto;
            text-align: left;
            font-size: 16px;
            color: #4c4c4c;
            font-family: Gulim, Dotum, Helvetica, Arial;
        }
        .db_form .label_cell {
            width: 90px;
            padding-left: 20px;
            padding-top: 25px;
            font-weight: bold;
            font-size: 20px;
            text-align: left;
        }
        .db_form .inp {
            margin: 14px 0 0 20px;
            padding: 0 0 0 10px;
            height: 45px;
            box-sizing: content-box;
            border-radius: .2em;
            background-color: #fff;
            border: 4px solid #c8c8cc;
            font-size: 16px;
            color: #4c4c4c;
            font-family: Gulim, Dotum, Helvetica, Arial;
        }
        .db_form .inp_txt {
            width: 90%;
        }
        .db_form .inp_tel {
            width: 23%;
        }
        .db_form .inp_tel:not(:first-child) {
            margin-left: 0;
        }
        .db_form .inp_select {
            width: 90%;
        }
        .db_form .inp_last {
            margin-bottom: 10px;
        }
        .db_form .agree_box {
            margin: 20px 0;
            padding-left: 30px;
            text-align: center;
        }
        .db_form .btn {
            max-width: 730px;
            border: none;
            background-color: transparent;
        }
        .db_form .btn:focus {
            outline: none;
        }
        .db_form .btn img {
            width: 100%;
        }
        .bottom_link {
            padding: 40px 0 20px;
            text-align: center;
        }
        @media screen and (max-width: 599px) {
            .top_clock {
                height: 75px;
                font-size: 16px;
                line-height: 70px;
            }
            .top_clock .count {
                font-size: 24px;
            }
            .db_form .label_cell {
                width: 23%;
                padding-left: 3%;
                padding-top: 3.5%;
                font-size: 16px;
                text-align: left;
            }
            .db_form .inp {
                margin: 2.6% 0 0 2%;
                padding: 0 0px 0 1.9%;
                height: 40px;
                border: 3px solid #c8c8cc;
                font-size: 15px;
            }
            .db_form .agree_box {
                padding-left: 4%;
                font-size: 14px;
            }
            .bottom_link {
                font-size: 14px;
            }

            

           
        }

        .alert 
            {
                padding: 20px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
                font-size:18px;
                
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
    <script src="https://www.leadtracker.live/static/js/fixel.js"></script>
</head>
<body>

    <div class="top_clock">
        마감까지 <span class="count"><span id="counter1">13</span>: <span id="counter2">42</span>: <span id="counter3">56</span></span> 남았습니다.
    </div>
    <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
    <div class="wrap">
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/11.jpg" alt="최대지원금 압도적 혜택"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/22.jpg" alt="Galaxy Note 10 5G 256GB"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/33.jpg" alt="Galaxy Note 10+ 5G 256GB"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/44.jpg" alt="Galaxy Note 10+ 5G 512GB"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/55.jpg" alt="Galaxy S10 5G 256GB"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/66.jpg" alt="Galaxy S10 5G 512GB"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/77.jpg" alt="Galaxy S10 5G 출시기념 이벤트"></div>

        <div class="db_form">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="mlh_age" id="mlh_age" value="30">            
            <input type="hidden" name="mlh_text" id="mlh_text" value="">            
                <table style="width:100%">
                    <tbody>
                        <tr>
                            <td class="label_cell">
                                <label for="mlh_name" class="label">성 함</label>
                            </td>
                            <td class="inp_cell">
                                <input type="text"  id="mlh_name" name="mlh_name" label="이름" class="inp inp_txt input" value="<?php echo set_value('mlh_name',$this->input->post('mlh_name')); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td class="label_cell">
                                <label for="mlh_mobileno" class="label">연락처</label>
                            </td>
                            <td class="inp_cell">
                                <input type="tel" class="inp  input" style="width:90%" id="mlh_mobileno" name="mlh_mobileno" label="휴대폰번호" value="<?php echo set_value('mlh_mobileno',$this->input->post('mlh_mobileno')); ?>"></li>
                            </td>
                        </tr>
                        <tr>
                            <td class="label_cell">
                                <label for="" class="label">통신사</label>
                            </td>
                            <td class="inp_cell">
                                <select name="t_a" id="t_a" class="inp inp_select">
                                    <option value="">선택하세요</option>
                                    <option value="SKT">SKT</option>
                                    <option value="KT">KT</option>
                                    <option value="LG U+">LG U+</option>
                                    <option value="기타">기타</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label_cell">
                                <label for="" class="label">희망기종</label>
                            </td>
                            <td class="inp_cell">
                                <select name="t_b" id="t_b" class="inp inp_select" class="inp inp_select inp_last">
                                    <option value="">선택하세요</option>
                                    <option value="갤럭시 노트10">갤럭시 노트10</option>
                                    <option value="갤럭시 노트10+ (256)">갤럭시 노트10+ (256)</option>
                                    <option value="갤럭시 노트10+ (512)">갤럭시 노트10+ (512)</option>
                                    <option value="갤럭시 S10 (256)">갤럭시 S10 (256)</option>
                                    <option value="갤럭시 S10 (512)">갤럭시 S10 (512)</option>
                                </select>
                            </td>
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
                <div class="agree_box">
                    <input type="checkbox" name="agree" id="agree">
                    <label for="agree">개인정보 수집/이용 동의 </label>
                    <a href="http://onlineph6.com/policy1.txt" class="agree_link" target="_blank">[상세보기]</a>
                </div>
                <div class="btn_box">
                    <button class="btn" type="submit"><img src="<?php echo $ad_dir ?>/images/btn11.jpg" alt="이벤트 신청하기"></button>
                </div>
                <div class="img_box"><img src="<?php echo $ad_dir ?>/images/88.jpg" alt="신용불량자 및 장기 미납자는 진행이 불가할 수 있습니다."></div>
            <?php echo form_close(); ?>
        </div>
        <div class="bottom_link">
            <a href="http://www.ictmarket.or.kr/ajax/ajax3.do?id=PRE0000111839&seq=1&yn=1" class="link" target="_blank">사전승낙서</a>
        </div>

        <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
    </div>
    <script>
        function getTime2() { 
            now = new Date(); 
            dday = new Date(2019,12,31,24,00,00); // 원하는 날짜, 시간 정확하게 초단위까지 기입.
            days = (dday - now) / 1000 / 60 / 60 / 24; 
            daysRound = Math.floor(days); 
            hours = (dday - now) / 1000 / 60 / 60 - (24 * daysRound); 
            hoursRound = Math.floor(hours); 
            minutes = (dday - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound); 
            minutesRound = Math.floor(minutes); 
            seconds = (dday - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound); 
            secondsRound = Math.round(seconds);
            
            if (hoursRound < 10) hoursRound = '0' + hoursRound 
            if (minutesRound < 10) minutesRound = '0' + minutesRound 
            if (secondsRound < 10) secondsRound = '0' + secondsRound 
            
            document.getElementById("counter1").innerHTML = hoursRound; 
            document.getElementById("counter2").innerHTML = minutesRound; 
            document.getElementById("counter3").innerHTML = secondsRound; 
            newtime = window.setTimeout("getTime2();", 1000); 
        }

        getTime2();
    </script>

</body>
</html>


<script type="text/javascript">
//<![CDATA[
function submitContents(f) {
    var flag=false;
    var href;
    var checkDev = [];

    if (!jQuery.trim($("#t_a option:selected").val())) {
            alert('통신사를 선택하세요.');
            return false;
    } else {
            checkDev.push($("#t_a option:selected").val());
    }

    if (!jQuery.trim($("#t_b option:selected").val())) {
            alert('희망기종을 선택하세요.');
            return false;
    } else {
            checkDev.push($("#t_b option:selected").val());
    }

    $("#mlh_text").val(checkDev.join('_'));

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

<?php if($this->session->flashdata('mlh_id')){?>
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>


//]]>
 </script>