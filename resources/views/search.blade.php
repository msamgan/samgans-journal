@extends('layouts.master')

@section('title', 'Search | ' . request()->get('q'))

@section('metaDescription', 'blog list Search')

@section('content')
    <div class="row mb-2 mt-2">
        @foreach($posts as $post)
            <div class="col-md-12 zoom">
                <div class="row no-gutters border rounded  mb-4 shadow-sm">
                    <div class="col p-3 d-flex flex-column position-static">
                        @if ($post->featured_image)
                            <img alt="{{ $post->title }}" class="p-4 blog-img-height"
                                 src="{{ config('app.url') . $post->featured_image }}">
                        @endif
                        <div class="mb-1 text-muted">{{ formatDate($post->publish_date) }}</div>
                        <p class="d-inline-block mb-2 text-primary">
                            {!! comaSeparateTags($post->tags) !!}
                        </p>
                        <a href="{{ url($post->slug) }}">
                            <h1 class="mb-2 listing-blog-title">{!! highlightWords($post->title, request()->get('q')) !!}</h1>
                        </a>
                        @if($post->excerpt)
                            <p class="card-text mb-auto pb-1">
                                {!! highlightWords($post->excerpt,  request()->get('q')) !!}
                            </p>
                        @endif
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
