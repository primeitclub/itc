<x-admin.app title="Gallery">
    <div class="mt-8 space-y-6">
        <div class="flex justify-between ">
            <h1 class="text-xl font-bold text-gray-900 uppercase">Image Gallery</h1>

            <x-button.link link="{{ route('admin.albums.create') }}">Add new Album</x-button.link>
        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto space-y-4">
                <div class="container grid grid-cols-2 gap-4 mx-auto">

                    @foreach($albums as $album)
                    <div class="w-full bg-white rounded overflow-hidden border border-gray-200 shadow-md">
                        <img src="{{ $album->thumbnailURL() }}"
                            alt="image">
                        <div class="p-5">

                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $album->title }}</h5>
                            </a>

                            <p class="mb-3 font-normal text-gray-700">{!! $album->description !!}</p>

                            <div class="flex justify-between">

                                <x-button.link link="{{ route('admin.albums.show',$album) }}">
                                    View more
                                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </x-button.link>

                                <div class="flex items-center text-sm space-x-4">
                                    <a href="{{ route('admin.albums.edit',$album->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-green-500 rounded-lg leading-5 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>

                                    <form action="{{ route('admin.albums.destroy',$album->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="flex items-center justify-between px-2 py-2 text-sm font-medium text-red-500 rounded-lg leading-5  focus:outline-none focus:shadow-outline-gray" aria-label="Delete" onclick="return confirm('Are you sure ?')">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

                <div>
                    {{ $albums->links() }}
                </div>

            </div>
        </div>
    </div>

    <x-notification />
</x-admin.app>
