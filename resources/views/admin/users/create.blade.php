@extends('layouts.admin')

@section('content')
<div class="container col-md-8">
    <h2>Create User</h2>    
    @include('includes.form_error')
    @include('includes.flash')
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'User Name']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'someone@email.com']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id','Role') !!}
        {!! Form::select('role_id',[''=>'Select Role'] + $roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active', ['1' => 'Active', '0' => 'In Active'],'0',['class'=>'form-control']) !!}
    </div> 
    <div class="form-group">
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection