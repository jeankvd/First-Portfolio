//vars and setup for lightbox

var $lightbox = $('<div id="lightbox"></div>');
var $image = $('<img class="lightbox-img">');

$lightbox.append($image);
$arrows = $(".arrows");
$('body').append($lightbox);

//End Lightbox setup

$(".portfolio ul a").click( function(evt) { //click event to change imgs thumbnails
	evt.preventDefault();
	var request = $(this).attr("href");

	$(".portfolio li").removeClass("active");
	$(this).children("li").addClass("active");

	$(".portfolio-img").each(function(i, img){ //loop to change src of img
		img = $(img); //convert the object into jQuery object
		img.attr("src", "img/portfolio/" + request + "/" + (i + 1) + "t.jpeg");
		img.parent().attr("href", "img/portfolio/" + request + "/" + (i + 1) + ".jpeg");
	}); //end for loop



})//end click event for portfolio nav

$(".portfolio-img").parent().click(function(evt){//lightbox function
	evt.preventDefault();
	console.log($(this).attr('href'));
	var href = $(this).attr('href');
  //Update overlay with image on the link
	 $image.attr("src", href); 
	 $lightbox.show();
	 $arrows.show();
});

$lightbox.on('click', function() {
  $(this).hide();
  $arrows.hide();

});

$arrows.parent().click(function(evt){ //lightbox arrows
	evt.preventDefault();
	var currentSource = $(".lightbox-img").attr("src");
	var currentImageIndex = parseInt(currentSource.match(/\d+/)[0]);
	var side = $(evt.target).attr("id");
	var nextImage = $image;
	console.log(nextImage);

	console.log($(evt.target).attr("id"));

	if (side === "left" && currentImageIndex !== 1) {

		var newHref = currentSource.replace(/\d+/, (currentImageIndex-1));

	} else if ( side === "right" && currentImageIndex !== 8) {

		var newHref = currentSource.replace(/\d+/, (currentImageIndex+1));

	}

	$(".lightbox-img").attr("src", newHref);
});

