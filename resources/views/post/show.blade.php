@extends('layouts.app')
@section('title', 'Show Post')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Read Post <a href="{{ url('/post') }}" class="label label-primary pull-right">Back</a>
        </div>
        <div class="panel-body">
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
        </div>
    </div>
@endsection