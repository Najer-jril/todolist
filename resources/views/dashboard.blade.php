<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="h-full flex flex-col p-6">
        <div class="flex-1 flex items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow-sm">
            <div class="mt-6">
                <button type="button"
                    class="inline-flex item s-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                    +Buat Tugas Baru
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
