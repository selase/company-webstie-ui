<style>
    .gradient-top-border {
        border-top-width: 2px;
        border-top-style: solid;
        border-image: linear-gradient(to right, #e0f7fa, #2196f3, #e0f7fa) 1;
    }
</style>

<x-app-layout>
    @include('pages.landing.hero')
    <section class=" min-h-[20vh] bg-blue-100/10 f">
        <div class="flex flex-col items-center py-10 justify-center space-y-8">


            <h1 class="text-xl text-center text-black/80 font-bold ">Trusted by Product and Engineering Leaders at</h1>
            <div
                class="items-center space-y-8 sm:space-y-0 font-bold sm:grid sm:grid-cols-2 md:grid-cols-3 sm:justify-center sm:items-center lg:flex-row  sm:w-full w-[80%] ml-auto mr-auto bg-red-800">
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>
                <div>
                    <img src="{{asset('images/volvo_dark.svg')}}" alt="volvo_dark">
                </div>

            </div>
        </div>
    </section>
    @include('pages.landing.talent')
    @include('pages.landing.team')
    <div
        class=" min-h-[30vh] bg-gradient-to-br	from-blue-700/20 via-blue-700/5 gradient-top-border flex items-center py-6">
        <div
            class="w-[80%] flex flex-col sm:flex-row items-center  space-y-6 py-6 sm:flex sm:justify-between  ml-auto mr-auto ">
            <div class="text-center space-y-2">
                <p class="font-bold text-4xl">10k+</p>
                <p class="text-[#333] text-xl font-bold">Community Members</p>
            </div>
            <div class="text-center space-y-2">
                <p class="font-bold text-4xl">98%</p>
                <p class="text-[#333] text-xl font-bold">Engagement Success Rate</p>
            </div>
            <div class="text-center space-y-2">
                <p class="font-bold text-4xl">13 days</p>
                <p class="text-[#333] text-xl font-bold">Average Matching Process</p>
            </div>
        </div>
    </div>
    <section
        class=" min-h-[80vh] bg-gradient-to-b from-[#070f26] via-[#071235 ] to-[#102257] flex flex-col justify-between items-center space-y-40">
        <div class="max-w-xl text-center pt-10 space-y-6">
            <p class="text-lg text-white/30">WORK.REIMAGINED</p>
            <h1 class="text-white text-4xl ">Professional Network of Endless Possibilities.</h1>
            <p class="text-white/30">Over the last decade, Adeva has been building and supporting over 35 local tech
                communities
                distributed across the worl.With over 98% success rate, Adeva is changing the way work works.</p>
        </div>
        <div>
            <img src="{{asset('images/professional_network.svg')}}" alt="professional network">
        </div>
    </section>
    @include('pages.landing.commnunity-talent')
    <section class="min-h-[60vh] bg-gray-100">
        <div class="px-4 space-y-8 py-24 lg:w-[80%] lg:mx-auto ">
            <div class="flex flex-col items-center pb-10 pt-10 space-y-4">
                <h1 class="text-[2.7rem] text-center ">Over 200 companies trust Adeva</h1>
                <p class="text-center text-xl">See how our customers are making the world a more beautiful place</p>
            </div>
            <div class="flex space-x-20">
                <div class="">
                    <div class=" lg:hidden relative">
                        <span class="absolute bottom-4 left-20  text-white font-bold text-2xl">Give Butter</span>
                        <img src="{{asset('images/GiveButter.jpeg')}}" alt="give-butter" class="rounded-lg w-52">
                    </div>
                    <div class="space-y-8">
                        <img src="{{asset('images/givebutter_original.svg')}}" alt="Give Butter">
                        <h1 class="text-2xl font-bold text-[#333]/90">How Givebutter Partnered with Adeva To Execute
                            Their
                            Product Roadmap
                        </h1>
                        <a href="#" class=" flex space-x-6">
                            <p class=" text-blue-500 text-lg ">Read full case study</p>
                            <svg width="30" height="30" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <line x1="10" y1="50" x2="70" y2="50" stroke="blue" stroke-width="4" />
                                <polygon points="70,30 90,50 70,70" fill="blue" />
                            </svg>
                        </a>
                        <div class="border-l-4 border-orange-400 pl-2 bg-gray-100 lg:bg-transparent space-y-1 py-1">
                            <p class="font-bold text-gray">Liran Cohen</p>
                            <p class="text-sm">Co-founder and CTO, Givebutter</p>
                        </div>
                        <div class="flex px-2 justify-between lg:w-[80%]">
                            <div class="space-y-1 ">
                                <span class="text-4xl font-bold">150%</span>
                                <p class="text-sm text-gray-500 ">Increase In Engineering Velocity</p>
                            </div>
                            <div class="space-y-1 ml-auto">
                                <span class="text-4xl font-bold ">3 Days</span>
                                <p class="text-sm text-gray-500 ">Time To Hire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block relative ">
                    <span class="absolute bottom-10 right-6 text-white font-bold text-2xl lg:text-4xl">Give
                        Butter</span>
                    <img src="{{asset('images/GiveButter.jpeg')}}" alt="give-butter"
                        class="rounded-lg h-[30vw] w-[40vw]">
                </div>
            </div>
        </div>
    </section>
    @include('pages.landing.profile')
    <section class="border-b border-black/50 h-[30vh]">
        hire
    </section>

</x-app-layout>