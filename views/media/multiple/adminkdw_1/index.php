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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
    <title>위너크림파워</title>
    <style>
    * {
        padding: 0;
        margin: 0;
    }
    ul,ol,li,dt,dd {
        list-style: none;
    }
    body {
        font-family: "맑은 고딕", 'Malgun Gothic', "나눔바른고딕", 'Nanum Barun Gothic', Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #333;
        line-height: 1.5;
    }
    a {
        color: inherit;
        text-decoration: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
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
        max-width: 640px;
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
    /* form */
    .form_container {
        background-color: #e5e5e5;
    }
    .inp_container {
        padding: 10px;
    }
    .inp_container table {
        width: 100%;
    }
    .inp_container .label_box {
        text-align: right;
        padding-right: 10px;
        vertical-align: middle;
    }
    .inp_container .inp_box {
        padding: 5px 10px 5px 0;
        vertical-align: middle;
        color: #000;
    }
    .inp_container .inp {
        box-sizing: border-box;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        border: 1px solid #ccc;
    }
    .inp_container .inp_normal {
        width: 100%;
    }
    .inp_container .inp_age {
        width: 80px;
    }
    .inp_container .inp_textarea {
        width: 100%;
        height: auto;
    }
    .inp_container .inp_check_box {
        padding: 15px 10px 5px 0;
    }
    .inp_container .btn_box {
        text-align: center;
        margin: 15px 0 20px;
    }
    .inp_container .btn_img {
        max-width: 80%;
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
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c01.jpg" alt="솟아올라라 위너크림파워" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c02.jpg" alt="위너크림파워로 잃어버린 자신감을 되찾으세요" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c03.jpg" alt="위너크림파워는 정제봉독을 이용한 조루치료 또는 발기부전 치료에 특허받은 제품입니다" class="img"></div>

        <!-- dbform01 -->
        <div class="form_container">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/db_top1.jpg" alt="매일밤 고민하는 남성의 자존심 지금바로 무료체험 신청하세요" class="img"></div>
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents01(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">       
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <div class="inp_container">
                    <table>
                        <tbody>
                            <tr>
                                <th class="label_box"><label for="mlh_name" class="label">이름</label></th>
                                <td class="inp_box">
                                    <input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name" class="input01 inp inp_normal" label="이름">                                    
                                </td>
                            </tr>
                            <tr>
                                <th class="label_box"><label for="mlh_age" class="label">나이</label></th>
                                <td class="inp_box">
                                    <input type="number" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" name="mlh_age" id="mlh_age" class="input01 inp inp_age" maxlength="2" label="나이">세
                                </td>
                            </tr>
                            <tr>
                                <th class="label_box"><label for="mlh_mobileno" class="label">연락처</label></th>
                                <td class="inp_box">
                                    <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_normal input01" label="연락처" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <th class="label_box"><label for="mlh_text" class="label">문의사항</label></th>
                                <td class="inp_box">
                                    <textarea name="mlh_text" id="mlh_text" rows="5" class="inp inp_textarea input01" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="inp_check_box txt_center" colspan="2">
                                    <input type="checkbox" name="agree" id="agree" checked>
                                    <label for="agree" class="txt_bold">개인정보 수집 및 이용동의</label>
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
                    <div class="btn_box">
                        <button type="submit" class="btn_img">
                            <img src="<?=$AD_DIR?>/images/btn.jpg" alt="무료체험 이벤트 신청하기" class="img">
                        </button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- dbform01 end -->
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c04.jpg" alt="위너크림 후기" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c05.jpg" alt="위너크림 성분" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c06.jpg" alt="제품 사용방법" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c07.jpg" alt="특허증" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/c08.jpg" alt="위너크림파워와 함께 이전의 영광을" class="img"></div>

        <!-- dbform02 -->
        <div class="form_container">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/db_top1.jpg" alt="매일밤 고민하는 남성의 자존심 지금바로 무료체험 신청하세요" class="img"></div>
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">       
            <input type="hidden" name="multi_code" id="multi_code_" value="<?php echo element('multi_code',$view);?>">
                <div class="inp_container">
                    <table>
                        <tbody>
                            <tr>
                                <th class="label_box"><label for="mlh_name_" class="label">이름</label></th>
                                <td class="inp_box">
                                    <input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name_" class="input02 inp inp_normal" label="이름">                                    
                                    
                                </td>
                            </tr>
                            <tr>
                                <th class="label_box"><label for="mlh_age_" class="label">나이</label></th>
                                <td class="inp_box">
                                    <input type="number" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" name="mlh_age" id="mlh_age_" class="input02 inp inp_age" maxlength="2" label="나이">세
                                </td>
                            </tr>
                            <tr>
                                <th class="label_box"><label for="mlh_mobileno_" class="label">연락처</label></th>
                                <td class="inp_box">
                                    <input type="tel" name="mlh_mobileno" id="mlh_mobileno_" class="inp inp_normal input02" label="연락처" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">

                                    
                                </td>
                            </tr>
                            <tr>
                                <th class="label_box"><label for="mlh_text_" class="label">문의사항</label></th>
                                <td class="inp_box">
                                    <textarea name="mlh_text" id="mlh_text_" rows="5" class="inp inp_textarea input02" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="inp_check_box txt_center" colspan="2">
                                    <input type="checkbox" name="agree" id="agree2" checked>
                                    <label for="agree2" class="txt_bold">개인정보 수집 및 이용동의</label>
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
                    <div class="btn_box">
                        <button type="submit" class="btn_img">
                            <img src="<?=$AD_DIR?>/images/btn.jpg" alt="무료체험 이벤트 신청하기" class="img">
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- dbform02 end -->
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

        function submitContents01(f) {
            var flag = false;
            var href;


            $('.input01').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree"]').is(":checked")) {
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
       
        function submitContents02(f) {
            var flag = false;
            var href;


            $('.input02').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree2"]').is(":checked")) {
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
    <?php if($this->session->flashdata('mlh_id')){?>
    // _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>