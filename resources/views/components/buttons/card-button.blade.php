<button
        {{ $attributes->class(['w-full mb-3 rounded border border-gray-200/70 bg-gray-50/60 px-4 py-3
       text-left text-xl font-mono text-yellow-500
       shadow-sm
       transition-all duration-150 ease-out
       hover:bg-white hover:border-gray-300 hover:shadow-md']) }}
>
    {{ $slot }}
</button>
