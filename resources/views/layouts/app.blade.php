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
                <li class="active"><a href="{{ url('/') }}"><span class="glyphicon"></span> Home</a></li>
                <li class="active"><a href="{{ url('/post') }}"><span class="glyphicon"></span> Post</a></li>
            </ul>
        </div>
    </div>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>