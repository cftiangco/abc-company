@extends('layout.main')
 
@section('title', '- Materials')

@section('content')
    <x-main-container>

        <x-option-container label="Manage Materials">
            
            <x-admin-container>

                <div class="grid grid-cols-2 gap-x-1 gap-y-2 md:gap-x-10 md:gap-y-5">
                   
                    <x-option-item 
                        icon="fa-solid fa-file-circle-check"
                        label="Materials"
                        description="This will list all materials"
                        link="/dashboard/materials/list/"
                    />

                    <x-option-item 
                        icon="fa-solid fa-plus"
                        label="Add Material"
                        description="Add a new Material here"
                        link="/dashboard/materials/create"
                    />

                </div>
                
            </x-admin-container>
            
        </x-option-container>

    </x-main-container>
@endsection