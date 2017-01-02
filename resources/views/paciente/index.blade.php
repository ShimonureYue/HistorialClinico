@extends('layouts.blank')

@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
	<div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
	<div class="row">
		<div class="col-xs-12 form-group text-right">
			<a href="{{ route('paciente.create_update') }}" class="btn btn-success">Nuevo</a>
		</div>
	</div>
	<div class="row">
		@include('paciente.table')
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

