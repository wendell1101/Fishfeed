<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        User::where('id', auth()->id())->update([
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
        ]);

        return redirect()->back()->with('success', 'Profile has been updated successfully');
    }
}
