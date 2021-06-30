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
<html>
<head>
<title>노바모닝</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">

<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css?v=1">

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
</head>
<body>

<div id="outWrap">
  <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
  <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
  <div class="pageImgCell">
  	<img src="<?=$AD_DIR?>/images/top.jpg">
    <img src="<?=$AD_DIR?>/images/menu.jpg">
  </div>
  <div style="margin-top:-25px; padding-bottom:15px;">
    <p style="font-size:11px; color:#666; text-align:right;">기사입력 :
    <script language="javascript">
    today=new Date()
    document.write(today.getFullYear(),"-",today.getMonth()+1,"-",today.getDate()-1)
    </script>
    09:13</p>
  </div>
	<div id="title">
	<img src="<?=$AD_DIR?>/images/title1.png" width="100%">    
    <!--
    남성 관계전 단 <span class="blue_txt">"한 알"</span>로
<span class="red_txt">"성기능" 30배 효과</span>..충격!
	//-->
  </div>	
	<div id="sub_title">    
    -단 "한 알"로 남성 자신감 200% 상승<br>
    -노바모닝 고객 감사 이벤트 진행 중    
  </div>
  <div class="subTitleCell">
   <img src="<?=$AD_DIR?>/images/img1.png" width="100%">
  </div>
  <div class="body_title">
남성 관계전 단 "한 알"로<br>
성기능 30배 효과 볼 수 있어!!.
  </div>
  <div class="pageTextCell">
최근 많은 남성들이 잦은 회식과 업무 스트레스로 인해 몸과 마음이 지치
고 있다. 특히 피곤함과 무기력함으로 발기를 해도 강직도가 떨어져 아내와의 잠자리마저 피하는 "섹스리스" 부부가 늘어나고 있다. 이러한 문제점을 해결하기 위해 <span class="bold_txt">"노바모닝"</span>이 개발되어 화제가 되고있다. 노바모닝은 천연성분으로 이루어져 "한 알"로 고개숙인 남성의 자신감을 회복시켜 주고 있다.
  </div>
  <div class="subTitleCell">
    <img src="<?=$AD_DIR?>/images/img2.png" width="100%">
  </div>
  <div class="pageTextCell">&quot;노바모닝&quot;은 남성 자신감에 탁월한 효과를 보이는 프리미엄 남성식품으로, <span class="red_txt">성기의 발기력이 향상되어 관계 끝까지 강직하게 유지 되게 도와준다. 거기에 만성피로, 전립선, 고혈압, 당뇨에도 탁월한 효과를 자랑한다.</span><br>
  또한 부작용과 내성이 생기는 기타 의약품과는 달리 노바모닝은 모든 성분이 천연성분으로 구성되어 있으며 부작용이 없는 제품이다.</div>  
  <div class="subTitleCell">
    <img src="<?=$AD_DIR?>/images/img3.png" width="100%">
  </div>
  <div class="pageTextCell">
강북구에 거주하는 유경호(57세)씨는 기운이 예전같지 않고 항상 피곤함과 
무기력함을 느끼며 발기를 해도 딱딱하지 않았다. 주변 지인들의 권유로 "노바모닝"을 먹기 시작한지 일주일만에 피곤함과 무기력함이 싹 사라지더니 아침마다 발기된 자신의 모습에 놀라지 않을수 없었다. 단 "한 알"로 발기의 강직도, 시간이 증가하고 생활의 활력까지 되찾아 자신감 또한 넘치게 되었다. 유씨는 놀라운 경험을 혼자 간직하지 않고 주변에 추천하고 있다고 전해왔다.
  </div>
  <div class="pageTextCell">
    <img src="<?=$AD_DIR?>/images/img4.png" width="100%">    
  </div>



  <div style="margin-bottom:-5px;">
    <img src="<?=$AD_DIR?>/images/img5.png" style="width:100%;">
  </div>


<style>
	.inputTable {width:100%; max-width:350px; margin:0 auto;}
	.inputTable th {width:80px; font-size:20px; color:#666666; text-align:left;}
	.inputTable td {font-size:16px; color:#666666;}
	.inputTable td select {border:1px solid #e2e2e2; width:100%; height:35px; font-size:14px; background:#ace0ff; font-weight:bold;}
	.inputTable td input {border:1px solid #e2e2e2; width:100%; height:35px; font-size:14px; background:#ace0ff; font-weight:bold;}
	.inputTable textarea {  font-size:14px; background:#ace0ff; font-weight:bold; width:100%;border:1px solid #e2e2e2; }
	.privacy {width:100%; max-width:300px; margin:0 auto; margin-top:20px; font-size:10px; line-height:20px;}
	.applyBtnCell {text-align:center;background-color:#131e35;height:70px;padding:10px 0;}
	.applyBtnCell img {margin:20px 0; }	
	#table_con{border-left:3px solid #131e35; border-right:3px solid #131e35; padding:15px 0px 0px 0px; border-bottom:3px solid #131e35;}
</style>
  <div id="table_con">

    <?php
              $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
              echo form_open_multipart(current_full_url(), $attributes);
              ?>
              <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
              <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
              <input type="hidden" name="jid" value="<?php echo $jid?>">                  
              <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
              <input type="hidden" name="mlh_age" id="mlh_age" value="0">
              
    <table class="inputTable" id="dbdb">
    <tbody>
        
    <tr>
      <td colspan=2 ><img src="<?=$AD_DIR?>/images/img4_3.gif" width="100%"></td>
	</tr>
    
      <tr style="height:40px;">
      <th><strong style="color:#000;">이름</strong></th>
      <td><input class="input" type="text" style="width:205px;" id="mlh_name" name="mlh_name" label="이름"></td>
    </tr>
    <tr style="height:40px;">
      <th><strong style="color:#000;">연락처</strong></th>
      <td>
        <input type='tel' class="input" id="mlh_mobileno" name="mlh_mobileno" label="연락처" style="width:80%;"/>
      </td>
    </tr>
    <tr style="height:40px;">
      <th><strong style="color:#000;">나이</strong></th>
      <td><input class="input" id="mlh_age" name="mlh_age" label="나이" type="text" style="width:40px;"  maxlength="2"> <strong style="color:#000;">세</strong></td>
    </tr>
	<tr>
			<th><strong style="color:#000;">문의사항</strong></th>
			<td>
				<textarea  rows="5" class="input"  id="mlh_text" name="mlh_text" label="문의사항" ></textarea>
			</td>
		</tr>
    </tbody>
    </table>

    <div class="applyBtnCell"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btnApply2.gif" style="max-width: 100%;"></a></div>
<!--
    <div class="privacy">
      <input type="checkbox" name="agree" value="Y" checked=""> 문자를 통한 상품 및 이벤트정보 수신동의 <br>
      <input type="checkbox" name="agree1" value="Y" checked=""> 개인정보수집 및 이용동의 <a href="http://set.naonmedia.net/event/homerun/privacy.html" target="_blank">개인정보취급방침보기</a>
    </div>
//-->
  </div>
    <?php echo form_close(); ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
    <td class="news_title" style="border:none"><span style="color:#666666">네티즌</span> 의견 <i class="fa fa-commenting-o" style="color:#cccccc"></i></td>
    <td style="font-size:11px; color:#999999; padding-right:10px" align="right"><a href="#table_con" class="anchorLink" style="color:#999999">댓글숨기기▼</a></td>
  </tr>
  </tbody>
  </table>


  <div class="comment">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <!--댓글1s-->
    <tbody>
      <tr>
      <td style="border-bottom:1px #e4e4e4 solid;  padding:10px 0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td align="left" valign="top" style="padding-bottom:5px"><strong>Perr**</strong></td>
        </tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
              <td style="padding-bottom:5px">
                <a href="#table_con" class="anchorLink"><img src="<?=$AD_DIR?>/images/best.gif" border="0">이것 저것 먹어봤는데 진짜 노바모닝가 진리입니다. 먹을때랑 안먹을때랑 차이가 확 나더라구요~
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td style="font-size:12px; color:#aaaaaa"> 2018-01-08                                        02:30</td>
                  <td width="50"><div class="good"><img src="<?=$AD_DIR?>/images/up.png"> 1035</div></td>
                  <td width="30"><div class="bad"><img src="<?=$AD_DIR?>/images/down.png"> 9</div></td>
                </tr>
                </tbody>
                </table>
              </td>
            </tr>
            </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px #e4e4e4 solid;  padding:10px 0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td align="left" valign="top" style="padding-bottom:5px"><strong>Base**</strong></td>
        </tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
              <td style="padding-bottom:5px">
                <a href="#table_con" class="anchorLink"><img src="<?=$AD_DIR?>/images/best.gif" border="0"> 3번째 재구매 입니다. 아침에 일어나면 확실히 다르네요~ 아내랑도 관계가 더 좋아지고.. 대박입니다!
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td style="font-size:12px; color:#aaaaaa"> 2018-01-08                                        03:11</td>
                  <td width="50"><div class="good"><img src="<?=$AD_DIR?>/images/up.png"> 807</div></td>
                  <td width="30"><div class="bad"><img src="<?=$AD_DIR?>/images/down.png"> 13</div></td>
                </tr>
                </tbody>
                </table>
              </td>
            </tr>
            </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px #e4e4e4 solid; padding:10px 0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td align="left" valign="top" style="padding-bottom:5px"><strong>Simp**</strong></td>
        </tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
              <td style="padding-bottom:5px">
                <a href="#table_con" class="anchorLink">효과가 진짜 좋은가요? 요새 진짜 스트레스네요.. 자신감도 점점 떨어지고 눈물납니다
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td style="font-size:12px; color:#aaaaaa"> 2018-01-08                                        08:07</td>
                  <td width="50"><div class="good"><img src="<?=$AD_DIR?>/images/up.png"> 20</div></td>
                  <td width="30"><div class="bad"><img src="<?=$AD_DIR?>/images/down.png"> 0</div></td>
                </tr>
                </tbody>
                </table>
              </td>
            </tr>
            </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="border-bottom:1px #e4e4e4 solid; padding:10px 0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td align="left" valign="top" style="padding-bottom:5px"><strong>Boom**</strong></td>
        </tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
              <td style="padding-bottom:5px">
                <a href="#table_con" class="anchorLink">오줌발도 약해지고 와이프랑 잠자리도 피하게 됐었는데.. 노바모닝먹고나서 확 달라졌습니다. 강추에요!!
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td style="font-size:12px; color:#aaaaaa"> 2018-01-08                                        10:26</td>
                  <td width="50"><div class="good"><img src="<?=$AD_DIR?>/images/up.png"> 20</div></td>
                  <td width="30"><div class="bad"><img src="<?=$AD_DIR?>/images/down.png"> 0</div></td>
                </tr>
                </tbody>
                </table>
              </td>
            </tr>
            </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td style="padding:10px 0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td align="left" valign="top" style="padding-bottom:5px"><strong>Colo**</strong></td>
        </tr>
        <tr>
          <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
              <td style="padding-bottom:5px">
                <a href="#table_con" class="anchorLink">배송도 빠르고 좋네요,~ 전 이벤트때 구매해서 추가 서비스 받았어요^^
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td style="font-size:12px; color:#aaaaaa"> 2018-01-08                                        10:41</td>
                  <td width="50"><div class="good"><img src="<?=$AD_DIR?>/images/up.png"> 20</div></td>
                  <td width="30"><div class="bad"><img src="<?=$AD_DIR?>/images/down.png"> 0</div></td>
                </tr>
                </tbody>
                </table>
              </td>
            </tr>
            </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
          <td style="border:1px #e4e4e4 solid; background-color:#FFFFFF;  padding:10px" valign="top"><a href="#table_con" class="anchorLink" style="color:#999999;">로그인 후 입력이 가능합니다.</a></td>
          <td width="10px"></td>
          <td width="90"><a href="#table_con" class="anchorLink"><img src="<?=$AD_DIR?>/images/sns3.jpg" border="0" width="113"></a></td>
        </tr>
        </tbody>
        </table>
      </td>
    </tr>
    </tbody>
    </table>

  </div>

</div>






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
}


<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
<?php } ?>

//]]>
 </script>
</body>
</html>