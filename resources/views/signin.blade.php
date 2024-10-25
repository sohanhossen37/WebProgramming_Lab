<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In - Home Service Marketplace</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-emerald-200">

@if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
 @endif

  <!-- Sign-In Container -->
  <div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Sign In to Home Service Marketplace</h2>
      
      <!-- Sign-In Form -->
      <form action="{{ route('signin.submit') }}" method="POST">
      
      @csrf
      <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-gray-700">Email Address</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="you@example.com" required>
        </div>

        <!-- Password -->
        <div class="mb-6">
          <label for="password" class="block text-gray-700">Password</label>
          <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Your password" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">Sign In</button>
      </form>

      <!-- Sign Up Link -->
      <p class="mt-4 text-center text-gray-600">Don't have an account? 
        <a href="signup.html" class="text-blue-600 hover:underline">Sign Up</a>
      </p>
    </div>
  </div>

</body>
</html>
