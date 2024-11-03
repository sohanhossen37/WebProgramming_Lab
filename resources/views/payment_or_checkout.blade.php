<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment/Checkout</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">ServiceHub</a>
      <ul class="flex space-x-6">
        <li><a href="home.html" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="service_details_page.html" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="about.html" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="contact.html" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <!-- <li><a href="#" class="text-gray-600 hover:text-blue-600">Dashboard</a></li> -->
        <li><a href="customer_details.html" class="bg-blue-600 text-white py-2 px-4 rounded">Account</a></li>
      </ul>
    </div>
  </nav>

  <!-- Checkout Section -->
  <section class="container mx-auto py-10">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
      <h2 class="text-3xl font-bold mb-6 text-center">Payment/Checkout</h2>
      
      <!-- Order Summary -->
      <div class="mb-6">
        <h3 class="text-xl font-semibold mb-4">Order Summary</h3>
        <div class="flex justify-between items-center mb-3">
          <span>Service:</span>
          <span class="font-bold">Home Cleaning</span>
        </div>
        <div class="flex justify-between items-center mb-3">
          <span>Date:</span>
          <span class="font-bold">Sep 24, 2024</span>
        </div>
        <div class="flex justify-between items-center mb-3">
          <span>Time:</span>
          <span class="font-bold">10:00 AM</span>
        </div>
        <div class="flex justify-between items-center mb-3">
          <span>Location:</span>
          <span class="font-bold">123 Main Street, Khulna</span>
        </div>
        <div class="flex justify-between items-center border-t pt-3">
          <span class="text-lg font-semibold">Total Amount:</span>
          <span class="text-lg font-bold">$100.00</span>
        </div>
      </div>

      <!-- Payment Form -->
      <h3 class="text-xl font-semibold mb-4">Payment Details</h3>
      <form action="#" method="POST">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2" for="card-name">Name on Card</label>
          <input type="text" id="card-name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder=" MD Mursalin" required>
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700 mb-2" for="card-number">Card Number</label>
          <input type="text" id="card-number" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="1234 5678 9101 1121" required>
        </div>
        <div class="flex space-x-4 mb-4">
          <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="expiry-date">Expiry Date</label>
            <input type="text" id="expiry-date" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="MM/YY" required>
          </div>
          <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="cvv">CVV</label>
            <input type="text" id="cvv" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="123" required>
          </div>
        </div>

        <!-- Submit Payment -->
        <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Submit Payment</button>
      </form>
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
