<x-admin.app title="Gallery | Album | Create">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Add new Album</h1>

        <form method="POST" action="{{ route('admin.albums.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6" x-data="{ title:'{{ old('title') }}' }">
                        <x-form.group label="Title" for="title">
                            <x-form.input x-model="title" type="text" id="title" name="title" value="{{ old('title') }}" />
                            <x-form.error name="title" />
                        </x-form.group>

                        <x-form.group label="Slug" for="slug">
                            <x-form.input x-slug="title" type="text" id="slug" name="slug" value="{{ old('slug') }}" />
                            <x-form.error name="slug" />
                        </x-form.group>

                        <x-form.group label="Description" for="description">
                            <x-form.ckeditor name="description">{{ old('description') }}</x-form.ckeditor>
                            <x-form.error name="description" />
                        </x-form.group>

                        <x-form.group label="Thumbnail" for="thumbnail">
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="@error('thumbnail') border-red-600 @enderror">
                            <x-form.error name="thumbnail" />
                        </x-form.group>

                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">

                    <x-button.secondary link="{{ route('admin.albums.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Create</x-button.primary>
                </div>
            </div>
        </form>
    </div>

    <x-notification />

</x-admin.app>
