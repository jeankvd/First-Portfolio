// Hero

document.addEventListener("click", changeWidth);

function changeWidth(e) {
	let viewAfter = document.getElementById("viewAfter");	
	viewAfter.style = "width: " + e.clientX + "px;";
}

//Add effects to btn and rearrange cols based on width
$(document).ready(function(){ 
	$("a.pill-btn").addClass("wow fadeInUp").attr("data-wow-duration", "1s");

	if ($(window).width() < 768) {
		$(".rearrange > div").each(function() {
    		$(this).prependTo(this.parentNode);
		})
	}

});


//Smooth Scrolling
$(document).on('click', '.scrollTo', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
});

