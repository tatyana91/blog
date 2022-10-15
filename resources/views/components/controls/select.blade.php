@props([
    'name',
    'label',
    'options',
    'item',
    'value' => ''
])

<label for="{{ $name }}" class="form-label">{{ $label }}</label>
<select class="form-select @error($name) is-invalid @enderror"
        aria-label="{{ $label }}" name="{{ $name }}">
    <option value="" readonly>-</option>
    @foreach($options as $id => $title)
        <option value="{{ $id }}"
            {{ (old($name) ?? ($item[$name] ?? '')) == $id ? 'selected' : '' }}>{{ $title }}</option>
    @endforeach
</select>
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
