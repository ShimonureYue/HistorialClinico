<div class="form-horizontal form-label-left input_mask">

	{!! Form::text('id', null, ['class' => 'form-control', 'placeholder'=>"Id"]) !!}

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('nombre', null, ['class' => 'control-label']) }}
		{!! Form::text('nombre', null, ['class' => 'form-control ', 'placeholder'=>"Nombre(s)"]) !!}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('a_paterno', 'Apellido Paterno', ['class' => 'control-label']) }}
		{!! Form::text('a_paterno', null, ['class' => 'form-control ', 'placeholder'=>"Apellido Paterno"]) !!}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('a_materno', 'Apellido Materno', ['class' => 'control-label']) }}
		{!! Form::text('a_materno', null, ['class' => 'form-control ', 'placeholder'=>"Apellido Materno"]) !!}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('fecha_nacimiento', 'Fecha de nacimiento', ['class' => 'control-label']) }}
		{!! Form::date('fecha_nacimiento', null, ['class' => 'form-control ']) !!}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('curp', 'CURP', ['class' => 'control-label']) }}
		{!! Form::text('curp', null, ['class' => 'form-control ', 'placeholder'=>"CURP"]) !!}
	</div>

	<div class="col-md-3 col-sm-3 col-xs-6 form-group ">
		{{ Form::label('genero', 'Genero', ['class' => 'control-label']) }}
		{{ Form::select('genero', Config::get('dropdowns.genero'), null, ['class' => 'form-control ', 'placeholder' => 'Selecciona el género']) }}
	</div>

	<div class="col-md-3 col-sm-3 col-xs-6 form-group ">
		{{ Form::label('estado_civil', 'Estado civil', ['class' => 'control-label']) }}
		{{ Form::select('estado_civil', Config::get('dropdowns.estado_civil'), null, ['class' => 'form-control ', 'placeholder' => 'Selecciona el estado civil']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('tipo_sanguineo', 'Tipo de sangre', ['class' => 'control-label']) }}
		{{ Form::select('tipo_sanguineo', Config::get('dropdowns.tipo_sanguineo'), null, ['class' => 'form-control ', 'placeholder' => 'Selecciona el tipo']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('grupo_etnico', 'Grupo Etnico', ['class' => 'control-label']) }}
		{{ Form::text('grupo_etnico', null, ['class' => 'form-control ', 'placeholder'=>"Grupo etnico"]) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('religion', 'Religión', ['class' => 'control-label']) }}
		{{ Form::text('religion', null, ['class' => 'form-control ', 'placeholder'=>"Religión"]) }}
	</div>


	


</div>
