<header class="relative" x-data="{ open: false }" x-init="init()">
  <div class="bg-rgradient-blue p-6">
    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
      <div class="flex items-center flex-1">
        <div class="flex items-center justify-between w-full md:w-auto">
          <a href="{{ route('home') }}">
            <span class="sr-only">Prime IT Club</span>
            <img class="h-8 w-auto sm:h-10" src="{{ asset('logo/logo.png') }}" alt="club's logo" />
          </a>
          <div class="-mr-2 flex items-center md:hidden">
            <button x-on:click="open = true" type="button" class=" rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="hidden space-x-8 md:flex md:ml-10">
        <a href="#" class="text-base font-medium text-gray-200 hover:text-white">Blogs</a>
        <a href="#" class="text-base font-medium text-gray-200 hover:text-white">Events</a>
        <a href="#" class="text-base font-medium text-gray-200 hover:text-white">Members</a>
        <a href="#" class="text-base font-medium text-gray-200 hover:text-white">About Us</a>
        <a href="#" class="text-base font-medium text-gray-200 hover:text-white">Gallery</a>
        <a href="#" class="text-base font-medium text-gray-200 hover:text-white">Merch</a>
      </div>
    </nav>
  </div>

  <div x-show="open" x-cloak x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" x-description="Mobile menu, show/hide based on menu open state." class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden" x-ref="panel" @click.away="open = false">
    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
      <div class="px-5 pt-4 flex items-center justify-between">
        <div>
          <img class="h-8 w-auto sm:h-10" src="{{ asset('logo/logo.png') }}" alt="club's logo" />
        </div>
        <div class="-mr-2">
          <button x-on:click="open = false" @click.outside="open = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-600" @click="toggle">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
      <div class="pt-5 pb-6">
        <div class="px-2">
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Blogs</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Events</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Members</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Gallery</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">About Us</a>

          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Merch</a>
        </div>
      </div>
    </div>
  </div>
</header>