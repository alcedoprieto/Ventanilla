<b>
	<div class="form-group @if($errors->has('tiposolicitud')) has-error @endif label-floating">
	    <label for="tiposolicitud" class="control-label">Clasificación:</label>
	    {!! Form::text('tiposolicitud', null,['class'=>'form-control', 'id'=>'tiposolicitud','required']) !!}
	    <span class="help-block">Clasifica los tipos de solicitudes
		    @if($errors->has('tiposolicitud'))
		       	<code>{{$errors->first('tiposolicitud')}}</code>

		    @endif
		</span>
	</div>


	<div class="form-group col-md-offset-2">
		<label for="animal" class="col-md-2 control-label">Clasificación de Solicitud</label>

		<div class="col-md-10">
			{!! Form::select('animal',$ClasSol,null,['id'=>'animal','class'=>'form-control' ]); !!}
		</div>
	</div>


</b>