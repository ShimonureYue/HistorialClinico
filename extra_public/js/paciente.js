
$(document).ready(function () {

	$('#form_paciente').on('submit', function (e) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		e.preventDefault(e);
		console.log('Crear paciente...');
		console.log($(this));
		console.log($(this).serialize());
		$.ajax({
			type: "POST",
			data: $(this).serialize(),
			url: url_base + 'paciente',
			success: function (data) {
				console.log(data);
				//Paso 2. Cambio al TAB de Domicilio
				$('#domicilio-tab').tab('show');
				
				//Paso 3. Lleno el input para el ID del Paciente
				$('input[name=id]').val(data.data.paciente_id);

			},
			error: function (data) {
				showErrorsFlashDiv($('#flashajax_error'), data.responseJSON.data);
				/*
				$('#flashajax_error').removeClass('hidden').addClass('show');
				$("#flashajax_error ul").empty();
				$.each(data.responseJSON.data, function (index, value) {
					$("#flashajax_error ul").append('<li>' + value + '</li>');
				});
				*/
				//console.log('Error:', d);
			}
		});
	});
});


function crearPaciente() {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	console.log('registrando');
}

function pruebaAjax(paciente_id) {

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		type: "DELETE",
		url: 'paciente/' + paciente_id,
		success: function (data) {
			console.log(data);
			//$("#task" + task_id).remove();
		},
		error: function (data) {
			console.log('Error:', data);
		}
	});
}
/*
 $(document).ready(function(){
 console.log('hollaaaa script');
 });
 */