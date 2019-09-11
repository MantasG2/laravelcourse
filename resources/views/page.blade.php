@if(strlen($title)>20)
    {{'Klaida titile kintamasis ilgesnis už 20 simbolių'}}
@else
    {{$title}}
@endif

