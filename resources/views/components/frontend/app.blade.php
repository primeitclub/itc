<x-frontend.layout>
    <x-slot name="head">
        {{ $meta ?? '' }}
    </x-slot>

    <x-frontend.nav/>

    <main>
        {{ $slot }}
    </main>

    <x-subscribed />

    <x-frontend.footer/>
</x-frontend.layout>
