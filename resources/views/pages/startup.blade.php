<x-app-layout>
    <x-carousel :slides="$slides" :autoplay="true" :showSliderBtn="false">
                <!-- Title and description -->
                <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-neutral-950/85 to-transparent px-16 py-12 text-center">
                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                    <p class="lg:w-1/2 w-full text-pretty text-sm text-neutral-300" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                    <!-- <button type="button" x-cloak x-show="slide.ctaUrl !== null" class="mt-2 cursor-pointer whitespace-nowrap rounded-md border border-white bg-transparent px-4 py-2 text-center text-xs font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-onSurfaceDarkStrong active:opacity-100 active:outline-offset-0 md:text-sm" x-text="slide.ctaText"></button> -->
                </div>

                <img class=" w-full h-full absolute inset-0 object-cover  text-neutral-600 mx-auto dark:text-neutral-300" x-bind:src="slide.image" x-bind:alt="slide.imgAlt" />
           
    </x-carousel>
</x-app-layout>