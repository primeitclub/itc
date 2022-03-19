<x-admin.layout>
    <div class="flex h-screen overflow-hidden bg-gray-100">
        <x-admin.sidebar />

        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <main class="relative z-0 flex-1 pt-2 pb-6 overflow-y-auto focus:outline-none md:py-6" tabindex="0" x-data="" x-init="$el.focus()">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    {{$slot}}
                </div>
            </main>
        </div>
    </div>

</x-admin.layout>
