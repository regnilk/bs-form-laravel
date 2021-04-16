<button {{$attributes->merge(['class' => "btn"])}} type="submit">
    @if(!is_null($icon))
        <x-fa icon="{{$icon}}" class="mr-1" />
    @endif
    {{$text}}
</button>