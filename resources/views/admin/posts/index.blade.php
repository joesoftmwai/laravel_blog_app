@extends('layouts.admin')

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Posts</h2>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                     <th>Id</th>
                      <th>Photo</th>
                     <th>User</th>
                     <th>Category</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Created</th>
                      <th>Updated</th>
                  </tr>
                </thead>
                <tbody>
                  @if($posts)
                      @foreach($posts as $post)
                          <tr>
                              <td>{{$post->id}}</td>
                              <td>
                                  <img src="{{$post->photo ? $post->photo->file : 'http://placeholder.it'}}" alt="" height="60" width="100">
                              </td>
                              <td>{{$post->user->name}}</td>
                              <td>{{$post->category_id}}</td>
                              <td>{{$post->title}}</td>
                              <td>{{$post->body}}</td>
                              <td>{{$post->created_at->diffForHumans()}}</td>
                              <td>{{$post->updated_at->diffForHumans()}}</td>
                          </tr>
                          @endforeach
                      @endif
                </tbody>
              </table>
        </div>
    </div>

    @endsection