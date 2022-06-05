<x-admin.app title="User | Create">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Add new User</h1>

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">
                        <x-form.group label="Name" for="name">
                            <x-form.input type="text" id="name" name="name" value="{{ old('name') }}" />
                            <x-form.error name="name" />
                        </x-form.group>

                        <x-form.group label="Is Super" for="is_super">
                            <input type="hidden" name="is_super" value="0">
                            <input id="is_super" name="is_super" type="checkbox" value="1" class=" checked:bg-blue-500 rounded-md" />
                        </x-form.group>

                        <x-form.group label="Email" for="email">
                            <x-form.input type="text" id="email" name="email" value="{{ old('email') }}" />
                            <x-form.error name="email" />
                        </x-form.group>

                        <x-form.group label="Password" for="password">
                            <x-form.input type="password" id="password" name="password" value="{{ old('password') }}" />
                            <x-form.error name="password" />
                        </x-form.group>

                        <x-form.group label="Confirm Password" for="password_confirmation">
                            <x-form.input type="password" id="password_confirmation" name="password_confirmation" />
                            <x-form.error name="password_confirmation" />
                        </x-form.group>
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">
                    <x-button.secondary link="{{ route('admin.users.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Create</x-button.primary>
                </div>

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
