@props(['name'])
<div class="mt-1 flex rounded-md shadow-sm">
    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> http:// </span>
    <input {{ $attributes }} name="{{ $name }}" class="@error($name) border-red-600 @enderror flex-1 block w-full p-2 border border-gray-300 rounded-r form-input">
</div>
