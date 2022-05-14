<x-admin.app title="Events | Create">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Add new Event</h1>

        <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6" x-data="{ title:'' }">
                        <x-form.group label="Title" for="title">
                            <x-form.input x-model="title" type="text" id="title" name="title" value="{{ old('title') ?? $event->title }}" />
                            <x-form.error name="title" />
                        </x-form.group>

                        <x-form.group label="Slug" for="slug">
                            <x-form.input x-slug="title" type="text" id="slug" name="slug" value="{{ old('slug') ?? $event->slug }}" />
                            <x-form.error name="slug" />
                        </x-form.group>

                        <x-form.group label="Event Category" for="event_category_id">
                            <select name="event_category_id" id="event_category_id" class="@error('event_category_id') border-red-600 @enderror w-full p-2 border border-gray-300 rounded form-input">
                                <option value="" selected disabled>Select Category</option>
                                @foreach($eventCategories as $eventCategory)
                                <option value="{{ $eventCategory->id }}" {{old('event_category_id' == $eventCategory->id ? 'selected':'')}}>{{ $eventCategory->title }}</option>
                                @endforeach
                            </select>
                            <x-form.error name="event_category_id" />
                        </x-form.group>

                        <x-form.group label="Description" for="description">
                            <x-form.ckeditor name="description">{{ old('description') ?? $event->description }}</x-form.ckeditor>
                            <x-form.error name="description" />
                        </x-form.group>

                        <x-form.group label="Thumbnail" for="thumbnail">
                            <input type="file" id="thumbnail" name="thumbnail" class="@error('thumbnail') border-red-600 @enderror">
                            <x-form.error name="thumbnail" />
                        </x-form.group>

                        <x-form.group label="Venue" for="venue">
                            <x-form.input type="text" id="venue" name="venue" value="{{ old('venue') ?? $event->venue }}" />
                            <x-form.error name="venue" />
                        </x-form.group>

                        <x-form.group label="Venue Address" for="venue_address">
                            <x-form.input type="text" id="venue_address" name="venue_address" value="{{ old('venue_address') ?? $event->venue_address}}" />
                            <x-form.error name="venue_address" />
                        </x-form.group>

                        <x-form.group label="Event Date" for="event_date">
                            <x-form.datepicker name="event_date" id="event_date" value="{{ old('event_date') ?? $event->event_date }}" />
                            <x-form.error name="event_date" />
                        </x-form.group>

                        <x-form.group label="Start at" for="event_time">
                            <x-form.timepicker name="event_time" id="event_time" value="{{ old('event_time') ?? $event->event_time }}" />
                            <x-form.error name="event_time" />
                        </x-form.group>

                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.events.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Create</x-button.primary>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
