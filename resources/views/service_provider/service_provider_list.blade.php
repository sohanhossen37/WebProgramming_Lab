<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Provider List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">Service Provider List</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white font-bold p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-500 text-white font-bold p-4 rounded mb-6">
                {{ session('error') }}
            </div>
        @endif

        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Service</th>
                    <th class="py-2 px-4 border-b">NID</th>
                    <th class="py-2 px-4 border-b">Experience (Years)</th>
                    <th class="py-2 px-4 border-b">Upazila</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($serviceProviders as $provider)
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">{{ $provider->user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $provider->service }}</td>
                        <td class="py-2 px-4 border-b">{{ $provider->nid }}</td>
                        <td class="py-2 px-4 border-b">{{ $provider->experience_years }}</td>
                        <td class="py-2 px-4 border-b">{{ $provider->upazila->name }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600">View</a>
                            <a href="" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600 ml-2">Edit</a>
                            <form action="" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($serviceProviders->isEmpty())
            <p class="mt-6 text-center text-gray-500">No service providers found.</p>
        @endif

        <!-- Add Service Provider Button -->
        <div class="mt-6 text-center">
            <a href="" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Add Service Provider</a>
        </div>
    </div>
</body>
</html>