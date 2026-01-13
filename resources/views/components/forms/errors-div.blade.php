<div class="mb-5 rounded-2xl border border-red-200/70 bg-white shadow-sm p-4">
    <div class="flex items-start gap-3">
        <!-- iOS-ish warning dot -->
        <div class="mt-1 h-2.5 w-2.5 rounded-full bg-red-500 shrink-0"></div>

        <div class="min-w-0">
            <p class="text-sm font-semibold text-gray-900">
                Something went wrong
            </p>

            <ul class="mt-2 space-y-1.5 text-sm text-gray-600">
                {{ $slot }}
            </ul>
        </div>
    </div>
</div>
