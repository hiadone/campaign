<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];



    $join_hp = array();
    $join_hp = explode("-",$this->session->flashdata('mlh_mobileno'));
    


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>first lotto</title>
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/common.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
</head>

<style>
.alert 
{
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    font-size:18px;
    font-weight: bold;
    line-height: 1.5;
}
</style>

<body>
    <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
    <!-- <div class="black" style="display: block;">
        
        <div class="pop_db_box">
            

                <div class="tit img_box"><img src="<?php echo $ad_dir ?>/images/db_top2.gif" alt=""></div>
                <div class="time">1분 5초</div>
                <div class="inp_tel_box">
                    <label for="" class="inp_lab">연락처</label>
                    <select name="" id="" class="inp_tel">
                        <option value="">010</option>
                        <option value="">011</option>
                        <option value="">016</option>
                        <option value="">017</option>
                        <option value="">018</option>
                        <option value="">019</option>
                    </select><input type="tel" name="" id="" class="inp_tel" maxlength="4"><input type="tel" name="" id="" class="inp_tel" maxlength="4">
                </div>
                <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn2.png" alt="로얄번호 무료로 받아보기"></button>
                <p class="txt">시간이 지나면 자동으로 창이 꺼지며,<br>꼭 시간안에 남겨주셔야 혜택제공이 가능합니다.</p>
                <button type="button">창닫기</button>
            </form>
        </div>
    </div> -->
    <div class="nav">
        <ul class="nav_ul">
            <li class="nav_li long"><a href="#db">뉴스홈</a></li>
            <li class="nav_li active">속보</li>
            <li class="nav_li"><a href="#db">정치</a></li>
            <li class="nav_li"><a href="#db">경제</a></li>
            <li class="nav_li"><a href="#db">사회</a></li>
        </ul>
        <div class="search">
            <div class="inp">검색하기</div>
            <div class="btn">검색</div>
        </div>
    </div>
    <div class="wrap">
        <div class="title_box">
            <h1 class="tit">
                <a href="#db">
                    <span class="red">[화제의 이슈] 로또도 패턴이 존재한다?</span>
                    <img src="<?php echo $ad_dir ?>/images/tit.gif" alt="로또 올해 수동당첨자 비율이 급격히 상승한 진실은?">
                </a>
            </h1>
            <h2 class="sub_tit">
                <a href="#db">- 수동당첨 월등히 높아.. 14.8% 급상승 </a>
            </h2>
            <div class="info">
                <p>기사입력: 2019.4-1 09:13</p>
                <div class="img_box"><img src="<?php echo $ad_dir ?>/images/icon.png" alt="sns 아이콘"></div>
            </div>
        </div>
        <div class="txt_box">
            <h3 class="tit">로또는 운이 존재한다?</h3>
            <p class="txt">지속적인 경제 한파에 부딪히면서 월급쟁이가 아닌 이상 안정적인 수익조차 가져가기가 힘들다.</p>
            <p class="txt">최근 데이터로 보면 로또구매율이 급상승하면서 사람들은 '잭팟'을 원하고 있지만 사실상 '잭팟'을 터트리기에는 불가능하다.</p>
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/lotto1_1.jpg" alt="로또 참고이미지">
        </div>
        <div class="txt_box">
            <h3 class="tit">40-60대 고객만족도 독보적 1위</h3>
            <p class="txt">최근 개발자들은 로또분석 토대로 수많은 시행착오 끝에 2019년 패턴 시스템 제작에 성공을 이루었다.</p>
            <p class="txt">일반인 대상 350명 분석 번호 13회차 테스트 결과 수동 당첨 비율이 무려 4등 67.7%▲, 3등 47.9%▲까지 상승한 놀라운 결과를 직접 입증시킨 것이다.</p>
            <p class="txt">퍼스트로또는 분석된 통계 기반으로 약 72시간 동안 수백여 개의 조합을 패턴 분석하여 약 800만여 개의 샘플링 데이터를 추출, 가장 유용한 패턴을 검증작업을 하여 놓치는 수가 없는지 다시 한번 검증을 한다.</p>
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/lotto2.jpg" alt="로또후기">
        </div>
        <div class="txt_box">
            <p class="txt">퍼스트로또는 Big Data 기반의 통계 접근에서 AI 인공지능 조합법으로 타 로또업체와의 확연한 차이를 보인다. 인텐시브 시스템에 정확성을 더 높힌 인텔리전트 시스템의 인공지능 분석 솔루션으로 추출된 분석번호를 무료로 경험할 수 있는 좋은 기회가 되고 있다.</p>
        </div>

    </div>
    <div class="db_box">
        <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            
            <input type="hidden" name="mlh_age" value="0">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
        
            <div class="tit img_box">
                <img src="<?php echo $ad_dir ?>/images/dbtt.jpg" alt="로또 1등 거짓이 아닌 현실로 다가옵니다. 삶의 가치를 업그레이드 하세요">
            </div>

            <div class="inp_tel_box">
                <label for="" class="inp_lab">이&nbsp;&nbsp;&nbsp;름</label>
                <input type="text" id="mlh_name" name="mlh_name" label="이름" class="inp_tel input"  style="width:50%"> 
            </div>
            <div class="inp_tel_box">
                <label for="" class="inp_lab">연락처</label>
                <select id="mlh_mobileno1" name="mlh_mobileno1" class="inp_tel">
                    <option value="010">010</option>
                    <option value="011">011</option>
                    <option value="016">016</option>
                    <option value="017">017</option>
                    <option value="018">018</option>
                    <option value="019">019</option>
                </select> -
                <input type="tel" id="mlh_mobileno2" name="mlh_mobileno2" label="연락처" class="inp_tel input" maxlength="4"> -
                <input type="tel" id="mlh_mobileno3" name="mlh_mobileno3" label="연락처" class="inp_tel input" maxlength="4">
            </div>
            <p class="txt">
                퍼스트로또의 자체 기술력 <br>분석시스템을 <span class="red">무료</span>로 받아보세요.
            </p>
            <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn01.gif" alt="1등 당첨 예상번호 무료로 받아보기 click"></button>
            <div class="db_bottom img_box">
                <img src="<?php echo $ad_dir ?>/images/db_img3.gif" alt="아래 화살표" class="arrow">
                <img src="<?php echo $ad_dir ?>/images/db_1.gif" alt="이번주 1등 당첨 예상번호는">
            </div>
        <?php echo form_close(); ?>

    </div>
    <div class="post_reply">
        <div class="tit_box">
            <h2 class="tit">네티즌 의견</h2>
            <span class="more">더보기</span>
        </div>
        <div class="reply_box">
            <ul class="reply_list">
                <li class="list_li">
                    <div class="reply_top">
                        <p class="nick"><img src="<?php echo $ad_dir ?>/images/best.gif" alt="best">piepo***</p>
                        <span class="date">2019-4-1 15:55</span>
                    </div>
                    <div class="reply_txt">
                        <a href="#db">
                            올해 수동 당첨자가 많이 나온다는 뉴스 보다가 호기심에 신청해봤어요. 3년째 최고 등수 3등 당첨된 게 전부네요. 지인도 추천해주던데 당첨되면 저도 인증 사진 올릴게요.
                        </a>
                    </div>
                    <div class="reply_bottom">
                        <span class="left">답글(3)</span>
                        <span class="right">추천 0 반대 0</span>
                    </div>
                </li>
                <li class="list_li">
                    <div class="reply_top">
                        <p class="nick"><img src="<?php echo $ad_dir ?>/images/best.gif" alt="best">money***</p>
                        <span class="date">2019-4-1 15:55</span>
                    </div>
                    <div class="reply_txt">
                        <a href="#db">
                            로또로 인생 역전 가즈아~!!!!
                        </a>
                    </div>
                    <div class="reply_bottom">
                        <span class="left">답글(1)</span>
                        <span class="right">추천 0 반대 0</span>
                    </div>
                </li>
                <li class="list_li">
                    <div class="reply_top">
                        <p class="nick"><img src="<?php echo $ad_dir ?>/images/best.gif" alt="best">piepo***</p>
                        <span class="date">2019-4-1 15:55</span>
                    </div>
                    <div class="reply_txt">
                        <a href="#db">
                            로또는 역시 수동이 대세 ㅋ 오늘도 하러 갑니다~
                        </a>
                    </div>
                    <div class="reply_bottom">
                        <span class="left">답글(1)</span>
                        <span class="right">추천 0 반대 0</span>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <div class="footer img_box">
        <img src="<?php echo $ad_dir ?>/images/footer.gif" alt="푸터">
    </div>
    <div class="db_box">
        <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">  
            <input type="hidden" name="mlh_age" value="0">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">
            <div class="tit img_box">
                <img src="<?php echo $ad_dir ?>/images/db_img03.jpg" alt="로또 1등 거짓이 아닌 현실로 다가옵니다. 삶의 가치를 업그레이드 하세요">
            </div>

            <div class="inp_tel_box">
                <label for="" class="inp_lab">이&nbsp;&nbsp;&nbsp;름</label>
                <input type="text" id="mlh_name" name="mlh_name" label="이름" class="inp_tel input2"  style="width:50%"> 
            </div>

            <div class="inp_tel_box">
                <label for="" class="inp_lab">연락처</label>
                <select id="mlh_mobileno_1" name="mlh_mobileno_1" class="inp_tel">
                    <option value="010">010</option>
                    <option value="011">011</option>
                    <option value="016">016</option>
                    <option value="017">017</option>
                    <option value="018">018</option>
                    <option value="019">019</option>
                </select> -
                <input type="tel" id="mlh_mobileno_2" name="mlh_mobileno2" label="연락처" class="inp_tel input2" maxlength="4"> -
                <input type="tel" id="mlh_mobileno_3" name="mlh_mobileno3" label="연락처" class="inp_tel input2" maxlength="4">

                
            </div>
            <p class="txt">
                퍼스트로또의 자체 기술력 <br>분석시스템을 <span class="red">무료</span>로 받아보세요.
            </p>
            <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn01.gif" alt="1등 당첨 예상번호 무료로 받아보기 click"></button>
            <div class="db_bottom img_box">
                <img src="<?php echo $ad_dir ?>/images/db_img3.gif" alt="아래 화살표" class="arrow">
                <img src="<?php echo $ad_dir ?>/images/db_1.gif" alt="이번주 1등 당첨 예상번호는">
            </div>
        <?php echo form_close(); ?>

    </div>
    
</body>
</html>

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
                $("#mlh_mobileno").val($("#mlh_mobileno1 option:selected").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                
            }
        });

        return flag;
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
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
    
     // if($('input:checkbox[id="agree2"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            complete : function(data) {
                $("#mlh_mobileno_").val($("#mlh_mobileno_1 option:selected").val()+$("#mlh_mobileno_2").val()+$("#mlh_mobileno_3").val());
                
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


    var href;

    
    href = "http://firstlotto.co.kr/lotto_joinapi.php";
     $.ajax({
        type: "GET",
        url: href,
        data: {
            "phone1": "<?php echo empty($join_hp[0]) ? 0 : $join_hp[0] ;  ?>",
            "phone2": "<?php echo empty($join_hp[0]) ? 0 : $join_hp[1] ; ?>",
            "phone3": "<?php echo empty($join_hp[2]) ? 0 : $join_hp[2] ; ?>",
            "name": encodeURIComponent("<?php echo $this->session->flashdata('mlh_name') ?>"),
            "chex": "gonblog"
        },
        dataType : 'json',
        complete: function (response) {
        }
        

    });
}
 

<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
<?php } ?>

//]]>
 </script>


