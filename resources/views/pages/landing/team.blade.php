@php
    $card_content = [
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
    $card_content2 = [
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
                        <svg width=" 30" height="30" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <line x1="10" y1="50" x2="70" y2="50" stroke="blue" stroke-width="4" />
                            <polygon points="70,30 90,50 70,70" fill="blue" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="hidden lg:block h-[40vh] w-[40vw]">
                <img src="{{asset('images/map.svg')}}" alt="map">
            </div>
        </div>
        <div class="pt-20 space-y-10 lg:flex lg:space-x-8 lg:flex justify-between w-full ">
            @foreach ($card_content as $card)
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
        <div class="lg:grid lg:grid-cols-3 pt-12 space-y-8">
            @foreach ($card_content2 as $card)
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