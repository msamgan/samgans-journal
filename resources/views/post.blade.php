@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row mb-2 mt-5">
        <div class="col-md-12 blog-main">
            <h6 class="pb-4 mb-4 border-bottom">
                {!! comaSeparateTags($post->tags)  !!}
            </h6>
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-meta mt-2">{{ formatDate($post->created_at) }} by <a href="#">{{ $post->author->name }}</a></p>

                {!! $post->body  !!}

                <div id="graphcomment"></div>
            </div>
        </div>
    </div>
@stop

@push('script')
    <script type="text/javascript">

        /* - - - CONFIGURATION VARIABLES - - - */

        // make sure the id is yours
        window.gc_params = {
            graphcomment_id: 'Personal-Blog-codebysamgan',

            // if your website has a fixed header, indicate it's height in pixels
            fixed_header_height: 0,
        };

        /* - - - DON'T EDIT BELOW THIS LINE - - - */


        (function() {
            var gc = document.createElement('script'); gc.type = 'text/javascript'; gc.async = true;
            gc.src = 'https://graphcomment.com/js/integration.js?' + Math.round(Math.random() * 1e8);
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
        })();

    </script>
@endpush
