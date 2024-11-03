<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function register(Request $request)
    {
        // Validate the input fields
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'location_name' => 'required|string|max:255',
        ]);
        
        //dd($validatedData);
    
        // Insert the location first
        $location = Location::create([
            'location_name' => $request->location_name,
        ]);
    
        // Insert the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'location_id' => $location->location_id, // Use the newly created location ID
            
        ]);
    
        // Redirect the user after successful registration
        return redirect()->route('signin')->with('success', 'Account created successfully. Please sign in.');
    }
    public function index(){
        $users = User::all(); //fetch all user from database
        return view('user.userlist',compact('users'));
    }

}
