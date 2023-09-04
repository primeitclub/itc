 <!-- General Members Section -->
<section class="mt-24 mb-24 max-w-7xl mx-auto px-8 sm:px-6">
    <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">General Members</h1>
    <p class="text-center text-sm sm:text-xl text-greish">The workforce of the club</p>

    <div class="mt-10 mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6 px-8 sm:px-6">
        @foreach ($generalMembers as $generalMember)
            <div>
                <div class="space-y-4">
                    <img class="mx-auto h-20 w-20 rounded-full lg:h-24 lg:w-24 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary object-cover"
                        src="{{ $generalMember->imageUrl() }}" loading="lazy" alt="">
                    <div class="space-y-2">
                        <div class="text-center font-medium lg:text-sm font-dm-sans">
                            <h3 class="text-primary font-semibold text-xl">{{ $generalMember->name }}</h3>
                        </div>
                    </div>
                    <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                        @if ($generalMember->facebook)
                            <a href="{{ $generalMember->facebook }}" target="_blank" rel="noopener noreferrer">
                                <x-logo.facebook />
                            </a>
                        @endif

                        @if ($generalMember->instagram)
                            <a href="{{ $generalMember->instagram }}" target="_blank" rel="noopener noreferrer">
                                <x-logo.instagram />
                            </a>
                        @endif

                        @if ($generalMember->linkedin)
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