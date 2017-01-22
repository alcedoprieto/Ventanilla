<b>
	<div class="form-group @if($errors->has('desclasificacion')) has-error @endif label-floating">
	    <label for="desclasificacion" class="control-label">Clasificación:</label>
	    {!! Form::text('desclasificacion', null,['class'=>'form-control', 'id'=>'desclasificacion']) !!}
	    <span class="help-block">Clasifica los tipos de solicitudes
		    @if($errors->has('desclasificacion'))
		       	<code>{{$errors->first('desclasificacion')}}</code>

		    @endif
		</span>
	    
  </div>
</b>