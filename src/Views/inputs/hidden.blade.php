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

{!! Form::hidden($name, $value, $clean($attributes->merge(['id' => $name]))) !!}