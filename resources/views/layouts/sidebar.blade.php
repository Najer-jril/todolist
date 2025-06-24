<aside class="w-64 flex-shrink-0 flex flex-col bg-slate-800 text-white">

    <div class="h-16 flex items-center justify-center flex-shrink-0 px-4 bg-slate-900">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-200" />
        </a>
    </div>

    <nav class="flex-1 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
            class="flex items-center p-4 mt-4 text-sm font-semibold rounded-lg mx-2 {{ request()->routeIs('dashboard') ? 'bg-slate-900 text-white' : 'text-gray-300 hover:bg-slate-700 hover:text-white' }}">
            <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg></span>
            Dashboard
        </a>
        <a href="{{ route('tasks.index') }}"
            class="flex items-center p-4 mt-2 text-sm font-semibold rounded-lg mx-2 {{ request()->routeIs('tasks.*') ? 'bg-slate-900 text-white' : 'text-gray-300 hover:bg-slate-700 hover:text-white' }}">
            <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg></span>
            Tasks
        </a>
        <a href="{{ route('categories.index') }}"
            class="flex items-center p-4 mt-2 text-sm font-semibold rounded-lg mx-2 {{ request()->routeIs('categories.*') ? 'bg-slate-900 text-white' : 'text-gray-300 hover:bg-slate-700 hover:text-white' }}">
            <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-5 5a2 2 0 01-2.828 0l-7-7A2 2 0 013 8V3a2 2 0 012-2z" />
                </svg></span>
            Categories
        </a>
    </nav>
</aside>
