@extends('layouts.admin')
@section('content')
    <h2>New Categories</h2>
    {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
   <div class="form-group">
            {!! Form::label('name','Category:') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Category Name']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit Category',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category',['class'=>'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}

@endsection