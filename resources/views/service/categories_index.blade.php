<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
            <ul class="flex space-x-6">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600">Home</a></li>
                <li><a href="{{ route('categories.create') }}" class="text-gray-600 hover:text-blue-600">Add Category</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Categories</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-gray-600">
                    <th class="py-2 px-4 border">Category ID</th>
                    <th class="py-2 px-4 border">Category Name</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="text-center">
                        <td class="py-2 border">{{ $category->category_id }}</td>

                        <td class="py-2 border">
         
                          <a href="{{ route('categories.services', $category->category_id) }}" class="text-blue-500 hover:text-blue-700">
                            {{ $category->category_name }}
                          </a>
                        </td>
                        <td class="py-2 border">
                            <!-- Edit and delete actions -->
                            <a href="#" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <a href="#" class="text-red-500 hover:text-red-700 ml-4">Delete</a>
                        </td>
                    </tr>
                @endforeach

                <!-- Add Category row at the bottom -->
                <tr class="text-center bg-gray-100">
                    <td colspan="3" class="py-4">
                        <a href="{{ route('categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
                            Add New Category
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
