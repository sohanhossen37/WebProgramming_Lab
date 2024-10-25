<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Provider Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="/customer_details" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
      <ul class="flex space-x-6">
        <li><a href="/home" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="/service_detail" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="/about" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="/contact" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <li><a href="/customer_details" class="text-gray-600 hover:text-blue-600">Account</a></li>
      </ul>
    </div>
  </nav>

  <!-- Dashboard Header -->
  <section class="bg-blue-600 text-white py-6">
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold">Welcome, {{ $provider->name }}!</h1>
      <p>Manage your services and profile from your dashboard.</p>
    </div>
  </section>

  <!-- Dashboard Content -->
  <section class="container mx-auto py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Sidebar -->
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold mb-6">Dashboard Menu</h2>
      <ul class="space-y-4">
        <li><a href="/service_provider_profile" class="text-gray-700 hover:text-blue-600">My Profile</a></li>
        <li><a href="/my_bookings" class="text-gray-700 hover:text-blue-600">My Bookings</a></li>
        <li><a href="/service_requests" class="text-gray-700 hover:text-blue-600">Service Requests</a></li>
        <li><a href="/notifications" class="text-gray-700 hover:text-blue-600">Notifications</a></li>
        <li><a href="/payment_details" class="text-gray-700 hover:text-blue-600">Payment Details</a></li>
        <li><a href="/support" class="text-gray-700 hover:text-blue-600">Support</a></li>
        <li><a href="/logout" class="text-gray-700 hover:text-blue-600">Log out</a></li>
      </ul>
    </div>

    <!-- Profile Section -->
    <div class="col-span-2">
      <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-bold mb-4">My Profile</h2>
        <form method="POST" action="/service_provider/updateProfile">
          @csrf
          <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" name="name" value="{{ $provider->user->name }}" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Email</label>
              <input type="email" class="w-full px-4 py-2 border rounded-lg" name="email" value="{{ $provider->user->email }}" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Phone</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" name="phone" value="{{ $provider->user->phone }}" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Address</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" name="address" value="{{ $provider->user->address }}" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Specialization</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" name="specialization" value="{{ $provider->service }}" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Experience (Years)</label>
              <input type="number" class="w-full px-4 py-2 border rounded-lg" name="experience" value="{{ $provider->experience_years}}" required>
            </div>
          </div>
          <div class="flex space-x-4 mt-4">
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Update Profile</button>
            <a href="/customer_details" class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition">Back to Customer Dashboard</a>
          </div>
        </form>
      </div>

      <!-- Service Provider Details Table -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-bold mb-4">Service Provider Details</h2>
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead>
              <tr>
                <th class="px-4 py-2 text-left text-gray-600">Field</th>
                <th class="px-4 py-2 text-left text-gray-600">Details</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-4 py-2 font-semibold">Name</td>
                <td class="px-4 py-2">{{ $provider->user->name }}</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Email</td>
                <td class="px-4 py-2">{{ $provider->user->email }}</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Phone</td>
                <td class="px-4 py-2">{{ $provider->user->phone }}</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Address</td>
                <td class="px-4 py-2">{{ $provider->user->address }}</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Specialization</td>
                <td class="px-4 py-2">{{ $provider->service }}</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Experience</td>
                <td class="px-4 py-2">{{ $provider->experience_years}} years</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Rating</td>
                <td class="px-4 py-2">{{ $provider->rating }}</td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold">Bio</td>
                <td class="px-4 py-2">{{ $provider->biography }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 ServiceHub. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
