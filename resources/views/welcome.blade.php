<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsureApp — Insurance Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 text-white min-h-screen flex flex-col">

    {{-- Navbar --}}
    <nav class="px-8 py-5 flex justify-between items-center border-b border-slate-700">
        <span class="text-2xl font-bold text-white">🛡️ InsureApp</span>
        <div class="flex gap-3">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 rounded-lg text-sm font-medium transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="px-4 py-2 border border-slate-500 hover:border-indigo-400 text-slate-300 hover:text-white rounded-lg text-sm font-medium transition">
                    Log In
                </a>
                <a href="{{ route('register') }}"
                   class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 rounded-lg text-sm font-medium transition">
                    Register
                </a>
            @endauth
        </div>
    </nav>

    {{-- Hero --}}
    <section class="flex-1 flex flex-col items-center justify-center text-center px-6 py-20">
        <span class="text-indigo-400 text-sm font-semibold uppercase tracking-widest mb-4">
            Insurance Management System
        </span>
        <h1 class="text-5xl font-extrabold leading-tight mb-6 max-w-3xl">
            Manage Your Insurance <span class="text-indigo-400">Simply & Securely</span>
        </h1>
        <p class="text-slate-400 text-lg max-w-xl mb-10">
            Browse insurance offers, submit policy applications, and track your coverage — all in one place.
        </p>
        <div class="flex gap-4">
            <a href="{{ route('register') }}"
               class="px-6 py-3 bg-indigo-600 hover:bg-indigo-500 rounded-xl font-semibold text-white transition">
                Get Started
            </a>
            <a href="{{ route('login') }}"
               class="px-6 py-3 border border-slate-600 hover:border-indigo-400 text-slate-300 hover:text-white rounded-xl font-semibold transition">
                Log In
            </a>
        </div>
    </section>

    {{-- Features --}}
    <section class="px-8 py-16 bg-slate-800">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-2xl font-bold text-center mb-10 text-white">What InsureApp offers</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @foreach([
                    ['🚗', 'Car Insurance', 'Full coverage for your vehicle against accidents and theft.'],
                    ['🏥', 'Medical Insurance', 'Health plans tailored to your personal needs.'],
                    ['🏠', 'Property Insurance', 'Protect your home and belongings.'],
                    ['✈️', 'Travel Insurance', 'Stay covered wherever you go.'],
                ] as [$icon, $title, $desc])
                <div class="bg-slate-700 rounded-xl p-6 text-center hover:bg-slate-600 transition">
                    <div class="text-4xl mb-3">{{ $icon }}</div>
                    <h3 class="font-semibold text-white mb-2">{{ $title }}</h3>
                    <p class="text-slate-400 text-sm">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="px-8 py-6 border-t border-slate-700 text-center text-slate-500 text-sm">
        © {{ date('Y') }} InsureApp. All rights reserved.
    </footer>

</body>
</html>