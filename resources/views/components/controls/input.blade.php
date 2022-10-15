@props([
    'name',
    'label',
    'item',
    'type' => 'text'
])

<label for="{{ $name }}" class="form-label">{{ $label }}</label>
<input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
       id="{{ $name }}" value="{{ old($name) ?? (($item[$name] ?? '')) }}">
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
