<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
            <ul class="flex space-x-6">
                <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600">Home</a></li>
                <li><a href="{{ route('categories.index') }}" class="text-gray-600 hover:text-blue-600">Categories</a></li>
                <li><a href="{{ route('service.create') }}" class="text-gray-600 hover:text-blue-600">Add Service</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">All Services</h1>

        <table class="min-w-full bg-white shadow rounded-lg">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-600">
                    <th class="py-2 px-4">Service Name</th>
                    <th class="py-2 px-4">Description</th>
                    <th class="py-2 px-4">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr class="text-center">
                    <td class="py-2 px-4">{{ $service->service_name }}</td>
                    <td class="py-2 px-4">{{ $service->description }}</td>
                    <td class="py-2 px-4">{{ $service->category->category_name }}</td>
                </tr>
                @endforeach

                <!-- Add Service row at the bottom -->
                <tr class="text-center bg-gray-100">
                    <td colspan="3" class="py-4">
                        <!-- <a href="{{ route('service.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add New Service</a> -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
