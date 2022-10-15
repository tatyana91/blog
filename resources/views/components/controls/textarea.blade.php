@props([
    'name',
    'label',
    'value' => ''
])

<label for="{{ $name }}" class="form-label">{{ $label }}</label>
<textarea class="form-control" name="{{ $name }}" id="{{ $name }}" rows="3">{{ $value }}</textarea>
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
