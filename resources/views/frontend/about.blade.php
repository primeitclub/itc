<x-frontend.app title="About us">
    <!-- about us starts -->
    <!-- who are we and tesko image -->
    <div class="max-w-7xl my-8 mx-auto lg:mx-24">
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
                            Prime IT Club is one of the clubs formed by students at Prime College. 
                            It is managed by a group of tech-savvy and creative college students. 
                            We organise a range of conferences, workshops, training sessions, and contests with our aims in mind.
                            Since its establishment in 2004, it has looked for opportunities to help students in any manner we can, and we still do so today.
                            Its every action is an effort to nudge them in the right direction.
                        </span>
                    </p>

                </div>
                <!-- Image -->
                <div class="sm:w-3/4 lg:w-1/2">
                    <img src="{{ asset('club-images/club-bonding-v1.jpg') }}" />
                </div>
            </div>

            <!-- Our objective and tesko image -->
            <!-- Flex Container -->
            <div class="space y-0 container mx-auto mt-10 flex flex-col-reverse items-center lg:flex-row lg:space-y-0">
                <!-- Image -->
                <div class="sm:w-3/4 lg:w-1/2">
                    <img src="{{ asset('club-images/club-bonding-v2.jpg') }}" />
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
                <p class="mt-4 text-lg text-gray-700 font-normal">
                    Learn About Our 5 Departments
                </p>
            </div>

            <div class="mb-4 rounded-lg border-b border-gray-200  text-center text-sm font-medium text-gray-500 shadow dark:border-gray-700">
                <ul class="hidden rounded-lg text-center text-sm font-medium text-gray-500 shadow dark:divide-gray-700 dark:text-gray-400 sm:flex" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="active inline-block w-1/5 rounded-l-lg text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" role="presentation">
                        <button class="inline-block rounded-t-lg border-b-2 p-2" id="profile-tab" data-tabs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">
                            Marketing
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" role="presentation">
                        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="event-tab" data-tabs-target="#event" type="button" role="tab" aria-controls="event" aria-selected="false">
                            Event Management
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" role="presentation">
                        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="external-tab" data-tabs-target="#external" type="button" role="tab" aria-controls="external" aria-selected="false">
                            External Relationship
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" role="presentation">
                        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="human-tab" data-tabs-target="#human" type="button" role="tab" aria-controls="human" aria-selected="false">
                            Human Resources
                        </button>
                    </li>
                    <li class="active inline-block w-1/5 rounded-l-lg text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" role="presentation">
                        <button class="inline-block rounded-t-lg border-b-2 border-transparent p-2 hover:border-gray-300 hover:text-gray-600 dark:hover:text-gray-300" id="finance-tab" data-tabs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="false">
                            Finance
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Marketing tabs content starts -->
            <div id="myTabContent" class="w-full">
                <div class="active inline-block hidden w-full rounded-l-lg p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                    <div id="marketing" class="sans  border-b-8 border-b-primary mt-8 space-x-8 rounded-2xl  bg-white shadow-md ">
                        <div class="flex flex-col-2">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Marketing</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club marketing and contents
                                </p>
                            </div>

                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 mb-6 gap-24 overflow-hidden h-96">
                            <p class="gray text-lg leading-7 sm:pr-4">
                                Prime IT Club's Marketing Department plans and executes marketing campaigns.
                                It manages all marketing initiatives for club-hosted events.
                                It manages and controls all of the Club's social media accounts and coordinates the work of the general marketing and creative teams.
                                In addition, it performs data analysis to evaluate the success of their marketing campaigns and generate fresh ideas for boosting club marketing and exposure.

                            </p>
                            <div class="">
                                <img class="sm:block md:block hidden w-full h-80 " src="{{ asset('departments/Mobile_Marketing-pana.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Marketing tabs content ends -->
                <!-- Event Management tabs content starts -->
                <div class="hiddeninline-block active w-full rounded-l-lg p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" id="event" role="tabpanel" aria-labelledby="event-tab">
                    <div id="marketing" class="sans border-b-8 border-b-primary  mt-8 space-x-8 rounded-2xl  bg-white shadow-md ">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Event Management</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club events
                                </p>
                            </div>
                            <div>
                                <img class=" " src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 mb-6 gap-24 overflow-hidden h-96">
                            <p class="gray text-lg leading-7 sm:pr-4">
                            Prime IT Club's Event Management Department is in charge of an event's overall coordination, planning, design, promotion, and profitability.
                            It takes the initiative and proposes event ideas and manages the entire event, assigns tasks, speaker and organises the technological requirements.
                            Additionally, they obtain participant feedback and use it to improve subsequent events.
                            In order to establish the annual event budgets and discuss cost feasibility prior to starting events, they also collaborate with the Finance and Accounts Department.

                            </p>
                            <div class="">
                                <img class="sm:block md:block hidden w-full h-80 " src="{{ asset('departments/event_management.svg') }}" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Event Management tabs content ends -->
                <!-- External Relationship tabs content starts -->
                <div class="active inline-block hidden w-full rounded-l-lg p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" id="external" role="tabpanel" aria-labelledby="external-tab">
                    <div id="marketing" class="sans border-b-8 border-b-primary  mt-8 space-x-8 rounded-2xl  bg-white shadow-md ">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Public Relationship</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club's public relationships
                                </p>
                            </div>
                            <div>
                                <img class="sm:block md:hidden " src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 mb-6 gap-24 overflow-hidden h-96">
                            <p class="gray text-lg leading-7 sm:pr-4">
                                Prime IT Club’s Public Relations Department is in charge of establishing and upholding ties with other clubs and companies.
                                To avoid any potential conflicts between exam and event dates, it meets with faculty members in order to negotiate scheduling and logistics.
                                It plans CSR activities and sessions for Prime Global School (+2).
                                To promote the club's activities, it collaborates closely with CSC and the club advisor.
                                It also aids in connecting clubs with possible sponsors for major annual events.

                            </p>
                            <div class="">
                                <img class="sm:block md:block hidden w-full h-80 " src="{{ asset('departments/external_relationship.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- External relationship tabs content ends -->
                <!-- Human Resources tabs content starts -->
                <div class="active inline-block hidden w-full rounded-l-lg p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" id="human" role="tabpanel" aria-labelledby="human-tab">
                    <div id="marketing" class="sans border-b-8 border-b-primary mt-8 space-x-8 rounded-2xl  bg-white shadow-md ">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Human Resourcese</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages human resources in the club
                                </p>
                            </div>
                            <div>
                                <img class="my-4 ml-12 h-12 w-12 sm:block md:hidden" src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 mb-6 gap-24 overflow-hidden h-96">
                            <p class="gray text-lg leading-7 sm:pr-4">
                                Prime IT Club's Human Resources department is in charge of overseeing the organization's recruitment, interviewing, and selection processes.
                                To optimize the talents of Club members, it coordinates and collaborates with them.
                                It serves as a liaison between the General Members and the Club's management staff and is in charge of organizing alumni get-togethers and team-bonding activities to improve bonds among club members.
                                Knowledge-sharing workshops are held as part of the club's efforts to promote learning.
                                Additionally, it is responsible for overseeing and constructively resolving internal issues.

                            </p>
                            <div class="">
                                <img class="sm:block md:block hidden w-full h-80 " src="{{ asset('departments/HR.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Human Resources tabs content ends -->
                <!-- Finance tabs content starts -->
                <div class="active inline-block hidden w-full rounded-l-lg p-4 text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-gray-700 dark:text-white" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                    <div id="finance" class="sans border-b-8 border-b-primary mt-8 space-x-8 rounded-2xl bg-white shadow-md ">
                        <div class="flex">
                            <div class="py-8 pl-8 pr-20">
                                <span class="primary text-4xl font-semibold">Finance</span>
                                <p class="gray lg:text-l font-normal">
                                    Manages club finances
                                </p>
                            </div>
                            <div>
                                <img class="my-4 ml-12 h-12 w-12 sm:block md:hidden" src="/pages/images/social-media 1.svg" alt="" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 mb-6 gap-24 overflow-hidden h-96">
                            <p class="gray text-lg leading-7 sm:pr-4">
                                Prime IT Club's Finance Department ensures that every transaction is transparent by keeping track of all transactions and financial happenings.
                                It takes care of financial needs and works with college administration.
                                It collaborates with the Event Management department to create the annual event budgets and assess whether events will be financially feasible.
                                It plans fundraising events in collaboration with other clubs, and other departments.
                                All the steps taken to handle changes in the organization's assets, liabilities, and other items' values are documented and presented to the board at the end of each fiscal year.
                                This department is in charge of creating memos for resources and logistics as well as managing inventory.
                            </p>
                            <div class="">
                                <img class="sm:block md:block hidden w-full h-80 " src="{{ asset('departments/finance.svg') }}" alt="" />
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
                <p class="mt-4 text-lg text-gray-700 font-normal">
                    How this will benefit you
                </p>
            </div>
            <!-- Flex Container -->
            <div class="sans space y-0 container mx-auto flex flex-col items-center lg:mt-16 lg:mb-24 lg:flex-row lg:divide-x-2 lg:divide-solid lg:divide-gray-200">
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
        <div class="flex items-center justify-center w-full">
            <img src="{{ asset('image/teamillustration1.png') }}" alt="" class="w-auto h-auto max-w-full" />
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
                                What does Prime IT club do?
                            </p>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content pb-3 lg:text-lg">
                                    Prime IT Club is a student-run club working towards the goal of bridging the gap between academia and industry. Provide students with a thorough knowledge of the prospect of IT jobs in Nepal

                                </p>
                            </div>
                        </div>

                        <div class="pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                How can I join the Prime It club?
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    New general members will be recruited annually, once the club orientation has been officially organized. All the candidates for general membership should be interviewed and distributed among the internal departments after the selection.

                                </p>
                            </div>
                        </div>

                        <div class="pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                How can I become an Executive member?
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    All of the general members who have more than 1 year of experience in the club are eligible to apply for executive membership.

                                </p>
                            </div>
                        </div>

                        <div class="pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                How many departments are there in the clubs?
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    There are 5 departments in the clubs.
                                    Marketing, Human Resources, Event Management, Finance and Account, and Public Relation.
                                </p>
                            </div>
                        </div>

                        <div class="ques pb-2">
                            <h3 class="faq_header py-2 sm:text-sm lg:text-xl">
                                Why join us?
                            </h3>
                            <div class="faq_body w-full border border-b-black">
                                <p class="faq_content py-3 sm:text-sm lg:text-base">
                                    Working in a club, organization, company, or project is about teamwork and coordination. 
                                    Joining the Prime IT Club has several benefits.
                                    By participating in club activities, you can indirectly expand your network with club alumni and professionals in various fields.
                                    Additionally, the club provides opportunities to learn and exchange skills.
                                    Besides improving your teamwork and networking skills, this club also helps to boost your confidence.
                                    Prime it Club offers active learning opportunities providing members with a platform for personal and professional growth.
                                    It develops leadership qualities in students bridging the gap between academia and industry.
                                    It also provides students with in-depth knowledge of IT job prospects in Nepal.
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
