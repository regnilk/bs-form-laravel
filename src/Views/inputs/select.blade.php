@php
    $valid = '';
    if(sizeof($errors) > 0) :
        if($errors->has($name)) :
            $valid = 'is-invalid';
        else :
            $valid = 'is-valid';
        endif;
    endif;
@endphp

{!! Form::select($name, $buildSelect($options), $selected, $clean($attributes->merge(['id' => $name, 'class' => "form-control $valid"]))) !!}