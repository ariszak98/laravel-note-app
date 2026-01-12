<x-layout title="Welcome to Notes">


    <div class="min-h-[calc(95vh-6rem)] flex flex-col items-center justify-center text-center px-4">


        <!-- Icon -->
        <div class="w-16 h-16 rounded-2xl bg-yellow-400 flex items-center justify-center shadow-sm mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8 7h8M8 11h8M8 15h5M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-semibold tracking-tight mb-2">
            Notes
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-500 max-w-sm mb-8">
            A simple and elegant place to write, organize, and keep your thoughts — inspired by iOS Notes.
        </p>

        <!-- Actions -->
        <div class="flex gap-4">
            <a
                href="/"
                class="bg-yellow-500 text-white px-6 py-3 rounded-xl font-medium hover:bg-yellow-600 transition"
            >
                Create Note
            </a>
        </div>

    </div>
</x-layout>
