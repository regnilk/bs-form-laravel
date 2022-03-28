@php
    $valid = '';
    if(sizeof($errors) > 0) :
        $fieldName = $errorName !== '' ? $errorName : $name;
        if($errorBag  !== '') :
            if($errors->getBag($errorBag)->has($fieldName)) :
                $valid = 'is-invalid';
            else :
                $valid = 'is-valid';
            endif;
        else :
            if($errors->has($fieldName)) :
                $valid = 'is-invalid';
            else :
                $valid = 'is-valid';
            endif;
        endif;
    endif;
@endphp

{!! Form::number($name, $value, $clean($attributes->merge(['id' => $name, 'class' => "form-control $valid"]))) !!}