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
                <button @click="selectedTab = 'groups'" :aria-selected="selectedTab === 'groups'" :tabindex="selectedTab === 'groups' ? '0' : '-1'" :class="selectedTab === 'groups' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelGroups" class="pb-4">
                    Software Engineers
                </button>

                <button
                    @click="selectedTab = 'software'" :aria-selected="selectedTab === 'software'" :tabindex="selectedTab === 'software' ? '0' : '-1'"
                    :class="selectedTab === 'software' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelSoftware"
                    class="pb-4 ">
                    Data Experts
                </button>
                <button
                    @click="selectedTab = 'data'" :aria-selected="selectedTab === 'data'" :tabindex="selectedTab === 'data' ? '0' : '-1'"
                    :class="selectedTab === 'data' ? 'font-bold text-black border-b-2 border-blue-900 hover:border-b-2 hover:border-b-blue-800 hover:text-blue-900'" type="button" role="tab" aria-controls="tabpanelData"
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
            {{$slot}}
        </div>

    </div>
</section>