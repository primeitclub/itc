<x-frontend.app title="Merchandise">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Merch</h1>
        </div>
    </x-frontend.wave>
    <!-- merch content starts -->
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24 mb-4">
                <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Featured Items</h1>
                <p class="text-center text-sm sm:text-xl text-greish">Browse our collection of different merchandise</p>

                <div class="p-4 ">
                    <div class="mt-8 rounded-xl bg-white w-full sm:w-auto drop-shadow-xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 p-8 ">
            
                                <figure class="pb-4">
                                    <img class="h-full" src="{{ asset('/blog-images/venom_1671793074.jpg') }}"
                                        alt="" />
                                </figure>
                            
                            <div class="pl-8 ">
                                <h3 class="text-primary poppins text-4xl font-semibold tracking-wide">
                                    Sweatshirt
                                </h3>
                                <div class="list-none">
                                    <ol>
                                        <li class=" pt-6  flex">
                                            <p class=" poppins text-3xl leading-3 font-semibold tracking-wide"> Rs. 300
                                            </p>
                                            <p class="text-gray-500 text-sm ml-auto">
                                                Available</p>
                                        </li>

                                    </ol>
                                </div>
                                <div class="pt-6">
                                    <p class="text-xl "> <span class="text-greish">Sizes:</span> XL/XXL </p>
                                    <p class="text-xl "> <span class="text-greish">Color: </span> Black </p>
                                </div>
                                <div class="pt-6  text-greish h-60 overflow-auto">
                                    <p class="py-2 text-base font-light leading-6 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos et
                                        exercitationem autem dolore assumenda corporis deserunt delectus, rerum
                                        quibusdam illo magnam a odio atque enim cumque impedit numquam architecto
                                        
                                    </p>
                                </div>
                                <button
                                    class="primary rounded-3xl px-20 py-2 sm:text-xl mb:text-lg text-white bg-primary hover:bg-blue-900">
                                    Buy now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
