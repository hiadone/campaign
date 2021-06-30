function ARwheel(a,b){defaultOptions={cI:"canvas",centerX:null,centerY:null,outerRadius:null,innerRadius:0,nS:1,dM:"code",rtA:0,textFontFamily:"Arial",tFs:20,textFontWeight:"bold",textOrientation:"horizontal",textAlignment:"center",textDirection:"normal",tM:null,textFillStyle:"black",textStrokeStyle:null,textLineWidth:1,fS:"silver",sS:"black",lW:1,clearTheCanvas:!0,imageOverlay:!1,dT:!0,pointerAngle:0,wheelImage:null,imageDirection:"N"};for(var c in defaultOptions)this[c]=null!=a&&"undefined"!==typeof a[c]?
a[c]:defaultOptions[c];if(null!=a)for(c in a)"undefined"===typeof this[c]&&(this[c]=a[c]);this.cI?(this.canvas=document.getElementById(this.cI))?(null==this.centerX&&(this.centerX=this.canvas.width/2),null==this.centerY&&(this.centerY=this.canvas.height/2),null==this.outerRadius&&(this.outerRadius=this.canvas.width<this.canvas.height?this.canvas.width/2-this.lW:this.canvas.height/2-this.lW),this.ctx=this.canvas.getContext("2d")):this.ctx=this.canvas=null:this.ctx=this.cavnas=null;this.sms=Array(null);
for(x=1;x<=this.nS;x++)this.sms[x]=null!=a&&a.sms&&"undefined"!==typeof a.sms[x-1]?new Sgt(a.sms[x-1]):new Sgt;this.udS();null===this.tM&&(this.tM=this.tFs/1.7);this.amn=null!=a&&a.amn&&"undefined"!==typeof a.amn?new Animation(a.amn):new Animation;null!=a&&a.pins&&"undefined"!==typeof a.pins&&(this.pins=new Pin(a.pins));"image"==this.dM||"segmentImage"==this.dM?("undefined"===typeof a.fS&&(this.fS=null),"undefined"===typeof a.sS&&(this.sS="red"),"undefined"===typeof a.dT&&(this.dT=!1),"undefined"===
typeof a.lW&&(this.lW=1),"undefined"===typeof b&&(b=!1)):"undefined"===typeof b&&(b=!0);this.pG=null!=a&&a.pG&&"undefined"!==typeof a.pG?new PG(a.pG):new PG;if(1==b)this.draw(this.clearTheCanvas);else if("segmentImage"==this.dM)for(winwheelToDrawDuringAnimation=this,awheelAlreadyDrawn=!1,y=1;y<=this.nS;y++)null!==this.sms[y].image&&(this.sms[y].imgData=new Image,this.sms[y].imgData.onload=winwheelLoadedImage,this.sms[y].imgData.src=this.sms[y].image)}
ARwheel.prototype.udS=function(){if(this.sms){var a=0,b=0;for(x=1;x<=this.nS;x++)null!==this.sms[x].size&&(a+=this.sms[x].size,b++);var c=360-a;a=0;0<c&&(a=c/(this.nS-b));b=0;for(x=1;x<=this.nS;x++)this.sms[x].sAl=b,b=this.sms[x].size?b+this.sms[x].size:b+a,this.sms[x].eAl=b}};ARwheel.prototype.clC=function(){this.ctx&&this.ctx.clearRect(0,0,this.canvas.width,this.canvas.height)};
ARwheel.prototype.draw=function(a){this.ctx&&("undefined"!==typeof a?1==a&&this.clC():this.clC(),"image"==this.dM?(this.dWImage(),1==this.dT&&this.dST(),1==this.imageOverlay&&this.drawSgts()):"segmentImage"==this.dM?(this.drawSgtImages(),1==this.dT&&this.dST(),1==this.imageOverlay&&this.drawSgts()):(this.drawSgts(),1==this.dT&&this.dST()),"undefined"!==typeof this.pins&&1==this.pins.visible&&this.drawPins(),1==this.pG.display&&this.drawPG())};
ARwheel.prototype.drawPins=function(){if(this.pins&&this.pins.number){var a=360/this.pins.number;for(i=1;i<=this.pins.number;i++)this.ctx.save(),this.ctx.sS=this.pins.sS,this.ctx.lW=this.pins.lW,this.ctx.fS=this.pins.fS,this.ctx.translate(this.centerX,this.centerY),this.ctx.rotate(this.degToRad(i*a+this.rtA)),this.ctx.translate(-this.centerX,-this.centerY),this.ctx.beginPath(),this.ctx.arc(this.centerX,this.centerY-this.outerRadius+this.pins.outerRadius+this.pins.margin,this.pins.outerRadius,0,2*
Math.PI),this.pins.fS&&this.ctx.fill(),this.pins.sS&&this.ctx.stroke(),this.ctx.restore()}};ARwheel.prototype.drawPG=function(){this.ctx&&(this.ctx.save(),this.ctx.translate(this.centerX,this.centerY),this.ctx.rotate(this.degToRad(this.pointerAngle)),this.ctx.translate(-this.centerX,-this.centerY),this.ctx.sS=this.pG.sS,this.ctx.lW=this.pG.lW,this.ctx.beginPath(),this.ctx.moveTo(this.centerX,this.centerY),this.ctx.lineTo(this.centerX,-(this.outerRadius/4)),this.ctx.stroke(),this.ctx.restore())};
ARwheel.prototype.dWImage=function(){if(null!=this.wheelImage){var a=this.centerX-this.wheelImage.height/2,b=this.centerY-this.wheelImage.width/2;this.ctx.save();this.ctx.translate(this.centerX,this.centerY);this.ctx.rotate(this.degToRad(this.rtA));this.ctx.translate(-this.centerX,-this.centerY);this.ctx.drawImage(this.wheelImage,a,b);this.ctx.restore()}};
ARwheel.prototype.drawSgtImages=function(){if(this.ctx&&this.sms)for(x=1;x<=this.nS;x++)if(seg=this.sms[x],seg.imgData.height){var a=null!==seg.imageDirection?seg.imageDirection:this.imageDirection;if("S"==a){a=this.centerX-seg.imgData.width/2;var b=this.centerY;var c=seg.sAl+180+(seg.eAl-seg.sAl)/2}else"E"==a?(a=this.centerX,b=this.centerY-seg.imgData.height/2,c=seg.sAl+270+(seg.eAl-seg.sAl)/2):"W"==a?(a=this.centerX-seg.imgData.width,b=this.centerY-seg.imgData.height/2,c=seg.sAl+90+(seg.eAl-seg.sAl)/
2):(a=this.centerX-seg.imgData.width/2,b=this.centerY-seg.imgData.height,c=seg.sAl+(seg.eAl-seg.sAl)/2);this.ctx.save();this.ctx.translate(this.centerX,this.centerY);this.ctx.rotate(this.degToRad(this.rtA+c));this.ctx.translate(-this.centerX,-this.centerY);this.ctx.drawImage(seg.imgData,a,b);this.ctx.restore()}else console.log("Sgt "+x+" imgData is not loaded")};
ARwheel.prototype.drawSgts=function(){if(this.ctx&&this.sms)for(x=1;x<=this.nS;x++){seg=this.sms[x];var a=null!==seg.fS?seg.fS:this.fS;this.ctx.fS=a;this.ctx.lW=null!==seg.lW?seg.lW:this.lW;var b=null!==seg.sS?seg.sS:this.sS;if((this.ctx.sS=b)||a)this.ctx.beginPath(),this.innerRadius||this.ctx.moveTo(this.centerX,this.centerY),this.ctx.arc(this.centerX,this.centerY,this.outerRadius,this.degToRad(seg.sAl+this.rtA-90),this.degToRad(seg.eAl+this.rtA-90),!1),this.innerRadius?this.ctx.arc(this.centerX,
this.centerY,this.innerRadius,this.degToRad(seg.eAl+this.rtA-90),this.degToRad(seg.sAl+this.rtA-90),!0):this.ctx.lineTo(this.centerX,this.centerY),a&&this.ctx.fill(),b&&this.ctx.stroke()}};
ARwheel.prototype.dST=function(){if(this.ctx)for(x=1;x<=this.nS;x++){this.ctx.save();seg=this.sms[x];if(seg.text){var a=null!==seg.textFontFamily?seg.textFontFamily:this.textFontFamily;var b=null!==seg.tFs?seg.tFs:this.tFs;var c=null!==seg.textFontWeight?seg.textFontWeight:this.textFontWeight;var k=null!==seg.textOrientation?seg.textOrientation:this.textOrientation;var e=null!==seg.textAlignment?seg.textAlignment:this.textAlignment;var q=null!==seg.textDirection?seg.textDirection:this.textDirection;
var f=null!==seg.tM?seg.tM:this.tM;var l=null!==seg.textFillStyle?seg.textFillStyle:this.textFillStyle;var m=null!==seg.textStrokeStyle?seg.textStrokeStyle:this.textStrokeStyle;var d=null!==seg.textLineWidth?seg.textLineWidth:this.textLineWidth;var g="";null!=c&&(g+=c+" ");null!=b&&(g+=b+"px ");null!=a&&(g+=a);this.ctx.font=g;this.ctx.fS=l;this.ctx.sS=m;this.ctx.lW=d;a=seg.text.split("\n");c=-(a.length/2*b)+b/2;"curved"!=k||"inner"!=e&&"outer"!=e||(c=0);for(i=0;i<a.length;i++){if("reversed"==q)if("horizontal"==
k)this.ctx.textAlign="inner"==e?"right":"outer"==e?"left":"center",this.ctx.textBaseline="middle",d=this.degToRad(seg.eAl-(seg.eAl-seg.sAl)/2+this.rtA-90-180),this.ctx.save(),this.ctx.translate(this.centerX,this.centerY),this.ctx.rotate(d),this.ctx.translate(-this.centerX,-this.centerY),"inner"==e?(l&&this.ctx.fiT(a[i],this.centerX-this.innerRadius-f,this.centerY+c),m&&this.ctx.stT(a[i],this.centerX-this.innerRadius-f,this.centerY+c)):"outer"==e?(l&&this.ctx.fiT(a[i],this.centerX-this.outerRadius+
f,this.centerY+c),m&&this.ctx.stT(a[i],this.centerX-this.outerRadius+f,this.centerY+c)):(l&&this.ctx.fiT(a[i],this.centerX-this.innerRadius-(this.outerRadius-this.innerRadius)/2-f,this.centerY+c),m&&this.ctx.stT(a[i],this.centerX-this.innerRadius-(this.outerRadius-this.innerRadius)/2-f,this.centerY+c)),this.ctx.restore();else if("vertical"==k){this.ctx.textAlign="center";this.ctx.textBaseline="inner"==e?"top":"outer"==e?"bottom":"middle";d=seg.eAl-(seg.eAl-seg.sAl)/2-180;d+=this.rtA;this.ctx.save();
this.ctx.translate(this.centerX,this.centerY);this.ctx.rotate(this.degToRad(d));this.ctx.translate(-this.centerX,-this.centerY);if("outer"==e)var h=this.centerY+this.outerRadius-f;else"inner"==e&&(h=this.centerY+this.innerRadius+f);g=b-b/9;if("outer"==e)for(d=a[i].length-1;0<=d;d--)character=a[i].charAt(d),l&&this.ctx.fiT(character,this.centerX+c,h),m&&this.ctx.stT(character,this.centerX+c,h),h-=g;else if("inner"==e)for(d=0;d<a[i].length;d++)character=a[i].charAt(d),l&&this.ctx.fiT(character,this.centerX+
c,h),m&&this.ctx.stT(character,this.centerX+c,h),h+=g;else if("center"==e)for(h=0,1<a[i].length&&(h=g*(a[i].length-1)/2),h=this.centerY+this.innerRadius+(this.outerRadius-this.innerRadius)/2+h+f,d=a[i].length-1;0<=d;d--)character=a[i].charAt(d),l&&this.ctx.fiT(character,this.centerX+c,h),m&&this.ctx.stT(character,this.centerX+c,h),h-=g;this.ctx.restore()}else{if("curved"==k){g=0;"inner"==e?(g=this.innerRadius+f,this.ctx.textBaseline="top"):"outer"==e?(g=this.outerRadius-f,this.ctx.textBaseline="bottom",
g-=b*(a.length-1)):"center"==e&&(g=this.innerRadius+f+(this.outerRadius-this.innerRadius)/2,this.ctx.textBaseline="middle");var p=0;if(1<a[i].length){this.ctx.textAlign="left";p=b/10*4;rdP=100/g;p*=rdP;totalArc=p*a[i].length;var n=seg.sAl+((seg.eAl-seg.sAl)/2-totalArc/2)}else n=seg.sAl+(seg.eAl-seg.sAl)/2,this.ctx.textAlign="center";n+=this.rtA;n-=180;for(d=a[i].length;0<=d;d--)this.ctx.save(),character=a[i].charAt(d),this.ctx.translate(this.centerX,this.centerY),this.ctx.rotate(this.degToRad(n)),
this.ctx.translate(-this.centerX,-this.centerY),m&&this.ctx.stT(character,this.centerX,this.centerY+g+c),l&&this.ctx.fiT(character,this.centerX,this.centerY+g+c),n+=p,this.ctx.restore()}}else if("horizontal"==k)this.ctx.textAlign="inner"==e?"left":"outer"==e?"right":"center",this.ctx.textBaseline="middle",d=this.degToRad(seg.eAl-(seg.eAl-seg.sAl)/2+this.rtA-90),this.ctx.save(),this.ctx.translate(this.centerX,this.centerY),this.ctx.rotate(d),this.ctx.translate(-this.centerX,-this.centerY),"inner"==
e?(l&&this.ctx.fiT(a[i],this.centerX+this.innerRadius+f,this.centerY+c),m&&this.ctx.stT(a[i],this.centerX+this.innerRadius+f,this.centerY+c)):"outer"==e?(l&&this.ctx.fiT(a[i],this.centerX+this.outerRadius-f,this.centerY+c),m&&this.ctx.stT(a[i],this.centerX+this.outerRadius-f,this.centerY+c)):(l&&this.ctx.fiT(a[i],this.centerX+this.innerRadius+(this.outerRadius-this.innerRadius)/2+f,this.centerY+c),m&&this.ctx.stT(a[i],this.centerX+this.innerRadius+(this.outerRadius-this.innerRadius)/2+f,this.centerY+
c)),this.ctx.restore();else if("vertical"==k){this.ctx.textAlign="center";this.ctx.textBaseline="inner"==e?"bottom":"outer"==e?"top":"middle";d=seg.eAl-(seg.eAl-seg.sAl)/2;d+=this.rtA;this.ctx.save();this.ctx.translate(this.centerX,this.centerY);this.ctx.rotate(this.degToRad(d));this.ctx.translate(-this.centerX,-this.centerY);"outer"==e?h=this.centerY-this.outerRadius+f:"inner"==e&&(h=this.centerY-this.innerRadius-f);g=b-b/9;if("outer"==e)for(d=0;d<a[i].length;d++)character=a[i].charAt(d),l&&this.ctx.fiT(character,
this.centerX+c,h),m&&this.ctx.stT(character,this.centerX+c,h),h+=g;else if("inner"==e)for(d=a[i].length-1;0<=d;d--)character=a[i].charAt(d),l&&this.ctx.fiT(character,this.centerX+c,h),m&&this.ctx.stT(character,this.centerX+c,h),h-=g;else if("center"==e)for(h=0,1<a[i].length&&(h=g*(a[i].length-1)/2),h=this.centerY-this.innerRadius-(this.outerRadius-this.innerRadius)/2-h-f,d=0;d<a[i].length;d++)character=a[i].charAt(d),l&&this.ctx.fiT(character,this.centerX+c,h),m&&this.ctx.stT(character,this.centerX+
c,h),h+=g;this.ctx.restore()}else if("curved"==k)for(g=0,"inner"==e?(g=this.innerRadius+f,this.ctx.textBaseline="bottom",g+=b*(a.length-1)):"outer"==e?(g=this.outerRadius-f,this.ctx.textBaseline="top"):"center"==e&&(g=this.innerRadius+f+(this.outerRadius-this.innerRadius)/2,this.ctx.textBaseline="middle"),p=0,1<a[i].length?(this.ctx.textAlign="left",p=b/10*4,rdP=100/g,p*=rdP,totalArc=p*a[i].length,n=seg.sAl+((seg.eAl-seg.sAl)/2-totalArc/2)):(n=seg.sAl+(seg.eAl-seg.sAl)/2,this.ctx.textAlign="center"),
n+=this.rtA,d=0;d<a[i].length;d++)this.ctx.save(),character=a[i].charAt(d),this.ctx.translate(this.centerX,this.centerY),this.ctx.rotate(this.degToRad(n)),this.ctx.translate(-this.centerX,-this.centerY),m&&this.ctx.stT(character,this.centerX,this.centerY-g+c),l&&this.ctx.fiT(character,this.centerX,this.centerY-g+c),n+=p,this.ctx.restore();c+=b}}this.ctx.restore()}};ARwheel.prototype.degToRad=function(a){return.017453292519943295*a};
ARwheel.prototype.setCenter=function(a,b){this.centerX=a;this.centerY=b};ARwheel.prototype.addSgt=function(a,b){newSgt=new Sgt(a);this.nS++;var c;if("undefined"!==typeof b){for(c=this.nS;c>b;c--)this.sms[c]=this.sms[c-1];this.sms[b]=newSgt;c=b}else this.sms[this.nS]=newSgt,c=this.nS;this.udS();return this.sms[c]};ARwheel.prototype.setCanvasId=function(a){if(a){if(this.cI=a,this.canvas=document.getElementById(this.cI))this.ctx=this.canvas.getContext("2d")}else this.canvas=this.ctx=this.cI=null};
ARwheel.prototype.deleteSgt=function(a){if(1<this.nS){if("undefined"!==typeof a)for(;a<this.nS;a++)this.sms[a]=this.sms[a+1];this.sms[this.nS]=void 0;this.nS--;this.udS()}};ARwheel.prototype.windowToCanvas=function(a,b){var c=this.canvas.getBoundingClientRect();return{x:Math.floor(a-this.canvas.width/c.width*c.left),y:Math.floor(b-this.canvas.height/c.height*c.top)}};ARwheel.prototype.getSgtAt=function(a,b){var c=null,k=this.getSgtNumberAt(a,b);null!==k&&(c=this.sms[k]);return c};
ARwheel.prototype.getSgtNumberAt=function(a,b){var c=this.windowToCanvas(a,b);if(c.x>this.centerX){var k=c.x-this.centerX;var e="R"}else k=this.centerX-c.x,e="L";if(c.y>this.centerY){var q=c.y-this.centerY;var f="B"}else q=this.centerY-c.y,f="T";var l=180*Math.atan(q/k)/Math.PI;c=0;k=Math.sqrt(q*q+k*k);"T"==f&&"R"==e?c=Math.round(90-l):"B"==f&&"R"==e?c=Math.round(l+90):"B"==f&&"L"==e?c=Math.round(90-l+180):"T"==f&&"L"==e&&(c=Math.round(l+270));0!=this.rtA&&(e=this.getRotationPosition(),c-=e,0>c&&
(c=360-Math.abs(c)));e=null;for(a=1;a<=this.nS;a++)if(c>=this.sms[a].sAl&&c<=this.sms[a].eAl&&k>=this.innerRadius&&k<=this.outerRadius){e=a;break}return e};ARwheel.prototype.getIndicatedSgt=function(){var a=this.getIndicatedSgtNumber();return this.sms[a]};ARwheel.prototype.getIndicatedSgtNumber=function(){var a=0,b=this.getRotationPosition();b=Math.floor(this.pointerAngle-b);0>b&&(b=360-Math.abs(b));for(x=1;x<this.sms.length;x++)if(b>=this.sms[x].sAl&&b<=this.sms[x].eAl){a=x;break}return a};
ARwheel.prototype.getCurrentPinNumber=function(){var a=0;if(this.pins){var b=this.getRotationPosition();b=Math.floor(this.pointerAngle-b);0>b&&(b=360-Math.abs(b));var c=360/this.pins.number,k=0;for(x=0;x<this.pins.number;x++){if(b>=k&&b<=k+c){a=x;break}k+=c}"clockwise"==this.amn.direction&&(a++,a>this.pins.number&&(a=0))}return a};ARwheel.prototype.getRotationPosition=function(){var a=this.rtA;if(0<=a){if(360<a){var b=Math.floor(a/360);a-=360*b}}else-360>a&&(b=Math.ceil(a/360),a-=360*b),a=360+a;return a};
ARwheel.prototype.startAnimation=function(){if(this.amn){this.computeAnimation();winwheelToDrawDuringAnimation=this;var a=Array(null);a[this.amn.propertyName]=this.amn.propertyValue;a.yoyo=this.amn.yoyo;a.repeat=this.amn.repeat;a.ease=this.amn.easing;a.onUpdate=winwheelAnimationLoop;a.onComplete=winwheelStopAnimation;this.tween=Gam02.to(this,this.amn.duration,a)}};
ARwheel.prototype.stopAnimation=function(a){winwheelToDrawDuringAnimation&&(winwheelToDrawDuringAnimation.tween.kill(),winwheelStopAnimation(a));winwheelToDrawDuringAnimation=this};ARwheel.prototype.pauseAnimation=function(){this.tween&&this.tween.pause()};ARwheel.prototype.resumeAnimation=function(){this.tween&&this.tween.play()};
ARwheel.prototype.computeAnimation=function(){this.amn&&("spinOngoing"==this.amn.type?(this.amn.propertyName="rtA",null==this.amn.spins&&(this.amn.spins=5),null==this.amn.repeat&&(this.amn.repeat=-1),null==this.amn.easing&&(this.amn.easing="Linear.easeNone"),null==this.amn.yoyo&&(this.amn.yoyo=!1),this.amn.propertyValue=360*this.amn.spins,"anti-clockwise"==this.amn.direction&&(this.amn.propertyValue=0-this.amn.propertyValue)):"spinToStop"==this.amn.type?(this.amn.propertyName="rtA",null==this.amn.spins&&
(this.amn.spins=5),null==this.amn.repeat&&(this.amn.repeat=0),null==this.amn.easing&&(this.amn.easing="Power3.easeOut"),this.amn._stopAngle=null==this.amn.stopAngle?stopAngle:360-this.amn.stopAngle+this.pointerAngle,null==this.amn.yoyo&&(this.amn.yoyo=!1),this.amn.propertyValue=360*this.amn.spins,"anti-clockwise"==this.amn.direction?(this.amn.propertyValue=0-this.amn.propertyValue,this.amn.propertyValue-=360-this.amn._stopAngle):this.amn.propertyValue+=this.amn._stopAngle):"spinAndBack"==this.amn.type&&
(this.amn.propertyName="rtA",null==this.amn.spins&&(this.amn.spins=5),null==this.amn.repeat&&(this.amn.repeat=1),null==this.amn.easing&&(this.amn.easing="Power2.easeInOut"),null==this.amn.yoyo&&(this.amn.yoyo=!0),this.amn._stopAngle=null==this.amn.stopAngle?0:360-this.amn.stopAngle,this.amn.propertyValue=360*this.amn.spins,"anti-clockwise"==this.amn.direction?(this.amn.propertyValue=0-this.amn.propertyValue,this.amn.propertyValue-=360-this.amn._stopAngle):this.amn.propertyValue+=this.amn._stopAngle))};
ARwheel.prototype.getRandomForSgt=function(a){var b=0;if(a)if("undefined"!==typeof this.sms[a]){var c=this.sms[a].sAl;a=this.sms[a].eAl-c-2;0<a&&(b=c+1+Math.floor(Math.random()*a))}else console.log("Sgt "+a+" undefined");else console.log("Sgt number not specified");return b};
function Pin(a){defaultOptions={visible:!0,number:36,outerRadius:3,fS:"grey",sS:"black",lW:1,margin:3};for(var b in defaultOptions)this[b]=null!=a&&"undefined"!==typeof a[b]?a[b]:defaultOptions[b];if(null!=a)for(b in a)"undefined"===typeof this[b]&&(this[b]=a[b])}
function Animation(a){defaultOptions={type:"spinOngoing",direction:"clockwise",propertyName:null,propertyValue:null,duration:10,yoyo:!1,repeat:null,easing:null,stopAngle:null,spins:null,clearTheCanvas:null,callbackFinished:null,callbackBefore:null,callbackAfter:null,callbackSound:null,soundTrigger:"segment"};for(var b in defaultOptions)this[b]=null!=a&&"undefined"!==typeof a[b]?a[b]:defaultOptions[b];if(null!=a)for(b in a)"undefined"===typeof this[b]&&(this[b]=a[b])}
function Sgt(a){defaultOptions={size:null,text:"",fS:null,sS:null,lW:null,textFontFamily:null,tFs:null,textFontWeight:null,textOrientation:null,textAlignment:null,textDirection:null,tM:null,textFillStyle:null,textStrokeStyle:null,textLineWidth:null,image:null,imageDirection:null,imgData:null};for(var b in defaultOptions)this[b]=null!=a&&"undefined"!==typeof a[b]?a[b]:defaultOptions[b];if(null!=a)for(b in a)"undefined"===typeof this[b]&&(this[b]=a[b]);this.eAl=this.sAl=0}
Sgt.prototype.changeImage=function(a,b){this.image=a;this.imgData=null;b&&(this.imageDirection=b);awheelAlreadyDrawn=!1;this.imgData=new Image;this.imgData.onload=winwheelLoadedImage;this.imgData.src=this.image};function PG(a){defaultOptions={display:!1,sS:"red",lW:3};for(var b in defaultOptions)this[b]=null!=a&&"undefined"!==typeof a[b]?a[b]:defaultOptions[b]}function winwheelPercentToDegrees(a){var b=0;0<a&&100>=a&&(b=a/100*360);return b}
function winwheelAnimationLoop(){if(winwheelToDrawDuringAnimation){0!=winwheelToDrawDuringAnimation.amn.clearTheCanvas&&winwheelToDrawDuringAnimation.ctx.clearRect(0,0,winwheelToDrawDuringAnimation.canvas.width,winwheelToDrawDuringAnimation.canvas.height);var a=winwheelToDrawDuringAnimation.amn.callbackBefore,b=winwheelToDrawDuringAnimation.amn.callbackAfter;null!=a&&("function"===typeof a?a():eval(a));winwheelToDrawDuringAnimation.draw(!1);null!=b&&("function"===typeof b?b():eval(b));winwheelToDrawDuringAnimation.amn.callbackSound&&
winwheelTriggerSound()}}
function winwheelTriggerSound(){0==winwheelToDrawDuringAnimation.hasOwnProperty("_lastSoundTriggerNumber")&&(winwheelToDrawDuringAnimation._lastSoundTriggerNumber=0);var a=winwheelToDrawDuringAnimation.amn.callbackSound;var b="pin"==winwheelToDrawDuringAnimation.amn.soundTrigger?winwheelToDrawDuringAnimation.getCurrentPinNumber():winwheelToDrawDuringAnimation.getIndicatedSgtNumber();b!=winwheelToDrawDuringAnimation._lastSoundTriggerNumber&&("function"===typeof a?a():eval(a),winwheelToDrawDuringAnimation._lastSoundTriggerNumber=
b)}var winwheelToDrawDuringAnimation=null;function winwheelStopAnimation(a){0!=a&&(a=winwheelToDrawDuringAnimation.amn.callbackFinished,null!=a&&("function"===typeof a?a(winwheelToDrawDuringAnimation.getIndicatedSgt()):eval(a)))}var awheelAlreadyDrawn=!1;
function winwheelLoadedImage(){if(0==awheelAlreadyDrawn){var a=0;for(i=1;i<=winwheelToDrawDuringAnimation.nS;i++)null!=winwheelToDrawDuringAnimation.sms[i].imgData&&winwheelToDrawDuringAnimation.sms[i].imgData.height&&a++;a==winwheelToDrawDuringAnimation.nS&&(awheelAlreadyDrawn=!0,winwheelToDrawDuringAnimation.draw())}};