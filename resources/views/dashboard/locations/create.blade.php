@extends('layout.main')
 
@section('title', '- Locations')

@section('content')
    <x-main-container>

        <x-option-container label="Add New Location">

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
            
            <x-form-container method="POST" action="/dashboard/locations/create">
                @csrf

                <x-field-container>
                    <x-text-box label="Description" value="{{ old('description') }}" placeHolder="Description" name="description" type="text"/>
                </x-field-container>
                
                <x-reg-submit-button 
                    label="Submit"
                />

            </x-form-container>
            
        </x-option-container>

    </x-main-container>
@endsection