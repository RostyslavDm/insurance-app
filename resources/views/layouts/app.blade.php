<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsureApp — @yield('title', 'Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-white min-h-screen flex flex-col">

    <nav class="px-8 py-4 bg-slate-800 border-b border-slate-700 flex justify-between items-center">
        <span class="text-xl font-bold text-white">🛡️ InsureApp</span>
        <div class="flex items-center gap-4">
            <span class="text-slate-300 text-sm">
                {{ auth()->user()->name }}
                <span class="ml-2 text-xs bg-indigo-600 text-white px-2 py-0.5 rounded-full">
                    {{ auth()->user()->roles->first()?->name ?? 'user' }}
                </span>
            </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-sm text-slate-400 hover:text-red-400 transition">
                    Log Out
                </button>
            </form>
        </div>
    </nav>

    <main class="flex-1 p-8">
        @yield('content')
    </main>

    <footer class="px-8 py-4 border-t border-slate-700 text-center text-slate-600 text-xs">
        © {{ date('Y') }} InsureApp
    </footer>

</body>
</html>