@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))
        <div class="alert alert-success">{{session('deleted_user')}}</div>
        @endif

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Users</h2>
        </div>
        <div class="table-responsive">
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Created</th>
                      <th>Updated</th>
                      <th>Actions</th>

                  </tr>
                </thead>
                <tbody>
                 @if($users)
                     @foreach($users as $user)
                         <tr>
                             <td>{{$user->id}}</td>
                             <td><img src="{{$user->photo ? $user->photo->file : 'No user photo'}} " alt="" height="50" width="90">
                                </td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->role->name}}</td>
                             <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                             <td>{{$user->created_at->diffForHumans()}}</td>
                             <td>{{$user->updated_at->diffForHumans()}}</td>
                             <td>
                                 <div class="btn btn-group">
                                     <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                     <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                 </div>
                             </td>
                         </tr>
                         @endforeach
                     @endif


                </tbody>
              </table>

        </div>
        </div>
    </div>

    @endsection