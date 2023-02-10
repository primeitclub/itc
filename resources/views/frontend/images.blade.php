<x-frontend.app title="Photos">
    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class="poppins primary text-4.1xl font-semibold">
                        Photos
                    </h2>
                </center>
            </div>
            <div class="grid gap-8 grid-rows-3 grid-cols-1 grid-flow-col sm:grid-cols-2 md:grid-cols-3 mt-8">
                <div class="flex items-center justify-center overflow-hidden relative  col-span-3 h-full  ">
                    <div
                        class=" absolute top-0 left-0 w-full h-full bg-gray-900 text-white flex items-center justify-center transform duration-700">
                        <p><img src="{{ asset('image/blog.jpg') }}" class="w-full"></p>
                    </div>
                </div>
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
                <img src="{{ asset('image/blog.jpg') }}" class="w-full">
            </div>
    </section>

</x-frontend.app>
