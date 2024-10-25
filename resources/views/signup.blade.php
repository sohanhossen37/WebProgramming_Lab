<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Home Service Marketplace</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-emerald-200">

  <!-- Sign-Up Container -->
  <div class="min-h-screen flex items-center justify-center">
    <div class="flex w-full max-w-6xl bg-white rounded-lg shadow-lg overflow-hidden">
      
      <!-- Left Side - Image (50% Width) -->
      <div class="w-1/2">
        <img src="Images/log_in-removebg-preview.png" alt="Signup Image" class="object-cover w-full h-full">
      </div>

      <!-- Right Side - Form (50% Width) -->
      <div class="w-1/2 p-8">
        <h2 class="text-2xl font-bold text-center text-green-600 mb-6">Create Your Account</h2>

        <!-- Sign-Up Form -->
        <form action="{{ route('register') }}" method="POST">
        
        @csrf
          <!-- Full Name -->
          <div class="mb-4">
            <label for="name" class="block text-gray-700">Full Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your Full Name" required>
          </div>

          <!-- Email -->
          <div class="mb-4">
            <label for="email" class="block text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="you@example.com" required>
          </div>

          <!-- Password -->
          <div class="mb-6">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Create a password" required>
          </div>

          <!-- Confirm Password -->
          <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Re-enter your password" required>
          </div>

          <!-- Address -->
          <div class="mb-4">
            <label for="address" class="block text-gray-700">Address</label>
            <input type="text" id="address" name="address" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your Address" required>
          </div>
           <!-- Location -->
           <div class="mb-4">
            <label for="location_name" class="block text-gray-700">Location</label>
            <input type="text" id="location_name" name="location_name" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your Address" required>
          </div>
          <!-- Phone (Optional) -->
          <div class="mb-4">
            <label for="phone" class="block text-gray-700">Phone Number</label>
            <input type="text" id="phone" name="phone" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your Phone Number">
          </div>
        
          <!-- User Type (Optional) -->
          
          <!-- Submit Button -->
          <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-300">Sign Up</button>
        </form>

        <!-- Sign In Link -->
        <p class="mt-4 text-center text-gray-600">Already have an account? 
          <a href="{{url('signin')}}" class="text-green-600 hover:underline">Sign In</a>
        </p>
      </div>

    </div>
  </div>

</body>
</html>
