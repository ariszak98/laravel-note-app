@props(['compact' => false])

<button
    type="submit"
    {{ $attributes->class([
        $compact ? 'inline-flex px-5 py-2.5' : 'w-full py-3',
        'items-center justify-center',
        'bg-yellow-500 text-white rounded-xl',
        'font-medium hover:bg-yellow-600 transition'
    ]) }}
>
    {{ $slot }}
</button>
