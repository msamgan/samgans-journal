<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4">
            <a class="blog-header-logo text-dark" href="{{ route('listing') }}">Samgan's Journal</a>
        </div>
        <div class="col-4 text-center">
            <div class="gcse-search"></div>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @foreach(\App\Models\Page::all() as $page)
                <a class="ml-4" href="{{ url('page/' . $page->slug) }}">{{ ucwords($page->title) }}</a>
            @endforeach
        </div>
    </div>
</header>
