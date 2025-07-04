<x-app-layout>
    {{-- 1. Header yang tadi kita pindahkan, sekarang ada di sini --}}
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                {{-- Judul Halaman --}}
                <div class="flex items-center space-x-4">
                    <span class="text-xl font-semibold text-gray-800 dark:text-gray-100">Daftar Tugas</span>
                </div>
                {{-- Dropdown User --}}
                <div class="flex items-center space-x-4">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center ...">
                                <div>{{ Auth::user()->name }}</div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </header>

    {{-- 2. Konten utama spesifik untuk halaman ini --}}
    <div class="flex-1 overflow-x-hidden overflow-y-auto">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        TAMBAH TUGAS BARU
                        <br>
                        Belum ada tugas yang ditambahkan. Mari buat yang pertama!

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
