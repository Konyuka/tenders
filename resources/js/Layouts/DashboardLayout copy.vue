<template>
    <div class="flex flex-no-wrap bg-gray-50 min-h-screen">
        <!-- Sidebar starts -->
        <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->

        <div
            class="absolute border-r border-gray-100 sm:relative h-full min-h-screen bg-gray-100 z-20 p-4"
        >
            <div class="flex w-full">
                <div class="w-1/4 flex justify-center flex-col w-full">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-menu-2 cursor-pointer mt-1"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="#718096"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        @click="sidebarHandler()"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="4" y1="6" x2="20" y2="6" />
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="18" x2="20" y2="18" />
                    </svg>
                    <ul
                        v-if="admin"
                        aria-orientation="vertical"
                        class="rounded py-8 mt-4"
                    >
                        <li
                            class="cursor-pointer text-sm leading-3 tracking-normal py-1 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                        >
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-grid"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                    ></path>
                                    <rect
                                        x="4"
                                        y="4"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                    <rect
                                        x="14"
                                        y="4"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                    <rect
                                        x="4"
                                        y="14"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                    <rect
                                        x="14"
                                        y="14"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="cursor-pointer text-sm leading-3 tracking-normal mt-6 py-1 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex items-center"
                        >
                            <span class="text-gray-800">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-puzzle"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                    ></path>
                                    <path
                                        d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"
                                    ></path>
                                </svg>
                            </span>
                        </li>
                        <li
                            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-1 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none"
                        >
                            <span class="text-gray-800">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-compass"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                    ></path>
                                    <polyline
                                        points="8 16 10 10 16 8 14 14 8 16"
                                    ></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                            </span>
                        </li>
                        <li
                            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-1 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none"
                        >
                            <span class="text-gray-800">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-code"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                    ></path>
                                    <polyline points="7 8 3 12 7 16"></polyline>
                                    <polyline
                                        points="17 8 21 12 17 16"
                                    ></polyline>
                                    <line x1="14" y1="4" x2="10" y2="20"></line>
                                </svg>
                            </span>
                        </li>
                    </ul>
                    <ul
                        v-else
                        aria-orientation="vertical"
                        class="rounded py-8 mt-4"
                    >
                        <!-- <li
                            class="cursor-pointer text-sm leading-3 tracking-normal py-1 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                        >
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-grid"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                    ></path>
                                    <rect
                                        x="4"
                                        y="4"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                    <rect
                                        x="14"
                                        y="4"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                    <rect
                                        x="4"
                                        y="14"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                    <rect
                                        x="14"
                                        y="14"
                                        width="6"
                                        height="6"
                                        rx="1"
                                    ></rect>
                                </svg>
                            </div>
                        </li> -->
                    </ul>
                </div>

                <div
                    class="mt-8 w-3/4 flex justify-start flex-col pr-12 transition duration-150 ease-in-out"
                    id="mobile-nav"
                >
                    <a :href="route('landing')" class="flex items-center">
                        <!-- <img
                            class="p-1 dark:bg-white rounded-full"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg5.svg"
                            alt="circle"
                        /> -->
                        <!-- <h1
                            class=" font-normal text-md leading-6 text-gray-800 dark:text-white "
                        >
                        </h1> -->
                        <!-- <i class="fas fa-home text-indigo-600"> </i> -->
                        <span
                            class="hover:text-black text-xl text-extrabold font-primary-font text-indigo-600 p-1"
                            >Home</span
                        >
                    </a>

                    <ul
                        v-if="admin"
                        aria-orientation="vertical"
                        class="rounded py-8"
                    >
                        <li
                            @click="selectedMenu('tenders')"
                            :class="
                                this.currentMenu == 'tenders'
                                    ? 'text-indigo-700'
                                    : ''
                            "
                            class="cursor-pointer text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                        >
                            <span class="ml-2">Tenders</span>
                        </li>
                        <li
                            @click="selectedMenu('payments')"
                            :class="
                                this.currentMenu == 'payments'
                                    ? 'text-indigo-700'
                                    : ''
                            "
                            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex items-center"
                        >
                            <span class="ml-2">Payments</span>
                        </li>
                        <li
                            @click="selectedMenu('support')"
                            :class="
                                this.currentMenu == 'support'
                                    ? 'text-indigo-700'
                                    : ''
                            "
                            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none"
                        >
                            <span class="ml-2">Support</span>
                        </li>
                        <li
                            @click="selectedMenu('users')"
                            :class="
                                this.currentMenu == 'users'
                                    ? 'text-indigo-700'
                                    : ''
                            "
                            class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-6 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none"
                        >
                            <span class="ml-2">Users</span>
                        </li>
                    </ul>

                    <ul v-else aria-orientation="vertical" class="rounded py-8">
                        <!-- <li
                            @click="selectedMenu('tenders')"
                            :class="
                                this.currentMenu == 'tenders'
                                    ? 'text-indigo-700'
                                    : ''
                            "
                            class="cursor-pointer text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none"
                        >
                            <span class="ml-2">Membership</span>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar ends -->
        <div class="w-full">
            <!-- Navigation starts -->
            <nav
                class="h-16 flex items-center lg:items-stretch justify-end lg:justify-between bg-white shadow relative z-10"
            >
                <div class="hidden lg:flex w-full pr-6">
                    <div
                        class="w-1/2 h-full hidden lg:flex items-center pl-6 pr-24"
                    >
                        <div class="relative w-full">
                            <div
                                class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-search"
                                    width="16"
                                    height="16"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="10" cy="10" r="7" />
                                    <line x1="21" y1="21" x2="15" y2="15" />
                                </svg>
                            </div>
                            <input
                                class="border border-gray-100 focus:outline-none focus:border-indigo-700 rounded w-full text-sm text-gray-500 bg-gray-100 pl-12 py-2"
                                type="text"
                                placeholder="Search"
                            />
                        </div>
                    </div>
                    <div class="w-1/2 hidden lg:flex">
                        <div class="w-full flex items-center pl-8 justify-end">
                            <div
                                class="h-full w-20 flex items-center justify-center border-r border-l"
                            >
                                <div
                                    class="relative cursor-pointer text-gray-600"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-bell"
                                        width="28"
                                        height="28"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            stroke="none"
                                            d="M0 0h24v24H0z"
                                        ></path>
                                        <path
                                            d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                                        ></path>
                                        <path
                                            d="M9 17v1a3 3 0 0 0 6 0v-1"
                                        ></path>
                                    </svg>
                                    <div
                                        class="w-2 h-2 rounded-full bg-red-400 border border-white absolute inset-0 mt-1 mr-1 m-auto"
                                    ></div>
                                </div>
                            </div>
                            <div
                                class="flex items-center relative cursor-pointer"
                                @click="dropdownHandler($event)"
                            >
                                <div class="rounded-full">
                                    <ul
                                        class="p-2 w-full border-r bg-white absolute rounded left-0 shadow mt-12 sm:mt-16 hidden"
                                    >
                                        <a
                                            :href="route('profile.show')"
                                            class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center"
                                        >
                                            <div class="flex items-center">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-user"
                                                    width="18"
                                                    height="18"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                >
                                                    <path
                                                        stroke="none"
                                                        d="M0 0h24v24H0z"
                                                    />
                                                    <circle
                                                        cx="12"
                                                        cy="7"
                                                        r="4"
                                                    />
                                                    <path
                                                        d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                                                    />
                                                </svg>
                                                <span class="text-sm ml-2"
                                                    >My Profile</span
                                                >
                                            </div>
                                        </a>
                                        <li
                                            @click="logout"
                                            class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mt-2"
                                        >
                                            <div class="flex items-center">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-logout"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                >
                                                    <path
                                                        stroke="none"
                                                        d="M0 0h24v24H0z"
                                                    />
                                                    <path
                                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                                                    />
                                                    <path
                                                        d="M7 12h14l-3 -3m0 6l3 -3"
                                                    />
                                                </svg>
                                                <span class="text-sm ml-2"
                                                    >Sign out</span
                                                >
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="relative">
                                        <div
                                            class="flex justify-around py-10 rounded-full h-10 w-10 object-cover"
                                        >
                                            <i class="fas fa-user fa-xl"></i>
                                        </div>
                                        <!-- <img class="rounded-full h-10 w-10 object-cover" src="https://downloader.la/temp/[Downloader.la]-6246c91bbab39.jpg" alt="avatar" /> -->
                                        <!-- <div class="w-2 h-2 rounded-full bg-green-400 border border-white absolute inset-0 mb-0 mr-0 m-auto"></div> -->
                                    </div>
                                </div>
                                <p class="text-gray-800 text-sm mx-3">
                                    Account Setting
                                </p>
                                <div class="cursor-pointer text-gray-600">
                                    <svg
                                        aria-haspopup="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-chevron-down"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="text-gray-600 mr-8 visible lg:hidden relative"
                    @click="dropdownHandler($event)"
                >
                    <ul
                        class="p-2 w-40 border-r bg-white absolute rounded right-0 shadow mt-12 hidden"
                    >
                        <li
                            class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center"
                        >
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-user"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="7" r="4" />
                                    <path
                                        d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                                    />
                                </svg>
                                <span class="text-sm ml-2">My Profile</span>
                            </div>
                        </li>
                        <li
                            @click="logout"
                            class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mt-2"
                        >
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-logout"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                                    />
                                    <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                </svg>
                                <span class="text-sm ml-2">Sign out</span>
                            </div>
                        </li>
                    </ul>
                    <svg
                        aria-label="Main Menu"
                        aria-haspopup="true"
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-menu cursor-pointer"
                        width="30"
                        height="30"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="4" y1="8" x2="20" y2="8" />
                        <line x1="4" y1="16" x2="20" y2="16" />
                    </svg>
                </div>
            </nav>

            <!-- Navigation ends -->
            <div v-if="admin" class="py-1 h-64 px-6">
                <TendersPage v-if="currentMenu == 'tenders'" />
                <PaymentsPage v-if="currentMenu == 'payments'" />
                <SupportPage v-if="currentMenu == 'support'" />
                <UsersPage v-if="currentMenu == 'users'" />
            </div>

            <div
                v-else
                class="container mx-auto py-10 h-64 md:w-4/5 w-11/12 px-6"
            >
                <MembersPage v-if="currentMenu == 'membership'" />
            </div>
        </div>
    </div>
</template>

<script>
import TendersPage from "../Pages/Components/Dashboard/TendersPage.vue";
import PaymentsPage from "../Pages/Components/Dashboard/PaymentsPage.vue";
import SupportPage from "../Pages/Components/Dashboard/SupportPage.vue";
import UsersPage from "../Pages/Components/Dashboard/UsersPage.vue";

import MembersPage from "../Pages/Components/Dashboard/Members/MembersPage.vue";

const app = document.getElementById("app");
export default {
    name: "DashboardLayout",
    components: {
        TendersPage,
        PaymentsPage,
        SupportPage,
        UsersPage,
        MembersPage
    },
    props: {
        allPosts: Array
        // payments: Array
        // initialPage: JSON.parse(app.dataset.page),
    },
    mounted() {
        // this.user = this.$page.props.user.name
        this.sidebarHandler();
        if (this.user.admin == 0) {
            this.currentMenu = "membership";
        } else {
            this.currentMenu = "tenders";
        }
    },
    computed: {
        posts() {
            return this.pageData.props.allPosts;
        },
        payments() {
            return this.pageData.props.payments;
        },
        user() {
            return this.pageData.props.user;
        },
        admin() {
            if (this.user.admin == 0) {
                return false;
            } else {
                return true;
            }
        }
    },
    data() {
        return {
            currentMenu: "",
            pageData: JSON.parse(app.dataset.page)
        };
    },
    methods: {
        selectedMenu(Value) {
            this.currentMenu = Value;
        },
        logout() {
            axios.post(route("logout").url()).then(response => {
                window.location = "/";
            });
        },
        dropdownHandler(event) {
            let single = event.currentTarget.getElementsByTagName("ul")[0];
            single.classList.toggle("hidden");
        },
        sidebarHandler() {
            var sideBar = document.getElementById("mobile-nav");
            sideBar.classList.toggle("hidden");
        }
    }
};
</script>
