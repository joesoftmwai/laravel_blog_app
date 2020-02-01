@extends('layouts.admin')

@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Add post</h2>
        </div>
        <div class="panel-body">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', [''=>'Select Category']+$categories, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Description') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('create post', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

            @include('includes.form_errors');
        </div>
    </div>
    @stop