<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notifications</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">Home Service Marketpalce</a>
      <ul class="flex space-x-6">
        <li><a href="home.html" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="service_listing_page.html" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <!-- <li><a href="chat_page.html" class="text-gray-600 hover:text-blue-600">Message</a></li>
        <li><a href="notifications_page .html" class="text-gray-600 hover:text-blue-600">Notification</a></li> -->
        <li><a href="about.html" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="contact.html" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <li><a href="customer_details.html" class="bg-blue-600 text-white py-2 px-4 rounded">Account</a></li>
      </ul>
    </div>
  </nav>

  <!-- Notifications Section -->
  <section class="container mx-auto py-10">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl mx-auto">
      <h2 class="text-3xl font-bold mb-6 text-center">Your Notifications</h2>

      <!-- Notification List -->
      <div class="space-y-4">
        <!-- Notification 1 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
          <p class="text-gray-700"><strong>New Service Request</strong> from John Doe for <strong>Plumbing</strong> in <strong>Downtown</strong> area. Click here to view more details.</p>
          <span class="text-gray-500 text-sm">2 minutes ago</span>
        </div>

        <!-- Notification 2 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
          <p class="text-gray-700">Your service request for <strong>Home Cleaning</strong> has been accepted by Jane Smith. Click here to confirm the appointment.</p>
          <span class="text-gray-500 text-sm">10 minutes ago</span>
        </div>

        <!-- Notification 3 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
          <p class="text-gray-700">New service provider <strong>ABC Electricians</strong> is available for <strong>Electrical Repairs</strong> in your location.</p>
          <span class="text-gray-500 text-sm">1 hour ago</span>
        </div>

        <!-- Notification 4 -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
          <p class="text-gray-700"><strong>Reminder:</strong> Your scheduled service for <strong>Pest Control</strong> is tomorrow at 10:00 AM.</p>
          <span class="text-gray-500 text-sm">Yesterday</span>
        </div>

        <!-- Load More Button -->
        <div class="text-center">
          <button class="bg-blue-600 text-white py-2 px-6 rounded-full font-semibold">Load More</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-6 mt-10">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Home Service. All rights reserved.</p>
      <div class="flex justify-center space-x-4">
        <a href="#" class="hover:text-gray-300">Privacy Policy</a>
        <a href="#" class="hover:text-gray-300">Terms of Service</a>
        <a href="contact.html" class="hover:text-gray-300">Contact Us</a>
      </div>
    </div>
  </footer>

</body>
</html>
