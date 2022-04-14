@props(['name'])
@error($name)
<div class="mt-1 text-sm text-red-600">{{ $message }}</div>
@enderror
