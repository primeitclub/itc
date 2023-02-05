<x-frontend.app title="About us">
    <!-- about us starts -->
    <!-- who are we and tesko image -->
    <div class="my-8 mb:mx-8 lg:mx-24">
        <section>
            <!-- Flex Container -->
            <div class="container mx-auto mt-10 flex flex-col items-center lg:flex-row">
                <!-- left item -->
                <div class="mb-25 flex flex-col space-y-10 lg:w-1/2">
                    <h1 class="poppins max-w-md text-left text-4xl font-bold lg:text-left lg:text-5xl">
                        Who are <span class="primary">we</span>?
                    </h1>
                    <p class="sans max-w-lg text-left leading-7 lg:mr-20">
                        <span class="primary font-medium">Prime IT Club</span>
                        <span class="gray">
                            one of the student-run clubs at Prime College. It is run by a group of creative and
                            tech-enthusiastic
                            students. With our objectives in mind, we organize a wide array of sessions, workshops,
                            training programs,
                            and competitions. Since our establishment in 2004, we’ve been and are still constantly on
                            the lookout for
                            opportunities to help students in any and every way possible. Everything we set out to do is
                            an effort to
                            point students on the right path for their future.</span>
                    </p>
                </div>
                <!-- Image -->
                <div class="sm:w-3/4 lg:w-1/2">
                    <img src="{{ asset('image/blog.jpg') }}" />
                </div>
            </div>

            <!-- Our objective and tesko image -->
            <!-- Flex Container -->
            <div class="space y-0 container mx-auto mt-10 flex flex-col-reverse items-center lg:flex-row lg:space-y-0">
                <!-- Image -->
                <div class="sm:w-3/4 lg:w-1/2">
                    <img src="{{ asset('image/blog.jpg') }}" />
                </div>
                <!-- right item -->
                <div class="mb-10 flex flex-col space-y-10 lg:ml-8 lg:pl-12">
                    <h1 class="poppins max-w-md text-left text-4xl font-bold lg:text-left lg:text-5xl">
                        Our <span class="primary">Objective</span>
                    </h1>
                    <p class="sans gray max-w-lg text-left leading-7">
                        The main objective of our club is to develop the IT skills amongst the students demanded in the
                        current
                        market. For this, we organize different workshops, seminars, and training programs. Some recent
                        events/sessions include IT fundamentals, Cisco Networking, Cryptocurrency, Graphics designing,
                        Programming,
                        and Web designing.
                    </p>
                </div>
            </div>
        </section>
        <!--End-->
        <!-- Tab section -->
        <section>
            <div class="poppins mt-20 mb-16 text-center">
                <span class="primary text-4xl font-semibold">Departments</span>
                <p class="home_text lg:text-l font-normal sm:text-sm">
                    Learn About Our 5 Departments
                </p>
            </div>
            <div
                class="mb-4 divide-x divide-gray-200 rounded-lg border-b border-gray-200  text-center text-sm font-medium text-gray-500 shadow dark:border-gray-700">
                <ul class="hidden divide-x divide-gray-200 rounded-lg text-center text-sm font-medium text-gray-500 shadow dark:divide-gray-700 dark:text-gray-400 sm:flex"
                    id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="active inline-block w-1/5 rounded-l-lg bg-gray-100 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                        role="presentation">
                        <button class="inline-block rounded-t-lg border-b-2 p-2" id="profile-tab"
                            data-tabs-target="#marketing" type="button" role="tab" aria-controls="marketing"
                            aria-selected="false">
                            Marketing
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg bg-gray-100 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                        role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="event-tab" data-tabs-target="#event" type="button" role="tab" aria-controls="event"
                            aria-selected="false">
                            Event Management
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg bg-gray-100 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                        role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="external-tab" data-tabs-target="#external" type="button" role="tab"
                            aria-controls="external" aria-selected="false">
                            External Relationship
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg bg-gray-100 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                        role="presentation">
                        <button
                            class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="human-tab" data-tabs-target="#human" type="button" role="tab" aria-controls="human"
                            aria-selected="false">
                            Human Resources
                        </button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block w-1/5 rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300"
                            id="finance-tab" data-tabs-target="#finance" type="button" role="tab"
                            aria-controls="finance" aria-selected="false">
                            Finance
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Marketing tabs content starts -->
            <div id="myTabContent" class="w-full">
                <div class="active inline-block hidden w-full rounded-l-lg bg-gray-100 p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                    id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                    <div id="marketing"
                        class="sans border border-b-36 border-b-primary mt-8 space-x-8 rounded-2xl  bg-white shadow-md hover:bg-gray-300">
                        <div class="flex flex-col-2">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Marketing</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club finances
                                </p>
                            </div>
                            <div>
                                <img class="sm:block md:hidden " src="/pages/images/social-media 1.svg"
                                    alt="" />
                            </div>
                        </div>
                        <div class="flex">
                            <p class="gray text-lg max-w-2xl py-8 pr-20 leading-7">
                                Kento ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                vel sodales ante. Morbi id rutrum felis. Ut mauris lorem,
                                fermentum eu metus ut, vehicula sollicitudin diam. Donec
                                sollicitudin pellentesque neque quis rhoncus. Donec sem lorem,
                                tristique in viverra eget, sagittis ac purus. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Cras vel sodales
                                ante. Morbi id rutrum felis. Ut mauris lorem, fermentum eu
                                metus ut, vehicula sollicitudin diam.
                            </p>
                            <div>
                                <img class="mb-16 pl-20 ml-64 sm:hidden md:block lg:block"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Marketing tabs content ends -->
                <!-- Event Management tabs content starts -->
                <div class="hiddeninline-block active w-full rounded-l-lg bg-gray-100 p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                    id="event" role="tabpanel" aria-labelledby="event-tab">
                    <div id="marketing"
                        class="sans border-b-20 border-b-primary  mt-8 space-x-8 rounded-2xl border bg-white shadow-md hover:bg-gray-300">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Event Management</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club finances
                                </p>
                            </div>
                            <div>
                                <img class="sm:block md:hidden " src="/pages/images/social-media 1.svg"
                                    alt="" />
                            </div>
                        </div>
                        <div class="flex">
                            <p class="gray text-lg max-w-2xl py-8 pr-20 leading-7">
                                Kento ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                vel sodales ante. Morbi id rutrum felis. Ut mauris lorem,
                                fermentum eu metus ut, vehicula sollicitudin diam. Donec
                                sollicitudin pellentesque neque quis rhoncus. Donec sem lorem,
                                tristique in viverra eget, sagittis ac purus. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Cras vel sodales
                                ante. Morbi id rutrum felis. Ut mauris lorem, fermentum eu
                                metus ut, vehicula sollicitudin diam.
                            </p>
                            <div>
                                <img class="mb-16 pl-20 ml-64 sm:hidden md:block lg:block"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event Management tabs content ends -->
                <!-- External Relationship tabs content starts -->
                <div class="active inline-block hidden w-full rounded-l-lg bg-gray-100 p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                    id="external" role="tabpanel" aria-labelledby="external-tab">
                    <div id="marketing"
                        class="sans border-b-20 border-b-primary  mt-8 space-x-8 rounded-2xl border bg-white shadow-md hover:bg-gray-300">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">External Relationship</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club finances
                                </p>
                            </div>
                            <div>
                                <img class="sm:block md:hidden " src="/pages/images/social-media 1.svg"
                                    alt="" />
                            </div>
                        </div>
                        <div class="flex">
                            <p class="gray text-lg max-w-2xl py-8 pr-20 leading-7">
                                Kento ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                vel sodales ante. Morbi id rutrum felis. Ut mauris lorem,
                                fermentum eu metus ut, vehicula sollicitudin diam. Donec
                                sollicitudin pellentesque neque quis rhoncus. Donec sem lorem,
                                tristique in viverra eget, sagittis ac purus. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Cras vel sodales
                                ante. Morbi id rutrum felis. Ut mauris lorem, fermentum eu
                                metus ut, vehicula sollicitudin diam.
                            </p>
                            <div>
                                <img class="mb-16 pl-20 ml-64 sm:hidden md:block lg:block"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- External relationship tabs content ends -->
                <!-- Human Resources tabs content starts -->
                <div class="active inline-block hidden w-full rounded-l-lg bg-gray-100 p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                    id="human" role="tabpanel" aria-labelledby="human-tab">
                    <div id="marketing"
                        class="sans border-b-20 border-b-primary mt-8 space-x-8 rounded-2xl border bg-white shadow-md hover:bg-gray-300">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Human Resourcese</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club finances
                                </p>
                            </div>
                            <div>
                                <img class="my-4 ml-12 h-12 w-12 sm:block md:hidden"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex">
                            <p class="gray text-lg max-w-2xl py-8 pr-20 leading-7">
                                Kento ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                vel sodales ante. Morbi id rutrum felis. Ut mauris lorem,
                                fermentum eu metus ut, vehicula sollicitudin diam. Donec
                                sollicitudin pellentesque neque quis rhoncus. Donec sem lorem,
                                tristique in viverra eget, sagittis ac purus. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Cras vel sodales
                                ante. Morbi id rutrum felis. Ut mauris lorem, fermentum eu
                                metus ut, vehicula sollicitudin diam.
                            </p>
                            <div>
                                <img class="mb-16 pl-20 ml-64 sm:hidden md:block lg:block"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Human Resources tabs content ends -->
                <!-- Finance tabs content starts -->
                <div class="active inline-block hidden w-full rounded-l-lg bg-gray-100 p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white"
                    id="finance" role="tabpanel" aria-labelledby="finance-tab">
                    <div id="finance"
                        class="sans border-b-20 border-b-primary  mt-8 space-x-8 rounded-2xl border bg-white shadow-md hover:bg-gray-300">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Finance</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club finances
                                </p>
                            </div>
                            <div>
                                <img class="my-4 ml-12 h-12 w-12 sm:block md:hidden"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                        <div class="flex">
                            <p class="gray text-lg max-w-2xl py-8 pr-20 leading-7">
                                Kento ipsum dolor sit amet, consectetur adipiscing elit. Cras
                                vel sodales ante. Morbi id rutrum felis. Ut mauris lorem,
                                fermentum eu metus ut, vehicula sollicitudin diam. Donec
                                sollicitudin pellentesque neque quis rhoncus. Donec sem lorem,
                                tristique in viverra eget, sagittis ac purus. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Cras vel sodales
                                ante. Morbi id rutrum felis. Ut mauris lorem, fermentum eu
                                metus ut, vehicula sollicitudin diam.
                            </p>
                            <div>
                                <img class="mb-16 pl-20 ml-64 sm:hidden md:block lg:block"
                                    src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- Finance tabs content ends -->
                </div>
            </div>
        </section>
        <!-- tabs ends -->

        <!-- why join us section -->
        <section>
            <div class="poppins pt-20 text-center">
                <span class="primary text-4xl font-semibold">Why join us?</span>
                <p class="sans lg:text-l font-normal sm:text-sm">
                    How this will benefit you
                </p>
            </div>
            <!-- Flex Container -->
            <div
                class="sans space y-0 container mx-auto flex flex-col items-center lg:mt-16 lg:mb-24 lg:flex-row lg:divide-x-2 lg:divide-solid lg:divide-gray-200">
                <!-- left item -->
                <div class="lg:w-1/2">
                    <p class="mr-8 hidden max-w-lg text-4xl font-bold sm:text-center sm:text-xl lg:block lg:text-left">
                        The moment you take responsibility is the moment you gain the
                        power to change.
                    </p>
                </div>
                <!-- Right item -->
                <div>
                    <p class="my-8 max-w-lg font-normal sm:text-sm lg:mt-0 lg:ml-20 lg:text-base">
                        Working in a club, organization, company, or in a project is all
                        about teamwork and coordination. Being a part of Prime IT Club
                        comes with a number of perks and you’ll be exposed to many
                        opportunities. Your participation in the club activities obliquely
                        helps you widen your network with the club’s alumni and experts
                        from different domains. In addition to that, the club also
                        provides you with opportunities to learn and share different
                        skills with the club members.
                    </p>
                </div>
            </div>
        </section>
        <!-- Image part -->
        <div class="container w-full ">
            <img src="{{asset('image/teamillustration1.png')}}" alt="" />
        </div>
        <!-- Image Part Ends -->

        <!-- FAQ starts -->
        <section class="pb-14">
            <div class="container mx-auto">
                <div class="mb:mt-8 lg:pt-16">
                    <div class="poppins text-center">
                        <span class="primary text-4xl font-semibold sm:pt-8">FAQ</span>
                        <p class="sans font-normal mb:mb-8 sm:text-sm lg:mb-16 lg:text-xl">
                            Frequently Asked Questions
                        </p>
                    </div>
                    <div class="poppins font-medium">
                        <div class="pb-2">
                            <p class="faq_header py-2 sm:text-sm lg:text-xl">
                                Why do I need a website?
                            </p>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content pb-3 lg:text-lg">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Dolorem aperiam omnis quos dolore eligendi ut inventore quia
                                    saepe facere earum.
                                </p>
                            </div>
                        </div>

                        <div class="pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                How long does it take to build a website
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Incidunt distinctio eveniet quam perspiciatis nesciunt,
                                    nihil esse consequatur fugit iusto? Blanditiis laudantium
                                    voluptatem vitae ea tenetur rem pariatur obcaecati velit
                                    iste?
                                </p>
                            </div>
                        </div>

                        <div class="pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                Why do we need website for our company
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ratione facere nemo dolorum iure sapiente pariatur nobis?
                                    Voluptates quos reprehenderit iusto at voluptate esse qui
                                    tempora harum, deserunt a doloremque sint.
                                </p>
                            </div>
                        </div>

                        <div class="pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                Is there a need for physical meeting before my project begins?
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ratione facere nemo dolorum iure sapiente pariatur nobis?
                                    Voluptates quos reprehenderit iusto at voluptate esse qui
                                    tempora harum, deserunt a doloremque sint.
                                </p>
                            </div>
                        </div>

                        <div class="ques pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                Do I need to buy domain or hosting for my website?
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ratione facere nemo dolorum iure sapiente pariatur nobis?
                                    Voluptates quos reprehenderit iusto at voluptate esse qui
                                    tempora harum, deserunt a doloremque sint.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- FAQ ends -->

</x-frontend.app>
