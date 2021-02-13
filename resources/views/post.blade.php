@extends('layouts.master')

@section('title', 'Home')

@section('metaDescription', $post->meta['meta_description'])

@section('metaTags')
    <meta name="twitter:title" content="{{ $post->meta['twitter_title'] }}">
    <meta name="og:title" content="{{ $post->meta['opengraph_title'] }}">
    <meta name="twitter:card" content="{{ config('app.url') . $post->meta['twitter_image'] }}">
    <meta name="twitter:description" content="{{ $post->meta['twitter_description'] }}">
    <meta name="twitter:image" content="{{ config('app.url') . $post->meta['twitter_image'] }}">
    <meta name="og:image" content="{{ config('app.url') . $post->meta['opengraph_image'] }}">
@stop

@section('content')
    <div class="row mb-2 mt-5">
        <div class="col-md-12 blog-main">
            <h6 class="pb-4 mb-4 border-bottom">
                {!! comaSeparateTags($post->tags)  !!}
            </h6>
            <div class="blog-post">
                <h1 class="blog-post-title">{{ $post->title }}</h1>
                <p class="blog-post-meta mt-2">{{ formatDate($post->publish_date) }} by
                    <a href="{{ url('page/about') }}">
                        {{ $post->author->name }}
                    </a>
                </p>

                {!! $post->body  !!}

                <div id="graphcomment"></div>
            </div>
        </div>
    </div>
@stop

@push('script')
    @if(config('app.env') === 'production')
    <script type="text/javascript">

        /* - - - CONFIGURATION VARIABLES - - - */

        // make sure the id is yours
        window.gc_params = {
            graphcomment_id: 'Personal-Blog-codebysamgan',

            // if your website has a fixed header, indicate it's height in pixels
            fixed_header_height: 0,
        };

        /* - - - DON'T EDIT BELOW THIS LINE - - - */


        (function () {
            var gc = document.createElement('script');
            gc.type = 'text/javascript';
            gc.async = true;
            gc.src = 'https://graphcomment.com/js/integration.js?' + Math.round(Math.random() * 1e8);
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
        })();

    </script>
    @endif
@endpush
