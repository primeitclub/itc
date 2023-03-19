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
                <center>
                    <h2 class=" text-primary text-5xl font-semibold">
                        Featured Items
                    </h2>
                    <p class=" text-xl pt-4">
                        Browse our collection of different merchandise
                    </p>
                </center>

                <div class="p-4 ">
                    <div class="gid-cols-1  grid gap-12 lg:grid-cols-3">
                        <div class="mt-8 rounded-xl bg-white w-full sm:w-auto drop-shadow-xl">
                            <div class="img">
                                <figure>
                                    <img class="w-[100%] h-64 rounded-t-xl"
                                        src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                                </figure>
                            </div>

                            <div class="p-7">
                                <h3 class="text-primary poppins text-2xl font-semibold tracking-wide">
                                    Sweatshirt
                                </h3>
                                <div class="list-none">
                                    <ol>
                                        <li class=" pt-4  flex">
                                            <p class=" poppins text-2xl leading-3 font-medium tracking-wide"> Rs. 300
                                            </p>
                                            <p class="text-gray-500 text-sm ml-auto">
                                                Available</p>
                                        </li>

                                    </ol>
                                </div>
                                <div class="pt-2 pb-2 text-greish h-40 overflow-auto">
                                    <p class="py-2 text-base font-light leading-6 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos et
                                        exercitationem autem dolore assumenda corporis deserunt delectus, rerum
                                        quibusdam illo magnam a odio atque enim cumque impedit numquam architecto
                                        voluptatibus harum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos et
                                        exercitationem autem dolore assumenda corporis deserunt delectus, rerum
                                        quibusdam illo magnam a odio atque enim cumque impedit numquam architecto
                                        voluptatibus harum.
                                    </p>
                                </div>
                                <hr class="py-2" />
                                <button
                                    class="primary w-full rounded-3xl px-20 py-2 sm:text-xl mb:text-lg text-white bg-primary hover:bg-blue-900">
                                    View Details
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 rounded-xl bg-white w-full  sm:w-auto drop-shadow-xl">
                            <div class="img">
                                <figure>
                                    <img class="w-[100%] h-64 rounded-t-xl"
                                        src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                                </figure>
                            </div>

                            <div class="p-7">
                                <h3 class="text-primary poppins text-2xl font-semibold tracking-wide">
                                    Sweatshirt
                                </h3>
                                <div class="list-none">
                                    <ol>
                                        <li class=" pt-4  flex">
                                            <p class=" poppins text-2xl leading-3 font-medium tracking-wide"> Rs. 300
                                            </p>
                                            <p class="text-gray-500 text-sm ml-auto">
                                                Available</p>
                                        </li>

                                    </ol>
                                </div>
                                <div class="pt-2 pb-2 text-greish h-40 overflow-auto">
                                    <p class="py-2 text-base font-light text-greish leading-6">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos et
                                        exercitationem autem dolore assumenda corporis deserunt delectus, rerum
                                        quibusdam illo magnam a odio atque enim cumque impedit numquam architecto
                                        voluptatibus harum.
                                    </p>
                                </div>
                                <hr class="py-2" />
                                <button
                                    class="primary w-full rounded-3xl px-20 py-2 sm:text-xl mb:text-lg text-white bg-primary hover:bg-blue-900">
                                    View Details
                                </button>
                            </div>
                        </div>

                        <div class="mt-8 rounded-xl bg-white w-full  sm:w-auto drop-shadow-xl">
                            <div class="img">
                                <figure>
                                    <img class="w-[100%] h-64  rounded-t-xl"
                                        src="{{ asset('/blog-images/venom_1671793074.jpg') }}" alt="" />
                                </figure>
                            </div>

                            <div class="p-7">
                                <h3 class="text-primary poppins text-2xl font-semibold tracking-wide">
                                    Sweatshirt
                                </h3>
                                <div class="list-none">
                                    <ol>
                                        <li class=" pt-4  flex">
                                            <p class=" poppins text-2xl leading-3 font-medium tracking-wide"> Rs. 300
                                            </p>
                                            <p class="text-gray-500 text-sm ml-auto">
                                                Available</p>
                                        </li>

                                    </ol>
                                </div>
                                <div class="pt-2 pb-2 text-greish h-40 overflow-auto">
                                    <p class="py-2 text-base font-light text-greish leading-6">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quos et
                                        exercitationem autem dolore assumenda corporis deserunt delectus, rerum
                                        quibusdam illo magnam a odio atque enim cumque impedit numquam architecto
                                        voluptatibus harum.
                                    </p>
                                </div>
                                <hr class="py-2" />
                                <button
                                    class="primary w-full rounded-3xl px-20 py-2 sm:text-xl mb:text-lg text-white bg-primary hover:bg-blue-900">
                                    View Details
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
