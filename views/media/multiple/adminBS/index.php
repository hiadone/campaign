<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php
    $this->managelayout->add_js('https://www.leadtracker.live/static/js/fixel.js'); 

    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>
<title>튼튼관절건강 중외신약 빠르카-관절</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    * {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    body {
        min-width: 320px;
        font-family: 'Nanum Gothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
    }
    button:focus {
        outline: none;
    }
    .blind {
        width: 1px;
        height: 1px;
        position: absolute;
        overflow: hidden;
        clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
        clip: rect(1px, 1px, 1px, 1px);
    }
    .wrap {
        width: 100%;
        max-width: 730px;
        margin: 0 auto;
    }
    .img_box {
        width: 100%;
        font-size: 0;
    }
    .img_box img {
        width: 100%;
        font-size: 14px;
    }
    .dbform_container {
        padding-top: 30.1369%;
        background-color: #0b3d81;
        background-image: url('<?php echo $ad_dir ?>/images/1234.jpg');
        background-size: 100%;
    }
    .dbform_container .user_info {
        display: table;
    }
    .dbform_container .row {
        display: table-row;
        width: 100%;
    }
    .dbform_container .lab_box {
        display: table-cell;
        width: 30%;
        vertical-align: middle;
    }
    .dbform_container .lab {
        display: block;
        width: 100%;
        height: 7.1232vw;
    }
    .dbform_container .inp_box {
        display: table-cell;
        width: 70%;
        padding-bottom: 6%;
    }
    .dbform_container .inp {
        border: none;
        height: 7.1232vw;
        padding: 1px 0;
        box-sizing: border-box;
        font-size: 16px;
        font-family: 'Nanum Gothic', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
    }
    .dbform_container .inp_txt {
        width: 48.9236%;
    }
    .dbform_container .inp_tel {
        width: 25.4403%;
        margin-right: 1.9%;
    }
    .dbform_container .inp_textarea {
        width: 86.8884%;
        height: 11.5068vw;
        padding: 2px;
    }
    .dbform_container .btn {
        font-size: 0;
        background: none;
        border: none;
    }
    .dbform_container .btn img {
        font-size: 14px;
        width: 100%;
    }
    @media screen and (min-width: 731px) {
        .dbform_container .lab {height: 52px;}
        .dbform_container .inp {height: 52px;}
        .dbform_container .inp_textarea {height: 84px;}
    }
    @media screen and (min-width: 500px) {
        .dbform_container .inp {
            font-size: 24px;
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
<div class="wrap">
    <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/a.jpg" alt="a.jpg"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/b.jpg" alt="b.jpg"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/c.jpg" alt="c.jpg"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/d.jpg" alt="d.jpg"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/e.jpg" alt="e.jpg"></div>

    <!-- form -->
    <div class="dbform_container">
        <h2 class="blind">건강한 관절관리 습관 빠르카 관절</h2>
        <p class="blind">30일 무료체험! 직접 먹어보고 구매결정하세요!</p>
        <?php
        $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
        echo form_open(current_full_url(), $attributes);
        ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="<?php  echo current_full_url()?>">
            <dl class="user_info">
                <div class="row">
                    <dt class="lab_box">
                        <label for="mlh_name" class="lab"><span class="blind">이름</span></label>
                    </dt>
                    <dd class="inp_box"><input type="text" name="mlh_name" id="mlh_name" class="inp inp_txt" label="이름"></dd>
                </div>
                <div class="row">
                    <dt class="lab_box">
                        <label for="mlh_age" class="lab"><span class="blind">나이</span></label>
                    </dt>
                    <dd class="inp_box">
                        <input type="tel" name="mlh_age" id="mlh_age" class="inp inp_txt" maxlength="2" label="나이" >
                    </dd>
                </div>
                <div class="row">
                    <dt class="lab_box">
                        <label for="mobileno" class="lab"><span class="blind">연락처</span></label>
                    </dt>
                    <dd class="inp_box">
                        <input type="tel" name="mlh_mobileno1" id="mlh_mobileno1" class="inp inp_tel" maxlength="3" label="연락처" >
                        <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="inp inp_tel" maxlength="4" label="연락처" >
                        <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="inp inp_tel" maxlength="4" label="연락처" >
                    </dd>
                </div>
                <div class="row">
                    <dt class="lab_box">
                        <label for="mlh_text" class="lab"><span class="blind">문의</span></label>
                    </dt>
                    <dd class="inp_box">
                        <textarea id="mlh_text" name="mlh_text" label="문의" class="inp inp_textarea" row="5"></textarea>
                    </dd>
                </div>
                
            </dl>

            <div class="btn_box">
                <button type="submit" class="btn">
                    <img src="<?php echo $ad_dir ?>/images/btn234.jpg" alt="가격알아보기">
                </button>
            </div>

            <div class="" style="color:red;font-family: bold;font-size:15px;text-align:center;margin-bottom:20px;">
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
        <?php echo form_close(); ?>
    </div>
</div>
<div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
<script>
function submitContents(f) {

    var flag=false;
    var href;

    $('.inp').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
}



<?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
</script>