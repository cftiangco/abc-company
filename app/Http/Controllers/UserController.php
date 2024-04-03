<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserRole;
use App\Models\UserStatus;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

    public function loginUI()
    {
        $users = User::all();
        return view('login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => ['required'],
            'pword' => ['required'],
        ],['pword.required' => 'The password field is required.']);

        $user = User::where('email',$request->email)
        ->where('user_status_id',1)
        ->first();

        if(!$user || !Hash::check($request->pword,$user->pword)) {
            return redirect()->back()->withInput()->with('fail','Invalid Email or Password, Please try again.');
        }
    
        $request->session()->put('user', $user);
        return redirect('/dashboard');
    }


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
        $roles = UserRole::all();
        $status = UserStatus::all();
        return view('dashboard.users.create', [
            'roles' => $roles,
            'status' => $status,
        ]);
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

    public function logout(Request $request) {
        $request->session()->forget('user');
        $request->session()->flush();
        return redirect()->route('login');
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
