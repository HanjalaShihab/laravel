<x-layout title="Job Details" heading="Job details">
    <div class="bg-gray-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">{{$job['title']}}</h2>
      <p class="mt-2 text-lg/8 text-gray-300">{{$job['company']}}</p>
    </div>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="group relative grow">
          <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{$job['location']}}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">{{$job['description']}}</p>
        </div>
      </article>
    </div>
  </div>
</div>
</x-layout>