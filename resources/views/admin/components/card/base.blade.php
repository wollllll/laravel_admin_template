@include('admin.components.card._title', ['title' => $pageTitle])
<div class="card">
    @if($header)
        @include('admin.components.card._header', ['slot' => $header])
    @endif
    @if($body)
        @include('admin.components.card._body', ['slot' => $body])
    @endif
    @if($footer)
        @include('admin.components.card._footer', ['slot' => $footer])
    @endif
</div>
