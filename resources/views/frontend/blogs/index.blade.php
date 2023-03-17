<x-frontend.app title="Blogs">
    <!-- Wave Section -->
    <section class="bg-primary">
        <div class="max-w-7xl mx-auto px-4 pt-32 sm:px-6">
            <div class="">
                <span class="font-dmsans font-normal text-white text-2xl text-center lg:text-5xl ">PRIME</span>
                <h1 class="font-bold text-white text-5xl lg:text-9xl">IT CLUB</h1>
                <p class="text-2xl font-normal text-white">"Processing Future"</p>
            </div>
        </div>
        <div class="wavediv mt-6 lg:mt-28" id="wavediv">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(239, 242, 250,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(239, 242, 250,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(239, 242, 250,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(239, 242, 250,1)" />
                </g>
            </svg>
        </div>
    </section>

    <section class=" pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="">
                <center>
                    <h2 class=" text-primary text-4xl font-semibold">
                        All Articles
                    </h2>
                    <p class=" text-xl">
                        Browse our collection
                    </p>
                    
                </center>
                  
                <div class=" pt-24">
                    <div class="gid-cols-1 events grid gap-12 lg:grid-cols-3">
                        @foreach ($blogs as $blog)
                            <div class=" mt-8 rounded-xl bg-white w-96 sm:w-auto drop-shadow-xl">
                                <div class="img">
                                    <figure>
                                        <img class="w-[100%] h-80 rounded-t-xl"
                                            src="{{ asset('blog-images/groot_1671793404.png') }}" alt="" />
                                    </figure>
                                </div>

                                <div class="p-7 ">
                                    <h3 class="text-primary text-2xl font-semibold">
                                        <a href="{{ route('blogs.show', $blog->slug) }}"> {{ $blog->title }} </a>
                                    </h3>
                                    <div class="text-greish h-40 overflow-hidden">
                                        <p class="py-2 text-base font-light leading-6">
                                            {!! $blog->body !!}
                                        </p>
                                    </div>
                                    <a href="{{ route('blogs.show', $blog->slug) }}">
                                        <button class="text-sm text-gray-400">
                                            Read more
                                        </button>
                                    </a>
                                    <hr class="py-2" />
                                    <div class="grid grid-cols-2">
                                        <p class="py-2 text-sm leading-5">
                                            {{ $blog->author }}
                                        </p>
                                        <p class="flex justify-center py-2 text-sm leading-5">
                                            2023, Sept 25
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
    </section>

</x-frontend.app>
