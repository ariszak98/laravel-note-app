<!-- Header -->
<header class="sticky top-0 z-50 backdrop-blur-xl bg-white/70 border-b border-gray-200">
    <div class="w-full px-4 py-3 flex items-center gap-4">
        <h1 class="ml-5 text-3xl font-bold tracking-tight">
            <a href="/">
                Notes
            </a>
        </h1>

        @guest()
            <button class="mr-5 ml-auto text-yellow-500 text-lg font-mono font-semibold hover:underline hover:font-bold">
                <a href="/register">
                    Register
                </a>
            </button>

            <button class="mr-5 text-yellow-500 text-lg font-mono font-semibold hover:underline hover:font-bold">
                <a href="/login">
                    Login
                </a>
            </button>
        @endguest

        @auth
            <div class="ml-auto flex items-center">
                <span class="mr-2 text-lg font-mono text-yellow-500">
                    Hello,
                </span>
                <span class="mr-6 font-mono text-lg">
                    {{ auth()->user()->first_name }}
                </span>
                <form action="/logout" method="POST" class="mr-5">
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="text-yellow-500 text-lg underline font-mono hover:underline hover:font-bold"
                    >
                        Logout
                    </button>
                </form>
            </div>
        @endauth

    </div>
</header>
