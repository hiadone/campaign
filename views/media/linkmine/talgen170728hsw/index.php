<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $AD_DIR  = element('view_skin_url', $layout);
    $adf_key='';
    if(!empty($_GET['adf_key'])) $adf_key=$_GET['adf_key'];

?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<title>국내최초 신개념 탈모두피 전문관리</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css">

<style>
    .alert {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size:18px;
    font-weight: bold;
    }

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
footer { 
	position: fixed;
	width:100%;
	bottom:0;
	left:0;
	text-align:center;
	z-index:99;
	cursor:pointer;
}
footer img { 
	max-width:100%;
	vertical-align:bottom;
}
@media (min-width:640px) { 
	#wrap { 
		margin-bottom:80px;
	}
}
.container {
     padding-right: 0px; 
     padding-left: 0px; 
     margin-right: auto; 
     margin-left: auto; 
}
</style>
<script type="text/javascript">
$(function () {
	$('.aaa').bind("click", function () {
		$('html, body').animate({ scrollTop: $(document).height() }, 0);
		return false;
	});
});
</script>
</head>
<body>

<footer class="aaa">
	<img src="<?=$AD_DIR?>/images/scroll_img.png">
</footer>

<div id="wrap">


	<div class="container" style="width: 100%">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c01.jpg" class="img100" style="display:block;"></div>

		

		<div class="img-area"><img src="<?=$AD_DIR?>/images/c02.jpg" class="img100" style="display:block;"></div>

		<div class="a-center movie">
			<iframe width="100%" src="https://www.youtube.com/embed/zvbaIpLZC0I" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="img-area"><img src="<?=$AD_DIR?>/images/c03.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c04.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c05.jpg" class="img100" style="display:block;"></div>

		<div class="img-area aaa"><img src="<?=$AD_DIR?>/images/c06.jpg" class="img100" style="display:block;"></div>

		<div class="img-area"><img src="<?=$AD_DIR?>/images/c07.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c08.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c09.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c10.jpg" class="img100" style="display:block;"></div>
		<div class="img-area"><img src="<?=$AD_DIR?>/images/c11.jpg" class="img100" style="display:block;"></div>
		
		       
        <div class="consult_wrap">
            <div class="cont">				
            	<?php
            	$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            	echo form_open_multipart(current_full_url(), $attributes);
            	?>
            	<input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            	<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            	<input type="hidden" name="adf_key" value="<?php echo $adf_key?>">  
                <table class="consult1 width90">
					<colgroup>
					<col width="28%">
					<col width="72%">
					</colgroup>
					<thead>
						<tr>
							<th colspan="2" class="text-center" >
							<h3>※신청양식※</h3>
							<summary>개인정보를 입력해주시면 더욱 빠르고 정확한<br>상담이 가능합니다.</summary>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text" id="mlh_name" name="mlh_name" class="form-class width95 input" label="성함"  ></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text" id="mlh_age" name="mlh_age" class="form-class input width50" label="나이" >
								<span style="color:#666">세</span></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" id="mlh_mobileno" name="mlh_mobileno" class="form-class width95 input" label="연락처"></td>
						</tr>
					<!-- <tr>
							<th>이메일</th>
							<td><input type="text" id="M_EMAIL" class="width95"></td>
						</tr> -->
						<tr>
							<th class="v-top">상담내용</th>
							<td><textarea id="mlh_text" name="mlh_text" class="width95 input" label="문의사항"></textarea></td>
						</tr>
						<tr>
							<td colspan="2" class="a-center"><input type="checkbox" id="agree" checked> <label for="agree"><span style="color:#666;font-size:11px;">개인정보 수집 및 이용동의</span></label></td>
						</tr>
					</tbody>
				</table>
				</div>
				<p class="a-center"><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/db_btn.jpg" class="img100" style="border: 0px;"></a></p>
                <br>
                <?php echo form_close(); ?>
		</div>

		<!-- <div class="footer">
			<img src="<?=$AD_DIR?>/images/copy_tal.jpg">
		</div> -->


<style>
	.crossAD { list-style:none; padding:0; }
	.crossAD > * { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
	.crossAD li { float:left; width:50%; text-align:center; margin-bottom:15px; padding:3px; }
	.crossAD li:nth-child(odd) { padding-right:7px; }
	.crossAD li:nth-child(even) { padding-left:7px; }
	.crossAD li p { padding:5px 10px; text-algin:center; font-size:14px; line-height: 1.31782; }
	.crossAD li img { max-width:100%; vertical-align:bottom; border:1px solid #ddd; }
	.label { display:block; width:100%; background-color:#ddd; margin:10px 0 5px 0; }
	.label p { display:inline-block; background-color:#df0000; color:#FFF; font-size:14px; font-weight:bold; padding:5px 10px; border-radius:4px;
		background: #dd2c2c; /* Old browsers */
		background: -moz-linear-gradient(top,  #dd2c2c 0%, #db4141 49%, #df0000 52%, #ff5f47 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #dd2c2c 0%,#db4141 49%,#df0000 52%,#ff5f47 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #dd2c2c 0%,#db4141 49%,#df0000 52%,#ff5f47 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dd2c2c', endColorstr='#ff5f47',GradientType=0 ); /* IE6-9 */
	}
	.label span { display:inline-block; position: relative; top:0px; left:0; width: 0; height: 0; border-top: 5px solid transparent; border-bottom: 5px solid transparent; border-left: 5px solid #df0000; z-index:2; }
	.clear { clear:both; }
</style>
		
			<div class="clear blank60"></div>
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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.')
     


    
    return false;
    
}




function cpaProc(mlh_id) {
    var href;

    href = 'http://api.linkmine.co.kr/callback/cpa.proc?adf_key=<?php echo $adf_key?>&adv_key=<?php echo element('adv_key',element('extravars',element('post', $view)))?>';

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            success : function(response) {
            },
            complete : function (response) {

                
            var data = JSON.parse(response.responseText);

                $.ajax({
                     async : false,
                     url : cb_url + '/media/cpaProc/' +mlh_id+'/'+data.rst+'/'+encodeURI(data.msg),
                     type : 'get',
                     dataType : 'json',
                     success : function(data) {
                          
                     }
                 });
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