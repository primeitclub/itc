<header class=" mx-auto nav_wraper">
    <div class="container mx-auto">
        <nav class="border-gray-200 py-2.5   rounded " id="navbar">
            <div class=" flex flex-wrap justify-between items-center ">
                <a href="#" class="flex items-center">
                    <img src="/blog-images/prime_logo.svg" class="mr-3 " alt="Flowbite Logo">
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 menu3">
                        <li class="poppins">
                            <a href="{{ route('home') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100  md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300">Home</a>
                        </li>
                        <li class="poppins">
                            <a href="{{ route('about') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 ">About
                                Us</a>
                        </li>
                        <li class="poppins">
                            <a href="{{ route('events') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 ">Events</a>
                        </li>
                        <li class="poppins">
                            <a href="{{ route('blogs') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 ">Blog</a>
                        </li>
                        <li class="poppins">
                            <a href="{{ route('member') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 ">Members</a>
                        </li>
                        <li class="poppins">
                            <a href="{{ route('merchandise') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 ">Merch</a>
                        </li>
                        <li class="poppins">
                            <a href="{{ route('gallery') }}"
                                class="block py-8 pr-4 text-base lg:mx-2 pl-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 ">Gallery</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- navbar ends -->

<!-- landing page -->

<section class="relative home_landing">
    <div class="w-full">
        <!--Waves Container-->
        <div class="mb:pt-52 lg:pt-100">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="1" fill="#0087EF" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="#EFF2FA" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

        <div class="container mx-auto w-full">
            <div class="">
                <div class="absolute mb:top-8 lg:top-20">
                    <div class="home_content">
                        <span class="home_text text-white mb:text-lg lg:text-5xl">PRIME</span>
                        <h1 class="title font-bold text-white mb:text-5xl sm:text-7xl lg:text-9xl">
                            IT CLUB
                        </h1>
                        <p class="home_text my-8 pt-4 font-normal tracking-loose text-white lg:text-3xl">
                            "Processing Our Future"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
window.addEventListener('scroll',()=>{
    var header = document.querySelector("navbar");
    header.classList.toggle("sticky top-0",window.scrollY > 0)
})
</script>
