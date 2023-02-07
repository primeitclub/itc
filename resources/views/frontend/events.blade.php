<x-frontend.app title="Events">
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-semibold">
                        Featured Events
                    </h2>
                    <p class="home_text text-xl">
                        Check out some of our workshops and sessions
                    </p>
                </center>
                <div class="event_wraper pt-24">
                    <div class="gid-cols-1 events grid gap-10 lg:grid-cols-3">
                        @foreach ($completedEvents as $completedEvent)
                            <div class="event_card mt-8 rounded-xl bg-white sm:w-auto">
                                <div class="img">
                                    <figure>
                                        <img class="w-[100%] rounded-t-xl" src="{{ $completedEvent->imageUrl() }}"
                                            alt="" />
                                    </figure>
                                </div>

                                <div class="event_card_contens p-7 ">
                                    <h3 class="primary poppins text-2xl font-semibold">
                                        {{ $completedEvent->title }}
                                    </h3>
                                    <p class="home_text py-2 text-sm leading-5">
                                        {{ $completedEvent->speaker }}
                                    </p>
                                    <div class="event_detail list-none">
                                        <ol>
                                            <li class="home_text pt-4">
                                                <i class="ri-xl ri-map-pin-line pr-6"></i>
                                                {{ $completedEvent->venue }}
                                            </li>
                                            <li class="home_text pt-4">
                                                <i class="ri-xl ri-calendar-line pr-6"></i>
                                                {{ $completedEvent->event_date }}
                                            </li>
                                            <li class="home_text pt-4">
                                                <i class="ri-xl ri-money-dollar-circle-line pr-6"></i>
                                                $200
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="h-24 overflow-hidden ">
                                        <p class=" home_text py-4 text-base font-light leading-6">
                                            {!! $completedEvent->description !!}
                                        </p>
                                    </div>
                                    <hr class="py-2" />
                                    <button
                                        class="bg_primary home_text w-full rounded-3xl px-20 py-2 text-xl text-white hover:bg-blue-900">
                                        Register Now
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    </section>
    <!-- Event section ends -->

</x-frontend.app>
