@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row author-box">
        <div class="col-md-12">
            <div class="row mb-3">
                <div class="col-auto d-none d-lg-block">
                    <img src="https://secure.gravatar.com/avatar/c2acbea3e046c1b8cf7358d8526eda63?s=150"
                         class="rounded-circle author-img"
                         alt="mohammed-samgan-khan">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    {!! $author->bio  !!}
                </div>
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
