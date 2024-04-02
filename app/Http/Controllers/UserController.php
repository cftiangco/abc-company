<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $users = User::all();
        return view('dashboard.users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => ['required','unique:users','email'],
            'name' => ['required', 'max:30','regex:/^[a-zA-Z\s]+$/'],
            'user_role_id' => ['required'],
            'user_status_id' => ['required'],
        ]);

        $model = new User;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->user_status_id = $request->user_status_id;
        $model->user_role_id = $request->user_role_id;
        $model->pword = Hash::make($request->email);
        $model->save();
        return redirect("/dashboard/users/list")->withSuccess('Record has been successfully saved');
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
