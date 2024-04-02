@extends('layout.main')
 
@section('title', '- Products')


@section('content')
    <x-main-container>
        <x-option-container label="Products" :linkButtonShow="true" linkButtonLabel="Add Product" linkButtonLocation="/dashboard/shop/products/create">

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
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>For Gender</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([] as $row)
                            <tr class="hover:bg-gray-200">
                                <td>
                                    <img 
                                        src="{{ asset('storage/' . $row->display_image) }}" 
                                        alt="picture"
                                        class="object-cover w-32 h-auto"
                                    />
                                </td>
                                <td>{{ $row->product_name }}</td>
                                <td>{{ $row->product_sku }}</td>
                                <td>{{ $row->price  }}</td>
                                <td>{{ $row->stock  }}</td>
                                <td>{{ $row->gender == 1 ? 'Male':'Female' }}</td>
                                <td>{{ $row->status  }}</td>
                                <td class="gap-1 flex-col">
                                    @if(Session::get('user')['user_role_id'] == 1)
                                        <x-action-link 
                                            link="/dashboard/shop/products/{{$row->id}}/edit" 
                                            type="edit"/>
                                    @endif
                                    <x-action-link 
                                        link="/dashboard/shop/products/{{$row->id}}/view" 
                                        type="view"/>
                               </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>Image</th>
                            <th>Product Name</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>For Gender</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </x-option-container>

    </x-main-container>
@endsection