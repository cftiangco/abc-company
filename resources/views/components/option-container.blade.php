@props([
    'linkButtonShow' => false,
    'linkButtonLocation' => '',
    'linkButtonLabel' => '',
    'label' => '',
    'actionButtonShow' => false,
    'actionButtonId' => '',
    'actionButtonLabel' => '',
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

        @if($actionButtonShow)
            <div class="me-4">
                <button id="{{$actionButtonId}}" class="text-white bg-black py-1 px-4 rounded shadow font-bold hover:bg-gray-500">
                    {{$actionButtonLabel}}
                </button>
            </div>
        @endif
    </div>

    {{$slot}}
        
    
</div>