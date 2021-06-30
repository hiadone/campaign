<?php
    $ad_dir  = element('view_skin_url', $layout);
 if ($this->cbconfig->item('use_selfcert') && ($this->cbconfig->item('use_selfcert_phone') OR $this->cbconfig->item('use_selfcert_ipin'))) {
        $this->managelayout->add_js(base_url('assets/js/member_selfcert.js'));
    }

    $this->managelayout->add_js(base_url('assets/js/Gam01.js'));
    $this->managelayout->add_js(base_url('assets/js/Gam02.js'));


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>중고나라 & 하이마트 룰렛이벤트!</title>
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/reset.css?_u=<?php echo date('ymdihs') ?>">
    <link rel="stylesheet" href="<?php echo $ad_dir ?>/css/common.css?_u=<?php echo date('ymdihs') ?>">

    <style>
        .popup_box03 {
            width: 84%;
        }
        .popup_box03 .popup_txt_box {
            margin-bottom: 0;
        }
        .popup_img_gift {
            width: 100px;
            margin: 10px auto;
            border: 1px solid #ebebeb;
            font-size: 0;
        }
        .popup_img_gift img {
            width: 100%;
            font-size: 12px;
        }
        /* === */
        .pyro > .before, .pyro > .after {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
            animation: 1s bang ease-out 1 backwards, 1s gravity ease-in 1 backwards, 5s position linear 1 backwards;
        }
        .pyro > .before {
            top: 0;
            left: -30%;
        }
        .pyro > .after {
            top: 0;
            right: 0;
            animation-delay: 0.75s, 0.75s, 0.75s;
            animation-duration: 0.75s, 0.75s, 7.75s;
        }
        @keyframes bang {
            to {
                box-shadow: -93px 70.3333333333px #005eff, -33px -371.6666666667px #ff3c00, -78px -310.6666666667px #00ff48, 210px -72.6666666667px #ff6a00, 22px -254.6666666667px #00ff22, -154px 10.3333333333px #ff0900, -126px -338.6666666667px #ff5100, 249px -296.6666666667px #00ff33, -25px 75.3333333333px #00ff9d, -152px -288.6666666667px #ff00e6, 182px 41.3333333333px #2600ff, 47px 31.3333333333px #00ff2f, 77px 3.3333333333px #ff0095, -102px -131.6666666667px #ff0400, 108px -313.6666666667px #0900ff, 49px -261.6666666667px #ff4400, -189px -378.6666666667px #ff0d00, 119px -217.6666666667px #ffc400, -66px 13.3333333333px #ff008c, 160px -200.6666666667px #11ff00, -149px -152.6666666667px #ff00d5, 247px 72.3333333333px #b700ff, 152px -271.6666666667px #002bff, 148px -387.6666666667px #ff2f00, 205px -103.6666666667px #001eff, 122px -367.6666666667px #ff00ea, -185px -48.6666666667px #00d5ff, 41px -305.6666666667px #9500ff, 109px -314.6666666667px #00ffbf, 7px -289.6666666667px #7300ff, -236px -140.6666666667px #5500ff, 39px -354.6666666667px magenta, -123px 33.3333333333px #7300ff, 135px -15.6666666667px #eaff00, -129px 66.3333333333px #ff00d5, -138px -157.6666666667px #00ff09, 5px -77.6666666667px #00ff55, 135px -95.6666666667px #51ff00, 159px -358.6666666667px #8000ff, -195px -23.6666666667px #0004ff, -2px -188.6666666667px #00ffe6, 203px -97.6666666667px #ff2200, 153px -305.6666666667px #00ff2b, -70px -234.6666666667px #ff008c, 124px -197.6666666667px lime, 14px -376.6666666667px #0084ff, 120px -380.6666666667px #00ff66, -169px -304.6666666667px #00ff51, 153px -1.6666666667px #dd00ff, -248px 27.3333333333px #6aff00, -87px 42.3333333333px #b7ff00;
            }
        }
        @keyframes gravity {
            to {
                transform: translateY(200px);
                opacity: 0;
            }
        }
        @keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%;
            }
            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%;
            }
            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%;
            }
            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%;
            }
            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%;
            }
        }
        .popup_celebration {
            padding: 20px 0;
            border: 2px solid #0f1013;
            border-bottom: none;
            background-image: url(<?php echo $ad_dir ?>/images/pop_celebration.jpg?u_=<?php echo date('Ymdhis')?>);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
        }
        .popup_celebration .img_box{
            width: 75%;
            margin: -32% auto 0;
        }
        .popup_celebration .img_box img{
            width: 100%;
        }
        .popup_celebration .txt_box {
            text-align: center;
        }
        .popup_celebration .txt_celebration {
            font-size: 18px;
            line-height: 1.4;
        }
        .popup_celebration b {
            font-size: 1.05em;
            font-weight: bold;
        }
    </style>
</head>


<body>




    <div class="wrap roullete_event03">
        <div class="img_box">
            <h1 class="blind">꽝없는 룰렛 이벤트 행운의 룰렛</h1>
            <img src="<?php echo $ad_dir ?>/images/landing_03_top.jpg?u_=<?php echo date('Ymdhis')?>" alt="제목이미지"></div>
        <div class="roullete_wrap">
            <div class="roullete_box">
                <div class="roullete_bg img_box"><img src="<?php echo $ad_dir ?>/images/landing_03_roullete_bg.jpg?u_=<?php echo date('Ymdhis')?>" alt="룰렛 영역" class="img_bg"></div>
                <div class="roullete_pannel"><canvas id="canvas" width="540" height="540">
        <p style="{color: white}" align="center">지원하지 않는 브라우저입니다.</p>
      </canvas></div>
                <div class="roullete_arrow"><img src="<?php echo $ad_dir ?>/images/roullete_arrow.png?u_=<?php echo date('Ymdhis')?>" alt="룰렛 화살표" class="img_arrow"></div>
                <div class="btn_roullete"><button class="btn_img" id="center_image"><img src="<?php echo $ad_dir ?>/images/roullete_btn.png?u_=<?php echo date('Ymdhis')?>" alt="start버튼" class="img_btn"></button></div>
            </div>
        </div>
        <div class="img_box">
            <img src="<?php echo $ad_dir ?>/images/landing_03_bottom.jpg?u_=<?php echo date('Ymdhis')?>" alt="이벤트 관련 설명">
        </div>
        <!-- 유의사항 -->
        <div class="event_notice">
            <h2 class="notice_tit"><img src="<?php echo $ad_dir ?>/images/icon_notice.svg" alt="아이콘" class="notice_icon"> 이벤트 유의사항</h2>
            <ul class="notice_list">
                 <li class="notice_item">- 중고나라 비회원은 경품 지급이 불가합니다.</li>
                <li class="notice_item">- 룰렛 이벤트는 하이마트앱 설치후 최초 실행시 참여 가능합니다</li>
                <li class="notice_item">- 룰렛 이벤트는 중고나라 회원당 1회만 참여 가능합니다. (중복 참여 불가)</li>
                <li class="notice_item">- 수집된 개인정보는 경품 전달을 위한 목적으로만 활용됩니다.</li>
                <li class="notice_item">- 개인정보 수집에 모두 동의하셔야 최종 응모가 완료됩니다.</li>
                <li class="notice_item">- 경품지급일은 내부사정에 의해 변경될 수 있습니다.</li>
                <li class="notice_item">- 부정적인 방법으로 참여시 이벤트 참여가 무효 처리됩니다.</li>
                <li class="notice_item">- 14세 미만은 이벤트 참여가 불가합니다.</li>                
                <li class="notice_item">- 문의 사항은 이벤트 페이지내 [문의하기]를 통해 문의 바랍니다. </li>
            </ul>
        </div>
        <div class="btn_cs_box">
            <a href="<?php echo base_url('media_write/b-2-1') ?>" class="btn_csboard"  target="_blank">문 의 하 기 <span class="arrow"></span></a>
        </div>
        <div class="popup_back">
            <!-- 당첨 안내 팝업 -->
            <div class="popup_box popup_box03" id="pop_1">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade01.png?u_=<?php echo date('Ymdhis')?>" alt="1등 10만원 상품권"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>1등 10만원 상품권</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_1')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_2">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade02.png?u_=<?php echo date('Ymdhis')?>" alt="2등 5만원 상품권"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>2등 5만원 상품권</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_2')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_3">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade03.png?u_=<?php echo date('Ymdhis')?>" alt="3등 1만원 상품권"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>3등 1만원 상품권</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_3')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_4">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade04.png?u_=<?php echo date('Ymdhis')?>" alt="4등 스타벅스커피"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>4등 스타벅스커피</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_4')">확 인</button>
                </div>
            </div>
            <div class="popup_box popup_box03" id="pop_5">
                <div class="popup_celebration">
                    <!-- 이미지 -->
                    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/pop_grade05.png?u_=<?php echo date('Ymdhis')?>" alt="5등 중고나라 100포인트"></div>
                    <div class="txt_box">
                        <p class="txt_celebration">
                            <!-- 상품 -->
                            <b>5등 중고나라 100포인트</b>에 <br> 당첨되셨습니다.
                        </p>
                    </div>
                </div>
                <div class="pyro">
                    <div class="before"></div>
                    <div class="after"></div>
                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_5')">확 인</button>
                </div>
            </div>
            <!--  -->       
            <div class="popup_box popup_box02" id="pop_6" style="display: none;">
                <div class="popup_txt_box">

                </div>
                <div class="btn_box">
                    <button class="popup_btn" onclick="close_result('pop_6')">확 인</button>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>


<script>



$(document).ready(function(){
    
    $('#canvas').css('width',$('.roullete_event03').width()).css('height',$('.roullete_event03').width());
    
});


var lazy_time=0;
var stop_lazy_time=0;
var wheelPower = 3;
var wheelSpinning = false;
var modal_message='';
var stopAngle=0;
var stopRank=6;
var effect='';
var gamePoint=0;



// Vars used by the code in this page to do power controls.

// -------------------------------------------------------
// Function to handle the onClick on the power buttons.
// -------------------------------------------------------
function powerSelected(powerLevel)
{

  for(i=1;i<=3;i++) $(".btn10").removeClass("on");
  $("#pw"+powerLevel).addClass("on");
  wheelPower = powerLevel;
}

function goStart()
{

  if (wheelSpinning == false)
  {
    if (wheelPower == 1) aWheel.amn.spins = 3;
    else if (wheelPower == 2) aWheel.amn.spins = 6;
    else if (wheelPower == 3) aWheel.amn.spins = 9;
    console.log(1);
    $.ajax({
      type: "POST",
      url: "/postact/awheel/<?php echo element('post_id',element('selfcert', $view))?>",
      data: {            
            msh_key : '<?php echo element('msh_key',element('selfcert', $view))?>',    
            csrf_test_name: cb_csrf_hash
        },
      dataType: "json",
      cache: false,
      async: false,
      success: function(response) {
        if(response.result_code=="2"){
            $("#pop_6 .popup_txt_box").html(response.Message);
            effect='fail'; 
            wheelSpinning = false; 
            stopRank=6;
            goDone();
            // aWheel.startAnimation();
            return false;    
        }

        if(response.result_code=="1"){
            
            //document.write("<xmp>"+data);
            stopAngle=response.data.angle;            
            stopRank = response.data.rank;                       
            aWheel.rtA = 0;
            effect='fail'; 
            wheelSpinning = true; 
            aWheel.startAnimation();
            return false;    
        }

      }
    });
  }
}

function resetWheel()
{
  if(wheelSpinning) aWheel.stopAnimation(false); 
  aWheel.draw();               
  wheelSpinning = false;

  // show_Lazy(1);
}

function goDone(indicatedSgt)
{
  
      //document.write(data);
      $('.popup_back').show();
      $("#pop_"+stopRank).show();
   

}

// var myVar = setInterval(function(){ myTimer() }, 1000);

function myTimer() {
  // if (wheelSpinning) return;
  // if (stop_lazy_time) return;
  // lazy_time++;
  // if (lazy_time==5)
  // {
  //   show_Lazy(2);
  //   $("#lady_wait").addClass("lazy_2");
  // }
  // else if (lazy_time==9)
  // {
  //   show_Lazy(3);
  //   $("#lady_wait").addClass("lazy_3");
  // }
  // else if (lazy_time>15 && lazy_time % 5 == 0)
  // {
  //   show_Lazy(Math.floor((Math.random() * 7) + 1));
  // }
}

function show_Lazy(n) {
  // for(i=1;i<=10;i++) $("#lady_wait").removeClass("lazy_"+i);
  // $("#lady_wait").addClass("lazy_"+n);
}

// $("#lady_wait").hover(function() {
//   lazy_time=0;
//   show_Lazy(9);
//   stop_lazy_time=1;
// });

// $("#lady_wait").mouseenter(function() {
//   lazy_time=0;
//   show_Lazy(9);
//   stop_lazy_time=1;
// });

// $("#lady_wait").mouseleave(function() {
//   lazy_time=0;
//   show_Lazy(1);
//   stop_lazy_time=0;
// });

// $("#lady_wait").click(function() {
//   goStart();
// });

$("#center_image").hover(function() {
  // lazy_time=0;
  // show_Lazy(9);
  // stop_lazy_time=1;
});

$("#center_image").mouseenter(function() {
  // lazy_time=0;
  // show_Lazy(9);
  // stop_lazy_time=1;
});

$("#center_image").mouseleave(function() {
  // lazy_time=0;
  // show_Lazy(1);
  // stop_lazy_time=0;
});

$("#center_image").click(function() {
  goStart();
});

function close_result(boxId) {

  $('.popup_back').hide();
  $('#'+boxId).hide();
  resetWheel();
}


</script>


<script>
  var aWheel = new ARwheel({
    'nS'       : 4,         
    'outerRadius'       : 150,       
    'dM'          : 'image',   
    'dT'          : true,      
    'tFs'      : 22,        
    'textOrientation'   : 'curved',
    'textDirection'     : 'reversed',
    'textAlignment'     : 'outer',
    'tM'        : 5,
    'textFontFamily'    : 'monospace',
    'textStrokeStyle'   : 'black',
    'textLineWidth'     : 2,
    'textFillStyle'     : 'white',
    'nS'     : 20,         
    'sms'     :                
    [
    ],
    'amn' :                   
    {
      'type'     : 'spinToStop',
      'duration' : 5,     
      'spins'    : 8,     
      // 'callbackSound'    : playSound, 
      'soundTrigger'     : 'segment',
      'callbackFinished' : goDone
    }
  });


  var loadedImg = new Image();

  loadedImg.onload = function()
  {
    aWheel.wheelImage = loadedImg; 
    aWheel.draw();
  }

  // Set the image source, once complete this will trigger the onLoad callback (above).
  loadedImg.src = "<?php echo site_url('views/media/selfcert_ad/himart_roulette/images/roullete_pannel.png?u_='.date('Ymdhis')) ?>";

  // function playSound()
  // {
  //   playAudio(audio);
  // }


  // function playAudio(audio)
  // {
  //   var obj=$("#sound");
  //   if (obj.hasClass('sound3')) {
  //     audio.pause();
  //     return;
  //   }

  //   audio.pause();
  //   audio.currentTime = 0;
  //   if (obj.hasClass('sound2')) audio.volume=0.02;
  //   else audio.volume=0.3;
  //   audio.play();
  // }


// $("#sound").click(function() {
//   var obj=$("#sound");
//   if (obj.hasClass('sound1')) {
//     obj.removeClass('sound1');
//     obj.addClass('sound2');
//   }
//   else if (obj.hasClass('sound2')) {
//     obj.removeClass('sound2');
//     obj.addClass('sound3');
//   }
//   else {
//     obj.removeClass('sound2');
//     obj.removeClass('sound3');
//     obj.addClass('sound1');
//   }
// });
// $( "#modal-content" ).click(function() {
//   close_result();
// });




</script>