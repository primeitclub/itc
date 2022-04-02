<x-admin.app title="User | Profile">
    <div class="mt-6 space-y-6">
        <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>

        <form method="POST" action="{{ route('admin.profile.update') }}">
            @csrf

            @method('PATCH')
            <div class="space-y-6">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 leading-5 sm:mt-px sm:pt-2">
                        Name
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="flex max-w-lg rounded-md shadow-sm">
                            <input id="username" name="name" type="text" class="@error('name') border-red-500 @enderror flex-1 block w-full form-input rounded-md transition duration-150 ease-in-out border border-gray-200 sm:text-sm sm:leading-5" value="{{ $user->name}}" />
                        </div>

                        @error('name') <div class="mt-1 text-sm text-red-500">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5 sm:mt-px sm:pt-2">
                        Email
                    </label>

                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="flex max-w-lg rounded-md shadow-sm">
                            <input id="email" name="email" type="email" class="@error('email') border-red-500 @enderror flex-1  block w-full form-input rounded-md transition duration-150 ease-in-out border border-gray-200 sm:text-sm sm:leading-5" value="{{ $user->email}}" />
                        </div>

                        @error('email') <div class="mt-1 text-sm text-red-500">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5 sm:mt-px sm:pt-2">
                        Password
                    </label>

                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="flex max-w-lg rounded-md shadow-sm">
                            <input id="password" name="password" type="password" class="@error('password') border-red-500 @enderror flex-1 block w-full form-input rounded-md transition duration-150 ease-in-out border border-gray-200 sm:text-sm sm:leading-5" />
                        </div>

                        @error('password') <div class="mt-1 text-sm text-red-500">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5 sm:mt-px sm:pt-2">
                        Confirm Password
                    </label>

                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="flex max-w-lg rounded-md shadow-sm">
                            <input id="password_confirmation" name="password_confirmation" type="password" class="@error('password_confirmation') border-red-500 @enderror flex-1 block w-full form-input rounded-md transition duration-150 ease-in-out border border-gray-200 sm:text-sm sm:leading-5" />
                        </div>

                        @error('password_confirmation') <div class="mt-1 text-sm text-red-500">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="pt-5 mt-8 border-t border-gray-200">
                    <div class="flex items-center justify-end space-x-3">
                        <span class="inline-flex rounded-md shadow-sm">
                            <a href="{{ route('admin.home') }}" class="px-4 py-2 text-sm font-medium text-gray-700 border border-gray-200 border-gray-300 rounded-md leading-5 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
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

            </div>
        </form>
    </div>
    <x-notification />

</x-admin.app>
