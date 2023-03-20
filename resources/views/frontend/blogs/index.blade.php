<x-frontend.app title="Blogs">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Blogs</h1>
        </div>
    </x-frontend.wave>

    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <center>
                    <h2 class=" text-primary text-5xl font-semibold">
                        All Articles
                    </h2>
                    <p class=" text-xl pt-4">
                        Browse our collection
                    </p>

                </center>

                <div class=" p-4">
                    <div class="events gid-cols-1 events grid gap-12 md:grid-cols-3">
                        @foreach ($blogs as $blog)
                            <div class="mt-8 rounded-xl bg-white w-full  sm:w-auto drop-shadow-xl">
                                <div class="img">
                                    <figure>
                                        <img class="w-[100%] h-80 rounded-t-xl"
                                            src="{{ asset('/thumbnails/'.$blog->thumbnail) }}" alt="" />
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
                                        <div class ="flex items-center">
                                            <p class="text-sm leading-5 pt-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor"
                                                    class="w-6 h-6 text-greish">
                                                    <path
                                                        d="M4.14659 9.97073L5.32059 9.63206L12.3893 2.47873C12.445 2.42159 12.4761 2.34482 12.4757 2.26498C12.4753 2.18515 12.4435 2.10867 12.3873 2.05206L11.9639 1.62406C11.9366 1.59595 11.9039 1.57357 11.8678 1.55823C11.8317 1.54289 11.7929 1.53489 11.7537 1.53471C11.7144 1.53452 11.6756 1.54215 11.6393 1.55715C11.6031 1.57215 11.5702 1.59421 11.5426 1.62206L4.49259 8.75673L4.14592 9.97006L4.14659 9.97073ZM12.8019 0.77606L13.2253 1.20473C13.8093 1.79606 13.8146 2.75006 13.2359 3.33539L5.95192 10.7074L3.44259 11.4301C3.28938 11.4729 3.12543 11.4533 2.98669 11.3754C2.84796 11.2976 2.74578 11.1678 2.70259 11.0147C2.67044 10.9046 2.66998 10.7877 2.70125 10.6774L3.43125 8.11739L10.6959 0.764727C10.8341 0.625632 10.9985 0.515435 11.1797 0.440562C11.3609 0.365689 11.5551 0.327639 11.7512 0.328632C11.9472 0.329625 12.1411 0.369641 12.3215 0.446345C12.5019 0.523049 12.6652 0.634907 12.8019 0.775394V0.77606ZM5.12259 1.54473C5.45325 1.54473 5.72125 1.81606 5.72125 2.15073C5.72178 2.22984 5.70671 2.30828 5.6769 2.38156C5.64709 2.45485 5.60313 2.52153 5.54753 2.57782C5.49193 2.6341 5.42578 2.67887 5.35286 2.70957C5.27995 2.74027 5.2017 2.75629 5.12259 2.75673H2.72792C2.06659 2.75673 1.53059 3.29939 1.53059 3.96806V11.2387C1.53059 11.9081 2.06659 12.4507 2.72792 12.4507H9.91192C10.5733 12.4507 11.1099 11.9081 11.1099 11.2387V8.81539C11.1099 8.48073 11.3779 8.20939 11.7086 8.20939C12.0393 8.20939 12.3073 8.48073 12.3073 8.81606V11.2387C12.3073 12.5774 11.2346 13.6627 9.91192 13.6627H2.72792C1.40525 13.6627 0.333252 12.5774 0.333252 11.2387V3.96806C0.333252 2.63006 1.40525 1.54473 2.72792 1.54473H5.12259Z"
                                                        fill="black" />
                                                </svg>
                                            </p>
                                            <p>
                                                {{ $blog->author }}
                                            </p>
                                        </div>
                                        <div>
                                            <p class="flex justify-center py-2 text-sm leading-5">
                                                {{ $blog->published_at }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
    </section>

</x-frontend.app>
