<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">ServiceHub</a>
      <ul class="flex space-x-6">
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <li><a href="#" class="bg-blue-600 text-white py-2 px-4 rounded">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <!-- Service Details Section -->
  <section class="container mx-auto py-10">
    <div class="flex flex-col md:flex-row gap-8">
      
      <!-- Service Image -->
      <div class="md:w-1/2">
        <img src="Images/homeservices.avif" alt="Service Image" class="rounded-lg shadow-md w-full">
      </div>

      <!-- Service Info -->
      <div class="md:w-1/2">
        <h1 class="text-3xl font-bold mb-4">Home Cleaning Service</h1>
        <p class="text-gray-600 mb-6">Professional home cleaning services with experienced cleaners to ensure a spotless home. Available on flexible schedules with customizable cleaning plans to suit your needs.</p>

        <!-- Price -->
        <div class="flex items-center mb-4">
          <span class="text-blue-600 font-bold text-2xl">200tk/hr</span>
        </div>

        <!-- Location -->
        <div class="mb-6">
          <p class="text-gray-700"><strong>Location:</strong> Dhaka, Bangladesh</p>
        </div>

        <!-- Service Provider Info -->
        <div class="bg-white shadow-md p-4 rounded-lg mb-6">
          <h3 class="text-xl font-semibold">Service Provider: <a href="#" class="text-blue-600">CleanCo Services</a></h3>
          <p class="text-gray-600">4.5/5.0 (120 reviews)</p>
          <a href="#" class="text-blue-600 mt-2 inline-block">View Provider Profile</a>
        </div>

        <!-- Booking Button -->
        <a href="#" class="bg-blue-600 text-white py-3 px-6 rounded-lg inline-block font-semibold">Book Now</a>
      </div>
    </div>
  </section>

  <!-- Reviews Section -->
  <section class="container mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">Customer Reviews</h2>

    <div class="space-y-6">
      <!-- Single Review -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-gray-600 mb-4">“The cleaners were prompt, professional, and thorough. My home looks amazing!”</p>
        <div class="flex items-center">
          <h4 class="font-semibold">- Rohan</h4>
          <span class="ml-4 text-yellow-500">★★★★★</span>
        </div>
      </div>

      <!-- Repeat for more reviews -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <p class="text-gray-600 mb-4">“Great experience overall. Very reliable and reasonably priced!”</p>
        <div class="flex items-center">
          <h4 class="font-semibold">- Saimun Ahamed</h4>
          <span class="ml-4 text-yellow-500">★★★★☆</span>
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
