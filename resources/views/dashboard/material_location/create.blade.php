@extends('layout.main')
 
@section('title', '- Products')

@section('content')
    <x-main-container>

        <x-option-container label="Add material to location">

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

            @if(Session::has('fail'))
                <div class="mt-5">
                    <p class="text-red-500">{{Session::get('fail')}}</p>
                </div>
            @endif
            
            <x-form-container method="POST" action="/dashboard/materials/{{$materialId}}/add-to-location">
                @csrf
                

                <input type="hidden" value="{{$materialId}}" name="material_id">

                <x-field-container>

                    <x-dropdown label="Location" name="location_id">
                        @foreach($locations as $row)
                            <x-dropdown-option label="{{$row->description}}" value="{{$row->id}}"/>
                        @endforeach
                    </x-dropdown>

                </x-field-container>

                <x-field-container>
                    <x-text-box label="Price" value="{{ old('price') }}" placeHolder="0" name="price" type="number"/>
                </x-field-container>

                <x-field-container>

                    <x-dropdown label="Availability" name="availability_id">
                        @foreach($availability as $row)
                            <x-dropdown-option label="{{$row->description}}" value="{{$row->id}}"/>
                        @endforeach
                    </x-dropdown>

                    <x-dropdown label="Status" name="material_status_id">
                        @foreach($status as $row)
                            <x-dropdown-option label="{{$row->description}}" value="{{$row->id}}"/>
                        @endforeach
                    </x-dropdown>

                </x-field-container>
                

                <x-reg-submit-button 
                    label="Submit"
                />

            </x-form-container>
            
        </x-option-container>

    </x-main-container>
@endsection