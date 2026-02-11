<x-layout title="Blog details page">
    <x-slot:heading>
        Blog Details
    </x-slot:heading>

    <div class="flex flex-col space-y-5 max-w-3xl mx-auto p-6 bg-white rounded-2xl shadow-lg">
        <h1 class="text-4xl font-bold text-gray-900">
            {{ $blog['title'] }}
        </h1>

        <h5 class="text-sm text-gray-500">
            By {{ $blog['author'] }}
        </h5>

        <p class="text-gray-700 text-base leading-relaxed">
            {{ $blog['content'] }}
        </p>
    </div>
</x-layout>
