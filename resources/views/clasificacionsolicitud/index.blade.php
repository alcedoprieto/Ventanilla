@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Ingresar</div>
	                <div class="panel-body">

						<h2>Listado de Clasificaciones</h2>

						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Id</th><th>Descripción</th><th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($ClasSol as $Clas)
									<tr>
										<td width="60">{{ $Clas->id }}</td>
										<td>{{ $Clas->desclasificacion }}</td>
										<td  width="30">
										<a href="clasificacionsolicitud/{{$Clas->id}}" class="glyphicon glyphicon-wrench" aria-hidden="true"></a>														</td>
					
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $ClasSol->render() !!}
						<a href="{{ url('/clasificacionsolicitud/create') }}" class="btn btn-raised btn-primary">Nueva<div class="ripple-container"></div></a>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection