<x-frontend.app title="Gallery">
    <x-frontend.wave>
        <div class="">
            <h1 class="font-semibold text-white text-5xl lg:text-9xl">Albums</h1>
        </div>
    </x-frontend.wave>
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="text-primary text-5xl font-semibold">
                        Albums
                    </h2>
                    <p class="home_text text-xl">
                        Check out some of our photo albums
                    </p>
                </center>
            </div>
            <div class="grid grid-cols-1 mt-24 gap-8 md:grid-cols-3 lg:grid-cols-3 p-2">
                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 "
                            src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                    </div>
                    <div
                        class="absolute inset-0 group-hover:bg-gradient-to-b from-transparent via-transparent to-primary ">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-700 group-hover:translate-y-28">
                        <h1 class="text-3xl font-semibold leading-6 text-white ">Skill IT</h1>
                    </div>
                </div>

                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 "
                            src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                    </div>
                    <div
                        class="absolute inset-0 group-hover:bg-gradient-to-b from-transparent via-transparent to-primary ">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-700 group-hover:translate-y-28">
                        <h1 class="text-3xl font-semibold leading-6 text-white ">Skill IT</h1>
                    </div>
                </div>
                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 "
                            src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                    </div>
                    <div
                        class="absolute inset-0 group-hover:bg-gradient-to-b from-transparent via-transparent to-primary ">
                    </div>
                    <div
                        class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-700 group-hover:translate-y-28">
                        <h1 class="text-3xl font-semibold leading-6 text-white ">Skill IT</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
