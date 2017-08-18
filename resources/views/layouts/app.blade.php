<html>
<head>
    <title>Blog - @yield('title')</title>

    <!-- bootstrap minified css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
@section('sidebar')
    <h1> Laravel - CRUD operation </h1>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>