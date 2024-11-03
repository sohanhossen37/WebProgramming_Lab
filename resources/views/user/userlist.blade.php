<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-6">User List</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white font-bold p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Location</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="text-gray-700">
                        <td class="py-2 px-4 border-b">{{ $user->user_id }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->phone }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->location->location_name ?? 'N/A' }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600">View</a>
                            <form action="" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
           
        </table>

        @if($users->isEmpty())
            <p class="mt-6 text-center text-gray-500">No users found.</p>
        @endif

                <!-- Add User Button -->
                <div class="mt-6 text-center">
            <a href="{{ route('register') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Add User</a>
        </div>
    </div>

</body>
</html>