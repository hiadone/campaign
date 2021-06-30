<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>휴대폰 본인확인</title>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>

<?php if(element('selfcert_result', $view) === 'success'){ ?>
<!-- Performax WEB CPA Tracker V1 :: Postback Tag  -->



<script type="text/javascript">
$(function() {
    alert("<?php echo element('message',element('selfcertinfo', $view)); ?>");
<?php if (element('redirecturl', $view)) { ?>
    location.replace('<?php echo element('redirecturl', $view); ?>');
<?php } ?>
    // window.close();
});
</script>

<?php } else { ?>
 
<script type="text/javascript">
$(function() {
    alert("<?php echo element('message',element('selfcertinfo', $view)); ?>");
    location.replace('<?php echo base_url('media/selfcert_ad/himart_roulette?')?>');
    
    // window.close();
});
</script>
<?php } ?>
</body>
</html>
