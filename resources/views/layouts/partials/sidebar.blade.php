<!-- mobile menu bar -->
<div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
    <!-- logo -->
    <a href="{{ route('home') }}" class="block p-4 text-white font-bold">{{ config('app.name') }}</a>

    <!-- mobile menu button -->
    <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
</div>

<!-- sidebar -->
<aside
    class="z-50 sidebar-menu bg-gray-900 text-blue-100 w-72 space-y-6 py-7 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

    <div class="flex flex-row justify-between gap-2 space-x-2 px-6 items-center">
        <a href="{{ route('home') }}" id="sidebar-logo" class="text-white flex flex-row gap-2 items-center">
            <span class="text-lg font-bold text-center">{{ config('app.name') }}</span>
        </a>
    </div>

    <nav>
        <a class="text-gray-100 {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'dashboard' ? 'bg-black border-l-4 border-blue-900' : 'border-l-4 border-transparent' }} flex items-center mt-2 py-2.5 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 gap-2"
           href="{{ route('dashboard') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            Dashboard
        </a>

        <a class="text-gray-100 {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'example.table' ? 'bg-black border-l-4 border-blue-900' : 'border-l-4 border-transparent' }} flex items-center py-2.5 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 gap-2"
           href="{{ route('example.table') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
            Example - Table
        </a>

        <a class="text-gray-100 {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'example.form' ? 'bg-black border-l-4 border-blue-900' : 'border-l-4 border-transparent' }} flex items-center py-2.5 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 gap-2"
           href="{{ route('example.form') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Example - Form
        </a>

        <a class="text-gray-100 {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'example.breadcrumb' ? 'bg-black border-l-4 border-blue-900' : 'border-l-4 border-transparent' }} flex items-center py-2.5 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 gap-2"
           href="{{ route('example.breadcrumb') }}">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Example - Breadcrumb
        </a>
    </nav>
</aside>


