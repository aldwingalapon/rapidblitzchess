$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip({html: true}); 

});

function init() {
	window.addEventListener('scroll', function(e){
		var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 800,
		header = document.querySelector("header#main-header .top-header");
		if ($(window).width() >= 600) {
			if (distanceY > shrinkOn) {
				classie.add(header,"scrolled");
				$("#main-content").css('padding-top', $("header#main-header").height() + 'px');
			} else {
				if (classie.has(header,"scrolled")) {
					classie.remove(header,"scrolled");
					$("#main-content").css('padding-top', '0');
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