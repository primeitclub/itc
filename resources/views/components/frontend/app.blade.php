<x-frontend.layout>

  <div class="bg-gradient-white">
    <div class="relative overflow-hidden">
      <x-frontend.navbar />

      <main>
        <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
          <div class="mx-auto max-w-7xl lg:px-8">
            {{ $slot }}
          </div>
        </div>

      </main>

      <x-frontend.footer />
    </div>
  </div>
</x-frontend.layout>