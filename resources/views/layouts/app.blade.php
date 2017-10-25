<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- bootstrap minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
@section('sidebar')
    <div class="panel">
        <div class="panel-heading">
            <h1> Laravel - CRUD operation [Change locale in url]</h1>
            <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/' . session('locale')) }}"><span class="glyphicon"></span> Home</a>
                </li>
                <li class="active">
                    <a href="{{ url('/'.session('locale').'/post')  }}"><span class="glyphicon"></span> Post</a>
                </li>
                @foreach (config('app.locales') as $key => $language)
                    <li>

                        <a href="
                                @if ($key != Session::get('locale'))
                                    {{ str_replace('/'.Session::get('locale'), '/'.$key, Request::url()) }}
                                @else
                                    {{ Request::url() }}
                                @endif
                                ">
                            {{ $language }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
