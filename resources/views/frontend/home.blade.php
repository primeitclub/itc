<x-frontend.app title="Home">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="">
            <span class="font-dm-sans font-normal text-white text-2xl text-center lg:text-5xl ">PRIME</span>
            <h1 class="font-bold text-white text-5xl lg:text-9xl">IT CLUB</h1>
            <p class="text-2xl font-normal text-white">"Processing Future"</p>
        </div>
    </x-frontend.wave>

    <!-- Club's intro Section -->
    <section class="max-w-7xl flex flex-col-reverse md:flex-row items-center mx-auto px-4 sm:px-6">
        <!-- left -->
        <div class="mt-10 md:w-1/2">
            <span class="font-semibold text-base text-primary"> We're a dynamic team of </span>
            <h1 class="font-semibold text-3xl sm:text-5xl mt-2">
                Innovative,<span class="text-primary"> Tech</span>
                <br/>
                Enthusiastic People
            </h1>
            <div class="about_border"></div>
            <p class="font-dm-sans mt-6 text-base sm:text-xl text-greish">
                Prime IT club is a student-managed club at Prime led by creative and tech enthusiastic students. 
                <br/>
                <br/>
                Established in 2004, the club organizes different workshops, seminars, training programs, etc.
            </p>

            <button class="button mt-7 py-3 px-6 rounded-3xl">
                <div class="flex justify-between items-center space-x-2">
                    <a class="text-white font-medium" href="">Learn more</a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-center text-gray-900 border-primary bg-white rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </button>
        </div>
        <!-- robot -->
        <div class="mt-4 md:mt-10 -z-10">
            <lottie-player class="robot w-[60%] mx-auto" src="https://assets2.lottiefiles.com/packages/lf20_6e0qqtpa.json" background="transparent" speed="1.1" loop autoplay>
            </lottie-player>
        </div>
    </section>

    <!-- Featured Events Section -->
    <section class="mt-10 max-w-7xl mx-auto px-4 sm:px-6">
        <h1 class="text-center text-4xl text-primary font-bold">Featured Events</h1>
        <p class="text-center text-xl text-greish">Check out our workshops and sessions</p>
        <article class="mt-8" >
            <div class="py-6 lg:flex lg:flex-row-reverse">
                <div class="flex-1 md:ml-4">
                    <img src="{{ asset('club-images/club-bonding-v1.jpg') }}" alt="Blog Post thumbnail" class="rounded-sm" />
                </div>

                <div class="flex-1 flex flex-col justify-between max-w-lg">
                    <header class="mt-8 lg:mt-0">
                        <span class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold">Session</span>

                        <div class="mt-4">
                            <h1 class="text-3xl font-semibold text-primary">
                                Basics to Blockchain : How it works
                            </h1>

                            <span class="mt-2 block text-greish text-2xl font-semibold">
                                Facilitator : Some Speaker 
                            </span>
                        </div>
                    </header>

                    <div class="text-base mt-2 text-greish max-w-lg">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p class="mt-4">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <div class="flex flex-col space-y-2 mt-4">
                        <div class="flex space-x-4 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            <span class="font-medium text-greish">Seminar Hall, 3rd Floor</span>
                        </div>

                        <div class="flex space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                            <div class="flex flex-col">
                                <span class="font-medium text-medium text-greish">Sept-25, 2022</span>
                                <span class="text-xs text-greish">10:00 AM - 9:00PM</span>
                            </div>
                        </div>

                        <div class="flex space-x-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-greish">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>
                            <span class="font-medium text-medium text-greish">Rs. 250</span>
                        </div>

                    </div>

                    <footer class="mt-4 flex justify-between">
                        <button class="button mt-7 py-3 px-8 rounded-3xl">
                            <a href="#" class="" >Register Now</a >
                        </button>

                        <button class="outlined-button">
                            <a href="#" class="" >Read More</a >
                        </button>
                    </footer>
                </div>
            </div>
        </article>
    </section>

    <!-- view more -->
    <div class="mx-auto max-w-xs mt-10">
        <div class="flex items-center justify-center cursor-pointer">
            <a class="flex space-x-4 text-greish items-center font-medium hover:text-gray-800" href="{{ route('events') }}">view more
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Featured Blog Section -->
    <section class="mt-10 max-w-7xl mx-auto px-4 sm:px-6">
        <h1 class="text-center text-4xl text-primary font-bold">Featured Blogs</h1>
        <p class="text-center text-xl text-greish">Browse some interesting reads</p>
        <article class="" >
            <div class="grid sm:grid-cols-2 gap-8">
                <div>
                    <div class="hidden lg:block pt-10">
                        <div class="relative py-6 px-5">
                            <div class="relative h-96 w-full border-4 rounded-r-2xl border-primary">
                                <div class="absolute mt-4 mr-6 top-4 -left-10 ">
                                    <img src="{{ asset('club-images/club-bonding-v1.jpg') }}" alt="Blog's thumbnail" class="rounded-r-2xl rounded-b-2xl" />
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="mx-auto mt-10">
                    <header class="mt-4">
                        <h1 class="text-3xl font-semibold text-primary">
                            Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.
                        </h1>

                        <span class="block text-sm text-gray-400 mt-2">
                            Published <time>1 day ago</time>
                        </span>
                    </header>

                    <div class="mt-4 text-base text-greish">
                        <p class="">
                            Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi Lorem pariatur mollit ex esse exercitation amet.
                        </p

                        <p class="mt-4">
                            Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis.
                        </p>
                    </div>

                    <footer class="mt-8 mb-8 flex items-center justify-between">
                        <button class="outlined-button">
                            <a href="" class="">Read More</a>
                        </button>
                    </footer>
                </div>
            </div>
        </article>
    </section>

    <!-- view more -->
    <div class="mx-auto max-w-xs mt-10">
        <div class="flex items-center justify-center cursor-pointer">
            <a class="flex space-x-4 text-greish items-center font-medium hover:text-gray-800" href="{{ route('blogs.index') }}">view more
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Meet our team Section -->
    <section class="mt-10 max-w-7xl mx-auto px-4 sm:px-6">
        <h1 class="text-center text-4xl text-primary font-bold">Meet Our Team</h1>
        <p class="text-center text-xl text-greish">Get to know our team members</p>
        <div class="swiper teamSwiper">
            <div class="swiper-wrapper mt-10 flex space-x-4" >

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>

                <article class="swiper-slide w-64 mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <div class="mt-4 font-dm-sans text-base">
                        <p class="text-center">Hello this is basanta</p>
                    </div>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>
                    </footer>
                </article>
            </div>
            <div class="teams-swiper-pagination mt-10 items-center flex justify-center"></div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="mt-24 mb-24 max-w-7xl mx-auto px-4 sm:px-6 ">
        <h1 class="text-center text-4xl text-primary font-bold">Testimonial</h1>
        <p class="text-center text-xl text-greish">Hear what our members have to say</p>
        <div class="swiper testimonialSwiper">
            <div class="swiper-wrapper flex space-x-6 ">

                <article class="swiper-slide relative mt-10 lg:w-[50%] mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md -z-10">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <div class="mt-6 font-dm-sans text-base">
                        <img src="{{ asset('assets/quote-icon.png') }}" class="absolute w-11 h-8 top-36 lg:top-40 lg:w-28 lg:h-20">
                        <p class="text-left">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>

                    </footer>
                </article>

                <article class="swiper-slide relative mt-10 lg:w-[50%] mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md -z-10">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <div class="mt-6 font-dm-sans text-base">
                        <img src="{{ asset('assets/quote-icon.png') }}" class="absolute w-11 h-8 top-36 lg:top-40 lg:w-28 lg:h-20">
                        <p class="text-left">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>

                    </footer>
                </article>

                <article class="swiper-slide relative mt-10 lg:w-[50%] mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md -z-10">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <div class="mt-6 font-dm-sans text-base">
                        <img src="{{ asset('assets/quote-icon.png') }}" class="absolute w-11 h-8 top-36 lg:top-40 lg:w-28 lg:h-20">
                        <p class="text-left">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>

                    </footer>
                </article>

                <article class="swiper-slide relative mt-10 lg:w-[50%] mx-auto bg-white border-b-8 border-b-primary rounded-3xl px-8 py-6 shadow-sm hover:shadow-md -z-10">
                    <div class="mt-6 w-fit mx-auto">
                        <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary">
                    </div>

                    <div class="mt-6 font-dm-sans text-base">
                        <img src="{{ asset('assets/quote-icon.png') }}" class="absolute w-11 h-8 top-36 lg:top-40 lg:w-28 lg:h-20">
                        <p class="text-left">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    </div>

                    <header class="font-dm-sans">
                        <div class="mt-8">
                            <h2 class="text-primary font-semibold text-2xl text-center">Jonathan Smith</h2>
                            <p class="text-gray-600 text-base text-center">Event Officer</p>
                        </div>
                    </header>

                    <footer class="mt-4">
                        <!-- social links -->
                        <div class="flex w-32 mx-auto justify-around items-center">
                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z" fill="#123ABC"/>
                                </svg>
                            </a>

                            <a href="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z" fill="#123ABC"/>
                                </svg>
                            </a>
                        </div>

                    </footer>
                </article>
            </div>
            <div class="testimonial-swiper-pagination mt-10 items-center flex justify-center"></div>
        </div>
    </section>

    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
    @endpush

    @push('scripts')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script>
    const teamSwiper = new Swiper(".teamSwiper", {
        spaceBetween:25,
        grabCursor: true,
        centerSlide: true,
        pagination: {
            el: ".teams-swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },

    });

    const testimonialSwiper = new Swiper(".testimonialSwiper", {
        slidesPerView: 1,
        spaceBetween: 25,
        grabCursor: true,
        centeredSlides: true,
        pagination: {
            el: ".testimonial-swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },
    });
    </script>
    @endpush
</x-frontend.app>
