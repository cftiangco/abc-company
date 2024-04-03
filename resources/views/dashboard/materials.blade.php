@extends('layout.main')
 
@section('title', '- Materials')

@section('content')
    <x-main-container>

        <x-option-container label="Manage Materials">
            
            <x-admin-container>

               <x-menu-container>
                   
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

                    <x-option-item 
                        icon="fa-solid fa-file"
                        label="Generate Report"
                        description="Report generation"
                        link="/dashboard/materials/reports"
                    />

                </x-menu-container>
                
            </x-admin-container>
            
        </x-option-container>

    </x-main-container>
@endsection