$(document).on('ready', function() {

	var ajaxUrl = 'wp-admin/admin-ajax.php';
	var modal = $('#modalContact');
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
		highlight: function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element) {
			$(element).closest('.form-group').removeClass('has-error');
		},
		errorElement: 'span',
		errorClass: 'help-block',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		}
	});

	$(form).on('submit', function(event) {
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
				success: function(msg) {
					var alert = '.alert';
					$(form)[0].reset(); // Limpiamos los campos del form
					sendEmail.button('reset'); // Reseteamos el texto del button
					$(alert).html(msg).show();
					setTimeout(function(){ $(alert).hide(); }, 5000);
				},
				error: function() {
					alert('error');
				}
			});
		}

	});

});