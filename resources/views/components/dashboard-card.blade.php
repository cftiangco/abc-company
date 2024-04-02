@props([
    'label' => '',
    'total' => 0,
])

<div class="border p-5 rounded shadow cursor-pointer">
    <div class="border-b pb-1 flex items-center justify-between">
        <div class="flex justify-start gap-2 items-center">
            <div class="h-12 w-12 border bg-red-500 rounded-full text-center items-center flex justify-center font-bold text-white">{{$label[0]}}</div>
            <h2 class="text-2xl font-bold text-gray-700">{{$label}}</h2>
        </div>
    </div>
    <div class="flex justify-center items-center pb-1 mt-3">
        <div class="flex flex-col items-center justify-center">
            <h5>Total</h5>
            <h6>{{$total}}</h6>
        </div>
    </div>
</div>