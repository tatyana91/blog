<label for="{{ $id }}" class="form-label">{{ $label }}</label>
<select class="form-select @error($name) is-invalid @enderror"
        aria-label="{{ $label }}" name="{{ $name }}" id="{{ $id }}">
    <option value="" disabled @selected($value == '')>-</option>
    @foreach($options as $optionId => $optionTitle)
        <option value="{{ $optionId }}" @selected($value == $optionId)>{{ $optionTitle }}</option>
    @endforeach
</select>
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
