@props([
    'notification' => false, 
    'notificationValue' => '',
    'link' => '',
    'icon' => '',
    'label' => '',
    'description' => ''
])


<a href="{{$link}}" class="p-1 cursor-pointer hover:bg-gray-100 hover:rounded relative">
    <div class="flex items-center gap-3">
        <div class="bg-gray-200 rounded-full flex items-center justify-center w-16 h-13 p-2 md:px-5">
            <i class="{{$icon}} text-black text-xl"></i>
        </div>
        <div>
            <h3 class="font-semibold">{{$label}}</h3>
            <p class="text-sm text-gray-500">{{$description}}</p>
        </div>                    
    </div>
    @if($notification)
        <span class="absolute top-1 right-1 text-sm font-bold text-white rounded-full h-5 text-center w-5 bg-red-500">{{$notificationValue}}</span>
    @endif
</a>