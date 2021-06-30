<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/reset.css?'.$this->cbconfig->item('browser_cache_version')); ?>
<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css?'.$this->cbconfig->item('browser_cache_version')); ?>
<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/page.css?'.$this->cbconfig->item('browser_cache_version')); ?>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dialog.css')?>" />
<style>

label.error{padding-left:30%;}
</style>
<div class="wrap">
        <div class="title01">
            <h2 class="tit"><?php echo(element('board_name',element('board', $view)));?></h2>
        </div>
    

          



    <section class="write_area">
    <div class="table-box">
        <!-- <div class="table-heading">패스워드 입력</div> -->
        <div class="table-body change_pw">
            <?php
            echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
            echo show_alert_message(element('message', $view), '<div class="alert alert-auto-close alert-dismissible alert-warning">', '</div>');
            echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-warning">', '</div>');
            $attributes = array('class' => 'form-horizontal', 'name' => 'fpassword', 'id' => 'fpassword');
            echo form_open(current_url(), $attributes);
            ?>
                <div class="alert  alert-info infoalert"><?php echo element('info', $view); ?></div>
                <ol class="confirm_password">
                    <li>
                         <div class="inp_box">
                            <label for="post_password" class="write_label">비밀번호</label>
                            <input type="password" class="inp write_inp inp_num_password" name="modify_password" id="modify_password" value="" placeholder="비밀번호를 입력해 주세요" onfocus="this.placeholder=''" onblur="this.placeholder='비밀번호를 입력해 주세요.'" style="display:block;" autocomplete="new-password" />
                    </div>
                    </li>
                    <li>
                        
                        <button type="submit" class="btn btn-black ml50 btn-success">확 인</button>
                        <a href="<?php echo element('cancel_url', $view); ?>" class="btn  btn-silver ">취 소</a>
                    </li>
                </ol>
            <?php echo form_close(); ?>
        </div>
    </div>
    </section>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
    $('#fpassword').validate({
        rules: {
            modify_password : { required:true }
        }
    });
});
//]]>
</script>
