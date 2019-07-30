<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('style')
    <link rel="stylesheet" href="css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <script src="https://kit.fontawesome.com/85cdb436ec.js"></script>
    @yield('body')
    @yield('script')
</body>
</html>