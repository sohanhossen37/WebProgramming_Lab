<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceProvider; // Import the ServiceProvider model
use App\Models\Admin; // Import the Admin model

class SigninController extends Controller
{
    // Show the sign-in form
    public function showSigninForm()
    {
        return view('signin'); // Points to the signin.blade.php file
    }

    // Handle the sign-in form submission
    public function signin(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, get the authenticated user
            $user = Auth::user();

            // Check if the user is an admin
            $adminExists = Admin::where('user_id', $user->user_id)->exists();
            if ($adminExists) {
                return redirect()->route('admin')->with('success', 'Signed in as Admin successfully.');
            }

            // Check if the user is a service provider
            $providerExists = ServiceProvider::where('user_id', $user->user_id)->exists();
            if ($providerExists) {
                return redirect()->route('service_provider')->with('success', 'Signed in as Service Provider successfully.');
            }

            // If the user is neither an admin nor a service provider, treat them as a regular user
            return redirect()->route('customer_details')->with('success', 'Signed in as User successfully.');
        } else {
            // Authentication failed, redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
    }

    // Logout functionality (optional)
    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin')->with('success', 'You have been logged out.');
    }
}
