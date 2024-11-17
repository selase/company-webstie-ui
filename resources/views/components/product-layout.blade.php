<section class="bg-svg-bg-image bg-no-repeat bg-[200%] bg-bottom bg-blend-darken bg-white  min-h-[80vh] bg-blue-100/10">
    <div class="flex flex-col  py-16 space-y-8">
        <h1 class="text-5xl font-bold w-[80%] mx-auto">Pay global contractors without setting up local entities</h1>
        <nav class="hidden lg:flex w-[80%] mx-auto">
            <div class="flex gap-16 justify-between  w-[60%]  border-b-[2px] text-2xl text-green-500">
                <a href="" class="pb-4 border-b-[4px] border-b-green-500">Easy</a>
                <a href="" class="pb-4 border-b-[2px] border-b-green-200">Flexible</a>
                <a href="" class="pb-4 border-b-[2px] border-b-green-200">Reliable</a>
                <a href="" class="pb-4 border-b-[2px] border-b-green-200">Complaint</a>
                <a href="" class="pb-4 border-b-[2px] border-b-green-200">Low Risk</a>
            </div>
        </nav>

        <!-- Mobile view -->
        <div class="lg:hidden">
            <select name="job_title" class="text-sm p-2 rounded-md  outline-none ring-1 ring-gray-400">
                <option value="software_engineer">
                    Easy
                </option>
                <option value="data_expert">
                    Flexible
                </option>
                <option value="product_managers">
                    Reliable
                </option>
                <option value="ui-ux_designers">
                    Complaint
                </option>
                <option value="data_expert">
                    Low Risk
                </option>
            </select>
        </div>
        <div>
            {{$slot}}
        </div>

    </div>
</section>