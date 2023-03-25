<x-frontend.app title="Home">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="">
            <span class="font-dm-sans font-normal text-white text-2xl text-center lg:text-5xl ">PRIME</span>
            <h1 class="font-bold text-white text-5xl lg:text-9xl">IT CLUB</h1>
            <p class="text-2xl font-normal text-white">"Processing Future"</p>
        </div>
    </x-frontend.wave>

    <!-- Club's intro Section -->
    <section class="max-w-7xl flex flex-col-reverse md:flex-row items-center mx-auto px-8 sm:px-6">
        <!-- left -->
        <div class="mt-10 md:w-1/2">
            <span class="font-semibold text-base text-primary"> We're a dynamic team of </span>
            <h1 class="font-semibold text-3xl sm:text-5xl mt-2">
                Innovative,<span class="text-primary"> Tech</span>
                <br/>
                Enthusiastic People
            </h1>
            <div class="about_border"></div>
            <p class="font-dm-sans mt-6 text-base sm:text-xl text-greish">
                Prime IT club is a student-managed club at Prime led by creative and tech enthusiastic students. 
                <br/>
                <br/>
                Established in 2004, the club organizes different workshops, seminars, training programs, etc.
            </p>

            <button class="button mt-7 py-3 px-6 rounded-3xl">
                <div class="flex justify-between items-center space-x-2">
                    <a class="text-white font-medium" href="{{ route('about') }}">Learn more</a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-center text-gray-900 border-primary bg-white rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </button>
        </div>
        <!-- robot -->
        <div class="mt-4 md:mt-10 -z-10">
            <lottie-player class="robot w-[60%] mx-auto" src="https://assets2.lottiefiles.com/packages/lf20_6e0qqtpa.json" background="transparent" speed="1.1" loop autoplay>
            </lottie-player>
        </div>
    </section>

    <!-- Featured Events Section -->
    <section class="mt-10 sm:mt-24 max-w-7xl mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Featured Events</h1>
        <p class="text-center text-base sm:text-xl text-greish">Check out our workshops and sessions</p>
        <article class="mt-8" >
            <div class="lg:flex justify-between lg:flex-row-reverse">
                <div class="md:ml-4 md:mt-6">
                    <img src="{{ $featuredEvent->thumbnailUrl() }}" alt="Event thumbnail" class="rounded-sm" />
                </div>

                <div class="flex flex-col max-w-lg">
                    <header class="mt-4 lg:mt-2">
                        <div class="mt-4">
                            <h1 class="text-xl sm:text-3xl font-semibold text-primary hover:text-primary-light">
                                <a href="{{ route('events.show', $featuredEvent->slug) }}">
                                    {{ $featuredEvent->title }}
                                </a>
                            </h1>

                            @if($featuredEvent->speakers)
                            @foreach($featuredEvent->speakers as $speaker)
                            <span class="mt-2 mb-4 block text-greish text-sm lg:text-xl font-semibold">
                                Facilitator : {{ $speaker->name }}
                            </span>
                            @endforeach
                            @endif
                            <span class="px-4 py-2 bg-primary rounded-full text-white text-xs font-semibold">{{ $featuredEvent->eventCategory->title }}</span>
                        </div>
                    </header>

                    <div class="text-base mt-4 text-greish max-w-lg line-clamp-4">
                        {!! $featuredEvent->description !!}
                    </div>

                    <div class="flex flex-col space-y-2 mt-4">
                        <div class="flex space-x-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            <span class="font-medium text-greish">{{ $featuredEvent->venue }}, {{ $featuredEvent->venue_address }}</span>
                        </div>

                        <div class="flex space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            <div class="flex flex-col">
                                <span class="font-medium text-medium text-greish">{{ $featuredEvent->event_date }}</span>
                                <span class="text-xs text-greish">{{ $featuredEvent->event_time }} - Onwards</span>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>
                            <span class="font-medium text-medium text-greish">Rs. 250</span>
                        </div>

                    </div>

                    <footer class="mt-4 flex flex-col sm:flex-row sm:justify-between">
                        <button class="button mt-7 py-3 px-20 rounded-3xl">
                            <a href="{{ $featuredEvent->registration_link }}" class="" >Register Now</a >
                        </button>

                        <button class="outlined-button">
                            <a href="{{ route('events.show', $featuredEvent->slug) }}" class="px-20" >Read More</a >
                        </button>
                    </footer>
                </div>
            </div>
        </article>
    </section>

    <!-- view more -->
    <div class="mx-auto max-w-xs mt-2 sm:mt-10">
        <div class="flex items-center justify-center cursor-pointer">
            <a class="flex space-x-4 text-greish items-center font-medium hover:text-gray-800" href="{{ route('events.index') }}">View more
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 text-center">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Blogs Section -->
    <section class="mt-10 sm:mt-24 max-w-7xl mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Blogs</h1>
        <p class="text-center text-base sm:text-xl text-greish">Keep updated with latest reads</p>
        <article class="" >
            <div class="grid sm:grid-cols-2 lg:gap-8">
                <div class="sm:hidden md:ml-4 md:mt-6 mt-6">
                    <img src="{{ $featuredBlog->thumbnailUrl() }}" alt="Event thumbnail" class="rounded-sm" />
                </div>

                <div>
                    <div class="hidden lg:block pt-10">
                        <div class="relative py-6 px-5">
                            <div class="relative h-96 w-full border-4 rounded-r-2xl border-primary">
                                <div class="absolute mt-4 mr-6 top-4 -left-10 ">
                                    <img src="{{ $featuredBlog->thumbnailUrl() }}" alt="Blog's thumbnail" class="rounded-r-2xl rounded-b-2xl" />
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>

                <div class="mx-auto mt-6 md:mt-10">
                    <header class="lg:mt-20">
                        <h1 class="text-xl sm:text-3xl font-semibold text-primary hover:text-primary-light">
                            <a href="{{ route('blogs.show', $featuredBlog->slug) }}">
                                {{ $featuredBlog->title }}
                            </a>
                        </h1>

                        <span class="block mb-4 text-sm text-greish mt-2">
                            Published <time>{{ $featuredBlog->readablePublishedDate() }}</time>
                        </span>
                        <span class="px-4 py-2 bg-primary rounded-full text-white text-xs font-semibold">{{ $featuredBlog->blogCategory->title }}</span>
                    </header>

                    <div class="mt-4 text-base text-greish line-clamp-4">
                        {!! $featuredBlog->excerpt !!}
                    </div>

                    <footer class="mt-2 sm:mt-8 mb-8 flex items-center justify-between">
                        <button class="outlined-button">
                            <a href="{{ route('blogs.show', $featuredBlog->slug) }}" class="px-10">Read More</a>
                        </button>
                    </footer>
                </div>
            </div>
        </article>
    </section>

    <!-- view more -->
    <div class="mx-auto max-w-xs mt-2 sm:mt-10">
        <div class="flex items-center justify-center cursor-pointer">
            <a class="flex space-x-4 text-greish items-center font-medium hover:text-gray-800" href="{{ route('blogs.index') }}">View more
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 text-center">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

    <section class="mt-10 sm:mt-24  w-full lg:h-96 overflow-hidden items-center flex justify-center">
       <img src="{{ asset('assets/banner.png') }}" class="w-full" > 
        <div x-data="{isHovered : false}" class="absolute border-4 border-white rounded-full">
            <button x-on:mouseover="isHovered = true" x-on:mouseleave="isHovered = false" class="flex justify-between items-center space-x-2 py-3 px-6 text-center text-white font-extrabold text-xl lg:text-6xl hover:pr-8 ease-out duration-150">
                <a href="{{ route('merchandise.index') }}" class="uppercase">Check out our merch</a>
                <svg x-show="isHovered" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="5" stroke="currentColor" class="w-12 h-12 text-white ease-in duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </button>
        </div>
    </section>

    <!-- Meet our team Section -->
    <section class="mt-10 sm:mt-24 max-w-7xl mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Meet Our Team</h1>
        <p class="text-center text-base sm:text-xl text-greish">Get to know our team members</p>
        <div class="swiper teamSwiper">
            <div class="swiper-wrapper mt-10 flex">

                @foreach($executiveMembers as $executiveMember)
                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="{{ $executiveMember->imageUrl() }}" class="rounded-full w-28 h-28 lg:w-36 lg:h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">{{ $executiveMember->name }}</h2>
                            <p class="text-gray-600 text-base text-center">{{ $executiveMember->designation }}</p>
                        </div>
                    </header>

                    <div class="mt-8 font-dm-sans text-base text-center">
                        {!! $executiveMember->testimonial !!}
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            @if($executiveMember->facebook)
                            <a href="{{ $executiveMember->facebook }}">
                                <x-logo.facebook />
                            </a>
                            @endif

                            @if($executiveMember->instagram)
                            <a href="{{ $executiveMember->instagram }}">
                                <x-logo.instagram />
                            </a>
                            @endif

                            @if($executiveMember->linkedin)
                            <a href="{{ $executiveMember->linkedin }}">
                                <x-logo.linkedin />
                            </a>
                            @endif
                        </div>
                    </footer>
                </article>
                @endforeach
            </div>
            <div class="teams-swiper-pagination mt-10 items-center flex justify-center"></div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="mt-10 sm:mt-24 mb-24 max-w-7xl mx-auto px-8 sm:px-6 ">
         <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Testimonial</h1>
        <p class="text-center text-base sm:text-xl text-greish">Hear what our members have to say</p>
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper flex">

                @foreach($testimonials as $attestant)
                <article class="swiper-slide relative mt-10 lg:w-[50%] mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md -z-10">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="{{ $attestant->imageUrl() }}" class="rounded-full w-28 h-28 sm:w-36 sm:h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <div x-data="{ readMore : false }" class="mt-6 font-dm-sans text-base">
                        <img src="{{ asset('assets/quote-icon.png') }}" class="absolute w-11 h-8 top-36 lg:top-40 lg:w-28 lg:h-20">
                        <div x-cloak class="text-left text-greish lg:mt-12" :class="readMore ? '' : 'line-clamp-3'">
                            {!! $attestant->testimonial !!}
                        </div>
                        <p x-on:click="readMore = true" x-show="!readMore" class="cursor-pointer">Read More...</p>
                        <p x-on:click="readMore = false" x-show="readMore" class="cursor-pointer">Read Less</p>
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-6">
                            <h2 class="text-primary font-semibold text-2xl text-center">{{ $attestant->name }}</h2>
                            <p class="text-gray-600 text-base text-center">{{ $attestant->designation }}</p>
                        </div>
                    </header>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            @if($attestant->facebook)
                            <a href="{{ $attestant->facebook }}">
                                <x-logo.facebook />
                            </a>
                            @endif

                            @if($attestant->instagram)
                            <a href="{{ $attestant->instagram }}">
                                <x-logo.instagram />
                            </a>
                            @endif

                            @if($attestant->linkedin)
                            <a href="{{ $attestant->linkedin }}">
                                <x-logo.linkedin />
                            </a>
                            @endif
                        </div>

                    </footer>
                </article>
                @endforeach
            </div>
            <div class="testimonial-swiper-pagination mt-10 items-center flex justify-center"></div>
        </div>
    </section>

    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
    @endpush

    @push('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script>
    const teamSwiper = new Swiper(".teamSwiper", {
        grabCursor: true,
        centerSlide: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: ".teams-swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },

    });

    const testimonialSwiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 25,
        grabCursor: true,
        centeredSlides: true,
        pagination: {
            el: ".testimonial-swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
        },
    });
    </script>
    @endpush
</x-frontend.app>
