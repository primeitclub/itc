<x-admin.layout>
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="w-auto h-10 mx-auto" src="{{ asset('logo/logo-dark.svg') }}" alt="Surge Logo" />
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                {{$slot}}
            </div>
        </div>
    </div>
</x-admin.layout>
