<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Samgan's Journal - @yield('title')</title>
    <!-- Custom styles for this template -->
    {{--<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">--}}
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <script async src="https://cse.google.com/cse.js?cx=0b2263754f91e5d8f"></script>
</head>
<body>
<div class="container-fluid container-width mt-4">
    @include('partials.front.header')

    @include('partials.front.nav')

    @yield('content')
</div>

@include('partials.front.footer')
@stack('script')
</body>
</html>
