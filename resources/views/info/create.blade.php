<x-layout title="Create page">
    <x-slot:heading>
        Create page
    </x-slot:heading>

    <form action="/info" method="POST" class="max-w-xl mx-auto bg-white shadow-md rounded-xl p-8 space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                Name
            </label>
            <input
                type="text"
                name="name"
                id="name"
                required
                class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                   focus:border-sky-500 focus:ring-2 focus:ring-sky-200
                   outline-none transition"
                placeholder="Enter name">
        </div>

        <!-- Address -->
        <div>
            <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                Address
            </label>
            <textarea
                name="address"
                id="address"
                rows="3"
                required
                class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                   focus:border-sky-500 focus:ring-2 focus:ring-sky-200
                   outline-none transition"
                placeholder="Enter address"></textarea>
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                Phone
            </label>
            <input
                type="tel"
                name="phone"
                id="phone"
                required
                class="w-full rounded-lg border border-gray-300 px-4 py-2.5
                   focus:border-sky-500 focus:ring-2 focus:ring-sky-200
                   outline-none transition"
                placeholder="Enter phone number">
        </div>

        <!-- Submit -->
        <div class="pt-4">
            <button
                type="submit"
                class="w-full bg-sky-600 hover:bg-sky-700 text-white
                   font-semibold py-3 rounded-lg
                   transition shadow-sm">
                Save Info
            </button>
        </div>
    </form>
</x-layout>
