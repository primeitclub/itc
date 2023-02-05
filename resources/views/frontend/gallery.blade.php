<x-frontend.app title="Gallery">
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-semibold">
                        Albums
                    </h2>
                    <p class="home_text text-xl">
                        Check out some of our photo albums
                    </p>
                </center>
            </div>
            <div class="grid gap-8 grid-rows-3 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-8">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
            </div>
    </section>
</x-frontend.app>
