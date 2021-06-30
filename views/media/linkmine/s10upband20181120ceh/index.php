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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="robots" content="index,follow">
  <meta name="format-detection" content="telephone=no">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>스텐업</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?=$AD_DIR?>/css/style.css"/>

  <style>
    .alert {
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
	<div class="container" style="padding:0px;">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close alert-dismissible alert-info">', '</div>'); ?>
		<section><img src="<?=$AD_DIR?>/images/image-01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/image-02.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/image-03.jpg"></section>
		<section><a href="tel:070-7434-4867"><img src="<?=$AD_DIR?>/images/image-03-tel.jpg"></a></section>
		<section><img src="<?=$AD_DIR?>/images/image-04.jpg"></section>
        <section class="inDB">
        	<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="adf_key" value="<?php echo $adf_key?>">
            
			<div class="inbox">
				<table>
					<colgroup>
						<col width="">
						<col width="">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text" class="form-class input" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="number" class="form-class input" id="mlh_age" name="mlh_age" style="width:80px; float:left;" label="나이"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" class="form-class input" id="mlh_mobileno" name="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<th>문의사항</th>
							
								<td><textarea class="form-class input" id="mlh_text" name="mlh_text" rows="5" label="문의사항"></textarea></td>
							
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
				<a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/button.png"  style="border: 0px;width:100%"></a>
				<p class="t-center" style="padding-top:10px;font-size:13px;">기입하신 수집된 정보는 본 이벤트 이외에 어떤용도로도 사용되지 않습니다!</p>

				
				<?php echo form_close(); ?>
			</div>
		</section>
		<section><img src="<?=$AD_DIR?>/images/image-06.jpg"></section>
   		<section><img src="<?=$AD_DIR?>/images/image-07.jpg"></section>
  		<section><img src="<?=$AD_DIR?>/images/image-08.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/image-09.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/image-10.jpg"></section>
		<section><a href="tel:070-7434-4867"><img src="<?=$AD_DIR?>/images/image-03-tel.jpg"></a></section>
		<section class="inDB">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite2', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents2(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="adf_key" value="<?php echo $adf_key?>">
            
			<div class="inbox">
				<table>
					<colgroup>
						<col width="">
						<col width="">
					</colgroup>
					<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text" class="form-class input2" id="mlh_name" name="mlh_name" label="이름"></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="number" class="form-class input2" id="mlh_age" name="mlh_age" style="width:80px; float:left;" label="나이"> <label style="position:relative;float:left; top:6px; left:3px;">세</label></td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel" class="form-class input2" id="mlh_mobileno" name="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<th>문의사항</th>
							<td>
								<textarea class="form-class input2" id="mlh_text" name="mlh_text" rows="5" label="문의사항"></textarea>
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

				<p class="t-center" style="padding-top:15px;"><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/button.png"  style="border: 0px;width:100%"></a></p>
				<p class="t-center" style="padding-top:10px;font-size:13px;">기입하신 수집된 정보는 본 이벤트 이외에 어떤용도로도 사용되지 않습니다!</p>
				</div>
				<?php echo form_close(); ?>
		</section>
        <section><img src="<?=$AD_DIR?>/images/image-12.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/changil.jpg"></section>

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
                     url : cb_url + '/media/cpaProc/' +mlh_id+'/'+data.rst+'/'+data.msg,
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