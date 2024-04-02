@props([
    'location' => '#',
    'label' => 'Add'
])

<a href="{{$location}}" class="flex items-center gap-1 bg-black text-white py-1 px-3 rounded shadow font-semibold text-sm hover:bg-gray-700">
    <i class="fa-solid fa-plus"></i>
    <span>{{$label}}</span>
</a>