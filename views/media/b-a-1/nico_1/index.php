<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php

$this->managelayout->add_js('https://www.leadtracker.live/static/js/fixel.js'); 
    $AD_DIR  = element('view_skin_url', $layout);
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
    <title>니코티닌</title>
    <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
    <style>
        * {
            padding: 0;
            margin: 0;
            outline: none;
        }
        body {
            font-family: 'Apple SD Gothic Neo','Malgun Gothic',arial,sans-serif;
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
        .wrap {
            width: 100%;
            min-width: 320px;
            max-width: 500px;
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
        .box_center {
            text-align: center;
        }
        .video_box {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            overflow: hidden;
            padding-bottom: 56.25%;
        }
        .video_box .video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
        /* form */
        select {
            background: #fff url('<?=$AD_DIR?>/images/arrow.png') no-repeat center right;
            -webkit-appearance: none;
        }
        .form_wrap {
            padding: 10px;
            background-color: #eee;
        }
        .form_container {
            border: 1px solid #ddd;
            background-color: #fff;
        }
        .form_title {
            padding: 10px;
        }
        .form_table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            background-color: transparent;
            margin: 0 auto;
        }
        .form_table .lab_box {
            padding: 0px 10px 0 0;
            vertical-align: middle;
            text-align: right;
        }
        .form_table .lab {
            font-size: 14px;
            color: #000;
        }
        .form_table .inp_box {
            padding: 5px 10px 5px 0;
            vertical-align: middle;
            font-size: 14px;
            color: #000;
        }
        .form_table .inp {
            height: 34px;
            padding: 6px 12px;
            border: 1px solid #ccc;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 0px;
            box-sizing: border-box;
        }
        .form_table .inp_name {
            display: block;
            width: 100%;
        }
        .form_table .inp_mobile {
            width: 65px;
        }
        .form_table .inp_mobile02 { 
            width: 60px;
        }
        .form_table .hyphen {
            font-size: 13px;
        }
        .form_table .inp_age {
            width: 80px;
        }
        .form_table .inp_select {
            width: 165px;
        }
        .agree_box {
            margin-top: 10px;
            padding: 5px 10px 5px 0;
        }
        .agree_box .lab_agree {
            margin-left: 5px;
            font-size: 14px;
        }
        .form_container .btn_box {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 0;
        }
        .form_container .btn_submit {
            max-width: 80%;
            min-width: 224px;
        }
        @media screen and (max-width: 359px){
            .form_table .lab_box {
                padding: 0px 5px 0 0;
            }
            .form_table .inp_mobile {
                width: 60px;
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
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img01.jpg" alt="흡연으로 쌓였던 니코틴, 유해물질 모두 배출!" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img02.gif" alt="니코티닌 효과" class="img"></div>
        <!-- video -->
        <div class="video_box">
            <iframe class="video" src="https://www.youtube.com/embed/6blQ5YgTV5Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- video end -->

        <div class="img_box" style="padding-top: 20px;"><img src="<?=$AD_DIR?>/images/img03.jpg" alt="관련기사" class="img"></div>

        <!-- form wrap -->
        <div class="form_wrap">
            <div class="form_container">
                <div class="img_box form_title"><img src="<?=$AD_DIR?>/images/sb_top.jpg" alt="나도 금연 성공할 수 있다" class="img"></div>

                <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">       
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno">
            <input type="hidden" name="mlh_text" value="" id="mlh_text">
                    <table class="form_table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_name" class="lab">이름</label>
                                </th>
                                <td class="inp_box">
                                    <input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name" class="inp input inp_name" label="이름">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_mobileno1" class="lab">연락처</label>
                                </th>
                                <td class="inp_box">
                                    <select name="mlh_mobileno1" id="mlh_mobileno1" class="inp input inp_mobile" label="연락처">

                                        <option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
                                        <option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
                                        <option value="018">018</option>
                                        <option value="016">016</option>
                                        <option value="017">017</option>
                                        <option value="02">02</option>
                                        <option value="031">031</option>
                                        <option value="032">032</option>
                                        <option value="033">033</option>
                                        <option value="041">041</option>
                                        <option value="042">042</option>
                                        <option value="043">043</option>
                                        <option value="051">051</option>
                                        <option value="052">052</option>
                                        <option value="053">053</option>
                                        <option value="054">054</option>
                                        <option value="055">055</option>
                                        <option value="061">061</option>
                                        <option value="062">062</option>
                                        <option value="063">063</option>
                                        <option value="064">064</option>
                                        <option value="070">070</option>
                                    </select> 
                                    <span class="hyphen">-</span>
                                    <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="inp input inp_mobile02" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>">
                                    <span class="hyphen">-</span>
                                    <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="inp input inp_mobile02" maxlength="4" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_age" class="lab">나이</label>
                                </th>
                                <td class="inp_box">
                                    <input type="number" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" name="mlh_age" id="mlh_age" class="inp input inp_age" label="나이"> 세
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_q_period" class="lab">흡연기간</label>
                                </th>
                                <td class="inp_box">
                                    <select name="mlh_q_period" id="mlh_q_period" class="inp input inp_select" label="흡연기간">
                                        <option <?php echo set_select('mlh_q_period','1년이하',true); ?>>1년이하</option>
                                        <option <?php echo set_select('mlh_q_period', '5년이하'); ?> >5년이하</option>
                                        <option <?php echo set_select('mlh_q_period', '10년이하'); ?> >10년이하</option>
                                        <option <?php echo set_select('mlh_q_period', '15년이상'); ?> >15년이상</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th class="lab_box">
                                    <label for="mlh_q_amount" class="lab">하루흡연량</label>
                                </th>
                                <td class="inp_box">
                                    <select name="mlh_q_amount" id="mlh_q_amount" class="inp input inp_select" label="하루 흡연량">
                                        <option <?php echo set_select('mlh_q_amount','반갑이하',true); ?>>반갑이하</option>
                                        <option <?php echo set_select('mlh_q_amount', '1갑이상'); ?> >1갑이상</option>
                                        <option <?php echo set_select('mlh_q_amount', '2갑이상'); ?> >2갑이상</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
                    <div class="agree_box box_center">
                        <input type="checkbox" name="agree" id="agree" checked class="inp_check">
                        <label class="lab_agree" for="agree">개인정보 수집 및 이용동의</label>
                    </div>
                    <div class="btn_box box_center">
                        <button type="submit" class="btn_img btn_submit"><img src="<?=$AD_DIR?>/images/button.png" alt="무료체험 신청하기" class="img"></button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- form wrap end -->
    </div>
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>  
    <script>
        // 한글 조사변경
        function getPostWord(str,firstVal,secondVal) {
            try {
                var lastStr = str[str.length-1].charCodeAt(0);
                if(lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if(lastCharIndex > 0) {
                    if(firstVal === "으로" && lastCharIndex === 8)
                        str += secondVal;
                    else
                        str += firstVal;
                } else {
                    str += secondVal;
                }
            } catch(e) {
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

            $("#mlh_text").val($('#mlh_q_period').val() +"_"+ $('#mlh_q_amount').val());

            if(!flag) return false;

            if($('input[id="agree"]').is(":checked")){
                $('.loading').show();
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
                         url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
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
            $('.loading').hide();
        <?php } ?>
    </script>
</body>
</html>