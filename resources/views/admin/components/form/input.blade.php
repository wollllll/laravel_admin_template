<div class="form-group has-error">
    @include('admin.components.form._label', ['label' => $label, 'name' => $name, 'required' => $required ?? false])
    <input type="{{ $type ?? 'text' }}"
           id="{{ $name }}"
           class="form-control"
           value="{{ $value ?? '' }}"
           @if($required ?? false) required @endif
    />
</div>
