@extends('layout.main')
 
@section('title', '- Dashboard')


@section('content')
    <x-main-container>
        <x-option-container label="Dashboard">
            <x-admin-container>

               <div class="w-full grid grid-cols-1 gap-1 md:grid-cols-2 md:gap-2">

                        <x-dashboard-card 
                            label="Materials"
                            total="{{$materials}}"
                        />

                        <x-dashboard-card 
                            label="Locations"
                            total="{{$locations}}"
                        />

                        <x-dashboard-card 
                            label="Categories"
                            total="{{$categories}}"
                        />
                
               </div>
                
            </x-admin-container>
            
        </x-option-container>
    </x-main-container>
@endsection