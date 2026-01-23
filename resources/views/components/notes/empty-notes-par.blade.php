<div {{ $attributes->class(['col-span-full flex flex-1 items-center justify-center py-16']) }}>
    <div class="flex max-w-md flex-col items-center text-center space-y-4">

        <x-icon class="h-6 w-6"/>

        <x-text.title class="mt-2">
            Notes
        </x-text.title>

        <x-text.subtitle class="text-gray-500">
            A simple and elegant place to write, organize, and keep your thoughts — inspired by iOS Notes.
        </x-text.subtitle>

        <div class="pt-4">
            <x-buttons.yellow-button href="{{ route('notes.create') }}">
                Create your first note
            </x-buttons.yellow-button>
        </div>

    </div>
</div>
