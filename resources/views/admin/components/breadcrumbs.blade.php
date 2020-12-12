<nav>
    <ol class="breadcrumb mb-0 py-2 bg-transparent">
        @foreach($pages as $page)
            @if($loop->last)
                <li class="breadcrumb-item active">{{ Arr::get($page, 'title') }}</li>
            @else
                <li class="breadcrumb-item">
                    <a href="{{ Arr::get($page, 'url') }}">{{ Arr::get($page, 'title') }}</a>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
