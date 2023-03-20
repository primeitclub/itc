<section class="bg-primary">
    <div class="max-w-7xl mx-auto px-8 pt-32 sm:px-6">
        {{ $slot }}
    </div>

    <div class="wavediv mt-6 lg:mt-28" id="wavediv">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave"
                    d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(239, 242, 250,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(239, 242, 250,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(239, 242, 250,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(239, 242, 250,1)" />
            </g>
        </svg>
    </div>
</section>
