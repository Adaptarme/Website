$(document).ready(function() {

	/*----------------------------------------------------*/
	/*  Sticky
	/*----------------------------------------------------*/

	$("#sticker").sticky({
		topSpacing: 20
	});
	
	/*----------------------------------------------------*/
	/*  FitVids.js
	/*----------------------------------------------------*/

	$("article").fitVids({ customSelector: "iframe" });


});

$(window).load(function() {

	/*----------------------------------------------------*/
	/*  Masonry
	/*----------------------------------------------------*/
	$(window).bind('resize', function () {

		// Takes the gutter width from the bottom margin of .post
		var gutter = parseInt( $('.post').css('marginBottom') );
		var container = $('.posts');

		// Creates an instance of Masonry on #posts
		container.masonry({
			gutter: gutter,
			itemSelector: '.post',
			columnWidth: '.post'
		});

		if ( ! $('#posts').parent().hasClass('container') ) {

			//Restablece todos los anchos a 'auto' para esterilizar cálculos	
			post_width = $('.post').width() + gutter;
			$('#posts, body > #grid').css('width', 'auto');
		
			// Calculates how many .post elements will actually fit per row. Could this code be cleaner?
			posts_per_row = $('#posts').innerWidth() / post_width;
			floor_posts_width = ( Math.floor(posts_per_row) * post_width ) - gutter;
			ceil_posts_width = ( Math.ceil(posts_per_row) * post_width ) - gutter;
			posts_width = ( ceil_posts_width > $('#posts').innerWidth() ) ? floor_posts_width : ceil_posts_width;
			if (posts_width == $('.post').width()) {
				posts_width = '100%';
			}
			
			// Ensures that all top-level elements have equal width and stay centered
			//$('#posts, #grid').css('width', posts_width);
			$('#posts').css({'margin': '0 auto'});

		}

	}).trigger('resize');

});
