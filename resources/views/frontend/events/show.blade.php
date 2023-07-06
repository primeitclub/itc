<meta property="og:image" content="{{ $event->thumbnailUrl() }}" />
<x-frontend.app title="Event">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Event</h1>
        </div>
    </x-frontend.wave>

    <!-- articles page starts -->
    <section class="mt-10 sm:mt-24 max-w-7xl mx-auto px-8 sm:px-6 mb-8">
        <div class="flex justify-between gap-x-10">
            <div>
                <div class="mb-6 lg:w-[75%] relative" style="height: 24em;">
                    <img src="{{ $event->imageUrl() }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                </div>
                <div class="w-full max-w-screen-md">
                    <h2 class="mt-4 mb-2 text-4xl font-semibold text-primary leading-tight">
                        {{ $event->title }}
                    </h2>
                </div>
                <div class="flex flex-col space-y-2 mt-4">
                    <div class="flex space-x-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="font-medium text-greish">{{ $event->venue }},
                            {{ $event->venue_address }}</span>
                    </div>

                    <div class="flex space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <div class="flex flex-col">
                            <span class="font-medium text-medium text-greish">{{ $event->event_date }}</span>
                            <span class="text-xs text-greish">{{ $event->event_time }} - Onwards</span>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                        @if($event->event_fee)
                        <span class="font-medium text-medium text-greish">Rs. {{ $event->event_fee }}</span>
                        @else
                        <span class="font-medium text-medium text-greish">Free</span>
                        @endif
                    </div>

                </div>
                @if($event->speakers->count())
                <h1 class="text-primary text-3xl pt-6">Speaker details: </h1>
                <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 lg:w-[75%] w-full h-60 bg-white  rounded-lg  shadow-xl mt-6 border-b-8 border-b-primary  mb-4">
                    @foreach($event->speakers as $speaker)
                    <div class="flex justify-center items-center mt-10 ml-4 hidden lg:block md:block">
                        <img src="{{ $speaker->imageUrl() }}" class="w-full h-40 rounded-lg" />
                    </div>
                    <div class="p-10 lg:col-span-2 md:col-span-2 ">
                        <h3 class="text-xl text-primary font-semibold">
                            {{ $speaker->name }}
                        </h3>
                        <p class="text-greish font-light text-sm tracking-wider mt-2">{!! $speaker->description !!}</p>
                    </div>
                    <div class="mt-6 mb-4 hidden lg:block">
                        <div class="flex w-32 mx-auto space-x-2 justify-end">
                            @if($speaker->facebook)
                            <a href="{{ $speaker->facebook }}" target="_blank" rel="noopener noreferrer">
                                <x-logo.facebook />
                            </a>
                            @endif

                            @if($speaker->facebook)
                            <a href="{{ $speaker->linkedin }}" target="_blank" rel="noopener noreferrer">
                                <x-logo.linkedin />
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                <h1 class="text-primary text-3xl pt-6">Event Details: </h1>

                <div class="lg:w-[75%] w-full sm:text-xl text-md p-8 leading-6 text-greish tracking-wide font-light">

                    {!! $event->description !!}
                </div>
            </div>
        </div>
    </section>

</x-frontend.app>
