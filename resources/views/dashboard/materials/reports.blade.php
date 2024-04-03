@extends('layout.main')
 
@section('title', '- Products')

@section('content')
    <x-main-container>

        <x-option-container label="Generate Report">

            @if ($errors->any())
                <div class="mt-5">
                @foreach($errors->all() as $err)
                    <p class="text-red-500">{{$err}}</p>
                @endforeach
                </div>
            @endif

            @if(Session::has('success'))
                <div class="mt-5">
                    <p class="text-green-500">{!! Session::get('success') !!}</p>
                </div>
            @endif

            <div class="flex items-center gap-3">
               <div>
                   <div class="flex items-center">
                        <x-text-box 
                            label="Material" 
                            value="" 
                            placeHolder="Material" 
                            name="material_id"
                            :withButton="true" 
                            type="text"/>
                   </div>
               </div>
               
               <x-dropdown-sm label="Location" name="location_id">
                    @foreach($locations as $row)
                        <x-dropdown-option label="{{$row->description}}" value="{{$row->id}}"/>
                    @endforeach
                </x-dropdown>

                <x-dropdown-sm label="Status" name="material_status_id">
                    @foreach($status as $row)
                        <x-dropdown-option label="{{$row->description}}" value="{{$row->id}}"/>
                    @endforeach
                </x-dropdown>
            </div>
            
            
            
        </x-option-container>

    </x-main-container>
@endsection