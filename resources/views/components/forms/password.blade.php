<label for="{{ $id }}" class="{{ isset($isRequired) && $isRequired == true ? 'required' : '' }}">{{ $label }}</label>
<div class="row form-group">
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <div class="col-3">
        <div class="password-input">
            <i style="font-size: 1rem;" class="fa fa-key text-dark ps-2 mt-2"></i>
            <input 
                type="password"
                class="form-control"
                placeholder="Input Password"
                name="password"
            >
        </div>
    </div>
    <div class="col-3">
        <div class="password-input">
            <i style="font-size: 1rem;" class="fa fa-key text-dark ps-2 mt-2"></i>
            <input 
                type="password"
                class="form-control"
                placeholder="Confirm Password"
                name="password_confirm"
            >
        </div>
    </div>
</div>

@error($name)
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
@enderror