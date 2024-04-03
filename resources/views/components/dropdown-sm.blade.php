@props(['label' => '','name' => ''])

<div class="flex gap-2 flex-col w-64 items-center justify-center px-1">
    <label class="text-gray-600 w-full">{{$label}}</label>
    <select name="{{$name}}" class="border w-full rounded h-10 px-5 outline-none bg-gray-100 hover:bg-white active:bg-white">
        {{$slot}}
    </select>
</div>