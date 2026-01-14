<x-layout title="Welcome to Notes">
    <div class="flex flex-1">



        <section class="w-3/4 pr-6 flex flex-col">
            <header class="pt-2 pb-5 ml-5">
                <div class="flex items-start gap-2 mb-5">
                    <x-graphics.pin class="w-8 h-8 mt-1 shrink-0" />
                    <x-text.title>{{ $note->title }}</x-text.title>
                </div>
                <x-graphics.divider class="mt-5" />
            </header>
            <article class="flex-1 pt-4 ml-5 mr-5">
                <div class="prose prose-sm max-w-none text-gray-800 leading-relaxed prose-a:text-yellow-500 prose-a:hover:underline">
                    {{ $note->body  }}
                </div>
            </article>
        </section>


        <x-graphics.divider-vertical/>


        <aside class="w-1/4 pl-3">
            <div class="space-y-3">

                <x-notes.card-show text="CREATED" subtitle="{{ $note->created_at->format('M d, Y') }}" />
                <x-notes.card-show text="UPDATED" subtitle="{{ $note->created_at->format('M d, Y, H:h') }}" />

                <x-notes.card-show-empty text="Tags">
                    <div class="mt-2 flex flex-wrap gap-2">
                        <x-notes.tag>Work</x-notes.tag>
                        <x-notes.tag>Ideas</x-notes.tag>
                        <x-notes.tag>Personal</x-notes.tag>
                    </div>
                    <x-text.par-sm class="mt-3">Add tags to organize notes faster.</x-text.par-sm>
                </x-notes.card-show-empty>

                <x-notes.card-show-empty text="QUICK ACTIONS">
                    <div class="mt-3 space-y-2">
                        <x-notes.card-button>Pin note</x-notes.card-button>
                        <x-notes.card-button>Edit note</x-notes.card-button>
                        <x-notes.card-button class="text-red-600">Delete</x-notes.card-button>
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
