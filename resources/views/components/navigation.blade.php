<nav class=" bg-transparent fixed w-full h-20 lg:h-16 flex top-0 z-50 items-center sm:px-10 lg:px-4  text-white/80 "
    id="bgOnScroll">
    <div class="hidden lg:flex  w-full   items-center h-18 py-2">
        <div class="logo">
            <a href="#" class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="40" height="40">
                    <!-- Hexagon -->
                    <polygon points="50,10 85,30 85,70 50,90 15,70 15,30" fill="#4B0082" stroke="black"
                        stroke-width="2" />
                    <!-- Text "CA" in the center -->
                    <text x="50%" y="55%" font-size="40" fill="white" text-anchor="middle" font-family="DejaVu Sans"
                        font-weight="bold">CA</text>
                </svg>

                <h1 class="font-bold   textOnScroll">CodeAlchemy</h1>
            </a>
        </div>
        <!-- navigation group -->
        <div class="flex items-center space-x-8 ml-20">
            <!-- Hiring navigations -->
            <div class="relative group textOnScroll py-2">
                <button class="flex whitespace-nowrap items-center space-x-1 ">
                    <span class="font-sm ">Hiring For?</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10L12 15L17 10" stroke="gray" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <!-- Dropremown content -->
                <div
                    class="min-w-[24rem] absolute transition duration-500 ease-in-out group-hover:transform  opacity-0 translate-y-0  min-h-24 invisible group-hover:visible group-hover:translate-y-[44px] z-60  bg-white rounded-lg top-0 left-0 group-hover:opacity-100 shadow-lg border-t-[1px]">
                    <div class=" w-10 h-10 rotate-45 absolute ease-in-out bg-white z-0 left-6 border-[1px]">
                    </div>
                    <div class="relative w-full top-0 rounded-lg bg-white min-h-24 py-4 space-y-4">
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/startups.svg')}}" alt="start up">
                            <div>
                                <p class="text-black font-bold">Startups</p>
                                <p class="text-[#333] text-xs">Where scales starts.</p>
                            </div>
                        </a>
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/enterprise.svg')}}" alt="Enterprise">
                            <div>
                                <p class="text-black font-bold">Enterprise</p>
                                <p class="text-[#333] text-xs">Agile talent to innovate faster.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#"
                    class="hover:border-b-2 hover:border-blue-600 transition-colors duration-300 textOnScroll py-2">Customers</a>
            </div>
            <div>
                <a href="{{route('community-page')}}"
                    class="hover:border-b-2 hover:border-blue-600 transition-colors duration-300 textOnScroll py-2">Community</a>
            </div>
            <!-- About us navigations -->
            <div class="relative group textOnScroll py-2">
                <button class="flex whitespace-nowrap items-center space-x-1 ">
                    <span class="font-sm ">About Us</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10L12 15L17 10" stroke="gray" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <!-- Dropremown content -->
                <div
                    class="min-w-[24rem] absolute transition duration-500 ease-in-out group-hover:transform  opacity-0 translate-y-0  min-h-24 invisible group-hover:visible group-hover:translate-y-[44px] z-60  bg-white rounded-lg top-0 left-0 group-hover:opacity-100 shadow-lg border-t-[1px]">
                    <div class=" w-10 h-10 rotate-45 absolute ease-in-out bg-white z-0 left-6 border-[1px]">
                    </div>
                    <div class="relative w-full top-0 rounded-lg bg-white min-h-24 py-4 space-y-4">
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/news.svg')}}" alt="News">
                            <div>
                                <p class="text-black font-bold">Company News</p>
                                <p class="text-[#333] text-xs">Latest news and anouncement updates.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Resources navigations -->
            <div class="relative group textOnScroll py-2">
                <button class="flex whitespace-nowrap items-center space-x-1 ">
                    <span class="font-sm ">Resources</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10L12 15L17 10" stroke="gray" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <!-- Dropremown content -->
                <div
                    class="min-w-[24rem] absolute transition duration-500 ease-in-out group-hover:transform  opacity-0 translate-y-0  min-h-24 invisible group-hover:visible group-hover:translate-y-[44px] z-60  bg-white rounded-lg top-0 left-0 group-hover:opacity-100 shadow-lg border-t-[1px]">
                    <div class=" w-10 h-10 rotate-45 absolute ease-in-out bg-white z-0 left-6 border-[1px]">
                    </div>
                    <div class="relative w-full top-0 rounded-lg bg-white min-h-24 py-4 space-y-4">
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/ebook.svg')}}" alt="E-book">
                            <div>
                                <p class="text-black font-bold">Blog</p>
                                <p class="text-[#333] text-xs">Hub For In-depth Technical Insight & Stories </p>
                            </div>
                        </a>
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/research.svg')}}" alt="Guide">
                            <div>
                                <p class="text-black font-bold">Guides</p>
                                <p class="text-[#333] text-xs">Guides and Industry Reports.</p>
                            </div>
                        </a>
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/interview.svg')}}" alt="E-books">
                            <div>
                                <p class="text-black font-bold">Interview Questions</p>
                                <p class="text-[#333] text-xs">Software Engineering Interview Questions</p>
                            </div>
                        </a>
                        <a href="" class="inline-flex hover:bg-gray-100 w-full px-4 py-2 space-x-6">
                            <img src="{{asset('/images/faq.svg')}}" alt="E-books">
                            <div>
                                <p class="text-black font-bold">FQA</p>
                                <p class="text-[#333] text-xs">Frequently Asked Questions</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logins -->
        <div class="gap-6 items-center flex ml-auto  px-2 textOnScroll ">
            <a href="#"
                class="inline-block p-2  bg-green-600 text-white rounded w-full h-10 text-center whitespace-nowrap">Hire
                top
                Talent</a>
            <a href="#" class="inline-flex p-2  ring-1 ring-white/30 rounded whitespace-nowrap h-10 text-center ">Hire
                Apply as a Talent</a>
            <a href="#" class="font-bold transition-all duration-300" id="login">
                Login
            </a>
        </div>
    </div>


    <!-- Mobile Navigations -->
    <div class=" flex mx-4 sm:mx-0 justify-between w-full items-center lg:hidden">
        <div class="logo">
            <a href="#" class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="40" height="40">
                    <!-- Hexagon -->
                    <polygon points="50,10 85,30 85,70 50,90 15,70 15,30" fill="#4B0082" stroke="black"
                        stroke-width="2" />

                    <!-- Text "CA" in the center -->
                    <text x="50%" y="55%" font-size="40" fill="white" text-anchor="middle" font-family="DejaVu Sans"
                        font-weight="bold">CA</text>
                </svg>

                <h1 class="font-bold textOnScroll">CodeAlchemy</h1>
            </a>
        </div>
        <div class="">
            <button onclick="document.getElementById('menu').style.display='block';">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                    <path fill="#4B0082" d="M6 22H42V26H6zM6 10H42V14H6zM6 34H42V38H6z"></path>
                </svg>
            </button>
            <!-- menu content -->
            <div id="menu"
                class="absolute top-0 min-w-[100%] transition-all min-h-screen bg-white left-0 p-6 hidden duration-300 overflow-y-auto">
                <div class="w-[95%] shadow-lg h-[100%] ">
                    <!-- startup navigations -->
                    <div class="border-b space-y-2 px-4 w-full bg-blue py-4">
                        <div class=" flex justify-end ">
                            <a href="#"
                                class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300  w-full  block p-1 font-bold text-black/90">
                                Startups
                            </a>
                            <!-- close menu button-->
                            <button onclick="document.getElementById('menu').style.display='none';">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                    viewBox="0 0 50 50">
                                    <path
                                        d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Enterprise
                        </a>
                    </div>
                    <!-- Customers navigation -->
                    <div class="border-b space-y-4 px-4 w-full bg-blue py-4">
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Customers
                        </a>
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Community
                        </a>
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Company News
                        </a>
                    </div>
                    <div class="border-b space-y-4 px-4 w-full bg-blue py-4">
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Blog
                        </a>
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Guides
                        </a>
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            Interview Questions
                        </a>
                        <a href="#"
                            class="hover:rounded-sm hover:bg-black/10 transition-colors duration-300 w-full  block p-1 font-bold text-black/90">
                            FAQ
                        </a>
                    </div>
                    <!-- Logins -->
                    <div class="space-y-4 p-4  ">
                        <a href="#"
                            class="inline-block pt-3  bg-green-600 text-white rounded w-full h-12 text-center whitespace-nowrap ">Hire
                            top
                            Talent</a>
                        <a href="#"
                            class="hover:rounded-sm flex hover:bg-black/10 transition-colors duration-300 w-full  block p-2 font-bold text-black/70 ring-1 rounded w-full h-12 text-center items-center justify-center ring-black/20 ">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>