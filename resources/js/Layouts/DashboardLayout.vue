<template>
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div
            v-if="openSidebar"
            class="relative z-40 md:hidden"
            role="dialog"
            aria-modal="true"
        >
            <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

            <div class="fixed inset-0 flex z-40">
                <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
                <div
                    class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-700"
                >
                    <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button
                            @click="openSidebar == false"
                            type="button"
                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        >
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x -->
                            <svg
                                class="h-6 w-6 text-white"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-shrink-0 flex items-center px-4">
                        <a
                            :href="route('landing')"
                            class="font-bold-font font-bold"
                            >Bidders Portal</a
                        >
                        <!-- <img
                            class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                            alt="Workflow"
                        /> -->
                    </div>
                    <div class="mt-5 flex-1 h-0 overflow-y-auto">
                        <nav class="px-2 space-y-1">
                            <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                            <a
                                href="#"
                                class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                            >
                                <!-- Heroicon name: outline/home -->
                                <i class="fas fa-coins fa-2x text-black"></i>
                                Payments
                            </a>

                            <a
                                :href="route('dashboard')"
                                :class="
                                    this.activeMenu == 'dashboard'
                                        ? 'bg-white text-black'
                                        : 'bg-indigo-800'
                                "
                                class="mb-4 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                            >
                                <!-- Heroicon name: outline/home -->
                                <i
                                    class="fas fa-home fa-xl text-gray-200 mr-2"
                                ></i>
                                Dashboard
                            </a>

                            <a
                                :href="route('admin.payment')"
                                :class="
                                    this.activeMenu == 'admin.payment'
                                        ? 'bg-white text-black'
                                        : 'bg-indigo-800'
                                "
                                class="text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                            >
                                <!-- Heroicon name: outline/home -->
                                <i
                                    class="fas fa-coins fa-xl text-gray-200 mr-2"
                                ></i>
                                Payments
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="flex-shrink-0 w-14" aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div
                class="flex flex-col flex-grow pt-5 bg-indigo-700 overflow-y-auto"
            >
                <div class="flex items-center flex-shrink-0 px-4">
                    <a
                        :href="route('landing')"
                        class="font-bold-font font-bold text-white text-3xl"
                    >
                        Bidders Portal
                    </a>

                    <!-- <img
                        class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg"
                        alt="Workflow"
                    /> -->
                </div>
                <div class="mt-5 flex-1 flex flex-col">
                    <nav class="flex-1 px-2 pb-4 space-y-1">
                        <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
                        <a
                            :href="route('dashboard')"
                            :class="
                                this.activeMenu == 'dashboard'
                                    ? 'bg-white text-black'
                                    : 'bg-indigo-800'
                            "
                            class="mb-4 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                        >
                            <!-- Heroicon name: outline/home -->
                            <i class="fas fa-home fa-xl text-gray-200 mr-2"></i>
                            Dashboard
                        </a>

                        <a
                            v-if="admin"
                            :href="route('admin.payment')"
                            :class="
                                this.activeMenu == 'admin.payment'
                                    ? 'bg-white text-black'
                                    : 'bg-indigo-800'
                            "
                            class="mb-4 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                        >
                            <!-- Heroicon name: outline/home -->
                            <i
                                class="fas fa-coins fa-xl text-gray-200 mr-2"
                            ></i>
                            Payments
                        </a>

                        <a
                            v-if="!admin"
                            :href="route('admin.subscriptions')"
                            :class="
                                this.activeMenu == 'admin.subscriptions'
                                    ? 'bg-white text-black'
                                    : 'bg-indigo-800'
                            "
                            class="mb-4 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                        >
                            <!-- Heroicon name: outline/home -->
                            <i
                                class="fas fa-certificate fa-xl text-gray-200 mr-2"
                            ></i>
                            Subscriptions
                        </a>

                        <a
                            v-if="!admin"
                            :href="route('admin.wishlist')"
                            :class="
                                this.activeMenu == 'admin.wishlist'
                                    ? 'bg-white text-black'
                                    : 'bg-indigo-800'
                            "
                            class="text-white group flex items-center px-2 py-2 text-base font-medium rounded-md"
                        >
                            <!-- Heroicon name: outline/home -->
                            <i class="fas fa-star fa-xl text-gray-200 mr-2"></i>
                            Wishlist
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="md:pl-64 flex flex-col flex-1">
            <div
                class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow"
            >
                <button
                    @click="openSidebar == true"
                    type="button"
                    class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
                >
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-2 -->
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 12h16M4 18h7"
                        />
                    </svg>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex">
                        <form
                            class="w-full flex md:ml-0"
                            action="#"
                            method="GET"
                        >
                            <label for="search-field" class="sr-only"
                                >Search</label
                            >
                            <div
                                class="relative w-full text-gray-400 focus-within:text-gray-600"
                            >
                                <div
                                    class="absolute inset-y-0 left-0 flex items-center pointer-events-none"
                                >
                                    <!-- Heroicon name: solid/search -->
                                    <svg
                                        class="h-5 w-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </div>
                                <input
                                    id="search-field"
                                    class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm"
                                    placeholder="Search"
                                    type="search"
                                    name="search"
                                />
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                                <button
                                    @click="openProfile = !openProfile"
                                    type="button"
                                    class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    id="user-menu-button"
                                    aria-expanded="false"
                                    aria-haspopup="true"
                                >
                                    <span class="sr-only">Open user menu</span>
                                    <i
                                        class="fas fa-cog fa-2x text-indigo-600"
                                    ></i>
                                </button>
                            </div>

                            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                            <div
                                v-if="openProfile"
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu"
                                aria-orientation="vertical"
                                aria-labelledby="user-menu-button"
                                tabindex="-1"
                            >
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a
                                    :href="route('profile.show')"
                                    class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem"
                                    tabindex="-1"
                                    id="user-menu-item-0"
                                    >Your Profile</a
                                >

                                <a
                                    href=""
                                    @click.prevent="logout"
                                    class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem"
                                    tabindex="-1"
                                    id="user-menu-item-2"
                                    >Sign out</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main>
                <div class="py-6">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>

<script>
// import TendersPage from "../Pages/Components/Dashboard/TendersPage.vue";

const app = document.getElementById("app");
export default {
    name: "DashboardLayout",
    components: {
        // TendersPage,
    },
    props: {
        allPosts: Array
    },
    mounted() {
        // this.user = this.$page.props.user.name
        // this.sidebarHandler();
        if (this.user.admin == 0) {
            this.currentMenu = "membership";
        } else {
            this.currentMenu = "tenders";
        }
    },
    computed: {
        activeMenu() {
            return route().current();
        },
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
            pageData: JSON.parse(app.dataset.page),
            openProfile: false,
            openSidebar: false
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
        }
        // dropdownHandler(event) {
        //     let single = event.currentTarget.getElementsByTagName("ul")[0];
        //     single.classList.toggle("hidden");
        // },
        // sidebarHandler() {
        //     var sideBar = document.getElementById("mobile-nav");
        //     sideBar.classList.toggle("hidden");
        // }
    }
};
</script>
