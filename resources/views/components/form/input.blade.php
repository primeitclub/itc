@props(['name'])
<input {{ $attributes }} name="{{ $name }}" class="@error($name) border-red-600 @enderror w-full p-2 border border-gray-300 rounded form-input">
