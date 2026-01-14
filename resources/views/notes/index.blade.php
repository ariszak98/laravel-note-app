<x-layout title="Welcome to Notes">
    <div class="flex flex-1">



        <section class="w-3/4 pr-6 flex flex-col">

            <header class="pt-2 pb-5 ml-5">
                <x-text.title>My Notes</x-text.title>
                <x-text.par-sm>Your latest notes, shown as cards.</x-text.par-sm>
                <x-graphics.divider class="mt-5" />
            </header>

            <div class="flex-1 px-5 pb-5">
                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($notes as $note)
                        <a href="/notes/show/{{ $note->id  }}" class="block">
                            <x-notes.card :title="$note->title">
                                {{ $note->body }}
                            </x-notes.card>
                        </a>
                    @empty
                        <div class="col-span-full rounded-xl border border-gray-200 bg-gray-50 p-6 text-center text-gray-600">
                            No notes yet. Create your first one ✍️
                        </div>
                    @endforelse
                </div>
            </div>

        </section>



        <x-graphics.divider-vertical/>



        <aside class="w-1/4 pl-4">
            <div class="space-y-4">

                <div class="mb-2">
                    <form action="" method="GET">
                        <x-forms.input-search />
                    </form>
                </div>

                <a href="{{ route('notes.create') }}">
                    <x-buttons.card-button>+ Create Note</x-buttons.card-button>
                </a>

                <x-graphics.divider/>

                @foreach($notes as $note)
                    <a href="/notes/show/{{ $note->id  }}" class="block">
                        <x-notes.card-pinned :title="$note->title">
                            {{ Str::limit($note->body, 100) }}
                        </x-notes.card-pinned>
                    </a>
                @endforeach

            </div>
        </aside>



    </div>


















    <!--
    <div class="min-h-[calc(95vh-6rem)] flex flex-col items-center justify-center text-center px-4">

        <x-icon />

        <x-text.title>Notes</x-text.title>

        <x-text.subtitle>
            A simple and elegant place to write, organize, and keep your thoughts — inspired by iOS Notes.
        </x-text.subtitle>

        <div class="flex gap-4">
            <x-buttons.yellow-button href="{{ route('home') }}">Create Note</x-buttons.yellow-button>
        </div>

    </div>
    -->

</x-layout>
