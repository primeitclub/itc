<x-frontend.app title="Events">
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Events</h1>
        </div>
    </x-frontend.wave>

    <section class="pt-24 sm:py-20">
        <div class="container mx-auto">
            <div class="sm:mx-12 lg:mx-24">
                <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Featured Events</h1>
                <p class="text-center text-base sm:text-xl text-greish">Check out some of our workshops and sessions</p>

                <div class="pt-24 mb-44">
                    <div class="events gid-cols-1 p-4 grid gap-8 md:grid-cols-3">
                        @foreach ($events as $event)
                        <div class="rounded-xl w-[100%] bg-white  drop-shadow-xl">
                                <div class="p-2 img">
                                    <figure>
                                        <img class="w-[100%] h-96 rounded-t-xl"
                                        src="{{ asset('/thumbnails/'.$event->thumbnail) }}" alt="" />
                                    </figure>
                                </div>

                                <div class="p-7">
                                    <h3 class="text-primary poppins text-2xl font-semibold">
                                        {{ $event->title }}
                                    </h3>
                                    <div class="flex flex-col space-y-2 mt-4">
                                        <div class="flex space-x-4 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                            <span class="font-medium text-greish">{{$event->venue}}</span>
                                        </div>

                                        <div class="flex space-x-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                            </svg>
                                            <div class="flex flex-col">
                                                <span class="font-medium text-medium text-greish">{{$event->event_date}}</span>
                                                <span class="text-xs text-greish">{{$event->event_time}}</span>
                                            </div>
                                        </div>

                                        <div class="flex space-x-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                            </svg>
                                            <span class="font-medium text-medium text-greish">Rs. 250</span>
                                        </div>

                                    </div>
                                    <div class="text-greish h-14 overflow-hidden">
                                        <p class="py-2 text-base font-light leading-6">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eligendi,
                                            labore
                                            officia molestiae illum, recusandae inventore placeat est quae reprehenderit
                                            quod qui omnis doloribus voluptate! Quod esse nulla cumque minima officiis,
                                            sed
                                            velit soluta beatae labore expedita veniam suscipit necessitatibus
                                            accusantium
                                            voluptate quo impedit accusamus reprehenderit perspiciatis, sunt vel. Sunt
                                            ipsam
                                            quidem sequi harum non quia hic in aliquid velit architecto repellat fugiat
                                            corrupti nihil, aspernatur quibusdam doloremque praesentium at a. Voluptate
                                            accusamus nam, assumenda placeat repellendus reiciendis iste esse!
                                        </p>
                                    </div>
                                    <a href="{{'events/'.$event->slug}}">
                                        <button class="text-sm text-gray-500 pt-4 pb-4">
                                            Read more
                                        </button>
                                    </a>
                                    <hr class="py-2" />
                                    <button
                                        class=" w-full rounded-3xl px-20 py-2 text-xl text-white bg-primary hover:bg-blue-900">
                                        Register Now
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Past Events</h1>
                <p class="text-center text-base sm:text-xl text-greish">Our past workshops and sessions</p>

                <div class="container mx-auto w-full p-8 ">
                    <div class="flex p-12 items-center justify-center gap-4 ">
                        <h1 class="text-primary text-sm lg:text-3xl  font-bold">Year:</h1>
                        <div class="dropdown-menu">
                            <select>
                                <option value=""><button>2022</button></option>
                                <br />
                                <option value=""><button>2021</button></option>
                                <br />
                                <option value=""><button>2020</button></option>
                                <br />
                                <option value=""><button>2019</button></option>
                                <br />
                                <option value=""><button>2018</button></option>
                                <br />
                            </select>
                        </div>
                        <h1 class="text-primary text-sm lg:text-3xl  font-bold">Month:</h1>
                        <div class="dropdown-menu">
                            <select>
                                <option value=""><button>2022</button></option>
                                <br />
                                <option value=""><button>2021</button></option>
                                <br />
                                <option value=""><button>2020</button></option>
                                <br />
                                <option value=""><button>2019</button></option>
                                <br />
                                <option value=""><button>2018</button></option>
                                <br />
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="lg:block hidden ">
                        <div class="flex justify-center items-center">
                            <div class="w-[70%] h-48 bg-white shadow-xl  mb-8 md:mb-24 grid grid-cols-4 mb-8">
                                <div class="">
                                    <img src="{{ asset('/blog-images/voidlinux_1671793344.png') }}"
                                        class="rounded-l-2xl h-48 w-full">
                                </div>
                                <div class="flex flex-col col-span-2  justify-center p-6 ">
                                    <h1 class="text-greish poppins text-2xl font-bold pb-2">Blockchain is the
                                        future</h1>
                                    <div class="flex  items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                        </svg>
                                        <span class="font-medium text-lg text-greish pr-4">Free</span>
                                        <p class="py-0.5 px-6 text-white rounded-full text-sm bg-primary">Workshop</p>
                                    </div>
                                    <div class=" h-10  overflow-hidden  lg:col-span-3 ">
                                        <p class="text-black sm:text-sm  leading-6 tracker-widest mt-4">Lorem ipsum
                                            dolor sit amet consectetur adipisicing elit. Dolore temporibus vel,
                                            accusantium
                                            ut explicabo maiores soluta harum quisquam modi quod corrupti commodi ullam
                                            amet? Harum eaque iusto quis impedit similique vitae adipisci nemo
                                            eligendi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat,
                                            nobis?
                                        </p>
                                    </div>
                                    <a href="#">
                                        <button class="text-sm text-gray-500 pt-2 ">Learn more >></button>
                                    </a>
                                </div>
                                <div
                                    class="flex h-48 bg-primary justify-center items-center font-semibold text-white text-4xl text-center rounded-r-2xl">
                                    <p><b>15th</b><br><b>Jan</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="w-[65%] h-48 bg-white shadow-xl  mb-8 md:mb-24 grid grid-cols-4 mb-8">
                                <div class="">
                                    <img src="{{ asset('/blog-images/venom_1671793074.jpg') }}"
                                        class="rounded-l-2xl h-48 w-full">
                                </div>
                                <div class="flex flex-col col-span-2  justify-center p-6 ">
                                    <h1 class="text-greish poppins text-2xl font-bold pb-2">Blockchain is the
                                        future</h1>
                                    <div class="flex  items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                        </svg>
                                        <span class="font-medium text-lg text-greish pr-4">Free</span>
                                        <p class="py-0.5 px-6 text-white rounded-full text-sm bg-primary">Workshop</p>
                                    </div>
                                    <div class=" h-10  overflow-hidden  lg:col-span-3 ">
                                        <p class="text-black sm:text-sm  leading-6 tracker-widest mt-4">Lorem ipsum
                                            dolor sit amet consectetur adipisicing elit. Dolore temporibus vel,
                                            accusantium
                                            ut explicabo maiores soluta harum quisquam modi quod corrupti commodi ullam
                                            amet? Harum eaque iusto quis impedit similique vitae adipisci nemo
                                            eligendi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat,
                                            nobis?
                                        </p>
                                    </div>
                                    <a href="#">
                                        <button class="text-sm text-gray-500 pt-2 ">Learn more >></button>
                                    </a>
                                </div>
                                <div
                                    class="flex h-48 bg-primary justify-center items-center font-semibold text-white text-4xl text-center rounded-r-2xl">
                                    <p><b>15th</b><br><b>Jan</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center">
                            <div class="w-[65%] h-48 bg-white shadow-xl  mb-8 md:mb-24 grid grid-cols-4">
                                <div class="">
                                    <img src="{{ asset('/blog-images/voidlinux_1671793344.png') }}"
                                        class="rounded-l-2xl h-48 w-full">
                                </div>
                                <div class="flex flex-col col-span-2  justify-center p-6 ">
                                    <h1 class="text-greish poppins text-2xl font-bold pb-2">Blockchain is the
                                        future</h1>
                                    <div class="flex  items-center space-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                        </svg>
                                        <span class="font-medium text-lg text-greish pr-4">Free</span>
                                        <p class="py-0.5 px-6 text-white rounded-full text-sm bg-primary">Workshop</p>
                                    </div>
                                    <div class=" h-10  overflow-hidden  lg:col-span-3 ">
                                        <p class="text-black sm:text-sm  leading-6 tracker-widest mt-4">Lorem ipsum
                                            dolor sit amet consectetur adipisicing elit. Dolore temporibus vel,
                                            accusantium
                                            ut explicabo maiores soluta harum quisquam modi quod corrupti commodi ullam
                                            amet? Harum eaque iusto quis impedit similique vitae adipisci nemo
                                            eligendi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat,
                                            nobis?
                                        </p>
                                    </div>
                                    <a href="#">
                                        <button class="text-sm text-gray-500 pt-2 ">Learn more >></button>
                                    </a>
                                </div>
                                <div
                                    class="flex h-48 bg-primary justify-center items-center font-semibold text-white text-4xl text-center rounded-r-2xl">
                                    <p><b>15th</b><br><b>Jan</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:hidden block p-4">
                        <h1 class=" text-primary text-xl font-semibold p-6">15th Jan</h1>
                        <div class="w-full h-50 rounded-lg bg-white shadow-2xl mb-8">
                            <div class="flex flex-col justify-center p-8 md:p-8">
                                <h1 class="text-greish poppins text-2xl font-bold pb-4">Blockchain is the
                                    future</h1>
                                <div class="flex space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                    </svg>
                                    <span class="font-medium text-medium text-greish">Rs. 250</span>
                                    <p class="py-0.5 px-4 text-white rounded-full text-sm bg-primary">Workshop</p>
                                </div>
                                <div class=" h-24 md:h-auto  overflow-hidden  lg:col-span-3 custom:overflow-visible">
                                    <p class="text-black sm:text-sm  leading-6 tracker-widest mt-4 ">Lorem ipsum
                                        dolor sit amet consectetur adipisicing elit. Dolore temporibus vel, accusantium
                                        ut explicabo maiores soluta harum quisquam modi quod corrupti commodi ullam
                                        amet? Harum eaque iusto quis impedit similique vitae adipisci nemo eligendi?</p>
                                </div>
                                <a href="#">
                                    <button class="text-sm text-gray-500 pt-4 pb-4">Learn more >></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </section>
    <!-- Event section ends -->

</x-frontend.app>
