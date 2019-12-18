@extends('layouts.admin')

@section('content')
    <h2>Edit User</h2> 
    <div class="row">   
        @include('includes.form_error')
        @include('includes.flash')
    </div>
    <div class="row container">
    <div class="col-sm-3">
        <img height="100" width="80" src="{{ $user->photo ? $user->photo->path :'/images/blank.png'}}" class="img-responsive img-rounded" />
    </div>
    <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
    
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
            {!! Form::select('is_active', ['1' => 'Active', '0' => 'In Active'],null,['class'=>'form-control']) !!}
        </div> 
        <div class="form-group">
            {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit('Update User',['class'=>'btn btnprimary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
@endsection