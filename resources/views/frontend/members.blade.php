<x-frontend.app title="Members">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Members</h1>
        </div>
    </x-frontend.wave>

    <!-- Executive Members Section -->
    <section class="mt-24 mb-24 max-w-7xl text-center mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Executive Members</h1>
        <p class="text-center text-sm sm:text-xl text-greish">The backbone of the club</p>

        @livewire('members-option')
        @livewire('president-show')
        @livewire('executives-member')
        <!-- General Members Section -->
        <section class="mt-24 mb-24 max-w-7xl mx-auto px-8 sm:px-6">
            <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">General Members</h1>
            <p class="text-center text-sm sm:text-xl text-greish">The workforce of the club</p>

            @livewire('general-member')
        </section>
    </section>

    @livewireScripts
</x-frontend.app>
