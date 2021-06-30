<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
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
		<title>행운로또</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="no">
		<meta name="robots" content="index,follow">
		<meta name="format-detection" content="telephone=no">
		
		<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css?v=1">

<STYLE type="text/css">
	.background_layer{z-index:1000;display:none;position:fixed;left:0;top:0;width:100%;height:100%;background:#000;opacity:0.5;}
	.agree_layer{z-index:10000;display:none;position:fixed;left:0;top:0;width:100%;height:100%;background:#fff;}
	.agree_txt{box-sizing:border-box;overflow:auto;white-space:pre-line;font-size:14px;line-height:1.6;height:100%;padding:5%;border:4px solid #ccc;color:#555;}
	.btn_close{position:absolute;right:10px;top:10px;border:4px solid #ccc;background:#fff;text-decoration:none;color:#000;font-weight:bold;color:#555;padding:4px;border-radius:5px;cursor:pointer;}
	.btn_popup{cursor:pointer;font-size:12px;}
</STYLE>
<style>
.alert 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size:18px;
    font-weight: bold;
}
</style>
		

		<SCRIPT LANGUAGE="Javascript">
			$(function() {
				// $(".inputs").keyup (function () {
				// 	var charLimit = $(this).attr("maxlength");
				// 	if (this.value.length >= charLimit) {
				// 		$(this).next('.inputs').focus();
				// 		return false;
				// 	}
				// });
			});


			$(function (){
	$('.btn_popup').click(function(){
		$('.background_layer').fadeIn();
		$('.agree_layer').show();
	});
	$('.btn_close').click(function(){
		$('.background_layer').fadeOut();
		$('.agree_layer').hide();
	});
});
		</SCRIPT>


	</head>
<body>


<DIV style="margin: 0px auto; width: 100%; max-width: 640px;">
  <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
  <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD style="background: rgb(68, 74, 96); padding: 0px 5px; border: 1px solid rgb(49, 55, 69); border-image: none; color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD width="14%" align="center">뉴스홈</TD>
          <TD width="11%" height="38" align="center" style="background-color: rgb(34, 38, 50);">속보</TD>
          <TD width="11%" align="center">정치</TD>
          <TD width="11%" align="center">경제</TD>
          <TD width="11%" align="center">사회</TD>
          <TD width="2%">&nbsp;</TD>
          <TD align="left">
            <DIV style="height: 25px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD height="25" style="border: 1px solid rgb(37, 45, 66); border-image: none; color: rgb(119, 119, 119); padding-left: 5px; background-color: rgb(255, 255, 255);">검색하기</TD>
                <TD width="6">&nbsp;</TD>
                <TD width="40" align="center" style="background-color: rgb(213, 62, 33);">검색</TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TBODY>
  <TR>
    <TD id="con">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD class="body_txt">뉴스홈 &lt; 속보</TD></TR>
        <TR>
          <TD><A href="javascript:goLink()">
            <H1><SPAN 
            style="color: rgb(255, 0, 0); font-weight: bold;">[화제]</SPAN> 유명 
            방송인으로 인해 관계자 측 "로또분석 통해 당첨 확률 증가 첫 인정.."</H1></A></TD></TR>
        <TR>
          <TD><A href="javascript:goLink();">
            <H2 style="color: rgb(255, 0, 0);">-패턴흐름만 알면 17배 당첨확률높아져 <BR>-최근 장안의 
            화제 로또 연속당첨릴레이 진행..</H2></A></TD></TR>
        <TR>
          <TD style="border-top-color: rgb(221, 221, 221); border-bottom-color: rgb(221, 221, 221); border-top-width: 1px; border-bottom-width: 1px; border-top-style: solid; border-bottom-style: solid;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%" height="30" align="left" style="color: rgb(102, 102, 102); letter-spacing: -1px; padding-left: 10px; font-size: 10px;">기사입력 
                  :                                                        
<SCRIPT language="javascript">
	today=new Date()
	date = today.getDate()-1;
	if(date == 0) date = 31;
	document.write(today.getFullYear(),"-",today.getMonth()+1,"-",date," ",today.getHours(),":",today.getMinutes())
</SCRIPT>
                </TD>
                <TD width="40%" height="30" align="right" style="padding-right: 10px;"><IMG  width="80%" src="<?=$AD_DIR?>/images/sns.jpg"></TD></TR></TBODY></TABLE></TD></TR>
        <TR>
          <TD class="body_txt">
            <p>최근 유명 인터넷 BJ 박 씨(27)는 자신의 개인 방송으로 이번년도 로또 당첨금액 절반을 기부해 화제가 되고 있다. 
<br><br>박 씨는 온라인 방송에서 약 1억 8700만 원을 기부했다고 전했으며, 이번년도 고액 당첨만 5번 이상이라고 전했다.  
<br><br>믿지 못하는 네티즌들을 위하여 실시간 방송으로 당첨 영수증, 수령금액 내역을 증명하면서 그야말로 '잭팟녀'라는 타이틀을 얻게 되었다.
			
			
			<BR><BR><IMG width="100%" 
            src="<?=$AD_DIR?>/images/new.jpg"></P>
            <P style="text-align: center; font-weight: bold;">좌) 온라인 방송인 박 
            씨(29)<BR>우) 생방송으로 보여줬던 2등 당첨영수증</P>
            <P style="text-align: justify;">인터넷 BJ 박 씨는 "아는 지인이 우연히 분석 번호를 받는 걸 보고 따라 구매했는데 나란히 3등이 되어 너무 신기했다." "더 욕심을 부려 분석업체 5개 정도 업체를 이용해봤지만 처음 당첨된 A 업체만 당첨률이 좋아 이곳만 이용 중이다, A 업체는 알려줄 수 없다"<BR>
            
            <CENTER><IMG width="100%" src="<?=$AD_DIR?>/images/dangch_2.jpg"><BR><SPAN 
            style="font-weight: bold;">
            ▲ 인터넷 BJ 박 씨가 최근 인증한 당첨 영수증</SPAN><BR>

            <P>네티즌들의 수소문 끝에 찾은 A 업체는 알고보니 그야말로 '고액당첨자들 파티' 였다. 

<p>모두들 말이 안된다고 생각했던 로또분석은 이미 국내에 확실한 결과로 입증했으며 <font color=red>A업체 관계자는 이번회차 최고등급인 분석번호를 제공</font>한다고 하니 참여해보길 바란다.
<br>
<br># 고객 만족도 3년 연속 1위
<br># 국내 첫 통계시스템 특허
<br># 일 40명 분석번호 제공 후 서비스 종료.</P>


        <TR>
          <TD width="100%"><A name="db_table" id="db_table"></A>               
                
            <DIV style="margin: 0px auto; border: 3px solid rgb(43, 43, 43); border-image: none;">

                                
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD><IMG width="100%" src="<?=$AD_DIR?>/images/db_img03.jpg"></TD></TR>
              <TR>
                <TD align="center" valign="top" style="padding-bottom: 10px;">
                      <?php
                        $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                        echo form_open_multipart(current_full_url(), $attributes);
                        ?>
                        <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                        <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                        <input type="hidden" name="jid" value="<?php echo $jid?>">                  
                        <input type="hidden" name="mlh_name" id="mlh_name" value="none">
                        <input type="hidden" name="mlh_age" id="mlh_age" value="0">
                        <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
                  <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">

                    <TBODY>
                    <TR>
                      <TD style="border-top-color: currentColor; border-top-width: medium; border-top-style: none;">
                        <TABLE width="100%" border="0" cellspacing="0" 
                        cellpadding="0">
                          <TBODY>


                         <!--  <TR>
                            <TD width="59%" align="left" style="line-height: 30px; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;"><SPAN 
                              style="color: rgb(38, 38, 38); padding-right: 20px; font-size: 16px;"><STRONG>이 &nbsp;&nbsp;름</STRONG></SPAN> 
                          								<input type="text"   id="M_NAME"  style="width: 60%; height: 28px;">
                          							  </td>
                          						  </tr> -->



                          <TR>
                            <TD width="59%" align="center" style="line-height: 30px; padding-top:10px; padding-bottom: 10px; padding-left: 10px;"><SPAN 
                              style="color: rgb(38, 38, 38); padding-right: 20px; font-size: 16px;"><STRONG>연락처</STRONG></SPAN> 
                                                                            
                              <input type="tel" id="mlh_mobileno1" name="mlh_mobileno1" size="3" maxlength="3" class="form-class inputs input" label="연락처">
                              <input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" size="4" maxlength="4" class="form-class inputs input" label="연락처">
                              <input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" size="4" maxlength="4" class="form-class inputs input" label="연락처">
							  
							  </TD></TR>
                          <TR>
                            <TD  align="center" style="line-height:20px;padding:0px 35px 10px 35px; font-size: 12px; font-weight: bold;">*별도의 회원가입 없이 <SPAN 
                              style="color: rgb(255, 0, 0);">100% 무료 서비스 </SPAN>정보 제공
후 개인정보는 안전하게 폐기 됩니다.</TD></TR>
                          <TR>
                            <TD>
                              <DIV style="width: 100%; text-align: center; padding-top: 10px; font-size: 13px;">
							  <input type="checkbox" name="" id="agree" checked> <label for="agree">개인정보 수집 및 이용동의</label>
							  <A class="btn_popup">[자세히보기]</A>
                               </DIV></TD></TR>

                          <TR>
                            <TD align="center"  style="padding-top: 10px;">
							<a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/btn01.gif" style="width:100%"></a></TD></TR>
                          <TR>
                            <TD align="center"  style="padding: 0px 10px 10px;">
							<DIV><IMG width="70%"  src="<?=$AD_DIR?>/images/db_img02.gif"></DIV>
							<IMG width="100%" src="<?=$AD_DIR?>/images/db_1.gif"></TD>
							
							</TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></DIV></TD></TR>
                      
        <TR>
          <TD>&nbsp;</TD></TR></TBODY></TABLE></TD></TR><!--댓글-->       
          <?php echo form_close(); ?>
  
  <TR>
    <TD style="padding-bottom: 7px;">
      <TABLE width="100%">
        <TBODY>
        <TR>
          <TD width="70%" style="padding-left: 10px; font-size: 16px; font-weight: bold;">댓글 
            <SPAN style="color: rgb(255, 0, 0);">82</SPAN></TD>
          <TD width="30%" align="right" style="padding-right: 5px;"><A class="anchorLink" 
            href="javascript:goLink()"><IMG width="70" src="<?=$AD_DIR?>/images/write.jpg"></A></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="letter-spacing: -1px; font-size: 13px; font-weight: bold; border-top-color: rgb(169, 169, 169); border-top-width: 1px; border-top-style: solid;">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD width="50%" height="37" align="center" style="background: rgb(247, 247, 247); border-right-color: rgb(221, 221, 221); border-bottom-color: rgb(221, 221, 221); border-right-width: 1px; border-bottom-width: 1px; border-right-style: solid; border-bottom-style: solid;">호감순</TD>
          <TD width="50%" align="center" style="color: rgb(204, 0, 0); border-right-color: currentColor; border-bottom-color: currentColor; border-right-width: medium; border-bottom-width: medium; border-right-style: none; border-bottom-style: none;">최신순</TD></TR></TBODY></TABLE></TD></TR>
  
  
  
  
  <TR>
    <TD style="padding: 10px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD 
            style="color: rgb(204, 0, 0); font-size: 15px; font-weight: bold;">hasd***</TD></TR>
        <TR>
          <TD style="font-size: 14px;"><A class="anchorLink" href="http://a.mrep.kr/lottomoney#">안녕하세요 
            제가 온라인커뮤니티에 올린 김성배 라고 합니다. 로또는 부동산, 주식보다 소액투자라면 투자라고 할수 있겠지만 너무 
            신기하게도 문자로 온 번호로만 구매를 했는데 4번이나 당첨이 됐네요.</A></TD></TR>
        <TR>
          <TD style="color: rgb(119, 119, 119); letter-spacing: -1px; padding-top: 7px; font-size: 11px;"><SPAN 
            style="color: rgb(204, 204, 204);"></SPAN>                   
<SCRIPT language="javascript">
						var today=new Date();
		
						today.setDate(today.getDate()-1); //하루 전
		
						var day = (today.getDate());
						var month = (today.getMonth() + 1) ;
		
						if(day < 10) day = '0' + day;
						if(month < 10) month = '0' + month;
		
						document.write(today.getFullYear(),"-",month,"-",day);
 				</SCRIPT>
             <SPAN style="color: rgb(204, 204, 204);">|</SPAN> 신고</TD></TR>
        <TR>
          <TD align="right" style="padding-top: 10px;">
            <DIV style="height: 30px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%"><IMG width="57" src="<?=$AD_DIR?>/images/rere.jpg"></TD>
                <TD width="23%" height="30" align="right" style="padding-right: 5px;"><A 
                  class="anchorLink" href="javascript:goLink()"><IMG width="57" 
                  src="<?=$AD_DIR?>/images/up1.jpg"></A></TD>
                <TD width="17%" height="30" align="right"><A class="anchorLink" 
                  href="javascript:goLink()"><IMG width="57" src="<?=$AD_DIR?>/images/down1.jpg"></A></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="padding: 10px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD 
            style="color: rgb(204, 0, 0); font-size: 15px; font-weight: bold;">bans***</TD></TR>
        <TR>
          <TD style="font-size: 14px;"><A class="anchorLink" href="javascript:goLink()"><IMG 
            width="30%" src="<?=$AD_DIR?>/images/img03.jpg"><BR>제가 궁금한 사항이 몇가지 있어서요. 제가 
            다른 업체도 이용을 해봤지만 여기만한게 없네요. 처음엔 다 똑같겠지라고 했는데 월등히 차이가 나네요,, 
          감사합니다</A></TD></TR>
        <TR>
          <TD style="color: rgb(119, 119, 119); letter-spacing: -1px; padding-top: 7px; font-size: 11px;"><SPAN 
            style="color: rgb(204, 204, 204);"></SPAN>                   
<SCRIPT language="javascript">
						var today=new Date();
		
						today.setDate(today.getDate()-1); //하루 전
		
						var day = (today.getDate());
						var month = (today.getMonth() + 1) ;
		
						if(day < 10) day = '0' + day;
						if(month < 10) month = '0' + month;
		
						document.write(today.getFullYear(),"-",month,"-",day);
 				</SCRIPT>
             <SPAN style="color: rgb(204, 204, 204);">|</SPAN> 신고</TD></TR>
        <TR>
          <TD align="right" style="padding-top: 10px;">
            <DIV style="height: 30px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%"><IMG width="57" src="<?=$AD_DIR?>/images/rere.jpg"></TD>
                <TD width="23%" height="30" align="right" style="padding-right: 5px;"><A 
                  class="anchorLink" href="javascript:goLink()"><IMG width="57" 
                  src="<?=$AD_DIR?>/images/up2.jpg"></A></TD>
                <TD width="17%" height="30" align="right"><A class="anchorLink" 
                  href="javascript:goLink()"><IMG width="57" src="<?=$AD_DIR?>/images/down2.jpg"></A></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="padding: 10px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD 
            style="color: rgb(204, 0, 0); font-size: 15px; font-weight: bold;">tp1081**</TD></TR>
        <TR>
          <TD style="font-size: 14px;"><A class="anchorLink" href="javascript:goLink()">제가 
            5년동안 해본결과 말씀드릴게요, 인천 사는 40대 남성입니다. 다른 곳 어쩌다가 4등 한번? 당첨 됐는데이쪽 믿고 진행을 
            해봤는데 확실하네요 감사합니다.</A></TD></TR>
        <TR>
          <TD style="color: rgb(119, 119, 119); letter-spacing: -1px; padding-top: 7px; font-size: 11px;"><SPAN 
            style="color: rgb(204, 204, 204);"></SPAN>                   
<SCRIPT language="javascript">
						var today=new Date();
		
						today.setDate(today.getDate()-2); //하루 전
		
						var day = (today.getDate());
						var month = (today.getMonth() + 1) ;
		
						if(day < 10) day = '0' + day;
						if(month < 10) month = '0' + month;
		
						document.write(today.getFullYear(),"-",month,"-",day);
 				</SCRIPT>
             <SPAN style="color: rgb(204, 204, 204);">|</SPAN> 신고</TD></TR>
        <TR>
          <TD align="right" style="padding-top: 10px;">
            <DIV style="height: 30px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%"><IMG width="57" src="<?=$AD_DIR?>/images/rere.jpg"></TD>
                <TD width="23%" height="30" align="right" style="padding-right: 5px;"><A 
                  class="anchorLink" href="javascript:goLink()"><IMG width="57" 
                  src="<?=$AD_DIR?>/images/42.jpg"></A></TD>
                <TD width="17%" height="30" align="right"><A class="anchorLink" 
                  href="javascript:goLink()"><IMG width="57" src="<?=$AD_DIR?>/images/down.jpg"></A></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="padding: 10px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD 
            style="color: rgb(204, 0, 0); font-size: 15px; font-weight: bold;">dkiejw**</TD></TR>
        <TR>
          <TD style="font-size: 14px;"><A class="anchorLink" href="javascript:goLink()">이번주도 
            좋은번호 기도합니다. 다들 파이팅 하자구요</A></TD></TR>
        <TR>
          <TD style="color: rgb(119, 119, 119); letter-spacing: -1px; padding-top: 7px; font-size: 11px;"><SPAN 
            style="color: rgb(204, 204, 204);"></SPAN>                   
<SCRIPT language="javascript">
						var today=new Date();
		
						today.setDate(today.getDate()-2); //하루 전
		
						var day = (today.getDate());
						var month = (today.getMonth() + 1) ;
		
						if(day < 10) day = '0' + day;
						if(month < 10) month = '0' + month;
		
						document.write(today.getFullYear(),"-",month,"-",day);
 				</SCRIPT>
             <SPAN style="color: rgb(204, 204, 204);">|</SPAN> 신고</TD></TR>
        <TR>
          <TD align="right" style="padding-top: 10px;">
            <DIV style="height: 30px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%"><IMG width="57" src="<?=$AD_DIR?>/images/rere.jpg"></TD>
                <TD width="23%" height="30" align="right" style="padding-right: 5px;"><A 
                  class="anchorLink" href="javascript:goLink()"><IMG width="57" 
                  src="<?=$AD_DIR?>/images/up3.jpg"></A></TD>
                <TD width="17%" height="30" align="right"><A class="anchorLink" 
                  href="javascript:goLink()"><IMG width="57" src="<?=$AD_DIR?>/images/down.jpg"></A></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="padding: 10px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD 
            style="color: rgb(204, 0, 0); font-size: 15px; font-weight: bold;">lottoooo**</TD></TR>
        <TR>
          <TD style="font-size: 14px;"><A class="anchorLink" href="javascript:goLink()"> 
            2주 전 4등 이번주 4등 한번 더 당첨 됐네요, 정말 기분 좋네요</A></TD></TR>
        <TR>
          <TD style="color: rgb(119, 119, 119); letter-spacing: -1px; padding-top: 7px; font-size: 11px;"><SPAN 
            style="color: rgb(204, 204, 204);"></SPAN>                   
<SCRIPT language="javascript">
						var today=new Date();
		
						today.setDate(today.getDate()-2); //하루 전
		
						var day = (today.getDate());
						var month = (today.getMonth() + 1) ;
		
						if(day < 10) day = '0' + day;
						if(month < 10) month = '0' + month;
		
						document.write(today.getFullYear(),"-",month,"-",day);
 				</SCRIPT>
             <SPAN style="color: rgb(204, 204, 204);">|</SPAN> 신고</TD></TR>
        <TR>
          <TD align="right" style="padding-top: 10px;">
            <DIV style="height: 30px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%"><IMG width="57" src="<?=$AD_DIR?>/images/rere.jpg"></TD>
                <TD width="23%" height="30" align="right" style="padding-right: 5px;"><A 
                  class="anchorLink" href="javascript:goLink()"><IMG width="57" 
                  src="<?=$AD_DIR?>/images/16.jpg"></A></TD>
                <TD width="17%" height="30" align="right"><A class="anchorLink" 
                  href="javascript:goLink()"><IMG width="57" src="<?=$AD_DIR?>/images/down.jpg"></A></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR>
  <TR>
    <TD style="padding: 10px; border-bottom-color: rgb(229, 229, 229); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(255, 255, 255);">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TBODY>
        <TR>
          <TD 
            style="color: rgb(204, 0, 0); font-size: 15px; font-weight: bold;">rkdjw***</TD></TR>
        <TR>
          <TD style="font-size: 14px;"><A class="anchorLink" href="javascript:goLink()">저도 
            신청 해봅니다.</A></TD></TR>
        <TR>
          <TD style="color: rgb(119, 119, 119); letter-spacing: -1px; padding-top: 7px; font-size: 11px;"><SPAN 
            style="color: rgb(204, 204, 204);"></SPAN>                   
<SCRIPT language="javascript">
						var today=new Date();
		
						today.setDate(today.getDate()-3); //하루 전
		
						var day = (today.getDate());
						var month = (today.getMonth() + 1) ;
		
						if(day < 10) day = '0' + day;
						if(month < 10) month = '0' + month;
		
						document.write(today.getFullYear(),"-",month,"-",day);
 				</SCRIPT>
             <SPAN style="color: rgb(204, 204, 204);">|</SPAN> 신고</TD></TR>
        <TR>
          <TD align="right" style="padding-top: 10px;">
            <DIV style="height: 30px;">
            <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
              <TR>
                <TD width="60%"><IMG width="57" src="<?=$AD_DIR?>/images/rere.jpg"></TD>
                <TD width="23%" height="30" align="right" style="padding-right: 5px;"><A 
                  class="anchorLink" href="javascript:goLink()"><IMG width="57" 
                  src="<?=$AD_DIR?>/images/2.jpg"></A></TD>
                <TD width="17%" height="30" align="right"><A class="anchorLink" 
                  href="javascript:goLink()"><IMG width="57" src="<?=$AD_DIR?>/images/down.jpg"></A></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TD></TR><!--댓글끝--> 
        
  <TR>
    <TD>&nbsp;</TD></TR>
  <TR>
    <TD><A class="anchorLink" href="javascript:goLink()"><IMG style="width: 100%;" 
      src="<?=$AD_DIR?>/images/footer.gif" border="0"></A></TD></TR>
  <TR>
    <TD height="50" align="center" valign="top" style="color: rgb(102, 102, 102); font-size: xx-small; background-color: rgb(244, 244, 244);">&nbsp;</TD></TR></TBODY></TABLE></DIV>
<DIV class="background_layer"></DIV>
<DIV class="agree_layer">
<DIV class="agree_txt">타겟뷰 개인정보 취급방침 애드티브 이노베이션(주)의 타겟뷰(이하 '회사'라 한다)는 개인정보 보호법 
제30조 및 정보통신망이용촉진 및 정보보호등에관한법률(이하 '정보통신망법'이라 한다) 제27조의2에 따라 정보주체의 개인정보를 보호하고 이와 
관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리지침을 수립ㆍ공개합니다. 제1조(개인정보의 처리목적) 
회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 
경우에는 개인정보 보호법 제18조 및 정보통신망법 제22조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다. 1. 홈페이지 회원 
가입 및 관리 회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인확인제 시행에 따른 본인확인, 
서비스 부정이용 방지, 만 14세 미만 아동의 개인정보 처리시 법정대리인의 동의여부 확인, 각종 고지·통지, 고충처리 등을 목적으로 개인정보를 
처리합니다. 2. 재화 또는 서비스 제공 제품 구매 계약에 따른 계약체결, 물품배송, 서비스 제공, 계약서·청구서 발송, 콘텐츠 제공, 
맞춤서비스 제공, 이벤트/경품 소식 안내, 이벤트/경품당첨 결과안내 및 상품배송, 본인인증, 연령인증, 요금결제·정산, 채권추심 등을 목적으로 
개인정보를 처리합니다. 3. 고충처리 민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등의 목적으로 개인정보를 
처리합니다. 4. 마케팅 및 광고에 활용 고객에게 최적화된 서비스 제공, 신규 서비스(제품) 개발 및 특화, 인구통계학적 특성에 따른 서비스 
제공 및 광고 게재, 웹페이지 접속 빈도 파악, 서비스 이용에 대한 통계, 정기 간행물 발송, 새로운 상품 또는 서비스 안내, 고객 관심사에 
부합하는 서비스 및 이벤트 기획, 경품행사, 이벤트 등 광고성 정보 전달 또는 회원 참여공간 운영, 고객설문조사, 서비스 및 상품 안내 등을 
목적으로 개인정보를 처리합니다. 5. 상담 관리 상담 서비스 이용에 따른 본인 식별·인증, 상담 의사 확인, 상담 회신, 의사소통, 사은품 지급 
시 물품 배송, 서비스 및 상품 안내 등을 목적으로 개인정보를 처리합니다. 제2조(개인정보의 처리 및 보유기간) ① 회사는 법령에 따른 개인정보 
보유·이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유·이용기간 내에서 개인정보를 처리ㆍ보유합니다. ② 각각의 개인정보 
처리 및 보유 기간은 다음과 같습니다. 1. 홈페이지 회원 가입 및 관리 : 홈페이지 탈퇴 시까지 다만, 다음의 사유에 해당하는 경우에는 해당 
사유 종료 시까지 1) 관계 법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료 시까지 2) 홈페이지 이용에 따른 
채권·채무관계 잔존 시에는 해당 채권·채무관계 정산시까지 2. 재화 또는 서비스 제공 : 재화·서비스 공급완료 및 요금결제·정산 완료 시까지
 다만, 다음의 사유에 해당하는 경우에는 해당 기간 종료 시까지 1) 「전자상거래 등에서의 소비자 보호에 관한 법률」에 따른 표시·광고, 
계약내용 및 이행 등 거래에 관한 기록 - 표시·광고에 관한 기록 : 6월 - 계약 또는 청약철회, 대금결제, 재화 등의 공급 기록 : 5년 - 
소비자 불만 또는 분쟁처리에 관한 기록 : 3년 3. 회사 내부 방침에 따른 보유 1) 불량회원 재 가입 방지 - 보유 목적: 불량 이용 
행위(악성 댓글, 사이트 이용 시 회원간 분쟁을 야기, 사이트 부정이용 행위, 불법적인 보안위협 초래 등)를 야기한 이용자의 발견 및 이용행위 
중지, 재가입 방지 등 - 보유항목: 이름, ID, 주소, 이메일, 전화번호, 휴대폰번호, 접속IP, 방문경로 - 보유 기간: 회원탈퇴 처리 후 
1년간 2) 고객 상담 정보 - 보유 목적: 상담 사실 확인, 고객 관심사에 부합하는 서비스(제품) 개발 및 특화, 상담 통계 분석, 소비자 
분쟁 대비 등 - 보유 항목: 이름, 이메일 - 보유 기간: 상담 종료 후 1년간 제3조(개인정보의 제3자 제공) ① 회사는 정보주체의 
개인정보를 제1조(개인정보의 처리 목적)에서 명시한 범위 내에서만 처리하며, 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 
및 정보통신망법 제24조의2에 해당하는 경우에만 개인정보를 제3자에게 제공합니다. 제4조(개인정보처리의 위탁) ① 회사는 고객님의 동의없이 
고객님의 정보를 외부 업체에 위탁하지 않습니다. 향후 그러한 필요가 생길 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 
경우 사전 동의를 받도록 하겠습니다. 제5조(정보주체의 권리ㆍ의무 및 행사방법) ① 정보주체는 회사에 대해 언제든지 다음 각 호의 개인정보 보호 
관련 권리를 행사할 수 있습니다. 1. 개인정보 열람요구 2. 오류 등이 있을 경우 정정 요구 3. 삭제요구 4. 처리정지 요구 ② 제1항에 
따른 권리 행사는 아래의 방법으로 하실 수 있습니다. 1. 홈페이지 가입 회원: 자신의 ID/PW로 로그인 후 '마이페이지'에서 열람 및 정정을 
할 수 있으며, '탈퇴신청'에서 회원탈퇴를 하실 수 있습니다. 개인정보에 대한 처리정지 요구는 아래의 개인정보관리책임자 또는 
개인정보관리담당부서에게 서면, 전화, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있습니다. 회사는 이에 대해 지체없이 조치하겠습니다. 
2. 상담문의 등 회원가입하지 않은 고객: 회사 또는 개인정보관리책임자 및 개인정보관리부서에 대해 서면, 전화, 전자우편, 모사전송(FAX) 
등을 통하여 제1항에 따른 권리를 행사하실 수 있으며, 회사는 이에 대해 지체없이 조치하겠습니다. ③ 정보주체가 개인정보의 오류 등에 대한 정정 
또는 삭제를 요구한 경우에는 회사는 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다. ④ 제1항에 따른 권리 행사는 
정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 
위임장을 제출하셔야 합니다. ⑤ 정보주체는 개인정보 보호법 등 관계법령을 위반하여 회사가 처리하고 있는 정보주체 본인이나 타인의 개인정보 및 
사생활을 침해하여서는 아니됩니다. 제6조(처리하는 개인정보 항목) ① 회사는 다음의 개인정보 항목을 처리하고 있습니다. 1. 홈페이지 회원 가입 
및 관리 ㆍ필수항목 : 이름, 주소, 닉네임, 전화번호, 휴대폰번호, 이메일 ㆍ선택항목 : 직업 2. 홈페이지 상담 신청 및 관리 ㆍ필수항목 : 
이름, 이메일 3. 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다. ㆍIP주소, 쿠키, MAC주소, 
서비스 이용기록, 방문기록, 불량 이용기록 등 ② 개인정보 수집방법 ㆍ홈페이지, 신청서 등 서면양식에 서명, 상담게시판, 전화, 팩스, 경품행사 
응모, 관계사의 제공, 제휴사부터의 제공을 통한 수집 방법 등 제7조(개인정보의 파기) ① 회사는 개인정보 보유기간의 경과, 처리목적 달성 등 
개인정보가 불필요하게 되었을 때에는 지체없이 해당 개인정보를 파기합니다. ② 정보주체로부터 동의받은 개인정보 보유기간이 경과하거나 처리목적이 
달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DB)로 옮기거나 
보관장소를 달리하여 보존합니다. ③ 개인정보 파기의 절차 및 방법은 다음과 같습니다. 1. 파기절차 회사는 파기 사유가 발생한 개인정보를 
선정하고, 회사의 개인정보 관리책임자의 승인을 받아 개인정보를 파기합니다. 2. 파기방법 회사는 전자적 파일 형태로 기록?저장된 개인정보는 
기록을 재생할 수 없도록 로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기하며, 종이 문서에 기록·저장된 개인정보는 
분쇄기로 분쇄하거나 소각하여 파기합니다. 제8조(개인정보의 안전성 확보조치) 회사는 개인정보의 안전성 확보를 위해 다음과 같은 조치를 취하고 
있습니다. 1. 관리적 조치 : 내부관리계획 수립ㆍ시행, 정기적 직원 교육 등 2. 기술적 조치 : 개인정보처리시스템 등의 접근권한 관리, 
접근통제시스템 설치, 고유식별정보 등의 암호화, 보안프로그램 설치 3. 물리적 조치 : 전산실, 자료보관실 등의 접근통제 제9조(개인정보 
자동수집 장치의 설치, 운영 및 그 거부에 관한 사항) ① 회사는 귀하의 정보를 수시로 저장하고 찾아내는 '쿠키(cookie)' 등을 
운용합니다. 쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 
저장됩니다. 회사는 다음과 같은 목적을 위해 쿠키를 사용합니다. ▶ 쿠키 등 사용 목적 - 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 
이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공 - 
귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 
때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. ▶ 쿠키 설정 거부 방법 예: 쿠키 설정을 거부하는 방법으로는 
회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 
수 있습니다. 설정방법 예(인터넷 익스플로어의 경우) : 웹 브라우저 상단의 도구 &gt; 인터넷 옵션 &gt; 개인정보 단, 귀하께서 쿠키 
설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다. 제10조(개인정보 관리책임자) ① 회사는 개인정보 처리에 관한 업무를 총괄해서 
책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 관리책임자를 지정하고 있습니다. ▶ 개인정보 
관리책임자 성명 : 조경호 직책 : 유닛장 연락처 : TEL. 02-554-9014 이메일: iami@adtive.co.kr FAX. 
02-554-3832 ▶ 개인정보 보호 담당부서  부서명 : Movement Green Unit  담당자 : 조경호 연락처 : TEL. 
02-554-9014  이메일: iami@adtive.co.kr FAX. 02-554-3832 ② 정보주체께서는 회사의 서비스(또는 사업)을 
이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 관리책임자 및 담당부서로 문의하실 수 
있습니다. 회사는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다. 제11조(개인정보 열람청구) 정보주체는 개인정보 보호법 제35조 
및 정보통신망법 제30조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 회사는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 
노력하겠습니다. ▶ 개인정보 열람청구 접수ㆍ처리 부서 부서명 : Movement Green Unit 담당자 : 조경호 연락처 : TEL. 
02-554-9014 이메일: iami@adtive.co.kr FAX. 02-554-3832 제12조(권익침해 구제방법) 정보주체는 아래의 
기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다. [아래의 기관은 회사와는 별개의 기관으로서, 회사의 자체적인 
개인정보 불만처리, 피해구제 결과에 만족하지 못하시거나 보다 자세한 도움이 필요하시면 문의하여 주시기 바랍니다] ▶ 개인정보보호 종합지원 포털 
(행정안전부 운영) - 소관업무 : 개인정보 침해사실 신고, 상담 신청, 자료제공 - 홈페이지 : www.privacy.go.kr - 전화 : 
02-2100-3394 ▶ 개인정보 침해신고센터 (한국인터넷진흥원 운영) - 소관업무 : 개인정보 침해사실 신고, 상담 신청 - 홈페이지 : 
privacy.kisa.or.kr - 전화 : (국번없이) 118 - 주소 : (138-950) 서울시 송파구 중대로135 한국인터넷진흥원 
개인정보침해신고센터 ▶ 개인정보 분쟁조정위원회 (한국인터넷진흥원 운영) - 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결) - 
홈페이지 : privacy.kisa.or.kr - 전화 : (국번없이) 118 - 주소 : (138-950) 서울시 송파구 중대로135 
한국인터넷진흥원 개인정보침해신고센터 ▶ 경찰청 사이버테러대응센터 - 소관업무 : 개인정보 침해 관련 형사사건 문의 및 신고 - 홈페이지 : 
www.netan.go.kr - 전화 : (사이버범죄) 02-393-9112 (경찰청 대표) 1566-0112 제13조(개인정보 취급방침 변경) 
① 이 개인정보 취급방침은 2012. 7. 1. 부터 적용됩니다.  위 사항에 동의합니다 모두 동의합니다 개인정보 수집 활용 동의서 
[[행운로또]]는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 
목적이 변경되는 경우에는 개인정보 보호법 제18조및 정보통신망법 제22조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다. ■ 
수집하는 개인정보 항목 - 수집항목 : 이름, 나이, 휴대폰번호, 몸무게, 신장, 기타 정보, OS/브라우저, 접속IP/URL ■ 개인정보 수집 
목적 상담 서비스 이용에 따른 본인 식별·인증, 상담 의사 확인, 상담 회신, 의사소통, 사은품 지급 시 물품 배송, 서비스 및 상품 안내 등을 
목적으로 개인정보를 처리합니다. ■ 개인정보 보유 및 이용 기간 원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 
파기합니다. 다만, 상담 사실 확인, 고객 관심사에 부합하는 서비스(제품) 개발 및 특화, 상담 통계 분석, 소비자 분쟁 대비 등의 목적으로 
상담 종료 후 1년간 보관 후 파기됩니다. ■ 개인정보 제공 동의 거부 권리 및 동의 거부 따른 불이익 내용 또는 제한사항 귀하는 개인정보 제공 
동의를 거부할 권리가 있으며, 동의 거부에 따른 불이익은 없습니다. 다만, 필수정보 제공에 동의하지 않는 경우 원활한 상담답변이 불가능 할 수도 
있습니다.  위 사항에 동의합니다 모두 동의합니다 개인정보 위탁 동의서 ■ 개인정보 처리 위탁 - [[행운로또]]는 원활한 개인정보 업무처리를 
위하여 다음과 같이 개인정보 처리업무를 위탁하고 있습니다. ■ 위탁하는 업무내용 광고대행, 광고관련 기사 작성, 상담문의 개인정보 수집 대행, 
상담문의 정보 보관 및 관리, 상담문의 수집목적 달성 후 개인정보 파기대행 ■ 위탁 받는자 애드티브 이노베이션(주) ■ 위탁에 따른 관리감독 
[[행운로또]]는 위탁계약 체결시 개인정보 보호법 제26조 및 정보통신망법 제25조에 따라 위탁업무 수행목적 외 개인정보 처리금지, 
기술적ㆍ관리적 보호조치, 재위탁 제한, 수탁자에 대한 관리ㆍ감독, 손해배상 등 책임에 관한 사항을 계약서 등 문서에 명시하고, 수탁자가 
개인정보를 안전하게 처리하는지를 감독하고 있습니다</DIV><A class="btn_close">닫기 X</A> </DIV>


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
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.')
     


    
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

    href='';
    href = cb_url + '/postact/lotto_query_curl/<?php echo $this->session->flashdata('mlh_mobileno') ?>/go2';
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
            return false;
           }
           
        }

    });
}

<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>);
<?php } ?>
    
//]]>
</script>

</body>
</html>