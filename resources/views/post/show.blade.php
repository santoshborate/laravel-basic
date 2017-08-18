@extends('layouts.app')
@section('title', 'Show Post')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Read Post</h2>
            </div>
            <div class="pull-right">
                <a href="{{ url('/post') }}" class="btn btn-info pull-right"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                {{ $post->content }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Published On:</strong>
                {{ $post->created_at }}
            </div>
        </div>
    </div>
@endsection