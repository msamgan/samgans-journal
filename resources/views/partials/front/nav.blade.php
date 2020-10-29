<div class="py-1 mb-5">
    <nav class="nav d-flex">
        @foreach(\App\Models\Tag::uniqueTags() as $tag)
            <a class="p-2 text-muted" href="{{ url('tag/' . $tag->slug) }}">{{ '#' . $tag->name }}</a>
        @endforeach
    </nav>
</div>
