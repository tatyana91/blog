@props([
    'name',
    'label',
    'type' => 'text',
    'value' => ''
])

<label for="{{ $name }}" class="form-label">{{ $label }}</label>
<input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}">
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
