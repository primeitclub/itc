<x-frontend.app title="Blog">
    <x-slot name="meta">
        <x-frontend.og-meta-tags
            :title="$blog->title"
            :description="$blog->excerpt"
            :image="$blog->thumbnailUrl()"
        />
    </x-slot>
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Article</h1>
        </div>
    </x-frontend.wave>

    <section class="mt-10 sm:mt-24 max-w-7xl mx-auto px-8 sm:px-6">
        <div class="flex justify-between gap-x-10">
            <div>
                <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
                    <img src="{{ $blog->thumbnailUrl() }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                </div>
                <div class="w-full max-w-screen-md">
                    <h2 class="mt-4 mb-2 text-4xl font-semibold text-primary leading-tight">
                        {{ $blog->title }}
                    </h2>
                    <span class="px-4 py-2 bg-primary rounded-full text-white text-xs font-semibold">{{ $blog->blogCategory->title }}</span>
                </div>

                <div class="px-4 lg:px-0 mt-10 text-gray-700 max-w-screen-md mx-auto text-lg font-dm-sans leading-relaxed">
                    {!! $blog->body !!}
                </div>
                <div class="flex mt-4 lg:mt-16 border-t-2">
                    <div class="mt-4 lg:mt-10 mb-10 flex space-x-2 items-center">
                        <img src="{{ $blog->authorImageUrl() }}" class="h-20 w-20 lg:h-28 lg:w-28 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-primary text-xl lg:text-2xl">{{ $blog->author }}</p>
                            <p class="font-semibold text-gray-400 text-xs">{{ $blog->readablePublishedDate() }}</p>
                            <div class="flex mt-2 space-x-2">
                                @if($blog->author_facebook)
                                <a href="{{ $blog->author_facebook }}" target="_blank" rel="noopener noreferrer">
                                    <x-logo.facebook />
                                </a>
                                @endif
                                @if($blog->author_linkedin)
                                <a href="{{ $blog->author_linkedin }}" target="_blank" rel="noopener noreferrer">
                                    <x-logo.linkedin />
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden py-2 md:hidden lg:block">
                <div class="mb-8 border-b-2 border-opacity-10">
                    <h2 class="pb-5 text-3xl font-normal text-greish">Recent Posts</h2>
                </div>
                @foreach($recentBlogs as $recentBlog)
                <div class="flex flex-col divide-y divide-gray-700">
                    <div class="flex px-1 py-4">
                        <img class="flex-shrink-0 object-cover w-20 h-20 mr-4" src="{{ $recentBlog->thumbnailUrl() }}">
                        <div class="flex flex-col flex-grow">
                            <a href="{{ route('blogs.show', $recentBlog->slug) }}" class="text-primary hover:underline">{{ $recentBlog->title }}</a>
                            <p class="mt-auto text-xs">
                                {{ $recentBlog->readablePublishedDate() }}
                                <span class="block lg:ml-2 cursor-pointer lg:inline hover:underline">{{ $recentBlog->blogCategory->title }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-frontend.app>
