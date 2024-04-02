@extends('layout.main')
 
@section('title', '- Dashboard')


@section('content')
    <x-main-container>
        <x-option-container :label="$material->description" :linkButtonShow="true" linkButtonLabel="Add material to location" linkButtonLocation="/dashboard/materials/{{$material->id}}/add-to-location">
        
            <x-container>
                
                <x-heading title="Material Information"> 
                
                    <x-information 
                        label="Material ID"
                        :value="$material->id"
                    />

                    <x-information 
                        label="Barcode"
                        :value="$material->barcode"
                    />

                    <x-information 
                        label="Category"
                        :value="$material->category"
                    />

                    <x-information 
                        label="Description"
                        :value="$material->description"
                    />
                    

                </x-heading>

                <div class="w-full overflow-y-auto md:overflow-y-visible">
                    <table id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Availability</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([] as $row)
                                <tr class="hover:bg-gray-200">
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->barcode }}</td>
                                    <td>{{ $row->category }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td class="gap-1 flex-col">
                                        <x-action-link 
                                            link="/dashboard/materials/{{$row->id}}/edit" 
                                            type="edit"/>
                                   </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Location</th>
                                <th>Availability</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                    
            </x-container>
   
            
        </x-option-container>
    </x-main-container>
@endsection