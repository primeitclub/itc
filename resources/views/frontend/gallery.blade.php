<x-frontend.app title="Gallery">
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-semibold">
                        Albums
                    </h2>
                    <p class="home_text text-xl">
                        Check out some of our photo albums
                    </p>
                </center>
            </div>
            <div class="grid gap-8 grid-rows-3 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-8">
                @foreach($albums as $album)
                <div class="overflow-hidden relative card">
                    <div
                        class="front absolute top-0 left-0 w-full h-full bg-gray-900 text-white flex items-center justify-center transform duration-300">
                        <img src="{{ $album->thumbnailURL() }}" class="w-full">
                    </div>
                    <div
                        class="poppins primary text-2xl font-bold back absolute top-0 left-0 w-full h-full text-black flex items-center justify-center transform duration-300 translate-x-full">
                        <a href="">
                            <p>{{ $album->title }}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
</x-frontend.app>
