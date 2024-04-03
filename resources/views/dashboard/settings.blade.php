@extends('layout.main')
 
@section('title', '- Materials')

@section('content')
    <x-main-container>

        <x-option-container label="Settings">
            
            <x-admin-container>

                <x-menu-container>
                   
                    <x-option-item 
                        icon="fa-solid fa-file-circle-check"
                        label="Categories"
                        description="This will list all categories"
                        link="/dashboard/categories/list/"
                    />

                    <x-option-item 
                        icon="fa-solid fa-plus"
                        label="Add Category"
                        description="Add a new Category here"
                        link="/dashboard/categories/create"
                    />

                    <x-option-item 
                        icon="fa-solid fa-file-circle-check"
                        label="Location"
                        description="This will list all location"
                        link="/dashboard/locations/list"
                    />

                    <x-option-item 
                        icon="fa-solid fa-plus"
                        label="Add Location"
                        description="Add a new Location here"
                        link="/dashboard/locations/create"
                    />


                </x-menu-container>
                
            </x-admin-container>
            
        </x-option-container>

    </x-main-container>
@endsection