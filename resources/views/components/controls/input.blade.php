<label for="{{ $id }}" class="form-label">{{ $label }}</label>
<input type="text" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
       id="{{ $id }}" value="{{ $value }}">
@error($name) <div class="invalid-feedback">{{ $message }}</div> @enderror
