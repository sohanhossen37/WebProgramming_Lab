<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us -  Home Service</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="index.html" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
      <ul class="flex space-x-6">
        <li><a href="{{url('home')}}  "class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="{{url('service_listing_page')}}" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="{{url('chat_page')}}" class="text-gray-600 hover:text-blue-600">Message</a></li>
        <li><a href="{{url('notifications_page')}}" class="text-gray-600 hover:text-blue-600">Notification</a></li>
        <li><a href="{{url('about')}}" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="{{url('contact')}}" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <li><a href="{{url('signup')}}" class="bg-blue-600 text-white py-2 px-4 rounded">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <!-- About Section -->
  <section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">About ServiceHub</h1>
      <p class="text-lg mb-6">
        ServiceHub is your one-stop marketplace for finding trusted and reliable home service professionals. 
        Our mission is to make it easy for homeowners to book high-quality home services from experienced 
        and verified professionals. Whether you need cleaning, plumbing, electrical work, or pest control, 
        we connect you with the best service providers in your area.
      </p>
    </div>
  </section>

  <!-- Our Mission -->
  <section class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Our Mission</h2>
      <p class="text-gray-600 text-lg mb-6">
        At ServiceHub, we aim to provide an easy-to-use platform where homeowners can find reliable service 
        providers for a variety of tasks. Our goal is to create a seamless experience, ensuring that every 
        service you book meets your expectations in quality, time, and cost.
      </p>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="bg-gray-200 py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Why Choose Us?</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Reason 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Verified Professionals</h3>
          <p class="text-gray-600">All our service providers are thoroughly vetted to ensure you get the best quality service.</p>
        </div>
        <!-- Reason 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Affordable Pricing</h3>
          <p class="text-gray-600">We offer competitive pricing across all services, ensuring value for your money.</p>
        </div>
        <!-- Reason 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Customer Satisfaction</h3>
          <p class="text-gray-600">Our customers love our services. We focus on delivering top-notch quality and customer support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-8">
    <div class="container mx-auto text-center">
      <p class="mb-4">&copy; 2024 ServiceHub. All rights reserved.</p>
      <div class="flex justify-center space-x-4">
        <a href="#" class="hover:text-gray-300">Privacy Policy</a>
        <a href="#" class="hover:text-gray-300">Terms of Service</a>
        <a href="#" class="hover:text-gray-300">Contact Us</a>
      </div>
    </div>
  </footer>

</body>
</html>
