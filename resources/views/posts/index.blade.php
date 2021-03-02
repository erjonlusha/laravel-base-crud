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
                    <td>
                        <a href="{{route('posts.show', ['post'=> $post->id])}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{route('posts.edit', ['post'=> $post->id])}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                        
                            


                        <form action="{{route('posts.destroy', ['post'=> $post->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection