@props(['link' => '#','type' => 'edit','id' => '','filter' => 'id'])

@if ($type === "view")
    <a href="{{$link}}" class="flex items-center gap-1 hover:font-semibold">
        <i class="fa-regular fa-eye"></i>
        <p>View</p>
    </a>
@elseif ($type === "delete")
    <form action="{{$link}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?')">
        @csrf
        @method("DELETE")
        <input type="hidden" name="{{$filter}}" value="{{$id}}" />
        <button type="submit" class="flex items-center gap-1">
            <i class="fa-regular fa-trash-can"></i>
            <p>Delete</p>
        </button>
    </form>
@elseif ($type === "reset")
    <form action="{{$link}}" method="POST" onsubmit="return confirm('Are you sure you want to reset this record?')">
        @csrf
        @method("POST")
        <input type="hidden" name="{{$filter}}" value="{{$id}}" />
        <button type="submit" class="flex items-center gap-1">
            <i class="fa-solid fa-rotate"></i>
            <p>Reset</p>
        </button>
    </form>
@else
    <a href="{{$link}}" class="flex items-center gap-1 hover:font-semibold">
        <i class="fa-regular fa-pen-to-square"></i>
        <p>Edit</p>
    </a>
@endif