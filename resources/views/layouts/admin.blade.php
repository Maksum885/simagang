<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/icon1.png') }}" type="image/png">

    <!-- Tailwind CSS + Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div class="flex flex-1">
        @include('components.sidebar.admin_sidebar')

        <main class="flex-1 ml-60 p-30">
            @yield('content')
        </main>
    </div>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>

</body>

</html>