@props([
    'type' => 'text',
    'name' => '',
    'label',
    'placeholder' => '',
])
<div class="mb-3">
    @if(isset($label))
    <label class="form-label">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) }}">
    @error($name)
        <small class="text text-danger">
            {{ $message }}
        </small>

    @enderror
</div>
