$(document).on('ready', function() {

	var ajaxUrl = 'wp-admin/admin-ajax.php';
	var form = $('#formContact');

	form.validate({
		rules: {
			name: "required",
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
				required: "Ingrese su nombre por favor.",
			},
			email: {
				required: "Ingrese su correo.",
				email: "El correo no es valido."
			},
			content: {
				required: "Escriba el contenido del mensaje."
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

	$('#sendContact').on('click', function() {
		// Si el formulario es True
		$.ajax({
			type: "POST",
			action: 'send_email',
			url: ajaxUrl,
			data: {
				action: 'send_email',
				name: $('#name').val(),
				email: $('#email').val(),
				content: $('#content').val()
			},
			success: function(msg) {
				alert(msg);
			},
			error: function() {
				alert('error');
			}
		});
	});

});