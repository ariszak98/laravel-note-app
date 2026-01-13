<x-layout title="Welcome to Notes">

    <div class="flex flex-1">

        <!-- Main content (display-only) -->
        <section class="w-3/4 pr-6 flex flex-col">

            <!-- Title -->
            <header class="pt-2 pb-5 ml-5">
                <h1 class="text-3xl font-semibold tracking-tight text-gray-900 leading-tight">
                    Testing Title
                </h1>

                {{-- Optional subtle meta line (very Notes-like) --}}
                <p class="mt-2 text-sm text-yellow-500">
                    22/04/26 10:30 AM
                </p>

                <div class="mt-5 h-px bg-gray-200/60"></div>
            </header>

            <!-- Body -->
            <article class="flex-1 pt-4 ml-5 mr-5">
                <div class="prose prose-sm max-w-none text-gray-800 leading-relaxed prose-a:text-yellow-500 prose-a:hover:underline">
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </article>

        </section>

        <!-- Divider -->
        <div class="w-px bg-gray-200/70 rounded-2xl"></div>

        <!-- Sidebar -->
        <aside class="w-1/4 pl-4">
            <div class="space-y-4">


                <div class="mb-2">
                    <input
                        type="text"
                        placeholder="Search"
                        class="w-full mb-3 rounded-lg border border-yellow-500/70 bg-gray-50/60
               px-4 py-2 text-gray-800/70 font-mono text-lg
               placeholder-yellow-500/70
               focus:outline-none focus:bg-white focus:border-yellow-300 focus:shadow
               transition"
                    >
                </div>



                <button
                    class="w-full mb-3 rounded border border-gray-200/70 bg-gray-50/60 px-4 py-3
           text-left text-xl font-mono text-yellow-500
           shadow-sm
           transition-all duration-150 ease-out
           hover:bg-white hover:border-gray-300 hover:shadow-md"
                >
                    + Create Note
                </button>


                <div class="my-2 h-px bg-gray-200 mb-5"></div>



                <!-- Note Card -->
                <div
                    class="rounded border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm
           transition-all duration-150 ease-out
           hover:bg-white hover:border-gray-300 hover:shadow-md cursor-pointer"
                >
                    <p class="text-lg font-semibold text-yellow-500 leading-snug">
                        Note title goes here
                    </p>
                    <p class="mt-1 text-sm text-gray-600 leading-relaxed line-clamp-3">
                        Small preview text of the note body goes here. This is a short snippet so the user can quickly understand what the note is about.
                    </p>
                </div>

                <!-- Note Card -->
                <div
                    class="rounded border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm
           transition-all duration-150 ease-out
           hover:bg-white hover:border-gray-300 hover:shadow-md cursor-pointer"
                >
                    <p class="text-lg font-semibold text-yellow-500 leading-snug">
                        Another note title
                    </p>
                    <p class="mt-1 text-sm text-gray-600 leading-relaxed line-clamp-3">
                        Another preview of the note body. Keep it short and clean, like Apple Notes does on macOS.
                    </p>
                </div>

                <!-- Note Card -->
                <div
                    class="rounded border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm
           transition-all duration-150 ease-out
           hover:bg-white hover:border-gray-300 hover:shadow-md cursor-pointer"
                >
                    <p class="text-lg font-semibold text-yellow-500 leading-snug">
                        Shopping list
                    </p>
                    <p class="mt-1 text-sm text-gray-600 leading-relaxed line-clamp-3">
                        Milk, eggs, coffee, olive oil, bread… and anything else you need to remember for later.
                    </p>
                </div>

                <!-- Note Card -->
                <div
                    class="rounded border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm
           transition-all duration-150 ease-out
           hover:bg-white hover:border-gray-300 hover:shadow-md cursor-pointer"
                >
                    <p class="text-lg font-semibold text-yellow-500 leading-snug">
                        Ideas for the app
                    </p>
                    <p class="mt-1 text-sm text-gray-600 leading-relaxed line-clamp-3">
                        Add search, pin notes, tags, quick actions, and a clean macOS-like layout with smooth spacing.
                    </p>
                </div>




            </div>
        </aside>

    </div>


















    <!--
    <div class="min-h-[calc(95vh-6rem)] flex flex-col items-center justify-center text-center px-4">

        <x-icon />

        <x-text.title>Notes</x-text.title>

        <x-text.subtitle>
            A simple and elegant place to write, organize, and keep your thoughts — inspired by iOS Notes.
        </x-text.subtitle>

        <div class="flex gap-4">
            <x-buttons.yellow-button href="{{ route('home') }}">Create Note</x-buttons.yellow-button>
        </div>

    </div>
    -->

</x-layout>
