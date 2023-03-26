<x-frontend.app title="Blogs">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Blogs</h1>
        </div>
    </x-frontend.wave>

    <section class="mt-10 sm:mt-24 mb-10 sm:mb-24 max-w-7xl mx-auto px-8 sm:px-6">
        @if(!$blogs->count())
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Oops! No content to show!</h1>
        <p class="text-center text-sm sm:text-xl text-greish">We will post some interesting blogs soon...</p>
        @else
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">All Articles</h1>
        <p class="text-center text-base sm:text-xl text-greish">Browse our recent publications</p>

        <div class="mx-auto mt-12 grid max-w-lg gap-8 lg:max-w-none lg:grid-cols-3">
            @foreach($blogs as $blog)
            <div class="flex flex-col overflow-hidden rounded-xl shadow-xl">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ $blog->thumbnailUrl() }}" alt="">
                </div>
                <div class="flex flex-1 flex-col justify-between bg-white p-6">
                    <div class="flex-1">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold bg-primary text-white">{{ $blog->blogCategory->title }}</span>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="mt-2 block">
                            <p class="text-2xl font-semibold text-primary hover:text-primary-light">{{ $blog->title }}</p>
                        </a>
                        <div class="mt-3 text-base text-greish line-clamp-4">
                            {!! $blog->body !!}
                        </div>
                    </div>

                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="{{ $blog->authorImageUrl() }}" alt="">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $blog->author }}
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-16">{{ $blog->readablePublishedDate() }}</time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @endif
        </div>
    </section>

</x-frontend.app>
