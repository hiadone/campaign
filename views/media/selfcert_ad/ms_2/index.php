<?php
	$AD_DIR  = element('view_skin_url', $layout);
 if ($this->cbconfig->item('use_selfcert') && ($this->cbconfig->item('use_selfcert_phone') OR $this->cbconfig->item('use_selfcert_ipin'))) {
    	$this->managelayout->add_js(base_url('assets/js/member_selfcert.js'));
	}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Beauty Today</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Performax Web CPA Tracker v1 :: Landing Tag -->
<script>
var _0xf275=['affid','performaxTest','undefined','perM_T=','&perM_O=','&perM_A=','log','TRANSACTION_ID\x20:\x20','AFF_ID\x20:\x20','permLT','performaxConversion','Detected\x20Already\x20Conversion','&performaxConversion=','Success\x20Landing\x20Cookie\x20:\x20','message','location','search','split','cookie','match','(^|;)\x20?','setTime',';\x20\x20expires=','toGMTString',';path=/','encode','decode','ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=&','_utf8_encode','length','charCodeAt','_keyStr','charAt','replace','indexOf','fromCharCode','_utf8_decode','tid'];(function(_0xcd9ec8,_0x27699f){var _0x5aa31b=function(_0x32f922){while(--_0x32f922){_0xcd9ec8['push'](_0xcd9ec8['shift']());}};_0x5aa31b(++_0x27699f);}(_0xf275,0x8d));var _0x5f27=function(_0x33e6be,_0x4207eb){_0x33e6be=_0x33e6be-0x0;var _0x4e2008=_0xf275[_0x33e6be];return _0x4e2008;};var perM64={'_keyStr':_0x5f27('0x0'),'encode':function(_0x13f57f){var _0x99b957='';var _0xa9dc33,_0x19ff80,_0x5056e1,_0x1e9a29,_0x3b3f7f,_0x568f23,_0x310c11;var _0x3066cf=0x0;_0x13f57f=perM64[_0x5f27('0x1')](_0x13f57f);while(_0x3066cf<_0x13f57f[_0x5f27('0x2')]){_0xa9dc33=_0x13f57f['charCodeAt'](_0x3066cf++);_0x19ff80=_0x13f57f[_0x5f27('0x3')](_0x3066cf++);_0x5056e1=_0x13f57f[_0x5f27('0x3')](_0x3066cf++);_0x1e9a29=_0xa9dc33>>0x2;_0x3b3f7f=(_0xa9dc33&0x3)<<0x4|_0x19ff80>>0x4;_0x568f23=(_0x19ff80&0xf)<<0x2|_0x5056e1>>0x6;_0x310c11=_0x5056e1&0x3f;if(isNaN(_0x19ff80)){_0x568f23=_0x310c11=0x40;}else if(isNaN(_0x5056e1)){_0x310c11=0x40;}_0x99b957=_0x99b957+this[_0x5f27('0x4')][_0x5f27('0x5')](_0x1e9a29)+this[_0x5f27('0x4')][_0x5f27('0x5')](_0x3b3f7f)+this[_0x5f27('0x4')][_0x5f27('0x5')](_0x568f23)+this[_0x5f27('0x4')][_0x5f27('0x5')](_0x310c11);}return _0x99b957;},'decode':function(_0x742761){var _0x2244ca='';var _0x3199f0,_0x5604a4,_0x2248e9;var _0x93db14,_0x518711,_0x34690b,_0x19057a;var _0x433283=0x0;_0x742761=_0x742761[_0x5f27('0x6')](/[^A-Za-z0-9+\/=]/g,'');while(_0x433283<_0x742761[_0x5f27('0x2')]){_0x93db14=this[_0x5f27('0x4')][_0x5f27('0x7')](_0x742761[_0x5f27('0x5')](_0x433283++));_0x518711=this[_0x5f27('0x4')][_0x5f27('0x7')](_0x742761['charAt'](_0x433283++));_0x34690b=this[_0x5f27('0x4')][_0x5f27('0x7')](_0x742761[_0x5f27('0x5')](_0x433283++));_0x19057a=this[_0x5f27('0x4')][_0x5f27('0x7')](_0x742761[_0x5f27('0x5')](_0x433283++));_0x3199f0=_0x93db14<<0x2|_0x518711>>0x4;_0x5604a4=(_0x518711&0xf)<<0x4|_0x34690b>>0x2;_0x2248e9=(_0x34690b&0x3)<<0x6|_0x19057a;_0x2244ca=_0x2244ca+String[_0x5f27('0x8')](_0x3199f0);if(_0x34690b!=0x40){_0x2244ca=_0x2244ca+String[_0x5f27('0x8')](_0x5604a4);}if(_0x19057a!=0x40){_0x2244ca=_0x2244ca+String[_0x5f27('0x8')](_0x2248e9);}}_0x2244ca=perM64[_0x5f27('0x9')](_0x2244ca);return _0x2244ca;},'_utf8_encode':function(_0x246d86){_0x246d86=_0x246d86[_0x5f27('0x6')](/rn/g,'n');var _0x27e3ef='';for(var _0x442b04=0x0;_0x442b04<_0x246d86[_0x5f27('0x2')];_0x442b04++){var _0x335c04=_0x246d86[_0x5f27('0x3')](_0x442b04);if(_0x335c04<0x80){_0x27e3ef+=String['fromCharCode'](_0x335c04);}else if(_0x335c04>0x7f&&_0x335c04<0x800){_0x27e3ef+=String['fromCharCode'](_0x335c04>>0x6|0xc0);_0x27e3ef+=String[_0x5f27('0x8')](_0x335c04&0x3f|0x80);}else{_0x27e3ef+=String['fromCharCode'](_0x335c04>>0xc|0xe0);_0x27e3ef+=String[_0x5f27('0x8')](_0x335c04>>0x6&0x3f|0x80);_0x27e3ef+=String[_0x5f27('0x8')](_0x335c04&0x3f|0x80);}}return _0x27e3ef;},'_utf8_decode':function(_0x3fbc3d){var _0xb6d709='';var _0x5ef071=0x0;var _0x67416=c1=c2=0x0;while(_0x5ef071<_0x3fbc3d[_0x5f27('0x2')]){_0x67416=_0x3fbc3d['charCodeAt'](_0x5ef071);if(_0x67416<0x80){_0xb6d709+=String[_0x5f27('0x8')](_0x67416);_0x5ef071++;}else if(_0x67416>0xbf&&_0x67416<0xe0){c2=_0x3fbc3d['charCodeAt'](_0x5ef071+0x1);_0xb6d709+=String[_0x5f27('0x8')]((_0x67416&0x1f)<<0x6|c2&0x3f);_0x5ef071+=0x2;}else{c2=_0x3fbc3d[_0x5f27('0x3')](_0x5ef071+0x1);c3=_0x3fbc3d[_0x5f27('0x3')](_0x5ef071+0x2);_0xb6d709+=String[_0x5f27('0x8')]((_0x67416&0xf)<<0xc|(c2&0x3f)<<0x6|c3&0x3f);_0x5ef071+=0x3;}}return _0xb6d709;}};perM_Landing();function perM_Landing(){try{var _0x88e479=perM_getQStr(_0x5f27('0xa'));var _0x547b74=perM_getQStr('offerid');var _0x2da52c=perM_getQStr(_0x5f27('0xb'));var _0x3c004b=perM_getQStr(_0x5f27('0xc'));if(_0x3c004b=='99'){console['log']('------Performax\x20Script\x20Start-------');}if(_0x88e479!=null&&typeof _0x88e479!=_0x5f27('0xd')){var _0x5f197a=_0x5f27('0xe')+_0x88e479;if(_0x547b74!=null&&typeof _0x547b74!=_0x5f27('0xd'))_0x5f197a+=_0x5f27('0xf')+_0x547b74;if(_0x2da52c!=null&&typeof _0x2da52c!='undefined')_0x5f197a+=_0x5f27('0x10')+_0x2da52c;if(_0x3c004b=='99'){console[_0x5f27('0x11')](_0x5f27('0x12')+_0x88e479+'\x0a'+'OFFER_ID\x20:\x20'+_0x547b74+'\x0a'+_0x5f27('0x13')+_0x2da52c+'\x0a');_0x5f197a+='&performaxTest=99';}var _0x3a9aa8=perMl_b64DecodeUnicode(perMl_gCookie(_0x5f27('0x14')));if(_0x3a9aa8!=null&&typeof _0x3a9aa8!=_0x5f27('0xd')){var _0x3ad586=perMl_gAvalue(_0x5f27('0x15'),_0x3a9aa8);if(_0x3ad586!=null){if(_0x3c004b=='99'){console['log'](_0x5f27('0x16'));}_0x5f197a+=_0x5f27('0x17')+_0x3ad586;}}var _0x1ef6d9=perMl_b64EncodeUnicode(_0x5f197a);perMl_sCookie(_0x5f27('0x14'),_0x1ef6d9);if(_0x3c004b=='99'){console[_0x5f27('0x11')](_0x5f27('0x18')+_0x1ef6d9);}}else{console[_0x5f27('0x11')]('Error\x20:\x20Not\x20found\x20TRANSACTION_ID.\x20ex)\x20&tid={transation_id}');}}catch(_0x1af823){if(_0x3c004b=='99'){console[_0x5f27('0x11')]('Error\x20:\x20'+_0x1af823[_0x5f27('0x19')]);}}}function perM_getQStr(_0x4dfdf3){var _0x402b03=window[_0x5f27('0x1a')][_0x5f27('0x1b')]['substring'](0x1);var _0x2e6f24=_0x402b03[_0x5f27('0x1c')]('&');for(var _0x23708c=0x0;_0x23708c<_0x2e6f24[_0x5f27('0x2')];_0x23708c++){var _0x2db3d4=_0x2e6f24[_0x23708c][_0x5f27('0x1c')]('=');if(_0x2db3d4[0x0]==_0x4dfdf3)return _0x2db3d4[0x1];}return null;}function perMl_gAvalue(_0x32264a,_0x5ca0f1){var _0x2f4ace=_0x5ca0f1[_0x5f27('0x1c')]('&');for(var _0x460d19=0x0;_0x460d19<_0x2f4ace['length'];_0x460d19++){var _0x268468=_0x2f4ace[_0x460d19][_0x5f27('0x1c')]('=');if(_0x268468[0x0]==_0x32264a)return _0x268468[0x1];}return null;}function perMl_gCookie(_0x333c9f){var _0x5ceabb=document[_0x5f27('0x1d')][_0x5f27('0x1e')](_0x5f27('0x1f')+_0x333c9f+'=([^;]*)(;|$)');if(_0x5ceabb)return unescape(_0x5ceabb[0x2]);return null;}function perMl_sCookie(_0x461cc2,_0x563235){var _0x567c95=new Date();_0x567c95[_0x5f27('0x20')](+_0x567c95+0x1e*0x5265c00);var _0x596f2a=_0x461cc2+'='+escape(_0x563235)+_0x5f27('0x21')+_0x567c95[_0x5f27('0x22')]()+_0x5f27('0x23');document[_0x5f27('0x1d')]=_0x596f2a;}function perMl_b64EncodeUnicode(_0xb06402){if(_0xb06402!=null&&_0xb06402!='')return perM64[_0x5f27('0x24')](encodeURIComponent(_0xb06402));return null;}function perMl_b64DecodeUnicode(_0x5f2c29){if(_0x5f2c29!=null&&_0x5f2c29!='')return decodeURIComponent(perM64[_0x5f27('0x25')](_0x5f2c29));return null;}function perMl_gAvalue(_0x8c8d29,_0x52d4a7){var _0x346178=_0x52d4a7[_0x5f27('0x1c')]('&');for(var _0x513c06=0x0;_0x513c06<_0x346178[_0x5f27('0x2')];_0x513c06++){var _0x2feb91=_0x346178[_0x513c06][_0x5f27('0x1c')]('=');if(_0x2feb91[0x0]==_0x8c8d29)return _0x2feb91[0x1];}return null;}
</script>
<script type="text/javascript">
/*
$(function () {
    $('#scrollToBottom').bind("click", function () {
        $('html, body').animate({ scrollTop: $(document).height() }, 0);
        return false;
    });
});
*/
var scrollTab = function (sObj) {
  
  $('html, body').animate({scrollTop : $("#" + sObj).offset().top-$(window).height()+$('.db_click').height()});
    //window.scrollTo( 0,$("#" + sObj).offset().top-$(window).height()+$('.db_click').height());
  
}
</script>
</head>
<body>
<div id="wrap">

<div class="db_click"><a href="javascript:scrollTab('inDB');"><img src="<?=$AD_DIR?>/images/DB_click.png" class="img100"></a></div>

  <div class="container">
		<div class="img-area"><img src="<?=$AD_DIR?>/images/header.jpg" class="img100"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/img001.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img002.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img003.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img004.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img005.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img006.gif" class="img100"></div>
        <div class="img-area border" ><img src="<?=$AD_DIR?>/images/event.jpg" class="img100"></div>
    

		
		<div id="consult" class="consult_wrap">
			<div class="cont">
				
				<?php if ($this->cbconfig->item('use_selfcert_phone')) { ?>
					<p class="cr_btn a-center"><a name="mem_selfcert" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_selfcert_phone"><img src="<?=$AD_DIR?>/images/btn.gif" class="width80"></a></p>
                            
                <?php } ?>

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

                                $campaign_age[0]=trim($campaign_age[0]);
                                $campaign_age[1]=trim($campaign_age[1]);

                                if(!empty($campaign_age[0])) $comment=$campaign_age[0].'세 이상 ';
                                if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하 </span> ';
                                if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                                $comment .='만 참여 가능*';

                                echo $comment;
                            }
                                
                            ?>
                            </td>
                        </tr>
                </table>
				
			</div>
		</div>
		   	
		
		
        
       
    
        <div class="img-area" id="inDB"><img src="<?=$AD_DIR?>/images/img007.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/footer.jpg" class="img100"></div>

		
	</div>
    

    <div class="hg70"></div> 
</div>


<!--<map name="Map" id="Map">
  <area shape="rect" coords="23,282,214,483" href="https://www.youtube.com/watch?v=VGZ2B8EhJCg&feature=youtu.be" target="_blank" alt="나비편" />
  <area shape="rect" coords="212,280,412,482" href="https://www.youtube.com/watch?v=QBBK0rqmAow&feature=youtu.be" target="_blank" alt="레드벨벳편"/>
  <area shape="rect" coords="422,281,612,481" href="https://www.youtube.com/watch?v=x3jrkGOzJqw&feature=youtu.be" target="_blank" alt="거미편" />
  <area shape="rect" coords="121,494,311,695" href="https://www.youtube.com/watch?v=gYPV7lXZ5eI&feature=youtu.be" target="_blank" alt="전효성편" />
  <area shape="rect" coords="320,493,512,696" href="https://www.youtube.com/watch?v=oZ_149BM4aI&feature=youtu.be" target="_blank" alt="은지원편" />
</map>-->



</body>
</html>