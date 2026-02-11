<x-layout title="Job page">
    <x-slot:heading>
        Job page
    </x-slot:heading>

    <div class="max-w-3xl mx-auto space-y-4">
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}"
               class="block p-5 bg-white border border-gray-200 rounded-xl shadow-sm
                      hover:shadow-md hover:-translate-y-1 transition duration-200">

                <div class="flex items-center justify-between">
                    <div>
                        <div class="flex flex-row justify-between items-center gap-2">
                            <h2 class="text-lg font-semibold text-gray-800 hover:text-blue-600">
                                {{ $job['title'] }}
                            </h2>

                            <p class="text-blue-600 ">({{$job->employer->name}})</p>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">
                            {{ $job['company'] }}
                        </p>
                    </div>

                    <span class="text-sm text-blue-600 font-medium">
                        View →
                    </span>
                </div>

            </a>
        @endforeach
    </div>

    <div class="mt-10">
        {{ $jobs->links() }}
    </div>
</x-layout>
