@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    {!!Form::open(['url' => 'login', 'role'=>'form', 'class'=>'form-horizontal'])!!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"">
                            {!!Form::label('email','Email:', ['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::email('email', old('email'),['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!!Form::label('password','Password:',['class'=>'col-md-4 control-label'])!!}
                            <div class="col-md-6">
                                {!!Form::password('password',['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {!!Form::checkbox('remember')!!} Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!!Form::submit('Registro',['class'=>'btn btn-primary'])!!}

                                <a class="btn btn-link" href="{!! url('/password/reset') !!}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
