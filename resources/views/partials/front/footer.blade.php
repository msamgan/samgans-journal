<footer class="blog-footer">
    <div class="nav-scroller container">
        <nav class="nav d-flex">
            @foreach(\App\Models\Tag::uniqueTags() as $tag)
                <a class="p-2 text-muted" href="{{ url('tag/' . $tag->slug) }}">{{ '#' . $tag->name }}</a>
            @endforeach
        </nav>
    </div>
    <div class="container-fluid w-50">
        <div class="gcse-search"></div>
    </div>
    <p>
        Created with Love by <a href="https://github.com/msamgan" target="_blank">msamgan</a>
        <br>
        This site was built using <a href="https://github.com/themsaid/wink" target="_blank">Wink</a>
    </p>
</footer>
