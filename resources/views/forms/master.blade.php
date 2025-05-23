<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('formsassets/css/bootstrap.min.css') }}">
    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body>

<div class="container">
@yield('content')
</div>



    <script src="{{ asset('formsassets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('js')
</body>
</html>
