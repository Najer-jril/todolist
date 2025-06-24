<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Todo List</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100">
    <div class="flex items-center justify-center min-h-screen">

        <div class="w-full max-w-md p-8 space-y-8 text-center bg-white rounded-xl shadow-lg">

            <h1 class="text-4xl font-bold text-slate-800">
                Selamat Datang di Aplikasi Todo List!
            </h1>

            <div class="mt-8 space-x-4">

                <a href="{{ route('login') }}"
                    class="inline-block px-8 py-3 font-bold text-white transition-transform duration-300 bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 hover:scale-105">
                    LOGIN
                </a>

                <a href="{{ route('register') }}"
                    class="inline-block px-8 py-3 font-bold text-white transition-transform duration-300 bg-emerald-500 rounded-lg shadow-md hover:bg-emerald-600 hover:scale-105">
                    REGISTER
                </a>
            </div>
        </div>
    </div>
</body>

</html>

