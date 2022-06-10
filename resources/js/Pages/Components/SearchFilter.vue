<template>
    <div>
        <div class="w-96 h-auto">
            <div class="basis-1/5">
                <form id="login">
                    <div class="bg-white dark:bg-gray-800">
                        <div
                            class="container mx-auto bg-white dark:bg-gray-800 mt-1 rounded px-4"
                        >
                            <div
                                class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5"
                            >
                                <div
                                    class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center"
                                >
                                    <p
                                        class="font-heading-font text-xl text-gray-800 dark:text-gray-100 font-extrabold"
                                    >
                                        Tender Search Filters
                                    </p>
                                </div>
                                <p
                                    class="font-primary-font text-sm text-gray-800 dark:text-gray-100 font-medium"
                                >
                                    Fill in where required. Leave unnecessary
                                    fields as blank
                                </p>
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
                                                >Search by Keyword</label
                                            >
                                            <input
                                                @keyup.enter="searchTenders()"
                                                v-model="payload.keyword"
                                                tabindex="0"
                                                type="text"
                                                id="FirstName"
                                                name="firstName"
                                                required
                                                class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=""
                                            />
                                        </div>

                                        <div class="w-full flex flex-col mb-6">
                                            <label
                                                for="FirstName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                >Search by Region/County</label
                                            >
                                            <input
                                                @keyup.enter="searchTenders()"
                                                v-model="payload.region"
                                                tabindex="0"
                                                type="text"
                                                id="FirstName"
                                                name="firstName"
                                                required
                                                class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=""
                                            />
                                        </div>

                                        <div class="w-full flex flex-col mb-6">
                                            <label
                                                for="FirstName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                >Search by Procuring
                                                Entity</label
                                            >
                                            <input
                                                @keyup.enter="searchTenders()"
                                                v-model="payload.entity"
                                                tabindex="0"
                                                type="text"
                                                id="FirstName"
                                                name="firstName"
                                                required
                                                class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=""
                                            />
                                        </div>

                                        <div class="w-full flex flex-col mb-6">
                                            <label
                                                for="FirstName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                >Search by Tender Number</label
                                            >
                                            <input
                                                @keyup.enter="searchTenders()"
                                                v-model="payload.number"
                                                tabindex="0"
                                                type="text"
                                                id="FirstName"
                                                name="firstName"
                                                required
                                                class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=""
                                            />
                                        </div>

                                        <div class="w-full flex flex-col mb-6">
                                            <label
                                                for="FirstName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                >Search by Tender Price</label
                                            >
                                            <select
                                                v-model="payload.price"
                                                class="font-primary-font font-extrabold text-lg form-select appearance-none block w-full px-3  py-1.5 text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-700 focus:outline-none"
                                                aria-label="Default select example"
                                            >
                                                <option selected>
                                                    Choose From Options
                                                </option>
                                                <option value="1"
                                                    >KES 150</option
                                                >
                                                <option value="2"
                                                    >KES 100</option
                                                >
                                                <option value="3"
                                                    >KES 50</option
                                                >
                                            </select>
                                        </div>

                                        <div class="w-full flex flex-col mb-6">
                                            <label
                                                for="FirstName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                >Search by Closing Date</label
                                            >
                                            <input
                                                @keyup.enter="searchTenders()"
                                                v-model="payload.closing"
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

                                                <i
                                                    class="ml-5 fas fa-sliders fa-lg text-indigo-600"
                                                ></i>
                                            </p>
                                            <!-- <div
                                                class="flex items-center pb-4 border-b border-gray-300 dark:border-gray-700 px-8 text-gray-800 dark:text-gray-100"
                                            >

                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mx-auto pb-6">
                                <div class="px-8">
                                    <div
                                        class="flex justify-between items-center mb-8 mt-4"
                                    >
                                        <div class="w-9/12">
                                            <p
                                                class="font-primary-font text-sm text-gray-800 dark:text-gray-100 pb-1"
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
                                                class="font-primary-font text-sm text-gray-800 dark:text-gray-100 pb-1"
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
                                    class="font-primary-font bg-gray-200 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 dark:bg-gray-700 rounded text-red-600 dark:text-indigo-600 px-6 py-2 text-xs mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700"
                                >
                                    Clear Filters
                                </button>
                                <button
                                    @click.prevent="searchTenders"
                                    role="button"
                                    aria-label="Save form"
                                    class="font-primary-font focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                                    type="submit"
                                >
                                    Search Tenders
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SearchFilter",
    components: {
        //   Categories,
    },
    created() {},
    mounted() {
        console.log(window.location.href);

        if (localStorage.getItem("keyword") != "null") {
            this.payload.keyword = localStorage.getItem("keyword");
        } else {
            this.payload.keyword = "";
        }
        if (localStorage.getItem("region") != "null") {
            this.payload.region = localStorage.getItem("region");
        } else {
            this.payload.region = "";
        }
        if (localStorage.getItem("entity") != "null") {
            this.payload.entity = localStorage.getItem("entity");
        } else {
            this.payload.entity = "";
        }
        if (localStorage.getItem("number") != "null") {
            this.payload.number = localStorage.getItem("number");
        } else {
            this.payload.number = "";
        }
        if (localStorage.getItem("price") != "null") {
            this.payload.price = localStorage.getItem("price");
        } else {
            this.payload.price = "";
        }
        if (localStorage.getItem("closing") != "null") {
            this.payload.closing = localStorage.getItem("closing");
        } else {
            this.payload.closing = "";
        }
    },
    data() {
        return {
            payload: {
                keyword: null,
                region: null,
                entity: null,
                number: null,
                price: null,
                closing: null
            },
            siteURL: process.env.VUE_APP_APIURL
        };
    },
    watch: {},
    computed: {
        currentRoute() {
            return route().current();
        }
    },
    methods: {
        searchTenders() {
            if (this.currentRoute == "landing") {
                this.$parent.$parent.spinner = true;
            } else {
                this.$parent.spinner = true;
            }
            // setTimeout(() => ($parent.$parent.spinner = false), 10000);
            localStorage.setItem("keyword", this.payload.keyword);
            localStorage.setItem("region", this.payload.region);
            localStorage.setItem("entity", this.payload.entity);
            localStorage.setItem("number", this.payload.number);
            localStorage.setItem("price", this.payload.price);
            localStorage.setItem("closing", this.payload.closing);
            this.$inertia
                .post("/search", this.payload)
                .then(response => {
                    if (response != null) {
                        if (this.currentRoute == "landing") {
                            this.$parent.$parent.spinner = false;
                        } else {
                            this.$parent.spinner = false;
                        }
                    }
                })
                .catch(error => {
                    if (error) {
                        console.log("error");
                    }
                });
        }
    }
};
</script>

<style scoped></style>
