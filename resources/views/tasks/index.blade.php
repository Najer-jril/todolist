<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        .container { max-width: 900px; margin: auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .alert { padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .button-group { margin-bottom: 20px; }
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
        .button-danger { background-color: #dc3545; }
        .button-warning { background-color: #ffc107; color: #212529; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .status-pending { color: grey; font-weight: bold; }
        .status-in-progress { color: orange; font-weight: bold; }
        .status-completed { color: green; font-weight: bold; text-decoration: underline; }
        form { display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Tugas Anda</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="button-group">
            <a href="{{ route('tasks.create') }}" class="button">Tambah Tugas Baru</a>
            <a href="{{ route('categories.index') }}" class="button button-secondary">Kelola Kategori</a>
        </div>

        @if ($tasks->isEmpty())
            <p>Belum ada tugas yang ditambahkan. Mari buat yang pertama!</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Jatuh Tempo</th>
                        <th>Prioritas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->category->category_name ?? 'Tanpa Kategori' }}</td>
                            <td>{{ $task->due_date ? $task->due_date->format('d-m-Y') : '-' }}</td>
                            <td>{{ $task->priority ?? '-' }}</td>
                            <td class="status-{{ str_replace(' ', '-', $task->status) }}">
                                {{ $task->status }}
                                @if ($task->status == 'completed' && $task->completed_at)
                                    <br><small>(Selesai: {{ $task->completed_at->format('d-m-Y') }})</small>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}" class="button button-secondary">Lihat</a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="button button-warning">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button button-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
