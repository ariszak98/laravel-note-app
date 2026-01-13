<x-layout title="Welcome to Notes">


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


</x-layout>
