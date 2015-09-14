$(document).ready(function() {

	var colors = ['#48d7ad', '#89dbdd', '#1ebdb2', '#f23e7f', '#fda94c', '#427ac9'];

	$('.element-poster-hover').each(function() {
	    $(this).css('background-color', colors[Math.floor(Math.random() * colors.length)]);
	});

	$('header').each(function() {
	    $(this).css('background-color', colors[Math.floor(Math.random() * colors.length)]);
	});

	$('.element-blog-post').each(function() {
	    $(this).css('background-color', colors[Math.floor(Math.random() * colors.length)]);
	});


	var sticky = new Waypoint.Sticky({
  		element: $('.article-sticky')[0]
	})

});






