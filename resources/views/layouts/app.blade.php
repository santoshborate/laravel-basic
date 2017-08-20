<html>
<head>
    <title>Blog - @yield('title')</title>

    <!-- bootstrap minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
@section('sidebar')
    <div class="panel">
        <div class="panel-heading">
            <h1> Laravel - CRUD operation [ localization with session ]</h1>
            <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/') }}"><span class="glyphicon"></span>Home</a>
                </li>
                <li class="active">
                    <a href="{{ url('/post') }}"><span class="glyphicon"></span>Post</a>
                </li>

                <li>
                    <form id="changeLocaleForm" name="changeLocale" action="{!! route('languagechooser') !!}" method  ="post">
                        <select class="form-control" name="language" onchange="document.getElementById('changeLocaleForm').submit()">
                            @foreach (config('app.locale_languages') as $key => $language)
                                <option value="{{ $key  }}" @if ($key === Session::get('locale')) selected="selected" @endif> {{ $language }}</option>
                            @endforeach
                        </select>
                        {!!Form::token()!!}
                    </form>
                </li>
            </ul>
        </div>
    </div>
@show

<div class="container">
    @yield('content')
</div>
    <script>

        </script>
</body>
</html>