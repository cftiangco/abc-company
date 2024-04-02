@props(['label'=>'','name'=>'','value' => '','id' => ''])

<div class="w-full px-1 flex flex-col gap-1 items-center justify-center">
    <label for="" class="text-gray-600 w-full">{{$label}}</label>
    <textarea id="{{$id}}" name="{{$name}}" class="border w-full rounded bg-gray-100 p-2 h-24 outline-none  hover:bg-white active:bg-white">{{$value}}</textarea>
</div>