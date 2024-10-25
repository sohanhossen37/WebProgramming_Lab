<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Provider Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">ServiceHub</a>
      <ul class="flex space-x-6">
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="service_listing_page.html" class="text-gray-600 hover:text-blue-600">Services</a></li>
        <li><a href="about.html" class="text-gray-600 hover:text-blue-600">About</a></li>
        <li><a href="contact.html" class="text-gray-600 hover:text-blue-600">Contact</a></li>
        <!-- <li><a href="#" class="text-gray-600 hover:text-blue-600">Dashboard</a></li> -->
        <li><a href="home.html" class="bg-blue-600 text-white py-2 px-4 rounded">Account</a></li>
      </ul>
    </div>
  </nav>

  <!-- Dashboard Header -->
  <section class="bg-blue-600 text-white py-6">
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold">Welcome, Sohan Hossen!</h1>
      <p>Manage your services and requests from your dashboard.</p>
    </div>
  </section>

  <!-- Dashboard Content -->
  <section class="container mx-auto py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Sidebar -->
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-xl font-bold mb-6">Dashboard Menu</h2>
      <ul class="space-y-4">
        <li><a href="#" class="text-gray-700 hover:text-blue-600">My Profile</a></li>
        
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Job Requests</a></li>
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Accepted Jobs</a></li>
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Earnings</a></li>
        <li><a href="notifications_page .html" class="text-gray-700 hover:text-blue-600">Notifications</a></li>
        <li><a href="#" class="text-gray-700 hover:text-blue-600">Support</a></li>
        <li><a href="logout.html" class="text-gray-700 hover:text-blue-600">Log out</a></li>
      </ul>
    </div>

    <!-- Profile Section -->
    <div class="col-span-2">
      <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-bold mb-4">My Profile</h2>
        <form>
          <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" value="Sohan Hossen">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Email</label>
              <input type="email" class="w-full px-4 py-2 border rounded-lg" value="sohanhossan.sh724@gmail.com">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Phone</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" value="01309520915">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-semibold mb-2">Location</label>
              <input type="text" class="w-full px-4 py-2 border rounded-lg" value="Satkhira, Bangladesh">
            </div>
          </div>
          <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg mt-4">Update Profile</button>
        </form>
      </div>

      <!-- Job Requests -->
      <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h2 class="text-xl font-bold mb-4">Services Requests</h2>
        <div class="space-y-4">
          <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg">
            <div>
              <h3 class="font-bold">Plumbing Repair  --Mursalin</h3>
              <p class="text-gray-600">Location: Dhaka | Date: 20th September, 2024</p>
            </div>
            <a href="#" class="text-blue-600 font-semibold">Accept</a>
          </div>

          <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg">
            <div>
              <h3 class="font-bold">Home Cleaning --jahidul islam</h3>
              <p class="text-gray-600">Location: Dhaka | Date: 22nd September, 2024</p>
            </div>
            <a href="#" class="text-blue-600 font-semibold">Accept</a>
          </div>
        </div>
      </div>

      <!-- Accepted Jobs -->
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-bold mb-4">Accepted Services</h2>
        <div class="space-y-4">
          <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg">
            <div>
              <h3 class="font-bold">Electrical Repair --Rahad</h3>
              <p class="text-gray-600">Date: 21st September, 2024 | Status: <span class="text-yellow-500">In Progress</span></p>
            </div>
            <a href="#" class="text-blue-600 font-semibold">View Details</a>
          </div>

          <div class="flex justify-between items-center bg-gray-100 p-4 rounded-lg">
            <div>
              <h3 class="font-bold">Air Conditioner Repair - Abdur saamad</h3>
              <p class="text-gray-600">Date: 18th September, 2024 | Status: <span class="text-green-500">Completed</span></p>
            </div>
            <a href="#" class="text-blue-600 font-semibold">View Details</a>
          </div>
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
