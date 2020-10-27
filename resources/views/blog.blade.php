@extends('layouts.master')

@section('title', 'Home')

@section('content')

    @if (isset($authorSamgan))
        <div class="row">
            <div class="col-md-12">
                <div class="row no-gutters border rounded mb-4">
                    <div class="col p-4 d-flex flex-column position-static">
                        {!! $authorSamgan->bio  !!}
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="https://secure.gravatar.com/avatar/c2acbea3e046c1b8cf7358d8526eda63?s=240"
                             alt="mohd-samgan-khan">
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row mb-2 mt-2">
        @foreach($posts as $post)
            <div class="col-md-12 zoom">
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
