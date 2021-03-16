@if($title ?? false)
    <div>
        <h3>{{ $title }}</h3>
    </div>
@endif
<section class="card">
    @if($header)
        @include('admin.components.card._header', ['slot' => $header])
    @endif
    @if($body)
        @include('admin.components.card._body', ['slot' => $body])
    @endif
    @if($footer)
        @include('admin.components.card._footer', ['slot' => $footer])
    @endif
</section>
