@props([
    /** @var \App\Models\Note */
    'note'
])

<textarea
        id="note-body"
        name="body"
        rows="6"
        {{ $attributes->class(['
            w-full resize-none overflow-hidden
            bg-transparent
            text-sm text-gray-800 leading-relaxed
            border-0 p-0
            focus:outline-none focus:ring-0
        ']) }}
        placeholder="Start writing…"
>{{ old('body', $note->body) }}</textarea>
