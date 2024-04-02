@props([
    'label' => '',
    'value' => '',
    'type' => 'primary',
])

<div class="flex gap-5 items-center justify-between border-b pb-1">
    <div class="flex gap-2">
        <p class="font-semibold text-gray-400">{{$label}}:</p>
        <p>{{$value}}</p>
    </div>
</div>