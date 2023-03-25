<x-frontend.app title="Blog">
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
                    <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
                </div>
                <div class="w-full max-w-screen-md">
                    <h2 class="mt-4 mb-2 text-4xl font-semibold text-primary leading-tight">
                        Pellentesque a consectetur velit, ac molestie ipsum. Donec sodales, massa et auctor.
                    </h2>
                    <span class="px-4 py-2 bg-primary rounded-full text-white text-xs font-semibold">Uncategorized</span>
                </div>

                <div class="px-4 lg:px-0 mt-10 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
                    <p class="pb-6">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at
                        tastes really
                        so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited
                        elderly be. View him she roof tell her case has sigh. Moreover is possible he admitted sociable concerns. By
                        in cold no less been sent hard hill.</p>

                    <p class="pb-6">Detract yet delight written farther his general. If in so bred at dare rose lose good. Feel and
                        make two real
                        miss use easy. Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient
                        to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it
                        without me.</p>
                </div>
                <div class="flex mt-3 border-t-2">
                    <div class="mt-10 mb-10 flex space-x-2 items-center">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg" class="h-28 w-28 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-normal text-primary text-2xl"> Mike Sullivan </p>
                            <div class="flex mt-2 space-x-2">
                                <a href="">
                                    <x-logo.facebook />
                                </a>
                                <a href="">
                                    <x-logo.linkedin />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden py-2 md:hidden lg:block">
                <div class="mb-8 border-b-2 border-opacity-10">
                    <h2 class="pb-5 text-3xl font-normal text-greish">Recent Posts</h2>
                </div>
                <div class="flex flex-col divide-y divide-gray-700">
                    <div class="flex px-1 py-4">
                        <img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4" src="https://source.unsplash.com/random/244x324">
                        <div class="flex flex-col flex-grow">
                            <a rel="noopener noreferrer" href="#" class="font-serif hover:underline">Aenean ac tristique lorem, ut mollis dui.</a>
                            <p class="mt-auto text-xs">5 minutes ago
                                <span class="block lg:ml-2 cursor-pointer lg:inline hover:underline">Politics</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend.app>
