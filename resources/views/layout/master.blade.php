<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.head')
<body>
@include('layout.nav')
<div class="container">
    @yield('content')
</div>
</body>
</html>
