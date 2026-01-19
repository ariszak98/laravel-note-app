<x-layout title="Welcome to Notes">
    <div class="flex flex-1">



        <section class="w-3/4 pr-6 flex flex-col">
            <header class="pt-2 pb-5 ml-5">
                <div class="flex items-start gap-2 mb-5">
                    @if($note->pinned)
                        <x-graphics.pin class="w-8 h-8 mt-1 shrink-0" />
                    @endif
                        <a href="{{ route('notes.edit', [$note, 'focus' => 'title']) }}"
                           class="cursor-text hover:opacity-80">
                            <x-text.title>{{ $note->title }}</x-text.title>
                        </a>
                </div>
                <x-graphics.divider class="mt-5" />
            </header>
            <article class="flex-1 pt-4 ml-5 mr-5">
                <div class="prose prose-sm max-w-none text-gray-800 leading-relaxed prose-a:text-yellow-500 prose-a:hover:underline">
                    <a href="{{ route('notes.edit', [$note, 'focus' => 'body']) }}"
                       class="block cursor-text hover:opacity-80">
                        <div class="prose prose-sm max-w-none text-gray-800">
                            {{ $note->body }}
                        </div>
                    </a>

                    {{-- Divider --}}
                    <x-graphics.divider class="mt-20" />

                    {{-- Tag area --}}
                    <div class="mt-4 flex flex-wrap gap-2">
                        <span class="text-yellow-500 font-mono">Tags: </span>
                        @if($tags->count() > 0)
                            @foreach($tags as $tag)
                                <x-notes.tag-link :link="$tag->slug">{{ $tag->name }}</x-notes.tag-link>
                            @endforeach
                        @else
                            <span class="font-mono">No tags found.</span>
                        @endif
                    </div>

                </div>
            </article>
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

                        <form action="/notes/{{ $note->id }}/edit" method="GET">
                            @csrf
                            <x-notes.card-button>Edit note</x-notes.card-button>
                        </form>

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
</x-layout>
