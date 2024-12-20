<section class=" min-h-[80vh] bg-blue-100/10">


    <div class="flex flex-col text-center py-16 space-y-8">
        <div class="space-y-2">
            <h1 class="text-4xl font-bold">A Global Community of Talent</h1>
            <p class="text-lg text-gray-700">Connect with a global tech talent network and scale faster than anyone
                else.
            </p>
        </div>
        <nav class="hidden lg:flex ">
            <div class="flex gap-16 justify-center  w-[80%] mx-auto border-b-[2px]">
                <a href="" class="pb-4 border-b-[2px] border-b-blue-900">Software Engineers</a>
                <a href="" class="pb-4 ">Data Experts</a>
                <a href="" class="pb-4 ">Product Managers</a>
                <a href="" class="pb-4 ">UI/UX Designers</a>
                <a href="" class="pb-4 ">QA Engineers</a>
            </div>
        </nav>

        <!-- Mobile view -->
        <div class="lg:hidden">
            <select name="job_title" id="" class="text-sm p-2 rounded-md  outline-none ring-1 ring-gray-400">
                <option value="software_engineer">
                    <a href="">Software Engineers</a>
                </option>
                <option value="data_expert">
                    <a href="">Data Experts</a>
                </option>
                <option value="product_managers">
                    <a href="">Product Managers</a>
                </option>
                <option value="ui-ux_designers">
                    <a href="">UI/UX Designers</a>
                </option>
                <option value="data_expert">
                    <a href="">QA Engineers</a>
                </option>
            </select>
        </div>
        <div>
            {{$slot}}
        </div>

    </div>
</section>