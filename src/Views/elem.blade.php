<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <div class="col-md-{{$width}}">
        <div {{ $attributes->merge(['class' => "input-group"])}}>
            <div class="input-group-prepend">
                <label class="input-group-text d-inline-block pl-1 text-left" id="{{$name}}-label" style="width: {{$labelWidth}}px;">
                    <x-fa icon="{{$icon}}" class="mr-1"/>{{$label}}
                </label>
            </div>
            {{ $slot }}
            @if ($errors->has($name))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first($name) }}</strong>
                </div>
            @endif
        </div>
    </div>
</div>