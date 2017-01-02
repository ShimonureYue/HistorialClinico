@extends('layouts.blank')

@section('main_container')

@if(isset($paciente))
	{{ Form::model($paciente, ['route' => 'paciente.store_with_relations','id' => 'form_paciente_full']) }}		
@else
	{{ Form::open(['route' => 'paciente.store_with_relations','id' => 'form_paciente_full']) }}		
@endif
<div class="right_col" role="main">
	<div class="row">

		<div class="x_panel">
			<div class="row x_title">
				<div class="col-md-6 form-group text-left">
					<h2>Paciente</h2>
				</div>
				<div class="col-md-6 form-group text-right">
					<a href="{!! route('paciente.index') !!}" class="btn btn-danger">Cancelar</a>
					{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
				</div>

			</div>
			@include('flash::message')
			@include('includes/flashajax')
			<div class="x_content">


				<div class="row">

				</div>
				<div class="" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active">
							<a href="#tab_content1" id="identificacion-tab" role="tab" data-toggle="tab" aria-expanded="true">Ficha Identificación</a>
                        </li>
                        <li role="presentation" class="">
							<a href="#tab_content2" role="tab" id="domicilio-tab" data-toggle="tab" aria-expanded="false">Domicilio</a>
                        </li>
					</ul>
					<div id="myTabContent" class="tab-content">
						@include('flash::errors')
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="identificacion-tab">			
							@include('paciente.fields')
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="domicilio-tab">

							@include('paciente.domicilio.fields')

                        </div>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
{{ Form::close() }}
<!-- /page content -->


<!-- footer content -->
<footer>
	<div class="pull-right">
		FOOTER
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
@endsection

@push('scripts')
<script>
	var url_base = "{{asset('/')}}";
</script>
<script src="{{ asset("js/paciente.js") }}"></script>
<script src="{{ asset("js/functions.js") }}"></script>
@endpush