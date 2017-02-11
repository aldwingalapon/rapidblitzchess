$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip({html: true}); 

	$('.lazy-image').lazy();

	$(window).scroll(function(){
		var offset = 800,
		//footerHeight = $('footer').height() + 80,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1000;
		//grab the "back to top" link
		$back_to_top = $('.back_to_top-button');
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('button_visible') : $back_to_top.removeClass('button_visible fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('fade-out');
		}
	});

	$('a.smooth-scroll[href^="#"]').on('click',function (e) {
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);
		if(target == '#accordion') {
		// do nothing
		} else if(target.length == 0) {
			$('html,body').animate({
			scrollTop: 0
			}, 1200);
		} else {
			$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 150
			}, 1200, 'swing');
		}
	});
	
	$("header#main_header .top_header .column-nav").height($('header#main_header .top_header .column-logo').height());
});

$(document).ready(function() {
	$(".rapid-bltz-open-chess-tournament-countdown .ce-countdown").countEverest({
		hour: 19,
		minute: 30,
		day: 29,
		month: 3,
		year: 2017,
		timeZone: 8,
		leftHandZeros: false,
		onChange: function() {
			drawCircle(document.getElementById('ce-days'), this.days, 365);
			drawCircle(document.getElementById('ce-hours'), this.hours, 24);
			drawCircle(document.getElementById('ce-minutes'), this.minutes, 60);
			drawCircle(document.getElementById('ce-seconds'), this.seconds, 60);
		}
	});

	function deg(v) {
		return (Math.PI/180) * v - (Math.PI/2);
	}

	function drawCircle(canvas, value, max) {
		var	circle = canvas.getContext('2d');
		
		circle.clearRect(0, 0, canvas.width, canvas.height);
		circle.lineWidth = 16;

		circle.beginPath();
		circle.arc(
				canvas.width / 2, 
				canvas.height / 2, 
				canvas.width / 2 - circle.lineWidth, 
				deg(0), 
				deg(360 / max * (max - value)), 
				false);
		circle.strokeStyle = '#FFFFFF';
		circle.stroke();

		circle.beginPath();
		circle.arc(
				canvas.width / 2, 
				canvas.height / 2, 
				canvas.width / 2 - circle.lineWidth, 
				deg(0), 
				deg(360 / max * (max - value)), 
				true);
		circle.strokeStyle = '#006600';
		circle.stroke();
	}

	setTimeout(function(){updateCanvasSizes()}, 300);

	// updateBoxes();
	$(window).resize(function() {
		setTimeout(function(){updateCanvasSizes()}, 400);
	});

	function updateCanvasSizes() {
		//$('.rapid-bltz-open-chess-tournament-countdown .ce-circle').height($('.rapid-bltz-open-chess-tournament-countdown .ce-circle').width());
	}	
});

function init() {
	window.addEventListener('scroll', function(e){
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 800,
		header = document.querySelector("header#main_header .top_header");
		if ($(window).width() >= 600) {
			if (distanceY > shrinkOn) {
				classie.add(header,"scrolled");
				$("#main_content").css('padding-top', $("header#main_header").height() + 'px');
			} else {
				if (classie.has(header,"scrolled")) {
					classie.remove(header,"scrolled");
					$("#main_content").css('padding-top', '0');
				}
			}
		}
	});
}
window.onload = init();

function getCookie(cname) {
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
	}
	return "";
}

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	document.cookie = cname + "=" + cvalue + "; " + expires;
}