<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsureApp — Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-900 min-h-screen flex">

    {{-- Left Panel --}}
    <div class="hidden md:flex w-1/2 bg-indigo-700 flex-col justify-center items-center p-12">
        <span class="text-5xl mb-6">🛡️</span>
        <h1 class="text-4xl font-extrabold text-white mb-4">InsureApp</h1>
        <p class="text-indigo-200 text-center text-lg max-w-sm">
            Join InsureApp and manage your insurance policies with ease.
        </p>
    </div>

    {{-- Right Panel - Form --}}
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-8 py-12">
        <div class="w-full max-w-md">
            <h2 class="text-3xl font-bold text-white mb-2">Create account</h2>
            <p class="text-slate-400 mb-8">Register to browse and apply for insurance offers.</p>

            @if ($errors->any())
                <div class="bg-red-500/10 border border-red-500 text-red-400 rounded-lg px-4 py-3 mb-6 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm text-slate-400 mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           class="w-full bg-slate-800 border border-slate-600 focus:border-indigo-500 rounded-lg px-4 py-3 text-white outline-none transition"/>
                </div>

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

                <div>
                    <label class="block text-sm text-slate-400 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                           class="w-full bg-slate-800 border border-slate-600 focus:border-indigo-500 rounded-lg px-4 py-3 text-white outline-none transition"/>
                </div>

                <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 rounded-lg transition">
                    Create Account
                </button>
            </form>

            <p class="text-slate-500 text-sm text-center mt-6">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-400 hover:underline">Log In</a>
            </p>
        </div>
    </div>

</body>
</html>