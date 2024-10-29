<?php

namespace App\Http\Controllers;
use App\Models\Category; 
use App\Models\Service; 

use Illuminate\Http\Request;

class CategoryController extends Controller
{

        public function create()
        {
            return view('service.add_category'); // Add the correct path to your Blade file
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'category_name' => 'required|string|max:255',
            ]);
    
            // Create a new category
          Category::create([
                'category_name' => $request->category_name,
            ]);
    
            return redirect()->route('service.create')->with('success', 'Category added successfully!');
        }


        //show all categories
        public function index()
        {
           $categories = Category::all(); // Fetch all categories
           return view('service.categories_index', compact('categories')); // Points to your Blade file
        }
        public function indexx()
        {
            $categories = Category::all(); 
            return view('home.index', compact('categories')); 
        }



        //show service categorywise 
        public function showServices($category_id)
        {
            // Fetch the category
            $category = Category::where('category_id', $category_id)->firstOrFail();
    
            // Fetch services belonging to the selected category
            $services = Service::where('category_id', $category->category_id)->get();
    
            return view('categories.services', compact('category', 'services'));
        }

}
