<x-layout title="Welcome to Notes">
    <div class="flex flex-1">



        <section class="w-3/4 pr-6 flex flex-col">

            <form method="POST"
                  action="{{ route('notes.update', $note) }}"
                  class="flex flex-col flex-1 min-h-0">

                @csrf
                @method('PATCH')

                <header class="pt-2 pb-5 ml-5 shrink-0">
                    <div class="flex items-start gap-2 mb-5">
                        @if($note->pinned)
                            <x-graphics.pin class="w-8 h-8 mt-1 shrink-0" />
                        @endif

                        <input
                            id="note-title"
                            autofocus
                            type="text"
                            name="title"
                            value="{{ old('title', $note->title) }}"
                            class="w-full bg-transparent text-2xl font-semibold text-gray-900 border-0 p-0 focus:outline-none focus:ring-0"
                            placeholder="Note title"
                        />
                    </div>

                    <x-graphics.divider class="mt-5" />
                </header>

                <article class="pt-4 ml-5 mr-5">
        <textarea
            id="note-body"
            name="body"
            rows="6"
            class="
                w-full resize-none overflow-hidden
                bg-transparent
                text-sm text-gray-800 leading-relaxed
                border-0 p-0
                focus:outline-none focus:ring-0
            "
            placeholder="Start writing…"
        >{{ old('body', $note->body) }}</textarea>

                    <div>
                        <x-forms.label>Tags</x-forms.label>
                        <x-forms.input
                            class="max-w-md"
                            name="tags"
                            value="{{ old('tags') }}"
                            required
                            value="{{ $text_tags }}"
                        />
                    </div>


                    <x-forms.yellow-button compact class="mt-10">Submit changes</x-forms.yellow-button>

                </article>


            </form>

            <script>
                (function () {
                    const ta = document.getElementById('note-body');
                    if (!ta) return;

                    const autoGrow = () => {
                        ta.style.height = 'auto';
                        ta.style.height = ta.scrollHeight + 'px';
                    };

                    autoGrow();
                    ta.addEventListener('input', autoGrow);
                })();
            </script>

        </section>


        <x-graphics.divider-vertical/>


        <aside class="w-1/4 pl-3">
            <div class="space-y-3">

                <x-notes.card-show text="CREATED" subtitle="{{ $note->created_at->format('M d, Y') }}" />
                <x-notes.card-show text="UPDATED" subtitle="{{ $note->updated_at->format('M d, Y, H:i') }}" />

                <x-notes.card-show-empty text="Tags">
                    <div class="mt-2 flex flex-wrap gap-2">
                        @if($tags->count() > 0)
                            @foreach($tags as $tag)
                                <x-notes.tag-link :link="$tag->slug">{{ $tag->name }}</x-notes.tag-link>
                            @endforeach
                        @else
                            <span class="font-mono">No tags found.</span>
                        @endif
                    </div>
{{--                    <x-text.par-sm class="mt-3">Add tags to organize notes faster.</x-text.par-sm>--}}
                </x-notes.card-show-empty>

                <x-notes.card-show-empty text="QUICK ACTIONS">
                    <div class="mt-3 space-y-2">
                        @if($note->pinned)
                            <form action="/notes/{{ $note->id }}/unpin" method="POST">
                                @csrf
                                <x-notes.card-button>Unpin note</x-notes.card-button>
                            </form>
                        @else
                            <form action="/notes/{{ $note->id }}/pin" method="POST">
                                @csrf
                                <x-notes.card-button>Pin note</x-notes.card-button>
                            </form>
                        @endif

                        <x-notes.card-button>Edit note</x-notes.card-button>

                        <form action="/notes/{{ $note->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <x-notes.card-button class="text-red-600">Delete</x-notes.card-button>
                        </form>
                    </div>
                </x-notes.card-show-empty>

                <div class="pt-1">
                    <x-text.par-sm class="text-yellow-500 font-semibold">Notes</x-text.par-sm>
                    <x-text.par-sm>
                        Add tags to organize notes faster.Add tags to organize notes faster.Add tags to organize notes faster.Add tags to organize notes faster.Add tags to organize notes faster.
                    </x-text.par-sm>
                </div>

            </div>
        </aside>




    </div>

    <script>
        (function () {
            const focus = new URLSearchParams(window.location.search).get('focus');

            let el = null;

            if (focus === 'title') {
                el = document.getElementById('note-title');
            }

            if (focus === 'body') {
                el = document.getElementById('note-body');
            }

            if (!el) return;

            requestAnimationFrame(() => {
                el.focus();

                // Move cursor to end
                const len = el.value.length;
                el.setSelectionRange(len, len);
            });
        })();
    </script>


</x-layout>
