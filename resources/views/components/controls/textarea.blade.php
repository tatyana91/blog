<label for="{{ $id }}" class="form-label">{{ $label }}</label>
<textarea class="form-control @error($name) is-invalid @enderror"
          name="{{ $name }}" id="{{ $id }}" rows="3">{{ $value }}</textarea>
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
