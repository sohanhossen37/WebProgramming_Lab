<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Category;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('service.add_service', compact('categories')); // Pass categories to the view
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:service_categories,category_id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);
        // Handle image upload if it exists
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public'); // Store in public/services folder
        }

        // Create a new service
        Service::create([
            'service_name' => $request->service_name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('service.create')->with('success', 'Service added successfully!');
    }
    public function index()
    {
        // Fetch all services, including the category relationship
        $services = Service::with('category')->get(); // Assuming you have defined the relationship

        return view('service.services', compact('services'));
    }
    
    public function user_show(){
        $services = Service::with('category')->get(); // Assuming you have defined the relationship

        return view('service.user_service', compact('services'));

    }
//for drop down 
    public function showServices()
    {
        // Fetch all services from the database
        $services = Service::all();
        
        // Pass the services to the view
        return view('home', compact('services'));
    }

    public function index1()
    {
        // Get all services with their categories
        $services = Service::with('category')->get();

        // Group services by category
        $groupedServices = $services->groupBy(function ($service) {
            return $service->category ? $service->category->category_name : 'Uncategorized'; // Handle uncategorized services
        });

        return view('service.service_listing_page', compact('groupedServices'));
    }


}
