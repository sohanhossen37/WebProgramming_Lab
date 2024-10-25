<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">ServiceHub</a>
      <ul class="flex space-x-6">
        <li><a href="home.html" class="text-gray-600 hover:text-blue-600">Home</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Chat</a></li>
        <li><a href="#" class="text-gray-600 hover:text-blue-600">Dashboard</a></li>
        <li><a href="#" class="bg-blue-600 text-white py-2 px-4 rounded">Sign In</a></li>
      </ul>
    </div>
  </nav>

  <!-- Chat Section -->
  <section class="container mx-auto py-10">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden h-[80vh]">
      <!-- Sidebar (List of Chats) -->
      <div class="w-1/3 bg-gray-200 p-4">
        <h3 class="text-xl font-bold mb-4">Chats</h3>
        <ul class="space-y-4">
          <!-- Chat 1 -->
          <li class="flex items-center p-3 bg-gray-100 rounded-lg cursor-pointer hover:bg-blue-100">
            <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
            <div>
              <h4 class="text-lg font-semibold">Anisur</h4>
              <p class="text-gray-600 text-sm">Last message: “Thank you!”</p>
            </div>
          </li>
          <!-- Chat 2 -->
          <li class="flex items-center p-3 bg-gray-100 rounded-lg cursor-pointer hover:bg-blue-100">
            <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
            <div>
              <h4 class="text-lg font-semibold">jaidul</h4>
              <p class="text-gray-600 text-sm">Last message: “When can we schedule?”</p>
            </div>
          </li>
          <!-- Chat 3 -->
          <li class="flex items-center p-3 bg-gray-100 rounded-lg cursor-pointer hover:bg-blue-100">
            <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
            <div>
              <h4 class="text-lg font-semibold"> Murslain</h4>
              <p class="text-gray-600 text-sm">Last message: “See you tomorrow!”</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Chat Window -->
      <div class="w-2/3 bg-white flex flex-col">
        <!-- Chat Header -->
        <div class="bg-gray-100 p-4 border-b">
          <h3 class="text-xl font-bold">Chat with Anisur</h3>
          <p class="text-gray-500 text-sm">Last seen 5 minutes ago</p>
        </div>

        <!-- Messages -->
        <div class="flex-1 p-6 overflow-y-scroll">
          <div class="space-y-4">
            <!-- Message from John -->
            <div class="flex justify-start">
              <div class="bg-gray-100 p-4 rounded-lg shadow-sm max-w-xs">
                <p class="text-gray-700">Hello! I'm available for the service tomorrow.</p>
              </div>
            </div>
            <!-- Message from You -->
            <div class="flex justify-end">
              <div class="bg-blue-600 text-white p-4 rounded-lg shadow-sm max-w-xs">
                <p>That works for me! Let's confirm the timing.</p>
              </div>
            </div>
            <!-- Message from John -->
            <div class="flex justify-start">
              <div class="bg-gray-100 p-4 rounded-lg shadow-sm max-w-xs">
                <p class="text-gray-700">10 AM works for me. See you then!</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Message Input -->
        <div class="bg-gray-100 p-4 border-t flex">
          <input type="text" placeholder="Type a message..." class="flex-1 p-3 border border-gray-300 rounded-l-lg focus:outline-none focus:border-blue-500">
          <button class="bg-blue-600 text-white px-6 rounded-r-lg">Send</button>
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
