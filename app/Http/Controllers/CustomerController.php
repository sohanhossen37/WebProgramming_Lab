<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Location;

class CustomerController extends Controller
{
    // Show customer details
    public function showCustomerDetails()
    {
        // Get the authenticated user
        $user = auth()->user();
        
        // Ensure the user exists
        if (!$user) 
        {
            return redirect('/login')->with('error', 'Please log in to access your account.');
        }

        // Fetch the user's location based on location_id
        $location = Location::find($user->location_id);

        // Return the customer details view with user and location data
        return view('customer_details', compact('user', 'location'));
    }

    // Update customer profile
    public function updateProfile(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'location_name' => 'nullable|string|max:255',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        // Handle location update
        if ($request->location_name) {
            // Check if the location already exists
            $location = Location::firstOrCreate(
                ['location_name' => $request->location_name]
            );

            // Update the user's location_id with the found or created location
            $user->location_id = $location->location_id;
        }

        // Save the changes
        $user->save();

        // Redirect back with a success message
        return redirect('/customer_details')->with('success', 'Profile updated successfully!');
    }
}