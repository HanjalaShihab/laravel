<x-layout title="Info page">
    <x-slot:heading>
        Info page
    </x-slot:heading>

    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
        @foreach ($info as $i)
            <li class="bg-neutral-primary-soft w-full p-6 border border-default rounded-base shadow-xs hover:bg-sky-500/50 rounded">
                <h5 class="mb-3 text-xl sm:text-2xl font-semibold tracking-tight text-heading leading-7 sm:leading-8">
                    {{$i['name']}}
                </h5>

                <p class="text-body mb-3 break-words">
                    {{$i['address']}}
                </p>

                <p class="text-body mb-5">
                    {{$i['phone']}}
                </p>

                <a href="/info/{{ $i['id'] }}"
                    class="inline-flex items-center justify-center w-full sm:w-auto text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5">
                    Read more >
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>