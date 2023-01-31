<x-frontend.app title="Home">
    
    <section class="mt-10 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <div class="about_main flex justify-between mb:flex-col lg:flex-row">
                    <div class="about_content lg:w-[45%] ">
                        
                        <div class="about_header flex justify-evenly tracking-widest">
                            <div class="header pop_bold">
                                <span class="primary font-semibold">We're a dynamic team of</span>
                                <h2 class="py-4 font-extrabold mb:text-3xl sm:text-4xl">
                                    Innovative, <span class="primary">Tech</span> Enthusiastic
                                    People
                                </h2>
                                <div class="py-2">
                                    <div style="height: 5px" class="w-[20%] bg-blue-800"></div>
                                    <div style="height: 5px" class="my-2 w-[10%] bg-blue-800"></div>
                                </div>
                            </div>
                        </div>
                        <div style="line-height: 30px" class="home_text about_paragrph pt-4 text-xl">
                            Prime IT club is a student-managed club at Prime led by creative
                            and tech enthusiastic students. Established in 2004, the club
                            organizes different workshops, seminars, training programs,
                            etc.the club organizes different workshops <br />
                            <button class="mt-8 rounded-3xl bg-blue-800 py-2 px-6 text-white">
                                <a class="text-lg" href="">Learn more</a>
                            </button>
                        </div>
                    </div>

                    <div class="about_image header_gif hidden mb:pt-0 sm:mt-20 w-[35%] mb:hidden sm:block">
                        <lottie-player class="robot" src="https://assets2.lottiefiles.com/packages/lf20_6e0qqtpa.json"
                            background="transparent" speed="1.1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <!-- event starts -->

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
                        @foreach ($event as $events)
                            <div class="event_card mt-8 rounded-xl bg-white sm:w-auto">
                                <div class="img">
                                    <figure>
                                        <img class="w-[100%] rounded-t-xl" src="blog-images/EventImage.jpg"
                                            alt="" />
                                    </figure>
                                </div>

                                <div class="event_card_contens p-7">
                                    <h3 class="primary poppins text-2xl font-semibold">
                                        {{ $events->title }}
                                    </h3>
                                    <p class="home_text py-2 text-sm leading-5">
                                        {{ $events->speaker }}
                                    </p>
                                    <div class="event_detail list-none">
                                        <ol>
                                            <li class="home_text pt-4">
                                                <i class="ri-xl ri-map-pin-line pr-6"></i>
                                                {{ $events->venue }}
                                            </li>
                                            <li class="home_text pt-4">
                                                <i class="ri-xl ri-calendar-line pr-6"></i>
                                                {{ $events->event_date }}
                                            </li>
                                            <li class="home_text pt-4">
                                                <i class="ri-xl ri-money-dollar-circle-line pr-6"></i>
                                                $200
                                            </li>
                                        </ol>
                                    </div>
                                    <p class="home_text py-4 text-base font-light leading-6">
                                        {!! $events->description !!}
                                    </p>
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
</x-frontend.app>
