<div class="form-group form-check">
    <input type="checkbox" class="form-check-input @error($name) is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" {{ old($name, $value ?? false) ? 'checked' : '' }}>
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>