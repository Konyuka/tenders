<template>
    <div class="h-screen">
        <body class="overflow-x-hidden antialiased flex flex-col h-screen">
            <TopBanner />
            <MainMenu />

            <div class="text-gray-600 body-font ">
                <!-- <header class="sticky top-2 z-50">
                    <button
                        @click="modal = true"
                        class="flex mx-auto mt-10 text-white bg-indigo-600 font-heading-font font-extrabold border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                    >
                        Tenders Search Filters
                    </button>
                </header> -->

                <main id="top" class="sm:px-5 py-4 mx-auto">
                    <div class="flex flex-col text-center w-full mb-6">
                        <h2
                            class="text-xl text-indigo-500 tracking-widest font-medium title-font m-5"
                        >
                            BIDDERS PORTAL
                        </h2>
                        <!-- <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">All Tenders Listing</h1> -->
                    </div>

                    <div class="flex flex-row my-5 mx-5">
                        <div class="sm:w-4/5 w-full sm:mr-5 min-h-screen">
                            <div class="w-full bg-white dark:bg-gray-800">
                                <div
                                    class="container flex flex-col items-center px-6 py-5 mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0 "
                                >
                                    <div class="-mx-2"></div>

                                    <div
                                        class="text-gray-500 dark:text-gray-400"
                                    >
                                        Page
                                        <span
                                            class="font-medium text-gray-700 dark:text-gray-100"
                                            >{{ page }} -
                                            {{ pages.length }}</span
                                        >
                                        of
                                        <span
                                            class="text-indigo-600 font-primary-font ml-1 text-xl"
                                            >{{ this.Posts.length }}</span
                                        >
                                        Tenders
                                    </div>
                                </div>
                            </div>
                            <div class="columns-1">
                                <a
                                    v-for="(post, i) in displayedPosts"
                                    :key="post._id"
                                    :href="route('selected', post._id)"
                                    class="group bg-white border-2 mt-1 my-2 border-indigo-600 shadow-xl transform transition hover:scale-75 duration-700 hover:shadow-2xl p-5 md:w-full flex flex-col min-h-2xl  items-start"
                                >
                                    <div class="flex justify-between w-full">
                                        <div
                                            class="text-xs sm:text-lg font-heading-font font-extrabold"
                                        >
                                            Posted:
                                            <span
                                                class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-bold tracking-widest"
                                            >
                                                {{ ago(post.created_at) }}</span
                                            >
                                        </div>
                                        <div
                                            class="text-xs sm:text-lg font-heading-font font-extrabold"
                                            v-if="expired(post)"
                                        >
                                            Last date of Bid:
                                            <span
                                                class="inline-block py-1 px-2 rounded bg-red-50 text-red-500 text-xs font-bold tracking-widest"
                                            >
                                                Tender Closed
                                            </span>
                                        </div>
                                        <div
                                            v-else
                                            class="text-xs sm:text-lg font-heading-font font-extrabold"
                                        >
                                            Last Day of Bid:
                                            <span
                                                class="inline-block py-1 px-2 rounded bg-green-100 text-green-500 text-xs font-bold tracking-widest"
                                            >
                                                {{
                                                    // togoFormat(post.expiry)
                                                    dateFormat(post.expiry)
                                                }}</span
                                            >
                                        </div>
                                    </div>

                                    <p
                                        class="text-xs sm:text-lg mt-2 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold"
                                    >
                                        <!-- <span
                                            class="mb-2 inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-lg font-extrabold font-heading-font tracking-widest"
                                        >
                                        </span> -->
                                        <span
                                            class="rounded bg-white sm:bg-indigo-50 text-indigo-500 text-md font-extrabold font-heading-font tracking-widest mr-2"
                                        >
                                            <!-- # {{ i + 1 }} # -->
                                            {{ postNumber(i) }}
                                            <!-- # {{  cnt }} -->
                                            <!-- {{ updateCnt(i) }} -->
                                        </span>
                                        {{ post.tender_brief }}
                                    </p>

                                    <div
                                        class="flex items-center flex-wrap mt-4 border-b-2 border-gray-100 w-full"
                                    >
                                        <span
                                            class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0  leading-none pr-3 py-1 border-r-2 border-gray-200"
                                        >
                                            <i
                                                class="w-4 h-4 mr-1 fas fa-coins text-indigo-600"
                                            ></i>
                                            {{ post.funded_by }}
                                        </span>
                                        <span
                                            class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200"
                                        >
                                            <i
                                                class="w-4 h-4 mr-1 fas fa-location-crosshairs text-indigo-600"
                                            ></i>
                                            <!-- {{ post.country }} -->
                                            Kenya
                                        </span>
                                        <span
                                            class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200"
                                        >
                                            <i
                                                class="w-4 h-4 mr-1 fas fa-money-bill-transfer text-indigo-600"
                                            ></i>
                                            <!-- {{ post.country }} -->
                                            KES
                                            <span
                                                class="ml-1 text-green-500 font-heading-font font-extrabold text-xs sm:text-lg"
                                            >
                                                {{ amount(post.created_at) }}
                                            </span>
                                        </span>
                                    </div>

                                    <div
                                        class="mt-4 flex justify-between w-full"
                                    >
                                        <div>
                                            <a
                                                class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold"
                                                >Tender Details
                                                <svg
                                                    class="w-4 h-4 ml-2"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    fill="none"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                >
                                                    <path d="M5 12h14"></path>
                                                    <path
                                                        d="M12 5l7 7-7 7"
                                                    ></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <!-- <div class="justify-items-end">
                                            <button
                                                @click="purchase(post._id)"
                                                class="transform transition hover:scale-125 duration-300 inline-flex items-center py-2 px-2 text-sm font-medium text-white bg-indigo-600 rounded-sm border border-gray-300 hover:bg-green-500 hover:text-white dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                            >
                                                Express Purchase
                                            </button>
                                        </div> -->
                                    </div>
                                </a>
                            </div>

                            <footer class="flex justify-around mt-4">
                                <button
                                    @click="page--"
                                    v-bind:class="disableButton"
                                    class="inline-flex items-center py-4 px-6 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >
                                    Previous
                                </button>

                                <button v-if="page == 1"></button>

                                <div
                                    class="bg-white h-2 py-1 rounded text-center"
                                >
                                    <div
                                        id="otp"
                                        class="flex flex-row justify-center text-center px-2 mt-1"
                                    >
                                        <input
                                            @keyup.enter="setPageNumber"
                                            v-model="jumpPage"
                                            class="text-xs m-2 border h-10 w-10 text-center form-control rounded"
                                            type="text"
                                            id="fourth"
                                        />
                                    </div>

                                    <div
                                        class="flex justify-center text-center mt-1"
                                    >
                                        <a
                                            @click.prevent="setPageNumber"
                                            href=""
                                            class="rounded bg-gray-200 py-1 px-1 flex items-center text-gray-500 hover:text-indigo-500 cursor-pointer hover:underline"
                                            ><span
                                                class="text-sm sm:text-lg font-bold"
                                                >Jump To Page
                                                <i
                                                    class="fas fa-caret-right"
                                                ></i></span
                                            ><i
                                                class="bx bx-caret-right ml-1"
                                            ></i
                                        ></a>
                                    </div>

                                    <div
                                        class="text-xs sm:text-lg text-gray-500 dark:text-gray-400"
                                    >
                                        Page
                                        <span
                                            class="font-medium text-gray-700 dark:text-gray-100"
                                            >{{ page }} -
                                            {{ pages.length }}</span
                                        >
                                        of
                                        <span
                                            class="text-indigo-600 font-primary-font ml-1 text-xs sm:text-xl"
                                            >{{ this.Posts.length }}</span
                                        >
                                        tenders
                                    </div>
                                </div>

                                <button
                                    v-if="page == this.pages.length"
                                ></button>

                                <!-- <button
                                    @click.prevent="setPageNumber"
                                    v-if="switchToJump && jumpPage != ''"
                                    class="inline-flex items-center py-4 px-6 ml-3 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >
                                    Jump to Page {{ jumpPage }}
                                </button> -->

                                <button
                                    @click="page++"
                                    v-if="
                                        page < pages.length &&
                                            switchToJump == false
                                    "
                                    class="inline-flex items-center py-4 px-6 ml-3 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >
                                    Next
                                </button>

                                <!-- <button
                                    @click="scroll"
                                    class="inline-flex items-center py-4 px-6 ml-3 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >
                                    scroll
                                </button> -->
                            </footer>
                            <div class="mt-6 w-full bg-white dark:bg-gray-800">
                                <div
                                    class="container flex flex-col items-center px-6 py-5 mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0 "
                                >
                                    <div class="-mx-2"></div>

                                    <!-- <div
                                        class="text-gray-500 dark:text-gray-400"
                                    >
                                        Page
                                        <span
                                            class="font-medium text-gray-700 dark:text-gray-100"
                                            >{{ page }} -
                                            {{ pages.length }}</span
                                        >
                                        of
                                        <span
                                            class="text-indigo-600 font-primary-font ml-1 text-xl"
                                            >{{ this.Posts.length }}</span
                                        >
                                        tenders
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="hidden sm:flex  p-5 rounded-lg">
                            <SearchFilter />
                        </div>
                    </div>
                </main>
            </div>

            <Spinner v-if="spinner" />
            <div v-if="Posts != null">
                <MainFooter />
            </div>
        </body>
    </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";
import SearchFilter from "./Components/SearchFilter.vue";
import Spinner from "./Components/Spinner.vue";
import dateFormat from "dateformat";

import Vue from "vue";
import Vue2Filters from "vue2-filters";
import Button from "../Jetstream/Button.vue";
Vue.use(Vue2Filters);

// window.$ = window.jQuery = require('jquery')
import $ from "jquery";

export default {
    name: "Listing",
    mixins: [Vue2Filters.mixin],
    props: {
        Posts: "",
        Amount: String
    },
    components: {
        Spinner,
        TopBanner,
        MainMenu,
        MainFooter,
        SearchFilter,
        Button
    },
    watch: {
        Posts() {
            this.setPages();
        },
        page() {
            this.scroll();
        },
        jumpPage(value) {
            if (value == "") {
                this.switchToJump = false;
            } else {
                this.switchToJump = true;
            }
        }
    },
    mounted() {
        // console.log(this.$route.name);
        if (this.dateChangeFormat) {
            var given = moment(this.formatedDate, "YYYY-MM-DD");
        } else {
            var given = moment(this.post.expiry, "YYYY-MM-DD");
        }
        var current = moment().startOf("day");
        var diff = moment.duration(current.diff(given)).asDays();

        if (diff < 0) {
            this.postExpired = true;
        } else {
            this.postExpired = false;
        }

        this.setPages();
    },
    computed: {
        disableButton() {
            return this.page == 1 ? "cursor-not-allowed" : "";
        },
        displayedPosts() {
            return this.paginate(this.Posts);
        }
    },
    data() {
        return {
            switchToJump: false,
            spinner: false,
            formatedDate: "",
            postExpired: false,
            page: 1,
            perPage: 10,
            pages: [],
            jumpPage: "",
            cnt: "",
            count: ""
        };
    },
    methods: {
        purchase(value) {
            alert("check");
            this.$inertia.post(`/checkout/${value}`);
        },
        amount(value) {
            var given = moment(value, "YYYY-MM-DD");
            var current = moment().startOf("day");
            var diff = moment.duration(current.diff(given)).asDays();
            console.log(diff);
            if (diff <= 10) {
                return 150;
            } else if (diff >= 11 && diff <= 20) {
                return 100;
            } else {
                return 50;
            }
        },
        postNumber(i) {
            // console.log i;
            // alert('this')
            if (this.page == 1) {
                this.count = parseInt(i + 1);
                return i + 1;
            } else {
                var tens = (this.page - 1) * 10;
                this.count = tens;
                return tens + i + 1;
            }
            // else if (this.page == 2) {
            //     // this.cnt = parseInt(i + 10);
            //     return i + 10;
            // }
        },
        updateCnt(i) {
            // this.cnt = i * this.Posts.length;
            console.log(i);
        },
        scroll() {
            $("html, body").animate(
                {
                    scrollTop: $("#top").offset().top
                },
                2000
            );
            this.switchToJump = false;
        },
        setPageNumber() {
            this.page = this.jumpPage;
            this.jumpPage = "";

            this.scroll();
        },
        setPages() {
            let numberOfPages = Math.ceil(this.Posts.length / this.perPage);
            for (let index = 1; index <= numberOfPages; index++) {
                this.pages.push(index);
            }
            this.scroll();
        },
        paginate(Posts) {
            let page = this.page;
            let perPage = this.perPage;
            let from = page * perPage - perPage;
            let to = page * perPage;
            return Posts.slice(from, to);
        },
        dateChangeFormat(value) {
            const togo = moment(value).fromNow(true);
            if (togo == "Invalid date") {
                return true;
            } else {
                return false;
            }
        },
        togoFormat(value) {
            var length = 10;
            var myString = value;
            var myTruncatedString = myString.substring(0, length);

            var str = myTruncatedString;
            var daycut = str.substring(0, 2);
            var monthcut = str.substring(5, 3);

            String.prototype.replaceAt = function(index, replacement) {
                return (
                    this.substring(0, index) +
                    replacement +
                    this.substring(index + replacement.length)
                );
            };
            const changeDay = myTruncatedString.replaceAt(0, monthcut);
            const finalDate = changeDay.replaceAt(3, daycut);
            this.formatedDate = finalDate;

            return moment(finalDate).fromNow(true);
        },
        getDifferenceInDays(date1, date2) {
            // const diffInMs = Math.abs(date2 - date1);
            const diffInMs = date2 - date1;
            return diffInMs / (1000 * 60 * 60 * 24);
        },
        checkDateExpryFormat(value) {
            var str = value;
            var daycut = str.substring(0, 2);
            var monthcut = str.substring(5, 3);

            String.prototype.replaceAt = function(index, replacement) {
                return (
                    this.substring(0, index) +
                    replacement +
                    this.substring(index + replacement.length)
                );
            };
            const changeDay = value.replaceAt(0, monthcut);
            const finalDate = changeDay.replaceAt(3, daycut);
            return finalDate;
        },
        expired(post) {
            const date1 = new Date();
            const date2 = new Date(this.checkDateExpryFormat(post.expiry));

            var diff = this.getDifferenceInDays(date1, date2);

            if (diff < 0) {
                return true;
            } else {
                return false;
            }
        },
        dateFormat(value) {
            var length = 10;
            var myString = value;
            var myTruncatedString = myString.substring(0, length);

            // console.log(myTruncatedString);
            var str = myTruncatedString;
            var daycut = str.substring(0, 2);
            var monthcut = str.substring(5, 3);

            String.prototype.replaceAt = function(index, replacement) {
                return (
                    this.substring(0, index) +
                    replacement +
                    this.substring(index + replacement.length)
                );
            };
            const changeDay = myTruncatedString.replaceAt(0, monthcut);
            const finalDate = changeDay.replaceAt(3, daycut);
            this.formatedDate = finalDate;

            // return moment(finalDate, "YYYY-MM-DD");
            return dateFormat(finalDate, "mmmm dS yyyy");
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        togo(value) {
            return moment(value).fromNow();
        },
        ago(value) {
            return moment(value).fromNow();
        },
        clearFilters() {},
        loadFilters() {}
    }
};
</script>

<style scoped></style>
