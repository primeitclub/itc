<div class="md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-blue-900 border-r border-blue-200">
        <div class="flex flex-col flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <a href="{{ route('admin.home') }}">
                    <img class="w-auto h-7" src="{{ asset('logo/logo-light.svg') }}" alt="Surge Logo">
                </a>
            </div>
            <div class="pt-4">
                <hr class="border-gray-200" />
            </div>
            <nav class="flex-1 px-2 mt-2 bg-blue-900 space-y-2">
                <div class="px-6 pt-4">
                    <ul class="flex flex-col space-y-2">
                        <li class="relative text-gray-200 hover:text-white focus-within:text-white">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V17.25C19.25 18.3546 18.3546 19.25 17.25 19.25H6.75C5.64543 19.25 4.75 18.3546 4.75 17.25V6.75Z">
                                    </path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 8.75V19"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8.25H19"></path>
                                </svg>
                            </div>
                            <a href="{{ route('admin.home') }}" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Dashboard</a>
                        </li>

                        <li class="relative text-gray-200 hover:text-white focus-within:text-white">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="{{ route('admin.users.index') }}" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Admin
                                Users</a>
                        </li>

                        <!-- Alumni Testimonials -->
                        <li x-data="{ open:false }">
                            <div class="relative flex justify-between text-gray-200 hover:text-white focus-within:text-white" @click="open=!open">
                                <div class="flex items-center w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                        </svg>
                                    </div>

                                    <a href="#" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Testimonials</a>
                                </div>

                                <button class="absolute right-0 flex items-center p-1" tabindex="-1">
                                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="pt-2 pl-4">
                                <ul class="flex flex-col pl-2 text-gray-200 border-l border-gray-300 space-y-2" x-show="open" x-cloak @click.outside="open = false">
                                    <li>
                                        <a href="{{ route('admin.alumni-testimonials.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">All
                                            Testimonials</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.alumni-testimonials.create') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Add
                                            Testimonial</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Blogs -->
                        <li x-data="{ open:false }">
                            <div class="relative flex justify-between text-gray-200 hover:text-white focus-within:text-white" @click="open=!open">
                                <div class="flex items-center w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 12H15M9 16H15M17 21H7C5.89543 21 5 20.1046 5 19V5C5 3.89543 5.89543 3 7 3H12.5858C12.851 3 13.1054 3.10536 13.2929 3.29289L18.7071 8.70711C18.8946 8.89464 19 9.149 19 9.41421V19C19 20.1046 18.1046 21 17 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <a href="#" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Blogs</a>
                                </div>

                                <button class="absolute right-0 flex items-center p-1" tabindex="-1">
                                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="pt-2 pl-4">
                                <ul class="flex flex-col pl-2 text-gray-200 border-l border-gray-300 space-y-2" x-show="open" x-cloak @click.outside="open = false">
                                    <li>
                                        <a href="{{ route('admin.blog-categories.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Categories</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.blogs.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">All
                                            Blogs</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.blogs.create') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Add
                                            Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Events -->
                        <li x-data="{ open:false }">
                            <div class="relative flex justify-between text-gray-200 hover:text-white focus-within:text-white" @click="open=!open">
                                <div class="flex items-center w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 7V3M16 7V3M7 11H17M5 21H19C20.1046 21 21 20.1046 21 19V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V19C3 20.1046 3.89543 21 5 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <a href="#" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Events</a>
                                </div>
                                <button class="absolute right-0 flex items-center p-1" tabindex="-1">
                                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="pt-2 pl-4">
                                <ul class="flex flex-col pl-2 text-gray-200 border-l border-gray-300 space-y-2" x-show="open" x-cloak @click.outside="open = false">
                                    <li>
                                        <a href="{{ route('admin.event-categories.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.events.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">All
                                            Events</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.events.create') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Add
                                            Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.speakers.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Speakers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Members -->
                        <li x-data="{ open:false }">
                            <div class="relative flex justify-between text-gray-200 hover:text-white focus-within:text-white" @click="open=!open">
                                <div class="flex items-center w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                        <svg class="w-5 h-5 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 4.35418C12.7329 3.52375 13.8053 3 15 3C17.2091 3 19 4.79086 19 7C19 9.20914 17.2091 11 15 11C13.8053 11 12.7329 10.4762 12 9.64582M15 21H3V20C3 16.6863 5.68629 14 9 14C12.3137 14 15 16.6863 15 20V21ZM15 21H21V20C21 16.6863 18.3137 14 15 14C13.9071 14 12.8825 14.2922 12 14.8027M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <a href="#" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Members</a>
                                </div>
                                <button class="absolute right-0 flex items-center p-1" tabindex="-1">
                                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="pt-2 pl-4">
                                <ul class="flex flex-col pl-2 text-gray-200 border-l border-gray-300 space-y-2" x-show="open" x-cloak @click.outside="open = false">
                                    <li>
                                        <a href="{{ route('admin.members.index') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">All
                                            Members
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.members.create') }}" class="inline-block w-full px-4 py-2 text-sm rounded hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-blue-500 focus:text-white">Add
                                            Member
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <!-- Gallery -->
                        <li class="relative text-gray-200 hover:text-white focus-within:text-white">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <svg class="w-5 h-5 stroke-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 16L8.58579 11.4142C9.36683 10.6332 10.6332 10.6332 11.4142 11.4142L16 16M14 14L15.5858 12.4142C16.3668 11.6332 17.6332 11.6332 18.4142 12.4142L20 14M14 8H14.01M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="{{ route('admin.albums.index') }}" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Gallery</a>
                        </li>
                    </ul>
                </div>

                <!-- Profile -->
                <div class="px-6 pb-8">
                    <ul class="space-y-2">
                        <li class="relative text-gray-200 hover:text-white focus-within:text-white">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="{{ route('admin.profile') }}" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800">Profile</a>
                        </li>
                        <li class="relative text-gray-200 hover:text-white focus-within:text-white">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 16L21 12M21 12L17 8M21 12L7 12M13 16V17C13 18.6569 11.6569 20 10 20H6C4.34315 20 3 18.6569 3 17V7C3 5.34315 4.34315 4 6 4H10C11.6569 4 13 5.34315 13 7V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <a href="#" class="inline-block w-full py-2 pl-8 pr-4 text-sm rounded hover:bg-blue-800 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:bg-blue-800" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form method="POST" id="logout-form" action="{{ route('admin.logout') }}" class="hidden">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>
