<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $AD_DIR  = element('view_skin_url', $layout);
    $adf_key='';
    if(!empty($_GET['adf_key'])) $adf_key=$_GET['adf_key'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title>CARIONE RG</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">


<script type="text/javascript">
        function fnMove(){
            var offset = $("#inDB").offset();
            $('html, body').animate({scrollTop : offset.top}, 400);
        }
</script>
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css?v=1">
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

<footer onclick="fnMove();">
    <img src="<?=$AD_DIR?>/images/scroll_img.png">
</footer>

<div id="wrap">
    <div class="container" style="width: 100%">
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <section><img src="<?=$AD_DIR?>/images/c01.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c02.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c04.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c05.jpg"></section>

        <div id="movie">
            <iframe src="https://www.youtube.com/embed/8ZBlyr7NVNY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>

        <section><img src="<?=$AD_DIR?>/images/c06.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c07.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c08.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c09.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c10.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c11.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c12.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/c13.jpg"></section>
        <section><img src="<?=$AD_DIR?>/images/ani.gif"></section>
        <section><img src="<?=$AD_DIR?>/images/c14.jpg"></section>
       
        <section id="inDB">     
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="adf_key" value="<?php echo $adf_key?>">  
            
                <table>
                    <colgroup>
                    <col width="28%">
                    <col width="72%">
                    </colgroup>
                    <tr>
                            <th>성함</th>
                            <td><input type="text" id="mlh_name" name="mlh_name" class="form-class input" label="성함"></td>
                        </tr>
                        <tr>
                            <th>나이</th>
                            <td><input type="text" id="mlh_age" name="mlh_age" class="form-class input" label="나이" style="display:inline-block;width:35%;">
                                <span style="color:#FFFFFF">세</span>
                            </td>
                        </tr>
                        <tr>
                            <th>연락처</th>
                            <td><input type="tel" id="mlh_mobileno" name="mlh_mobileno" class="form-class input" label="연락처"></td>
                        </tr>
                        <tr>
                            <th>문의사항</th>
                            <td><textarea id="mlh_text" name="mlh_text" rows="4" class="form-class input" label="문의사항"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p class="a-center"><input type="checkbox" id="agree" checked> <label for="agree"><span style="color:#FFFFFF">개인정보 수집 및 이용동의</span></label></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="a-center"><a name="mem_linkmine" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_mem_linkmine"><input type="image" img src="<?=$AD_DIR?>/images/btn.jpg" style="max-width: 70%;"></a></p>
                <br>
                <?php echo form_close(); ?>
        </section>

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
        
        <div class="clear blank50"></div>
    </div>
    <div class="blank50"></div>
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