<x-frontend.app title="Blogs">
    <x-frontend.wave>
        <div class="">
            <h1 class="font-semibold text-white text-5xl lg:text-9xl">Blogs</h1>s
        </div>
    </x-frontend.wave>

    <section class=" pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="">
                <center>
                    <h2 class=" text-primary text-5xl font-semibold">
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
                                        <button class="text-sm text-gray-500 pt-4 pb-4">
                                            Read more
                                        </button>
                                    </a>
                                    <hr class="py-2" />
                                    <div class="grid grid-cols-2">
                                        <p class="py-2 text-sm leading-5">
                                            {{ $blog->author }}
                                        </p>
                                        <p class="flex justify-center py-2 text-sm leading-5">
                                            {{ $blog->published_at }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
    </section>

</x-frontend.app>
