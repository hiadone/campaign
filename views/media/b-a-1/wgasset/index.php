
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php
    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WG자산관리</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        ul, ol, li, dt, dd {
            list-style: none;
        }

        body {
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            font-size: 100%;
            color: #333;
            line-height: 1;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* video:focus {
            outline: none;
        } */
        /* input[type="text"],input[type="number"],input[type="tel"]{
            text-indent: 5px;
        } */
        input,
        button {
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        .blind {
            position: absolute;
            overflow: hidden;
            clip: rect(0 0 0 0);
            margin: -1px;
            width: 1px;
            height: 1px;
        }

        .clearfix:after {
            content: '';
            display: block;
            clear: both;
        }

        .wrap {
            width: 100%;
            min-width: 320px;
            max-width: 640px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        .img_box,
        .btn_img {
            font-size: 0;
        }

        .btn_img {
            background-color: transparent;
            border: none;
            padding: 0;
        }

        .img_box .img,
        .btn_img .img {
            font-size: 12px;
            width: 100%;
        }

        .txt_center {
            text-align: center;
        }

        .txt_emph {
            color: #d51430;
            font-weight: bold;
        }

        .txt_bold {
            font-weight: bold;
        }
        /* form */
        .form_container {
            padding: 30px 20px 40px;
            background-color: #f8f9fd;
        }
        .form_container .inp_table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
            background-color: transparent;
            margin: 0 auto;
        }
        .inp_table .lab_box {
            color: #000;
            text-align: right;
            padding: 0px 10px 0 0;
            vertical-align: middle;
            font-size: 14px;
        }
        .inp_table .inp_box {
            color: #000;
            padding: 5px 10px 5px 0;
            vertical-align: middle;
        }
        .inp_table .inp {
            box-sizing: border-box;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            border: 1px solid #ccc;
            border-radius: 0px;
            -webkit-appearance: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        .inp_table .inp_age {
            width: 80px;
        }
        .inp_table .inp_select::-ms-expand {
            display: none;
        } 
        .inp_table .inp_select {
            background: #fff url(<?php echo $ad_dir ?>/images/arrow.png) no-repeat center right;
        }
        .form_container .question_container {
            padding: 5px 0;
        }
        .question_container .question_box {
            padding: 15px 0;
            text-align: center;
        }
        .question_container .question_box ~ .question_box {
            border-top: 1px dashed #ddd;
        }
        .question_container .question {
            margin-bottom: 15px;
            font-size: 18px;
            line-height: 1.4;
            letter-spacing: -0.8px;
            color: #88888a;
        }
        .question_container .question_q {
            color: #6accf3;
            font-weight: bold;
        }
        .question_container .lab_answer {
            display: inline-block;
            box-sizing: border-box;
            min-width: 120px;
            font-size: 15px;
            font-weight: bold;
            color: #88888a;
            background-color: #fff;
            border: 1px solid #6accf3;
            padding: 4px 10px;
            border-radius: 100px;
            line-height: 1.4;
        }
        .question_container .lab_answer:not(:last-child) {
            margin-right: 5px;
        }
        .question_container .inp_answer:checked + .lab_answer {
            color:#fff;
            background-color:#6accf3;
        }
        .form_container .agree_box {
            padding: 15px 0;
            font-size: 14px;
            color: #000;
            font-weight: normal;
            cursor: pointer;
        }
        .agree_box .inp_agree {
            vertical-align: middle;
        }
        .agree_box .lab_agree {
            padding-left: 5px;
            vertical-align: middle;
        }
        .btn_box .btn_img {
            max-width: 100%;
        }
    </style>
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
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/c01.jpg" alt="햇살론 사잇돌2" class="img">
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/c02.jpg" alt="과도한 채무로 고통 받는 서민을 위한 정부 지원 대출 상품" class="img">
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/c03.jpg" alt="질문 답변" class="img">
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/c04.jpg" alt="자산 컨설팅 전문 분석팀의 한 층 더 안전한 생활 보장 프로세스" class="img">
        </div>

        <!-- form -->
        <div class="form_container">
            
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open_multipart(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">                  
                <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">    
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_text" id="mlh_text" value="">

                <table class="inp_table">
                    <tbody>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_name" class="lab">이름</label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_name" id="mlh_name" label="이름" class="inp input" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_mobileno" class="lab">연락처</label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno" id="mlh_mobileno" label="연락처" class="inp input" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_age" class="lab">나이</label>
                            </th>
                            <td class="inp_box">
                                <input type="number" name="mlh_age" id="mlh_age" label="나이" class="inp input inp_age" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"> 세
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_job" class="lab">직장</label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_job" id="mlh_job" label="직장" class="inp input" value="<?php echo set_value('mlh_job', element('mlh_job', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_salary" class="lab">연봉</label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_salary" id="mlh_salary" label="연봉" class="inp input" value="<?php echo set_value('mlh_salary', element('mlh_salary', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_period" class="lab">재직기간</label>
                            </th>
                            <td class="inp_box">
                                <select name="mlh_period" id="mlh_period" label="재직기간" class="inp input inp_select">
                                    <option value="">재직기간 선택</option>
                                    <option <?php echo set_select('mlh_period', '1-3개월'); ?>>1-3개월</option>
                                    <option <?php echo set_select('mlh_period', '3-6개월'); ?>>3-6개월</option>
                                    <option <?php echo set_select('mlh_period', '1년이상'); ?>>1년이상</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="question_container">
                    <div class="question_box">
                        <div class="question">
                            <span class="question_q">Q</span> 사대보험에 가입되어 있으신가요?
                        </div>
                        <div class="answer">
                            <input type="radio" name="question01" id="question01_y" value="예" class="blind inp_answer input" <?php echo set_radio('question01', '예', (element('question01', element('data', $view)) === '예' ? true : false)); ?> label="사대보험가입">
                            <label for="question01_y" class="lab_answer">예</label>
                            <input type="radio" name="question01" id="question01_n" value="아니오" class="blind inp_answer input" <?php echo set_radio('question01', '아니오', (element('question01', element('data', $view)) === '아니오' ? true : false)); ?> >
                            <label for="question01_n" class="lab_answer">아니오</label>
                        </div>
                    </div>
                    <div class="question_box">
                        <div class="question">
                            <span class="question_q">Q</span> 현재 신용 회복 진행 중인가요?
                        </div>
                        <div class="answer">
                            <input type="radio" name="question02" id="question02_y" class="blind inp_answer input" value="예" <?php echo set_radio('question02', '예', (element('question02', element('data', $view)) === '예' ? true : false)); ?> label="신용회복진행">
                            <label for="question02_y" class="lab_answer">예</label>
                            <input type="radio" name="question02" id="question02_n" class="blind inp_answer input" value="아니오" <?php echo set_radio('question02', '아니오', (element('question02', element('data', $view)) === '아니오' ? true : false)); ?> >
                            <label for="question02_n" class="lab_answer">아니오</label>
                        </div>
                    </div>
                    <div class="question_box">
                        <div class="question">
                            <span class="question_q">Q</span> 현재 연체중인 채무가 있으신가요?
                        </div>
                        <div class="answer">
                            <input type="radio" name="question03" id="question03_y" class="blind inp_answer input" value="예" <?php echo set_radio('question03', '예', (element('question03', element('data', $view)) === '예' ? true : false)); ?> label="연체중인 채무">
                            <label for="question03_y" class="lab_answer">예</label>
                            <input type="radio" name="question03" id="question03_n" class="blind inp_answer input" value="아니오" <?php echo set_radio('question03', '아니오', (element('question03', element('data', $view)) === '아니오' ? true : false)); ?>>
                            <label for="question03_n" class="lab_answer">아니오</label>
                        </div>
                    </div>
                </div>
                <div class="agree_box txt_center">
                    <input type="checkbox" name="agree" id="agree" class="inp_agree" checked> 
                    <label for="agree" class="lab_agree">개인정보 수집 및 이용동의</label>
                </div>
                <div class="btn_box txt_center">
                    <button class="btn_img"><img src="<?php echo $ad_dir ?>/images/btn.jpg" alt="대출가능 여부 확인하기" class="img"></button>
                </div>
            </form>
        </div>
        <!-- form end -->

        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/footer.jpg" alt="WG자산관리 사업자등록번호" class="img">
        </div>
    </div>
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>  
    <script>
        // 한글 조사변경
        function getPostWord(str, firstVal, secondVal) {
            try {
                var lastStr = str[str.length - 1].charCodeAt(0);
                if (lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if (lastCharIndex > 0) {
                    if (firstVal === "으로" && lastCharIndex === 8)
                        str += secondVal;
                    else
                        str += firstVal;
                } else {
                    str += secondVal;
                }
            } catch (e) {
                console.error(e);
            }

            return str;
        }
        // firstVal :: 으로 / 을 / 이 / 은 / 과
        // secondVal :: 로 / 를 / 가 / 는 / 와 

        function submitContents(f) {
            var flag=false;
            var href;
            if ($("input[name='question01']:checked", f).length < 1) {
                alert('사대보험가입 여부를 선택하세요.');
                return false;
            }

            if ($("input[name='question02']:checked", f).length < 1) {
                alert('신용회복진행 여부를 선택하세요.');
                return false;
            }

            if ($("input[name='question03']:checked", f).length < 1) {
                alert('연체중인 채무 여부를 선택하세요.');
                return false;
            }

            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            
            if(!flag) return false;

            if($('input[id="agree"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_text").val("직장 :"+$("#mlh_job").val()+"\n연봉 :"+$("#mlh_salary").val()+"\n재직기간 :"+$("#mlh_period").val()+"\n사대보험가입 :"+$("input[name='question01']:checked").val()+"\n신용회복진행 :"+$("input[name='question02']:checked").val()+"\n연체중인 채무 :"+$("input[name='question03']:checked").val());
                        // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });
                
                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
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
                         url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
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
            $('.loading').hide();
        <?php } ?>
        
    </script>
</body>
</html>