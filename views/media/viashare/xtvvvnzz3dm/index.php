<!-- <?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $AD_DIR  = element('view_skin_url', $layout);
    $click_key=0;
    if(!empty($_GET['click_key'])) $click_key=$_GET['click_key'];
    $via_token=0;
    if(!empty($_GET['via_token'])) $via_token=$_GET['via_token'];
    

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="format-detection" content="telephone=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>윙크학습</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        ul,
        li{
            list-style: none;
        }
        .blind{
            width:1px;
            height:1px;
            position:absolute;
            overflow:hidden;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
            clip: rect(1px, 1px, 1px, 1px);
        }
        .wrap{
            width: 100%;
            max-width: 720px;
            margin: 0 auto;
        }
        .img_box{
            font-size: 0;
        }
        .btn_scroll img,
        .img_box > img{
            width: 100%;
        }
        .wrap .btn_first{
            width: 94%;
            margin: 0 auto;
        }
        .dbform_box{
            position: relative;
        }
        .dbform_box .form{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-family: Dotum,'돋움',Arial,Gothic,sans-serif;
        }
/*
        .dbform_box .form form,
        .dbform_box .form .inp_wrap{
            position: relative;
            width: 100%;
            height: 100%;
        }
*/
        .dbform_box .form .inp_wrap{
            position: absolute;
            width: 47.222222%;
            height: 45.6%;
            top: 28.799999%;
            left: 6.25%;
        }
        .dbform_box .form .inp_box{
            position: absolute;
            width: 100%;
            height: 17.982456%;
            overflow: hidden;
        }
        .dbform_box .form .inp_box:nth-child(1){top: 0;}
        .dbform_box .form .inp_box:nth-child(2){top: 27.192982%;}
        .dbform_box .form .inp_box:nth-child(3){top: 55.263157%;}
        .dbform_box .form .inp_box:nth-child(4){bottom: 0;}
        .dbform_box .form label,
        .dbform_box .form input{
            display: block;
            width: 50%;
            height: 100%;
            min-height: 1px;
            box-sizing: border-box;
            float: left;
        }
        .dbform_box .form input{
            padding-left: 3px;
            border: none;
            font-size: 18px;
            background-color: transparent;
        }
        .dbform_box button{
            width: 65.277777%;
            height: 8.055555vw;
            max-height: 58px;
            box-sizing: border-box;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            border: none;
            background-color: transparent;
        }
		.dbform_box .txt_warning{
			position: absolute;
			left: 6.25%;    
			top: calc(74.399999% + 10px);
			margin-right: 6.25%;
			font-size: 11px;
			color: #f00;
			background-color: rgba(255,255,255,0.5);
			font-weight: bold;
			word-break: keep-all;
		}
		
        @media screen and (max-width:580px) and (min-width:431px){
            .dbform_box .form input{
                font-size: 16px;
            }
			.dbform_box .txt_warning{
				font-size: 10px;
			}
        }
        @media screen and (max-width:430px) and (min-width:1px){
            .dbform_box .form input{
                font-size: 14px;
            }
			.dbform_box .txt_warning{  
				top: calc(74.399999% + 5px);
				font-size: 10px;
			}
        }
        
            .video-wrap{
    position:relative;
}

.video-wrap.type2 img{
    display: none;
}

.video-wrap .video-area ~ .btn-play{
    top:28%;
}

.video-wrap.type2 .video-area ~ .btn-play{
    top:50%;
}

.video-wrap .video-area{
    position:absolute;
    top:0;
    left:0;
    right:0;
    width:100%;
    display:none;
}

.video-wrap.type2 .video-area{
    display: block;
    position: static;
}

.video-wrap .video-area img{
    position:absolute;
    top:0;
    left:0;
    right:0;
    width:100%;
    z-index:100;
}

.video-wrap .inner_video{
    padding:0 6% 0;
}

.video-wrap .video-area.play{
    display:block;
}

.event-type1 .fixed-btn-area{
    position:fixed;
    left:0;
    right:0;
    bottom:0;
    width:100%;
    height:50px;
    min-width:360px;
    background:#f03c78;
    text-align:center;
    padding:6px 0 0;
}

.event-type1 .fixed-btn-area .link-btn{
    height: 40px;
    width:calc(100% - 20%);
    max-width:400px;
    background-size: 100%;
    background-image: url('http://s.wink.co.kr/marketing/images/event_type1/btn_fixed.png');
}

.video-area{
    position:relative;
}

.video-area video{
    width:99%;
    vertical-align:top;
}

.video-area ~ .btn-play{
    position:absolute;
    top:50%;
    left:50%;
    margin:-34px 0 0 -34px;
    width:68px;
    height:68px;
    background:url('http://s.wink.co.kr/marketing/images/common/btn_play.png') no-repeat center center / 100%;
    z-index:110;
    text-indent:-9999em;
    animation: flash 1.2s infinite 0.1s ease-out;
}

.video-area.play ~ .btn-play{
    animation: none;
}
.video-area.play.on ~ .btn-play{
    display:none;
}
    </style>
    
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_01.jpg" alt="wink"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_02.jpg" alt="wink"></div>
        <!-- <div class="img_box btn_scroll btn_first"><a href="#dbform"><img src="<?=$AD_DIR?>/images/wink20190219_03.png" alt="책 4권까지 제공하는 윙크무료학습신청하러가기"></a></div> -->

        <div class="img_box btn_scroll">
            
            
            <img src="<?=$AD_DIR?>/images/wink20190219_10.png" alt="wink" style="max-width: 100%;cursor:pointer;" onClick="javascript:if(submitContents(document.fwrite)) document.fwrite.submit();">
        </div>


        <div class="img_box dbform_box" id="dbform">
            <img src="<?=$AD_DIR?>/images/wink_db.jpg" alt="">
            <div class="form">
                    <?php
                    $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                    echo form_open(current_full_url(), $attributes);
                    ?>
                    <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                    <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                    <input type="hidden" name="click_key" value="<?php echo $click_key?>">
                    <input type="hidden" name="via_token" value="<?php echo $via_token?>">
                    <ul class="inp_wrap">
                        <li class="inp_box">
                            <label for="userName"><span class="blind">보호자 성명</span></label>
                            <input type="text" class="input" id="mlh_name" name="mlh_name" label="보호자성명">
                        </li>
                        <li class="inp_box">
                            <label for="userTel"><span class="blind">연락처</span></label>
                            <input type="tel" class=" input" id="mlh_mobileno" name="mlh_mobileno" label="연락처">
                        </li>
                        <li class="inp_box">
                            <label for="childName"><span class="blind">자녀성명</span></label>
                            <input type="text" class="input" id="mlh_name_sub" name="mlh_name_sub" label="자녀성명">
                        </li>
                        <li class="inp_box">
                            <label for="childAge"><span class="blind">자녀나이</span></label>
                            <input type="number" class="input" name="mlh_age" id="mlh_age" label="자녀나이" style="width:80px; float:left;">
                        </li>
                        <li class="">
                            <span class="">자녀나이</span>
                            
                        </li>
                        
                    </ul>
					<div class="txt_warning">&#42; 윙크 무료학습혜택은 36개월 이상인 4&#126;8세 자녀가 있는 분께 제공됩니다. </div>
                    <button type="submit" class="fwrite_sm"><span class="blind">무료체험신청하기</span></button>


            <?php echo form_close(); ?>
            </div>
		</div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_04.jpg" alt="wink"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_05.jpg" alt="wink"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_06.jpg" alt="wink"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_07.jpg" alt="wink"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_08.jpg" alt="wink"></div>
        <div class="video-wrap type2">
                    

                    <div class="video-area">
                        

                        <div class="inner_video">
                            <video loop="" src="http://s.wink.co.kr/danbi_common/videos/wink_homepage.mp4" poster="http://s.wink.co.kr/marketing/images/event_type1/1.1.0/video_poster.jpg"></video>
                        </div>
                    </div>

                    <span  class="btn-play" >play</span>
        </div>
      
        <div class="img_box"><img src="<?=$AD_DIR?>/images/wink20190219_09.jpg" alt="wink"></div>
        <div class="img_box btn_scroll">
            
            
            
            <img src="<?=$AD_DIR?>/images/wink20190219_10.png" alt="wink" style="max-width: 100%;cursor:pointer;" onClick="javascript:if(submitContents2(document.fwrite2)) document.fwrite2.submit();">
        </div>


        <div class="img_box dbform_box" id="dbform2">
            <img src="<?=$AD_DIR?>/images/wink_db.jpg" alt="">
            <div class="form">
                    <?php
                    $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite2', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents2(this)');
                    echo form_open(current_full_url(), $attributes);
                    ?>
                    <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                    <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                    <input type="hidden" name="click_key" value="<?php echo $click_key?>">
                    <input type="hidden" name="via_token" value="<?php echo $via_token?>">
                    <ul class="inp_wrap">
                        <li class="inp_box">
                            <label for="userName"><span class="blind">보호자 성명</span></label>
                            <input type="text" class="input2" id="mlh_name" name="mlh_name" label="보호자성명">
                        </li>
                        <li class="inp_box">
                            <label for="userTel"><span class="blind">연락처</span></label>
                            <input type="tel" class=" input2" id="mlh_mobileno" name="mlh_mobileno" label="연락처">
                        </li>
                        <li class="inp_box">
                            <label for="childName"><span class="blind">자녀성명</span></label>
                            <input type="text" class="input2" id="mlh_name_sub" name="mlh_name_sub" label="자녀성명">
                        </li>
                        <li class="inp_box">
                            <label for="childAge"><span class="blind">자녀나이</span></label>
                            <input type="number" class="input2" name="mlh_age" id="mlh_age" label="자녀나이" style="width:80px; float:left;">
                        </li>
                        
                    </ul>
					<div class="txt_warning">&#42; 윙크 무료학습혜택은 36개월 이상인 4&#126;8세 자녀가 있는 분께 제공됩니다. </div>
                    <button type="submit" ><span class="blind">무료체험신청하기</span></button>


            <?php echo form_close(); ?>
            </div>
        </div>
        
    </div>
    <script>
        $(function(){
            $('.btn_scroll a').on('click',function(){
                var menuId = $(this).attr('href');
                var scrollName = $(menuId).offset().top;
                $('html,body').animate({scrollTop:scrollName},400,'swing');
                return false;
            });
        });
        
    </script>
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
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
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
    
     // if($('input:checkbox[id="agree2"]').is(":checked")){
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}

function cpaProc(mlh_id,mlh_mobileno,mlh_name) {
    var href;

    
     
    href = cb_url + '/postact/viashare_query_curl/<?php echo $click_key?>/<?php echo $via_token?>/'+mlh_id+'/'+mlh_mobileno+'/'+encodeURIComponent(mlh_name);
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
                 url : cb_url + '/media/viaProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
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
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo $this->session->flashdata('mlh_mobileno')  ?>','<?php echo $this->session->flashdata('mlh_name')  ?>');
<?php } ?>

//]]>
 </script>
 <script type="text/javascript">
        $(document).ready(function () {

           

            $('.btn-play').on('click', function () {
                var targetDom = $(this).parent().find('.video-area');
                var videoDom = $(this).parent().find('video');

                $(targetDom).removeClass('on');
                if (!!$(videoDom)[0].paused) {
                    $(targetDom).addClass('on');
                    $(targetDom).addClass('play');
                } else {
                    $(targetDom).removeClass('play');
                }
                $(videoDom)[0][$(videoDom)[0].paused ? 'play' : 'pause']();
            });

            $('.video-area').on('click', function () {
                var targetDom = $(this).find('video');

                if (!!$(targetDom)[0].paused) {
                    $(targetDom)[0].play();
                    $(this).addClass('on play');
                } else {
                    $(targetDom)[0].pause();
                    $(this).removeClass('on');
                }
            });

            

        });
    </script>
</body>
</html>