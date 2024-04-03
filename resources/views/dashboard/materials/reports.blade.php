@extends('layout.main')
 
@section('title', '- Products')

@section('content')
    <x-main-container>

        <x-option-container label="Generate Report">

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
            
            <x-form-container method="GET" action="#">
                @csrf
                <div class="flex flex-col md:flex-row items-center gap-3">

                <input 
                    type="hidden" 
                    name="material_id" 
                    id="material-id"
                    value="{{ request()->query('material_id') ?? ''}}"  
                    required>

                    <div class="flex items-center">
                            <x-text-box 
                                label="Material" 
                                id="material-description"
                                placeHolder="Material" 
                                name="material_description"
                                :withButton="true"
                                withButtonId="lookup"
                                value="{{ request()->query('material_description') ?? ''}}" 
                                type="text"/>
                    </div>


                    <x-dropdown-sm label="Status" name="material_status_id">
                        @foreach($status as $row)
                            <x-dropdown-option 
                                label="{{$row->description}}" 
                                value="{{$row->id}}"
                                :isSelected="request()->query('material_status_id') == $row->id ? 'selected':''" 
                            />
                        @endforeach
                    </x-dropdown>
                </div>

                <div class="w-[30%] text-end">
                    <x-reg-submit-button 
                        label="Submit"
                    />
                </div>
            </x-form-container>

            @if(count($report) > 0)
                <br/><br/>
                <div class="flex justify-end gap-3">
                    <a class="text-green-500 font-bold mb-3" href="/report/excel?material_id={{request()->query('material_id')}}&location_id={{request()->query('location_id')}}&material_status_id={{request()->query('material_status_id')}}">
                        Export to Spreadsheet
                    </a>
                </div>
                <div class="w-full overflow-y-auto md:overflow-y-visible">
                    <table id="data-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($report as $row)
                                <tr class="hover:bg-gray-200">
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->category }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->location }}</td>
                                    <td>{{ $row->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @else
                <div class="flex items-center justify-center mt-24">
                    <p class="font-bold">No Record found</p>
                </div>
            @endif
            
        </x-option-container>

    </x-main-container>
@endsection


@section('modal')
    <x-modal-container id="modal" additionalClass="hidden">
        <div class="flex mb-3 justify-end">
            <button class="font-bold text-white bg-slate-800 px-2 py-1 rounded" id="btn-close">Close</button>
        </div>
        <div class="w-full overflow-y-auto md:overflow-y-visible">
            <table id="data-table-2" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Barcode</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    @foreach ($materials as $row)
                        <tr class="hover:bg-gray-200">
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->barcode }}</td>
                            <td>{{ $row->category }}</td>
                            <td>{{ $row->description }}</td>
                            <td class="gap-1 flex-col">
                                <button 
                                    class="selected font-bold text-white bg-slate-800 px-2 py-1 rounded" 
                                    data-id="{{$row->id}}"
                                    data-description="{{$row->description}}"
                                >Select</button>
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
    </x-modal-container>
@endsection

@section('js')
    <script>
          $(document).ready(function() {


            $("#lookup").click(function() {
                $("#modal").removeClass("hidden");
            });

            $("#btn-close").click(function() {
                $("#modal").removeClass("block");
                $("#modal").addClass("hidden");
            });

            $("#table-body").on("click", ".selected", function() {
                let id = $(this).data("id");
                let description = $(this).data("description");
                console.log(id,description)

                $("#material-description").val(description);
                $("#material-id").val(id);

                $("#modal").addClass("hidden");
            });
          });
    </script>
@endsection