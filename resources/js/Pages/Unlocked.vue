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
                                    >Tender Category</a
                                >
                                <h1
                                    class="text-indigo-500 text-md title-font font-bold my-2"
                                >
                                    {{ post.purchasing_authority }}
                                </h1>
                                <h1
                                    class="text-gray-900 text-xs title-font font-bold my-4"
                                >
                                    {{ post.tender_brief }}
                                </h1>
                                <div class="flex mb-4">
                                    <a
                                        class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1"
                                        >Description</a
                                    >
                                    <!-- <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Reviews</a>
                <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Details</a> -->
                                </div>
                                <p class="leading-relaxed mb-4 text-sm">
                                    {{ post.work_detail }}
                                </p>
                                <div class="flex border-t border-gray-200 py-2">
                                    <span class="text-gray-500"
                                        >Tender Number</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        <span class="ml-auto text-gray-900">
                                            {{ post.tender_number }}
                                            <!-- <a :href="route('checkout', post._id)" class="bg-indigo-400 hover:bg-indigo-600 text-white  text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Purchase Tender to view</a> -->
                                        </span>
                                    </span>
                                </div>
                                <div class="flex border-t border-gray-200 py-2">
                                    <span class="text-gray-500"
                                        >Competition Type</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        <span class="ml-auto text-gray-900">
                                            {{ post.competition_type }}
                                            <!-- <a :href="route('checkout', post._id)" class="bg-indigo-400 hover:bg-indigo-600 text-white  text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Purchase Tender to view</a> -->
                                        </span>
                                    </span>
                                </div>
                                <div class="flex border-t border-gray-200 py-2">
                                    <span class="text-gray-500">Funded By</span>
                                    <span class="ml-auto text-gray-900">
                                        {{ post.funded_by }}
                                        <!-- <a :href="route('checkout', post._id)" class="bg-indigo-400 hover:bg-indigo-600 text-white  text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Purchase Tender to view</a> -->
                                    </span>
                                </div>
                                <div
                                    class="flex border-t  mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500"
                                        >Tender Value in USD</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        Detail in Tender Document
                                        <!-- <a class="bg-indigo-400 hover:bg-indigo-600 text-white  text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800"></a> -->
                                    </span>
                                </div>
                                <div
                                    class="flex border-t mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500"
                                        >Contact Phone</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        {{ post.phone }}
                                    </span>
                                </div>
                                <div
                                    class="flex border-t  mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500"
                                        >Contact Email</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        {{ post.email }}
                                    </span>
                                </div>
                                <div
                                    class="flex border-t  mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500"
                                        >Contact Address</span
                                    >
                                    <span class="ml-auto text-gray-900">
                                        {{ post.address }}
                                    </span>
                                </div>
                                <div
                                    class="flex border-t  mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500"
                                        >Date Posted
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
                                    <span class="ml-auto text-gray-900">{{
                                        formatDate(post.created_at)
                                    }}</span>
                                </div>
                                <div
                                    class="flex border-t  mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500"
                                        >Expiry Date
                                        <span
                                            class="bg-red-200 text-black text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded mr-2 dark:bg-gray-700 dark:text-gray-300"
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
                                            {{ togo }} to go
                                        </span>
                                    </span>
                                    <span class="ml-auto text-gray-900">{{
                                        formatDate(post.expiry)
                                    }}</span>
                                </div>
                                <div
                                    class="flex border-t  mb-6 border-gray-200 py-2"
                                >
                                    <span class="text-gray-500">Country</span>
                                    <span class="ml-auto text-gray-900">{{
                                        post.country
                                    }}</span>
                                </div>

                                <div class="flex">
                                    <!-- <span class="title-font font-medium text-2xl text-gray-900">KES {{this.amount}}</span> -->
                                    <a :href="route('download_tender')">
                                        <button
                                            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-700 rounded"
                                        >
                                            Download Tender Documents
                                        </button>
                                    </a>
                                    <!-- <button @click="downloadTender" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-700 rounded">Download Tender Documents</button> -->

                                    <!-- <button class="hover:bg-red-500 hover:text-white rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                    </svg>
                </button> -->
                                </div>
                            </div>

                            <!-- <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://downloader.la/temp/[Downloader.la]-6244326ee02f0.jpg"> -->
                        </div>
                    </div>
                </section>
            </div>

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

                        <!-- Modal body -->
                        <div class="p-4 pt-0 text-center">
                            <i class="fas fa-check fa-2xl mb-10"></i>
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

            <MainFooter />
        </div>
    </div>
</template>

<script src="//www.sejda.com/js/sejda-js-api.min.js"></script>
<script>
import axios from "axios";
// const { default: axios } = require('axios');

import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";

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
        MainFooter
    },
    watch: {},
    mounted() {
        console.log(this.post.created_at);
        console.log(this.post.expiry);
    },
    computed: {
        amount() {
            if (this.daysDiff <= 7) {
                return 100;
            } else if (this.daysDiff >= 8 && this.daysDiff <= 14) {
                return 75;
            } else {
                return 50;
            }
        },
        daysDiff() {
            // var given = moment("2018-03-10", "YYYY-MM-DD");
            var given = moment(this.post.created_at, "YYYY-MM-DD");
            var current = moment().startOf("day");
            //Difference in number of days
            var diff = moment.duration(current.diff(given)).asDays();
            return diff;
        },
        ago() {
            return moment(this.post.created_at).fromNow();
        },
        togo() {
            return moment(this.post.expiry).fromNow(true);
        }
    },
    data() {
        return {
            modal: false
        };
    },
    methods: {
        downloadTender() {
            // SejdaJsApi.htmlToPdf({
            //     filename: 'out.pdf',
            //     /* leave blank for one long page */
            //     pageSize: 'a4',
            //     publishableKey: 'api_public_y0urap1k3yh3r3',
            //     htmlCode: document.querySelector('html').innerHTML,
            //     url: 'https://www.tenderfiles.com/GlobalTenderDocuments//GlobalDocuments//42022/26/997ab415-1d40-4d47-9c4c-328545d189ac/997ab415-1d40-4d47-9c4c-328545d189ac.html',
            //     always: function() {
            //         alert('Started')
            //     // PDF download should have started
            //     },
            //     error: function(err) {
            //     console.error(err);
            //     alert('An error occurred');
            //     }
            // });

            // const options = {
            // method: 'POST',
            // url: 'https://docraptor-html-to-pdf.p.rapidapi.com/',
            // headers: {
            //     'content-type': 'application/json',
            //     Authorization: '0c58134ab4mshf9a64341905dbb3p182debjsn3758bcdbaa52',
            //     'X-RapidAPI-Host': 'docraptor-html-to-pdf.p.rapidapi.com',
            //     'X-RapidAPI-Key': '0c58134ab4mshf9a64341905dbb3p182debjsn3758bcdbaa52'
            // },
            // data: '{"document_url":"https://www.tenderfiles.com/GlobalTenderDocuments//GlobalDocuments//42022/20/b44c2a06-050c-400f-bd08-9993ff9f6461/b44c2a06-050c-400f-bd08-9993ff9f6461.html","test":true,"type":"pdf"}'
            // };

            // axios.request(options).then(function (response) {
            //     console.log(response.data);
            // }).catch(function (error) {
            //     console.error(error);
            // });

            const options = {
                method: "GET",
                url: "http://api.pdflayer.com/api/convert",
                params: {
                    access_key: "0b4a11743f3ea2e4a3c778274118d949",
                    document_url:
                        "https://www.tenderfiles.com/GlobalTenderDocuments//GlobalDocuments//42022/20/b44c2a06-050c-400f-bd08-9993ff9f6461/b44c2a06-050c-400f-bd08-9993ff9f6461.html",
                    document_name: "pdflayer.pdf",
                    custom_unit: "px",
                    accept_lang: "en-US",
                    text_encoding: "utf-8",
                    page_size: "A4",
                    orientation: "portrait",
                    viewport: "1440x900",
                    watermark_opacity: "20",
                    creator: "pdflayer.com",
                    header_align: "center",
                    footer_align: "center",
                    ttl: "2592000",
                    dpi: "96"
                }
                // headers: {
                //     'X-RapidAPI-Host': 'apilayer-pdflayer-v1.p.rapidapi.com',
                //     'X-RapidAPI-Key': '0b4a11743f3ea2e4a3c778274118d949'
                // }
            };

            axios
                .request(options)
                .then(function(response) {
                    console.log(response.data);
                })
                .catch(function(error) {
                    console.error(error);
                });

            // const options = {
            // method: 'POST',
            // url: 'https://api2pdf-api2pdf-v1.p.rapidapi.com/wkhtmltopdf/html',
            // headers: {
            //     'content-type': 'application/json',
            //     'X-RapidAPI-Host': 'api2pdf-api2pdf-v1.p.rapidapi.com',
            //     'X-RapidAPI-Key': '0c58134ab4mshf9a64341905dbb3p182debjsn3758bcdbaa52'
            // },
            // data: '{"html":"<p>Hello World</p>","inlinePdf":true,"fileName":"wkhtmltopdf-html-to-pdf.pdf","options":{"orientation":"portrait","pageSize":"A4"}}'
            // };

            // axios.request(options).then(function (response) {
            //     console.log(response.data);
            // }).catch(function (error) {
            //     console.error(error);
            // });
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        clearFilters() {},
        loadFilters() {}
    }
};
</script>
