@extends('layout.main')
 
@section('title', '- Users')

@section('content')
    <x-main-container>

        <x-option-container label="Create New User">

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
            
            <x-form-container method="POST" action="/dashboard/users/create">
                @csrf

                <x-field-container>
                    <x-text-box label="Name" value="{{ old('name') }}" placeHolder="Name" name="name"/>
                    <x-text-box label="Email" value="{{ old('email') }}" placeHolder="Email" name="email" type="email"/>
                </x-field-container>

                <x-field-container>
                   
                    <x-dropdown label="User role" name="user_role_id">
                        <x-dropdown-option label="Admin" value="1"/>
                        <x-dropdown-option label="User" value="2"/>
                    </x-dropdown>

                    <x-dropdown label="User Status" name="user_status_id">
                        <x-dropdown-option label="Active" value="1"/>
                        <x-dropdown-option label="Inactive" value="2"/>
                    </x-dropdown>

                </x-field-container>

                <x-reg-submit-button 
                    label="Submit"
                />

            </x-form-container>
            
        </x-option-container>

    </x-main-container>
@endsection