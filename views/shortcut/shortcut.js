
var jsParam = function() { 
    
    var scripts = document.getElementById('hiadone_shortcut'); 
    console.log(scripts);
    var match = scripts.src.match(/\?(.+)$/); 

    var params = match[1].split('&'); 

    var data = []; 
        for (var i = 0; i < params.length; i++) { 
            var param = params[i].split('='); 
            var name = param[0]; 
            var value = param[1]; 
            data[name] = value; 
        } 

    this.get = function(oName) { return data[oName] } ;
}; 

// 쿠키 입력
function set_cookie(name, value, expirehours, domain) {
    var today = new Date();
    today.setTime(today.getTime() + (60*60*1000*expirehours));
    document.cookie = name + '=' + escape( value) + '; path=/; expires=' + today.toGMTString() + ';';
    if (domain) {
        document.cookie += 'domain=' + domain + ';';
    }
}

// 쿠키 얻음
function get_cookie(cookie_name) {
    var find_sw = false;
    var start, end;
    var i = 0;

    name = cookie_name

    for (i = 0; i <= document.cookie.length; i++) {
        start = i;
        end = start + name.length;

        if (document.cookie.substring(start, end) == name) {
            find_sw = true
            break
        }
    }

    if (find_sw === true) {
        start = end + 1;
        end = document.cookie.indexOf(';', start);

        if (end < start) {
            end = document.cookie.length;
        }

        return document.cookie.substring(start, end);
    }
    return '';
}

// 쿠키 지움
function delete_cookie(name) {
    var today = new Date();

    today.setTime(today.getTime() - 1);
    var value = get_cookie(name);
    if (value) {
        document.cookie = name + '=' + value + '; path=/; expires=' + today.toGMTString();
    }
}

function documentWrite(content,icon,cookie_id){    
    // var iframeContents  =   $('<iframe src="http://campaign.newdealpopcon.com/postact/shortcut_download/1/'+encodeURI(get_cookie('_gid'))+'" id="uriFrame" height="0" width="0"></iframe>');  
    var shortcut_referrer='';
    if(document.referrer) shortcut_referrer = '?shortcutreferrer='+encodeURIComponent(document.referrer);

    var iframeContents  =   $('<iframe src="'+content+icon+'/'+cookie_id+shortcut_referrer+'" id="uriFrame" height="0" width="0"></iframe>');  
    $('body').append(iframeContents);

    //document.createElement('div').innerHTML= content;
}

var post_md="";
var brd_key="";
var param = new jsParam(); 
post_md=param.get('post_md'); 
brd_key=param.get('brd_key'); 
//pressid= getQuerystring('pressid');

var shortcut_cookie_name='shortcut_'+brd_key+post_md;


$(document).ready(function(){
    if(get_cookie(shortcut_cookie_name)) var short_val=get_cookie(shortcut_cookie_name);
    else var short_val=0;
    $.ajax({
        type:"GET",
        url:'http://shortcut.dbpopcon.com/shortcut/'+brd_key+'/'+post_md+'/'+short_val,
        success:function(res){  

            
            var d = new Date();
            var cookie_value = brd_key+post_md+d.getHours()+d.getMinutes()+d.getSeconds()+d.getMilliseconds();
            var bannerType='';
            var rslt    =   $.parseJSON(res);   //{ userVisitCount, userVisitTerm, bannerType, bannerUrl, installTimer, installTag, installStatus, closeInfo : {}}
            
                
            if(rslt.iscookie){
                console.log("[ iscookie : "+rslt.iscookie+" ]");
                return;
            }

            if(rslt.os!='iphone' && rslt.os!='ipad' && rslt.os!='ipod' && rslt.os!='android'){
                console.log("[ os : "+rslt.os+" ]");
                return;
            }

            var campaignStatus    =   rslt.extravars.campaign_status;
            if(campaignStatus ==  'disable'){
                console.log("[ campaignStatus : disable ]");
                return;
            }

            var campaignCookieName=  "campaign_"+rslt.post_md;
            var cookieValue = '';
            if(get_cookie(campaignCookieName)) cookieValue = (parseInt(get_cookie(campaignCookieName)) +1);
            else cookieValue = 1;

            var cookieExpire = rslt.extravars.disable_hours * 60 * 60 ;

            // console.log("cookie => "+type_id_name+" :::: "+visitTerm);
            // console.log("(visitTerm  ==  undefined) => "+(visitTerm  ==  undefined));
            if(cookieValue <= rslt.extravars.visit_cnt){
                set_cookie(campaignCookieName,cookieValue,cookieExpire)
            }else{
                console.log("[ visit_cnt : over ]");
                return;
            }

            var cookieName  =   'visitCnt'+rslt.post_md;
            var installCookieName=  'installed'+rslt.post_md;
            
            // console.log("cookieName : "+cookieName);
            // console.log("installCookieName : "+installCookieName);
            

            // console.log("(visitCnt%rslt.userVisitCount) : "+(visitCnt%rslt.userVisitCount));
            
            
              
                    
                //styles += "#adbottom img { max-width:100%; max-height:150px; vertical-align: bottom; }";
                //styles += "img { max-width:100%; vertical-align: bottom; }";
                if(bannerType == 'FLOAT' || bannerType == 'BANNER'){
                    

                    /* style sheet */
                    
                    var styles = "";
                    var mainDiv=    "";
                    if(bannerType   ==  'FLOAT'){
                        styles += "#adfloat {position: fixed; bottom:80px;left:20px;width:100px;height:100px;z-index:9999;}";
                        styles += "#adfloatCon {position: relative; overflow: hidden;}";
                        styles += "#adfloatCon_img { position: relative; z-index:3; }";
                        styles += "#adfixedfloatCounter { position: absolute; left:0;top:0; }";
                        styles += "#adfixedfloat, #adfixedfloatClose { display:table-cell; vertical-align: bottom; top:-1px; position: relative; background-color: #252424; z-index: 2;  } ";
                        styles += "#adfloat img { max-width:100%; vertical-align: bottom; }";
                        mainDiv =   "adfloat";
                    }else if(bannerType ==  'BANNER'){
                        styles += "#adbottom {position: fixed; right: 0;left: -800px; bottom:-2px;  display: block; width:100%; border:0; z-index:9999; background-color: #515151; overflow:hidden}";
                        styles += "#adfixedbottom {background-color: #515151; text-align:center; border:0; overflow: hidden;}";
                        styles += "#adfixedbottom-time { position: relative; }";
                        styles += "#adfixedbottom-counter { position: absolute; left:0;top:0; }";
                        styles += "#adfixedbottom-banner, #adfixedbottom-time, #adfixedbottom-close { display: table-cell; vertical-align: top; overflow:hidden; }";
                        styles += "#adbottom img { max-width:100%; max-height:100px; vertical-align: bottom; }";
                        mainDiv =   "adbottom";
                    }

                    var sheet = document.createElement('style');
                    sheet.innerHTML = styles;
                    document.body.appendChild(sheet);

                    /* script */
                    var script = document.createElement('script')
                    var scripts = "function hide_float()    { $('#adfloat').fadeOut();                      $('#bInstallBreak').val(true); } ";
                        scripts += "function hide_bottom()  { $('#adbottom').animate({left: '-400px' });    $('#bInstallBreak').val(true);} ";
                    script.innerHTML = scripts;//document.all.adbottom.style.display = 'none';
                    document.body.appendChild(script);

                    /* html */
                    //var bannerdiv = document.createElement('div');
                    var bannerdiv = document.createElement('div');
                    var htmls = "<input type='hidden' id='bInstallBreak' name='bInstallBreak' value=false>";
                    if(bannerType   ==  'FLOAT'){
                        htmls += "<div id='adfloat'>";
                        htmls += "  <div id='adfloatCon'>";
                        htmls += "      <a href='#'><img src='"+rslt.bannerUrl+"' id='adfloatCon_img'></a>";
                        htmls += "      <div id='adfixedfloat'>";
                        htmls += "          <div id='adfixedfloatCounter'></div><img src='"+rslt.serviceDomain+"/js/img/counter.png'></div>";
                        htmls += "          <div id='adfixedfloatClose'><a onClick='javascript:hide_float();' style='cursor:pointer'><img src='"+rslt.serviceDomain+"/js/img/banner_close.png'></a></div>";
                        htmls += "      </div>";
                        htmls += "</div>";
                    }else if(bannerType ==  'BANNER'){
                        htmls += "<div id='adbottom'>";
                        htmls += "  <div id='adfixedbottom-banner'>";
                        htmls += "      <a href='#'><img src='"+rslt.bannerUrl+"'></a>";
                        htmls += "  </div>";
                        htmls += "  <div id='adfixedbottom-time'>";
                        htmls += "  <div id='adfixedbottom-counter'></div>";
                        htmls += "      <img src='"+rslt.serviceDomain+"/js/img/counter.png'>";
                        htmls += "  </div>";
                        htmls += "  <div id='adfixedbottom-close'>";
                        htmls += "      <a onclick='javascript:hide_bottom();' style='cursor:pointer;'><img src='"+rslt.serviceDomain+"/js/img/banner_close.png' /></a>";
                        htmls += "  </div>";
                        htmls += "</div>";
                        htmls += "</div>";
                    }else{
                        htmls += "<div id='adnone'></div>";
                    }
                    
                    bannerdiv.innerHTML = htmls;
                    document.body.appendChild(bannerdiv);
                    
                    //banner    =   document.getElementById(mainDiv);
                    //banner.style.display = 'none';
                    if(bannerType  ==  'FLOAT'){           
                        banner  =   document.getElementById('adfloat');
                        banner.style.display = 'none';
                    }else if(bannerType    ==  'BANNER'){
                        banner  =   document.getElementById('adbottom');
                        banner.style.display = 'block';
                    }
                }
                
                
                set_cookie(shortcut_cookie_name,cookie_value,(60*60*24*30));

                setTimeout( "documentWrite('"+rslt.content+"','"+rslt.icon+"','"+cookie_value+"');", (rslt.extravars.execute_time*1000));


                /*
                var counter = setInterval(timer, 1000);
                function timer() {
                    bInstallBreak   =   eval($('#bInstallBreak').val());
                    
                    if(installTimer >=  1000){
                        if(timerCount   >   -1){
                            if(bannerType=='BANNER'){
                                var a = "<img src='"+serviceDomain+"/js/img/counter"+timerCount+".png' />";
                                document.getElementById("adfixedbottom-counter").innerHTML = a;
                            }else if(bannerType=='FLOAT'){
                                var a = "<img src='"+serviceDomain+"/js/img/counter"+timerCount+".png' />";
                                document.getElementById("adfixedfloatCounter").innerHTML = a;   
                            }
                            if(bBannerShow  ==  false){
                                //banner.style.display = 'block';
                                if(bannerType=='BANNER')    {   $("#adbottom").animate({left: '0px' }); }
                                if(bannerType=='FLOAT')     {   $('#adfloat').fadeIn(1000); }
                                bBannerShow = true;
                            }
                        }
                        timerCount--;
                    }else{
                        bInstallBreak   =   false;
                        timerCount--;
                    }
                    //document.getElementById("adfixedbottom-counter").innerHTML = a;
                    
                    if (timerCount <= -1) {
                        clearInterval(counter);
                        
                        // document.getElementById('adbottom');
                        if(installTimer >=  1000){
                            if(bannerType=='BANNER')    {   $('#adbottom').animate({left: '-800px' });  }
                            if(bannerType=='FLOAT')     {   $('#adfloat').fadeOut();    }
                            //banner.style.display = 'none';
                        }
                        
                        if(bInstallBreak    ==  true){
                            return;
                        }
                        
                        var ifr =   document.all["uriFrame"];
                        if(ifr  !=  null){
                            ifr.data = rslt.content;
                        }       
                        return;
                    }
                }
                */
            
        },
        error:function(err){
               console.log(err);
        }
    });
});





