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

<div class="custom-control custom-switch form-check mx-3 my-2">
    {!! Form::checkbox($name, $value, $checked, $clean($attributes->merge(['id' => $name, 'class' => "custom-control-inupt $valid"]))) !!}
    <label class="form-check-label {{$labelClass}}" for="{{$name}}">
        {{ $label }}
    </label>
</div>