<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ServiceProvider;
use App\Models\Upazila; 
use App\Models\Division;
use App\Models\District;// Ensure you have this model
use Illuminate\Support\Facades\Auth;

class ServiceProviderController extends Controller
{
    // Show the form for creating a new service provider
    
   
    // Store the new service provider data
    public function store(Request $request)
    {
       // dd(request()->all());
        try {
            // Validate the request data'

            $validatedData = $request->validate([
                'service' => 'required|string|max:255',
                'nid' => 'required|string|min:10|max:17',
                'experience_years' => 'required|integer|min:1',
                'biography' => 'nullable|string',
                'profile_picture' => 'nullable|image|max:2048',
                'upazila_id' => 'required|exists:upazilas,id', // Validate by upazila ID
            ]);
    
            // Handle profile picture upload
            if ($request->hasFile('profile_picture')) {
                $filePath = $request->file('profile_picture')->store('profile_pictures', 'public');
                $validatedData['profile_picture'] = $filePath;
            }
    //dd($validatedData );
            // Create the service provider
            ServiceProvider::create([
                'user_id' => Auth::id(),
                'upazila_id' => $validatedData['upazila_id'], // Use the validated upazila ID
                'service' => $validatedData['service'],
                'nid' => $validatedData['nid'],
                'experience_years' => $validatedData['experience_years'],
                'biography' => $validatedData['biography'] ?? null, // Optional biography
                'profile_picture' => $validatedData['profile_picture'] ?? null, // Optional profile picture
            ]);
    
            // If successful, redirect with a success message
            return redirect()->route('service_provider')->with('success', 'Service Provider registered successfully!');
        } catch (\Exception $e) {
            // Log the error and return an error response
            \Log::error($e->getMessage());
    
            // Return back with an error message
            return back()->with('error', 'Failed to register service provider. Please try again.');
        }
    }
    
    

    // Show the service provider profile
    public function showProfile()
    {
        // Assuming you have a ServiceProvider model that relates to your users table
        $userId = Auth::id(); // Get the currently authenticated user's ID
        $provider = ServiceProvider::where('user_id', $userId)->first(); // Fetch provider data
        $user = User::find($userId); // Fetch the corresponding user data

        // Pass the provider and user data to the view
        return view('service_provider', compact('provider', 'user'));
    }

    public function create()
    {
        $divisions = Division::all();
        return view('service_provider_form', compact('divisions'));
    }

    public function getDistricts($divisionId)
    {
        // Fetch districts that belong to the selected division
        $districts = District::where('division_id', $divisionId)->get();
        return response()->json(['districts' => $districts]);
    }

    public function getUpazilas($districtId)
    {
        // Fetch upazilas that belong to the selected district
        $upazilas = Upazila::where('district_id', $districtId)->get();
        return response()->json(['upazilas' => $upazilas]);
    }

    // The store method for registering service providers (already written)
}

