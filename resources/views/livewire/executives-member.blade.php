<div class="mt-10 mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 lg:gap-x-8 lg:gap-y-12 px-8 sm:px-6">
    @foreach ($executiveMembers as $executiveMember)
        <div>
            <div class="space-y-4">
                <img class="mx-auto h-20 w-20 rounded-full lg:h-28 lg:w-28 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary object-cover"
                    src="{{ $executiveMember->imageUrl() }}" loading="lazy" alt="">
                <div class="space-y-2">
                    <div class="text-center font-dm-sans">
                        <h3 class="text-primary font-semibold text-xl">{{ $executiveMember->name }}</h3>
                        <p class="text-greish text-sm sm:text-lg text-center">{{ $executiveMember->designation }}
                        </p>
                    </div>
                </div>
                <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                    @if ($executiveMember->facebook)
                        <a href="{{ $executiveMember->facebook }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.facebook />
                        </a>
                    @endif

                    @if ($executiveMember->instagram)
                        <a href="{{ $executiveMember->instagram }}" target="_blank" rel="noopener noreferrer">
                            <x-logo.instagram />
                        </a>
                    @endif

                    @if ($executiveMember->linkedin)
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
