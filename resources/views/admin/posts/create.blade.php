@extends('layouts.admin')

@section('content')
<div class="container col-md-8">
    <h2>Create Post</h2>    
    @include('includes.form_error')
    @include('includes.flash')
    {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Post Title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',[''=>'Choose Catetory'] + $cat,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Photo') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Description:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control','rows'=>5]) !!}
    </div>
   
    <div class="form-group">
        {!! Form::submit('Submit Post',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection