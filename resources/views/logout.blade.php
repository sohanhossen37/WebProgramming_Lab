<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center bg-white p-10 rounded shadow-lg">
        <h1 class="text-2xl font-bold text-blue-600 mb-4">You have been logged out</h1>
        <p class="text-gray-600 mb-6">Thank you for using our services. Click below to sign back in.</p>
        <a href="{{ url('signin') }}" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Sign In</a>
    </div>
</body>
</html>
