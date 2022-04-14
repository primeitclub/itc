<x-admin.app title="Blogs | Create">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Add new Blog</h1>

        <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">
                        <x-form.group label="Title" for="title">
                            <x-form.input type="text" id="title" name="title" value="{{ old('title') ?? $blog->title }}" />
                            <x-form.error name="title" />
                        </x-form.group>

                        <x-form.group label="Slug" for="slug">
                            <x-form.input type="text" id="slug" name="slug" value="{{ old('slug') ?? $blog->slug }}" />
                            <x-form.error name="slug" />
                        </x-form.group>

                        <x-form.group label="Excerpt" for="excerpt">
                            <x-form.textarea name="excerpt">{{ old('excerpt') ?? $blog->excerpt }}</x-form.textarea>
                            <x-form.error name="excerpt" />
                        </x-form.group>

                        <x-form.group label="Body" for="body">
                            <x-form.textarea name="body">{{ old('excerpt') ?? $blog->excerpt }}</x-form.textarea>
                            <x-form.error name="body" />
                        </x-form.group>

                        <x-form.group label="Thumbnail" for="thumbnail">
                            <input type="file" id="thumbnail" name="thumbnail" class="@error('thumbnail') border-red-600 @enderror">
                            <x-form.error name="thumbnail" />
                        </x-form.group>

                        <x-form.group label="Author" for="author">
                            <x-form.input type="text" id="author" name="author" value="{{ old('author') ?? $blog->author }}" />
                            <x-form.error name="author" />
                        </x-form.group>

                        <x-form.group label="Published At" for="published_at">
                            <x-form.input type="date" id="published_at" name="published_at" value="{{ old('published_at') ?? $blog->published_at }}" />
                            <x-form.error name="published_at" />
                        </x-form.group>

                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.blogs.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Create</x-button.primary>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
