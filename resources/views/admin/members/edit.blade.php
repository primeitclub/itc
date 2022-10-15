<x-admin.app title="Members | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Member</h1>

        <form method="POST" action="{{ route('admin.members.update',$member) }}" enctype="multipart/form-data">
            @csrf

            @method('PATCH')

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">

                        <x-form.group label="Name" for="name">
                            <x-form.input type="text" id="name" name="name" value="{{ $member->name }}"  placeholder="John Doe"/>
                            <x-form.error name="name" />
                        </x-form.group>

                        <x-form.group label="Image" for="image">
                            <input type="file" id="image" name="image" accept="image/*" class="@error('image') border-red-600 @enderror">
                            <x-form.error name="image" />
                        </x-form.group>

                        <div class="flex justify-between">
                            <x-form.group label="Batch" for="batch">
                                <x-form.input type="date" id="batch" name="batch" value="{{ $member->batch }}" />
                                <x-form.error name="batch" />
                            </x-form.group>

                            <x-form.group label="Member Type" for="type">
                                <select name="type" id="type" class="@error('type') border-red-600 @enderror w-64 p-2 border border-gray-300 rounded form-input">
                                    <option value="" selected disabled>Member Type</option>
                                    @foreach($member->typeOptions() as $typeOptionKey => $typeOptionValue )
                                    <option value="{{ $typeOptionKey }}" {{ $member->type == $typeOptionKey ? 'selected' : '' }}>{{ $typeOptionValue }}</option>
                                    @endforeach
                                </select>
                                <x-form.error name="type" />
                            </x-form.group>

                            <x-form.group label="Designation" for="designation">
                                <x-form.input type="text" id="designation" name="designation" value="{{ $member->designation }}"  placeholder="President"/>
                                <x-form.error name="designation" />
                            </x-form.group>

                        </div>

                        <x-form.group label="Email" for="email">
                            <x-form.input type="email" id="email" name="email" value="{{ $member->email }}" placeholder="johndoe@email.com" />
                            <x-form.error name="email" />
                        </x-form.group>

                        <x-form.group label="Facebook" for="facebook">
                            <x-form.input-link type="text" id="facebook" name="facebook" value="{{ $member->facebook }}" placeholder="www.facebook.com/username" />
                            <x-form.error name="facebook" />
                        </x-form.group>

                        <x-form.group label="Linkedin" for="linkedin">
                            <x-form.input-link type="text" id="linkedin" name="linkedin" value="{{ $member->linkedin }}" placeholder="www.linkedin.com/in/username" />
                            <x-form.error name="linkedin" />
                        </x-form.group>

                        <x-form.group label="Github" for="github">
                            <x-form.input-link type="text" id="github" name="github" value="{{ $member->linkedin }}" placeholder="www.github.com/in/username" />
                            <x-form.error name="github" />
                        </x-form.group>

                        <x-form.group label="Instagram" for="instagram">
                            <x-form.input-link type="text" id="instagram" name="instagram" value="{{ $member->linkedin }}" placeholder="www.instagram.com/in/username" />
                            <x-form.error name="instagram" />
                        </x-form.group>

                        <x-form.group label="Testimonial" for="testimonial">
                            <x-form.ckeditor name="testimonial">{{ $member->testimonial }}</x-form.ckeditor>
                            <x-form.error name="testimonial" />
                        </x-form.group>
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.members.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Update</x-button.primary>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
