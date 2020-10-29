@extends('layouts.master')

@section('title', 'Home')

@section('content')

    @if (isset($authorSamgan))
        <div class="row author-box">
            <div class="col-md-12">
                <div class="row mb-3">
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://secure.gravatar.com/avatar/c2acbea3e046c1b8cf7358d8526eda63?s=150"
                             class="rounded-circle author-img"
                             alt="mohammed-samgan-khan">
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        {!! $authorSamgan->bio  !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row mb-2 mt-2">
        @foreach($posts as $post)
            <div class="col-md-12 zoom">
                <div class="row no-gutters border rounded  mb-4 shadow-sm">

                    <div class="col p-3 d-flex flex-column position-static">
                        @if ($post->featured_image)
                            <img alt="" class="p-4" src="{{ config('app.url') . '/' . $post->featured_image }}">
                        @endif
                        <div class="mb-1 text-muted">{{ formatDate($post->publish_date) }}</div>
                        <p class="d-inline-block mb-2 text-primary">
                            {!! comaSeparateTags($post->tags) !!}
                        </p>
                        <a href="{{ url($post->slug) }}">
                            <h3 class="mb-2 listing-blog-title">{{ $post->title }}</h3>
                        </a>
                        <p class="card-text mb-auto pb-1">
                            {{ $post->excerpt }}
                        </p>
                        <div class="mb-1 text-muted">Reading time: {{ readingTime($post->body) }}</div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="m-auto">
            @if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $posts->links() }}
            @endif
        </div>
    </div>
@stop
