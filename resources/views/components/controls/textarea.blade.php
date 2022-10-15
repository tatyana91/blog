@props([
    'name',
    'label',
    'item',
    'value' => ''
])

<label for="{{ $name }}" class="form-label">{{ $label }}</label>
<textarea class="form-control @error($name) is-invalid @enderror"
          name="{{ $name }}"
          id="{{ $name }}"
          rows="3">{{ old($name) ?? ($item[$name] ?? '') }}</textarea>
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
