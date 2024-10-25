<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us -Home Service Marketplace</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="index.html" class="text-2xl font-bold text-blue-600">Home Service Marketplace</a>
      <ul class="flex space-x-6">
        <li><a href="index.html" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="service_listing_page.html" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <!-- <li><a href="chat_page.html" class="text-gray-600 hover:text-blue-600">Message</a></li> -->
        <!-- <li><a href="notifications_page.html" class="text-gray-600 hover:text-blue-600">Notification</a></li> -->
        <li><a href="about.html" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="contact.html" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <li><a href="signup.html" class="bg-blue-600 text-white py-2 px-4 rounded">Sign Up</a></li>
      </ul>
    </div>
  </nav>

  <!-- Contact Section -->
  <section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
      <p class="text-lg mb-6">We're here to help! Get in touch with us for any inquiries or support.</p>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="py-16">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10">Get in Touch</h2>
      <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <form action="#" method="POST">
          <div class="mb-6">
            <label for="name" class="block text-gray-600 mb-2">Your Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
          </div>
          <div class="mb-6">
            <label for="email" class="block text-gray-600 mb-2">Your Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
          </div>
          <div class="mb-6">
            <label for="message" class="block text-gray-600 mb-2">Your Message</label>
            <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Contact Info -->
  <section class="bg-gray-200 py-16">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl font-bold mb-10">Our Contact Information</h2>
      <p class="text-lg text-gray-600 mb-6">Feel free to reach out to us through any of the following:</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Contact Item 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Phone</h3>
          <p class="text-gray-600">01309520915</p>
        </div>
        <!-- Contact Item 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Email</h3>
          <p class="text-gray-600">sohanhossan.sh724@gmail.com</p>
        </div>
        <!-- Contact Item 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-3">Location</h3>
          <p class="text-gray-600">Khulna,Bangladesh</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-600 text-white py-8">
    <div class="container mx-auto text-center">
      <p class="mb-4">&copy; 2024 Home Service. All rights reserved.</p>
      <div class="flex justify-center space-x-4">
        <a href="#" class="hover:text-gray-300">Privacy Policy</a>
        <a href="#" class="hover:text-gray-300">Terms of Service</a>
        <a href="#" class="hover:text-gray-300">Contact Us</a>
      </div>
    </div>
  </footer>

</body>
</html>
