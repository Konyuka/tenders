<template>
    <div class="h-auto">
        <div class="overflow-y-hidden antialiased">
            <div class="flex flex-col">
                <!-- <TopBanner /> -->
                <MainMenu class="sticky top-0 z-50" />

                <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 py-10 mx-auto">
                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                            <div
                                class="w-full h-full lg:pr-10 lg:py-6 mb-6 lg:mb-0"
                            >
                                <a
                                    href="#"
                                    class="text-sm title-font text-gray-500 tracking-widest"
                                    >Tender Brief</a
                                >
                                <h1
                                    class="text-gray-500 text-sm title-font font-bold my-4 font-heading-font"
                                >
                                    {{ post.tender_brief }}
                                </h1>
                                <div class="flex mb-4">
                                    <a
                                        class="flex-grow text-indigo-500 border-b-2 border-indigo-600 py-2 text-lg px-1 font-heading-font font-extrabold"
                                        >Tender Description</a
                                    >
                                    <!-- <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
                <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Details</a> -->
                                </div>
                                <div class="flex justify-center m-5">
                                    <a
                                        @click="purchase"
                                        class="cursor-pointer transform transition hover:scale-75 duration-700 ease-in-out bg-indigo-600 hover:bg-gray-200 text-white hover:text-black text-sm font-extrabold mr-2 px-3 py-2 rounded dark:bg-blue-200 dark:text-blue-800"
                                        >Purchase Tender to view Work Details</a
                                    >
                                </div>
                                <div
                                    class="grid grid-cols-3 gap-4 h-52 place-content-center bg-gradient-to-b from-indigo-100 to-indigo-300"
                                >
                                    <div></div>
                                    <div
                                        class="object-none object-center w-full h-full min-w-full min-h-full"
                                    >
                                        <div class="flex justify-center">
                                            <!-- <h2>Unlock</h2> -->
                                            <i
                                                class="fas fa-user-lock fa-8x text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-600"
                                            ></i>
                                            <!-- <img
                                                src="/img/lock.jpg"
                                                alt="lock"
                                            /> -->
                                        </div>
                                    </div>
                                    <!-- <div class="invisible ...">02</div> -->
                                    <div></div>
                                </div>

                                <!-- <p
                                    class="invisible leading-relaxed mb-4 text-sm font-primary-font"
                                >
                                    {{ post.work_detail }}
                                </p> -->
                                <div
                                    class="text-sm sm:text-lg flex border-t border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Competition Type</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        <span
                                            class="ml-auto text-gray-900 font-primary-font"
                                        >
                                            {{ post.competition_type }}
                                            <!-- <a :href="route('checkout', post._id)" class="bg-indigo-400 hover:bg-indigo-600 text-white  text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Purchase Tender to view</a> -->
                                        </span>
                                    </span>
                                </div>
                                <div
                                    class="text-sm sm:text-lg flex border-t border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Funded By</span
                                    >
                                    <span
                                        class="ml-auto text-gray-900 font-primary-font"
                                    >
                                        {{ post.funded_by }}
                                        <!-- <a :href="route('checkout', post._id)" class="bg-indigo-400 hover:bg-indigo-600 text-white  text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Purchase Tender to view</a> -->
                                    </span>
                                </div>
                                <div
                                    class="text-sm sm:text-lg flex border-t mb-6 border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Tender Value in USD</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        <a
                                            @click="purchase"
                                            class="cursor-pointer transform transition hover:scale-125 duration-700 ease-in-out bg-indigo-600 hover:bg-gray-200 text-white hover:text-black text-xs sm:text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800"
                                            >Purchase to view</a
                                        >
                                    </span>
                                </div>
                                <div
                                    class="text-sm sm:text-lg flex border-t mb-6 border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Contact & Documents</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        <a
                                            @click="purchase"
                                            class="cursor-pointer transform transition hover:scale-125 duration-700 ease-in-out bg-indigo-600 hover:bg-gray-200 text-white hover:text-black text-xs sm:text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800"
                                            >Purchase to view</a
                                        >
                                    </span>
                                </div>
                                <div
                                    class="text-sm sm:text-lg flex border-t mb-6 border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Date Posted
                                        <span
                                            class="bg-green-200 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300"
                                        >
                                            <svg
                                                class="mr-1 w-3 h-3"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                            {{ ago }}
                                        </span>
                                    </span>
                                    <span
                                        class="ml-auto text-gray-900 font-primary-font"
                                        >{{ formatDate(post.created_at) }}</span
                                    >
                                </div>
                                <div
                                    class="text-sm sm:text-lg flex border-t mb-6 border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Last Date of Bid

                                        <span
                                            v-if="this.postExpired"
                                            class="font-heading-font bg-red-200 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300"
                                        >
                                            <svg
                                                class="mr-1 w-3 h-3"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                            <div>
                                                Tender Closed
                                            </div>
                                        </span>
                                    </span>
                                    <!-- <span
                                        v-if="!dateChangeFormat"
                                        class="ml-auto text-gray-900 font-primary-font"
                                        >{{ formatDate(post.expiry) }}</span
                                    > -->
                                    <span
                                        class="ml-auto text-gray-900 font-primary-font"
                                        >{{ finalDateFormat(this.post.expiry) }}
                                    </span>
                                </div>
                                <div
                                    class="text-sm sm:text-lg flex border-t mb-6 border-indigo-300 py-2"
                                >
                                    <span
                                        class="text-gray-500 font-extrabold font-heading-font"
                                        ><i
                                            class="mr-10 fas fa-angles-right text-indigo-600"
                                        ></i>
                                        Country</span
                                    >
                                    <span
                                        class="ml-auto text-gray-900 font-primary-font"
                                    >
                                        Kenya
                                        <!-- {{ post.country }} -->
                                    </span>
                                </div>

                                <div class="flex">
                                    <span
                                        class="title-font font-medium text-xl sm:text-2xl text-gray-900 font-heading-font"
                                        >KES
                                        <span
                                            class="ml-3 font-heading-font font-extrabold text-indigo-600 text-xl sm:text-2xl"
                                            >{{ this.amount }}</span
                                        >
                                    </span>
                                    <a
                                        @click="purchase"
                                        class="cursor-pointer transform transition hover:scale-75 duration-700 ease-in-out bg-indigo-600 hover:bg-gray-200 flex ml-auto text-white hover:text-black border-0 py-2 px-2 text-sm sm:text-lg sm:px-6 focus:outline-none rounded"
                                        >Purchase Tender Details</a
                                    >
                                    <!-- <a :href="route('checkout', post._id)" class="transform transition hover:scale-75 duration-700 ease-in-out bg-indigo-600 hover:bg-gray-200 flex ml-auto text-white hover:text-black border-0 py-2 px-6 focus:outline-none rounded">Purchase Tender Details</a> -->

                                    <button
                                        class="hover:bg-red-500 hover:text-white rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4"
                                    >
                                        <svg
                                            fill="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            class="w-5 h-5"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                                            ></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://downloader.la/temp/[Downloader.la]-6244326ee02f0.jpg"> -->
                        </div>
                    </div>
                </section>

                <div
                    v-if="status == 'Success'"
                    id="popup-modal"
                    tabindex="-1"
                    class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full"
                >
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div
                            class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                        >
                            <!-- Modal header -->
                            <div class="flex justify-end p-5">
                                <!-- <a v-if="status=='Cancelled'" :href="route('checkout', post._id)">
                    <button  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    </a> -->
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 pt-0 text-center mt-5">
                                <i
                                    class="fas fa-coins fa-2xl mb-10 text-green-500"
                                ></i>
                                <h3
                                    class="mb-5 text-2xl font-extrabold text-green-500 dark:text-gray-400 italic"
                                >
                                    Thank you! Purchase Confirmed
                                </h3>
                            </div>

                            <div class="p-4 pt-0 text-center mt-5">
                                <a :href="route('unlock', this.transId)">
                                    <button
                                        data-modal-toggle="popup-modal"
                                        type="button"
                                        class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-lg inline-flex items-center px-5 py-2.5 text-center mr-2"
                                    >
                                        Tap to Unlock Tender Details
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <Spinner v-if="spinner" />

            <MainFooter />
        </div>
    </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";
import Spinner from "./Components/Spinner.vue";
import moment from "moment";

import dateFormat from "dateformat";
const now = new Date();
// dateFormat(now, "W");

// var dateFormat = require('dateformat');

export default {
    name: "Selected",
    props: {
        post: Object,
        status: String,
        transId: String
    },
    components: {
        TopBanner,
        MainMenu,
        MainFooter,
        Spinner
    },
    watch: {},
    mounted() {
        const date1 = new Date();
        const date2 = new Date(this.checkDateExpryFormat(this.post.expiry));

        // const date2 = new Date("02/20/2013");
        // console.log(this.getDifferenceInDays(date1, date2));

        var diff = this.getDifferenceInDays(date1, date2);

        if (diff < 0) {
            this.postExpired = true;
        } else {
            this.postExpired = false;
        }
    },
    computed: {
        dateChangeFormat() {
            if (this.togoFormat == "Invalid date") {
                return true;
            } else {
                return false;
            }
        },
        amount() {
            if (this.daysDiff <= 10) {
                return 150;
            } else if (this.daysDiff >= 11 && this.daysDiff <= 20) {
                return 100;
            } else if (this.daysDiff >= 21 && this.daysDiff <= 31) {
                return 50;
            }
        },
        daysDiff() {
            var given = moment(this.post.created_at, "YYYY-MM-DD");
            var current = moment().startOf("day");
            var diff = moment.duration(current.diff(given)).asDays();
            return diff;
        },
        ago() {
            return moment(this.post.created_at).fromNow();
        },
        togo() {
            return moment(this.post.expiry).fromNow(true);
        },
        togoFormat() {
            return dateFormat(this.formatedDate, "mmmm dS yyyy");
            return moment(this.formatedDate).fromNow(true);
        }
    },
    data() {
        return {
            spinner: false,
            modal: false,
            postExpired: false,
            formatedDate: ""
        };
    },
    methods: {
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
        getDifferenceInDays(date1, date2) {
            // const diffInMs = Math.abs(date2 - date1);
            const diffInMs = date2 - date1;
            return diffInMs / (1000 * 60 * 60 * 24);
        },
        finalDateFormat(value) {
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

            // this.formatedDate = finalDate;
            this.formatedDate = myTruncatedString;

            // return myTruncatedString;
            return dateFormat(finalDate, "mmmm dS yyyy");
        },
        dateFormat(value) {
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

            // this.formatedDate = finalDate;
            this.formatedDate = myTruncatedString;

            return dateFormat(myTruncatedString, "mmmm dS yyyy");
        },
        purchase() {
            this.$inertia.post(`/checkout/${this.post._id}`);
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        formatDateChange(value) {
            var formats = [
                // "MM/DD/YYYY",
                // "MMM Do YY",
                // "MM-DD-YYYY",
                // "YYYY-MM-DD",
                "DD-MM-YYYY",
                "ddd, ll"
            ];
            return moment(value, formats);
        }
    }
};
</script>
