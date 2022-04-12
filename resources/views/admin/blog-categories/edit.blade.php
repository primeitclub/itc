<x-admin.app title="Blog | Categories | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Category</h1>

        <form method="POST" action="{{ route('admin.blog-categories.update',$blogCategory) }}">
            @csrf

            @method('PATCH')

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">
                        <div class="space-y-2">
                            <label for="title" class="block font-bold text-gray-700 text-md">Category Title</label>
                            <input type="text" id="title" name="title" class="@error('title') border-red-600 @enderror w-full p-2 border border-gray-300 rounded form-input" value="{{ old('title') ?? $blogCategory->title }}">
                            @error('title') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="slug" class="block font-bold text-gray-700 text-md">Slug</label>
                            <input type="text" id="slug" name="slug" class="@error('slug') border-red-600 @enderror w-full p-2 border border-gray-300 rounded form-input" value="{{ old('slug') ?? $blogCategory->slug }}">
                            @error('slug') <div class="mt-1 text-sm text-red-600">{{ $message }}</div> @enderror
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ route('admin.blog-categories.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 border border-gray-200 border-gray-300 rounded-md leading-5 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                            Cancel
                        </a>
                    </span>

                    <span class="inline-flex rounded-md shadow-sm">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out border border-gray-200">
                            Update
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <x-notification />

</x-admin.app>
