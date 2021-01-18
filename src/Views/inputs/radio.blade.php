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

<div class="form-check mx-3 my-2">
    {!! Form::radio($name, $value, $checked, $clean($attributes->merge(['id' => $name.'-'.$slug, 'class' => "form-check-input $valid"]))) !!}
    <label class="form-check-label {{$labelClass}}" for="{{$name.'-'.$slug}}">
        {{ $label }}
    </label>
</div>