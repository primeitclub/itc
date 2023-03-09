<x-frontend.app title="Blog">
    <!-- articles page starts -->
    <section class="container lg:m-44 md:m-44  font-poppins">
        <div class="flex flex-col h-auto w-full mx-auto sm:block hidden pb-10">
            <img src="{{ asset('/thumbnails/'. $blog->thumbnail) }}" alt="Blog Thumbnail" class="rounded-lg h-96 object-center lg:w-full md:w-full w-1/2" />
        </div>
        <div class="text-4xl m-4 font-bold">
            <h1 class="primary font-poppins">{{ $blog->title }}</h1>
        </div>
        <div class="sm:text-xl text-md font-poppins p-8 tracking-wide">
            {!! $blog->body !!}
        </div>
        <div class="m-4">
            <p class="font-poppins primary font-semibold m-4 bold text-2xl">Published By : </p>
            <div class="m-4 text-sm font-semibold">
                <p class="">{{ $blog->author }}</p>
                <p>{{ $blog->published_at }}</p>
            </div>
        </div>
    </section>

</x-frontend.app>
