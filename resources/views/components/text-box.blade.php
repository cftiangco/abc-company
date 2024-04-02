@props([
    'label' => 'label',
    'type' => 'text',
    'placeHolder' => '',
    'name' => '',
    'value' => '',
])

<div class="flex gap-2 flex-col w-full items-center justify-center px-1">
    <label class="text-gray-600 w-full">{{$label}}</label>
    <input 
        type="{{$type}}" 
        placeholder="{{$placeHolder}}" 
        name="{{$name}}"
        value="{{$value}}"
        class="border border-gray-300 w-full rounded h-10 px-5 outline-none bg-gray-100 hover:bg-white active:bg-white"/>
</div>