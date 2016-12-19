
$(document).ready(function () {

	$('#form_paciente').on('submit', function (e) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		e.preventDefault(e);
		console.log('Crear paciente...');
		$.ajax({
			type: "POST",
			data: $(this).serialize(),
			url: url_base + 'paciente',
			success: function (data) {
				console.log(data);
				//$("#task" + task_id).remove();
			},
			error: function (data) {
				console.log('Error:', data);
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



/*
 $.ajaxSetup({
 headers: {
 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 }
 });
 $.ajax({
 type: "POST",
 url: 'paciente/',
 success: function (data) {
 console.log(data);
 //$("#task" + task_id).remove();
 },
 error: function (data) {
 console.log('Error:', data);
 }
 });
 }
 */

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