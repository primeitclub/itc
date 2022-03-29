<x-admin.app title="Users">
    <div class="mt-6 space-y-6">
        <div class="flex justify-between ">
            <h1 class="text-2xl font-semibold text-gray-900">Admin Users</h1>

            <span class="inline-flex rounded-md shadow-sm">
                <a href="{{ route('admin.users.create') }}" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent leading-5 rounded-md hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                    Add User
                </a>
            </span>
        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto space-y-4">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 ">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Role</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y ">
                        @foreach($users as $user)
                        <tr class="text-gray-700 ">
                            <td class="px-4 py-3">
                                <p class="font-semibold text-md">{{ $user->name }}</p>
                            </td>

                            <td class="px-4 py-3 text-sm">
                                {{ $user->email }}
                            </td>

                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full ">
                                    Admin
                                </span>
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm space-x-4">
                                    <a href="{{ route('admin.users.edit',$user->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-green-500 rounded-lg leading-5 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>

                                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium text-red-500 rounded-lg leading-5  focus:outline-none focus:shadow-outline-gray" aria-label="Delete" @click="event.preventDefault();document.getElementById('delete-{{$user->id}}').submit();">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>

                                    <form class="hidden" id="delete-{{$user->id}}" action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                        @csrf

                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-notification />
</x-admin.app>
