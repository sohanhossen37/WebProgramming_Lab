<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reviews & Ratings</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600"> Home Service Marketpalce</a>
      <ul class="flex space-x-6">
        <li><a href="home.html" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="service_listing_page.html" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Dashboard</a></li>
        <li><a href="#" class="bg-blue-600 text-white py-2 px-4 rounded">Sign In</a></li>
      </ul>
    </div>
  </nav>

  <!-- Review Section -->
  <section class="container mx-auto py-10">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
      <h2 class="text-3xl font-bold mb-6 text-center">Customer Reviews & Ratings</h2>
      
      <!-- Submit Review Form -->
      <div class="mb-10">
        <h3 class="text-xl font-semibold mb-4">Submit Your Review</h3>
        <form action="#" method="POST">
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="rating">Your Rating</label>
            <select id="rating" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
              <option value="5">5 - Excellent</option>
              <option value="4">4 - Very Good</option>
              <option value="3">3 - Average</option>
              <option value="2">2 - Poor</option>
              <option value="1">1 - Very Poor</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="review">Your Review</label>
            <textarea id="review" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Share your experience" required></textarea>
          </div>
          <button class="bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700">Submit Review</button>
        </form>
      </div>

      <!-- Reviews List -->
      <div class="mb-6">
        <h3 class="text-xl font-semibold mb-4">Customer Reviews</h3>
        
        <!-- Review 1 -->
        <div class="bg-gray-50 p-6 rounded-lg shadow mb-4">
          <div class="flex justify-between items-center mb-2">
            <h4 class="text-lg font-semibold">Taj</h4>
            <span class="text-yellow-500 font-bold">★★★★★</span>
          </div>
          <p class="text-gray-600">Excellent service! The plumber arrived on time and fixed the issue quickly. Highly recommend!</p>
          <span class="text-sm text-gray-500">Posted on Sep 15, 2024</span>
        </div>

        <!-- Review 2 -->
        <div class="bg-gray-50 p-6 rounded-lg shadow mb-4">
          <div class="flex justify-between items-center mb-2">
            <h4 class="text-lg font-semibold">Md Anamul Islam</h4>
            <span class="text-yellow-500 font-bold">★★★★☆</span>
          </div>
          <p class="text-gray-600">Good service but a bit expensive. The cleaning was thorough, though!</p>
          <span class="text-sm text-gray-500">Posted on Sep 10, 2024</span>
        </div>

        <!-- Review 3 -->
        <div class="bg-gray-50 p-6 rounded-lg shadow">
          <div class="flex justify-between items-center mb-2">
            <h4 class="text-lg font-semibold">Fahim Muntasir</h4>
            <span class="text-yellow-500 font-bold">★★★☆☆</span>
          </div>
          <p class="text-gray-600">The electrician was late, but the work was completed satisfactorily. Could improve on punctuality.</p>
          <span class="text-sm text-gray-500">Posted on Sep 5, 2024</span>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-6 mt-10">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 ServiceHub. All rights reserved.</p>
      <div class="flex justify-center space-x-4">
        <a href="#" class="hover:text-gray-300">Privacy Policy</a>
        <a href="#" class="hover:text-gray-300">Terms of Service</a>
        <a href="#" class="hover:text-gray-300">Contact Us</a>
      </div>
    </div>
  </footer>

</body>
</html>
