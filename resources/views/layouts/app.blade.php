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
            <h1> Laravel - CRUD operation [Change locale in url]</h1>
            <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/' . session('locale')) }}"><span class="glyphicon"></span> Home</a>
                </li>
                <li class="active">
                    <a href="{{ url('/'.session('locale').'/post')  }}"><span class="glyphicon"></span> Post</a>
                </li>
                <li>
                    <form id="changeLocaleForm" name="changeLocale" action="{!! route('languagechooser') !!}" method  ="post">
                        <select class="form-control" name="language">
                                @foreach (config('app.locales') as $key => $language)
                                       <option value="{{ $key  }}" @if ($key === Session::get('locale')) selected="selected" @endif> {{ $language }}</option>
                                    @endforeach
                           </select>
                        {!!Form::token()!!}
                        </form>
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
    </div>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>