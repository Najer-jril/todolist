<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="date"], select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea { resize: vertical; min-height: 80px; }
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
        <h1>Edit Tugas: {{ $task->title }}</h1>

        @if ($errors->any())
            <div style="color: red; margin-bottom: 15px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Digunakan untuk metode UPDATE --}}

            <div>
                <label for="title">Judul Tugas:</label>
                <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required>
                @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="description">Deskripsi:</label>
                <textarea id="description" name="description">{{ old('description', $task->description) }}</textarea>
                @error('description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="category_id">Kategori:</label>
                <select id="category_id" name="category_id">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $task->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="due_date">Jatuh Tempo:</label>
                <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date ? $task->due_date->format('Y-m-d') : '') }}">
                @error('due_date')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="priority">Prioritas:</label>
                <select id="priority" name="priority">
                    <option value="">-- Pilih Prioritas --</option>
                    <option value="high" {{ old('priority', $task->priority) == 'high' ? 'selected' : '' }}>High</option>
                    <option value="medium" {{ old('priority', $task->priority) == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="low" {{ old('priority', $task->priority) == 'low' ? 'selected' : '' }}>Low</option>
                </select>
                @error('priority')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div>
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="pending" {{ old('status', $task->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in progress" {{ old('status', $task->status) == 'in progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ old('status', $task->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
                @error('status')<div class="error">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="button">Update Tugas</button>
            <a href="{{ route('tasks.index') }}" class="button button-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
