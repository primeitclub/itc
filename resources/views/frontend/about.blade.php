<x-frontend.app title="About Us">
    <!-- Wave Section -->
    <x-frontend.wave>
        <div class="mt-4">
            <h1 class="font-bold text-white text-5xl lg:text-8xl">About Us</h1>
        </div>
    </x-frontend.wave>

    <section class="max-w-7xl flex flex-col md:flex-row justify-center items-center mx-auto px-8 sm:px-6">
        <div class="w-full md:w-1/2 md:mr-16">
            <h1 class="font-semibold text-2xl sm:text-4xl mt-2 text-center md:text-left">
                Who are <span class="text-primary">We?</span>
            </h1>
            <p class="font-dm-sans mt-6 text-base leading-8 sm:text-xl text-greish">
            <p class="font-dm-sans lg:max-w-lg mt-6 text-base  sm:text-xl text-greish">
                <span class="text-primary text-xl">Prime IT Club</span> is one of the student-run clubs at Prime College.
                It is run by a group of creative and tech-savvy students.
                With our goal in mind, we organize a series of sessions, seminars, training programs and competitions.
                Since our founding in 2004, we have been and still are looking for opportunities to help students in any way possible and all we have set out is to strive to guide students in the right direction.
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-6 rounded-md overflow-hidden">
            <img src="{{ asset('club-images/club-bonding-v1.jpg') }}" class="w-full" />
        </div>
    </section>

    <section class="pt-10 max-w-7xl flex flex-col md:flex-row-reverse justify-center items-center mx-auto px-8 sm:px-6">
        <div class="w-full md:w-1/2 md:ml-16">
            <h1 class="font-semibold text-2xl sm:text-4xl mt-2 text-center md:text-left">
                Our <span class="text-primary">Objective</span>
            </h1>
            <p class="font-dm-sans mt-6 text-base leading-8 sm:text-xl text-greish">
                The main objective of our club is to develop the IT skills amongst the students demanded in the current market.
                For this, we organize different workshops, seminars, and training programs.
                Some of our recent events/sessions include IT fundamentals, Cisco Networking, Cryptocurrency, Graphics designing, Programming, and Web designing.
            </p>
        </div>
        <div class="w-full md:w-1/2 mt-6 rounded-md overflow-hidden">
            <img src="{{ asset('club-images/club-bonding-v2.jpg') }}" class="w-full" />
        </div>
    </section>

    <!-- Motto Section -->
    <article class="mt-12 md:mt-24 mx-auto max-w-7xl px-8 sm:px-6">
        <div class="relative mt-10 font-dm-sans py-4 sm:py-8">
            <img src="{{ asset('assets/quote-icon.png') }}" class="absolute w-12 h-8 lg:w-28 lg:h-20">
            <h1 class="mt-12 text-xl lg:text-6xl font-medium text-center text-greish">We bridge the gap between <br/> Academia & Industry</h1>
        </div>
    </article>

    <!-- Department Details Section -->
    <section class="mt-10 md:mt-24 max-w-7xl mx-auto px-8 sm:px-6">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Departments</h1>
        <p class="text-center text-sm sm:text-xl text-greish">Learn about our 5 departments</p>
        <!-- Department Tabs -->
        <div x-data="{ currentTab : 'event' }">
            <div class="mt-10 hidden sm:block">
                <ul class="flex flex-row space-x-6 mx-auto justify-center items-center divide-x-2 divide-solid divide-gray-300">
                    <li><button x-on:click="currentTab = 'event'" :class="currentTab == 'event' ? 'text-primary' : 'text-greish'" class="px-6 text-base font-semibold hover:text-primary">Event Management</button></li>
                    <li><button x-on:click="currentTab = 'er'"  :class="currentTab == 'er' ? 'text-primary' : 'text-greish'" class="px-6 text-base font-semibold hover:text-primary">External Relationship</button></li>
                    <li><button x-on:click="currentTab = 'finance'"  :class="currentTab == 'finance' ? 'text-primary' : 'text-greish'" class="px-6 text-base font-semibold hover:text-primary">Finance</button></li>
                    <li><button x-on:click="currentTab = 'hr'"  :class="currentTab == 'hr' ? 'text-primary' : 'text-greish'" class="px-6 text-base font-semibold hover:text-primary">Human Resources</button></li>
                    <li><button x-on:click="currentTab = 'marketing'"  :class="currentTab == 'marketing' ? 'text-primary' : 'text-greish'" class="px-6 text-base font-semibold hover:text-primary">Marketing</button></li>
                </ul>
            </div>
            <div class="mt-10 sm:hidden">
                <ul class="flex flex-row mx-auto justify-center items-center divide-x-2 divide-solid divide-gray-300">
                    <li><button x-on:click="currentTab = 'event'" :class="currentTab == 'event' ? 'text-primary' : 'text-greish'" class="px-4 text-xs font-semibold hover:text-primary">Events</button></li>
                    <li><button x-on:click="currentTab = 'er'"  :class="currentTab == 'er' ? 'text-primary' : 'text-greish'" class="px-4 text-xs font-semibold hover:text-primary">ER</button></li>
                    <li><button x-on:click="currentTab = 'finance'"  :class="currentTab == 'finance' ? 'text-primary' : 'text-greish'" class="px-4 text-xs font-semibold hover:text-primary">Finance</button></li>
                    <li><button x-on:click="currentTab = 'hr'"  :class="currentTab == 'hr' ? 'text-primary' : 'text-greish'" class="px-4 text-xs font-semibold hover:text-primary">HR</button></li>
                    <li><button x-on:click="currentTab = 'marketing'"  :class="currentTab == 'marketing' ? 'text-primary' : 'text-greish'" class="px-4 text-xs font-semibold hover:text-primary">Marketing</button></li>
                </ul>
            </div>
            <!-- Department Details -->
            <article x-data="{ readMore : false }" x-show="currentTab == 'event'" x-cloak class="mt-10 w-full px-8 sm:px-6 rounded-3xl bg-white border-b-8 border-b-primary">
                <div class="mt-10 px-2 pt-6">
                    <h1 class="mt-6 text-3xl font-semibold text-primary">Event Management</h1>
                    <p class="text-sm sm:text-xl text-gray-500">Manages club's events</p>
                </div>
                <div class="px-2 py-6 flex space-x-6 justify-between">
                    <p class="text-greish font-dm-sans text-sm sm:text-xl sm:w-2/4 tracking-normal leading-7 line-clamp-10 md:line-clamp-none" :class="readMore ? 'line-clamp-none' : ''">
                        Prime IT Club's Event Management Department is in charge of an event's overall coordination, planning, design, promotion, and profitability.
                        It takes the initiative and proposes event ideas and manages the entire event, assigns tasks, speaker and organises the technological requirements.
                        <br/>
                        <br/>
                        Additionally, they obtain participant feedback and use it to improve subsequent events.
                        In order to establish the annual event budgets and discuss cost feasibility prior to starting events, they also collaborate with the Finance and Accounts Department.
                    </p>
                    <div class="hidden sm:block w-2/4">
                        <img src="{{ asset('departments/events.svg') }}" class="h-80 w-full" />
                    </div>
                </div>
                <div class="mb-4 md:hidden">
                    <p x-on:click="readMore = true " x-show="!readMore" class="text-center text-gray-500 text-base">Read More</p>
                    <p x-on:click="readMore = false " x-show="readMore" class="text-center text-gray-500 text-base">Read Less</p>
                </div>
            </article>

            <article  x-data="{ readMore : false }" x-show="currentTab == 'er'" x-cloak class="mt-10 w-full px-8 sm:px-6 rounded-3xl bg-white border-b-8 border-b-primary">
                <div class="mt-10 px-6 pt-6">
                    <h1 class="mt-6 text-3xl font-semibold text-primary">External Relationship</h1>
                    <p class="text-base text-gray-500">Manages club's public relationship</p>
                </div>
                <div class="px-6 py-6 flex space-x-6 justify-between">
                    <p class="text-greish font-dm-sans text-lg sm:w-2/4 tracking-normal leading-7 line-clamp-10 md:line-clamp-none" :class="readMore ? 'line-clamp-none' : ''">
                        Prime IT Club’s Public Relations Department is in charge of establishing and upholding ties with other clubs and companies.
                        To avoid any potential conflicts between exam and event dates, it meets with faculty members in order to negotiate scheduling and logistics.
                        <br/>
                        <br/>
                        It plans CSR activities and sessions for Prime Global School (+2).
                        To promote the club's activities, it collaborates closely with CSC and the club advisor.
                        It also aids in connecting clubs with possible sponsors for major annual events.
                    </p>
                    <div class="hidden sm:block w-2/4">
                        <img src="{{ asset('departments/er.svg') }}" class="h-80 w-full" />
                    </div>
                </div>
                <div class="mb-4 md:hidden">
                    <p x-on:click="readMore = true " x-show="!readMore" class="text-center text-gray-500 text-base">Read More</p>
                    <p x-on:click="readMore = false " x-show="readMore" class="text-center text-gray-500 text-base">Read Less</p>
                </div>
            </article>

            <article  x-data="{ readMore : false }" x-show="currentTab == 'finance'" x-cloak class="mt-10 w-full px-8 sm:px-6 rounded-3xl bg-white border-b-8 border-b-primary">
                <div class="mt-10 px-6 pt-6">
                    <h1 class="mt-6 text-3xl font-semibold text-primary">Finance</h1>
                    <p class="text-base text-gray-500">Manages club's finances</p>
                </div>
                <div class="px-6 py-6 flex space-x-6 justify-between">
                    <p class="text-greish font-dm-sans text-lg sm:w-2/4 tracking-normal leading-7 line-clamp-10 md:line-clamp-none" :class="readMore ? 'line-clamp-none' : ''">
                        Prime IT Club's Finance Department ensures that every transaction is transparent by keeping track of all transactions and financial happenings.
                        It takes care of financial needs and works with college administration.
                        It collaborates with the Event Management department to create the annual event budgets and assess whether events will be financially feasible.
                        <br/>
                        <br/>
                        It plans fundraising events in collaboration with other clubs, and other departments.
                        All the steps taken to handle changes in the organization's assets, liabilities, and other items' values are documented and presented to the board at the end of each fiscal year.
                        This department is in charge of creating memos for resources and logistics as well as managing inventory.
                    </p>
                    <div class="hidden sm:block w-2/4">
                        <img src="{{ asset('departments/finance.svg') }}" class="h-80 w-full" />
                    </div>
                </div>
                <div class="mb-4 md:hidden">
                    <p x-on:click="readMore = true " x-show="!readMore" class="text-center text-gray-500 text-base">Read More</p>
                    <p x-on:click="readMore = false " x-show="readMore" class="text-center text-gray-500 text-base">Read Less</p>
                </div>
            </article>

            <article  x-data="{ readMore : false }" x-show="currentTab == 'hr'" x-cloak class="mt-10 w-full px-8 sm:px-6 rounded-3xl bg-white border-b-8 border-b-primary">
                <div class="mt-10 px-6 pt-6">
                    <h1 class="mt-6 text-3xl font-semibold text-primary">Human Resources</h1>
                    <p class="text-base text-gray-500">Manages human resources</p>
                </div>
                <div class="px-6 py-6 flex space-x-6 justify-between">
                    <p class="text-greish font-dm-sans text-lg sm:w-2/4 tracking-normal leading-7 line-clamp-10 md:line-clamp-none" :class="readMore ? 'line-clamp-none' : ''">
                        Prime IT Club's Human Resources department is in charge of overseeing the organization's recruitment, interviewing, and selection processes.
                        To optimize the talents of Club members, it coordinates and collaborates with them.
                        <br/>
                        <br/>
                        It serves as a liaison between the General Members and the Club's management staff and is in charge of organizing alumni get-togethers and team-bonding activities to improve bonds among club members.
                        Knowledge-sharing workshops are held as part of the club's efforts to promote learning.
                        Additionally, it is responsible for overseeing and constructively resolving internal issues.
                    </p>
                    <div class="hidden sm:block w-2/4">
                        <img src="{{ asset('departments/hr.svg') }}" class="h-80 w-full" />
                    </div>
                </div>
                <div class="mb-4 md:hidden">
                    <p x-on:click="readMore = true " x-show="!readMore" class="text-center text-gray-500 text-base">Read More</p>
                    <p x-on:click="readMore = false " x-show="readMore" class="text-center text-gray-500 text-base">Read Less</p>
                </div>
            </article>

            <article  x-data="{ readMore : false }" x-show="currentTab == 'marketing'" x-cloak class="mt-10 w-full px-8 sm:px-6 rounded-3xl bg-white border-b-8 border-b-primary">
                <div class="mt-10 px-6 pt-6">
                    <h1 class="mt-6 text-3xl font-semibold text-primary">Marketing</h1>
                    <p class="text-base text-gray-500">Manages club's marketing campaigns</p>
                </div>
                <div class="px-6 py-6 flex space-x-6 justify-between">
                    <p class="text-greish font-dm-sans text-lg sm:w-2/4 tracking-normal leading-7 line-clamp-10 md:line-clamp-none" :class="readMore ? 'line-clamp-none' : ''">
                        Prime IT Club's Marketing Department plans and executes marketing campaigns.
                        It manages all marketing initiatives for club-hosted events.
                        <br/>
                        <br/>
                        It also manages and controls all of the Club's social media accounts and coordinates the work of the general marketing and creative teams.
                        In addition, it performs data analysis to evaluate the success of their marketing campaigns and generate fresh ideas for boosting club marketing and exposure.
                    </p>
                    <div class="hidden sm:block w-2/4">
                        <img src="{{ asset('departments/marketing.svg') }}" class="h-80 w-full" />
                    </div>
                </div>
                <div class="mb-4 md:hidden">
                    <p x-on:click="readMore = true " x-show="!readMore" class="text-center text-gray-500 text-base">Read More</p>
                    <p x-on:click="readMore = false " x-show="readMore" class="text-center text-gray-500 text-base">Read Less</p>
                </div>
            </article>
        </div>

    </section>

    <!-- Why join us Section -->
    <section class="mt-12 md:mt-24 max-w-7xl mx-auto px-8 sm:px-6 ">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">Why join us ?</h1>
        <p class="text-center text-sm sm:text-xl text-greish">How this will benefit you</p>
        <div class="flex flex-col items-center lg:mt-16 lg:mb-24 lg:flex-row lg:divide-x-2 lg:divide-solid lg:divide-gray-200">
            <div class="lg:w-1/2">
                <h1 class="hidden text-left lg:block text-3xl font-semibold mr-8">The moment you take responsibility is the moment you gain the power to change.</h1>
            </div>
            <div>
                <p class="my-8 max-w-lg text-greish text-sm sm:text-base leading-6 font-normal lg:mt-0 lg:ml-20">
                    Working in a club, organization, company, or in a project is all about teamwork and coordination.
                    Being a part of Prime IT Club comes with a number of perks and you’ll be exposed to many opportunities.
                    Your participation in the club activities obliquely helps you widen your network with the club’s alumni and experts from different domains. In addition to that, the club also provides you with opportunities to learn and share different skills with the club members. skills with the club members.
                </p>
            </div>
        </div>
    </section>

    <!-- Team illustration -->
    <section class="mt-10 flex items-center justify-center w-full mx-auto">
        <img src="{{ asset('assets/faq-team.png') }}" class="h-auto w-auto max-w-full" >
    </section>

    <!-- FAQ Section -->
    <section class="mt-12 md:mt-24 mb-10 sm:mb-20 max-w-7xl mx-auto px-8 sm:px-6 ">
        <h1 class="text-center text-2xl sm:text-4xl text-primary font-bold">FAQ</h1>
        <p class="text-center text-sm sm:text-xl text-greish">Frequently asked questions</p>
        <dl class="mt-8 space-y-6 divide-y divide-gray-900/10">
            <div x-data="{isOpen:false}" class="pt-6">
                <dt>
                    <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                        <span class="text-sm sm:text-xl leading-7">What does Prime IT club do? </span>
                        <span class="ml-6 flex h-7 items-center">
                            <svg x-on:click="isOpen = true" x-show="!isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <svg x-on:click="isOpen = false" x-show="isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                        </span>
                    </button>
                </dt>
                <dd x-show="isOpen" class="mt-2 pr-12" id="faq-0">
                    <p class="text-xs sm:text-base leading-7 text-greish">
                        Prime IT Club is a student-run club working towards the goal of bridging the gap between academia and industry. Provide students with a thorough knowledge of the prospect of IT jobs in Nepal
                    </p>
                </dd>
            </div>

            <div x-data="{isOpen:false}" class="pt-6">
            <dt>
                <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                    <span class="text-sm sm:text-xl leading-7">How can I join the Prime It club? </span>
                    <span class="ml-6 flex h-7 items-center">
                        <svg x-on:click="isOpen = true" x-show="!isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                        <svg x-on:click="isOpen = false" x-show="isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                        </svg>
                    </span>
                </button>
            </dt>
            <dd x-show="isOpen" class="mt-2 pr-12" id="faq-0">
                <p class="text-xs sm:text-base leading-7 text-greish">
                    New general members will be recruited annually, once the club orientation has been officially organized. All the candidates for general membership should be interviewed and distributed among the internal departments after the selection.
                </p>
            </dd>
        </div>

            <div x-data="{isOpen:false}" class="pt-6">
                <dt>
                    <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                        <span class="text-sm sm:text-xl leading-7">How can I become an Executive member? </span>
                        <span class="ml-6 flex h-7 items-center">
                            <svg x-on:click="isOpen = true" x-show="!isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <svg x-on:click="isOpen = false" x-show="isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                        </span>
                    </button>
                </dt>
                <dd x-show="isOpen" class="mt-2 pr-12" id="faq-0">
                    <p class="text-xs sm:text-base leading-7 text-greish">
                        All of the general members who have more than 1 year of experience in the club are eligible to apply for executive membership.
                    </p>
                </dd>
            </div>

            <div x-data="{isOpen:false}" class="pt-6">
                <dt>
                    <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                        <span class="text-sm sm:text-xl leading-7">How many departments are there in the clubs? </span>
                        <span class="ml-6 flex h-7 items-center">
                            <svg x-on:click="isOpen = true" x-show="!isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            <svg x-on:click="isOpen = false" x-show="isOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                        </span>
                    </button>
                </dt>
                <dd x-show="isOpen" class="mt-2 pr-12" id="faq-0">
                    <p class="text-xs sm:text-base leading-7 text-greish">
                        There are 5 departments in the clubs. Marketing, Human Resources, Event Management, Finance and Account, and Public Relation.
                    </p>
                </dd>
            </div>
        </dl>
    </section>

</x-frontend.app>
