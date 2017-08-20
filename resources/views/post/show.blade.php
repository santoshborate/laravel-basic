@extends('layouts.app')
@section('title', 'Show Post')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            {{ __('post.Read Post') }} <a href="{{ route('post.index') }}" class="label label-primary pull-right">{{ __('post.Back') }}</a>
        </div>
        <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('post.Title') }}:</strong>
                            {{ $post->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('post.Content') }}:</strong>
                            {{ $post->content }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('post.Published On') }}:</strong>
                            {{ $post->created_at }}
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection