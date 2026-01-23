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
                        <x-forms.input-edit-page :note="$note"/>
                    </div>
                    <x-graphics.divider class="mt-5" />
                </header>

                <article class="pt-4 ml-5 mr-5">
                    <x-forms.textarea :note="$note"/>
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


            @include('scripts.notes.edit-title')
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


            </div>
        </aside>




    </div>
    @include('scripts.notes.edit-title')
</x-layout>
