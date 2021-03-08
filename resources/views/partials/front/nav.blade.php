<div class="py-1 mb-2">
    <nav class="nav d-flex">
        @foreach(\App\Models\Tag::uniqueTags() as $tag)
            <a class="p-2 text-muted" href="{{ url('tag/' . $tag->slug) }}">{{ '#' . $tag->name }}</a>
        @endforeach
    </nav>
</div>

<div class="row mb-5">
    <div class="col-md-12">
        <form action="{{ route('post.search') }}">
            <input class="form-control" name="q" placeholder="Search Journal..." value="{{ request()->get('q') }}">
        </form>
    </div>
</div>
