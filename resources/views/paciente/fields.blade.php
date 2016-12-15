<form class="form-horizontal form-label-left input_mask">

	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		{!! Form::number('id', null, ['class' => 'form-control has-feedback-left', 'placeholder'=>"Id"]) !!}
		<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>
	
	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		{!! Form::text('nombre', null, ['class' => 'form-control has-feedback-left', 'placeholder'=>"Nombre(s)"]) !!}
		<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		{!! Form::text('a_paterno', null, ['class' => 'form-control has-feedback-left', 'placeholder'=>"Apellido Paterno"]) !!}
		<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		{!! Form::text('a_materno', null, ['class' => 'form-control has-feedback-left', 'placeholder'=>"Apellido Materno"]) !!}
		<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
		{!! Form::date('fecha_nacimiento', null, ['class' => 'form-control has-feedback-left']) !!}
		<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
	</div>


	<div class="col-xs-12 form-group text-right">
		<a href="{!! route('paciente.index') !!}" class="btn btn-danger">Cancelar</a>
		{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
	</div>


</form>