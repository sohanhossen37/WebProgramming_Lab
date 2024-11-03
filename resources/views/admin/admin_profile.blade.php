<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - Home Service Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-96">
            <h2 class="text-2xl font-bold text-center text-green-600 mb-6">Admin Profile</h2>

            <div class="mb-4">
                <label class="block text-gray-700">Full Name</label>
                <p class="border p-2 rounded-lg">
                    {{ $admin->user->name ?? 'Name not available' }}
                </p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Email Address</label>
                <p class="border p-2 rounded-lg">
                    {{ $admin->user->email ?? 'Email not available' }}
                </p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Role</label>
                <p class="border p-2 rounded-lg">
                    {{ $admin->role ?? 'Role not specified' }}
                </p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Education</label>
                <p class="border p-2 rounded-lg">
                    {{ $admin->education ?? 'Not specified' }}
                </p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Phone Number</label>
                <p class="border p-2 rounded-lg">
                    {{ $admin->user->phone ?? 'Phone not available' }}
                </p>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Address</label>
                <p class="border p-2 rounded-lg">
                    {{ $admin->user->address ?? 'Address not available' }}
                </p>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('admin.edit', ['id' => $admin->admin_id]) }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                    Edit Profile
                </a>
                <a href="{{ route('admin.admin') }}" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>

</body>
</html>
