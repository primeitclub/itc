<x-frontend.app title="Blogs">
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="">
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
                        <div class="hidden lg:block pt-24">
                            <div class="relative py-6 px-5">
                                <div class="relative h-96 w-full border-4 rounded-r-2xl border-blue-800">
                                    <div class="absolute mt-4 top-4 -left-10">
                                        <img src="{{ asset('/thumbnails/'. $featuredBlog->thumbnail) }}" alt="Blog's thumbnail" class="rounded-r-2xl rounded-b-2xl h-ih w-iw" />
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
                                <a href="{{ route('blogs.show', $featuredBlog->slug) }}"
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

    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="">
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
                        @foreach ($blogs as $blog)
                        <div class="event_card  mt-8 rounded-xl bg-white sm:w-auto">
                            <div class="img">
                                <figure>
                                    <img class="w-[100%] h-96 rounded-t-xl" src="{{ asset('/thumbnails/'. $blog->thumbnail) }}"
                                        alt=""/>
                                </figure>
                            </div>

                            <div class="event_card_contens p-7 ">
                                <h3 class="primary poppins text-2xl font-semibold">
                                    <a href="{{ route('blogs.show', $blog->slug) }}"> {{ $blog->title }} </a>
                                </h3>
                                <div class="h-48 overflow-hidden">
                                    <p class="home_text py-4 text-base font-light leading-6">
                                        {!! $blog->body !!}
                                    </p>
                                </div>
                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    <button
                                        class="text-sm text-gray-400">
                                        Read more
                                    </button>
                                </a>
                                <hr class="py-2" />
                                <div class="grid grid-cols-2">
                                    <p class="home_text py-2 text-sm leading-5">
                                        {{ $blog->author }}
                                    </p>
                                    <p class="home_text py-2 text-sm leading-5">
                                        {{ $blog->formattedPublishedAt() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
    </section>

</x-frontend.app>
