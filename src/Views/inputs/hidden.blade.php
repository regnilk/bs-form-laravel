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

{!! Form::hidden($name, $value, $clean($attributes->merge(['id' => $name]))) !!}
@if($errorBag->has($errorName))
    <span class="help-block invalid-feedback"><strong>{{ $errorBag->first($errorName) }}</strong></span>'
@endif