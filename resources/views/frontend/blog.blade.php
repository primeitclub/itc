<x-frontend.app title="Blog">
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

    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-semibold">
                        All Articles
                    </h2>
                    <p class="home_text text-xl">
                        Browse our collection
                    </p>
                </center>
                <div class="event_wraper pt-24">
                    <div class="gid-cols-1 events grid gap-10 lg:grid-cols-3">
                        @foreach ($Blog as $blogs)
                        @endforeach
                        <div class="event_card mt-8 rounded-xl bg-white sm:w-auto">
                            <div class="img">
                                <figure>
                                    <img class="w-[100%] rounded-t-xl" src="blog-images/EventImage.jpg"
                                        alt="" />
                                </figure>
                            </div>

                            <div class="event_card_contens p-7 ">
                                <h3 class="primary poppins text-2xl font-semibold">
                                    {{ $blogs->title }}
                                </h3>
                                <div class="h-48 overflow-hidden">
                                    <p class="home_text py-4 text-base font-light leading-6">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum id pariatur
                                        nam asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
                                        nobis libero deleniti vel amet vero debitis!
                                    </p>
                                </div>
                                <hr class="py-2" />
                                {{-- <button
                                        class="bg_primary home_text w-full rounded-3xl px-20 py-2 text-xl text-white hover:bg-blue-900">
                                        Register Now
                                    </button> --}}
                                <div class="grid grid-cols-2">
                                    <p class="home_text py-2 text-sm leading-5">
                                        Pranab
                                    </p>
                                    <p class="home_text py-2 text-sm leading-5">
                                        Published 12 days ago
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </section>
    <!-- Event section ends -->

</x-frontend.app>
