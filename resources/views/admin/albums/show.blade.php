<x-admin.app title="Gallery | Album | Images">
    <div class="mt-8 space-y-6">
        <div class="flex justify-between ">
            <h1 class="text-xl font-bold text-gray-900 uppercase">Album Images</h1>

            <x-button.secondary link="{{ route('admin.albums.index') }}">Go Back</x-button.secondary>
        </div>

        <form method="POST" action="{{ route('admin.images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 flex items-center justify-between ">

                        <input type="hidden" name="album_id" value="{{$album->id}}">

                        <x-form.group label="Upload Images to album" for="images">
                            <input type="file" id="images" name="images[]" accept="image/*" class="@error('image') border-red-600 @enderror" multiple>
                        </x-form.group>

                        <x-button.primary type="submit">Upload</x-button.primary>
                    </div>
                </div>

            </div>
        </form>

        <div class="container grid grid-cols-3 gap-2 mx-auto">
            @foreach($album->images as $image)
            <div class="w-full rounded">
                <img src="{{ $image->imageURL() }}"
                    alt="image">
            </div>
            @endforeach
        </div>
    </div>

    <x-notification />
</x-admin.app>
