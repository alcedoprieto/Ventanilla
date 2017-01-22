@extends('layouts.app')

@section('content')

	<h1>Listado de Clasificaciones</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Id</th><th>Descripción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($ClasSol as $Clas)
				<tr>
					<td>{{ $Clas->id }}</td><td>{{ $Clas->desclasificacion }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $ClasSol->render() !!}

@endsection