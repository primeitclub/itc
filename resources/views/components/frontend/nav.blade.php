<header x-data="{ isOpen : false }" >
    <div class="fixed bg-primary py-6 inset-x-0 z-10">
        <nav class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="{{ route('home') }}">
                        <img class="h-10 lg:h-12 w-auto" src="{{ asset('logo/logo.png') }}" alt="club's logo" />
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button x-on:click="isOpen = true" type="button" class="text-gray-300">
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden space-x-8 md:flex md:ml-10">
                <a href="#" class="text-base leading-6 font-medium text-gray-100 hover:text-white ">Blogs</a>
                <a href="#" class="text-base leading-6 font-medium text-gray-100 hover:text-white ">Events</a>
                <a href="#" class="text-base leading-6 font-medium text-gray-100 hover:text-white ">Members</a>
                <a href="#" class="text-base leading-6 font-medium text-gray-100 hover:text-white ">Gallery</a>
                <a href="#" class="text-base leading-6 font-medium text-gray-100 hover:text-white ">About Us</a>
                <a href="#" class="text-base leading-6 font-medium text-gray-100 hover:text-white ">Merch</a>
            </div>
        </nav>
    </div>

    <!-- <div x-show="isOpen" x-cloak class="fixed inset-0 z-0 bg-gray-300/60 backdrop-blur"></div> -->
    <div x-show="isOpen" x-cloak class="fixed inset-0 backdrop-blur transition-opacity opacity-100"></div>

    <div x-show="isOpen" x-cloak @click.away="isOpen = false"
        x-transition:enter="duration-150 ease-out"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        x-description="Mobile menu, show/hide based on menu isOpen state."
        class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top md:hidden"
    >
        <div class="rounded-xl shadow-sm bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto sm:h-10" src="{{ asset('logo/logo.png') }}" alt="club's logo" />
                </div>
                <div class="-mr-2">
                    <button x-on:click="isOpen = false" @click.outside="isOpen = false"type="button" class="text-gray-900">
                        <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="pt-5 pb-6">
                <div class="px-2 text-base font-medium text-gray-700">
                    <a href="#" class="tracking-wide text-center block px-3 py-4 hover:text-gray-900">Blogs</a>
                    <a href="#" class="tracking-wide text-center block px-3 py-4 hover:text-gray-900">Events</a>
                    <a href="#" class="tracking-wide text-center block px-3 py-4 hover:text-gray-900">Members</a>
                    <a href="#" class="tracking-wide text-center block px-3 py-4 hover:text-gray-900">Gallery</a>
                    <a href="#" class="tracking-wide text-center block px-3 py-4 hover:text-gray-900">About Us</a>
                    <a href="#" class="tracking-wide text-center block px-3 py-4 hover:text-gray-900">Merch</a>
                </div>
            </div>
        </div>
    </div>
</header>
