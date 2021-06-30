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
  <meta name="format-detection" content="telephone=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>비너스청결제</title>
  
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
</head>
<body>
	<div class="container">
		<?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<section><img src="<?=$AD_DIR?>/images/c01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c02.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c011.jpg"></section>
        <section class="inDB">
			<div class="inbox">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">  				
				<table>
					<colgroup>
						<col width="">
						<col width="">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text" class="form-class input" id="mlh_name" name="mlh_name" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td>							
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="number" class="form-class input" name="mlh_age" id="mlh_age" label="나이" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" style="width:80px; float:left;"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" class="form-class input" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>" name="mlh_mobileno" id="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<th>문의사항</th>

							<td>
								<textarea class="form-class input" rows="5" id="mlh_text" name="mlh_text" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
							</td>
						</tr>
						<tr>
                            <td colspan="2" class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
			</div>

			<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image"  class="btn" style="max-width: 100%;" src="<?=$AD_DIR?>/images/btn1.jpg" ></a>
			<?php echo form_close(); ?>
		</section>
		<section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c04.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c05.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c011.jpg"></section>
		<section class="inDB2">
			<div class="inbox">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="multi_code" id="multi_code_" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>"> 
			<table>
				<colgroup>
					<col width="">
					<col width="">
				</colgroup>
				<tbody>
					<tr>
						<th>이름</th>
						<td><input type="text" class="form-class input2" id="mlh_name" name="mlh_name" label="이름" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td>					
						
					</tr>
					<tr>
						<th>나이</th>
						<td><input type="number" class="form-class input2" name="mlh_age" id="mlh_age" label="나이" style="width:80px; float:left;" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>						
					</tr>
					<tr>
						<th>연락처</th>
						<td><input type="tel" class="form-class input2" name="mlh_mobileno" id="mlh_mobileno" label="연락처" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>"></td>
					</tr>
					<tr>
						<th>문의사항</th>
						<td>
							<textarea class="form-class input2" rows="5" id="mlh_text" name="mlh_text" label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
						</td>
						
					</tr>
					<tr>
                        <td colspan="2" class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
			</div>			
			<p class="t-center" style="padding-top:15px;"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image"  class="btn" style="max-width: 100%;" src="<?=$AD_DIR?>/images/btn2.jpg" ></a></p>
			<?php echo form_close(); ?>
		</section>
		<div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
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
    
     if($('input:checkbox[id="agree"]').is(":checked")){
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
    
     if($('input:checkbox[id="agree2"]').is(":checked")){
        $('.loading').show();
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code_').val() ;

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            complete : function(data) {
                // $("#mlh_mobileno_").val($("#mlh_mobileno1_").val()+$("#mlh_mobileno2_").val()+$("#mlh_mobileno3_").val());
                
            }
        });

        return flag;
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}




<?php if($this->session->flashdata('mlh_id')){?>
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>

//]]>
 </script>

<u>
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7VGPDW');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7VGPDW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</u>
 </body>
</html>


