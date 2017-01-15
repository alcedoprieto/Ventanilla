@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar</div>
                <div class="panel-body">
                	<h2>Clasificanción de Solicitudes</h2>

					{!!Form::open(['route'=>'clasificacionsolicitud.store'])!!}

						<div class="form-group">
							@include('clasificacionsolicitud.partials.form')
							{!!Form::button('Guardar',['type'=>'submit','class'=>'btn btn-raised btn-primary'])!!}
						</div>
					{!!Form::close()!!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection