<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script> const indexUrl = "{{ route('index') }}"</script>
    <script defer src="{{ asset('assets/js/login.js') }}"></script>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen bg-yellow-300 font-poppins">
    <div class="bg-white rounded-lg p-6 w-96 shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">LOGIN</h2>
        <form id="login-form" method="GET">
            <!-- Laravel CSRF Token -->
            @csrf
            <div class="mb-4">
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Username / Email"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                    required>
            </div>
            <div class="mb-4 relative">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500"
                    required>
                <img
                    src="assets/images/hide.jpg"
                    alt="Toggle Password Visibility"
                    id="pass-icon"
                    class="absolute top-2.5 right-3 w-6 cursor-pointer"
                    onclick="togglePassword()">
            </div>
            <div class="flex flex-col gap-3">
                <button
                    type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-400 text-white font-semibold py-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    LOGIN
                </button>
                <a
                    href="{{ route('register') }}"
                    class="text-center text-yellow-500 font-medium hover:underline">
                    REGISTER
                </a>
            </div>
        </form>
    </div>
</body>
</html>
