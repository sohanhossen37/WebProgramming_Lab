<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  @include('partials.navbar') <!-- Assuming you have a separate navbar file -->

  <div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">Available Services</h1>

    <!-- Loop through each category and its services -->
    @foreach ($groupedServices as $categoryName => $services)
      <h2 class="text-2xl font-semibold my-4">{{ $categoryName }}</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($services as $service)
          <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="{{ asset($service->image_path) }}" alt="{{ $service->service_name }} image" class="w-full h-32 object-cover rounded mb-4">
            <h3 class="text-lg font-bold">{{ $service->service_name }}</h3>
            <p class="text-gray-600">{{ $service->description }}</p>
            <p class="text-sm text-gray-500">Type: {{ $service->category ? $service->category->category_name : 'N/A' }}</p>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>

  <!-- Footer -->
  <footer class="bg-white py-6 mt-10">
    <div class="container mx-auto text-center">
      <p class="text-gray-600">© 2024 Home Service Marketplace. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
