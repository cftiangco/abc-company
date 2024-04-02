<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Location;
use App\Models\Category;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function root()
    {
        return redirect('/dashboard');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard', [
            'materials' => Material::count(),
            'locations' => Location::count(),
            'categories' => Category::count(),
        ]);
    }

    public function materials()
    {
        return view('dashboard.materials');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function users()
    {
        return view('dashboard.users');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
