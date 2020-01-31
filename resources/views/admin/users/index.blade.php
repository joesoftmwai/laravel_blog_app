@extends('layouts.admin')

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title">Users</h2>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Created</th>
                      <th>Updated</th>
                  </tr>
                </thead>
                <tbody>
                 @if($users)
                     @foreach($users as $user)
                         <tr>
                             <td>{{$user->id}}</td>
                             <td>{{$user->name}}</td>
                             <td>{{$user->email}}</td>
                             <td>{{$user->role->name}}</td>
                             <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                             <td>{{$user->created_at}}</td>
                             <td>{{$user->updated_at}}</td>
                         </tr>
                         @endforeach
                     @endif


                </tbody>
              </table>
        </div>
    </div>







    @endsection