<x-layout title="Register | Notes">

    <div class="mt-10 py-6 flex justify-center">

        <form action="/register" method="POST" class="w-full max-w-sm space-y-6">
            @csrf


            <div class="text-center">
                <x-text.title-2>Create account</x-text.title-2>
                <x-text.par-sm>Start saving your notes.</x-text.par-sm>
            </div>


            <div>
                <x-forms.label>First Name</x-forms.label>
                <x-forms.input
                    value="{{ old('first_name') }}"
                    required
                    name="first_name"
                    type="text"
                    placeholder="Your first name"
                />
            </div>


            <div>
                <x-forms.label>Last Name</x-forms.label>
                <x-forms.input
                    value="{{ old('last_name') }}"
                    required
                    name="last_name"
                    type="text"
                    placeholder="Your last name"
                />
            </div>


            <div>
                <x-forms.label>Email</x-forms.label>
                <x-forms.input
                    value="{{ old('email') }}"
                    name="email"
                    required
                    type="email"
                    placeholder="you@example.com"
                />
            </div>


            <div>
                <x-forms.label>Password</x-forms.label>
                <x-forms.input
                    name="password"
                    required
                    type="password"
                    placeholder="••••••••"
                />
            </div>


            <div>
                <x-forms.label>Confirm Password</x-forms.label>
                <x-forms.input
                    name="password_confirmation"
                    required
                    type="password"
                    placeholder="••••••••"
                />
            </div>


            <x-forms.yellow-button>Create Account</x-forms.yellow-button>


            <!-- Footer -->
            <p class="text-center text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="text-yellow-500 font-medium hover:underline">
                    Log in
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
