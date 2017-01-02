<div class="form-horizontal form-label-left input_mask">

	<div class="col-xs-12">
		<h4><b>Vivienda</b></h4>
	</div>
	<div class="col-md-2 col-sm-2 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[nivel_socioeconomico]', 'Nivel socioeconómico', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[nivel_socioeconomico]', Config::get('dropdowns.nivel_socioeconomico'), null, ['class' => 'form-control ', 'placeholder'=>"Selecciona"]) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_tipo]', 'Tipo de Vivienda', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[vivienda_tipo]', Config::get('dropdowns.tipo_vivienda'), null, ['class' => 'form-control ', 'placeholder' => 'Tipo']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_renta]', '¿Renta?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[vivienda_renta]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_agua]', '¿Agua?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[vivienda_agua]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_luz]', '¿Eléctricidad?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[vivienda_luz]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_drenaje]', '¿Drenaje?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[vivienda_drenaje]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_habitantes]', 'Habitantes', ['class' => 'control-label']) }}
		{{ Form::number('antecedentes_no_patologicos[vivienda_habitantes]', null, ['class' => 'form-control ', 'placeholder' => 'Número']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_habitaciones]', 'Habitaciones', ['class' => 'control-label']) }}
		{{ Form::number('antecedentes_no_patologicos[vivienda_habitaciones]', null, ['class' => 'form-control ', 'placeholder' => 'Número']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-4 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_hacinamiento]', '¿Hacinamiento?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[vivienda_hacinamiento]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_zoonosis]', 'Zoonosis', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[vivienda_zoonosis]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_plagas]', 'Plagas', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[vivienda_plagas]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[vivienda_descripcion]', 'Detalles', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[vivienda_descripcion]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-xs-12">
		<hr>
		<h4><b>Alimentación</b></h4>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[alimentacion_calidad]', 'Calidad', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[alimentacion_calidad]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[alimentacion_intolerancia]', 'Intolerancia', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[alimentacion_intolerancia]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[alimentacion_descripcion]', 'Descripción detallada', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[alimentacion_descripcion]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>
	
	<div class="col-xs-12">
		<hr>
		<h4><b>Deportes</b></h4>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[deportes_cuales]', '¿Qué deportes practica?', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[deportes_cuales]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[deportes_frecuencia]', '¿Frecuencia con que hace deporte?', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[deportes_frecuencia]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[sueno_descripcion]', '¿Sueño?', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[sueno_descripcion]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>
	
	<div class="col-xs-12">
		<hr>
		<h4><b>Toxicomanias</b></h4>
	</div>

	<div class="col-md-2 col-sm-2 col-xs-6 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_alcohol]', '¿Alcohol?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[toxicomanias_alcohol]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-6 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_alcohol_inicio]', '¿Cuando inicio?', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_alcohol_inicio]', null, ['class' => 'form-control ', 'placeholder' => 'Edad aproximada']) }}
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_alcohol_frecuencia]', 'Frecuencia', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_alcohol_frecuencia]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_alcohol_descripcion]', 'Descripción o detalles', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_alcohol_descripcion]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>
	
	
	<div class="col-md-2 col-sm-2 col-xs-6 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_tabaco]', '¿Tabaco?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[toxicomanias_tabaco]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-6 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_tabaco_inicio]', '¿Cuando inicio?', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_tabaco_inicio]', null, ['class' => 'form-control ', 'placeholder' => 'Edad aproximada']) }}
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_tabaco_frecuencia]', 'Frecuencia', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_tabaco_frecuencia]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_tabaco_descripcion]', 'Descripción o detalles', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_tabaco_descripcion]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>
	
	
	<div class="col-md-2 col-sm-2 col-xs-6 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_drogas]', '¿Drogas?', ['class' => 'control-label']) }}
		{{ Form::select('antecedentes_no_patologicos[toxicomanias_drogas]', ['si' => 'Si', 'no'=>'No'], null, ['class' => 'form-control ', 'placeholder' => 'Selecciona']) }}
	</div>

	<div class="col-md-2 col-sm-2 col-xs-6 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_drogas_inicio]', '¿Cuando inicio?', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_drogas_inicio]', null, ['class' => 'form-control ', 'placeholder' => 'Edad aproximada']) }}
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_drogas_frecuencia]', 'Frecuencia', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_drogas_frecuencia]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group ">
		{{ Form::label('antecedentes_no_patologicos[toxicomanias_drogas_descripcion]', 'Descripción o detalles', ['class' => 'control-label']) }}
		{{ Form::text('antecedentes_no_patologicos[toxicomanias_drogas_descripcion]', null, ['class' => 'form-control ', 'placeholder' => 'Descripción']) }}
	</div>
	







</div>
