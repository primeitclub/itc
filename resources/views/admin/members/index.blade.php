<x-admin.app title="Members">
    <div class="mt-8 space-y-6">
        <div class="flex justify-between ">
            <h1 class="text-xl font-bold text-gray-900 uppercase">All Members</h1>

            <x-button.link link="{{ route('admin.members.create') }}"> Add new Member </x-button.link>
        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto space-y-4">
                @if(!$members->count())
                <div class="w-full bg-red-500 p-4 text-white">No records found!</div>
                @else

                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 ">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Type</th>
                            <th class="px-4 py-3">Designation</th>
                            <th class="px-4 py-3">Batch</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y ">
                        @foreach($members as $member)
                        <tr class="text-gray-700 ">
                            <td class="px-4 py-3">
                                <p class="font-semibold text-md">{{ $member->name }}</p>
                            </td>

                            <td class="px-4 font-bold py-3 text-xs text-gray-600">
                                {{ $member->email }}
                            </td>

                            <td class="px-4 py-3 text-sm uppercase">
                                {{ $member->type }}
                            </td>

                            <td class="px-4 py-3 text-xs uppercase font-semibold ">
                                @if($member->designation)
                                    {{ $member->designation }}
                                @else
                                    -
                                @endif
                            </td>

                            <td class="px-4 py-3 text-sm font-bold">
                                {{ $member->memberBatch() }}
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm space-x-4">
                                    <a href="{{ route('admin.members.edit',$member->id) }}" class="flex items-center justify-between px-2 py-2 text-sm font-medium text-green-500 rounded-lg leading-5 focus:outline-none focus:shadow-outline-gray" aria-label="Edit"> <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a>

                                    <form action="{{ route('admin.members.destroy',$member->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="flex items-center justify-between px-2 py-2 text-sm font-medium text-red-500 rounded-lg leading-5  focus:outline-none focus:shadow-outline-gray" aria-label="Delete" onclick="return confirm('Are you sure ?')">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $members->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <x-notification />
</x-admin.app>
