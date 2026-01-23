<x-layout title="Create Note | Notes">
    <div class="mt-10 py-6 flex justify-center">




        <form action="{{ route('notes.store') }}" method="POST" class="w-full max-w-xl space-y-6">
            @csrf


            <div class="text-center">
                <x-text.title-2>Create a new note</x-text.title-2>
                <x-text.par-sm>Write something you don’t want to forget.</x-text.par-sm>
            </div>

            <div>
                <x-forms.label>Title</x-forms.label>
                <x-forms.input
                    name="title"
                    value="{{ old('title') }}"
                    required
                    placeholder="Note title"
                />
            </div>

            <div>
                <x-forms.label>Content</x-forms.label>
                <x-forms.textarea-create/>
            </div>

            <div>
                <x-forms.label>Tags</x-forms.label>
                <x-forms.input
                    name="tags"
                    value="{{ old('tags') }}"
                    placeholder="Ideas, Personal, Work, etc."
                />
            </div>

            <x-forms.yellow-button>
                Save note
            </x-forms.yellow-button>

            <p class="text-center text-sm text-gray-500">
                <a href="{{ route('notes.index') }}" class="text-yellow-500 font-medium hover:underline">
                    Back to notes
                </a>
            </p>

            <x-forms.errors-create/>


        </form>




    </div>
</x-layout>
