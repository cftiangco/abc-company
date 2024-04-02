@extends('layout.main')
 
@section('title', '- Products')

@section('content')
    <x-main-container>

        <x-option-container label="Edit Material ID: #{{$material->id}}">

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
            
            <x-form-container method="POST" action="/dashboard/materials/{{$material->id}}/edit">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$material->id}}">

                <x-field-container>
                    <x-text-box label="Barcode" value="{{ $material->barcode }}" placeHolder="00000000" name="barcode" type="number"/>
                </x-field-container>
                
                <x-field-container>

                    <x-dropdown label="Category" name="category_id">
                        @foreach($categories as $row)
                            <x-dropdown-option 
                                label="{{$row->description}}" 
                                value="{{$row->id}}"
                                :isSelected="$material->category_id == $row->id ? 'selected':'' " 
                            />
                        @endforeach
                    </x-dropdown>

                </x-field-container>

                <x-field-container>
                    <x-text-area 
                        label="Description"
                        name="description"
                        value="{{$material->description }}"
                    />
                </x-field-container>
                

                <x-reg-submit-button 
                    label="Submit"
                />

            </x-form-container>
            
        </x-option-container>

    </x-main-container>
@endsection