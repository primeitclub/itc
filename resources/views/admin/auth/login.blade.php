<x-admin.auth title="Login">
    <div>
        <form action="{{ route('admin.login')}} " method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                    Email
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input name="email" type="email" class="@error('email') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{old('email')}}" required autofocus />
                </div>
                @error('email') <div class="mt-1 text-sm text-red-500">{{ $message }}</div> @enderror
            </div>

            <div class="mt-6">
                <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                    Password
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input name="password" type="password" class="@error('password') border-red-500 @enderror appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required />
                </div>
                @error('password') <div class="mt-1 text-sm text-red-500">{{ $message }}</div> @enderror
            </div>

            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                        Log In
                    </button>
                </span>
            </div>
        </form>
    </div>
</x-admin.auth>
