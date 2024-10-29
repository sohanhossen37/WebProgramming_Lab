<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/home" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
            <ul class="flex space-x-6">
                <li><a href="/home" class="text-gray-600 hover:text-blue-600">Home</a></li>
                <li><a href="/services" class="text-gray-600 hover:text-blue-600">Services List</a></li>
                <li><a href="/categories" class="text-gray-600 hover:text-blue-600">Category List</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar and Main Content -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 h-screen bg-gray-900 text-gray-200">
            <div class="p-4">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-4">
                <ul>
                    <li class="p-4 hover:bg-gray-700"><a href="/admin/users">Users</a></li>
                    <li class="p-4 hover:bg-gray-700"><a href="/admin/providers">Service Providers</a></li>
                    <li class="p-4 hover:bg-gray-700"><a href="{{ route('categories.index') }}">Category</a></li>
                    <li class="p-4 hover:bg-gray-700"><a href="{{ route('services.index') }}">Service</a></li>
                    <li class="p-4 hover:bg-gray-700"><a href="/admin/settings">Settings</a></li>
                    <li class="p-4 hover:bg-gray-700"><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Top Navigation -->
            <div class="flex justify-between items-center bg-white p-4 shadow-md">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div>
                    <span class="text-gray-800">Admin</span>
                    <button class="ml-4 px-4 py-2 bg-blue-500 text-white rounded">Profile</button>
                </div>
            </div>

            <!-- Dashboard Content -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <!-- Card 1 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold">Total Users</h2>
                    <p class="text-2xl mt-2">10</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold">Total Services</h2>
                    <p class="text-2xl mt-2">5</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold">Service Completed</h2>
                    <p class="text-2xl mt-2">200</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold">New Messages</h2>
                    <p class="text-2xl mt-2">10</p>
                </div>
            </section>

            <!-- Recent Orders Table -->
            <section class="mt-8 bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-4">Recent Orders</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-200 text-gray-600">
                            <th class="py-2">Order ID</th>
                            <th class="py-2">Service</th>
                            <th class="py-2">User</th>
                            <th class="py-2">Date</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="py-2">#101</td>
                            <td class="py-2">Electrician</td>
                            <td class="py-2">mursalin</td>
                            <td class="py-2">2024-10-14</td>
                            <td class="py-2 text-green-500">Completed</td>
                        </tr>
                        <tr class="text-center">
                            <td class="py-2">#102</td>
                            <td class="py-2">Electrician</td>
                            <td class="py-2">shoan</td>
                            <td class="py-2">2024-10-13</td>
                            <td class="py-2 text-yellow-500">Pending</td>
                        </tr>
                        <tr class="text-center">
                            <td class="py-2">#103</td>
                            <td class="py-2">Carpentry</td>
                            <td class="py-2">Rahad</td>
                            <td class="py-2">2024-10-12</td>
                            <td class="py-2 text-red-500">Cancelled</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

</body>
</html>
