<x-frontend.app title="Merchandise">
    <!-- merch content starts -->
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-semibold">
                        Featured Items
                    </h2>
                </center>

                <div class="event_wraper pt-24">
                    <div class="gid-cols-1 events grid gap-10 lg:grid-cols-3">
                        <!-- card 2  starts -->
                        @foreach ($Merch as $merchandies)
                            <div class="event_card mt-8 rounded-xl bg-white h-auto sm:w-auto">
                                <div class="img">
                                    <figure>
                                        <img class="w-[100%] rounded-t-xl" src="{{ asset('/image/hod.jpg') }}"
                                            alt="" />
                                    </figure>
                                </div>

                                <div class="event_card_contens p-7">
                                    <h3 class="primary poppins text-2xl font-semibold">
                                        {{ $merchandies->title }}
                                    </h3>
                                    <div class="event_detail list-none">
                                        <ol>
                                            <li class="home_text pt-4  flex">
                                                <p class="text-2xl "> Rs. {{ $merchandies->price }}
                                                </p>
                                                <p class="text-gray-500 text-sm ml-auto">
                                                    Available</p>
                                            </li>

                                        </ol>
                                    </div>
                                    <div class="h-40 overflow-hidden ">
                                        <p class="home_text py-4 text-base font-light leading-6">
                                            {!! $merchandies->description !!}
                                        </p>
                                    </div>
                                    <hr class="py-2" />
                                    <button
                                        class="bg_primary home_text w-full rounded-3xl px-20 py-2 sm:text-xl mb:text-lg text-white hover:bg-blue-900">
                                        View Details
                                    </button>
                                </div>
                            </div>
                            <!-- card 2 ends -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
