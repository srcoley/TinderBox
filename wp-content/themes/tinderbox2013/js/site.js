/*!
 * jquery.customSelect() - v0.4.0
 * http://adam.co/lab/jquery/customselect/
 * 2013-04-28
 *
 * Copyright 2013 Adam Coulombe
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @license http://www.gnu.org/licenses/gpl.html GPL2 License
 */
(function(a){a.fn.extend({customSelect:function(c){if(typeof document.body.style.maxHeight==="undefined"){return this}var e={customClass:"customSelect",mapClass:true,mapStyle:true},c=a.extend(e,c),d=c.customClass,f=function(h,k){var g=h.find(":selected"),j=k.children(":first"),i=g.html()||"&nbsp;";j.html(i);if(g.attr("disabled")){k.addClass(b("DisabledOption"))}else{k.removeClass(b("DisabledOption"))}setTimeout(function(){k.removeClass(b("Open"));a(document).off("mouseup."+b("Open"))},60)},b=function(g){return d+g};return this.each(function(){var g=a(this),i=a("<span />").addClass(b("Inner")),h=a("<span />");g.after(h.append(i));h.addClass(d);if(c.mapClass){h.addClass(g.attr("class"))}if(c.mapStyle){h.attr("style",g.attr("style"))}g.addClass("hasCustomSelect").on("update",function(){f(g,h);var k=parseInt(g.outerWidth(),10)-(parseInt(h.outerWidth(),10)-parseInt(h.width(),10));h.css({display:"inline-block"});var j=h.outerHeight();if(g.attr("disabled")){h.addClass(b("Disabled"))}else{h.removeClass(b("Disabled"))}i.css({width:k,display:"inline-block"});g.css({"-webkit-appearance":"menulist-button",width:h.outerWidth(),position:"absolute",opacity:0,height:j,fontSize:h.css("font-size")})}).on("change",function(){h.addClass(b("Changed"));f(g,h)}).on("keyup",function(){if(!h.hasClass(b("Open"))){g.blur();g.focus()}}).on("mousedown",function(j){h.removeClass(b("Changed"))}).on("mouseup",function(j){if(!h.hasClass(b("Open"))){h.addClass(b("Open"));j.stopPropagation();a(document).one("mouseup."+b("Open"),function(k){if(k.target!=g.get(0)&&a.inArray(k.target,g.find("*").get())<0){g.blur()}else{f(g,h)}})}}).focus(function(){h.removeClass(b("Changed")).addClass(b("Focus"))}).blur(function(){h.removeClass(b("Focus")+" "+b("Open"))}).hover(function(){h.addClass(b("Hover"))},function(){h.removeClass(b("Hover"))}).trigger("update")})}})})(jQuery);


/* Donut Chart */
(function(e){var t={bgColor:"#E2E6E7",fgColor:"#9ed265",size:160,donutwidth:24,textsize:36};var n={init:function(r){var i=true;if(typeof r=="object"){this.donutchartsettings=e.extend({},t,r);if(r["size"]&&!r["donutwidth"])this.donutchartsettings["donutwidth"]=r["size"]/4;if(r["size"]&&!r["textsize"])this.donutchartsettings["textsize"]=r["size"]/10}else{if(typeof this.donutchartsettings=="object")i=false;else this.donutchartsettings=t}if(i){e(this).css("width",this.donutchartsettings.size+"px");e(this).css("height",this.donutchartsettings.size+"px");e(this).html("<canvas width='"+this.donutchartsettings.size+"' height='"+this.donutchartsettings.size+"'></canvas><div class='close-rate'><span></span><br> close rate</div>");var s=e("canvas",this).get(0);if(typeof G_vmlCanvasManager!="undefined")G_vmlCanvasManager.initElement(s);var o=s.getContext("2d");n.drawBg.call(o,this.donutchartsettings)}},drawBg:function(e){this.clearRect(0,0,e.size,e.size);this.beginPath();this.fillStyle=e.bgColor;this.arc(e.size/2,e.size/2,e.size/2,0,2*Math.PI,false);this.arc(e.size/2,e.size/2,e.size/2-e.donutwidth,0,2*Math.PI,true);this.fill()},drawFg:function(e,t){var n=t/100*360;var r=Math.PI*-90/180;var i=Math.PI*(-90+n)/180;this.beginPath();this.fillStyle=e.fgColor;this.arc(e.size/2,e.size/2,e.size/2,r,i,false);this.arc(e.size/2,e.size/2,e.size/2-e.donutwidth,i,r,true);this.fill()}};e.fn.donutchart=function(t){return this.each(function(){n.init.call(this,t);if(t=="animate"){var r=e(this).attr("data-percent");var i=e(this).children("canvas").get(0);var s=e(this).children("div").children("span");var o=this.donutchartsettings;if(i.getContext){var u=i.getContext("2d");var a=0;function f(){a++;n.drawBg.call(u,o);n.drawFg.apply(u,[o,a]);s.text(a+"%");if(a>=r)clearInterval(l)}var l=setInterval(f,20)}}})}})(jQuery);

/* Fit Vids */
(function(e){"use strict";e.fn.fitVids=function(t){var n={customSelector:null};if(!document.getElementById("fit-vids-style")){var r=document.createElement("div"),i=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0];r.className="fit-vids-style";r.id="fit-vids-style";r.style.display="none";r.innerHTML="­<style>                 .fluid-width-video-wrapper {                   width: 100%;                                position: relative;                         padding: 0;                              }                                                                                       .fluid-width-video-wrapper iframe,          .fluid-width-video-wrapper object,          .fluid-width-video-wrapper embed {             position: absolute;                         top: 0;                                     left: 0;                                    width: 100%;                                height: 100%;                            }                                         </style>";i.parentNode.insertBefore(r,i)}if(t){e.extend(n,t)}return this.each(function(){var t=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];if(n.customSelector){t.push(n.customSelector)}var r=e(this).find(t.join(","));r=r.not("object object");r.each(function(){var t=e(this);if(this.tagName.toLowerCase()==="embed"&&t.parent("object").length||t.parent(".fluid-width-video-wrapper").length){return}var n=this.tagName.toLowerCase()==="object"||t.attr("height")&&!isNaN(parseInt(t.attr("height"),10))?parseInt(t.attr("height"),10):t.height(),r=!isNaN(parseInt(t.attr("width"),10))?parseInt(t.attr("width"),10):t.width(),i=n/r;if(!t.attr("id")){var s="fitvid"+Math.floor(Math.random()*999999);t.attr("id",s)}t.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",i*100+"%");t.removeAttr("height").removeAttr("width")})})}})(jQuery);

$(document).ready(function(){
	
	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$('#headernav').toggleClass('active');
	});
	$('.subnav-toggle').click(function(){
		$(this).toggleClass('active');
		$('nav.subnav').toggleClass('active');
	});
	$('.dropdown-toggle').dropdown()
    $('select').customSelect();
    
	$("#donutchart").donutchart("animate");    

	$(function () {
	  var n = $("div.image").length;
	  if (n > 2) {
	  	$(".images-contain").addClass("extra");
	  	$(".images-contain").next().addClass("extra");
	  	$(".images-contain").next().next().addClass("extra");
	  }
	});
	
	$(function () {
	  var n = $("div.videos").length;
	  if (n > 2) {
	  	$(".videos-contain").addClass("extra");
	  	$(".videos-contain").next().addClass("extra");
	  	$(".videos-contain").next().next().addClass("extra");
	  }
	});
	
	$(function () {
	  var n = $("div.logo").length;
	  if (n > 2) {
	  	$(".logos-contain").addClass("extra");
	  	$(".logos-contain").next().addClass("extra");
	  	$(".logos-contain").next().next().addClass("extra");
	  }
	});
	$(function () {
		$("p.expand").click(function() {
			$(this).addClass("expanded");
			$(this).next().addClass("expanded");
			$(this).prev().addClass("expanded");
		});
	});
	$(function () {
		$("p.collapse").click(function() {
			$(this).removeClass("expanded");
			$(this).prev("p").removeClass("expanded");
			$(this).prev().prev().removeClass("expanded");
		});
	});
	
    $(".videowrap").fitVids();

	
});