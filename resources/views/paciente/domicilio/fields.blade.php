<form class="form-horizontal form-label-left input_mask">
	
	{!! Form::text('id', null, ['class' => 'form-control', 'placeholder'=>"Id"]) !!}
	
	<div class="col-md-6 col-sm-6 col-xs-12 form-group ">
		{{ Form::label('calle', null, ['class' => 'control-label']) }}
		{!! Form::text('calle', null, ['class' => 'form-control ', 'placeholder'=>"Calle"]) !!}
	</div>

	<div class="col-xs-12 form-group text-right">
		<a href="{!! route('paciente.index') !!}" class="btn btn-danger">Cancelar</a>
		{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
	</div>

</form>