<x-layout title="Welcome to Notes">
    <div class="flex flex-1">




        <section class="w-3/4 pr-6 flex flex-col">


            <header class="pt-2 pb-5 ml-5">
                <x-notes.header-title/>
            </header>

            <div class="flex-1 px-5 pb-5">
                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($notes as $note)
                        <a href="/notes/show/{{ $note->id  }}" class="block">
                            @if($note->pinned)
                                <x-notes.card-pinned :title="$note->title">
                                    {{ Str::limit($note->body, 100) }}
                                </x-notes.card-pinned>
                            @else
                                <x-notes.card :title="$note->title">
                                    {{ Str::limit($note->body, 100) }}
                                </x-notes.card>
                            @endif
                        </a>
                    @empty
                        <x-notes.empty-notes-par/>
                    @endforelse
                </div>
            </div>


        </section>



        <x-graphics.divider-vertical/>



        <aside class="w-1/4 pl-4">
            <div class="space-y-4">


                <x-forms.form/>

                <x-buttons.create-note-button/>

                <x-graphics.divider/>

                @if($pinned_notes != null && count($pinned_notes) > 0)
                    @foreach($pinned_notes as $pinned_note)
                        <a href="/notes/show/{{ $pinned_note->id  }}" class="block">
                            <x-notes.card-pinned :title="$pinned_note->title">
                                {{ Str::limit($pinned_note->body, 100) }}
                            </x-notes.card-pinned>
                        </a>
                    @endforeach
                @else
                    <x-notes.empty-pinned-notes-par/>
                @endif


            </div>
        </aside>




    </div>
</x-layout>
