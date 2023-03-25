<x-frontend.app title="Merchandise">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Merch</h1>
        </div>
    </x-frontend.wave>
    <!-- merch content starts -->
    <section class=" pt-24 sm:py-20">
        <div class="p-14 container mx-auto">
            <div class=" sm:mx-12 lg:mx-24 mb-4">
                <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Featured Items</h1>
                <p class="text-center text-sm sm:text-xl text-greish">Browse our collection of different merchandise</p>
                <div class=" ">
                    @foreach($merchandises as $merchandise)
                    <div class="mt-8 rounded-xl bg-white w-full sm:w-auto drop-shadow-xl hover:drop-shadow-2xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 p-8 ">
            
                                <figure class="pb-4">
                                    <img class="h-full" src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" alt="" />
                                </figure>
                            
                            <div class="pl-8 ">
                                <h3 class="text-primary poppins text-4xl font-semibold tracking-wide">
                                    {{ $merchandise->title }}
                                </h3>
                                <div class="list-none">
                                    <ol>
                                        <li class=" pt-6  flex">
                                            <p class=" poppins text-3xl leading-3 font-semibold tracking-wide">Rs. {{ $merchandise->price }}</p>
                                            <p class="text-gray-500 text-sm ml-auto"> Available</p>
                                        </li>

                                    </ol>
                                </div>
                                <div class="pt-6">
                                    <p class="text-xl "> <span class="text-greish">Sizes:</span> XL/XXL </p>
                                    <p class="text-xl "> <span class="text-greish">Color: </span> Black </p>
                                </div>
                                <div class="pt-6  text-greish h-60 overflow-auto">
                                    <p class="py-2 text-base font-light leading-6 ">
                                        {!! $merchandise->description !!}
                                    </p>
                                </div>
                                <button class="primary rounded-3xl px-20 py-2 sm:text-xl mb:text-lg text-white bg-primary hover:bg-blue-900">
                                    <a href="{{ $merchandise->form_link }}">
                                        Order now
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
