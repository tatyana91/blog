<label for="{{ $id }}" class="form-label">{{ $label }}</label>
<select class="form-select @error($name) is-invalid @enderror"
        aria-label="{{ $label }}" name="{{ $name }}" id="{{ $id }}">
    <option value="" readonly>-</option>
    @foreach($options as $optionId => $optionTitle)
        <option value="{{ $optionId }}"
            {{ $value == $optionId ? 'selected' : '' }}>{{ $optionTitle }}</option>
    @endforeach
</select>
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
