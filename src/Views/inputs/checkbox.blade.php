@php
    $valid = '';
    $hasError = $errors->hasBag($errorBag) ? count($errors->getBag($errorBag)) > 0 : $errors->count() > 0;
    if($hasError) :
        $errorBag = isset($errorBag) ? $errors->getBag($errorBag) : $errors;
        if($errorBag->has($errorName)) :
            $valid = 'is-invalid';
        else :
            $valid = 'is-valid';
        endif;
    endif;
@endphp

<div class="form-check mx-3 my-2">
    {!! Form::checkbox($name, $value, $checked, $clean($attributes->merge(['id' => $name, 'class' => "form-check-input $valid"]))) !!}
    <label class="form-check-label {{$labelClass}}" for="{{$name}}">
        {{ $label }}
    </label>
    @if($hasError && $errorBag->has($errorName))
        <span class="help-block invalid-feedback"><strong>{{ $errorBag->first($errorName) }}</strong></span>
    @endif
</div>