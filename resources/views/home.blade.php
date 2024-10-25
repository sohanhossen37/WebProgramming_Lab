<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Service Marketplace</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Styling for dropdown */
    .dropdown-content { display: none; }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
      <ul class="flex space-x-6 items-center">
        <li><a href="{{url('home')}}" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="{{url('service_listing_page')}}" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="{{url('about')}}" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="{{url('contact')}}" class="text-gray-600 hover:text-blue-600">Contact</a></li>

        <!-- Conditional Profile Icon or Sign-Up Button -->
        @if(Auth::check())
          <li class="relative dropdown">
            <!-- Profile Icon Button -->
            <button onclick="toggleDropdown()" class="flex items-center space-x-2 text-gray-600 hover:text-blue-600">
              @if(Auth::user()->role == 'service_provider')
                <img src="{{ asset('Images/image.png') }}" alt="Service Provider Icon" class="w-8 h-8 rounded-full">
              @else
                <img src="{{ asset('Images/image.png') }}" alt="Customer Icon" class="w-8 h-8 rounded-full">
              @endif
            </button>

            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="dropdown-content absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg py-2 z-10">
              <a href="{{ Auth::user()->role == 'service_provider' ? url('service_provider') : url('customer_details') }}" 
                 class="block px-4 py-2 text-gray-600 hover:bg-gray-100">
                Profile
              </a>
              <a href="{{ url('logout') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Logout</a>
            </div>
          </li>
        @else
          <li><a href="{{url('signup')}}" class="bg-blue-600 text-white py-2 px-4 rounded">Sign Up</a></li>
        @endif
      </ul>
    </div>
  </nav>

  <!-- JavaScript to Toggle Dropdown -->
  <script>
    function toggleDropdown() {
      const dropdownMenu = document.getElementById('dropdownMenu');
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }

    // Close the dropdown if clicked outside
    window.onclick = function(event) {
      const dropdownMenu = document.getElementById('dropdownMenu');
      if (!event.target.closest('.dropdown')) {
        dropdownMenu.style.display = 'none';
      }
    };
  </script>

  <!-- Hero Section -->
  <section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Find the Best Home Services Near You</h1>
      <p class="text-lg mb-6">Book trusted professionals for all your home service needs</p>
      <a href="#" class="bg-white text-blue-600 py-3 px-6 rounded-full font-semibold">Get Started</a>
    </div>
  </section>

  <!-- Service Categories -->
  <section class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Popular Service Categories</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Category 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="{{ asset('Images/homeCleaning.jpg') }}" alt="Cleaning" class="w-20 h-20 mx-auto mb-4">
          <h3 class="text-xl font-semibold">Home Cleaning</h3>
        </div>
        <!-- Category 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="{{ asset('Images/plumbing.jpg') }}" alt="Plumbing" class="w-20 h-20 mx-auto mb-4">
          <h3 class="text-xl font-semibold">Plumbing</h3>
        </div>
        <!-- Category 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="{{ asset('Images/electrician.jpg') }}" alt="Electrician" class="w-20 h-20 mx-auto mb-4">
          <h3 class="text-xl font-semibold">Electricians</h3>
        </div>
        <!-- Category 4 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="{{ asset('Images/insectKill.jpg') }}" alt="Pest Control" class="w-20 h-20 mx-auto mb-4">
          <h3 class="text-xl font-semibold">Pest Control</h3>
        </div>
        <!-- Category 5 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="{{ asset('Images/carpenting.jpg') }}" alt="Carpenting" class="w-20 h-20 mx-auto mb-4">
          <h3 class="text-xl font-semibold">Carpenting</h3>
        </div>
        <!-- Category 6 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="{{ asset('Images/gardening.jpg') }}" alt="Gardening and Planting" class="w-20 h-20 mx-auto mb-4">
          <h3 class="text-xl font-semibold">Gardening and Planting</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Services -->
  <section class="bg-gray-200 py-16">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10">Featured Services</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('Images/air_conditioner-maintenance.webp') }}" alt="Air Conditioner Repair" class="w-full">
          <div class="p-6">
            <h3 class="text-2xl font-bold mb-3">Air Conditioner Repair</h3>
            <p class="text-gray-600">Get your AC repaired by experienced professionals. Reliable service guaranteed!</p>
            <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Learn More</a>
          </div>
        </div>
        <!-- Service 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('Images/home_cleaning.jpg') }}" alt="Home Cleaning" class="w-full">
          <div class="p-6">
            <h3 class="text-2xl font-bold mb-3">Home Cleaning</h3>
            <p class="text-gray-600">Book professional cleaning services for your home. Quick, efficient, and thorough!</p>
            <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Learn More</a>
          </div>
        </div>
        <!-- Service 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img src="{{ asset('Images/Electrical Repair.jpg') }}" alt="Electrical Repairs" class="w-full">
          <div class="p-6">
            <h3 class="text-2xl font-bold mb-3">Electrical Repairs</h3>
            <p class="text-gray-600">Our skilled electricians can handle all your electrical repair needs safely.</p>
            <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">What Our Customers Say</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <p class="text-gray-600 mb-4">“Great experience! The service was fast and reliable. Highly recommend!”</p>
          <h4 class="text-xl font-semibold">- Mursalin</h4>
        </div>
        <!-- Testimonial 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <p class="text-gray-600 mb-4">“The cleaning service was top-notch, and the staff was professional. Would book again!”</p>
          <h4 class="text-xl font-semibold">- Sohan</h4>
        </div>
        <!-- Testimonial 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <p class="text-gray-600 mb-4">“Quick and affordable plumbing service. I'm really satisfied with the result.”</p>
          <h4 class="text-xl font-semibold">- Jahidul</h4>
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
