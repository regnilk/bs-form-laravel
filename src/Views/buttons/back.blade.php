<button {{$attributes->merge(['class' => "btn"])}} onclick="history.back(); return false;">
    @if(!is_null($icon))
        <x-fa icon="{{$icon}}" class="mr-1" />
    @endif
    {{$text}}
</button>