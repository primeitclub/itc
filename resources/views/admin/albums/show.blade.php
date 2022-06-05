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
                <div class="relative ">
                    <div class="absolute inset-0 z-10 bg-red-100 text-center flex flex-col items-center justify-center opacity-0 hover:opacity-100 bg-opacity-80 duration-300">
                        <form action="{{ route('admin.images.destroy',$image) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium text-red-500 rounded-lg leading-5  focus:outline-none focus:shadow-outline-gray" aria-label="Delete" onclick="return confirm('Are you sure ?')">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xl font-bold uppercase">Delete</span>
                            </button>
                        </form>
                    </div>
                    <div class="flex flex-wrap content-center">
                        <img src="{{ $image->imageURL() }}" class="mx-auto  " alt="image">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <x-notification />
</x-admin.app>
