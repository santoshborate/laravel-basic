@extends('layouts.app')
@section('title', 'Post List')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Dashboard
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    Welcome to laravel dashboard

                    <p>
                        @if( Session::has('locale') )
                            Locale: {{ Session::get('locale') }}
                        @else
                            No session locale set
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection