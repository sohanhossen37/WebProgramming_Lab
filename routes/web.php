<?php
 use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\ProfileController;




//how to connect view to web
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/signup', function () {
//     return view('signup');
// });

//how to route a controller
Route::get('/about', [HomeController::class, 'about']);
Route::get('/', [HomeController::class, 'home']);

Route::get('/home', function () {
    return view('home');  // Points to home.blade.php
})->name('home');

Route::get('/chat_page', [HomeController::class, 'chat_page']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/customer_details', [CustomerController::class, 'showCustomerDetails'])->middleware('auth')->name('customer_details');
Route::post('/customer/updateProfile', [CustomerController::class, 'updateProfile'])->middleware('auth');

Route::get('/notifications_page', [HomeController::class, 'notifications_page']);
Route::get('/payment_or_checkout', [HomeController::class, 'payment_or_checkout']);
Route::get('/post_service_request', [HomeController::class, 'post_service_request']);
Route::get('/review_rating_page', [HomeController::class, 'review_rating_page']);
Route::get('/service_detail', [HomeController::class, 'service_detail'])->name('service_detail');

 function service_detail()
{
    // Logic to fetch the service details from the database
    return view('service_detail'); // Assuming the view is service_detail.blade.php
}
Route::get('/service_listing_page', [HomeController::class, 'service']);
Route::get('/service_provider_dashboard', [HomeController::class, 'service_provider_dashboard']);
Route::get('/signin', [HomeController::class, 'signin']);

Route::get('/signup', [HomeController::class, 'signup']);

Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Show the sign-in form
Route::get('/signin', [SigninController::class, 'showSigninForm'])->name('signin');

// Handle the sign-in form submission
Route::post('/signin', [SigninController::class, 'signin'])->name('signin.submit');

Route::get('/logout', function () {
    Auth::logout();  // Laravel's logout method
    return view('logout');  // Redirect to logout confirmation view
});

// Optional: Logout route
Route::post('/logout', [SigninController::class, 'logout'])->name('logout');

Route::get('/services/service_details1', function () {
    return view('services.service_details1');  // Correct view reference
});

Route::get('/services/plumbing', function () {
    return view('services.plumbing'); // For Plumbing Services details
});

Route::get('/services/electric', function () {
    return view('services.electric'); // For Plumbing Services details
});
// Route for showing the service provider form using the controller method
// Form route (GET)
Route::get('/service_provider_form', [ServiceProviderController::class, 'create'])->name('service_provider_form');

// Store data route (POST)
Route::post('/service_provider_form', [ServiceProviderController::class, 'store'])->name('store');

// AJAX routes for fetching districts and upazilas
Route::get('/get-districts/{divisionId}', [ServiceProviderController::class, 'getDistricts']);
Route::get('/get-upazilas/{districtId}', [ServiceProviderController::class, 'getUpazilas']);



// Route for showing the service provider profile
Route::get('/service_provider', [ServiceProviderController::class, 'showProfile'])->name('service_provider');

//profile show customar / service provider 
Route::get('/profile', function () {
    $user = Auth::user();
    if ($user->is_service_provider) {
        return redirect()->route('service_provider.show', ['id' => $user->id]);
    } else {
        return redirect()->route('customer.show', ['id' => $user->id]);
    }
})->name('profile_show');