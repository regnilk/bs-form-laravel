<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <div class="px-0">
        <div {{ $attributes->merge(['class' => "input-group"])}}>
            <div class="input-group-prepend">
                <label class="input-group-text" id="{{$name}}-label" style="min-width: {{$labelWidth}}px;">
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