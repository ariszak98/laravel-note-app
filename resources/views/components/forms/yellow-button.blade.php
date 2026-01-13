<button
        type="submit"
        {{ $attributes->class(['w-full bg-yellow-500 text-white rounded-xl py-3 font-medium hover:bg-yellow-600 transition']) }}
>
    {{ $slot }}
</button>
