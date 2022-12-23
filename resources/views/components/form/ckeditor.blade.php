@props(['name'])
<textarea name="{{ $name }}" id="{{ $name }}" class="@error($name) border-red-600 @enderror w-full border border-gray-300 rounded form-input ">
{{ $slot }}
</textarea>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector(`#{{$name}}`),{
            ckfinder:{
                uploadUrl: "{{ route('admin.blogs.images.store',['_token'=> csrf_token()]) }}"
            }
        })

        .catch(error => {
            console.error(error);
        });
</script>

@endpush
