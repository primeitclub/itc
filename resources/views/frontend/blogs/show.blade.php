<x-frontend.app title="Blog">
    <!-- articles page starts -->
    <section class="container mx-auto font-poppins">
        <div class="mt-40 mb-40 grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="col-span-2">
                <div class="flex flex-col h-auto w-full mx-auto sm:block hidden pb-10">
                    <img src="{{ asset('/thumbnails/' . $blog->thumbnail) }}" alt="Blog Thumbnail"
                        class="rounded-lg  w-full " />
                </div>
                <div class="text-4xl m-4 font-bold">
                    <h1 class="primary font-poppins">{{ $blog->title }}</h1>
                </div>
                <div class="sm:text-xl text-md font-poppins p-8 tracking-wide">
                    {!! $blog->body !!}
                </div>
                <hr style="border-top: 1px solid black">
                <div class="m-24">
                    <p class="font-poppins primary font-semibold m-4 bold text-2xl">Published By : </p>
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
                    <img src="{{ asset('/thumbnails/' . $blog->thumbnail) }}" class="h-24 w-24">
                    <div class="p-4">
                        <h1 class="font-semibold font-poppins ">{{ $blog->title }}</h1>
                        <p class=" text-xs">{{ $blog->published_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>

    </section>

</x-frontend.app>
