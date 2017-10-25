@extends('layouts.app')
@section('title', 'Post List')

@section('content')
    <a class="btn btn-success" href="{{ route('post.create') }}"> {{ __('post.Add Post') }} </a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>{{ __('post.Name') }}</th>
            <th>{{ __('post.Content') }}</th>
            <th>{{ __('post.Posted date') }}</th>
            <th>{{ __('post.Action') }}</th>
        </tr>
        @foreach ($posts as $key => $post)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->created_at }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('post.show', $post->id) }}">{{ __('post.Show') }}</a>
                <a class="btn btn-success" href="{{ route('post.edit', $post->id) }}">{{ __('post.Edit') }}</a>
                <a class="btn btn-danger" href="{{ url('/'.session('locale').'/post/delete', $post->id) }}"
                   onclick="return confirm('{{ __('post.Are you sure to delete') }}')">
                    {{ __('post.Delete') }}
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $posts->links('post.pagination') !!}
@endsection