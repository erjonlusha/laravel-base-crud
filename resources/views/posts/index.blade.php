@extends('layouts.app')

@section('content')
<h1>Posts</h1>
<a href="{{ route('posts.create')}}" class="btn">Create new post</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td scope="row"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>View | Edit | Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection