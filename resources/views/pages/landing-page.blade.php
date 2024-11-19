<style>
    .gradient-top-border {
        border-top-width: 2px;
        border-top-style: solid;
        border-image: linear-gradient(to right, #e0f7fa, #2196f3, #e0f7fa) 1;
    }

    .gradient-bottom-border {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-image: linear-gradient(to right, #e0f7fa, #2196f3, #e0f7fa) 1;
    }

    .slide-in {
        /* Start the div off-screen in the top-left corner */
        transform: translate(-100%, -100%);
        animation: slideIn 1s ease-out forwards;
        opacity: 0;
        /* Start transparent */
    }

    @keyframes slideIn {
        from {
            transform: translate(-100%, -100%);
            /* Off-screen in the top-left corner */
            opacity: 0;
        }

        to {
            transform: translate(0, 0);
            /* Original position */
            opacity: 1;
        }
    }
</style>
@php
$talent_card_content = [
[
"image" => '<img src="' . asset('images/software_engineers.svg') . '" alt="software-engineer logo" />',
"h1" => "Software Engineers",
"p" => "Exceptional software engineers, coders, and architects with expertise across hundreds of technologies.",
'border-left' => ""
],
[
"image" => '<img src="' . asset('images/data_experts.svg') . '" alt="data_experts logo" />',
"h1" => "Data Experts",
"p" => "Data scientists, data engineers, and data analysts with expertise in building, maintaining, and scaling data infrastructures.",
'border-left' => "border-l-[1px] border-blue-900"
],
[
"image" => '<img src="' . asset('images/ai_experts.svg') . '" alt="ai_experts logo" />',
"h1" => "AI Experts",
"p" => "AI specialists, machine learning engineers, and researchers with proficiency in advanced AI technologies and algorithms.",
'border-left' => "border-l-[1px] border-blue-900"
],
[
"image" => '<img src="' . asset('images/QA_engineers.svg') . '" alt="QA_engineers logo" />',
"h1" => "QA Engineers",
"p" => "Manual and automation QA engineers with expertise in variety of tools, techniques and testing strategies.",
'border-left' => ""
],
[
"image" => '<img src="' . asset('images/UX-UI_designers.svg') . '" alt="UI-UX_managers logo" />',
"h1" => "Product Managers",
"p" => "Product owners, product managers, and scrum masters with expertise in numerous industries industries like banking, healthcare, fintech, and more.",
'border-left' => "border-l-[1px] border-blue-900"
],
[
"image" => '<img src="' . asset('images/product_managers.svg') . '" alt="product_managers logo" />',
"h1" => "Product Designers",
"p" => "Product designers and UX/UI engineers with expertise in creating an exceptional customer experience through creative solutions.",
'border-left' => "border-l-[2px] border-blue-900"
]
];
$team_card_content = [
[
"image" => '<img src=" ' . asset('images/fast.svg') . '" alt="fast">',
"h1" => 'Hire Fast',
"p" => 'Hire in less than a week utilize our expert matching to reduce your time-to-hire and move fast.'
],
[
"image" => '<img src=" ' . asset('images/extension.svg') . '" alt="extension">',
"h1" => 'Trusted Talent Only',
"p" => 'Get access to rigorously vetted and tested world’s best talent.'
]

];
$team_card_content2 = [
[
"image" => '<img src="' . asset('images/platform.svg') . '" alt="platform icon">',
"h1" => 'The Workplace of the Future',
"p" => 'A Data driven platform that helps you find the right talents with the right skill sets with speed and ease.',
'border' => 'lg:border-r-[1px] lg:border-[#2196f3]/80 lg:pr-6'
],
[
"image" => '<img src="' . asset('images/platform.svg') . '" alt="platform icon">',
"h1" => 'The Workplace of the Future',
"p" => 'A Data driven platform that helps you find the right talents with the right skill sets with speed and ease.',
'border' => 'lg:border-r-[1px] lg:border-[#2196f3]/80 lg:px-6'
],
[
"image" => '<img src="' . asset('images/platform.svg') . '" alt="platform icon">',
"h1" => 'The Workplace of the Future',
"p" => 'A Data driven platform that helps you find the right talents with the right skill sets with speed and ease.',
'border' => ' lg:px-6'
],

]
@endphp
<x-app-layout>
    <!-- Hero section -->
    <!-- <div
        x-data="{            
    // Sets the time between each slides in milliseconds
    autoplayIntervalTime: 4000,
    slides: [                
        {
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',  
            title: 'Hire Top Talent for Contract Engineering Roles.',
            desdescription: `Adeva provides a global talent network of 20k+ developers, engineers, and product experts — Share your talent needs with us and we’ll match you with top prospects in less than 48 hours.`,           
        },                
        {                    
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',                    
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',  
            title: 'Hire Top Talent for Contract Engineering Roles.',
            description: `Adeva provides a global talent network of 20k+ developers, engineers, and product experts — Share your talent needs with us and we’ll match you with top prospects in less than 48 hours.`         
        },                
        {                    
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',                    
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',    
            title: 'Hire Top Talent for Contract Engineering Roles.',
            description: `Adeva provides a global talent network of 20k+ developers, engineers, and product experts — Share your talent needs with us and we’ll match you with top prospects in less than 48 hours.`       
        },            
    ],            
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {                
        if (this.currentSlideIndex > 1) {                    
            this.currentSlideIndex = this.currentSlideIndex - 1                
        } else {   
            // If it's the first slide, go to the last slide           
            this.currentSlideIndex = this.slides.length                
        }            
    },            
    next() {                
        if (this.currentSlideIndex < this.slides.length) {                    
            this.currentSlideIndex = this.currentSlideIndex + 1                
        } else {                 
            // If it's the last slide, go to the first slide    
            this.currentSlideIndex = 1                
        }            
    },    
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time   
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },    
}" x-init="autoplay()" class="relative w-full overflow-hidden">

        <section class="relative min-h-[80svh] w-full">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-cloak x-show="currentSlideIndex == index + 1" class=" flex pt-8 sm:pt-24 sm:justify-center items-center absolute inset-0" x-transition.opacity.duration.1000ms>



                    <div class="sm:flex sm:w-[80%]   md:justify-between z-10">
                        <div class="px-6 space-y-8 py-10  lg:w-[50%] reveal-on-scroll">
                            <h1 class="text-5xl font-bold text-white/90 w-64 sm:w-full">Hire Top Talent for Contract Engineering
                                Roles.
                            </h1>
                            <p class="text-blue-100">Adeva provides a global talent network of 20k+ developers, engineers, and
                                product
                                experts — Share your
                                talent needs with us and we’ll match you with top prospects in less than 48 hours.</p>
                            <a href="#" class="inline-block pt-3  bg-blue-500/90 text-white rounded w-40 h-12 text-center">Hire
                                top
                                Talent</a>
                        </div><div class="sm:flex sm:w-[80%]   md:justify-between z-10">
                        <div class="px-6 space-y-8 py-10  lg:w-[50%] reveal-on-scroll">
                            <h1 class="text-5xl font-bold text-white/90 w-64 sm:w-full">Hire Top Talent for Contract Engineering
                                Roles.
                            </h1>
                            <p class="text-blue-100">Adeva provides a global talent network of 20k+ developers, engineers, and
                                product
                                experts — Share your
                                talent needs with us and we’ll match you with top prospects in less than 48 hours.</p>
                            <a href="#" class="inline-block pt-3  bg-blue-500/90 text-white rounded w-40 h-12 text-center">Hire
                                top
                                Talent</a>
                        </div>
                        <div class="hidden lg:flex p-8">
                            <img src="{{asset('images/globe.jpeg')}}" alt="globe"
                                class="w-[100%] lg:h-[100%] xl:h-[100%] outline-4  animate-pulse">
                        </div>
                    </div>
                    <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                </div>
            </template>
        </section>
    </div> -->
    <div x-data="{            
    // Sets the time between each slides in milliseconds
    autoplayIntervalTime: 4000,
  
     slides: {{Js::from($slides) }},


    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {                
        if (this.currentSlideIndex > 1) {                    
            this.currentSlideIndex = this.currentSlideIndex - 1                
        } else {   
            // If it's the first slide, go to the last slide           
            this.currentSlideIndex = this.slides.length                
        }            
    },            
    next() {                
        if (this.currentSlideIndex < this.slides.length) {                    
            this.currentSlideIndex = this.currentSlideIndex + 1                
        } else {                 
            // If it's the last slide, go to the first slide    
            this.currentSlideIndex = 1                
        }            
    },    
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    // Updates interval time   
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },    
}" x-init=" autoplay" class="relative w-full overflow-hidden">

        <!-- slides -->
        <!-- Change min-h-[50svh] to your preferred height size -->
        <!-- <div class="relative min-h-[80svh] w-full">
            <template x-for="(slide, index) in slides">
                <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0 4" x-transition.opacity.duration.1000ms>

                    Title and description
                    <div class="lg:px-32  absolute inset-0 z-10 flex    gap-2 bg-gradient-to-t from-neutral-950/85 to-transparent items-center justify-between pt-8">
                        <div class="px-6 space-y-8 py-10  lg:w-[50%] ">
                            <h1 class="text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h1>
                            <p class="text-white" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                            <a href="#" class="inline-block pt-3  bg-blue-500/90 text-white rounded w-40 h-12 text-center">Hire
                                top
                                Talent</a>
                        </div>
                        <div class="hidden lg:flex p-8 rounded-full w-[600px]">
                            <img src="{{asset('images/globe.jpeg')}}" alt="globe"
                                class=" outline-4 w-[600px]   animate-pulse">
                        </div>
                    </div>

                    <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.image" x-bind:alt="slide.imgAlt" />
                </div>
            </template>
        </div> -->
        <section class="relative min-h-[90svh] w-full">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-cloak x-show="currentSlideIndex == index + 1" class=" flex pt-8 sm:pt-24 sm:justify-center items-center absolute inset-0 " x-transition.opacity.duration.1000ms>
                    <div class="sm:flex sm:w-[80%] items-center  md:justify-between z-10">
                        <div class="px-6 space-y-8 py-10  lg:w-[50%] ">
                            <h1 class="text-5xl font-bold text-white/90 w-64 sm:w-full">Hire Top Talent for Contract Engineering
                                Roles.
                            </h1>
                            <a href="#" class="inline-block pt-3  bg-blue-500/90 text-white rounded w-40 h-12 text-center">Hire
                                top
                                Talent</a>
                        </div>
                        <div class="hidden lg:flex p-8 rounded-full ">
                            <img src="{{asset('images/globe.jpeg')}}" alt="globe"
                                class=" outline-4 w-[600px]   animate-pulse">
                        </div>
                    </div>
                    <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.image" x-bind:alt="slide.imgAlt" />
            </template>
        </section>

        <!-- Pause/Play Button
        <button type="button" class="absolute bottom-5 right-5 z-20 rounded-full text-neutral-300 opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
            <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
            </svg>
            <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
            </svg>
        </button>

        indicators
        <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides">
            <template x-for="(slide, index) in slides">
                <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-300' : 'bg-neutral-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
            </template>
        </div> -->
    </div>
    <!-- Trusted product and engineers section -->
    <section class="reveal-on-scroll min-h-[20vh] bg-blue-100/10 ">
        <div class="flex flex-col items-center py-10 justify-center space-y-8">


            <h1 class="text-xl text-center text-black/80 font-bold ">Trusted by Product and Engineering Leaders at</h1>
            <div class="flex-col  gap-10 flex lg:flex-row flex-wrap">
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
    <!-- Talent section -->
    <section class="reveal-on-scroll min-h-[40vh] bg-blue-100/10 flex flex-col items-center pt-10 pb-20">
        <h1 class="text-5xl text-center font-[200] text-[#304040] mb-2">Leverage a Global Talent Network</h1>
        <div class="px-4 space-y-4 mt-8 grid  md:grid-cols-2 lg:grid-cols-3 lg:w-[80%]">
            @foreach ($talent_card_content as $card)

            <div class="space-y-4 group gradient-bottom-border  sm:px-3 sm:{{$card['border-left']}}">
                <div>
                    {!! $card['image'] !!}
                </div>
                <h1 class="text-xl max-w-2 font-bold text-black/80">{{$card['h1']}}</h1>
                <p class="mb-4">
                    {{$card['p']}}
                </p>
                <a href="#"
                    class="flex space-x-2 invisible group-hover:visible  transform transition duration-700 ease-in-out group-hover:translate-y-[-8px] translate-y-0 mt-8 items-center ">
                    <p class=" text-blue-500 ">Learn More</p>
                    <span class="text-blue-500 text-3xl">&#10230;</span>
                </a>
            </div>
            @endforeach

        </div>
    </section>
    <!-- Team section-->
    <section class="reveal-on-scroll min-h-[80vh] flex bg-blue-100/20 px-4 pt-8 pb-20 lg:justify-center scroll-effect">
        <div class="lg:w-[80%] space-y-10">
            <div class="flex space-x-20 items-center">
                <div class="space-y-6">
                    <h1 class="text-5xl max-w-2xl ">Build Teams that Deliver &#8208;
                        Right Here, Right Now.</h1>
                    <p>Join Adeva and get access to some of the world's best talent to accelerate growth and fuel
                        innovation.
                    </p>
                    <div class="flex px-2 space-x-8 items-center">
                        <a href="#" class="inline-block w-full bg-blue-600/90 text-white rounded  h-12 text-center ">
                            <span class="w-28 inline-block">
                                Start Hiring Now
                            </span>
                        </a>
                        <a href="#"
                            class="flex rounded bg-gray-100 pl-1 space-x-4 items-center rounded w-full h-12 text-sm ">
                            <p>Learn More</p>
                            <span class="text-blue-500 text-3xl">&#10230;</span>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block h-[40vh] w-[40vw]">
                    <img src="{{asset('images/map.svg')}}" alt="map">
                </div>
            </div>
            <div class="pt-20 space-y-10 lg:flex lg:space-x-8 lg:flex lg:space-y-0 justify-between w-full ">
                @foreach ($team_card_content as $card)
                <div class="rounded-sm flex items-center space-x-2  shadow py-6 bg-blue-100/50 h-48 w-full">
                    <div class="h-22 w-22 flex items-center">
                        {!! $card['image'] !!}
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-[#333]/90">{{$card['h1']}}</h1>
                        <p class="text-[#333]/80 font-[500] max-w-sm">
                            {{$card['p']}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="lg:grid lg:grid-cols-3 pt-12 space-y-8 lg:space-y-0">
                @foreach ($team_card_content2 as $card)
                <div class="flex {{$card['border']}} ">
                    <div class="h-22 w-22 ">
                        {!!$card['image']!!}Lever
                    </div>
                    <div class="space-y-4  w-full ml-1">
                        <h1 class="text-xl font-bold text-[#333]/90">{{$card['h1']}}</h1>
                        <p class="text-[#333]/90 font-[500] max-w-sm">{{$card['p']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div
        class=" min-h-[30vh] bg-gradient-to-br	from-blue-700/20 via-blue-700/5 gradient-top-border flex items-center py-6 reveal-on-scroll">
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
    <div
        class=" min-h-[80vh] bg-gradient-to-b from-[#070f26] via-[#071235 ] to-[#102257] reveal-on-scroll flex flex-col justify-between items-center space-y-40 px-4">
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
    </div>
    <!-- Community Talent Section-->

    <section class=" min-h-[80vh] bg-blue-100/10" x-data="{selectedTab:'groups'}">


        <div class="flex flex-col text-center py-16 space-y-8">
            <div class="space-y-2">
                <h1 class="text-4xl font-bold">A Global Community of Talent</h1>
                <p class="text-lg text-gray-700">Connect with a global tech talent network and scale faster than anyone
                    software else.
                </p>
            </div>
            <nav class="hidden lg:flex ">
                <div class="flex gap-16 justify-center  w-[80%] mx-auto border-b-[2px]" @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()">
                    <button @click="selectedTab = 'groups'" :aria-selected="selectedTab === 'groups'" :tabindex="selectedTab === 'groups' ? '0' : '-1'" :class="selectedTab === 'groups' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900': 'text-neutral-600 font-medium  box-border hover:border-b-2 hover:border-b-blue-800 hover:text-neutral-900'" type="button" role="tab" aria-controls="tabpanelGroups" class="pb-4 box-border">
                        Software Engineers
                    </button>

                    <button
                        @click="selectedTab = 'data'" :aria-selected="selectedTab === 'data'" :tabindex="selectedTab === 'data' ? '0' : '-1'"
                        :class="selectedTab === 'data' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelData"
                        class="pb-4 ">
                        Data Experts
                    </button>
                    <button
                        @click="selectedTab = 'product'" :aria-selected="selectedTab === 'product'" :tabindex="selectedTab === 'product' ? '0' : '-1'"
                        :class="selectedTab === 'product' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelProduct"
                        class="pb-4 ">
                        Product Managers
                    </button>
                    <button
                        @click="selectedTab = 'ui/ux'" :aria-selected="selectedTab === 'ui/ux'" :tabindex="selectedTab === 'ui/ux' ? '0' : '-1'"
                        :class="selectedTab === 'ui/ux' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelUiUx"
                        class="pb-4 ">
                        UI/UX Designers

                    </button>
                    <button @click="selectedTab = 'QA'" :aria-selected="selectedTab === 'QA'" :tabindex="selectedTab === 'QA' ? '0' : '-1'"
                        :class="selectedTab === 'QA' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelQA"
                        class="pb-4 ">
                        QA Engineers

                    </button>
                </div>
            </nav>

            <!-- Mobile view -->
            <div class="lg:hidden">
                <select name="job_title" class="text-sm p-2 rounded-md  outline-none ring-1 ring-gray-400">
                    <option value="software_engineer">
                        Software Engineers
                    </option>
                    <option value="data_expert">
                        Data Experts
                    </option>
                    <option value="product_managers">
                        Product Managers
                    </option>
                    <option value="ui-ux_designers">
                        UI/UX Designers
                    </option>
                    <option value="data_expert">
                        QA Engineers
                    </option>
                </select>
            </div>
            <div>
                <div
                    x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups"
                    class="flex flex-col space-y-10  items-center lg:space-x-8 px-4 lg:w-[80%] lg:mx-auto lg:justify-between lg:flex-row flex-wrap lg:space-y-0 reveal-on-scroll">
                    <div
                        class="ring-1 ring-gray-300 flex flex-col justify-center items-center w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] rounded-lg group relative space-y-24">
                        <div class="flex flex-col items-center space-y-2 pt-8 px-4">
                            <div class="w-[120px] h-[120px] rounded-[50%] ring-2 flex">
                                <img src="{{asset('images/GiveButter.jpeg')}}" alt="give butter image"
                                    class="block rounded-[50%] w-full">
                            </div>
                            <h1 class="font-bold text-lg">Mr Selase</h1>
                            <p class="text-xs font-bold text-gray-600">Senior Software Engineer</p>
                            <p class="max-w-xs text-xs">
                                Mr Selase is a full-stack engineer with 13+ years of experience in building complex apps and
                                services
                                with complicated business logic and flow. He is skilled in php, laravel and Mysql
                            </p>
                        </div>
                        <div class="flex items-center space-x-4 bg-gray-100 w-full px-3 h-[100px] rounded-bl-lg rounded-br-lg">
                            <img src="{{asset('images/ugmc.jpg')}}" alt="ugmc logo" class="w-[40px] rounded-[50%]">
                            <p class="border-l-[1px] border-blue-500 pl-2">University of Ghana Medical center</p>
                        </div>
                        <div
                            class="hidden absolute h-[100%] rounded-lg -top-24  w-full  bg-gray-100 flex flex-col justify-center items-center space-y-8 group-hover:flex px-4 z-10">
                            <div class="space-y-2">
                                <h1 class="text-2xl font-bold text-gray-700">Ready to get started?</h1>
                                <p class="text-center text-sm">
                                    Mr Selase is a fxll-stack engineer with 13+ years of experience in building complex apps and
                                    services
                                    with complicated business logic and flow. He is skilled in php, laravel and Mysql
                                </p>
                            </div>
                            <a href="#" class=" flex space-x-4 items-center">
                                <p class=" text-blue-500  ">Start Hiring</p>
                                <span class="text-blue-500 text-3xl">&#10230;</span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="ring-1 ring-gray-300 flex flex-col justify-center items-center w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] rounded-lg group relative space-y-24">
                        <div class="flex flex-col items-center space-y-2 pt-8 px-4">
                            <div class="w-[120px] h-[120px] rounded-[50%] ring-2 flex">
                                <img src="{{asset('images/GiveButter.jpeg')}}" alt="give butter image"
                                    class="block rounded-[50%] w-full">
                            </div>
                            <h1 class="font-bold text-lg">Mr Selase</h1>
                            <p class="text-xs font-bold text-gray-600">Senior Software Engineer</p>
                            <p class="max-w-xs text-xs">
                                Mr Selase is a full-stack engineer with 13+ years of experience in building complex apps and
                                services
                                with complicated business logic and flow. He is skilled in php, laravel and Mysql
                            </p>
                        </div>
                        <div class="flex items-center space-x-4 bg-gray-100 w-full px-3 h-[100px] rounded-bl-lg rounded-br-lg">
                            <img src="{{asset('images/ugmc.jpg')}}" alt="ugmc logo" class="w-[40px] rounded-[50%]">
                            <p class="border-l-[1px] border-blue-500 pl-2">University of Ghana Medical center</p>
                        </div>
                        <div
                            class="hidden absolute h-[100%] rounded-lg -top-24  w-full  bg-gray-100 flex flex-col justify-center items-center space-y-8 group-hover:flex px-4 z-10">
                            <div class="space-y-2">
                                <h1 class="text-2xl font-bold text-gray-700">Ready to get started?</h1>
                                <p class="text-center text-sm">
                                    Mr Selase is a fxll-stack engineer with 13+ years of experience in building complex apps and
                                    services
                                    with complicated business logic and flow. He is skilled in php, laravel and Mysql
                                </p>
                            </div>
                            <a href="#" class=" flex space-x-4 items-center">
                                <p class=" text-blue-500  ">Start Hiring</p>
                                <span class="text-blue-500 text-3xl">&#10230;</span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="ring-1 ring-gray-300 flex flex-col justify-center items-center w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] rounded-lg group relative space-y-24">
                        <div class="flex flex-col items-center space-y-2 pt-8 px-4">
                            <div class="w-[120px] h-[120px] rounded-[50%] ring-2 flex">
                                <img src="{{asset('images/daniel-albert.jpg')}}" alt="give butter image"
                                    class="block rounded-[50%] w-full">
                            </div>
                            <h1 class="font-bold text-lg">Mr Selase</h1>
                            <p class="text-xs font-bold text-gray-600">Senior Software Engineer</p>
                            <p class="max-w-xs text-xs">
                                Mr Selase is a full-stack engineer with 13+ years of experience in building complex apps and
                                services
                                with complicated business logic and flow. He is skilled in php, laravel and Mysql
                            </p>
                        </div>
                        <div class="flex items-center space-x-4 bg-gray-100 w-full px-3 h-[100px] rounded-bl-lg rounded-br-lg">
                            <img src="{{asset('images/ugmc.jpg')}}" alt="ugmc logo" class="w-[40px] rounded-[50%]">
                            <p class="border-l-[1px] border-blue-500 pl-2">University of Ghana Medical center</p>
                        </div>
                        <div
                            class="hidden absolute h-[100%] rounded-lg -top-24  w-full  bg-gray-100 flex flex-col justify-center items-center space-y-8 group-hover:flex px-4 z-10">
                            <div class="space-y-2">
                                <h1 class="text-2xl font-bold text-gray-700">Ready to get started?</h1>
                                <p class="text-center text-sm">
                                    Mr Selase is a fxll-stack engineer with 13+ years of experience in building complex apps and
                                    services
                                    with complicated business logic and flow. He is skilled in php, laravel and Mysql
                                </p>
                            </div>
                            <a href="#" class=" flex space-x-4 items-center">
                                <p class=" text-blue-500  ">Start Hiring</p>
                                <span class="text-blue-500 text-3xl">&#10230;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div
                x-show="selectedTab === 'data'" id="tabpanelData" role="tabpanel" aria-label="data"
                class="flex flex-col space-y-10  items-center lg:space-x-8 px-4 lg:w-[80%] lg:mx-auto lg:justify-between lg:flex-row flex-wrap lg:space-y-0 reveal-on-scroll">
                <div
                    class="ring-1 ring-gray-300 flex flex-col justify-center items-center w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] rounded-lg group relative space-y-24">
                    <div class="flex flex-col items-center space-y-2 pt-8 px-4">
                        <div class="w-[120px] h-[120px] rounded-[50%] ring-2 flex">
                            <img src="{{asset('images/daniel-albert.jpg')}}" alt="give butter image"
                                class="block rounded-[50%] w-full">
                        </div>
                        <h1 class="font-bold text-lg">Mr Selase</h1>
                        <p class="text-xs font-bold text-gray-600">Senior Software Engineer</p>
                        <p class="max-w-xs text-xs">
                            Mr Selase is a full-stack engineer with 13+ years of experience in building complex apps and
                            services
                            with complicated business logic and flow. He is skilled in php, laravel and Mysql
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 bg-gray-100 w-full px-3 h-[100px] rounded-bl-lg rounded-br-lg">
                        <img src="{{asset('images/ugmc.jpg')}}" alt="ugmc logo" class="w-[40px] rounded-[50%]">
                        <p class="border-l-[1px] border-blue-500 pl-2">University of Ghana Medical center</p>
                    </div>
                    <div
                        class="hidden absolute h-[100%] rounded-lg -top-24  w-full  bg-gray-100 flex flex-col justify-center items-center space-y-8 group-hover:flex px-4 z-10">
                        <div class="space-y-2">
                            <h1 class="text-2xl font-bold text-gray-700">Ready to get started?</h1>
                            <p class="text-center text-sm">
                                Mr Selase is a fxll-stack engineer with 13+ years of experience in building complex apps and
                                services
                                with complicated business logic and flow. He is skilled in php, laravel and Mysql
                            </p>
                        </div>
                        <a href="#" class=" flex space-x-4 items-center">
                            <p class=" text-blue-500  ">Start Hiring</p>
                            <span class="text-blue-500 text-3xl">&#10230;</span>
                        </a>
                    </div>
                </div>
                <div
                    class="ring-1 ring-gray-300 flex flex-col justify-center items-center w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] rounded-lg group relative space-y-24">
                    <div class="flex flex-col items-center space-y-2 pt-8 px-4">
                        <div class="w-[120px] h-[120px] rounded-[50%] ring-2 flex">
                            <img src="{{asset('images/daniel-albert.jpg')}}" alt="give butter image"
                                class="block rounded-[50%] w-full">
                        </div>
                        <h1 class="font-bold text-lg">Mr Selase</h1>
                        <p class="text-xs font-bold text-gray-600">Senior Software Engineer</p>
                        <p class="max-w-xs text-xs">
                            Mr Selase is a full-stack engineer with 13+ years of experience in building complex apps and
                            services
                            with complicated business logic and flow. He is skilled in php, laravel and Mysql
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 bg-gray-100 w-full px-3 h-[100px] rounded-bl-lg rounded-br-lg">
                        <img src="{{asset('images/ugmc.jpg')}}" alt="ugmc logo" class="w-[40px] rounded-[50%]">
                        <p class="border-l-[1px] border-blue-500 pl-2">University of Ghana Medical center</p>
                    </div>
                    <div
                        class="hidden absolute h-[100%] rounded-lg -top-24  w-full  bg-gray-100 flex flex-col justify-center items-center space-y-8 group-hover:flex px-4 z-10">
                        <div class="space-y-2">
                            <h1 class="text-2xl font-bold text-gray-700">Ready to get started?</h1>
                            <p class="text-center text-sm">
                                Mr Selase is a fxll-stack engineer with 13+ years of experience in building complex apps and
                                services
                                with complicated business logic and flow. He is skilled in php, laravel and Mysql
                            </p>
                        </div>
                        <a href="#" class=" flex space-x-4 items-center">
                            <p class=" text-blue-500  ">Start Hiring</p>
                            <span class="text-blue-500 text-3xl">&#10230;</span>
                        </a>
                    </div>
                </div>
                <div
                    class="ring-1 ring-gray-300 flex flex-col justify-center items-center w-[80%] sm:w-[50%] md:w-[40%] lg:w-[30%] rounded-lg group relative space-y-24">
                    <div class="flex flex-col items-center space-y-2 pt-8 px-4">
                        <div class="w-[120px] h-[120px] rounded-[50%] ring-2 flex">
                            <img src="{{asset('images/ugmc.jpg')}}" alt="give butter image"
                                class="block rounded-[50%] w-full">
                        </div>
                        <h1 class="font-bold text-lg">Mr Selase</h1>
                        <p class="text-xs font-bold text-gray-600">Senior Software Engineer</p>
                        <p class="max-w-xs text-xs">
                            Mr Selase is a full-stack engineer with 13+ years of experience in building complex apps and
                            services
                            with complicated business logic and flow. He is skilled in php, laravel and Mysql
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 bg-gray-100 w-full px-3 h-[100px] rounded-bl-lg rounded-br-lg">
                        <img src="{{asset('images/ugmc.jpg')}}" alt="ugmc logo" class="w-[40px] rounded-[50%]">
                        <p class="border-l-[1px] border-blue-500 pl-2">University of Ghana Medical center</p>
                    </div>
                    <div
                        class="hidden absolute h-[100%] rounded-lg -top-24  w-full  bg-gray-100 flex flex-col justify-center items-center space-y-8 group-hover:flex px-4 z-10">
                        <div class="space-y-2">
                            <h1 class="text-2xl font-bold text-gray-700">Ready to get started?</h1>
                            <p class="text-center text-sm">
                                Mr Selase is a fxll-stack engineer with 13+ years of experience in building complex apps and
                                services
                                with complicated business logic and flow. He is skilled in php, laravel and Mysql
                            </p>
                        </div>
                        <a href="#" class=" flex space-x-4 items-center">
                            <p class=" text-blue-500  ">Start Hiring</p>
                            <span class="text-blue-500 text-3xl">&#10230;</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section class="reveal-on-scroll min-h-[60vh] bg-gray-100 reveal-on-scroll">
        <div class="px-4 space-y-8 py-24  lg:w-[80%] lg:mx-auto ">
            <div class="flex flex-col items-center pb-10 pt-10 space-y-4">
                <h1 class="text-[2.7rem] text-center ">Over 200 companies trust Adeva</h1>
                <p class="text-center text-xl">See how our customers are making the world a more beautiful place</p>
            </div>
            <div class="flex md:justify-between">
                <div class=" md:w-[50%] ">
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
                        <a href="#" class=" flex space-x-6 items-center">
                            <p class=" text-blue-500 text-lg ">Read full case study</p>
                            <span class="text-blue-500 text-3xl">&#10230;</span>
                        </a>
                        <div class="border-l-4 border-orange-400 pl-2 bg-gray-100 lg:bg-transparent space-y-1 py-1">
                            <p class="font-bold text-gray">Liran Cohen</p>
                            <p class="text-sm">Co-founder and CTO, Givebutter</p>
                        </div>
                        <div class="flex px-2 justify-between lg:w-[90%]">
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
                <div class="hidden lg:block relative h-[450px] w-[450px] rounded ml-auto">
                    <span class="absolute bottom-10 right-6 text-white font-bold text-2xl lg:text-4xl z-50">Give
                        Butter</span>
                    <img src="{{asset('images/GiveButter.jpeg')}}" alt="give-butter" class="rounded-lg w-full h-full">
                </div>
            </div>
        </div>
    </section>
    <!-- Profile Section -->
    <section class="reveal-on-scroll">
        <div
            class="px-2 flex flex-col space-y-8 items-center py-16 sm:grid sm:grid-cols-3 sm:space-x-8 md:grid-cols-4 lg:w-[80%] lg:mx-auto">
            <!-- <div class=""> -->
            <div
                class="flex flex-col items-center space-y-4 sm:col-span-3 md:col-span-4 md:items-start md:px-6 lg:col-span-2">
                <div class="flex flex-col items-center sm:items-start space-y-2 sm:w-[50%] sm:mx-auto md:w-full">
                    <img src="{{asset('images/talent.svg')}}" alt="profile image">
                    <p class="text-[0.7rem]">WHAT WE OFFER</p>
                </div>
                <div class="flex flex-col items-center space-y-3 text-center md:items-start md:text-left">
                    <h1 class="text-4xl font-bold text-black/80">Talent Profiles</h1>
                    <p class="text-lg text-[#333]/90 max-w-xl lg:w-[80%]">Leverage our data-driven talent matching to
                        review
                        only
                        top-tier candidates and quickly hire the
                        perfect fit.</p>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <a href="" class="space-x-3 flex font-bold text-SM text-gray-900">
                        <p>Front End </p>
                        <span>&#5171;</span>
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <a href="" class="space-x-3 flex font-bold text-SM text-gray-900">
                        <p>Front End </p>
                        <span>&#5171;</span>
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <a href="" class="space-x-3 flex font-bold text-SM text-gray-900">
                        <p>Front End </p>
                        <span>&#5171;</span>
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <a href="" class="space-x-3 flex font-bold text-SM text-gray-900">
                        <p>Front End </p>
                        <span>&#5171;</span>
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                </div>
            </div>
            <div class="space-y-6">
                <div>
                    <a href="" class="space-x-3 flex font-bold text-SM text-gray-900">
                        <p>Front End </p>
                        <span>&#5171;</span>
                    </a>
                </div>
                <div class="flex flex-col space-y-3">
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                    <a href="text-gray-100">AdonisJS Developers</a>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>
    <section class="bg-blue-900/90 h-[50vh] flex flex-col justify-center items-center space-y-6 reveal-on-scroll">
        <div class="text-center space-y-1">
            <h1 class="text-4xl text-white font-bold">Ready to Hire?</h1>
            <p class="text-lg text-white/90 ">Enhancing your engineer teams start here.</p>
        </div>
        <a href="#"
            class="ring-1 rounded ring-white text-white p-2 hover:bg-white hover:shadow-sm hover:text-blue-900/90">Start
            Hiring Now</a>
    </section>
</x-app-layout>