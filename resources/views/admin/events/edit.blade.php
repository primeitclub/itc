<x-admin.app title="Events | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Event</h1>

        <form method="POST" action="{{ route('admin.events.update',$event) }}" enctype="multipart/form-data">
            @csrf

            @method('PATCH')

            <div class="flex space-x-4">
                <div class="flex-1">
                    <div class="w-full p-4 bg-white rounded-lg">
                        <div class="p-4 space-y-6" x-data="{ title:'{{ $event->title }}' }">
                            <x-form.group label="Title" for="title">
                                <x-form.input x-model="title" type="text" id="title" name="title" value="{{ $event->title }}" />
                                <x-form.error name="title" />
                            </x-form.group>

                            <x-form.group label="Slug" for="slug">
                                <x-form.input x-slug="title" type="text" id="slug" name="slug" value="{{ $event->slug }}" />
                                <x-form.error name="slug" />
                            </x-form.group>

                            <x-form.group label="Event Category" for="event_category_id">
                                <select name="event_category_id" id="event_category_id" class="@error('event_category_id') border-red-600 @enderror w-full p-2 border border-gray-300 rounded form-input">
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach($eventCategories as $eventCategory)
                                    <option value="{{ $eventCategory->id }}" {{ $event->eventCategory->id == $eventCategory->id ? 'selected' : '' }}>{{ $eventCategory->title }}</option>
                                    @endforeach
                                </select>
                                <x-form.error name="event_category_id" />
                            </x-form.group>

                            <x-form.group label="Description" for="description">
                                <x-form.ckeditor name="description">{{ $event->description }}</x-form.ckeditor>
                                <x-form.error name="description" />
                            </x-form.group>

                            <x-form.group label="Registration link" for="registration_link">
                                <x-form.input-link type="text" id="registration_link" name="registration_link" value="{{ $event->registration_link }}" placeholder="docs.google.com/forms/googleformlink" />
                                <x-form.error name="registration_link" />
                            </x-form.group>

                            <x-form.group label="Venue" for="venue">
                                <x-form.input type="text" id="venue" name="venue" value="{{ $event->venue }}" />
                                <x-form.error name="venue" />
                            </x-form.group>

                            <x-form.group label="Venue Address" for="venue_address">
                                <x-form.input type="text" id="venue_address" name="venue_address" value="{{ $event->venue_address}}" />
                                <x-form.error name="venue_address" />
                            </x-form.group>

                        </div>
                    </div>
                </div>

                <div class="space-y-6" >
                    <div class="w-full bg-white p-4 space-y-6 rounded-lg">

                        <x-form.group label="Thumbnail" for="thumbnail">
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="@error('thumbnail') border-red-600 @enderror">
                            <x-form.error name="thumbnail" />
                        </x-form.group>

                        <x-form.group label="Event Date" for="event_date">
                            <x-form.datepicker name="event_date" id="event_date" value="{{ $event->event_date }}" />
                            <x-form.error name="event_date" />
                        </x-form.group>

                        <x-form.group label="Start at" for="event_time">
                            <x-form.timepicker name="event_time" id="event_time" value="{{ $event->event_time }}" />
                            <x-form.error name="event_time" />
                        </x-form.group>

                        <div class="flex items-center justify-end space-x-3">
                            <x-button.secondary link="{{ route('admin.events.index') }}">Cancel</x-button.secondary>

                            <x-button.primary type="submit">Update</x-button.primary>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
