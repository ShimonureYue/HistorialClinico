<div class="form-horizontal form-label-left input_mask">
	<div class="col-md-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_patologicos[enfermedades]', 'Enfermedades', ['class' => 'control-label']) }}
		{{ Form::textarea('antecedentes_patologicos[enfermedades]', null, ['class' => 'form-control disable-resize','rows' => 3, 'placeholder'=>"Ingresa los antecedentes..."]) }}
	</div>
	
	<div class="col-md-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_patologicos[hospitalizaciones]', 'Hospitalizaciones', ['class' => 'control-label']) }}
		{{ Form::textarea('antecedentes_patologicos[hospitalizaciones]', null, ['class' => 'form-control disable-resize','rows' => 3, 'placeholder'=>"Ingresa los antecedentes..."]) }}
	</div>
	
	<div class="col-md-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_patologicos[cirugias]', 'Cirugías', ['class' => 'control-label']) }}
		{{ Form::textarea('antecedentes_patologicos[cirugias]', null, ['class' => 'form-control disable-resize','rows' => 3, 'placeholder'=>"Ingresa los antecedentes..."]) }}
	</div>
	
	<div class="col-md-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_patologicos[traumatismos]', 'Traumatismos', ['class' => 'control-label']) }}
		{{ Form::textarea('antecedentes_patologicos[traumatismos]', null, ['class' => 'form-control disable-resize','rows' => 3, 'placeholder'=>"Ingresa los antecedentes..."]) }}
	</div>
	
	<div class="col-md-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_patologicos[alergicos]', 'Alergicos', ['class' => 'control-label']) }}
		{{ Form::textarea('antecedentes_patologicos[alergicos]', null, ['class' => 'form-control disable-resize','rows' => 3, 'placeholder'=>"Ingresa los antecedentes..."]) }}
	</div>
	
	<div class="col-md-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_patologicos[viajes]', 'Viajes', ['class' => 'control-label']) }}
		{{ Form::textarea('antecedentes_patologicos[viajes]', null, ['class' => 'form-control disable-resize','rows' => 3, 'placeholder'=>"Ingresa los antecedentes..."]) }}
	</div>
</div>
