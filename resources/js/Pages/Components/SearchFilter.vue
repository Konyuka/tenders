<template>
    <div>
        <header class="sticky top-2 z-50">
            <div class="basis-1/5">
                <form id="login">
                    <div class="bg-white dark:bg-gray-800">
                        <div
                            class="container mx-auto bg-white dark:bg-gray-800 mt-10 rounded px-4"
                        >
                            <div
                                class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5"
                            >
                                <div
                                    class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center"
                                >
                                    <p
                                        class="text-lg text-gray-800 dark:text-gray-100 font-bold"
                                    >
                                        Tender Search Filters
                                    </p>
                                    <div
                                        class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400"
                                    >
                                        <i class="fas fa-search fa-4xl"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-auto pt-4">
                                <div class="container mx-auto">
                                    <form
                                        class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0"
                                    >
                                        <div class="w-full flex flex-col mb-6">
                                            <label
                                                for="FirstName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                >First Name</label
                                            >
                                            <input
                                                tabindex="0"
                                                type="text"
                                                id="FirstName"
                                                name="firstName"
                                                required
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=""
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="container mx-auto mt-10 rounded bg-gray-100 dark:bg-gray-700 w-11/12 xl:w-full"
                        >
                            <div class="xl:w-full py-5 px-8">
                                <div class="flex items-center mx-auto">
                                    <div class="container mx-auto">
                                        <div class="mx-auto xl:w-full">
                                            <p
                                                class="text-lg text-gray-800 dark:text-gray-100 font-bold"
                                            >
                                                Refine Results
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mx-auto pb-6">
                                <div
                                    class="flex items-center pb-4 border-b border-gray-300 dark:border-gray-700 px-8 text-gray-800 dark:text-gray-100"
                                >
                                    <!-- <img
                                        class="dark:hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg7.svg"
                                        alt="mail"
                                    /> -->
                                    <i
                                        class="fas fa-sliders fa-xl text-indigo-600"
                                    ></i>
                                    <!-- <img
                                        class="dark:block hidden"
                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg7dark.svg"
                                        alt="mail"
                                    /> -->
                                </div>
                                <div class="px-8">
                                    <div
                                        class="flex justify-between items-center mb-8 mt-4"
                                    >
                                        <div class="w-9/12">
                                            <p
                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                            >
                                                Include closed tenders
                                            </p>
                                        </div>
                                        <div
                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                        >
                                            <input
                                                tabindex="0"
                                                aria-labelledby="cb1"
                                                type="checkbox"
                                                name="email_comments"
                                                id="toggle1"
                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                            />
                                            <label
                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                            ></label>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center mb-8"
                                    >
                                        <div class="w-9/12">
                                            <p
                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                            >
                                                Only Funded Tenders
                                            </p>
                                        </div>
                                        <div
                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                        >
                                            <input
                                                aria-labelledby="cb2"
                                                tabindex="0"
                                                type="checkbox"
                                                name="email_job_application"
                                                id="toggle2"
                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                            />
                                            <label
                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                            ></label>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between items-center mb-8"
                                    >
                                        <div class="w-9/12">
                                            <p
                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                            ></p>
                                        </div>
                                        <div
                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                        >
                                            <input
                                                aria-labelledby="cb3"
                                                tabindex="0"
                                                type="checkbox"
                                                name="email_product_update"
                                                id="toggle3"
                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                            />
                                            <label
                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                            ></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mx-auto w-11/12 xl:w-full">
                            <div
                                class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end"
                            >
                                <button
                                    role="button"
                                    aria-label="cancel form"
                                    class="bg-gray-200 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 dark:bg-gray-700 rounded text-indigo-600 dark:text-indigo-600 px-6 py-2 text-xs mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700"
                                >
                                    Cancel
                                </button>
                                <button
                                    role="button"
                                    aria-label="Save form"
                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                                    type="submit"
                                >
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    name: "SearchFilter",
    components: {
        //   Categories,
    },
    data() {
        return {};
    },
    watch: {},
    computed: {},
    methods: {}
};
</script>

<style scoped></style>
