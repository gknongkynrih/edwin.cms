@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
   <table class="table">
       <thead>
        <tr><th>ID</th><td>Name</td><td>Email</td><td>Role</td><td>Active</td><td>Created Date</td></tr>
       </thead>
    <tbody>
        @if($users)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->role->name}}</td>
                    <td>{{ $user->is_active == 1 ? 'Active':'Inactive'}}</td>
                    <td>{{ $user->created_at->diffForHumans() }} </td>
                </tr>
            @endforeach

        @endif
    </tbody>
   </table>

@endsection
