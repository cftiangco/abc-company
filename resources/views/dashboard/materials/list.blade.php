@extends('layout.main')
 
@section('title', '- Materials')


@section('content')
    <x-main-container>
        <x-option-container label="Materials" :linkButtonShow="true" linkButtonLabel="Add Material" linkButtonLocation="/dashboard/materials/create">

            @if(Session::has('success'))
                <div class="mt-5">
                    <p class="text-green-500">{!! Session::get('success') !!}</p>
                </div>
            @endif

            @if(Session::has('fail'))
                <div class="mt-5">
                    <p class="text-red-500">{!! Session::get('fail') !!}</p>
                </div>
            @endif
            
            <div class="w-full overflow-y-auto md:overflow-y-visible">
                <table id="data-table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Barcode</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $row)
                            <tr class="hover:bg-gray-200">
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->barcode }}</td>
                                <td>{{ $row->category }}</td>
                                <td>{{ $row->description }}</td>
                                <td class="gap-1 flex-col">
                                    <x-action-link 
                                        link="/dashboard/materials/{{$row->id}}/edit" 
                                        type="edit"/>
                                    <x-action-link 
                                        link="/dashboard/materials/{{$row->id}}/view" 
                                        type="view"/>
                               </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Product ID</th>
                            <th>Barcode</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </x-option-container>

    </x-main-container>
@endsection