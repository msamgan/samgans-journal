<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('metaDescription')">
    <meta name="author" content="msamgan">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">

    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    @yield('metaTags')
    <meta name="og:site_name" content="Code By Samgan">
    <meta name="twitter:site" content="@msamgank">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="en_US">

    <title>Samgan's Journal - @yield('title')</title>

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/styles/default.min.css">
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    @if(config('app.env') === 'production')
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107487964-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'UA-107487964-1');
        </script>
    @endif
</head>
<body>
<div class="container-fluid container-width mt-4">
    @include('partials.front.header')

    @include('partials.front.nav')

    @yield('content')
</div>

@include('partials.front.footer')

@stack('script')

@if(config('app.env') === 'production')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f9c7c9924fb2fd5"></script>
@endif
</body>
</html>
