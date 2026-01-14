@props(['title' => $title ?? 'Note Title'])

<div
        {{ $attributes->class(['rounded border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm
transition-all duration-150 ease-out
hover:bg-white hover:border-gray-300 hover:shadow-md cursor-pointer']) }}
>

    <p class="text-lg font-semibold text-yellow-500 leading-snug">
        {{ $title }}
    </p>

    <p class="mt-1 text-sm text-gray-600 leading-relaxed line-clamp-3">
        {{ $slot }}
    </p>
</div>
