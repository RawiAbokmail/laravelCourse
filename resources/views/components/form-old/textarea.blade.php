@props(['name' => '', 'placeholder' => '', 'rows' => 10])

{{-- Textarea component for forms --}}
{{-- @param string $message The name of the textarea --}}
{{-- @param string $placeholder The placeholder text for the textarea --}}
{{-- @param int $cols The number of columns for the textarea --}}

{{-- Textarea with floating label and validation feedback --}}
<div class="form-floating mb-3">
    <textarea style="height: unset" class="form-control" id="{{ $name }}" type="text" placeholder="{{ $placeholder }}" rows="{{ $rows }}" style="height: 10rem" data-sb-validations="required"></textarea>
    <label for="message">{{ $placeholder }}</label>
    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
</div>
