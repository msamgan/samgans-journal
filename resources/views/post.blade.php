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
            </div>
        </div>
    </div>
@stop
