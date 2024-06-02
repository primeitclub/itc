@props(['type'])
<span class="inline-flex rounded-md shadow-sm">
    <button type="{{ $type }}" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-primary-light hover:bg-primary focus:outline-none focus:border-primary focus:shadow-outline-primary active:bg-primary transition duration-150 ease-in-out border border-gray-200">
        {{ $slot }}
    </button>
</span>
