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

    <!-- Event section starts -->

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

                                <div class="event_card_contens p-7 ">
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
    <!-- Event section ends -->

    <!-- Blog section starts-->

    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-bold">
                        Featured Blog
                    </h2>
                    <p class="home_text text-xl">
                        Check out our Blogs
                    </p>
                </center>

                <div class="grid  sm:grid-cols-2 gap-8">
                    <div>
                        <div class="hidden ld:block sm:block pt-24">
                            <div class="relative py-6 px-5">
                                <div class="relative  h-96 w-full border-4 rounded-r-lg border-purple-700 ">
                                    <div class=" absolute mt-5 top-4 -left-6">
                                        <img src="{{ asset('image/blog.jpg') }}" alt="Blog Post illustration"
                                            class="rounded-r-lg h-96" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-3/4 lg:w-1/2 mx-auto mt-44">
                        <header class="text-center md:text-left mt-4">
                            <h1 class="text-3xl text-blue-800 font-bold">
                                This is a big title and it will look great on two or even three lines. Wooohoo!
                            </h1>

                            <span class="block text-xs text-gray-400 mt-2">
                                Published <time>1 day ago</time>
                            </span>
                        </header>

                        <div class="mt-4 text-sm">
                            <p class="text-base md:text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>

                            <p class="mt-4 text-base md:text-sm">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.
                            </p>
                        </div>

                        <footer class="mt-8 mb-8 flex items-center justify-between">
                            <div>
                                <a href="#"
                                    class="bg-white-100 py-4 px-8 text-xs font-semibold transition-colors duration-300 border border-purple-700 text-black-700 rounded-full hover:bg-purple-700 hover:text-white">Read
                                    More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Blog Section ends -->

    <!-- meet our team -->
    <section class="py-36">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <div class="main_div">
                    <center class="header">
                        <h2 class="primary font-bold mb:text-3xl sm:text-4xl">
                            Meet Our Team
                        </h2>
                        <p class="home_text text-xl">Get to Know our team members</p>
                    </center>
                </div>
            </div>

            <div class="swiper mySwiper1 mt-16">
                <div class="swiper-wrapper gap-8 lg:ml-40">

                    @foreach ($members as $member)
                        <div class="swiper-slide team_card rounded-3xl py-4">
                            <div class="team_image py-8">
                                <figure class="">
                                    <img class="rounded-full" src="{{ asset('image/ellipse3.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="team_detail py-4">
                                <h3 class="home_text primary text-2xl font-medium">
                                    {{ $member->name }}
                                </h3>
                                <p class="poppins">{{ $member->designation }}</p>
                                <p class="poppins py-6 font-medium">
                                    {!! $member->testimonial !!}
                                </p>
                            </div>
                            <div class="team_socials">
                                <div class="mx-auto flex w-[40%] justify-around">
                                    <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
                                    <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
                                    <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </section>
    <!-- meet our team ends -->

    <!-- testimonials starts -->

    <section class="py-24">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center class="header">
                    <h2 class="primary font-bold mb:text-3xl sm:text-4xl">
                        Testimonial
                    </h2>
                    <p class="home_text text-xl">Hear what our members have to say</p>
                </center>
            </div>

            <div class="swiper mySwiper2 mt-16">
                <div class="swiper-wrapper test lg:ml-48">
                    <div class="testimonials_card swiper-slide relative rounded-3xl py-4">
                        <div class="testimonial_image pt-14 pb-4">
                            <figure class="">
                                <img class="rounded-full" src="{{ asset('image/ellipse3.jpg') }}" alt="" />
                            </figure>
                        </div>
                        <div class="team_detail py-4">
                            <p class="poppins px-6 text-center font-medium">
                                They always provided me with the assistance that I required
                                for my overall development and to improve my technical
                                knowledge. I will always be grateful to them for providing me
                                a platform of practical learning and preparing me for the
                                industry. !
                            </p>
                            <h3 class="primary home_text pt-6 text-2xl font-medium">
                                Rikesh Sherpa
                            </h3>
                            <p class="poppins">Executive Member</p>
                        </div>
                        <div class="team_socials">
                            <div class="mx-auto flex w-[20%] justify-around">
                                <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
                                <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
                                <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></a>
                            </div>
                        </div>

                        <figure class="quote_img absolute top-36 left-12 opacity-100">
                            <img src="{{ asset('image/quote_ico.svg') }}" alt="" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials ends -->


</x-frontend.app>
