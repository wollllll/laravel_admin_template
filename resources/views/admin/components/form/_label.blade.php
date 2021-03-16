<div>
    <label for="{{ $name }}">
        {{ $label }}
        @if($required)
            <span class="badge badge-outline-danger">必須</span>
        @else
            <span class="badge badge-outline-success">任意</span>
        @endif
    </label>
    @include('admin.components.form._validate', ['errors' => $errors->get($name)])
</div>
