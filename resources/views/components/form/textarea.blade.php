@props(['name'])
<textarea name="{{ $name }}" id="{{ $name }}" class="@error($name) border-red-600 @enderror w-full border border-gray-300 rounded form-input ">
{{ $slot }}
</textarea>
