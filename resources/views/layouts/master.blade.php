<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel学院 | @yield('title', '首页')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footerScripts')
        <script src="{{ asset('js/app.js') }}"></script>
    @show
</body>
</html>