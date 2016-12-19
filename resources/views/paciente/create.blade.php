@extends('layouts.blank')

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
	<div class="row">

		<div class="x_panel">
			<div class="x_title">
				<h2>Paciente</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

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
							{{ Form::open(['url' => 'paciente','id' => 'form_paciente']) }}
							
							@include('paciente.fields')
							{{ Form::close() }}
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="domicilio-tab">
							{{ Form::open(['url' => 'domicilio.store','id' => 'ficha']) }}
							@include('paciente.domicilio.fields')
							{{ Form::close() }}
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
	var url_base="{{asset('/')}}";
</script>
<script src="{{ asset("js/paciente.js") }}"></script>
@endpush