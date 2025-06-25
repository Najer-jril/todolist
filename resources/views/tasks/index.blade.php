<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Daftar Tugas {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Tambah Tugas Baru -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-2 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('tasks.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700">
                        Tambah Tugas Baru
                    </a>
                </div>
            </div>

            <!-- Show Tasks -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900 dark:text-gray-100">
                    @if ($tasks->isEmpty())
                        <p class="text-gray-500 dark:text-gray-400">Belum ada tugas yang ditambahkan. Mari buat yang pertama!</p>
                    @else
                        <div class="overflow-x-auto border border-gray-200 dark:border-gray-700 rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-centre text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Judul</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-centre text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Kategori</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-centre text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Jatuh Tempo</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-centre text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Prioritas</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-centre text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Status</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-centre text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $task->title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $task->category->category_name ?? 'Tanpa Kategori' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $task->due_date ? $task->due_date->format('d-m-Y') : '-' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap capitalize">
                                                {{ $task->priority ?? '-' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                                    @if ($task->status == 'pending')@endif
                                                    @if ($task->status == 'in progress')@endif
                                                    @if ($task->status == 'completed')@endif">
                                                    {{ $task->status }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <a href="{{ route('tasks.show', $task->id) }}"
                                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900">Lihat</a>
                                                <a href="{{ route('tasks.edit', $task->id) }}"
                                                    class="ml-4 text-yellow-600 dark:text-yellow-400 hover:text-yellow-900">Edit</a>
                                                <form class="inline-block ml-4"
                                                    action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-red-600 dark:text-red-400 hover:text-red-900">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
