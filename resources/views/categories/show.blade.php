<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        p { margin-bottom: 10px; }
        strong { font-weight: bold; }
        .button {
            display: inline-block;
            padding: 8px 15px;
            margin-right: 5px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            cursor: pointer;
        }
        .button-secondary { background-color: #6c757d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Kategori</h1>

        <p><strong>Nama Kategori:</strong> {{ $category->category_name }}</p>
        <p><strong>Dibuat Pada:</strong> {{ $category->created_at->format('d-m-Y H:i') }}</p>
        <p><strong>Terakhir Diperbarui:</strong> {{ $category->updated_at->format('d-m-Y H:i') }}</p>

        <a href="{{ route('categories.edit', $category->id) }}" class="button">Edit Kategori</a>
        <a href="{{ route('categories.index') }}" class="button button-secondary">Kembali ke Daftar Kategori</a>
    </div>
</body>
</html>


{{-- ubah jadi tailwind css --}}
