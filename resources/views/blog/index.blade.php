<x-layout title="Blog page">
    <x-slot:heading>
        <div class="flex items-center justify-between w-full">
            <span>Blog Creation page</span>

            <x-create-link href="/blog/create">
                Create Blog
            </x-create-link>
        </div>
    </x-slot:heading>

    <div class="max-w-5xl mx-auto my-6 space-y-6">
        @foreach($blog as $b)
            <div class="p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                <!-- Blog Title -->
                <h2 class="text-2xl font-bold text-gray-900 mb-3 hover:text-indigo-600 transition-colors duration-200">
                    {{ $b['title'] }}
                </h2>

                <!-- Blog Content -->
                <p class="text-gray-700 mb-4 line-clamp-3">
                    {{ $b['content'] }}
                </p>

                <!-- Author and Dates -->
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center text-gray-500 text-sm">
                    <div>
                        <span class="font-medium text-gray-800">Author:</span> {{ $b['author'] }}
                    </div>
                    <div class="mt-1 sm:mt-0">
                        <span class="font-medium text-gray-800">Uploaded: </span> {{ $b['created_at'] }}
                    </div>
                </div>

                <!-- Read More Button -->
                <div class="mt-4">
                    <a href="/blog/{{$b['id']}}"
                       class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors duration-200">
                        Read More
                    </a>
                </div>
            </div>
        @endforeach
    </div>


    <div>
        {{ $blog->links() }}
    </div>
</x-layout>
