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
<!DOCTYPE HTML>
<html lang="ko">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="robots" content="index,follow">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Expires" content="-1">

  <title>매너지-12</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?=$AD_DIR?>/css/style.css"/>
  
<style>
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
<script type='text/javascript'>

    function onlyNumber(event){
            event = event || window.event;
            var keyID = (event.which) ? event.which : event.keyCode;
            if ( (keyID >= 48 && keyID <= 57) || (keyID >= 96 && keyID <= 105) || keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
                return;
            else
                return false;
        }
        function removeChar(event) {
            event = event || window.event;
            var keyID = (event.which) ? event.which : event.keyCode;
            if ( keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
                return;
            else
                event.target.value = event.target.value.replace(/[^0-9]/g, "");
        }

        function fnMove(){
            var offset = $("#inDB").offset();
            $('html, body').animate({scrollTop : offset.top}, 400);
        }

</script>
</head>
<body>

    <div class="container">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <section><img src="<?=$AD_DIR?>/images/c01.png?V=1"></section>
        
        <section>
            <div class="inDB">
                <div class="inbox">
                <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents01(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno">
                    <table>
                        <colgroup>
                            <col width="">
                            <col width="">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>이름</th>
                                <td><input type="text" class="form-class input01" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name" label="이름"></td>
                            </tr>
                            <tr>
                                <th>연락처</th>
                                <td>
                                    <select name="mlh_mobileno1" id="mlh_mobileno1" class="form-class input01" label="연락처"  style="width: 65px; display:inline-block;">
                                        <option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
                                        <option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
                                        <option <?php echo set_select('mlh_mobileno1', '016'); ?>>016</option>
                                        <option <?php echo set_select('mlh_mobileno1', '017'); ?>>017</option>
                                        <option <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
                                        <option <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
                                          
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
                                        <strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
                                        <input name="mlh_mobileno2" id="mlh_mobileno2" class="form-class input01" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"  style="width: 60px; display:inline-block;" type="tel" maxlength="4">
                                        <strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
                                        <input name="mlh_mobileno3" id="mlh_mobileno3" class="form-class input01" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>" style="width: 60px; display:inline-block;" type="tel" maxlength="4">
                                </td>
                            </tr>
                            <tr>
                                <th>나이</th>
                                <td><input type="number" class="form-class input01" name="mlh_age" id="mlh_age" style="width:80px; float:left;" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" label="나이"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
                            </tr>
                            <tr>
                                <th>문의사항</th>
                                <td>
                                    <textarea class="form-class input01" rows="3" name="mlh_text" id="mlh_text" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="t-center">
                                    <div class="checkbox">
                                        <input type="checkbox" name="" id="agree" checked> <label for="agree">개인정보 수집 및 이용동의</label>
                                    </div>
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
                        <a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.png" style="width:100%"></a>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </section>
        <section><img src="<?=$AD_DIR?>/images/c02.png?v=1"></section>
        <section><img src="<?=$AD_DIR?>/images/c03.png?V=1"></section>


            <section id="inDB">
            <div class="inDB">
                <div class="inbox">
                    <div class="inbox">
                <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno_">
                    <table>
                        <colgroup>
                            <col width="">
                            <col width="">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>이름</th>
                                <td><input type="text" class="form-class input02" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name_" label="이름"></td>
                                
                            </tr>
                            <tr>
                                <th>연락처</th>
                                <td>
                                    <select name="mlh_mobileno1" id="mlh_mobileno1_" class="form-class input02" label="연락처"  style="width: 65px; display:inline-block;">
                                        <option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
                                        <option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
                                        <option <?php echo set_select('mlh_mobileno1', '016'); ?>>016</option>
                                        <option <?php echo set_select('mlh_mobileno1', '017'); ?>>017</option>
                                        <option <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
                                        <option <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
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
                                        <strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
                                        <input name="mlh_mobileno2" id="mlh_mobileno2_" class="form-class input02" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"  style="width: 60px; display:inline-block;" type="tel" maxlength="4">
                                        <strong><span style="color: rgb(0, 0, 0); font-size: 13px;">-</span></strong>
                                        <input name="mlh_mobileno3" id="mlh_mobileno3_" class="form-class input02" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>" style="width: 60px; display:inline-block;" type="tel" maxlength="4">
                                </td>
                            </tr>
                            <tr>
                                <th>나이</th>
                                <td><input type="number" class="form-class input02" name="mlh_age" id="mlh_age_" style="width:80px; float:left;" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" label="나이"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
                            </tr>
                            <tr>
                                <th>문의사항</th>
                                <td>
                                    <textarea class="form-class input02" rows="3" name="mlh_text" id="mlh_text_" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="t-center">
                                    <div class="checkbox">
                                        <input type="checkbox" name="" id="agree2" checked> <label for="agree2">개인정보 수집 및 이용동의</label>
                                    </div>
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
                    <a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.png" style="width:100%"></a>
                </div>
            </div>
            <?php echo form_close(); ?>
            </section>
            <section></section>
            <footer>
                <p><img src="<?=$AD_DIR?>/images/m3.jpg"></p>
                <p><img src="<?=$AD_DIR?>/images/footer.jpg"></p>
            </footer>
</div>
<div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    

<!--//
<form id="frm" name="frm" method="post">
    <input type="hidden"  name="name"  value="" />
    <input type="hidden"  name="age"  value="" />
    <input type="hidden"  name="phone"  value="" />
</form>
//-->

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
                        $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

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
                        $("#mlh_mobileno_").val($("#mlh_mobileno1_").val()+$("#mlh_mobileno2_").val()+$("#mlh_mobileno3_").val());
                        
                    }
                });

                return flag;

                
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

            return false;
        }

        function submitContents03(f) {
            var flag = false;
            var href;


            $('.input03').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree03"]').is(":checked")) {

                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                    }
                });

                return flag;

                
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

            return false;
        }

    <?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>