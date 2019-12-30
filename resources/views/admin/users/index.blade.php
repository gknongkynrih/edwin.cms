@extends('layouts.admin')

@section('content')
    @include('includes.flash')
    <h1>Users</h1>
   <table class="table">
       <thead>
        <tr><th>Photo</th><th>ID</th><td>Name</td><td>Email</td><td>Role</td><td>Active</td><td>Created Date</td></tr>
       </thead>
    <tbody>
        @if($users)
            @foreach ($users as $user)
                <tr>
                    <td><img height="100" width="100" src="{{ $user->photo ? $user->photo->path : '/images/blank.png'}}" /></td>
                    <td>{{ $user->id}}</td>
                    <td><a href="{{ route('user.edit',$user->id) }}">{{ $user->name}}</a></td>
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
