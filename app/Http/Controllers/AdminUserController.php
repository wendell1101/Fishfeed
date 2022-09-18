<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    public function show(User $user){
        return view('admin.users.show', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'first_name' =>  $request->first_name,
            'middle_name' =>  $request->middle_name,
            'last_name' =>  $request->last_name,
            'suffix' =>  $request->suffix,
            'user_name' =>  $request->user_name,
            'email' =>  $request->email,
            'civil_status' =>  $request->civil_status,
            'sex' =>  $request->sex,
            'religion' =>  $request->religion,
            'birth_date' =>  $request->birth_date,
            'contact_number' =>  $request->contact_number,
            'house_number' =>  $request->house_number,
            'street' =>  $request->street,
            'barangay' =>  $request->barangay,
            'province' =>  $request->province,
            'city' =>  $request->city,
            'zip_code' =>  $request->zip_code,
            'country' =>  $request->country,
            'password' => Hash::make($request->password),
            'is_admin' => $request->has('is_admin') ? 1 : 0
        ]);

        return redirect()->route('users.index')->with('success', 'User has been created successfully');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'first_name' =>  $request->first_name,
            'middle_name' =>  $request->middle_name,
            'last_name' =>  $request->last_name,
            'suffix' =>  $request->suffix,
            'user_name' =>  $request->user_name,
            'email' =>  $request->email,
            'civil_status' =>  $request->civil_status,
            'sex' =>  $request->sex,
            'religion' =>  $request->religion,
            'birth_date' =>  $request->birth_date,
            'contact_number' =>  $request->contact_number,
            'house_number' =>  $request->house_number,
            'street' =>  $request->street,
            'barangay' =>  $request->barangay,
            'province' =>  $request->province,
            'city' =>  $request->city,
            'zip_code' =>  $request->zip_code,
            'country' =>  $request->country,
            'is_admin' => $request->has('is_admin') ? 1 : 0
        ]);


        return redirect()->route('users.index')->with('success', 'User has been updated successfully');
    }

    public function delete(User $user)
    {
        return view('admin.users.delete', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User has been deleted successfully');
    }
}
