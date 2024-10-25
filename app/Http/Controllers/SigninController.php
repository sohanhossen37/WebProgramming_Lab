<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    // Show the sign-in form
    public function showSigninForm()
    {
        return view('signin');  // Points to the signin.blade.php file
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
            // Authentication passed, redirect to home page
            return redirect()->route('customer_details')->with('success', 'Signed in successfully.');
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
