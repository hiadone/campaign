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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

    <title>에너지링</title>
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
        
    <link rel="stylesheet" type="text/css" href="<?=$AD_DIR?>/css/common.css" />
</head>

<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box go_form"><a href="#goForm"><img src="<?=$AD_DIR?>/images/02.png" alt="무료체험 신청하기" class="img"></a>
        </div>
        
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/top_.gif" alt="성기능 강화 효과 입증으로 인기몰이 중인 에너지링" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_18.jpg" alt="에너지링이 당신의 성기에 에너지를 채워드립니다." class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/ani_03_black.gif" alt="에너지링 효과" class="img"></div>

<!-- 추가dbform -->
        <div class="form_wrap">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents03(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno__">      
            <input type="hidden" name="multi_code" id="multi_code__" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="mlh_name" value="nobody">
            <input type="hidden" name="mlh_age" value="0">
                <div class="form_container">
                    <dl class="user_inp_container">
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_mobileno1__" class="label">연락처</label></dt>
                            <dd class="inp_box">
                                <select name="mlh_mobileno1" id="mlh_mobileno1__" class="inp inp_tel input03" label="연락처">
                                    <option>010</option>
                                    <option>011</option>
                                    <option>016</option>
                                    <option>017</option>
                                    <option>018</option>
                                    <option>019</option>
                                </select>
                                -
                                <input type="number" value="<?php echo set_value('mlh_mobileno2__', element('mlh_text', element('post', $view))); ?>" name="mlh_mobileno2__" id="mlh_mobileno2__" class="inp inp_tel input03" label="연락처">
                                -
                                <input type="number" value="<?php echo set_value('mlh_mobileno3__', element('mlh_text', element('post', $view))); ?>" name="mlh_mobileno3__" id="mlh_mobileno3__" class="inp inp_tel input03" label="연락처">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_text" class="label">문의사항</label></dt>
                            <dd class="inp_box">
                                <textarea name="mlh_text" id="mlh_text__" class="inp inp_textarea input03"
                                    label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div class="txt_emph box_center">
                        "무료"서비스 신청이며, 14일 무료 이벤트<br>서비스외에 어떤 것으로도 사용하지 않습니다.
                    </div>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
                             </div>
                    <div class="agree_container">
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeInfo03" checked>
                            <label for="agreeInfo03" class="label"> 개인정보 수집 및 활용동의</label>
                            <a href="http://cdn.new-star.co.kr/admanager/event/egring/m/if01.html"
                                class="txt_bold link_detail">[자세히 보기]</a>
                        </div>
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeMsg03" checked>
                            <label for="agreeMsg03" class="label txt_bold">광고성 문자메세지 수신동의</label>
                        </div>
                    </div>
                    <div class="btn_box"><button type="submit" class="btn_submit btn_img"><img src="<?=$AD_DIR?>/images/btn01.gif"
                                alt="" class="img"></button></div>
                </div>
            <?php echo form_close(); ?>
        </div>
<!-- 추가dbform end-->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_19.jpg" alt="에너지링 효과" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_19_1.jpg" alt="에너지링 사용고객 후기" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_20.jpg" alt="에너지링 사용고객 후기" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/energy_04.jpg" alt="에너지링 14일 무료체험 이벤트 실시" class="img"></div>
        <!-- form01 -->
        <div class="form_wrap" id="formWrap01">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents01(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">            <input type="hidden" name="mlh_name" value="nobody">
            <input type="hidden" name="mlh_age" value="0">
            <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno">      
            
                <div class="form_container">
                    <dl class="user_inp_container">
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_mobileno1" class="label">연락처</label></dt>
                            <dd class="inp_box">
                                <select name="mlh_mobileno1" id="mlh_mobileno1" class="inp inp_tel input01" label="연락처">
                                    <option>010</option>
                                    <option>011</option>
                                    <option>016</option>
                                    <option>017</option>
                                    <option>018</option>
                                    <option>019</option>
                                </select>
                                -
                                <input type="number" name="mlh_mobileno2" id="mlh_mobileno2" class="inp inp_tel input01" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>">
                                -
                                <input type="number" name="mlh_mobileno3" id="mlh_mobileno3" class="inp inp_tel input01" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_text" class="label">문의사항</label></dt>
                            <dd class="inp_box">
                                <textarea name="mlh_text" id="mlh_text" class="inp inp_textarea input01"
                                    label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
                             </div>
                    <div class="txt_emph box_center">
                        "무료"서비스 신청이며, 14일 무료 이벤트<br>서비스외에 어떤 것으로도 사용하지 않습니다.
                    </div>
                    <div class="agree_container">
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeInfo01" checked>
                            <label for="agreeInfo01" class="label"> 개인정보 수집 및 활용동의</label>
                            <a href="http://cdn.new-star.co.kr/admanager/event/egring/m/if01.html"
                                class="txt_bold link_detail">[자세히 보기]</a>
                        </div>
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeMsg01" checked>
                            <label for="agreeMsg01" class="label txt_bold">광고성 문자메세지 수신동의</label>
                        </div>
                    </div>
                    <div class="btn_box"><button type="submit" class="btn_submit btn_img"><img src="<?=$AD_DIR?>/images/btn01.gif"
                                alt="" class="img"></button></div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- form01 end -->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_22.jpg" alt="에너지링의 기술력" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_25.jpg" alt="에너지링 고객만족도" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/ani_04_black.gif" alt="에너지링으로 당신은 변화 됩니다." class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img_27.jpg" alt="에너지링 대한민국 남성들에게 강력하게 추천합니다" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/energy_04.jpg" alt="에너지링 14일 무료체험 이벤트 실시" class="img"></div>

        <!-- 상담신청내용 롤링  -->
        <div class="rolling_content_container" id="goForm">
            <div class="title box_center">실시간 상담현황</div>
            <div class="table">
                <div class="box_thead clearfix">
                    <div class="table_left">이름</div>
                    <div class="table_right">상담내용</div>
                </div>
                <div class="box_tbody rolling_content_box">
                    <ul class="rolling_content_list">
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">김*훈</div>
                            <div class="table_right clearfix">
                                <div class="content_title">사용방법문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">김*률</div>
                            <div class="table_right clearfix">
                                <div class="content_title">프로그램문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">박*영</div>
                            <div class="table_right clearfix">
                                <div class="content_title">성관계 고민문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">김*환</div>
                            <div class="table_right clearfix">
                                <div class="content_title">부부개선 문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">박*현</div>
                            <div class="table_right clearfix">
                                <div class="content_title">가격얼마</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">최*훈</div>
                            <div class="table_right clearfix">
                                <div class="content_title">무료체험신청 문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                        <li class="rolling_content clearfix">
                            <div class="table_left content_name">이*은</div>
                            <div class="table_right clearfix">
                                <div class="content_title">가격문의</div>
                                <div class="content_date"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 상담신청내용 롤링 end  -->

        <!-- form02 -->
        <div class="form_wrap" id="formWrap02">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno_">      
            <input type="hidden" name="multi_code" id="multi_code_" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="mlh_name" value="nobody">
            <input type="hidden" name="mlh_age" value="0">
                <div class="form_container">
                    <dl class="user_inp_container">
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_mobileno1" class="label">연락처</label></dt>
                            <dd class="inp_box">
                                <select name="mlh_mobileno1" id="mlh_mobileno1_" class="inp inp_tel input02" label="연락처">
                                    <option>010</option>
                                    <option>011</option>
                                    <option>016</option>
                                    <option>017</option>
                                    <option>018</option>
                                    <option>019</option>
                                </select>
                                -
                                <input type="number" value="<?php echo set_value('mlh_mobileno2_', element('mlh_text', element('post', $view))); ?>" name="mlh_mobileno2_" id="mlh_mobileno2_" class="inp inp_tel input02" label="연락처">
                                -
                                <input type="number" value="<?php echo set_value('mlh_mobileno3_', element('mlh_text', element('post', $view))); ?>" name="mlh_mobileno3_" id="mlh_mobileno3_" class="inp inp_tel input02" label="연락처">
                            </dd>
                        </div>
                        <div class="row clearfix">
                            <dt class="label_box"><label for="mlh_text" class="label">문의사항</label></dt>
                            <dd class="inp_box">
                                <textarea name="mlh_text" id="mlh_text_" class="inp inp_textarea input02"
                                    label="문의사항"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                            </dd>
                        </div>
                    </dl>
                    <div class="txt_emph box_center">
                        "무료"서비스 신청이며, 14일 무료 이벤트<br>서비스외에 어떤 것으로도 사용하지 않습니다.
                    </div>
                    <div  class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
                             </div>
                    <div class="agree_container">
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeInfo02" checked>
                            <label for="agreeInfo02" class="label"> 개인정보 수집 및 활용동의</label>
                            <a href="http://cdn.new-star.co.kr/admanager/event/egring/m/if01.html"
                                class="txt_bold link_detail">[자세히 보기]</a>
                        </div>
                        <div class="agree_box box_center">
                            <input class="inp_check" type="checkbox" name="" id="agreeMsg02" checked>
                            <label for="agreeMsg02" class="label txt_bold">광고성 문자메세지 수신동의</label>
                        </div>
                    </div>
                    <div class="btn_box"><button type="submit" class="btn_submit btn_img"><img src="<?=$AD_DIR?>/images/btn01.gif"
                                alt="" class="img"></button></div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- form02 end -->

        <!-- IFRAME -->
        <!-- IFRAME end -->

        <!-- 댓글 -->
        <div class="comment_container clearfix">
            <div class="comment_head clearfix">
                <div class="comment_num"><img src="<?=$AD_DIR?>/images/txt_reply_00.png" alt="댓글" class="img_comment"> <span
                        class="num">372</span></div>
                <div class="btn_right btn_img"><img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img"></div>
            </div>
            <div class="comment_tabbox">
                <div class="comment_tab_head clearfix">
                    <div class="tab box_center"><img src="<?=$AD_DIR?>/images/txt_reply_01.png" alt="좋아요순" class="img_tab"></div>
                    <div class="tab box_center active"><img src="<?=$AD_DIR?>/images/txt_reply_02.png" alt="최신순" class="img_tab">
                    </div>
                </div>
                <ul class="comment_list">
                    <li class="comment">
                        <div class="user_id">coon****</div>
                        <div class="comment_txt">요즘 부부관계가 고민인데..이걸로 해결될까요?</div>
                        <div class="comment_date"></div>
                        <div class="comment_link"><img src="<?=$AD_DIR?>/images/icon_phone.jpg" alt="모바일" class="img_icon"> | 신고
                        </div>
                        <div class="btn_box clearfix">
                            <img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img_left">
                            <img src="<?=$AD_DIR?>/images/btn_unlike15.gif" alt="싫어요 15" class="img_right">
                            <img src="<?=$AD_DIR?>/images/btn_like385.gif" alt="좋아요 841" class="img_right">
                        </div>
                    </li>
                    <li class="comment">
                        <div class="user_id">toug****</div>
                        <div class="comment_txt">에너지 링, 얘기는 들어본것 같은데 어떻게 사용하는 거죠? 일단 무료상담 신청해봅니다.</div>
                        <div class="comment_date"></div>
                        <div class="comment_link"><img src="<?=$AD_DIR?>/images/icon_phone.jpg" alt="모바일" class="img_icon"> | 신고
                        </div>
                        <div class="btn_box clearfix">
                            <img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img_left">
                            <img src="<?=$AD_DIR?>/images/btn_unlike21.gif" alt="싫어요 21" class="img_right">
                            <img src="<?=$AD_DIR?>/images/btn_like607.gif" alt="좋아요 607" class="img_right">
                        </div>
                    </li>
                    <li class="comment">
                        <div class="user_id">cara****</div>
                        <div class="comment_txt">정말 공감가는 내용이네요. 용기내서 신청해봅니다.</div>
                        <div class="comment_date"></div>
                        <div class="comment_link"><img src="<?=$AD_DIR?>/images/icon_phone.jpg" alt="모바일" class="img_icon"> | 신고
                        </div>
                        <div class="btn_box clearfix">
                            <img src="<?=$AD_DIR?>/images/btn_reply_01.gif" alt="댓글쓰기" class="img_left">
                            <img src="<?=$AD_DIR?>/images/btn_unlike14.gif" alt="싫어요 14" class="img_right">
                            <img src="<?=$AD_DIR?>/images/btn_like385.gif" alt="좋아요 385" class="img_right">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn_top">
                <a href="#">
                    <img src="<?=$AD_DIR?>/images/btn_top.gif" width="54" height="26" alt="탑으로">
                </a>
            </div>
        </div>
        <!-- 댓글 end -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/footer.gif" alt="푸터" class="img"></div>
    </div>

    <!-- IFRAME -->
    <!-- IFRAME end -->
    
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

        function submitContents01(f) {
            var flag = false;
            var href;


            $('.input01').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agreeInfo01"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 활용동의를 체크 해주시기 바랍니다.');

            return false;
        }

        function submitContents02(f) {
            var flag = false;
            var href;


            $('.input02').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agreeInfo02"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno_").val($("#mlh_mobileno1_").val()+$("#mlh_mobileno2_").val()+$("#mlh_mobileno3_").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');

            return false;
        }

        function submitContents03(f) {
            var flag = false;
            var href;


            $('.input03').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agreeInfo03"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno__").val($("#mlh_mobileno1__").val()+$("#mlh_mobileno2__").val()+$("#mlh_mobileno3__").val());
                        
                    }
                });

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');

            return false;
        }
        // 당일 날짜 넣기
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth() + 1;
        var todayDate = today.getDate();

        var commentDate = todayYear + '-' + todayMonth + '-' + todayDate;
        var rollingDate = '[' + todayMonth + '-' + todayDate + ']';

        $('.rolling_content .content_date').text(rollingDate);
        $('.comment_date').text(commentDate);

        // 실시간 상담현황 롤링콘텐츠 영역
        function rollingContent() {
            $('.rolling_content_list').animate({
                'margin-top': '-50px'
            }, 200, function () {
                $('.rolling_content_list .rolling_content:nth-child(-n+2)').appendTo('.rolling_content_list');
                $('.rolling_content_list').css('margin-top', '0');
            });
        }
        setInterval(rollingContent, 3000);


        <?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
    </script>
</body>

</html>