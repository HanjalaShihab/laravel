<x-layout title="Job edit page">
    <x-slot:heading>
        Edit - {{ $job->title }}
    </x-slot:heading>


    <form action="/jobs" method="POST" class="max-w-2xl mx-auto bg-white shadow-md rounded-xl p-8 space-y-6">
        @csrf

        <!-- Title -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Job Title
            </label>
            <input type="text" name="title" class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                      focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none"
                placeholder="e.g. Senior Laravel Developer" required value="{{ $job->title }}">

            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Company -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Company
            </label>
            <input type="text" name="company" class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                      focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none" placeholder="Company name"
                required value="{{ $job->company }}">

            @error('company')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Location -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Location
            </label>
            <input type="text" name="location" class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                      focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none" placeholder="City / Remote"
                required value="{{ $job->location }}">


            @error('location')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Description -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Description
            </label>
            <textarea name="description" rows="5" class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                         focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none"
                placeholder="Job responsibilities and requirements" required>{{ $job->description }}</textarea>


            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <div class="pt-4">
            <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white
                       font-semibold py-3 px-3 rounded-lg shadow-sm transition">
                Update Job
            </button>

            <a href="/jobs/{{ $job->id }}" class="ml-4 text-gray-600 hover:text-gray-900 font-semibold">
                Cancel
            </a>
        </div>
    </form>

</x-layout>