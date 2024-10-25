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
  <nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="#" class="text-3xl font-extrabold text-blue-600">ServiceHub</a>
      <ul class="flex space-x-6 text-lg">
        <li><a href="home.html" class="text-gray-600 hover:text-blue-600 transition">Home</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Services</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">About</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600 transition">Contact</a></li>
        <li><a href="signup.html" class="bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <!-- Service Details Section -->
  <section class="container mx-auto py-12 px-6 lg:px-0">
    <div class="bg-white p-8 rounded-lg shadow-2xl">
      <div class="grid lg:grid-cols-2 gap-8">
        <!-- Left: Service Image and Info -->
        <div>
          <img src="Images/download.jpg" alt="Service" class="w-full h-80 object-cover rounded-lg shadow-lg mb-6">
        </div>
        <!-- Right: Service Description -->
        <div>
          <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Home Cleaning Service</h1>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Our professional home cleaning service ensures that your home stays clean and tidy with minimal effort from you. We offer a range of cleaning options including deep cleaning, regular maintenance cleaning, and move-in/move-out cleaning.
          </p>
          <!-- Pricing -->
          <p class="text-2xl text-blue-600 font-bold mb-6">300tk/hr</p>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Discounts available for regular customers and bulk bookings.
          </p>
          <button class="bg-blue-600 text-white py-3 px-6 rounded hover:bg-blue-700 transition shadow-lg">Book Now</button>
        </div>
      </div>

      <!-- Divider -->
      <hr class="my-12 border-gray-200">

      <!-- Provider Information -->
      <div>
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">Service Provider</h2>
        <div class="grid lg:grid-cols-3 gap-6">
          <div>
            <p class="text-gray-600 font-bold">Name</p>
            <p class="text-lg text-gray-800">John Doe</p>
          </div>
          <div>
            <p class="text-gray-600 font-bold">Experience</p>
            <p class="text-lg text-gray-800">5 years</p>
          </div>
          <div>
            <p class="text-gray-600 font-bold">Rating</p>
            <p class="text-lg text-gray-800">4.7/5</p>
          </div>
        </div>
      </div>

      <!-- Customer Reviews -->
      <div class="mt-12">
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">Customer Reviews</h2>
        <div class="space-y-6">
          <!-- Review 1 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-xl text-gray-800 font-bold mb-2">Jane Smith</p>
            <p class="text-gray-600 leading-relaxed">"Excellent service! My home has never looked better. Highly recommend!"</p>
          </div>
          <!-- Review 2 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow">
            <p class="text-xl text-gray-800 font-bold mb-2">Michael Lee</p>
            <p class="text-gray-600 leading-relaxed">"Very professional and efficient. Will definitely book again."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-6">
    <div class="container mx-auto text-center">
      <p class="text-lg">&copy; 2024 ServiceHub. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
