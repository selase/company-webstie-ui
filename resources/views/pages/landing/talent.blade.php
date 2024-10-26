<style>
    .gradient-bottom-border {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-image: linear-gradient(to right, #e0f7fa, #2196f3, #e0f7fa) 1;
    }
</style>
@php
    $card_content = [
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
@endphp
<section class="min-h-[40vh] bg-blue-100/10 flex flex-col items-center pt-10 pb-20">
    <h1 class="text-5xl text-center font-[200] text-[#304040] mb-2">Leverage a Global Talent Network</h1>
    <div class="px-4 space-y-4 mt-8 grid  md:grid-cols-2 lg:grid-cols-3 lg:w-[80%]">
        @foreach ($card_content as $card)

            <div class="space-y-4 group gradient-bottom-border pb-6 sm:px-3 sm:{{$card['border-left']}}">
                <div>
                    {!! $card['image'] !!}
                </div>
                <h1 class="text-xl max-w-2 font-bold text-black/80">{{$card['h1']}}</h1>
                <p class="mb-4">
                    {{$card['p']}}
                </p>
                <a href="#"
                    class="flex space-x-2 hidden group-hover:flex  transform transition-transform duration-300 ease-out ease-in group-hover:translate-y-[-5px] mt-8">
                    <p class=" text-blue-500 ">Learn More</p>
                    <svg width="30" height="30" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <line x1="10" y1="50" x2="70" y2="50" stroke="blue" stroke-width="4" />
                        <polygon points="70,30 90,50 70,70" fill="blue" />
                    </svg>

                </a>
            </div>
        @endforeach

    </div>
</section>