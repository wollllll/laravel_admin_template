<nav>
    <ol class="breadcrumb">
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
