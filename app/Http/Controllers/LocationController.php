<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $locations = Location::all();
        return view('dashboard.locations.list', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => ['required','unique:locations'],
        ]);

        $model = new Location;
        $model->description = $request->description;
        $model->save();

        return redirect("/dashboard/locations/list")->withSuccess('Record has been successfully saved');
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
        $location = Location::find($id);
        return view('dashboard.locations.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => ['required'],
        ]);

        $model = Location::find($id);
        $model->description = $request->description;
        $model->update();

        return redirect("/dashboard/locations/list")->withSuccess('Record has been successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
