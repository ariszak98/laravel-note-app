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
        <aside class="w-1/4 pl-3">
            <div class="space-y-3">

                <!-- Card 1 -->
                <div class="hover:shadow hover:bg-yellow-400/10 rounded-lg border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm">
                    <p class="text-xs font-semibold text-yellow-500 tracking-wide uppercase">
                        Status
                    </p>
                    <p class="mt-1 text-sm font-semibold text-gray-900">
                        Draft
                    </p>
                    <p class="mt-1 text-sm text-gray-600">
                        This note hasn’t been published yet.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="hover:shadow hover:bg-yellow-400/10 rounded-lg border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm">
                    <p class="text-xs font-semibold text-yellow-500 tracking-wide uppercase">
                        Created
                    </p>
                    <p class="mt-1 text-sm font-semibold text-gray-900">
                        Jan 13, 2026
                    </p>
                    <p class="mt-1 text-sm text-gray-600">
                        Automatically saved as you type.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="hover:shadow hover:bg-yellow-400/10 rounded-lg border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm">
                    <p class="text-xs font-semibold text-yellow-500 tracking-wide uppercase">
                        Tags
                    </p>
                    <div class="mt-2 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/80 border border-gray-200 px-2.5 py-1 text-xs font-medium text-gray-700">
                            Work
                        </span>
                        <span class="rounded-full bg-white/80 border border-gray-200 px-2.5 py-1 text-xs font-medium text-gray-700">
                            Ideas
                        </span>
                        <span class="rounded-full bg-white/80 border border-gray-200 px-2.5 py-1 text-xs font-medium text-gray-700">
                            Personal
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Add tags to organize notes faster.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="hover:shadow hover:bg-yellow-400/10 rounded-lg border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm">
                    <p class="text-xs font-semibold text-yellow-500 tracking-wide uppercase">
                        Quick Actions
                    </p>

                    <div class="mt-3 space-y-2">
                        <button class="w-full text-left rounded-xl border border-gray-200 bg-white/80 px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100 transition">
                            Pin note
                        </button>
                        <button class="w-full text-left rounded-xl border border-gray-200 bg-white/80 px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-100 transition">
                            Duplicate
                        </button>
                        <button class="w-full text-left rounded-xl border border-gray-200 bg-white/80 px-3 py-2 text-sm font-medium text-red-600 hover:bg-gray-100 transition">
                            Delete
                        </button>
                    </div>
                </div>

                <!-- Subtle accent (single yellow usage) -->
                <div class="pt-1">
                    <p class="text-xs text-yellow-500 font-semibold">
                        Notes
                    </p>
                    <p class="mt-2 text-sm text-gray-600 mr-5">
                        Add tags to organize notes faster.Add tags to organize notes faster.Add tags to organize notes faster.Add tags to organize notes faster.Add tags to organize notes faster.
                    </p>
                </div>

            </div>
        </aside>

    </div>



</x-layout>
