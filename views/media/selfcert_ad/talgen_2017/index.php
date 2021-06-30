<?php
	$AD_DIR  = element('view_skin_url', $layout);
 if ($this->cbconfig->item('use_selfcert') && ($this->cbconfig->item('use_selfcert_phone') OR $this->cbconfig->item('use_selfcert_ipin'))) {
    	$this->managelayout->add_js(base_url('assets/js/member_selfcert.js'));
	}


?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<title>국내최초 신개념 탈모두피 전문관리</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="-1">


<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">
<!-- Performax Web CPA Tracker v1 :: Landing Tag -->

<style>
.movie { 
	position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
    padding-bottom: 56.25%;
}
.movie > iframe { 
	position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
<script type="text/javascript">

    $(document).ready(function(){
            $('#scrollToBottom').bind("click", function () {
                // $('html, body').animate({scrollTop : $("#" + sObj).offset().top-$(window).height()+$('.db_click').height()});
                $('html, body').animate({ scrollTop: $(document).height() },1500);
                return false;
            });

            $('#consult').bind("click", function () {
                $("#bottom_blank").css('height',$('#consult > img').height()+10);
                // $('html, body').animate({scrollTop : $("#" + sObj).offset().top-$(window).height()+$('.db_click').height()});
                $('html, body').animate({ scrollTop: $(document).height() },1500);
                return false;
            });


            $("#bottom_blank").css('height',$('#consult > img').height()+10);

    });

    
</script>
</head>
<body>
<div id="wrap">


	<div class="container">
		<div class="img-area"><img src="<?=$AD_DIR?>/images/header.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news001.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news002.gif" class="img100" style="display:block;"></div>

		<div class="a-center movie">
			<iframe width="100%" src="https://www.youtube.com/embed/zvbaIpLZC0I" frameborder="0" allowfullscreen></iframe>
		</div>
		<p style="display:block; text-align:center; width:100%;font-size:14px; margin-top:10px;font-weight:bold;">▲ 탈모 전문가 연구가 피재호 박사 인터뷰 영상</p>
        <div class="blank30"></div>


		<div class="img-area"><img src="<?=$AD_DIR?>/images/news003.jpg" class="img100" style="display:block;"></div>
       <!--
         <div><a href="tel:070-7475-3234"><img src="<?=$AD_DIR?>/images/phone.jpg" class="img100" style="display:block;"></a></div>
        -->
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news004.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news005.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news006.jpg" class="img100" style="display:block;"></div>
		
		
		
		<div class="img-area"><a href="javascript:();" id="scrollToBottom"><img src="<?=$AD_DIR?>/images/news007.jpg" class="img100" style="display:block;"></a></div>
		
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news008.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news009.jpg" class="img100" style="display:block;"></div>

		<div class="img-area"><img src="<?=$AD_DIR?>/images/news010.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/news011_02.png" class="img100" style="display:block;"></div>
		<!--<div class="img-area"><a name="consult" id="consult"><img src="<?=$AD_DIR?>/images/db_top.jpg" class="img100" style="display:block; "></a></div>-->
        <div class="img-area"><a name="consult" id="consult"><img src="<?=$AD_DIR?>/images/db_top02.png" class="img100" style="display:block; position: fixed; bottom:0;"></a></div>
       
   	    <!--
        <div class="footer"><a href="tel:070-7434-4854"><img src="<?=$AD_DIR?>/images/news_phone.jpg" class="img100"></a></div>
        -->
    
		
        
        <div id="consult" class="consult_wrap">
			<div class="cont">
				
				

                <table class="consult1 width90">
                    <colgroup>
                    <col width="28%">
                    <col width="72%">
                    </colgroup>
                    <tr>
                            <td colspan="2" class="a-center">
                            <span>*
                            <?php 
                            $comment='';
                            if(element('campaign_age',element('extravars',element('post', $view))) || element('campaign_gender',element('extravars',element('post', $view)))){
                                $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                                
	                            if(!empty($campaign_age[0])) $campaign_age[0]=trim($campaign_age[0]);
	                            if(!empty($campaign_age[1])) $campaign_age[1]=trim($campaign_age[1]);
                            	
                                if(!empty($campaign_age[0])) $comment=$campaign_age[0].'세 이상 ';
                                if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하 </span> ';
                                if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                                if($comment) $comment .='만 참여 가능*';

                                echo $comment;
                            }
                                
                            ?>
                            </td>
                        </tr>
                </table>
                <?php if ($this->cbconfig->item('use_selfcert_phone')) { ?>
                    <p class="cr_btn a-center"><a name="mem_selfcert" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_selfcert_phone"><img src="<?=$AD_DIR?>/images/db_btn02.gif" class="width80"></a></p>
                            
                <?php } ?>
				
			</div>
		</div>
        <div id="bottom_blank"></div>
		</div>
</div>



</body>
</html>