@props([
'label',
'for'
])
<div class="space-y-2">
    <label for="{{ $for }}" class="block font-bold text-gray-700 text-md">{{ $label }}</label>
    {{ $slot }}
</div>
