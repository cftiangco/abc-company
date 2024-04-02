@props([
    'linkButtonShow' => false,
    'linkButtonLocation' => '',
    'linkButtonLabel' => '',
    'label' => '',
])

<div class="h-full w-full border-b-1 mb-10">
            
    <div class="border-b mb-2 pb-2 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-600">{{$label}}</h2>
        @if($linkButtonShow)
            <x-add-button 
                :label="$linkButtonLabel"
                :location="$linkButtonLocation"
            />
        @endif
    </div>

    {{$slot}}
        
    
</div>