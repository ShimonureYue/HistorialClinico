<div class="form-horizontal form-label-left input_mask">

	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[calle]','Calle', null, ['class' => 'control-label']) }}
		{{ Form::text('direccion[calle]', null, ['class' => 'form-control ', 'placeholder'=>"Calle"]) }}
	</div>
	<div class="col-md-3 col-sm-3 col-xs-6 form-group ">
		{{ Form::label('direccion[num_exterior]','No. Exterior', null, ['class' => 'control-label']) }}
		{{ Form::text('direccion[num_exterior]', null, ['class' => 'form-control ', 'placeholder'=>"No. Exterior"]) }}
	</div>
	<div class="col-md-3 col-sm-3 col-xs-6 form-group ">
		{{ Form::label('direccion[num_interior]','No. Interior', null, ['class' => 'control-label']) }}
		{{ Form::text('direccion[num_interior]', null, ['class' => 'form-control ', 'placeholder'=>"No. Exterior"]) }}
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[estado_id]','Estado', null, ['class' => 'control-label']) }}
		{{ Form::select('direccion[estado_id]', [1=>'Estado 1',2=>'Estado 2'], null, ['class' => 'form-control ']) }}
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[municipio_id]','Municipio',null, ['class' => 'control-label']) }}
		{{ Form::select('direccion[municipio_id]', [1=>'Municipio 1',2=>'Municipio 2'], null, ['class' => 'form-control ']) }}
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[colonia]','Colonia', null, ['class' => 'control-label']) }}
		{{ Form::text('direccion[colonia]', null, ['class' => 'form-control ', 'placeholder'=>"Colonia"]) }}
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[codigo_postal]','Código Postal', null, ['class' => 'control-label']) }}
		{{ Form::number('direccion[codigo_postal]', null, ['class' => 'form-control ', 'placeholder'=>"Código Postal"]) }}
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[telefono]','Télefono',null, ['class' => 'control-label']) }}
		{{ Form::number('direccion[telefono]', null, ['class' => 'form-control ', 'placeholder'=>"Télefono"]) }}
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('direccion[celular]','Celular',null, ['class' => 'control-label']) }}
		{{ Form::number('direccion[celular]', null, ['class' => 'form-control ', 'placeholder'=>"Celular"]) }}
	</div>



</div>