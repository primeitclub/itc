<x-frontend.layout>

    <div class="bg-gradient-white">
        <div class="relative overflow-hidden">
            <x-frontend.navbar />

            <main>
                {{ $slot }}
            </main>

            <x-frontend.footer />
        </div>
    </div>
</x-frontend.layout>
