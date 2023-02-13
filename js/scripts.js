/* LIGHTBOX */

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
	event.preventDefault();
	$(this).ekkoLightbox();
});

/* RESIZE WHEN LOAD THE PAGE */

$(window).load(function() {

	$('li #photo_div').each(function() {
		var width = $(this).width();    // Current image width
		$(this).css("width", width); // Set new width
		$(this).css("height", width);  // Scale height based on ratio

   });
});

/* RESIZE WHEN CHANGE WINDOW */

$(window).resize(function() {
	var width2 = $('#growing').width();    // Current image width
	$('li #photo_div').css("width", width2); // Set new width
	$('li #photo_div').css("height", width2);  // Scale height based on ratio
});

/* CALL THE RESIZE */

$(window).resize();
	

