@foreach ($executiveMembers->where('designation','=', 'President') as $president)
    <article class="w-full mx-auto px-8 py-6">
        <div class="mt-6 w-fit mx-auto">
            <img src="{{ $president->imageUrl() }}" loading="lazy"
                class="mx-auto rounded-full w-24 h-24 lg:h-32 lg:w-32 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary object-cover" />
        </div>

        <div class="mt-4 font-dm-sans text-center font-medium">
            <h2 class="text-primary font-semibold text-2xl text-center">{{ $president->name }}</h2>
            <p class="text-greish text-lg text-center">{{ $president->designation }}</p>
        </div>

        <footer class="mt-4">
            <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                @if ($president->facebook)
                    <a href="{{ $president->facebook }}" target="_blank" rel="noopener noreferrer">
                        <x-logo.facebook />
                    </a>
                @endif

                @if ($president->instagram)
                    <a href="{{ $president->instagram }}" target="_blank" rel="noopener noreferrer">
                        <x-logo.instagram />
                    </a>
                @endif

                @if ($president->linkedin)
                    <a href="{{ $president->linkedin }}" target="_blank" rel="noopener noreferrer">
                        <x-logo.linkedin />
                    </a>
                @endif
            </div>
        </footer>
    </article>
@endforeach 



