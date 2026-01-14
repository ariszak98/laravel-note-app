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
                <textarea
                    name="body"
                    rows="6"
                    required
                    placeholder="Write your note here..."
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent"
                >{{ old('body') }}</textarea>
            </div>


            <x-forms.yellow-button>
                Save note
            </x-forms.yellow-button>


            <p class="text-center text-sm text-gray-500">
                <a href="{{ route('notes.index') }}" class="text-yellow-500 font-medium hover:underline">
                    Back to notes
                </a>
            </p>


            @if ($errors->any())
                <x-forms.errors-div>
                    @foreach ($errors->all() as $error)
                        <x-forms.error-li>{{ $error }}</x-forms.error-li>
                    @endforeach
                </x-forms.errors-div>
            @endif



        </form>
    </div>

</x-layout>
