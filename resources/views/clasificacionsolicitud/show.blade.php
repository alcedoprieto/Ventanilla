@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar</div>
                <div class="panel-body">
                	<h2>Clasificanción de Solicitudes</h2>

					{!!Form::model($ClasSol,['route'=>['clasificacionsolicitud.update', $ClasSol->id ],'method'=>'PUT'])!!}

							@include('clasificacionsolicitud.partials.form')
                            {!!Form::button('Modificar',['type'=>'submit','class'=>'btn btn-raised btn-warning'])!!}
                        
                    {!!Form::close()!!}
                
                        
                    {!!Form::open(['route'=>['clasificacionsolicitud.destroy',$ClasSol->id],'method'=>'DELETE'])!!}

							{!!Form::button('Eliminar',['type'=>'submit','class'=>'btn btn-raised btn-danger'])!!}

                    {!!Form::close()!!}
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection