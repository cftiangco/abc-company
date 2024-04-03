@props([
    'label' => 'label',
    'type' => 'text',
    'placeHolder' => '',
    'name' => '',
    'value' => '',
    'withButton' => false,
    'withButtonId' => '',
    'id' => '',
])

<div class="flex gap-2 flex-col w-full items-center justify-center px-1">
    <label class="text-gray-600 w-full">{{$label}}</label>

    @if(!$withButton)
        <input
        id="{{$id}}" 
        type="{{$type}}" 
        placeholder="{{$placeHolder}}" 
        name="{{$name}}"
        value="{{$value}}"
        class="border border-gray-300 w-full rounded h-10 px-5 outline-none bg-gray-100 hover:bg-white active:bg-white"/>
    @else
        <div class="flex items-center">
            <input 
            type="{{$type}}" 
            placeholder="{{$placeHolder}}" 
            name="{{$name}}"
            value="{{$value}}"
            readonly
            id="{{$id}}"
            class="border border-gray-300 w-full rounded h-10 px-5 outline-none bg-gray-100 hover:bg-white active:bg-white"/>

            <button class="ms-3 border py-1 px-2 rounded bg-slate-800" id="{{$withButtonId}}" type="button">
                <i class="fa-solid fa-magnifying-glass-plus text-white"></i>
            </button>
        </div>
    @endif
</div>