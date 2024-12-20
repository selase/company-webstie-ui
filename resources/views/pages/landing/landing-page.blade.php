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
</style>
@php
    $talent_card_content = [
        [
            "image" => '<img src="' . asset('images/software_engineers.svg') . '" alt="software-engineer logo"/>',
            "h1" => "Software Engineers",
            "p" => "Exceptional software engineers, coders, and architects with expertise across hundreds of technologies.",
            'border-left' => ""
        ],
        [
            "image" => '<img src="' . asset('images/data_experts.svg') . '" alt="data_experts logo"/>',
            "h1" => "Data Experts",
            "p" => "Data scientists, data engineers, and data analysts with expertise in building, maintaining, and scaling data infrastructures.",
            'border-left' => "border-l-[1px] border-blue-900"
        ],
        [
            "image" => '<img src="' . asset('images/ai_experts.svg') . '" alt="ai_experts logo"/>',
            "h1" => "AI Experts",
            "p" => "AI specialists, machine learning engineers, and researchers with proficiency in advanced AI technologies and algorithms.",
            'border-left' => "border-l-[1px] border-blue-900"
        ],
        [
            "image" => '<img src="' . asset('images/QA_engineers.svg') . '" alt="QA_engineers logo"/>',
            "h1" => "QA Engineers",
            "p" => "Manual and automation QA engineers with expertise in variety of tools, techniques and testing strategies.",
            'border-left' => ""
        ],
        [
            "image" => '<img src="' . asset('images/UX-UI_designers.svg') . '" alt="UI-UX_managers logo"/>',
            "h1" => "Product Managers",
            "p" => "Product owners, product managers, and scrum masters with expertise in numerous industries industries like banking, healthcare, fintech, and more.",
            'border-left' => "border-l-[1px] border-blue-900"
        ],
        [
            "image" => '<img src="' . asset('images/product_managers.svg') . '" alt="product_managers logo"/>',
            "h1" => "Product Designers",
            "p" => "Product designers and UX/UI engineers with expertise in creating an exceptional customer experience through creative solutions.",
            'border-left' => "border-l-[2px] border-blue-900"
        ]
    ];
    $team_card_content = [
        [
            "image" => '<img src=" ' . asset('images/fast.svg') . '" alt="fast">',
            "h1" => 'Hire Fast',
            "p" => 'Hire in less than a week  utilize our expert matching to reduce your time-to-hire and move fast.'
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
            'border' => 'lg:border-r-[1px] lg:border-[#2196f3]/80'
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
    <section
        class="flex pt-20 sm:pt-24 sm:justify-center  min-h-[80vh] bg-gradient-to-b from-[#102257] via-[#071235 ] to-[#070f26]">
        <div class="sm:flex sm:w-[80%] space-x-6">
            <div class="px-6 space-y-8 py-10  lg:w-[50%]">
                <h1 class="text-5xl font-bold text-white/90 w-64 sm:w-full ">Hire Top Talent for Contract Engineering
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
                <img src="{{asset('images/globe.jpeg')}}" alt="globe" class="w-[100%] lg:h-[80%] xl:h-[100%]">
            </div>
        </div>
    </section>

    <!-- Trusted product and engineers section -->
    <section class=" min-h-[20vh] bg-blue-100/10 f">
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
    <section class="min-h-[40vh] bg-blue-100/10 flex flex-col items-center pt-10 pb-20">
        <h1 class="text-5xl text-center font-[200] text-[#304040] mb-2">Leverage a Global Talent Network</h1>
        <div class="px-4 space-y-4 mt-8 grid  md:grid-cols-2 lg:grid-cols-3 lg:w-[80%]">
            @foreach ($talent_card_content as $card)

                <div class="space-y-4 group gradient-bottom-border pb-6 sm:px-3 sm:{{$card['border-left']}}">
                    <div>
                        {!! $card['image'] !!}
                    </div>
                    <h1 class="text-xl max-w-2 font-bold text-black/80">{{$card['h1']}}</h1>
                    <p class="mb-4">
                        {{$card['p']}}
                    </p>
                    <a href="#"
                        class="flex space-x-2 hidden group-hover:flex  transform transition-transform duration-300 ease-out ease-in group-hover:translate-y-[-5px] mt-8 items-center">
                        <p class=" text-blue-500 ">Learn More</p>
                        <span class="text-blue-500 text-3xl">&#10230;</span>
                    </a>
                </div>
            @endforeach

        </div>
    </section>
    <!-- Team section-->
    <section class="min-h-[80vh] flex bg-blue-100/20 px-4 pt-8 pb-20 lg:justify-center">
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
                            {!!$card['image']!!}
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
    <div
        class=" min-h-[80vh] bg-gradient-to-b from-[#070f26] via-[#071235 ] to-[#102257] flex flex-col justify-between items-center space-y-40 px-4">
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
    <x-job-layout>
        <div
            class="flex flex-col space-y-10  items-center lg:space-x-8 px-4 lg:w-[80%] lg:mx-auto lg:justify-between lg:flex-row flex-wrap lg:space-y-0">
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

        </div>

    </x-job-layout>
    <section class="min-h-[60vh] bg-gray-100">
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
    <section class="">
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
    <section class="bg-blue-900/90 h-[50vh] flex flex-col justify-center items-center space-y-6">
        <div class="text-center space-y-1">
            <h1 class="text-4xl text-white font-bold">Ready to Hire?</h1>
            <p class="text-lg text-white/90 ">Enhancing your engineer teams start here.</p>
        </div>
        <a href="#"
            class="ring-1 rounded ring-white text-white p-2 hover:bg-white hover:shadow-sm hover:text-blue-900/90">Start
            Hiring Now</a>
    </section>

</x-app-layout>