@extends('layouts.admin')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Update user</h2>
        </div>
        <div class="panel-body">

            <div class="col-md-3">
                <img src="{{$user->photo->file}}" class="img-responsive img-rounded">
            </div>

            <div class="col-md-9">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id', [''=>'Choose role'] + $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status') !!}
                {!! Form::select('is_active', array(0 => 'Not Active', 1 => 'Active'), null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ["class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update user', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}


            @include('includes.form_errors')
            </div>



        </div>
    </div>
@endsection