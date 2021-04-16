@if(!is_null($url))
    {!! Form::open($clean($attributes->merge(['url' => $url]))) !!}
@elseif(!is_null($route))
    {!! Form::open(array_merge(['route' => $route], $clean($attributes))) !!}
@elseif(!is_null($action))
    {!! Form::open(array_merge(['action' => $action], $clean($attributes))) !!}
@endif

@if(!in_array($method, ['GET', 'POST']))
    @method("$method")
@endif