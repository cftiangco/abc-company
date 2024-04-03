<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Material;
use App\Services\MaterialService;
use App\Models\MaterialStatus;
use App\Models\Availability;
use App\Models\Location;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function list()
    {
        $materials = Material::join('categories','materials.category_id','=','categories.id')
            ->get(['materials.*','categories.description as category']);
        return view('dashboard.materials.list', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('dashboard.materials.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'barcode' => ['required'],
            'description' => ['required'],
            'category_id' => ['required'],
        ]);

        $model = new Material;
        $model->barcode = $request->barcode;
        $model->description = $request->description;
        $model->category_id = $request->category_id;

        $model->save();
        return redirect("/dashboard/materials/list")->withSuccess('Record has been successfully saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $materialService = new MaterialService;

        $material = Material::join('categories','materials.category_id','=','categories.id')
        ->where('materials.id',$id)
        ->first(['materials.*','categories.description as category']);

        $materialLocations = $materialService->getMaterialsWithLocationByMaterialId($id);

        return view('dashboard.materials.view', [
            'material' => $material,
            'materialLocations' => $materialLocations
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $material = Material::find($id);
        $categories = Category::all();

        return view('dashboard.materials.edit', [
            'categories' => $categories,
            'material' => $material
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'barcode' => ['required'],
            'description' => ['required'],
            'category_id' => ['required'],
        ]);

        $model =  Material::find($id);
        $model->barcode = $request->barcode;
        $model->description = $request->description;
        $model->category_id = $request->category_id;
        $model->update();

        return redirect("/dashboard/materials/list")->withSuccess('Record has been successfully updated');
    }

    public function reports()
    {
        $locations = Location::all();
        $status = MaterialStatus::all();
        return view('dashboard.materials.reports', [
            'locations' => $locations,
            'status' => $status
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
