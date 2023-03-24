<x-frontend.app title="Gallery">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Gallery</h1>
        </div>
    </x-frontend.wave>
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Clicks</h1>
            <p class="text-center text-sm sm:text-xl text-greish">Check out some of our photos</p>

            <div class="grid grid-cols-1 mt-24 gap-4 md:grid-cols-3 lg:grid-cols-3 mb-24 p-4">
                <div class="h-96 sm:col-span-3 col-span-1">
                    <img class="h-full w-full object-cover transition-transform duration-500 "
                        src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                </div>
                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 "
                            src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                    </div>
                   
                </div>

                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 "
                            src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                    </div>
                    
                </div>
                <div class="group relative cursor-pointer items-center overflow-hidden transition-shadow ">
                    <div class="h-96">
                        <img class="h-full w-full object-cover transition-transform duration-500 "
                            src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
