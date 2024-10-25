<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Listings</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">ServiceHub</a>
      <ul class="flex space-x-6">
        <li><a href="home.html" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <li><a href="signup.html" class="bg-blue-600 text-white py-2 px-4 rounded">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-blue-600 text-white py-10">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold">Browse Home Services</h1>
      <p class="text-lg">Find reliable service providers in your area</p>
    </div>
  </header>

  <!-- Service Listing Section -->
  <section class="container mx-auto py-10">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-3xl font-bold">Available Services</h2>
      <!-- Search Bar -->
      <div class="relative">
        <input type="text" placeholder="Search services..." class="border border-gray-300 rounded-full py-2 px-4 w-64">
        <button class="absolute right-2 top-2 text-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Grid Layout for Services -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Single Service Card -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/download.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Home Cleaning Service</h3>
        <p class="text-gray-600 mb-4">Reliable home cleaning services with expert professionals.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">300tk/hr</span>
          <a href="{{ url('/services/service_details1') }}" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <!-- Repeat for more services -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/plumbing.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Plumbing Services</h3>
        <p class="text-gray-600 mb-4">Experienced plumbers for all your plumbing needs.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">500tk/hr</span>
          <a href="{{ url('/services/plumbing') }}" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <!-- New Service Cards -->
      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/painting.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Painting Service</h3>
        <p class="text-gray-600 mb-4">Professional painting services for your home or office.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">400tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/carpet_cleaning.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Carpet Cleaning</h3>
        <p class="text-gray-600 mb-4">Deep carpet cleaning services for a fresh home.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">350tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/appliance_repair.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Appliance Repairs</h3>
        <p class="text-gray-600 mb-4">Expert appliance repair services at your convenience.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">450tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/hvac.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">HVAC Services</h3>
        <p class="text-gray-600 mb-4">Professional HVAC services for installation and repair.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">600tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <!-- Continue adding more service cards as needed -->

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/interior_design.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Interior Design</h3>
        <p class="text-gray-600 mb-4">Expert interior design services for a modern home.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">700tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/carpentry.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Carpentry Services</h3>
        <p class="text-gray-600 mb-4">Professional carpentry services for your home projects.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">550tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/assembly.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Assembly Services</h3>
        <p class="text-gray-600 mb-4">Fast and reliable assembly services for furniture and more.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">200tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/chimney_cleaning.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Chimney Cleaning</h3>
        <p class="text-gray-600 mb-4">Reliable chimney cleaning services for a safe home.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">400tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/door_hardware_installation.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Door Hardware Installation</h3>
        <p class="text-gray-600 mb-4">Expert door hardware installation services.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">350tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/fence_installation.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Fence Installation</h3>
        <p class="text-gray-600 mb-4">High-quality fence installation services for your property.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">800tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/general_handyman.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">General Handyman Services</h3>
        <p class="text-gray-600 mb-4">Expert handyman services for any small jobs around the home.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">450tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/gutter_cleaning.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Gutter Cleaning</h3>
        <p class="text-gray-600 mb-4">Reliable gutter cleaning services for your home maintenance.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">300tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/pool_maintenance.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Pool Maintenance</h3>
        <p class="text-gray-600 mb-4">Expert pool maintenance services to keep your pool clean.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">700tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/tiling.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Tiling Services</h3>
        <p class="text-gray-600 mb-4">Professional tiling services for your home improvement needs.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">600tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/fireplaces.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Fireplaces Installation</h3>
        <p class="text-gray-600 mb-4">Expert fireplace installation for a cozy home.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">900tk/hr</span>
          <a href="/service-details" class="text-blue-600 font-semibold">View Details</a>
        </div>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-lg">
        <img src="Images/electrical.jpg" alt="Service" class="w-full h-40 object-cover rounded-md mb-4">
        <h3 class="text-xl font-semibold mb-2">Electrical Services</h3>
        <p class="text-gray-600 mb-4">Experienced electricians for all your electrical needs.</p>
        <div class="flex justify-between items-center">
          <span class="text-blue-600 font-bold">500tk/hr</span>
          <a href="{{ url('/services/electric') }}" class="text-blue-600 font-semibold">View Details</a>
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
