@extends('layout.main')
 
@section('title', '- User')

@section('content')
    <x-main-container>

        <x-option-container label="Manage Users">
            
            <x-admin-container>
                <x-menu-container>
                    <x-option-item 
                        icon="fa-solid fa-list"
                        label="Users"
                        description="This will list all Users"
                        link="/dashboard/users/list"
                    />

                    <x-option-item 
                        icon="fa-solid fa-plus"
                        label="Add User"
                        description="Add a new User/Admin here"
                        link="/dashboard/users/create"
                    />
                </x-menu-container>
            </x-admin-container>
            
        </x-option-container>

    </x-main-container>
@endsection