@extends('layouts.admin')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>Photo</td>
                 <td>Author</td>
                <td>Category</td>
                <td>Title</td>
                <td>Body</td>
                <td>Created</td>
                <td>Udated</td>
            </tr>
        </thead>
        <tbody>
            @if ($posts)
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td><img height="100" width="100"  src="{{ $post->photo_id? $post->photo->path : '/images/blank.png' }}" alt="" /></td>
                        <td><a href ="{{ route('posts.edit',$post->id) }}"> {{ $post->user->name }} </a></td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ Str::limit($post->body,7) }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>
@endsection