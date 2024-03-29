<x-frontend.app title="Events">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Events</h1>
        </div>
    </x-frontend.wave>
    @if(!$upcomingEvents->count() && !$completedEvents->count())
    <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Oops! No content to show!</h1>
    <p class="text-center mb-10 text-sm sm:text-xl text-greish">We will add our events soon...</p>
    @else

    <section class="mt-10 sm:mt-24 mb-10 sm:mb-24 max-w-7xl mx-auto px-8 sm:px-6">
        @if($upcomingEvents->count())
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Featured Events</h1>
        <p class="text-center text-base sm:text-xl text-greish">Check out some of our upcoming events</p>
        @endif

        <div class="mx-auto mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-3">
            @foreach ($upcomingEvents as $upcomingEvent)
            <div class="flex flex-col overflow-hidden rounded-xl shadow-xl">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ $upcomingEvent->thumbnailUrl() }}" alt="">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-primary text-white">{{ $upcomingEvent->eventCategory->title }}</span>

                        <a href="{{ route('events.show', $upcomingEvent->slug) }}" class="mt-2 block">
                            <p class="text-2xl font-semibold text-primary hover:text-primary-light"> {{ $upcomingEvent->title }}</p>
                        </a>

                        <div class="flex flex-col space-y-2 mt-4">
                            <div class="flex space-x-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span class="font-medium text-greish">{{ $upcomingEvent->venue }},
                                    {{ $upcomingEvent->venue_address }}</span>
                            </div>

                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                                <div class="flex flex-col">
                                    <span class="font-medium text-medium text-greish">{{ $upcomingEvent->event_date }}</span>
                                    <span class="text-xs text-greish">{{ $upcomingEvent->event_time }} - Onwards</span>
                                </div>
                            </div>

                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>
                                @if($upcomingEvent->event_fee)
                                <span class="font-medium text-medium text-greish">Rs. {{ $upcomingEvent->event_fee }}</span>
                                @else
                                <span class="font-medium text-medium text-greish">Free</span>
                                @endif
                            </div>
                        </div>

                        <div class="mt-3 text-base text-greish line-clamp-3">
                            {!! $upcomingEvent->description !!}
                        </div>
                        <a href="{{ route('events.show', $upcomingEvent->slug) }}">
                            <button class="text-sm text-gray-500 pt-4 pb-4">
                                Read more
                            </button>
                        </a>
                    </div>

                    <div class="mt-6 flex items-center">
                        <button class="w-full button py-3 px-20 rounded-3xl">
                            <a href="{{ $upcomingEvent->registration_link }}" class="">Register Now</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <section class="mt-10 sm:mt-24 sm:mb-24 max-w-7xl mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Past Events</h1>
        <p class="text-center text-base sm:text-xl text-greish">Check our past activities</p>

        <div class="flex p-12 items-center justify-center gap-4 ">
            <h1 class="text-primary text-sm lg:text-3xl  font-bold">Year:</h1>
            <div class="dropdown-menu">
                <select name="batch" id="batch" class="">
                    <option value="" selected disabled>2023</option>
                    @foreach(range(2023, date('Y')) as $year)
                    <option value="{{ $year }}" class="rounded-md">{{ $year }}</option>
                    @endforeach
                </select>
            </div>
            <h1 class="text-primary text-sm lg:text-3xl  font-bold">Month:</h1>
            <div class="dropdown-menu">
                <select name="month" id="month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>

        @foreach ($completedEvents as $completedEvent)
        <div class="hidden lg:flex justify-center items-center ">
            <div class="w-[67%] h-48 bg-white shadow-xl rounded-2xl mb-8 md:mb-24 grid grid-cols-4">
                <div class="">
                    <img src="{{ $completedEvent->thumbnailUrl() }}" class="rounded-l-2xl h-48 w-full">
                </div>
                <div class="flex flex-col col-span-2 pt-4 pl-6 p-4   ">
                    <a href="{{ route('events.show', $completedEvent->slug) }}">
                        <h1 class="text-greish poppins text-2xl font-bold pb-2">{{ $completedEvent->title }}</h1>
                    </a>

                    <div class="flex items-center space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                        @if($completedEvent->event_fee)
                        <span class="font-medium text-medium text-greish">Rs. {{ $completedEvent->event_fee }}</span>
                        @else
                        <span class="font-medium text-medium text-greish">Free</span>
                        @endif
                        <p class="py-0.5 px-6 text-white rounded-full text-sm bg-primary"> {{ $completedEvent->eventCategory->title }}</p>
                    </div>
                    <div class="lg:col-span-3 line-clamp-2">
                        <p class="text-black sm:text-sm  leading-6 tracker-widest mt-4">
                            {!! $completedEvent->description !!}
                        </p>
                    </div>
                    <a href="{{ route('events.show', $completedEvent->slug) }}" class="mt-2 block">
                        <button class="text-sm text-gray-500 hover:text-black pt-2 transition-colors duration-150 ease-in-out">Learn more >></button>
                    </a>
                </div>
                <div
                    class="flex flex-col h-48 bg-primary justify-center items-center font-semibold text-white text-4xl text-center rounded-r-2xl">
                    <span class="text-4xl">
                        {{ $completedEvent->eventDay() }}
                    </span>
                    <span class="text-2xl">
                        {{ $completedEvent->eventMonth() }}
                    </span>
                </div>
            </div>
        </div>

        <div class="lg:hidden flex justify-center items-center ">
            <div class="w-[90%] h-34 bg-white shadow-xl rounded-2xl mb-8 md:mb-24 grid grid-cols-2 relative ">
                <div>
                    <div class="flex flex-col justify-center col-span-2 pt-4 pl-6 p-2   ">
                        <a href="{{ route('events.show', $completedEvent->slug) }}">
                            <h1 class="text-primary text-2xl font-bold pb-2">{{ $completedEvent->title }}</h1>
                        </a>
                        <div class="">
                            <p class="text-black sm:text-sm leading-6 tracker-widest mt-2 mb-2">
                                {!! $completedEvent->eventCategory->title !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="absolute right-0 m-8 rounded-full bg-primary text-white text-2xl w-8 h-8 text-center">
                        <b>></b>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    @endif

</x-frontend.app>
