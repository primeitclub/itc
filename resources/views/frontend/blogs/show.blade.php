<x-frontend.app title="Blog">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Article</h1>
        </div>
    </x-frontend.wave>
    <!-- articles page starts -->
    <section class="container mx-auto font-poppins">
        <div class="mt-40 mb-40 grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-10">
            <div class="col-span-2">
                <div class="flex flex-col h-auto w-full mx-auto sm:block hidden pb-10">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" alt="Blog Thumbnail"
                        class="rounded-lg  w-full " />
                </div>
                <div class="text-4xl m-4 font-semibold">
                    <h1 class="text-primary font-poppins">{{ $blog->title }}</h1>
                </div>
                <div class="sm:text-xl text-md font-poppins p-8 leading-6 text-greish tracking-wider font-light">
                    {!! $blog->body !!}
                </div>
                <hr style="border-top: 1px solid black">
                <div class="mt-24">
                    <p class="font-poppins text-primary font-semibold m-4 bold text-2xl">Published By : </p>
                    <div class="m-4 text-sm font-medium">
                        <p class="text-xl">{{ $blog->author }}</p>
                        <div class="flex pt-4 gap-4 items-center">
                            @if($blog->author_facebook)
                            <a href="{{ $blog->author_facebook }}">
                                <x-logo.facebook />
                            </a>
                            @endif

                            @if($blog->author_linkedin)
                            <a href="{{ $blog->author_linkedin }}">
                                <x-logo.linkedin />
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <div class="flex pb-6">
                    <h1 class="text-4xl font-poppins ">Recent Post </h1>
                </div>
                <hr style="border-top: 1px solid black">
                <div class="p-4 flex">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" class="h-24 w-34">
                    <div class="pl-4">
                        <h1 class="font-semibold text-primary font-poppins ">{{ $blog->title }}</h1>
                        <p class=" text-xs">{{ $blog->published_at }}</p>
                    </div>
                </div>
                <div class="p-4 flex">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" class="h-24 w-34">
                    <div class="pl-4">
                        <h1 class="font-semibold  text-primary font-poppins ">{{ $blog->title }}</h1>
                        <p class=" text-xs">{{ $blog->published_at }}</p>
                    </div>
                </div>
                <div class="p-4 flex">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" class="h-24 w-34">
                    <div class="pl-4">
                        <h1 class="font-semibold text-primary font-poppins ">{{ $blog->title }}</h1>
                        <p class=" text-xs">{{ $blog->published_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>

    </section>

</x-frontend.app>
