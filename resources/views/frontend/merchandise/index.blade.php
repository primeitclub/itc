<x-frontend.app title="Merchandise">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Merch</h1>
        </div>
    </x-frontend.wave>
    <!-- merch content starts -->
    <section class="mt-10 sm:mt-24 mb-10 sm:mb-24 max-w-7xl mx-auto px-8 sm:px-6">
        @if(!$merchandises->count())
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Oops! No content to show!</h1>
        <p class="text-center text-sm sm:text-xl text-greish">We will launch our merchandise soon...</p>
        @else
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Featured Items</h1>
        <p class="text-center text-sm sm:text-xl text-greish">Browse our collection of different merchandise</p>
        <div class=" ">
            @foreach($merchandises as $merchandise)
            <div class="mt-8 rounded-xl bg-white w-full sm:w-auto drop-shadow-xl hover:drop-shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-2 p-4 sm:p-16">

                    <figure class="">
                        <img class="max-auto-526 w-full h-full" src="{{ $merchandise->imageUrl() }}" alt="" />
                    </figure>

                    <div class="pl-8 ">
                        <!-- <h3 class="text-primary poppins text-4xl font-semibold tracking-wide"> -->
                        <h3 class="mt-8 sm:mt-0 text-2xl sm:text-4xl font-semibold text-primary tracking-wide">
                            {{ $merchandise->title }}
                        </h3>
                        <div class="list-none">
                            <ol>
                                <li class="pt-6 flex flex-col sm:flex-row">
                                    <p class="text-greish text-3xl leading-3 font-semibold tracking-wide">Rs. {{ $merchandise->price }}</p>
                                    <span class="text-green-700 bg-green-200 text-sm ml-auto rounded-full px-2 py-0.5"> Available</span>
                                </li>
                            </ol>
                        </div>
                        <div class="pt-6">
                            <p class="text-xl "> <span class="text-greish">Sizes:</span> XL/XXL </p>
                            <p class="text-xl "> <span class="text-greish">Color: </span> Black </p>
                        </div>
                        <div class="pt-6 text-greish mb-6">
                            <p class="py-2 text-base font-light leading-6 ">
                                {!! $merchandise->description !!}
                            </p>
                        </div>
                        <button class="button py-3 px-20 rounded-3xl">
                            <a href="{{ $merchandise->form_link }}">
                                Order now
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </section>
</x-frontend.app>
