<x-layout title="Create Blog">
    <x-slot:heading>
        Create Blog Post
    </x-slot:heading>

    <div class="max-w-2xl mx-auto mt-8 bg-white p-8 rounded-2xl shadow-lg">
        <form method="POST" action="/blog">
            @csrf

            <!-- Title -->
            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Title
                </label>
                <input type="text"
                       name="title"
                       value="{{ old('title') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                       placeholder="Enter blog title" required>

                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Author -->
            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Author
                </label>
                <input type="text"
                       name="author"
                       value="{{ old('author') }}"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                       placeholder="Author name" required>

                @error('author')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Content
                </label>
                <textarea name="content"
                          rows="6"
                          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                          placeholder="Write your blog content..." required>{{ old('content') }}</textarea>

                @error('content')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition">
                    Publish Blog
                </button>
            </div>
        </form>
    </div>
</x-layout>
