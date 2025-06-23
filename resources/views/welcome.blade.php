<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Todo List</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        .button-group a {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .button-tasks {
            background-color: #007bff; /* Biru */
        }
        .button-tasks:hover {
            background-color: #0056b3;
        }
        .button-categories {
            background-color: #28a745; /* Hijau */
        }
        .button-categories:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Todo List!</h1>
        <div class="button-group">
            <a href="{{ route('tasks.index') }}" class="button-tasks">Lihat Daftar Tugas</a>
            <a href="{{ route('categories.index') }}" class="button-categories">Kelola Kategori</a>
        </div>
    </div>
</body>
</html>
