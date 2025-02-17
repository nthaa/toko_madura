<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style') 
</head>
<body>
@yield('header')
@yield('content')
@yield('footer')
@yield('script')
</body>
</html>