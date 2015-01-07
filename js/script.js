// Load is used to ensure all images have been loaded, impossible with document

jQuery(window).load(function () {

	/*----------------------------------------------------*/
	/*  Contact Form
	/*----------------------------------------------------*/
	$('#modal').on('shown.bs.modal', function () {
		var ajaxUrl = 'wp-admin/admin-ajax.php';
		var modal = $('#modal');
		var form = $('#formContact');
		var sendEmail = $('#sendEmail');

		form.validate({
			rules: {
				name: 'required',
				email: {
					required: true,
					email: true
				},
				content: {
					required: true
				}
			},
			messages: {
				name: {
					required: 'Ingrese su nombre por favor.',
				},
				email: {
					required: 'Ingrese su correo.',
					email: 'El correo no es valido.'
				},
				content: {
					required: 'Escriba el contenido del mensaje.'
				}
			},
			highlight: function (element) {
				$(element).closest('.form-group').addClass('has-error');
			},
			unhighlight: function (element) {
				$(element).closest('.form-group').removeClass('has-error');
			},
			errorElement: 'span',
			errorClass: 'help-block',
			errorPlacement: function (error, element) {
				if(element.parent('.input-group').length) {
					error.insertAfter(element.parent());
				} else {
					error.insertAfter(element);
				}
			}
		});

		$(form).on('submit', function (event) {
			event.preventDefault(); // Evitamos que el formulario se envie
			if (form.valid()) {
				sendEmail.button('loading');
				$.ajax({
					type: 'POST',
					action: 'send_email',
					url: ajaxUrl,
					data: {
						action: 'send_email',
						name: $('#name').val(),
						email: $('#email').val(),
						content: $('#content').val()
					},
					success: function (msg) {
						$(form)[0].reset(); // Limpiamos los campos del form
						sendEmail.button('reset'); // Reseteamos el texto del button
						$('.alert').html(msg).show();
						setTimeout(function () { $(alert).hide(); }, 5000);
					},
					error: function () {
						alert('error');
					}
				});
			}

		});
	});

	// Masonry ***********************************************
	
	// Takes the gutter width from the bottom margin of .post
	var gutter = parseInt(jQuery('.post').css('marginBottom'));
	var container = jQuery('#posts');

	// Creates an instance of Masonry on #posts
	container.masonry({
		gutter: gutter,
		itemSelector: '.post',
		columnWidth: '.post'
	});
	
	// This code fires every time a user resizes the screen and only affects .post elements
	// whose parent class isn't .container. Triggers resize first so nothing looks weird.
	jQuery(window).bind('resize', function () {
		if (!jQuery('#posts').parent().hasClass('container')) {
			
			
			
			//Restablece todos los anchos a 'auto' para esterilizar cálculos
			
			post_width = jQuery('.post').width() + gutter;
			//jQuery('#posts, body > #grid').css('width', 'auto');
			
			
			
			// Calculates how many .post elements will actually fit per row. Could this code be cleaner?
			
			posts_per_row = jQuery('#posts').innerWidth() / post_width;
			floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
			ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
			posts_width = (ceil_posts_width > jQuery('#posts').innerWidth()) ? floor_posts_width : ceil_posts_width;
			if (posts_width == jQuery('.post').width()) {
				posts_width = '100%';
			}
			
			
			
			// Ensures that all top-level elements have equal width and stay centered
			
			//jQuery('#posts, #grid').css('width', posts_width);
			jQuery('#grid').css({'margin': '0 auto'});



		}
	}).trigger('resize');


});