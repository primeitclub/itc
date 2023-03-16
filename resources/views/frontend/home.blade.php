<x-frontend.app title="Home">

    <section class="mt-10 sm:py-20">
        <div class="container mx-auto">
            <div class="">
                <div class="about_main flex justify-between mb:flex-col lg:flex-row">
                    <div class="about_content lg:w-[45%] ">

                        <div class="about_header flex justify-evenly tracking-widest">
                            <div class="header pop_bold">
                                <span class="primary text-sm font-semibold">We're a dynamic team of</span>
                                <h2 class="py-4 font-extrabold mb:text-4xl sm:text-5xl">
                                    Innovative, <span class="primary">Tech</span> Enthusiastic
                                    People
                                </h2>
                                <div class="py-2">
                                    <div style="height: 5px" class="w-[20%] bg-blue-800"></div>
                                    <div style="height: 5px" class="my-2 w-[10%] bg-blue-800"></div>
                                </div>
                            </div>
                        </div>
                        <div style="line-height: 30px" class=" about_paragrph pt-4 text-xl font-dmsans">
                            Prime IT club is a student-managed club at Prime led by creative
                            and tech enthusiastic students. Established in 2004, the club
                            organizes different workshops, seminars, training programs,
                            etc.the club organizes different workshops <br /><br /><br />
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
            <div class="">
                <center>
                    <h2 class="primary font-bold mb:text-3xl sm:text-4xl">
                        Featured Events
                    </h2>
                    <p class="font-dmsans text-xl text-gray-600">
                        Check out some of our workshops and sessions
                    </p>
                </center>
                <div class=" pt-24 ">
                    <div class="gid-cols-1 events grid gap-10 lg:grid-cols-2">
                        <div class="event_card_contens p-7 ">
                            <h3 class="primary text-4xl font-semibold">
                                {{ $event->title }}
                            </h3>
                            @foreach ($event->speakers as $speaker)
                            <p class=" py-2 text-xl leading-5">
                                Speaker: {{ $speaker->name }}
                            </p>
                            @endforeach
                            <div class="h-48 pt-4 pb-4 overflow-hidden">
                                <p class="text-lg leading-5 font-dmsans">
                                    {!! $event->description !!}
                                </p>
                            </div>

                            <div class="pt-4 pb-4 event_detail list-none  ">
                                <ol>
                                    <li class=" pt-4 flex items-center">
                                        <i class="ri-xl ri-map-pin-line pr-4 text-gray-600 text-lg"></i>
                                        <p class="text-xl ">{{ $event->venue }}</p>
                                    </li>
                                    <li class=" pt-4 flex items-center">
                                        <i class="ri-xl ri-calendar-line pr-4 text-gray-600"></i>
                                        <p class="text-xl">{{ $event->event_date }}<p>
                                    </li>
                                    <li class=" pt-4 flex items-center">
                                        <i class="ri-xl ri-money-dollar-circle-line pr-4 text-gray-600"></i>
                                        <p class="text-xl">$200</p>
                                    </li>
                                </ol>
                            </div>


                            <hr class="py-2" />
                            <button
                                class="bg_primary  w-full rounded-full px-20 py-4 text-xl text-white hover:bg-blue-900">
                                Register Now
                            </button>
                        </div>

                        <div class="img flex justify-center">
                            <figure>
                                <img class="w-auto h-iw  rounded-xl "
                                    src="{{ $event->thumbnailUrl() }}"
                                    alt="Event's Thumbnail" />
                            </figure>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Event section ends -->

    <!-- Blog section starts-->

    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="">
                <center>
                    <h2 class="poppins primary text-4.1xl font-bold">
                        Featured Blog
                    </h2>
                    <p class="font-dmsans text-xl text-gray-600">
                        Check out our Blogs
                    </p>
                </center>

                <div class="grid  sm:grid-cols-2 gap-8">
                    <div>
                        <div class="hidden lg:block pt-24">
                            <div class="relative py-6 px-5">
                                <div class="relative h-96 w-full border-4 rounded-r-2xl border-blue-800">
                                    <div class="absolute mt-4 top-4 -left-10">
                                        <img src="{{ $featuredBlog->thumbnailUrl()}}"
                                            alt="Blog's thumbnail" class="rounded-r-2xl rounded-b-2xl h-ih w-iw" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full  lg:w-1/2 mx-auto mt-44">
                        <header class="mt-4">
                            <h1 class="text-3xl text-blue-800 font-bold">
                                {{ $featuredBlog->title }}
                            </h1>

                            <span class="block text-xs text-gray-400 mt-2">
                                Published <time>{{ $featuredBlog->formattedPublishedAt() }}</time>
                            </span>
                        </header>

                        <div class="mt-4 text-sm">
                            <p class="text-base md:text-sm">
                                {!! $featuredBlog->excerpt !!}
                            </p>
                        </div>

                        <footer class="mt-8 mb-8 flex items-center justify-between">
                            <div>
                                <a href="{{ route('blogs', $featuredBlog->slug) }}"
                                    class="bg-white-100 py-4 px-8 text-xs font-semibold transition-colors duration-300 border border-blue-800 text-black-700 rounded-full hover:bg-blue-800 hover:text-white">Read
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
            <div class="">
                <div class="main_div">
                    <center class="header">
                        <h2 class="primary font-bold mb:text-3xl sm:text-4xl">
                            Meet Our Team
                        </h2>
                        <p class="font-dmsans text-xl text-gray-600"> Get to Know our team members</p>
                    </center>
                </div>
            </div>

            <div class="swiper mySwiper1 mt-16">
                <div class="swiper-wrapper gap-8 lg:ml-40">

                    @foreach ($executiveMembers as $executiveMember)
                    <div class="swiper-slide team_card rounded-3xl py-4">
                        <div class="team_image py-8">
                            <figure class="">
                                <img class="rounded-full" src="{{ $executiveMember->imageUrl() }}"
                                    alt="" />
                            </figure>
                        </div>
                        <div class="team_detail py-4">
                            <h3 class=" primary text-2xl font-medium font-dmsans">
                                {{ $executiveMember->name }}
                            </h3>
                            <p class="font-dmsans">{{ $executiveMember->designation }}</p>
                            <p class="font-dmsans py-6 font-medium">
                                {!! $executiveMember->testimonial !!}
                            </p>
                        </div>
                        <div class="team_socials">
                            <div class="mx-auto flex w-[40%] justify-around">
                                <a href="{{ $executiveMember->facebook }}"><i
                                    class="ri-facebook-circle-fill ri-2x"></i></a>
                                <a href="{{ $executiveMember->instagram }}"><i
                                    class="ri-instagram-line ri-2x"></i></a>
                                <a href="{{ $executiveMember->linkdin }}"><i
                                    class="ri-linkedin-box-fill ri-2x"></i></a>
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
            <div class="">
                <center class="header">
                    <h2 class="primary font-bold mb:text-3xl sm:text-4xl">
                        Testimonial
                    </h2>
                    <p class="font-dmsans text-xl text-gray-600">Hear what our members have to say</p>
                </center>
            </div>

            <div class="swiper mySwiper2 mt-16">
                <div class="swiper-wrapper test lg:ml-48">
                    @foreach ($testimonials as $attestant)
                    <div class="testimonials_card swiper-slide relative rounded-3xl py-4">
                        <div class="testimonial_image pt-14 pb-4">
                            <figure class="">
                                <img class="rounded-full" src="{{ $attestant->imageUrl() }}" alt="" />
                            </figure>
                        </div>
                        <div class="team_detail py-4">
                            <p class="poppins px-6 text-center font-medium">
                                {!! $attestant->description !!}
                            </p>
                            <h3 class="primary  pt-6 text-2xl font-medium">
                                {{ $attestant->name }}
                            </h3>
                            <p class="poppins">{{ $attestant->designation }}</p>
                        </div>
                        <div class="team_socials">
                            <div class="mx-auto flex w-[20%] justify-around">
                                <a href="{{ $attestant->facebook }}"><i
                                    class="ri-facebook-circle-fill ri-2x"></i></a>
                                <a href="{{ $attestant->instagram }}"><i class="ri-instagram-line ri-2x"></i></a>
                                <a href="{{ $attestant->facebook }}"><i
                                    class="ri-linkedin-box-fill ri-2x"></i></a>
                            </div>
                        </div>

                        <figure class="quote_img absolute top-36 left-12 opacity-100">
                            <img src="{{ asset('image/quote_ico.svg') }}" alt="" />
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials ends -->
    @push('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @endpush
</x-frontend.app>
