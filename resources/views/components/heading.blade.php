@props([
    'title' => '',
    'button' => false,
    'location' => '#',
    'buttonLabel' => 'Add',
    'buttonId' => '',
    'actionButton' => false,
    'actionButtonLabel' => "Action button",
    'actionButtonId' => 'actionButton',
    'actionLink' => false,
    'actionLinkLabel' => "Action Link",
    'actionLinkURL' => '',
    
])

<div class="w-full h-11 bg-gray-400 flex items-center mb-5 justify-between">
    <h4 class="text-white text-lg ml-4 font-bold">{{$title}}</h4>
    
    @if($button==true)
        <div class="me-4">
            <a 
                buttonId="{{$buttonId}}"
                href="{{$location}}" 
                class="text-white bg-black py-1 px-4 rounded shadow font-bold hover:bg-gray-500">
                {{$buttonLabel}}
            </a>
        </div>
    @endif
    
    @if($actionButton==true)
        <div class="me-4">
            <button id="{{$actionButtonId}}" class="text-white bg-black py-1 px-4 rounded shadow font-bold hover:bg-gray-500">
                {{$actionButtonLabel}}
            </button>
        </div>
    @endif

    @if($actionLink==true)
        <div class="me-4">
            <a href="{{$actionLinkURL}}" class="text-white cursor-pointer bg-black py-1 px-4 rounded shadow font-bold hover:bg-gray-500">
                {{$actionLinkLabel}}
            </a>
        </div>
    @endif
    
</div>

<div class="mb-5">{{$slot}}</div>