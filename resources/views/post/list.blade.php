@extends('layouts.app')
@section('title', 'Post List')

@section('content')
    <a class="btn btn-success" href="{{ url('/post/create') }} ">Add Post</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Content</th>
            <th>Posted date</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $key => $post)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->created_at }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('post.show', $post->id) }}">Show</a>
                <a class="btn btn-success" href="{{ route('post.edit', $post->id) }}">Edit</a>
                <a class="btn btn-danger" href="{{ url('post/delete', $post->id) }}" onclick="return confirm('Are you sure to delete?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $posts->render() !!}
@endsection