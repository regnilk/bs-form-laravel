@php
    $valid = '';
    if(sizeof($errors) > 0) :
        $errorName;
        $errorBag = $errorBag !== '' ? $errors->getBag($errorBag) : $errors;
        if($errorBag->has($errorName)) :
            $valid = 'is-invalid';
        else :
            $valid = 'is-valid';
        endif;
    endif;
@endphp

<div class="form-check mx-3 my-2">
    {!! Form::radio($name, $value, $checked, $clean($attributes->merge(['id' => $name.'-'.$slug, 'class' => "form-check-input $valid"]))) !!}
    @if($errorBag->has($errorName))
        <span class="help-block invalid-feedback"><strong>{{ $errorBag->first($errorName) }}</strong></span>'
    @endif
    <label class="form-check-label {{$labelClass}}" for="{{$name.'-'.$slug}}">
        {{ $label }}
    </label>
</div>