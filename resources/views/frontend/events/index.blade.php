<x-frontend.app title="Events">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Events</h1>
        </div>
    </x-frontend.wave>
    @if(!$upcomingEvents->count())
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
    @endif
    <section class="mt-10 sm:mt-24 sm:mb-24 max-w-7xl mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Past Events</h1>
        <p class="text-center text-base sm:text-xl text-greish">Check our past activities</p>

        @livewire('filter-event')
        
        @livewire('show-event')

    </section>

    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    @livewireScripts

</x-frontend.app>
