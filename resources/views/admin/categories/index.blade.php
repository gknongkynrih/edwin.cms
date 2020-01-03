@extends('layouts.admin')
@section('content')
<div class="row container">
<div class="col-sm-4">
    <h2>New Categories</h2>
    {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Category:') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Category Name']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit Category',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
<div class="col-sm-6">
    <h2>Existing Categories</h2>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>Category</td>
                <td>Created</td>
                <td>Updated</td>
            </tr>
        </thead>
        <tbody>
            @if ($cat)
                @foreach ($cat as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                       <td><a href ="{{ route('categories.edit',$c->id) }}"> {{ $c->name }} </a></td>
                        <td>{{ $c->created_at->diffForHumans() }}</td>
                        <td>{{ $c->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
</div>
</div>
@endsection