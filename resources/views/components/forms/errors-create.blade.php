@if ($errors->any())
    <x-forms.errors-div>
        @foreach ($errors->all() as $error)
            <x-forms.error-li>{{ $error }}</x-forms.error-li>
        @endforeach
    </x-forms.errors-div>
@endif
