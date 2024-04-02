<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\MaterialStatus;
use App\Models\Availability;
use App\Models\MaterialLocation;

class MaterialLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $locations = Location::all();
        $availability = Availability::all();
        $status = MaterialStatus::all();

        return view('dashboard.material_location.create', [
            'locations' => $locations,
            'materialId' => $id,
            'status' => $status,
            'availability' => $availability,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        if($this->isRecordAlreadyExists($request)) {
            return redirect()->back()->with('fail','The selected location and material is already exists.');
        }    

        $request->validate([
            'material_id' => ['required'],
            'location_id' => ['required'],
            'price' => ['required'],
            'availability_id' => ['required'],
            'material_status_id' => ['required'],
        ]);

        $model = new MaterialLocation;
        $model->material_id = $request->material_id;
        $model->location_id = $request->location_id;
        $model->price = $request->price;
        $model->availability_id = $request->availability_id;
        $model->material_status_id = $request->material_status_id;
        $model->save();

        return redirect("/dashboard/materials/{$id}/view")->withSuccess('Record has been successfully added');
    }

    private function isRecordAlreadyExists(Request $request) {
        $materialLocation = MaterialLocation::where([
            'material_id' => $request->material_id,
            'location_id' => $request->location_id,
        ])->first();

        return empty($materialLocation) ? false : true;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, string $materialLocationId)
    {   
        $locations = Location::all();
        $availability = Availability::all();
        $status = MaterialStatus::all();
        $materialLocation = MaterialLocation::find($materialLocationId);

        return view('dashboard.material_location.edit', [
            'locations' => $locations,
            'materialId' => $id,
            'status' => $status,
            'availability' => $availability,
            'materialLocation' => $materialLocation
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $materialId,$id)
    {
        $request->validate([
            'material_id' => ['required'],
            'location_id' => ['required'],
            'price' => ['required'],
            'availability_id' => ['required'],
            'material_status_id' => ['required'],
        ]);

        $model = MaterialLocation::find($id);
        $model->material_id = $request->material_id;
        $model->location_id = $request->location_id;
        $model->price = $request->price;
        $model->availability_id = $request->availability_id;
        $model->material_status_id = $request->material_status_id;
        $model->update();

        return redirect("/dashboard/materials/{$materialId}/view")->withSuccess('Record has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
