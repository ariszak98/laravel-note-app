@props(['text' => $text ?? '', 'subtitle' => $subtitle ?? ''])


<div {{ $attributes->class(['hover:shadow hover:bg-yellow-400/10 rounded-lg border border-gray-200/70 bg-gray-50/60 p-4 shadow-sm']) }}>
    <p class="text-xs font-semibold text-yellow-500 tracking-wide uppercase">
        {{ $text }}
    </p>
    <p class="mt-1 text-sm font-semibold text-gray-900">
        {{ $subtitle }}
    </p>
    <p class="mt-1 text-sm text-gray-600">
        {{ $slot }}
    </p>
</div>
