@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row mb-2 mt-5">
        <div class="col-md-12 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-meta mt-2">January 1, 2014 by <a href="#">{{ $post->author->name }}</a></p>

                {!! $post->body  !!}
            </div>
        </div>
    </div>
@stop
