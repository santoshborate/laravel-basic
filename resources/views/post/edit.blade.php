@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')

    <!-- Display Validation Errors -->
    @include('common.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            {{ __('post.Edit Post') }}
            <a href="{{ route('post.index') }}" class="label label-primary pull-right">{{ __('post.Back') }}</a>
        </div>
        <div class="panel-body">
            <form action="{{ url('post/' . $post->id) }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="control-label col-sm-2" >{{ __('post.Title') }}</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $post->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" >{{ __('post.Content') }}</label>
                    <div class="col-sm-10">
                        <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-default" value="{{ __('post.Update Post') }}" />
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection