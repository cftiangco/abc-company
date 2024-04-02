
@props(['title' => ''])

<div class="w-full h-screen border px-1 md:px-10">
    <div class="mt-20"></div>
    <h1 class="text-3xl">{{$title}}</h1>
    {{$slot}}
</div>