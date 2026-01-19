@props(['link'])


<a href="/tag/{{ $link }}">
    <span {{ $attributes->class(['rounded-full bg-white/80 border border-gray-200 px-2.5 py-1 text-xs font-medium text-gray-700']) }}>
        {{ $slot }}
    </span>
</a>
