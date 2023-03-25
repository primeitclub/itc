<x-frontend.app title="Gallery">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Gallery</h1>
        </div>
    </x-frontend.wave>

    <section class="max-w-7xl flex flex-col-reverse md:flex-row items-center mx-auto px-8 sm:px-6">
        <div class="mx-auto">
            <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Clicks</h1>
            <p class="text-center text-sm sm:text-xl text-greish">Check out some of our photos</p>

            <div class="grid grid-cols-1 mt-24 gap-4 md:grid-cols-3 lg:grid-cols-3 mb-24 p-4">
                @foreach($album->images as $image)
                @if($loop->first)
                <div class="h-96 sm:col-span-3 col-span-1">
                    <img class="h-full w-full object-cover transition-transform duration-500 " src="{{ $image->imageUrl() }}" alt="" />
                </div>
                @else
                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 " src="{{ $image->imageUrl() }}" alt="" />
                    </div>
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </section>
</x-frontend.app>
