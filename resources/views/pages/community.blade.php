<style>
    .gradient-top-border {
        border-top-width: 1px;
        border-top-style: solid;
        border-image: linear-gradient(to right, #fff, #4caf50, #fff) 1;
    }

    .gradient-bottom-border {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-image: linear-gradient(to right, #fff, #4caf50, #fff) 1;
    }
</style>
@php
    $cards = [
        ["image" => '<img src="' . asset('/images/argentina.svg') . '" alt="argentina flag">', "country" => "Argentina"],
        ["image" => '<img src="' . asset('/images/bangladesh.svg') . '" alt="Bangladesh flag">', "country" => "Bangladesh"],
        ["image" => '<img src="' . asset('/images/belarus.svg') . '" alt="Belarus flag">', "country" => "Belarus"],
        ["image" => '<img src="' . asset('/images/brazil.svg') . '" alt="Brazil flag">', "country" => "Brazil"],
        ["image" => '<img src="' . asset('/images/bulgaria.svg') . '" alt="Bulgaria flag">', "country" => "Bulgaria"],
        ["image" => '<img src="' . asset('/images/egypt.svg') . '" alt="Egypt flag">', "country" => "Egypt"],
        ["image" => '<img src="' . asset('/images/estonia.svg') . '" alt="Estonia flag">', "country" => "Estonia"],
        ["image" => '<img src="' . asset('/images/germany.svg') . '" alt="Germany flag">', "country" => "Germany"],
        ["image" => '<img src="' . asset('/images/india.svg') . '" alt="India flag">', "country" => "India"],
        ["image" => '<img src="' . asset('/images/kenya.svg') . '" alt="Kenya flag">', "country" => "Kenya"],
        ["image" => '<img src="' . asset('/images/macedonia.svg') . '" alt="Macedonia flag">', "country" => "Macedonia"],
        ["image" => '<img src="' . asset('/images/netherlands.svg') . '" alt="Netherlands flag">', "country" => "Netherlands"],
        ["image" => '<img src="' . asset('/images/nigeria.svg') . '" alt="Nigeria flag">', "country" => "Nigeria"],
        ["image" => '<img src="' . asset('/images/pakistan.svg') . '" alt="Pakistan flag">', "country" => "Pakistan"],
        ["image" => '<img src="' . asset('/images/portugal.svg') . '" alt="Portugal flag">', "country" => "Portugal"],
        ["image" => '<img src="' . asset('/images/romania.svg') . '" alt="Romania flag">', "country" => "Romania"],
        ["image" => '<img src="' . asset('/images/russia.svg') . '" alt="Russia flag">', "country" => "Russia"],
        ["image" => '<img src="' . asset('/images/serbia.svg') . '" alt="Serbia flag">', "country" => "Serbia"],
        ["image" => '<img src="' . asset('/images/spain.svg') . '" alt="Spain flag">', "country" => "Spain"],
        ["image" => '<img src="' . asset('/images/thailand.svg') . '" alt="Thailand flag">', "country" => "Thailand"],
        ["image" => '<img src="' . asset('/images/uganda.svg') . '" alt="Uganda flag">', "country" => "Uganda"],
        ["image" => '<img src="' . asset('/images/united_states.svg') . '" alt="United State flag">', "country" => "United State"],
        ["image" => '<img src="' . asset('/images/uruguay.svg') . '" alt="Uruguay flag">', "country" => "Uruguay"],
        ["image" => '<img src="' . asset('/images/argentina.svg') . '" alt="argentina flag">', "country" => "Argentina"],


    ];
@endphp
<x-app-layout>
    <section class="bg-custom-image h-screen w-full  ">
        <div
            class="bg-gradient-to-br from-gray-100  via-gray-400/95 to-transparent bg-cover h-screen flex items-center justify-center lg:pt-16">
            <div class="space-y-10 flex items-center flex-col w-[90%] mx-auto lg:w-[35%] lg:ml-28 lg:items-start">
                <h1 class="text-5xl text-center font-bold text-[#333] lg:text-left lg:max-w-xl">Welcome to the Future of
                    Work</h1>
                <p class="text-xl text-justify">Join our mission to enable work without boundaries for 1 Million tech
                    talent in the world.</p>
                <button class="text-white text-xl w-full p-3 rounded-lg bg-green-600 lg:w-40">Join Now</button>
            </div>
        </div>
    </section>
    <section class="bg-white drop-shadow-sm">
        <nav class="h-20 border-b-[1px] reveal-on-scroll">
            <div class="w-[65%] mx-auto  flex justify-between lg:ml-24 lg:w-[20%]">
                <a href=""
                    class="h-20 text-center  pt-8 border-b-2 border-b-blue-600 font-bold text-gray-600">Community</a>
                <a href=""
                    class="h-20 text-center  pt-8 border-b-2 text-gray-400 hover:border-b-blue-600 font-bold ">Events</a>
            </div>
        </nav>
        <div
            class="space-x-8 space-y-16 flex flex-col items-center pt-16 md:grid md:grid-cols-2  lg:w-[80%] lg:mx-auto pr-6 gap-4 md:items-start">
            <h1 class="text-3xl font-bold text-center max-w-md md:col-span-2 md:space-x-0  md:mx-auto ">
                Help to improve
                people’s
                working lives</h1>
            <div>
                <h2 class="text-4xl font-bold text-[#333]/90 max-w-md relative z-10 mb-6">Our vision is to bring equal
                    opportunities to all
                    developers around the world, no matter their
                    location, gender or race.
                    <hr class="border-orange-500/80 border-[0.3rem]  w-[80%] absolute -bottom-0 -z-10">
                </h2>
                <div class="bg-community-image w-[80%] h-[55vh] bg-cover bg-right-top hidden md:flex"></div>
                <!-- <img src="{{asset('/images/adeva_our_vision.jpg')}}" alt="ugmc logo" class="hidden md:inline-flex"> -->
            </div>
            <div class="space-y-8 text-xl ">
                <p>Starting our professional career in a small European country, it felt like great opportunities were
                    reserved for others. Exciting projects were entitled to developers in global tech centers. What
                    usually came to our hands were outdated technologies and tedious projects.</p>
                <p>We decided to do something about this. We built Adeva with the vision to bring equal opportunities to
                    developers everywhere. We built it for us, and for everyone else who’s been caught in the trap of
                    being a second-rate citizen in the software world.</p>
                <p>Our community welcomes members from all over the globe, helping them join amazing remote teams, grow
                    professionally, and be recognized as technology leaders.</p>
            </div>
        </div>
    </section>
    <!-- community worldwide -->
    <section class="bg-gray-100/30   min-h-screen pt-8 ">
        <div class="lg:w-[80%] lg:mx-auto flex flex-col items-center space-y-10 pb-24">
            <h1 class="text-4xl text-center font-bold max-w-lg  text-[#333]">40+ Communities Worldwide
                & Growing</h1>
            <div class=" grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-8 mx-2 pb-4 items-start">
                @foreach ($cards as $card)
                    <div
                        class="shadow-even w-[10rem] h-[10rem] rounded-lg flex flex-col items-center space-y-4  justify-center">
                        {!! $card["image"] !!}
                        <p>{{$card["country"]}}</p>
                    </div>
                @endforeach
            </div>
            <div class="pl-2">
                <a href="#"
                    class="inline-block  bg-green-600 text-white rounded w-full p-4 text-center whitespace-nowrap hover:bg-blue-600/90 ">Apply
                    to become a community leader</a>
            </div>
        </div>
    </section>
    <section>
        <div class="flex flex-col items-center space-y-16 pt-24 lg:w-[80%] lg:mx-auto pb-24">
            <div class="text-center space-y-4">
                <h1 class="text-3xl">What employees are saying.
                </h1>
                <p class="text-xl max-w-2xl"> Thanks to Adevians’ feedback and reviews over the years, we’ve been lucky
                    to be
                    named a great place to800 work globally.</p>
            </div>
            <div
                class="relative flex flex-col w-full gradient-top-border gradient-bottom-border md:grid md:grid-cols-3  items-center">

                <img src="{{asset('/images/glassdoor-white-bg.svg')}}" alt="Glassdoor image"
                    class="absolute -top-6 md:left-[43%] ">
                <div
                    class="flex py-16  justify-end pr-16 gap-4 md:bg-gradient-to-bl from-[#4caf50]/10 to-[#fff]/10 via-[#fff] ">
                    <h1 class="text-3xl">4.9</h1>
                    <div class="space-y-2">
                        <div class="flex space-x-1" class="h-8 w-8">
                            <img src="{{asset('/images/rating_full_green.svg')}}" alt="ratings" class="h-8 w-8">
                            <img src="{{asset('/images/rating_full_green.svg')}}" alt="ratings" class="h-8 w-8">
                            <img src="{{asset('/images/rating_full_green.svg')}}" alt="ratings" class="h-8 w-8">
                            <img src="{{asset('/images/rating_full_green.svg')}}" alt="ratings" class="h-8 w-8">
                            <img src="{{asset('/images/rating_full_green.svg')}}" alt="ratings" class="h-8 w-8">
                        </div>
                        <p>Based on 40+ reviews</p>
                    </div>
                </div>
                <div class="flex py-16 items-center justify-center gap-4">

                    <svg viewBox="0 0 36 36" width="70" height="70">
                        <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                            fill="none" stroke="#16a34a" stroke-width="4"></path>
                        <path stroke-dasharray="100"
                            d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                            fill="none" stroke="#16a34a" stroke-width="2"></path>
                        <text x="18" y="20.35" font-size="6" text-anchor="middle" fill="#333">100%</text>
                    </svg>
                    <h1 class="text-xl text-[#333] font-bold max-w-40">Recommended to friends.</h1>
                </div>
                <div class="flex py-16 items-center justify-center gap-4">
                    <svg viewBox="0 0 36 36" width="70" height="70">
                        <!-- Background Circle Path -->
                        <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                            fill="none" stroke="#e0e0e0" stroke-width="4" />
                        <!-- Foreground Circle Path with Dash Array -->
                        <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"
                            fill="none" stroke="#16a34a" stroke-width="4" stroke-dasharray="90" />
                        <!-- Percentage Text -->
                        <text x="18" y="20.35" font-size="6" text-anchor="middle" fill="#333">97%</text>
                    </svg>
                    <h1 class="text-xl text-[#333] font-bold max-w-40">Approve of CEO</h1>
                </div>
            </div>
            <div>
                <a href="#"
                    class="flex items-center space-x-2 hover:border-b-2 transition-color border-gray-600 duration-100 ease-linear text-md text-gray-600 font-bold pb-2">
                    <p>Read our reviews</p>
                    <span class="text-center">&#10230;</span>
                </a>
            </div>
        </div>
    </section>
    <div class="space-y-10">
        <div class="full  w-sm:w-[90%] md:w-[50%] min-h-[50%] rounded-lg shadow-even mx-auto p-16 flex space-x-4">
            <img src="{{asset('/images/quote-svgrepo-com.svg')}}" alt="Quotation mark" class="w-10 h-10">
            <div class="space-y-4 text-xl">
                <p>
                    Joining Adeva completely changed the way I manage my work and life. It gave me the opportunity to
                    work
                    remotely for worldwide projects while keeping a very healthy work-life balance. I get to connect
                    with
                    proactive and interesting people, always eager to learn and improve which really makes me feel
                    integrated into a supportive community.
                </p>
                <p>It's definitely one of my most cherished and empowering job experiences so far!</p>
                <div class="flex items-center space-x-4">
                    <img src="{{asset('/images/rita-viegas.jpg')}}" alt="Rita" class="w-16 h-16 rounded-[50%]">
                    <div class="flex flex-col">
                        <span class="font-bold">Rita Viegas</span>
                        <span class="text-sm">Senior BI Engineer</span>
                    </div>
                </div>
            </div>
        </div>
        <section
            class="bg-blue-900/90 min-h-[30vh] flex flex-col-reverse md:flex-row items-center md:items-start reveal-on-scroll">
            <div class="text-center my-auto w-[80%]">
                <h1 class="text-4xl text-white font-bold">Ready to change the world?</h1>
            </div>
            <div class="flex  flex-col items-center md:space-y-8 md:px-4 md:w-[50%]">
                <div class="flex items-center space-x-4">
                    <button class="text-4xl text-[#333]">
                        &#10229;
                    </button>
                    <button class="text-4xl text-[#333]">
                        &#10230;</button>
                </div>
                <div class="space-x-4  ">
                    <a href="#"
                        class="ring-1 rounded ring-white text-white p-2 hover:bg-white hover:shadow-sm hover:text-blue-900/90">Apply
                        to join
                    </a>
                    <a href="#"
                        class="ring-1 rounded ring-white text-white p-2 hover:bg-white hover:shadow-sm hover:text-blue-900/90">Contact
                        sales
                    </a>
                </div>
            </div>
        </section>
        <div x-data="{            
    slides: [                
        {
            imgSrc: '{{asset('/images/rating_full_green.svg')}}',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',  
            title: 'Front end developers',
            description: 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.',    
            ctaUrl: 'https://example.com',
            ctaText: 'Become a Developer',          
        },                
        {                    
            imgSrc: '{{asset('/images/globe.jpeg')}}',                    
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',  
            title: 'Back end developers',
            description: 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens', 
            ctaUrl: 'https://example.com',
            ctaText: 'Become a Developer',             
        },                
        {                    
            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',                    
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',    
            title: 'Full stack developers',
            description: 'Where &quot;burnout&quot; is just a fancy term for &quot;Tuesday&quot;.',
            ctaUrl: 'https://example.com',
            ctaText: 'Become a Developer',          
        },            
    ],            
    currentSlideIndex: 1,
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
}" class="relative w-full overflow-hidden">

            <!-- previous button -->
            <button type="button"
                class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
                aria-label="previous slide" x-on:click="previous()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                    stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <!-- next button -->
            <button type="button"
                class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white"
                aria-label="next slide" x-on:click="next()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                    stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <!-- slides -->
            <!-- Change min-h-[50svh] to your preferred height size -->
            <div class="relative min-h-[50svh] w-full">
                <template x-for="(slide, index) in slides">
                    <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                        x-transition.opacity.duration.1000ms>

                        <!-- Title and description -->
                        <div
                            class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-neutral-950/85 to-transparent px-16 py-12 text-center">
                            <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white"
                                x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'">
                            </h3>
                            <p class="lg:w-1/2 w-full text-pretty text-sm text-neutral-300" x-text="slide.description"
                                x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                            <button type="button" x-cloak x-show="slide.ctaUrl !== null"
                                class="mt-2 cursor-pointer whitespace-nowrap rounded-md border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm"
                                x-text="slide.ctaText"></button>
                        </div>

                        <img class="absolute w-full h-full inset-0 object-cover text-neutral-600 dark:text-neutral-300"
                            x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                    </div>
                </template>
            </div>

            <!-- indicators -->
            <div class="absolute rounded-md bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2"
                role="group" aria-label="slides">
                <template x-for="(slide, index) in slides">
                    <button class="size-2 cursor-pointer rounded-full transition"
                        x-on:click="currentSlideIndex = index + 1"
                        x-bind:class="[currentSlideIndex === index + 1 ? 'bg-neutral-300' : 'bg-neutral-300/50']"
                        x-bind:aria-label="'slide ' + (index + 1)"></button>
                </template>
            </div>
        </div>
    </div>
</x-app-layout>