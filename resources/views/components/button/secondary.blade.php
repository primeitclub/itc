@props(['link'])
<span class="inline-flex rounded-md shadow-sm">
    <a href="{{ $link }}" class="px-4 py-2 text-sm font-medium text-gray-700 border border-gray-200 border-gray-300 rounded-md leading-5 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
        {{ $slot }}
    </a>
</span>
