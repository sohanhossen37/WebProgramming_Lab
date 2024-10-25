<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{


    function home() {
        return view('home'); // Assuming you have a home.blade.php in resources/views
    }


    function about() {
        return view('about'); // This should return the signup Blade file
    }

    function contact() {
        return view('contact'); // You can create a contact.blade.php for this
    }
    


    function chat_page() {
        return view('chat_page'); // This should return the signup Blade file
    }
    function customer_details(){
        return view('customer_details');
    }


    function notifications_page() {
        return view('notifications_page'); // This should return the signup Blade file
    }
    function payment_or_checkout() {
        return view('payment_or_checkout'); // This should return the signup Blade file
    }
    function post_service_request() {
        return view('post_service_request_page'); // This should return the signup Blade file
    }
    function review_rating_page(){

        return view('review_rating_page');
    }

    function service_details() {
        return view('service_details'); // This should return the signup Blade file
    }
    public function service_detail()
    {
        // Fetch the authenticated user
        $user = Auth::user();

        // Pass the user to the view
        return view('customer_details', compact('user'));
    }
    function service() {
        return view('service_listing_page'); // This should return the signup Blade file
    }

    function service_provider_dashboard() {
        return view('service_provider_dashboard'); // This should return the signup Blade file
    }


    
    function signup() {
        return view('signup'); // This should return the signup Blade file
    }  
    function signin() {
        return view('signin'); // This should return the signup Blade file
    }

   
}

