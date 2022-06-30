<template>
    <div>
        <div class="2xl:container 2xl:mx-auto">
            <div
                class="bg-gray-50 dark:bg-gray-800  rounded shadow-lg py-2 sm:py-5 px-2 sm:px-7"
            >
                <nav class="flex justify-between">
                    <!-- <div class="flex items-center space-x-3 lg:pr-16 pr-6">
                        <img class="cursor-pointer dark:bg-white p-1 rounded-full" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg1.svg" alt="circle" />
                        <h2 class="font-normal text-2xl leading-6 text-gray-800 dark:text-white ">OvonRueden</h2>
                    </div> -->
                    <div
                        class="hidden sm:flex space-x-5 justify-center  items-center pl-2"
                    >
                        <a
                            href="tel:254112047733"
                            class="transform transition hover:scale-125 duration-700 ease-in-out ml-5 fas fa-phone fa-2xl text-indigo-600 mr-4"
                        ></a>
                    </div>
                    <div class="-ml-24">
                        <ul class="hidden md:flex flex-auto space-x-2">
                            <!-- <a :href="route('landing')" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white bg-indigo-600 cursor-pointer px-3 py-2.5 font-normal text-xs leading-3 shadow-md rounded">Home</a> -->
                            <a
                                :href="route('landing')"
                                class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-75 duration-700 ease-in-out active:animate-ping font-primary-font focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 hover:text-white border border-white bg-indigo-200 cursor-pointer px-5 py-5 font-bold text-2xl leading-3 shadow-md rounded-md "
                            >
                                <span class="text-indigo-600">
                                    <i class="fas fa-home"></i
                                ></span>
                                Home</a
                            >
                            <a
                                @click.prevent="goToListing"
                                class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-75 duration-700 ease-in-out active:animate-ping font-primary-font focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 hover:text-white border border-white bg-indigo-200 cursor-pointer px-5 py-5 font-bold text-2xl leading-3 shadow-md rounded-md "
                                ><span class="text-indigo-600">
                                    <i class="fas fa-list-ol"></i
                                ></span>
                                Tenders Listing</a
                            >
                            <a
                                :href="route('blogs')"
                                class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-75 duration-700 ease-in-out active:animate-ping font-primary-font focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 hover:text-white border border-white bg-indigo-200 cursor-pointer px-5 py-5 font-bold text-2xl leading-3 shadow-md rounded-md "
                                ><span class="text-indigo-600">
                                    <i class="fas fa-blog"></i
                                ></span>
                                Blogs</a
                            >
                            <a
                                :href="route('')"
                                class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-75 duration-700 ease-in-out active:animate-ping font-primary-font focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 hover:text-white border border-white bg-indigo-200 cursor-pointer px-5 py-5 font-bold text-2xl leading-3 shadow-md rounded-md "
                                ><span class="text-indigo-600">
                                    <i class="fas fa-address-card"></i
                                ></span>
                                About & Contacts</a
                            >
                        </ul>
                    </div>
                    <div
                        class="hidden sm:flex space-x-5 justify-center  items-center pr-6"
                    >
                        <a
                            href="mailto:support@biddersportal.com"
                            class="transform transition hover:scale-125 duration-700 ease-in-out fas fa-envelope fa-2xl text-indigo-600"
                        ></a>
                        <!-- <a @click="openModal" href="#" class="transform transition hover:scale-125 duration-700 ease-in-out fas fa-search fa-2xl text-indigo-600"></a> -->
                    </div>
                </nav>
                <!-- for smaller devcies -->

                <div class="block md:hidden w-full sm:mt-5 mt-2">
                    <div
                        @click="openMenu = !openMenu"
                        class="cursor-pointer px-4 py-3 text-white bg-indigo-600 rounded flex justify-between items-center w-full"
                    >
                        <div class="flex space-x-2">
                            <span
                                id="s1"
                                class="font-semibold text-sm leading-3 hidden"
                                >Selected:
                            </span>
                            <p
                                id="textClicked"
                                class="capitalize font-heading-font text-xl font-extrabold leading-3 focus:outline-none hover:bg-gray-800 duration-100 cursor-pointer "
                            >
                                {{ currentMenu }}
                            </p>
                        </div>
                        <img
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg4.svg"
                            alt="down arrow"
                        />
                    </div>
                    <div v-if="openMenu" class=" relative">
                        <ul
                            id="list"
                            class="font-heading-font text-xl font-extrabold leading-4 absolute top-2  w-full rounded shadow-md"
                        >
                            <li
                                v-if="this.activeMenu != 'landing'"
                                @click="selectedMenu('landing')"
                                class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-extrabold"
                            >
                                Home
                            </li>
                            <li
                                v-if="this.activeMenu != 'listing'"
                                @click="selectedMenu('listing')"
                                class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-extrabold"
                            >
                                Tender Listing
                            </li>
                            <li
                                v-if="this.activeMenu != 'blogs'"
                                @click="selectedMenu('blogs')"
                                class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-extrabold"
                            >
                                Blogs
                            </li>
                            <li
                                v-if="this.activeMenu != 'about'"
                                @click="selectedMenu('about')"
                                class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-extrabold"
                            >
                                About & Contacts
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import Spinner from "./Components/Spinner.vue";

export default {
    name: "MainMenu",
    components: {
        // Spinner
    },
    data() {
        return {
            activeMenu: "",
            openMenu: "",
            currentMenu: "Home"
        };
    },
    mounted() {
        // console.log(route().current());

        this.activeMenu = route().current();
    },
    watch: {
        activeMenu(value) {
            if (value == "listing") {
                this.currentMenu = "Tender Listings";
            } else if (value == "blogs") {
                this.currentMenu = "Blogs";
            } else if (value == "about") {
                this.currentMenu = "About & Contacts";
            } else if (value == "landing") {
                this.currentMenu = "Home";
            } else if (value == "selected") {
                this.currentMenu = "Tender Details";
            }
        }
    },
    computed: {
        currentRoute() {
            return route().current();
        }
    },
    methods: {
        goToListing() {
            this.$parent.spinner = true;
            this.$inertia
                .get("/listing")
                .then(result => {
                    if (result) {
                        setTimeout(() => (this.$parent.spinner = false), 1000);
                    }
                })
                .catch(err => {
                    if (err) {
                    }
                });
        },
        selectedMenu(value) {
            this.activeMenu = value;
            // route("landing");
            if (value == "landing") {
                window.location = "/";
            } else {
                this.$inertia.get(value);
            }
            if (value == "listing") {
                this.currentMenu = "Tender Listings";
            } else if (value == "blogs") {
                this.currentMenu = "Blogs";
            } else if (value == "about") {
                this.currentMenu = "About & Contacts";
            } else if (value == "landing") {
                this.currentMenu = "Home";
            } else if (value == "selected") {
                this.currentMenu = "Tender Details";
            }
            // route(`${value}`);
        }
    }
};
</script>

<style scoped></style>
