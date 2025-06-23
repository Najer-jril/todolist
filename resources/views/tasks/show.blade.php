<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tugas</title>
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
        .status-pending { color: grey; font-weight: bold; }
        .status-in-progress { color: orange; font-weight: bold; }
        .status-completed { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Tugas</h1>

        <p><strong>Judul:</strong> {{ $task->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $task->description ?? '-' }}</p>
        <p><strong>Kategori:</strong> {{ $task->category->category_name ?? 'Tanpa Kategori' }}</p>
        <p><strong>Jatuh Tempo:</strong> {{ $task->due_date ? $task->due_date->format('d-m-Y') : '-' }}</p>
        <p><strong>Prioritas:</strong> {{ $task->priority ?? '-' }}</p>
        <p><strong>Status:</strong> <span class="status-{{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span></p>
        <p><strong>Dibuat Pada:</strong> {{ $task->created_at->format('d-m-Y H:i') }}</p>
        <p><strong>Terakhir Diperbarui:</strong> {{ $task->updated_at->format('d-m-Y H:i') }}</p>
        <p><strong>Selesai Pada:</strong> {{ $task->completed_at ? $task->completed_at->format('d-m-Y H:i') : '-' }}</p>

        <a href="{{ route('tasks.edit', $task->id) }}" class="button">Edit Tugas</a>
        <a href="{{ route('tasks.index') }}" class="button button-secondary">Kembali ke Daftar Tugas</a>
    </div>
</body>
</html>
