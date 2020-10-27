@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="row mb-2 mt-5">
        @foreach($posts as $post)
            <div class="col-md-12">
                <div class="row no-gutters border rounded  mb-4 shadow-sm">
                    <div class="col p-4 d-flex flex-column position-static">
                        <p class="d-inline-block mb-2 text-primary">
                            {!! comaSeparateTags($post->tags) !!}
                        </p>
                        <a href="{{ url($post->slug) }}">
                            <h3 class="mb-2">{{ $post->title }}</h3>
                        </a>
                        <div class="mb-1 text-muted">{{ formatDate($post->created_at) }}</div>
                        <p class="card-text mb-auto pb-1">
                            {{ $post->excerpt }}
                        </p>
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
