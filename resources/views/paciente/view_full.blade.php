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
				<div class="col-md-6 col-xs-6 text-left">
					<h2>Paciente</h2>
				</div>
				<div class="col-md-6 col-xs-6 text-right">
					<a href="{!! route('paciente.index') !!}" class="btn btn-danger btn-sm">Cancelar</a>
					{!! Form::submit('Guardar', ['class' => 'btn btn-success btn-sm']) !!}
				</div>

			</div>
			@include('flash::message')
			@include('includes/flashajax')
			<div class="x_content">


				<div class="row">

				</div>
				<div class="" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs bar_tabs responsive" role="tablist">
                        <li role="presentation" class="active">
							<a href="#tab_content1" id="identificacion-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos personales</a>
                        </li>
                        <li role="presentation" class="">
							<a href="#tab_content2" role="tab" id="domicilio-tab" data-toggle="tab" aria-expanded="false">Domicilio</a>
                        </li>
						<li role="presentation" class="">
							<a href="#tab_content3" role="tab" id="no_patologicos-tab" data-toggle="tab" aria-expanded="false">Ant. no patológicos</a>
                        </li>
						<li role="presentation" class="">
							<a href="#tab_content4" role="tab" id="patologicos-tab" data-toggle="tab" aria-expanded="false">Ant. patológicos</a>
                        </li>
					</ul>
					<div id="myTabContent" class="tab-content responsive">
						@include('flash::errors')
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="identificacion-tab">			
							@include('paciente.fields')
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="domicilio-tab">
							@include('paciente.domicilio.fields')
                        </div>
						
						<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="no_patologicos-tab">
							@include('paciente.no_patologicos.fields')
                        </div>
						
						<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="patologicos-tab">
							@include('paciente.patologicos.fields')
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
<script src="{{ asset("js/responsive-tabs.js") }}"></script>

<script type="text/javascript">
  (function($) {
      fakewaffle.responsiveTabs(['xs', 'sm']);
  })(jQuery);
</script>
<script>
	$(":input").prop("disabled", true);
	$("input[value='Guardar']").css('display','none');
</script>
@endpush