<x-frontend.app title="Gallery">
    <x-frontend.wave>
        <div class="">
            <h1 class="font-semibold text-white text-5xl lg:text-9xl">Gallery</h1>
        </div>
    </x-frontend.wave>
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="text-primary text-5xl font-semibold">
                        Clicks
                    </h2>
                    <p class="home_text text-xl">
                        Check out some of our photos
                    </p>
                </center>
            </div>
            
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
