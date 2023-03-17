<x-frontend.app title="Blog">
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
    <!-- articles page starts -->
    <section class="container mx-auto font-poppins">
        <div class="mt-40 mb-40 grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="col-span-2">
                <div class="flex flex-col h-auto w-full mx-auto sm:block hidden pb-10">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" alt="Blog Thumbnail"
                        class="rounded-lg  w-full " />
                </div>
                <div class="text-4xl m-4 font-bold">
                    <h1 class="text-primary font-poppins">{{ $blog->title }}</h1>
                </div>
                <div class="sm:text-xl text-md font-poppins p-8 tracking-wide">
                    {!! $blog->body !!}
                </div>
                <hr style="border-top: 1px solid black">
                <div class="m-24">
                    <p class="font-poppins text-primary font-semibold m-4 bold text-2xl">Published By : </p>
                    <div class="m-4 text-sm font-semibold">
                        <p class="">{{ $blog->author }}</p>
                        <p>{{ $blog->published_at }}</p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="flex p-6">
                    <h1 class="text-4xl font-poppins ">Recent Post </h1>
                </div>
                <hr style="border-top: 1px solid black">
                <div class="p-6 flex">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" class="h-24 w-34">
                    <div class="p-4">
                        <h1 class="font-semibold text-primary font-poppins ">{{ $blog->title }}</h1>
                        <p class=" text-xs">{{ $blog->published_at }}</p>
                    </div>
                </div>
                <div class="p-6 flex">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" class="h-24 w-34">
                    <div class="p-4">
                        <h1 class="font-semibold  text-primary font-poppins ">{{ $blog->title }}</h1>
                        <p class=" text-xs">{{ $blog->published_at }}</p>
                    </div>
                </div>
                <div class="p-6 flex">
                    <img src="{{ asset('blog-images/groot_1671793404.png') }}" class="h-24 w-34">
                    <div class="p-4">
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
