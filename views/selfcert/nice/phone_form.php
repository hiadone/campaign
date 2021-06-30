<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>휴대폰 본인확인</title>
</head>
<body>
<?php 

if(!empty(element('param_r1', element('niceconfig', $view))) && !empty(element('param_r1', element('niceconfig', $view)))){ ?>
    <form name="form_auth" method="post"  action="<?php echo element('cert_url', element('niceconfig', $view)); ?>">

<input type="hidden" name="m" value="checkplusSerivce">                     <!-- 필수 데이타로, 누락하시면 안됩니다. -->
<input type="hidden" name="EncodeData" value="<?php echo element('enc_data', element('niceconfig', $view)); ?>">        <!-- 위에서 업체정보를 암호화 한 데이타입니다. -->
<input type="hidden" name="param_r1" value="<?php echo element('param_r1', element('niceconfig', $view)); ?>">
<input type="hidden" name="param_r2" value="<?php echo element('param_r2', element('niceconfig', $view)); ?>">
<input type="hidden" name="param_r3" value="<?php echo element('param_r3', element('niceconfig', $view)); ?>">
</form>


<script type="text/javascript">
document.form_auth.submit();
</script>
<?php 
} else { 
    alert_close("정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.");
} 
 ?>
</body>
</html>
