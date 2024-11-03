<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Location; // Make sure to import the Location model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

   public function showProfile()
   {
       // Get the currently authenticated user
       $user = auth()->user();

       // Check if the user is logged in
       if (!$user) {
           return redirect('/login')->with('error', 'Please log in to access the admin profile.');
       }

       // Find the admin associated with the user ID
       $admin = Admin::with('user')->where('user_id', $user->id)->first();

       // If no admin is found, redirect or return an error
       if (!$admin) {
           return redirect('/admin')->with('error', 'Admin profile not found.');
       }

       return view('admin.admin_profile', compact('admin'));
   }


    // Show the registration form
    public function showRegistrationForm()
    {
        return view('admin.admin_register'); // Change this to your actual view path
    }

    // Handle the registration
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'location_name' => 'required|string|max:255',
            'role' => 'required|string',
            'education' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        // Create the location
        $location = Location::create([
            'location_name' => $request->location_name,
        ]);
 
        // Insert the user
        $user = User::create([ // Store the newly created user in a variable
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'location_id' => $location->location_id, // Use the newly created location ID
        ]);

        // Create the admin
        Admin::create([
            'user_id' => $user->user_id, // Use the newly created user's ID
            'role' => $request->role,
            'education' => $request->education,
        ]);

        // Redirect or perform other actions
        return redirect()->route('signin')->with('success', 'Admin registered successfully!');
    }

    public function admin()
    {
        return view('admin.admin');
    }
}
