<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
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
        .error { color: #dc3545; font-size: 0.9em; margin-top: -5px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Kategori: {{ $category->category_name }}</h1>

        @if ($errors->any())
            <div style="color: red; margin-bottom: 15px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Digunakan untuk metode UPDATE --}}
            <div>
                <label for="category_name">Nama Kategori:</label>
                <input type="text" id="category_name" name="category_name" value="{{ old('category_name', $category->category_name) }}" required>
                @error('category_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="button">Update Kategori</button>
            <a href="{{ route('categories.index') }}" class="button button-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
