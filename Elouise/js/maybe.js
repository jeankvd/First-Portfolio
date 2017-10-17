setInterval($.getJSON("http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1&callback=?", 
	function(quote) {
  $(".quote").html(quote[0].content);
});
, 500);

$(".portfolio-img").hover(function(){

		$(this).toggle("overlay1");

});//On hover add overlay

$(".portfolio ul a").click( function(evt) { //click event to change imgs
	evt.preventDefault();
	var request = $(this).attr("href");

	$(".portfolio li").removeClass("active");
	$(this).children("li").addClass("active");

	$(".portfolio-img").each(function(i, img){ //loop to change src of img
		img = $(img); //convert the object into jQuery object
		img.attr("src", "img/portfolio/" + request + "/" + (i + 1) + "t.jpeg");
	}); //end for loop



})//end click event for portfolio nav

