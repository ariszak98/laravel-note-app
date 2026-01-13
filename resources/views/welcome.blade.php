<x-layout title="Welcome to Notes">

    <div class="min-h-[calc(95vh-6rem)] flex flex-col items-center justify-center text-center px-4">

        <x-icon />

        <x-text.title>Notes</x-text.title>

        <x-text.subtitle>
            A simple and elegant place to write, organize, and keep your thoughts — inspired by iOS Notes.
        </x-text.subtitle>

        <div class="flex gap-4">
            <x-buttons.yellow-button href="{{ route('register') }}">Get Started</x-buttons.yellow-button>
            <x-buttons.grey-button href="{{ route('login') }}">Log in</x-buttons.grey-button>
        </div>

    </div>

</x-layout>
