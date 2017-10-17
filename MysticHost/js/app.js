$(document).ready(function () {
    if ( $(window).width() < 981) {
		$("#services-photo").insertBefore("#services-text");
		$("#form").insertAfter("#contact-us");
	} 
});