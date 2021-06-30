<?php
	$AD_DIR  = element('view_skin_url', $layout);
 if ($this->cbconfig->item('use_selfcert') && ($this->cbconfig->item('use_selfcert_phone') OR $this->cbconfig->item('use_selfcert_ipin'))) {
    	$this->managelayout->add_js(base_url('assets/js/member_selfcert.js'));
	}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>피부속부터 변화시키는 놀라움 cr-5</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">

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

  <div class="container" >
		<div class="img-area"><img src="<?=$AD_DIR?>/images/header.jpg" class="img100"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/img001.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img002.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img003.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img004.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img005.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img006.gif" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img007.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img008.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/img009.gif" class="img100"></div>
		
		<div  class="consult_wrap" id="consult">
			<div class="cont">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <th>이름</th><td><input type="text" class="form-class input" id="msh_mem_id" name="msh_mem_id" label="이름"></td>
				<?php if ($this->cbconfig->item('use_selfcert_phone')) { ?>
					<p class="cr_btn a-center mb20"><a name="mem_selfcert"   onClick="view_event_register();"><img src="<?=$AD_DIR?>/images/btn.gif" class="width80"></a></p>
                            
                <?php } ?>

                <table class="consult1 width90">
                    <colgroup>
                    <col width="28%">
                    <col width="72%">
                    </colgroup>
                    <tr>
                            <td colspan="2" class="a-center">
                            <span>
                            <?php 
                            $comment='';
                            if(element('campaign_age',element('extravars',element('post', $view))) || element('campaign_gender',element('extravars',element('post', $view)))){
                                $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                                $campaign_age[0]=trim($campaign_age[0]);
                                $campaign_age[1]=trim($campaign_age[1]);

                                if(!empty($campaign_age[0])) $comment=$campaign_age[0].'세 이상 ';
                                if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하</span> ';
                                if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                                $comment .='만 참여 가능합니다.';

                                echo $comment;
                            }
                                
                            ?>
                            </td>
                        </tr>
                </table>
                <?php echo form_close(); ?>
			</div>
		</div>
		   	
		
		
        
       
   
        <div class="img-area" id="inDB"><img src="<?=$AD_DIR?>/images/img010.jpg" class="img100"></div>
        <div class="img-area"><img src="<?=$AD_DIR?>/images/footer.jpg" class="img100"></div>

		
	</div>
    

    <div class="hg70"></div> 
    <div id="btn_mem_selfcert_phone" data-post_id="<?php echo element('post_id',element('post', $view));?>"></div>
</div>
</body>
</html>
<script type="text/javascript">
//<![CDATA[
    


function view_event_register() {

    if(jQuery.trim($('#msh_mem_id').val())) {
        var flag=false;
        var href = cb_url + '/postact/msh_mem_id_check/<?php echo element('post_id',element('post', $view));?>/'+$('#msh_mem_id').val();
        


        $.ajax({
            async: false,
            url : href,
            type : 'get',
            dataType : 'json',
            success : function(data) {
                if (data.resultcode==='2') {
                    alert(data.message);
                    flag = false;
                } else if (data.resultcode==='1') { 
                    flag = true;
                    
                }
            }
        });
    } else alert('아이디를 입력해 주세요!!');
    if(flag)
        $("#btn_mem_selfcert_phone").click();
    else return false;
}

//]]>
</script>