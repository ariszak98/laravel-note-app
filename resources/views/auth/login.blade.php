<x-layout title="Log In | Notes">


    <div class="mt-10 py-6 flex justify-center">
        <form action="/login" method="POST" class="w-full max-w-sm space-y-6">
            @csrf


            <div class="text-center">
                <x-text.title-2>Welcome back</x-text.title-2>
                <x-text.par-sm>Sign in to your notes.</x-text.par-sm>
            </div>



            <div>
                <x-forms.label>Email</x-forms.label>
                <x-forms.input
                    value="{{ old('email') }}"
                    required
                    name="email"
                    type="email"
                    placeholder="you@example.com"
                />
            </div>


            <div>
                <x-forms.label>Password</x-forms.label>
                <x-forms.input
                    required
                    name="password"
                    type="password"
                    placeholder="••••••••"
                />
            </div>


            <x-forms.yellow-button>Log in</x-forms.yellow-button>


            <!-- Footer -->
            <p class="text-center text-sm text-gray-500">
                Don’t have an account?
                <a href="/register" class="text-yellow-500 font-medium hover:underline">
                    Register
                </a>
            </p>


            @if ($errors->any())
                <x-forms.errors-div>
                    @foreach ($errors->all() as $error)
                        <x-forms.error-li>{{ $error }}</x-forms.error-li>
                    @endforeach
                </x-forms.errors-div>
            @endif



        </form>
    </div>


</x-layout>
