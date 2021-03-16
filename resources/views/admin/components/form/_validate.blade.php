@foreach(Arr::flatten($errors) as $error)
    <span class="help-block">{{ $error }}</span>
@endforeach
