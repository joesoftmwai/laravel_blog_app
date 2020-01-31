@extends('layouts.admin')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Add user</h2>
        </div>
        <div class="panel-body">



        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
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
                {!! Form::select('is_active', array(0 => 'Not Active', 1 => 'Active'), 0, ['class'=>'form-control']) !!}
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
               {!! Form::submit('create user', ['class'=>'btn btn-primary']) !!}
           </div>
        {!! Form::close() !!}

            @include('includes.form_errors')



        </div>
    </div>
    @endsection