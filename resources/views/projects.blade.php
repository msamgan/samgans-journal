@extends('layouts.master')

@section('title', 'Projects')

@section('metaDescription', 'Project list')

@section('content')
    <div class="row mb-2 mt-2">
        @foreach($projects as $project)
            <div class="col-md-6">
                <div class="row no-gutters border rounded  mb-4 shadow-sm">
                    <div class="col p-3 d-flex flex-column position-static min-h-460">
                        @if ($project->logo_image)
                            <img alt="{{ $project->name }}" class="project-img-height"
                                 src="{{ $project->logo_image }}">
                        @endif
                        {{--<div class="mb-1 text-muted">{{ formatDate($project->publish_date) }}</div>
                        <p class="d-inline-block mb-2 text-primary">
                            {!! comaSeparateTags($project->tags) !!}
                        </p>--}}
                        <div class="">
                            <a href="#{{--{{ url('project/' . $project->slug . '/details') }}--}}">
                                <h1 class="mb-2 listing-blog-title">{{ ucwords($project->name) }}</h1>
                            </a>
                            @if($project->excerpt)
                                <p class="card-text mb-auto pb-1">
                                    {{ $project->excerpt }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="m-auto">
            @if($projects instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $projects->links() }}
            @endif
        </div>
    </div>
@stop
