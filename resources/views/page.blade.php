@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row mb-2 mt-5">
        <div class="col-md-12 blog-main">
            <div class="blog-post">
                <h1 class="blog-post-title">{{ $page->title }}</h1>
                <p class="blog-post-meta mt-2">Updated On: {{ formatDate($page->updated_at) }}</p>
                <hr>
                {!! $page->body  !!}
            </div>
        </div>
    </div>
@stop
