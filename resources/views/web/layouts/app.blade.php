<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon">
    <title>{{$title ?? config('app.name') }}</title>
    @include('global.vite')
    @include('global.styles')
    @yield('styles')
    @yield('opengraph')
</head>
<body>
    @yield('content')
    @include('global.scripts')
    @yield('scripts')
</body>
</html>
