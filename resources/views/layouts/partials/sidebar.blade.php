<aside class="w-64 flex flex-col bg-slate-800 text-white"> <!-- Changed w-max-content to w-64 -->

    <div class="h-full flex items-center justify-center flex-shrink-0 px-4 mt-4 bg-slate-900">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-200" />
        </a>
    </div>

    <nav class="flex-1 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
            class="flex items-center p-4 mt-4 text-sm font-semibold rounded-lg mx-4 {{ request()->routeIs('dashboard') ? 'bg-slate-900 text-white' : 'text-gray-300 hover:bg-slate-700 hover:text-white' }}">
            <span class="mr-3"></span>
            Dashboard
        </a>
        <a href="{{ route('tasks.index') }}"
            class="flex items-center p-4 mt-2 text-sm font-semibold rounded-lg mx-4 {{ request()->routeIs('tasks.*') ? 'bg-slate-900 text-white' : 'text-gray-300 hover:bg-slate-700 hover:text-white' }}">
            <span class="mr-3"></span>
            Tasks
        </a>
        <a href="{{ route('categories.index') }}"
            class="flex items-center p-4 mt-2 text-sm font-semibold rounded-lg mx-4 {{ request()->routeIs('categories.*') ? 'bg-slate-900 text-white' : 'text-gray-300 hover:bg-slate-700 hover:text-white' }}">
            <span class="mr-3"></span>
            Categories
        </a>
    </nav>
</aside>
