<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Aplikasi Todo List</title>

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Script untuk menangani tema gelap/terang, ditempatkan di head untuk menghindari FOUC (flash of unstyled content)
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-lg p-8 space-y-8 text-center bg-white dark:bg-gray-800 rounded-xl shadow-2xl">

            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                Selamat Datang di Aplikasi Todo List!
            </h1>

            <p class="text-lg text-gray-600 dark:text-gray-400">
                Kelola semua tugas Anda di satu tempat dengan mudah dan efisien. Mulai atur hari Anda sekarang.
            </p>

            <div class="mt-8 flex flex-col sm:flex-row sm:justify-center sm:space-x-4 space-y-4 sm:space-y-0">
                <a href="{{ route('login') }}"
                    class="inline-block px-8 py-3 font-bold text-white transition-transform duration-300 bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                    LOGIN
                </a>
                <a href="{{ route('register') }}"
                    class="inline-block px-8 py-3 font-bold text-white transition-transform duration-300 bg-emerald-500 rounded-lg shadow-md hover:bg-emerald-600 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                    REGISTER
                </a>
            </div>
        </div>
    </div>
</body>

</html>
