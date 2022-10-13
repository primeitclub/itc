<x-admin.app title="Blogs | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Blog</h1>

        <form method="POST" action="{{ route('admin.blogs.update',$blog) }}" enctype="multipart/form-data">
            @csrf

            @method('PATCH')

            <div class="flex space-x-4">
                <div class="flex-1">
                    <div class="w-full p-4 bg-white rounded-lg">
                        <div class="p-4 space-y-6" x-data="{ title:'{{ $blog->title }}' }">
                            <x-form.group label="Title" for="title">
                                <x-form.input x-model="title" type="text" id="title" name="title" value="{{ $blog->title }}" />
                                <x-form.error name="title" />
                            </x-form.group>

                            <x-form.group label="Slug" for="slug">
                                <x-form.input x-slug="title" type="text" id="slug" name="slug" value="{{ $blog->slug }}" />
                                <x-form.error name="slug" />
                            </x-form.group>


                            <x-form.group label="Excerpt" for="excerpt">
                                <x-form.ckeditor name="excerpt">{{ $blog->excerpt }}</x-form.ckeditor>
                                <x-form.error name="excerpt" />
                            </x-form.group>

                            <x-form.group label="Body" for="body">
                                <x-form.ckeditor name="body">{{ $blog->body }}</x-form.ckeditor>
                                <x-form.error name="body" />
                            </x-form.group>

                            <x-form.group label="Author's Name" for="author">
                                <x-form.input type="text" id="author" name="author" value="{{ $blog->author }}" />
                                <x-form.error name="author" />
                            </x-form.group>

                            <x-form.group label="Author's Facebook" for="author_facebook">
                                <x-form.input-link type="text" id="author_facebook" name="author_facebook" value="{{ $blog->author_facebook  }}" placeholder="www.facebook.com/username" />
                                <x-form.error name="author_facebook" />
                            </x-form.group>

                            <x-form.group label="Author's Linkedin" for="author_linkedin">
                                <x-form.input-link type="text" id="author_linkedin" name="author_linkedin" value="{{ $blog->author_linkedin }}" placeholder="www.linkedin.com/in/username" />
                                <x-form.error name="author_linkedin" />
                            </x-form.group>
                        </div>
                    </div>
                </div>

                <div class="space-y-6" >

                    <div class="w-full bg-white p-4 space-y-6 rounded-lg">
                        <x-form.group label="Blog Category" for="blog_category_id">
                            <select name="blog_category_id" id="blog_category_id" class="@error('blog_category_id') border-red-600 @enderror w-full p-2 border border-gray-300 rounded form-input">
                                <option value="" selected disabled>Select Category</option>
                                @foreach($blogCategories as $blogCategory)
                                <option value="{{ $blogCategory->id }}" {{ $blog->blogCategory->id === $blogCategory->id ? 'selected' : '' }}> {{ $blogCategory->title }}</option>
                                @endforeach
                            </select>
                            <x-form.error name="blog_category_id" />
                        </x-form.group>

                        <x-form.group label="Published At" for="published_at">
                            <x-form.datepicker name="published_at" id="published_at" value="{{ $blog->published_at }}" />
                            <x-form.error name="published_at" />
                        </x-form.group>

                        <x-form.group label="Thumbnail" for="thumbnail">
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/*"  class="@error('thumbnail') border-red-600 @enderror">
                            <x-form.error name="thumbnail" />
                        </x-form.group>

                        <div class="flex items-center justify-end space-x-3">
                            <x-button.secondary link="{{ route('admin.blogs.index') }}">Cancel</x-button.secondary>

                            <x-button.primary type="submit">Update</x-button.primary>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
