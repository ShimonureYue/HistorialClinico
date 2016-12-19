<div class="table-responsive">
	<table class="table table-striped table-hover" id="pacientes-table">
		<thead>
        <th>Nombre</th>
        <th>A. Paterno</th>
        <th>A. Materno</th>
        <th>CURP</th>
        <th>Género</th>

        <th colspan="3">Acciones</th>
		</thead>
		<tbody>
			@foreach($pacientes as $paciente)
			<tr>
				<td>{!! $paciente->nombre !!}</td>
				<td>{!! $paciente->a_paterno !!}</td>
				<td>{!! $paciente->a_materno !!}</td>
				<td>{!! $paciente->curp !!}</td>
				<td>{!! $paciente->genero !!}</td>
				<td>
					{!! Form::open(['route' => ['paciente.destroy', $paciente->id], 'method' => 'delete']) !!}
					<div class='btn-group'>
						<a href="{!! route('paciente.show', [$paciente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
						<a href="{!! route('paciente.edit', [$paciente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
						<a onclick="pruebaAjax({{ $paciente->id }})" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-trash"></i></a>
						{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
					</div>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="col-xs-12 text-center">
    <div class="pagination"> {{ $pacientes->links() }} </div>
</div>

