<div {{ $attributes->class(['mb-2']) }}>
    <form action="{{ route('notes.index') }}" method="GET">
        <x-forms.input-search/>
    </form>
</div>
