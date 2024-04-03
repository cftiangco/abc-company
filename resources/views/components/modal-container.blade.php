@props(['additionalClass' => '','id' => 'modal'])
<div class="h-screen w-full bg-black fixed z-50 bg-opacity-25 flex items-center justify-center {{$additionalClass}}" id="{{$id}}">
    <div class="bg-white px-5 py-6 rounded shadow">
        {{$slot}}
    </div>
</div>