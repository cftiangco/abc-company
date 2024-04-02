@props([
    "action" => "",
    "method" => "POST"
])

<form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data" class="w-full flex flex-col gap-3 mt-8 justify-center items-center">
    {{$slot}}
</form>