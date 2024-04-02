<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.materials.index');
    }

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
