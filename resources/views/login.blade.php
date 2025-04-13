<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="bg-white p-8 rounded shadow w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Login</h1>

        <form action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Username</label>
                <input type="username" name="username" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <label class="block mb-1 font-semibold">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded">
                Login
            </button>
        </form>
    </div>

</body>

</html>