<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
            <ul class="flex space-x-6">
                <li><a href="{{ url('/admin') }}" class="text-gray-600 hover:text-blue-600">Dashboard</a></li>
                <li><a href="{{ url('/categories') }}" class="text-gray-600 hover:text-blue-600">Categories</a></li>
                <li><a href="{{ url('/services') }}" class="text-gray-600 hover:text-blue-600">Services</a></li>
                <li><a href="{{ url('/logout') }}" class="text-gray-600 hover:text-blue-600">Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold mb-4">Add New Category</h1>
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="category_name" class="block text-gray-700 text-sm font-bold mb-2">Category Name:</label>
                    <input type="text" name="category_name" id="category_name" required class="border border-gray-300 p-2 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Category Image:</label>
                    <input type="file" name="image" id="image" accept="image/*" class="border border-gray-300 p-2 rounded w-full">
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Add Category</button>
            </form>
        </div>
    </div>

</body>
</html>
