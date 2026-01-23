@props([
    /** @var \App\Models\Note */
    'note'
])

<input
        id="note-title"
        autofocus
        type="text"
        name="title"
        value="{{ old('title', $note->title) }}"
        {{ $attributes->class(['w-full bg-transparent text-2xl font-semibold text-gray-900 border-0 p-0 focus:outline-none focus:ring-0']) }}
        placeholder="Note title"
/>
