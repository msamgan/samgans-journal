<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex">
        @foreach(\App\Models\Tag::uniqueTags() as $tag)
            <a class="p-2 text-muted" href="{{ url('tag/' . $tag->slug) }}">{{ ucwords($tag->name) }}</a>
        @endforeach
    </nav>
</div>
