<x-admin.app title="Home">
    <div>
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>

        <div class="mt-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @can("super-admin")
                <div class="bg-white shadow-sm rounded-md flex items-center justify-between p-3 text-gray-700 font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-blue-50 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg class="w-8 h-8 stroke-current text-blue-500 transform transition-transform duration-500 ease-in-out" viewBox="0 0 24 24" fill="none" >
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ $admins }}</p>
                        <p class="text-gray-500">Admin Users</p>
                    </div>
                </div>
                @endcan

                <div class="bg-white shadow-sm rounded-md flex items-center justify-between p-3 text-gray-700 font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-blue-50 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg class="w-8 h-8 stroke-current text-blue-500 transform transition-transform duration-500 ease-in-out" viewBox="0 0 24 24" fill="none" >
                            <path d="M9 12H15M9 16H15M17 21H7C5.89543 21 5 20.1046 5 19V5C5 3.89543 5.89543 3 7 3H12.5858C12.851 3 13.1054 3.10536 13.2929 3.29289L18.7071 8.70711C18.8946 8.89464 19 9.149 19 9.41421V19C19 20.1046 18.1046 21 17 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ $blogs }}</p>
                        <p class="text-gray-500">Blog Posts</p>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded-md flex items-center justify-between p-3 text-gray-700 font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-blue-50 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg class="w-8 h-8 stroke-current text-blue-500 transform transition-transform duration-500 ease-in-out" viewBox="0 0 24 24" fill="none" >
                            <path d="M8 7V3M16 7V3M7 11H17M5 21H19C20.1046 21 21 20.1046 21 19V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V19C3 20.1046 3.89543 21 5 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ $events }}</p>
                        <p class="text-gray-500">Events</p>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded-md flex items-center justify-between p-3 text-gray-700 font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-blue-50 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg class="w-8 h-8 stroke-current text-blue-500 transform transition-transform duration-500 ease-in-out" viewBox="0 0 24 24" fill="none" >
                            <path d="M12 4.35418C12.7329 3.52375 13.8053 3 15 3C17.2091 3 19 4.79086 19 7C19 9.20914 17.2091 11 15 11C13.8053 11 12.7329 10.4762 12 9.64582M15 21H3V20C3 16.6863 5.68629 14 9 14C12.3137 14 15 16.6863 15 20V21ZM15 21H21V20C21 16.6863 18.3137 14 15 14C13.9071 14 12.8825 14.2922 12 14.8027M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ $members }}</p>
                        <p class="text-gray-500">Club Members</p>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded-md flex items-center justify-between p-3 text-gray-700 font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-blue-50 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg class="w-8 h-8 stroke-current text-blue-500 transform transition-transform duration-500 ease-in-out" viewBox="0 0 24 24" fill="none" >
                            <path d="M4 16L8.58579 11.4142C9.36683 10.6332 10.6332 10.6332 11.4142 11.4142L16 16M14 14L15.5858 12.4142C16.3668 11.6332 17.6332 11.6332 18.4142 12.4142L20 14M14 8H14.01M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ $albums }}</p>
                        <p class="text-gray-500">Albums</p>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded-md flex items-center justify-between p-3 text-gray-700 font-medium group">
                    <div class="flex justify-center items-center w-14 h-14 bg-blue-50 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg class="w-8 h-8 stroke-current text-blue-500 transform transition-transform duration-500 ease-in-out" viewBox="0 0 24 24" fill="none" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl">{{ $merchandise }}</p>
                        <p class="text-gray-500">Merchandise</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-admin.app>
