<x-frontend.app title="Gallery">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Albums</h1>
        </div>
    </x-frontend.wave>

    <section class="max-w-7xl flex flex-col-reverse md:flex-row items-center mx-auto px-8 sm:px-6">
        <div class="mx-auto">
            <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Albums</h1>
            <p class="text-center text-base sm:text-xl text-greish">Check out some of our photo albums</p>

            <div class="grid grid-cols-1 mt-10 mb-10 lg:mt-24 lg:mb-24 gap-8 md:grid-cols-3 lg:grid-cols-3 p-2">
                @foreach($albums as $album)
                <a href="{{ route('gallery.show', $album->slug) }}">
                    <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                        <div class="h-96">
                            <img class="h-full w-full object-cover transition-transform duration-500 " src="{{ $album->thumbnailUrl() }}" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 group-hover:bg-gradient-to-b from-transparent via-transparent to-primary ">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-700 group-hover:translate-y-28">
                            <h1 class="text-3xl font-semibold leading-6 text-white ">{{ $album->title }}</h1>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend.app>
