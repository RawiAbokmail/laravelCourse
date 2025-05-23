
@props(['label', 'name', 'type' => 'text', 'placeholder' => ''])


        @if(isset($label))
            <label class="form-label">{{ $label }}</label>
        @endif
         <input type="{{ $type }}" class="form-control mt-1 @error($name) is-invalid @enderror" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ old($name) }}">
    @error($name)
    <small class="invalid-feedback">{{ $message }}</small>
    @enderror
