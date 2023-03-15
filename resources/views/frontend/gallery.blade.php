<x-frontend.app title="Gallery">
    {{-- <section class="pt-24 sm:py-20">
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
            <div class="grid gap-16 grid-rows-3 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-8 p-24">
                @foreach ($albums as $album)
                <div class="card  thumbnail h-72 w-full">
                    <div
                        class="front top-0 left-0  bg-gray-900 text-black-900 flex items-center justify-center transform duration-300">
                        <img src="{{ asset('/albums/'. $album->thumbnail) }}" alt="{{ $album->thumbnailURL() }}" class="w-full h-full object-fit-cover">
                    </div>
                    <div
                        class="poppins primary text-2xl font-bold back  top-0 left-0 w-full h-full text-black flex items-center justify-center transform duration-300 translate-x-full">
                        <a href="">
                            <p>{{ $album->title }}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div> --}}
    {{-- </section> --}}
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
            <div class="flex min-h-screen items-center justify-center ">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-3">
                    @foreach ($albums as $album)
                    <div
                        class="group relative cursor-pointer items-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-96">
                            <img class="h-full w-full object-cover transition-transform duration-500 "
                                src="{{ asset('/albums/'. $album->thumbnail) }}" alt="{{ $album->thumbnailURL() }}"
                                alt="" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-primary group-hover:from-primary/70 group-hover:via-primary/60 group-hover:to-primary/70"></div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-700 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white ">{{$album->title}}</h1>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
