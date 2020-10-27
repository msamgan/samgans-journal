@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row mb-2 mt-5">
        @foreach($posts as $post)
            <div class="col-md-12">
                <div class="row no-gutters border rounded  mb-4 shadow-sm">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <a href="{{ url($post->slug) }}">
                            <h3 class="mb-2">{{ $post->title }}</h3>
                        </a>
                        <div class="mb-1 text-muted">Nov 12, 2020</div>
                        <p class="card-text mb-auto pb-1">
                            {{ $post->excerpt }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="m-auto">
            {{ $posts->links() }}
        </div>
    </div>
@stop
