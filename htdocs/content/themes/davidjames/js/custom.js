var transparentDemo = true;
var fixedTop = false;

$(window).scroll(function(e) {
    oVal = ($(window).scrollTop() / 170);
    $(".blur").css("opacity", oVal);

});


// Smooth Scroll
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 100
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

// Elevator Scroll

var Elevator=function(n){"use strict";function o(n,o,e,i){return n/=i/2,1>n?e/2*n*n+o:(n--,-e/2*(n*(n-2)-1)+o)}function e(n,o){for(var e in o){var i=void 0===n[e]&&"function"!=typeof e;i&&(n[e]=o[e])}return n}function i(n){f||(f=n);var e=n-f,t=o(e,v,-v,s);window.scrollTo(0,t),s>e?m=requestAnimationFrame(i):u()}function t(){f=null,v=null,w=!1}function u(){t(),a&&(a.pause(),a.currentTime=0),c&&c.play()}function l(){w&&(cancelAnimationFrame(m),t(),a&&(a.pause(),a.currentTime=0),window.scrollTo(0,0))}function r(n){n.addEventListener("click",T.elevate,!1)}function d(n){A=document.body;var o={duration:void 0,mainAudio:!1,endAudio:!1,preloadAudio:!0,loopAudio:!0};n=e(n,o),n.element&&r(n.element),n.duration&&(p=!0,s=n.duration),window.addEventListener("blur",l,!1),window.Audio&&(n.mainAudio&&(a=new Audio(n.mainAudio),a.setAttribute("preload",n.preloadAudio),a.setAttribute("loop",n.loopAudio)),n.endAudio&&(c=new Audio(n.endAudio),c.setAttribute("preload","true")))}var a,c,A=null,m=null,s=null,p=!1,f=null,v=null,w=!1,T=this;this.elevate=function(){w||(w=!0,v=document.documentElement.scrollTop||A.scrollTop,p||(s=1.5*v),requestAnimationFrame(i),a&&a.play())},d(n)};

searchVisible = 0;
transparent = true;

$(document).ready(function(){
    /*      Activate the switches with icons      */
    $('.switch')['bootstrapSwitch']();

    /*      Activate regular switches        */
    $("[data-toggle='switch']").wrap('<div class="switch" />').parent().bootstrapSwitch();

    $('[data-toggle="search"]').click(function(){
        if(searchVisible == 0){
            searchVisible = 1;
            $(this).parent().addClass('active');
            $('.navbar-search-form').fadeIn(function(){
                $('.navbar-search-form input').focus();
            });
        } else {
            searchVisible = 0;
            $(this).parent().removeClass('active');
            $(this).blur();
            $('.navbar-search-form').fadeOut(function(){
                $('.navbar-search-form input').blur();
            });
        }
    });

    $('[data-toggle="gsdk-collapse"]').hover(
    function(){
            console.log('on hover');
            var thisdiv = $(this).attr("data-target");

            if(!$(this).hasClass('state-open')){
                $(this).addClass('state-hover');
                $(thisdiv).css({
                    'height':'30px'
                });
            }

        },
        function(){
            var thisdiv = $(this).attr("data-target");
            $(this).removeClass('state-hover');

            if(!$(this).hasClass('state-open')){
                $(thisdiv).css({
                    'height':'0px'
                });
            }
        }
    );

    $('[data-toggle="gsdk-collapse"]').click(
    function(event){
            event.preventDefault();

            var thisdiv = $(this).attr("data-target");
            var height = $(thisdiv).children('.panel-body').height();

            if($(this).hasClass('state-open')){
                $(thisdiv).css({
                    'height':'0px',
                });
                $(this).removeClass('state-open');
            } else {
                $(thisdiv).css({
                    'height':height,
                });
                $(this).addClass('state-open');
            }
        }
    );
});

$(function () {
    $('[data-toggle="gsdk-collapse"]').each(function () {
        var thisdiv = $(this).attr("data-target");
        $(thisdiv).addClass("gsdk-collapse");
    });

});

$(document).scroll(function() {
    if( $(this).scrollTop() > 260 ) {
        if(transparent) {
            transparent = false;
            $('nav[role="navigation"]').removeClass('navbar-transparent');
        }
    } else {
        if( !transparent ) {
            transparent = true;
            $('nav[role="navigation"]').addClass('navbar-transparent');
        }
    }
});

// abbreviate months
var _abbreviateEl = $('.js-abbreviate');

if (_abbreviateEl.html()) {
    setBlogMonth(_abbreviateEl);
}

function abbreviate(str) {
    var _newMonthStr = str.substr(0, 3);
    return _newMonthStr;
}

function setBlogMonth(monthEl) {
    var _newHTML = abbreviate(monthEl.html());

    monthEl.html(_newHTML);
}

/* add class to navbar */

$('.navbar-nav').find('.page-item-32').children('a').addClass('btn btn-round btn-default');










