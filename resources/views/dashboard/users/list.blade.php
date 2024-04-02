@extends('layout.main')
 
@section('title', '- Users')


@section('content')
    <x-main-container>
        <x-option-container label="Users" :linkButtonShow="true" linkButtonLabel="Add User" linkButtonLocation="/dashboard/users/create">

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->user_role_id == 1 ? 'Admin':'User'}}</td>
                                <td>{{$row->user_status_id == 1 ? 'Active':'Inactive'}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </x-option-container>

    </x-main-container>
@endsection