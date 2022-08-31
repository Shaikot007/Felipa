<!doctype html>
<html lang="en">

<head>
    @include('front.includes.meta')
    @include('front.includes.style')
    <title>Felipa - @yield('title')</title>
</head>

<body>
    @include('front.includes.header')
    @yield('body')
    @include('front.includes.footer')
    <div id="backtotop"><i class="arrow_up"></i></div>
    @include('front.includes.script')
</body>

</html>
