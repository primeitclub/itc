<x-admin.app title="Testimonial | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Testimonial</h1>

        <form method="POST" action="{{ route('admin.alumni-testimonials.update',$alumniTestimonial) }}" enctype="multipart/form-data">
            @csrf

            @method('PATCH')

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">

                        <x-form.group label="Name" for="name">
                            <x-form.input type="text" id="name" name="name" value="{{ $alumniTestimonial->name }}"  placeholder="John Doe"/>
                            <x-form.error name="name" />
                        </x-form.group>

                        <x-form.group label="Image" for="image">
                            <input type="file" id="image" name="image" accept="image/*" class="@error('image') border-red-600 @enderror">
                            <x-form.error name="image" />
                        </x-form.group>

                        <x-form.group label="Designation" for="designation">
                            <x-form.input type="text" id="designation" name="designation" value="{{ $alumniTestimonial->designation }}"  placeholder="President"/>
                            <x-form.error name="designation" />
                        </x-form.group>

                        <x-form.group label="Facebook" for="facebook">
                            <x-form.input-link type="text" id="facebook" name="facebook" value="{{ $alumniTestimonial->facebook }}" placeholder="www.facebook.com/username" />
                            <x-form.error name="facebook" />
                        </x-form.group>

                        <x-form.group label="Linkedin" for="linkedin">
                            <x-form.input-link type="text" id="linkedin" name="linkedin" value="{{ $alumniTestimonial->linkedin }}" placeholder="www.linkedin.com/in/username" />
                            <x-form.error name="linkedin" />
                        </x-form.group>

                        <x-form.group label="Instagram" for="instagram">
                            <x-form.input-link type="text" id="instagram" name="instagram" value="{{ $alumniTestimonial->linkedin }}" placeholder="www.instagram.com/in/username" />
                            <x-form.error name="instagram" />
                        </x-form.group>

                        <x-form.group label="Testimonial" for="testimonial">
                            <x-form.ckeditor name="testimonial">{{ $alumniTestimonial->testimonial }}</x-form.ckeditor>
                            <x-form.error name="testimonial" />
                        </x-form.group>
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.alumni-testimonials.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Update</x-button.primary>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
