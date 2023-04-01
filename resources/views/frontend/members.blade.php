<x-frontend.app title="Members">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Members</h1>
        </div>
    </x-frontend.wave>

    <!-- Executive Members Section -->
    <section class="mt-24 mb-24 max-w-7xl text-center mx-auto px-8 sm:px-6 ">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Executive Members</h1>
        <p class="text-center text-sm sm:text-xl text-greish">The backbone of the club</p>

        <!-- Select Year Dropdown -->
        <!-- <div x-data="{ show : false }" class="mt-4 flex items-center justify-center lg:justify-end"> -->
        <!--     <div class="relative inline-block text-left"> -->
        <!--         <div> -->
        <!--             <button x-on:click="show = !show" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:bg-gray-50 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true"> -->
        <!--                 <h3 class="text-center text-xl text-primary">Year</h3> -->
        <!--                 <svg class="my-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> -->
        <!--                     <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" /> -->
        <!--                 </svg> -->
        <!--             </button> -->
        <!--         </div> -->
        <!--         <div x-show="show" x-on:click.away="show = false" x-cloak class="absolute px-4 z-0 mt-2 origin-top-right rounded-md bg-white shadow-lg focus:outline-none"> -->
        <!--             <a href="" class="text-gray-700 block py-2 px-4 text-sm" >2022</a> -->
        <!--         </div> -->
        <!--     </div> -->
        <!-- </div> -->

        @foreach($executiveMembers->where('designation', 'President') as $president)
        <article class="w-full mx-auto px-8 py-6">
            <div class="mt-6 w-fit mx-auto">
                <img src="{{ $president->imageUrl() }}" loading="lazy" class="mx-auto rounded-full w-24 h-24 lg:h-32 lg:w-32 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary object-cover" />
            </div>

            <div class="mt-4 font-dm-sans text-center font-medium">
                <h2 class="text-primary font-semibold text-2xl text-center">{{ $president->name }}</h2>
                <p class="text-greish text-lg text-center">{{ $president->designation }}</p>
            </div>

            <footer class="mt-4">
                <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                    @if($president->facebook)
                    <a href="{{ $president->facebook }}" target="_blank" rel="noopener noreferrer">
                        <x-logo.facebook />
                    </a>
                    @endif

                    @if($president->instagram)
                    <a href="{{ $president->instagram }}" target="_blank" rel="noopener noreferrer">
                        <x-logo.instagram />
                    </a>
                    @endif

                    @if($president->linkedin)
                    <a href="{{ $president->linkedin }}" target="_blank" rel="noopener noreferrer">
                        <x-logo.linkedin />
                    </a>
                    @endif
                </div>
            </footer>
        </article>
        @endforeach

        <div class="mt-10 mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 lg:gap-x-8 lg:gap-y-12 px-8 sm:px-6">
            @foreach($executiveMembers->where('designation', '!=', 'President') as $executiveMember)
            <div>
                <div class="space-y-4">
                    <img class="mx-auto h-20 w-20 rounded-full lg:h-28 lg:w-28 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary object-cover" src="{{ $executiveMember->imageUrl() }}"  loading="lazy" alt="">
                    <div class="space-y-2">
                        <div class="text-center font-dm-sans">
                            <h3 class="text-primary font-semibold text-xl">{{ $executiveMember->name }}</h3>
                            <p class="text-greish text-sm sm:text-lg text-center">{{ $executiveMember->designation }}</p>
                        </div>
                    </div>
                    <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                        @if($executiveMember->facebook)
                        <a href="{{ $executiveMember->facebook }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.facebook />
                        </a>
                        @endif

                        @if($executiveMember->instagram)
                        <a href="{{ $executiveMember->instagram }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.instagram />
                        </a>
                        @endif

                        @if($executiveMember->linkedin)
                        <a href="{{ $executiveMember->linkedin }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.linkedin />
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- General Members Section -->
    <section class="mt-24 mb-24 max-w-7xl mx-auto px-8 sm:px-6 ">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">General Members</h1>
        <p class="text-center text-sm sm:text-xl text-greish">The workforce of the club</p>

        <div class="mt-10 mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6 px-8 sm:px-6">
            @foreach($generalMembers as $generalMember)
            <div>
                <div class="space-y-4">
                    <img class="mx-auto h-20 w-20 rounded-full lg:h-24 lg:w-24 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary object-cover" src="{{ $generalMember->imageUrl() }}"  loading="lazy" alt="">
                    <div class="space-y-2">
                        <div class="text-center font-medium lg:text-sm font-dm-sans">
                            <h3 class="text-primary font-semibold text-xl">{{ $generalMember->name }}</h3>
                        </div>
                    </div>
                    <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                        @if($generalMember->facebook)
                        <a href="{{ $generalMember->facebook }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.facebook />
                        </a>
                        @endif

                        @if($generalMember->instagram)
                        <a href="{{ $generalMember->instagram }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.instagram />
                        </a>
                        @endif

                        @if($generalMember->linkedin)
                        <a href="{{ $generalMember->linkedin }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.linkedin />
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</x-frontend.app>
