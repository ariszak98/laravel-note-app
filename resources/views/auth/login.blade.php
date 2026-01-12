<x-layout title="Log In | Notes">


    <div class="mt-10 py-6 flex justify-center">
        <form action="/login" method="POST" class="w-full max-w-sm space-y-6">
            @csrf


            <!-- Title -->
            <div class="text-center">
                <h2 class="text-2xl font-semibold tracking-tight">
                    Welcome back
                </h2>
                <p class="text-gray-500 text-sm mt-1">
                    Sign in to your notes
                </p>
            </div>


            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input
                    value="{{ old('email') }}"
                    required
                    name="email"
                    type="email"
                    placeholder="you@example.com"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                >
            </div>


            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input
                    required
                    name="password"
                    type="password"
                    placeholder="••••••••"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                >
            </div>


            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-yellow-500 text-white rounded-xl py-3 font-medium hover:bg-yellow-600 transition"
            >
                Log in
            </button>


            <!-- Footer -->
            <p class="text-center text-sm text-gray-500">
                Don’t have an account?
                <a href="/register" class="text-yellow-500 font-medium hover:underline">
                    Register
                </a>
            </p>


            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-5 rounded-2xl border border-red-200/70 bg-white shadow-sm p-4">
                    <div class="flex items-start gap-3">
                        <!-- iOS-ish warning dot -->
                        <div class="mt-1 h-2.5 w-2.5 rounded-full bg-red-500 shrink-0"></div>

                        <div class="min-w-0">
                            <p class="text-sm font-semibold text-gray-900">
                                Something went wrong
                            </p>

                            <ul class="mt-2 space-y-1.5 text-sm text-gray-600">
                                @foreach ($errors->all() as $error)
                                    <li class="flex gap-2">
                                        <span class="text-red-500">•</span>
                                        <span class="break-words">{{ $error }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif



        </form>
    </div>


</x-layout>
