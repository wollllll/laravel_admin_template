<div class="form-group">
    @include('admin.components.form._label', ['label' => $label, 'name' => $for, 'required' => $required ?? false])
    {{ $slot }}
</div>
