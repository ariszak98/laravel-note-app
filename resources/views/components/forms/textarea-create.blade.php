<textarea
        name="body"
        rows="6"
        required
        placeholder="Write your note here..."
                    {{ $attributes->class(['w-full rounded-lg border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent']) }}
                >{{ old('body') }}</textarea>
