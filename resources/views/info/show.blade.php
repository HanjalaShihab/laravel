<x-layout title="Detailed Info">
    <x-slot:heading>
        Detailed Info
    </x-slot:heading>

    <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs my-5">
        <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">{{$info['name']}}</h5>
        <p class="text-body mb-6">{{$info['address']}}</p>
        <p class="text-body mb-6">{{$info['phone']}}</p>
    </div>
</x-layout>