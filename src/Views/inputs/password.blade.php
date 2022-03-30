@php
    $valid = '';
    $hasError = $errors->hasBag($errorBagName) ? count($errors->getBag($errorBagName)) > 0 : $errors->count() > 0;
    if($hasError) :
        $errorBag = isset($errorBagName) ? $errors->getBag($errorBagName) : $errors;
        if($errorBag->has($errorName)) :
            $valid = 'is-invalid';
        else :
            $valid = 'is-valid';
        endif;
    endif;
@endphp

{!! Form::password($name, $clean($attributes->merge(['id' => $name, 'class' => "form-control $valid"]))) !!}
@if($hasError && $errorBag->has($errorName) && isset($errorBagName))
    <span class="help-block invalid-feedback"><strong>{{ $errorBag->first($errorName) }}</strong></span>
@endif