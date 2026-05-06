<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsureApp — Log In</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 min-h-screen flex">

    {{-- Left Panel --}}
    <div class="hidden md:flex w-1/2 bg-indigo-700 flex-col justify-center items-center p-12">
        <span class="text-5xl mb-6">🛡️</span>
        <h1 class="text-4xl font-extrabold text-white mb-4">InsureApp</h1>
        <p class="text-indigo-200 text-center text-lg max-w-sm">
            Your trusted platform for managing insurance policies and offers.
        </p>
    </div>

    {{-- Right Panel - Form --}}
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-8 py-12">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-bold text-white mb-2">Welcome back</h2>
            <p class="text-slate-400 mb-8">Log in to your account to continue.</p>

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500 text-red-400 rounded-lg px-4 py-3 mb-6 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm text-slate-400 mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full bg-slate-800 border border-slate-600 focus:border-indigo-500 rounded-lg px-4 py-3 text-white outline-none transition"/>
                </div>

                <div>
                    <label class="block text-sm text-slate-400 mb-1">Password</label>
                    <input type="password" name="password" required
                           class="w-full bg-slate-800 border border-slate-600 focus:border-indigo-500 rounded-lg px-4 py-3 text-white outline-none transition"/>
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-slate-400">
                        <input type="checkbox" name="remember" class="accent-indigo-500">
                        Remember me
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-indigo-400 hover:underline">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 rounded-lg transition">
                    Log In
                </button>
            </form>

            <p class="text-slate-500 text-sm text-center mt-6">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-indigo-400 hover:underline">Register</a>
            </p>
        </div>
    </div>

</body>
</html>