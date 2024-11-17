<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script defer src="assets/js/registration.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-yellow-300 font-poppins">
    <div class="flex items-center justify-center min-h-screen">
        <form id="form" action="/" method="GET" class="bg-white p-6 rounded-lg shadow-md w-96">

            <h1 class="text-2xl font-bold text-gray-800 mb-4">Registration</h1>

            <div class="mb-4">
                <label for="username" class="block text-gray-700 mb-1">Username</label>
                <input
                    id="username"
                    name="username"
                    type="text"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                >
                <div class="error text-red-500 text-sm mt-1"></div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 mb-1">Email</label>
                <input
                    id="email"
                    name="email"
                    type="text"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                >
                <div class="error text-red-500 text-sm mt-1"></div>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 mb-1">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                >
                <div class="error text-red-500 text-sm mt-1"></div>
            </div>

            <div class="mb-4">
                <label for="password2" class="block text-gray-700 mb-1">Confirm Password</label>
                <input
                    id="password2"
                    name="password2"
                    type="password"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                >
                <div class="error text-red-500 text-sm mt-1"></div>
            </div>

            <button
                type="submit"
                class="w-full bg-yellow-500 hover:bg-yellow-400 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600"
            >
                Sign Up
            </button>
        </form>
    </div>
</body>
</html>
