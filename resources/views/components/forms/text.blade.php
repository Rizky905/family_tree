{{-- <div {{ $attributes->merge(['class' => 'form-group col-{{$column}}']) }}> --}}
<div class = 'form-group col-{{$column}}'>

    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <label for="{{ $id }}" class="{{ isset($isRequired) && $isRequired == true ? 'required' : '' }}">{{ $label }}</label>

    <input
        type="{{ $type }}"
        class="form-control @error($name) is-invalid @enderror"
        name="{{ $name }}"
        id="{{ $id }}"
        placeholder="{{$placeholder}}"

        @if( $value !== null && $value !== "" )
            value="{{ $value }}"
        @else
            value="{{ old($name) }}"
        @endif


        {{-- {{ $isRequired ? 'required' : '' }}  --}}
    >

    {{-- @if($hintText)
        <small class="form-text text-muted">{{ $hintText }}</small>
    @endif --}}

    {{-- Dengan Bantuan Error Bag dari Laravel --}}
    @error($name)
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>