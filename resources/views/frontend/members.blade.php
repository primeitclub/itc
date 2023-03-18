<x-frontend.app title="Members">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">Members</h1>
        </div>
    </x-frontend.wave>

    <!-- Executive Members Section -->
    <section class="mt-24 mb-24 max-w-7xl text-center mx-auto px-4 sm:px-6 ">
        <h1 class="text-center text-4xl text-primary font-bold">Executive Members</h1>
        <p class="text-center text-xl text-greish">The backbone of the club</p>

        <!-- Select Year Dropdown -->
        <!-- <div x-data="{ show : false }" class="mt-4 flex items-center justify-center lg:justify-end"> -->
        <!--     <div class="relative inline-block text-left"> -->
        <!--         <div> -->
        <!--             <button x-on:click="show = !show" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:bg-gray-50 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true"> -->
        <!--                 <h3 class="text-center text-xl text-primary">Year</h3> -->
        <!--                 <svg class="my-auto h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"> -->
        <!--                     <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" /> -->
        <!--                 </svg> -->
        <!--             </button> -->
        <!--         </div> -->
        <!--         <div x-show="show" x-on:click.away="show = false" x-cloak class="absolute px-4 z-0 mt-2 origin-top-right rounded-md bg-white shadow-lg focus:outline-none"> -->
        <!--             <a href="" class="text-gray-700 block py-2 px-4 text-sm" >2022</a> -->
        <!--         </div> -->
        <!--     </div> -->
        <!-- </div> -->

        @foreach($executiveMembers->where('designation', 'President') as $president)
        <article class="w-full mx-auto px-8 py-6">
            <div class="mt-6 w-fit mx-auto">
                <img src="{{ $president->imageUrl() }}" class="rounded-full w-36 h-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary" />
            </div>

            <div class="mt-8 font-dm-sans">
                <h2 class="text-primary font-semibold text-2xl text-center">{{ $president->name }}</h2>
                <p class="text-gray-600 text-lg font-medium text-center">{{ $president->designation }}</p>
            </div>

            <footer class="mt-4">
                <div class="flex w-36 mx-auto justify-center space-x-4 items-center">
                    <a href="{{ $president->facebook }}">
                        <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300 h-7 w-7" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z"/>
                        </svg>
                    </a>

                    <a href="{{ $president->instagram }}">
                        <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z"/>
                        </svg>
                    </a>

                    <a href="{{ $president->linkedin }}">
                        <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300 h-7 w-7" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z"/>
                        </svg>
                    </a>
                </div>
            </footer>
        </article>
        @endforeach

        <div class="grid place-items-center grid-cols-2 sm:grid-cols-3 lg:grid-cols-4">
            @foreach($executiveMembers->where('designation', '!=', 'President') as $executiveMember)
            <article class="w-full mx-auto px-8 py-6">
                <div class="mt-6 w-fit mx-auto">
                    <img src="{{ $executiveMember->imageUrl() }}" class="rounded-full w-28 h-28 lg:h-36 lg:w-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary" />
                </div>

                <div class="mt-8 font-dm-sans">
                    <h2 class="text-primary font-semibold text-2xl text-center">{{ $executiveMember->name }}</h2>
                    <p class="text-gray-600 text-lg font-medium text-center">{{ $executiveMember->designation }}</p>
                </div>

                <footer class="mt-4">
                    <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                        <a href="{{ $executiveMember->facebook }}">
                            <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300 h-7 w-7" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z"/>
                            </svg>
                        </a>

                        <a href="{{ $executiveMember->instagram }}">
                            <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z"/>
                            </svg>
                        </a>

                        <a href="{{ $executiveMember->linkedin }}">
                            <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300 h-7 w-7" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z"/>
                            </svg>
                        </a>
                    </div>
                </footer>
            </article>
            @endforeach
        </div>
    </section>

    <!-- General Members Section -->
    <section class="mt-24 mb-24 max-w-7xl mx-auto px-4 sm:px-6 ">
        <h1 class="text-center text-4xl text-primary font-bold">General Members</h1>
        <p class="text-center text-xl text-greish">The workforce of the club</p>

        <div class="grid place-items-center grid-cols-2 sm:grid-cols-3 lg:grid-cols-4">
            @foreach($generalMembers as $generalMember)
            <article class="w-full mx-auto px-8 py-6">
                <div class="mt-6 w-fit mx-auto">
                    <img src="{{ $generalMember->imageUrl() }}" class="rounded-full w-28 h-28 lg:h-36 lg:w-36 border-4 border-primary outline outline-4 outline-offset-4 outline-secondary" />
                </div>

                <div class="mt-8 font-dm-sans">
                    <h2 class="text-primary font-semibold text-2xl text-center">{{ $generalMember->name }}</h2>
                    <p class="text-gray-600 text-lg font-medium text-center">{{ $executiveMember->designation }}</p>
                </div>

                <footer class="mt-4">
                    <div class="hidden sm:flex w-36 mx-auto justify-center space-x-4 items-center">
                        <a href="{{ $generalMember->facebook }}">
                            <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300 h-7 w-7" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.8333 13.5827C26.8333 6.17121 20.8608 0.166748 13.5 0.166748C6.13416 0.166748 0.166656 6.17121 0.166656 13.5827C0.166656 20.2772 5.04082 25.8281 11.4167 26.8334V17.4616H8.03082V13.5835H11.4167V10.6261C11.4167 7.26461 13.4042 5.40818 16.4508 5.40818C17.91 5.40818 19.4375 5.66979 19.4375 5.66979V8.97095H17.7533C16.1 8.97095 15.5833 10.0065 15.5833 11.0672V13.5827H19.2808L18.6867 17.4607H15.5833V26.8326C21.9542 25.8272 26.8333 20.2764 26.8333 13.5818V13.5827Z"/>
                            </svg>
                        </a>

                        <a href="{{ $generalMember->instagram }}">
                            <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300" width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.127 7.76149C29.5226 8.80932 29.7325 9.91786 29.7475 11.0375C29.83 12.4458 29.8304 12.9064 29.8333 16.4712L29.8334 16.5208C29.8334 20.1324 29.8141 20.5833 29.7504 22.0055C29.7282 23.1128 29.5194 24.2038 29.13 25.2387C28.7865 26.1223 28.2625 26.9248 27.5912 27.5949C26.9198 28.2651 26.116 28.7883 25.231 29.1312C24.1949 29.5194 23.1003 29.7289 21.9939 29.7506C20.5797 29.8334 20.1162 29.8334 16.5 29.8334C12.8839 29.8334 12.4322 29.8142 11.0062 29.7506C9.89758 29.7142 8.80334 29.4893 7.77057 29.0854C6.88513 28.7432 6.08091 28.2205 5.4093 27.5505C4.73769 26.8805 4.21345 26.078 3.87008 25.1943C3.48062 24.158 3.27183 23.067 3.24961 21.9611C3.16669 20.5478 3.16669 20.0866 3.16669 16.4764C3.16669 12.8663 3.18594 12.4154 3.24961 10.9917C3.27053 9.88754 3.48037 8.79506 3.87008 7.76149C4.21287 6.87752 4.73672 6.07471 5.40811 5.40444C6.0795 4.73417 6.88364 4.21119 7.76909 3.86897C8.8047 3.48085 9.89875 3.2709 11.0047 3.24806C12.4189 3.16675 12.8824 3.16675 16.4985 3.16675C20.1147 3.16675 20.5664 3.18449 21.9909 3.24806C23.0974 3.27074 24.1919 3.48069 25.228 3.86897C26.1133 4.21143 26.9173 4.73449 27.5887 5.40474C28.26 6.07498 28.784 6.87766 29.127 7.76149ZM9.64381 16.469C9.64381 20.2448 12.7076 23.3035 16.4897 23.3035C18.3053 23.3035 20.0466 22.5834 21.3304 21.3017C22.6142 20.02 23.3355 18.2817 23.3355 16.469C23.3355 14.6564 22.6142 12.9181 21.3304 11.6363C20.0466 10.3546 18.3053 9.63458 16.4897 9.63458C12.7076 9.63458 9.64381 12.6933 9.64381 16.469ZM22.9969 10.8545C23.1906 10.9346 23.3983 10.9756 23.608 10.9754C24.4891 10.9754 25.2028 10.2629 25.2028 9.38178C25.2028 9.17259 25.1616 8.96545 25.0814 8.77219C25.0012 8.57892 24.8836 8.40332 24.7355 8.2554C24.5873 8.10748 24.4114 7.99015 24.2178 7.9101C24.0243 7.83005 23.8168 7.78884 23.6072 7.78884C23.3977 7.78884 23.1902 7.83005 22.9966 7.9101C22.803 7.99015 22.6271 8.10748 22.479 8.2554C22.3308 8.40332 22.2133 8.57892 22.1331 8.77219C22.0529 8.96545 22.0116 9.17259 22.0116 9.38178C22.0114 9.59112 22.0526 9.79844 22.1328 9.99188C22.2129 10.1853 22.3305 10.3611 22.4788 10.5091C22.627 10.6571 22.8031 10.7745 22.9969 10.8545ZM20.9366 16.4691C20.9366 18.9209 18.9456 20.9086 16.4897 20.9086C14.0337 20.9086 12.0428 18.9209 12.0428 16.4691C12.0428 14.0172 14.0337 12.0295 16.4897 12.0295C18.9456 12.0295 20.9366 14.0172 20.9366 16.4691Z"/>
                            </svg>
                        </a>

                        <a href="{{ $generalMember->linkedin }}">
                            <svg class="fill-primary hover:fill-primary-light ease-in-out duration-300 h-7 w-7" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.8833 22.8926H18.9392V16.7034C18.9392 15.2276 18.9083 13.3309 16.8767 13.3309C14.82 13.3309 14.5067 14.9317 14.5067 16.5942V22.8918H10.5575V10.1659H14.3508V11.9017H14.4017C14.9317 10.8992 16.2208 9.84508 18.1442 9.84508C22.145 9.84508 22.8875 12.4792 22.8875 15.9042V22.8918L22.8833 22.8926ZM6.09582 8.42675C5.79439 8.42686 5.49589 8.3675 5.21743 8.25207C4.93897 8.13664 4.68602 7.9674 4.47306 7.75406C4.26011 7.54072 4.09133 7.28746 3.97641 7.00879C3.86148 6.73012 3.80267 6.43152 3.80332 6.13008C3.80382 5.67637 3.93883 5.233 4.19129 4.85602C4.44375 4.47904 4.80232 4.18538 5.22167 4.01217C5.64101 3.83896 6.1023 3.79399 6.5472 3.88293C6.99211 3.97186 7.40065 4.19072 7.72118 4.51184C8.04171 4.83295 8.25983 5.24189 8.34796 5.68695C8.43609 6.13202 8.39027 6.59322 8.2163 7.01225C8.04234 7.43128 7.74803 7.78932 7.37059 8.04109C6.99315 8.29287 6.54953 8.42708 6.09582 8.42675ZM8.07416 22.8926H4.11666V10.1667H8.07416V22.8926ZM24.8633 0.166748H2.13332C1.04749 0.166748 0.166656 1.02591 0.166656 2.08925V24.9117C0.166656 25.9751 1.04749 26.8342 2.13332 26.8342H24.8592C25.9433 26.8342 26.8333 25.9751 26.8333 24.9117V2.08925C26.8333 1.02591 25.9433 0.166748 24.8592 0.166748H24.8633Z"/>
                            </svg>
                        </a>
                    </div>
                </footer>
            </article>
            @endforeach
        </div>
    </section>

</x-frontend.app>
