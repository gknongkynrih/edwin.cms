@extends('layouts.admin')

@section('content')
<div class="container col-md-8">
    <h2>Edit Post</h2>    
    @include('includes.form_error')
    @include('includes.flash')
    <div class="row">
    <div class="col-sm-2">
        <img src="{{ $post->photo_id ? $post->photo->path : '/images/blank.png' }}" height="100" width="100" />
    </div>
    <div class="col-sm-10">

    {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostController@update',$post->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Post Title']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',$cat,null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Edit Post',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','action'=>['AdminPostController@destroy',$post->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
    </div></div>
</div>
@endsection