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

