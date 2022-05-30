<template>
    <div>
        <section
            class="bg-gradient-to-r from-gray-50 to-indigo-50 mx-5 rounded-lg"
        >
            <div class="container px-1 py-6 mx-auto">
                <div>
                    <h1
                        class="font-primary-font flex justify-around text-3xl font-bold text-indigo-600 capitalize lg:text-5xl dark:text-white"
                    >
                        Featured Tenders
                    </h1>
                </div>

                <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 py-4 mx-auto">
                        <div class="flex flex-wrap -m-2">
                            <a
                                v-for="post in orderBy(
                                    this.posts.slice(0, 6),
                                    'expiry',
                                    -1
                                )"
                                :key="post._id"
                                :href="route('selected', post._id)"
                                class="group bg-white border-t-2 border-r-2 mt-4 my-4 border-indigo-600 shadow-xl transform transition hover:scale-75 duration-700 hover:shadow-2xl p-12 md:w-1/2 flex flex-col min-h-2xl  items-start"
                            >
                                <!-- <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">{{ post.funded_by }}</span> -->
                                <div class="flex justify-between w-full">
                                    <div
                                        class="font-heading-font font-extrabold"
                                    >
                                        Posted:
                                        <span
                                            class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-bold tracking-widest"
                                        >
                                            {{ ago(post.created_at) }}</span
                                        >
                                    </div>
                                    <div
                                        class="font-heading-font font-extrabold"
                                        v-if="expired(post)"
                                    >
                                        Expires:
                                        <span
                                            class="inline-block py-1 px-2 rounded bg-red-50 text-red-500 text-xs font-bold tracking-widest"
                                        >
                                            Expired
                                        </span>
                                    </div>
                                    <div
                                        class="font-heading-font font-extrabold"
                                        v-else
                                    >
                                        Last Day of Bid:
                                        <span
                                            class="inline-block py-1 px-2 rounded bg-green-100 text-green-500 text-xs font-bold tracking-widest"
                                        >
                                            {{ dateFormat(post.expiry) }}
                                            <!-- {{ post.expiry }} -->
                                        </span>
                                    </div>
                                </div>
                                <p
                                    class="my-5 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold"
                                >
                                    {{ post.tender_brief }}
                                </p>

                                <div
                                    class="flex items-center flex-wrap mt-10 border-b-2 border-gray-100 w-full"
                                >
                                    <!-- <span>
                                <h4 class="sm:text-xl text-md title-font  font-medium text-gray-400 mt-4 mb-4">Category: <span><a href="#">{{ post.category }}</a></span></h4>
                            </span> -->
                                    <span
                                        class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0  leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                                    >
                                        <i
                                            class="w-4 h-4 mr-1 fas fa-filter text-indigo-600"
                                        ></i>
                                        Construction
                                        <!-- {{ post.category }} -->
                                    </span>
                                    <span
                                        class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                                    >
                                        <i
                                            class="w-4 h-4 mr-1 fas fa-location-crosshairs text-indigo-600"
                                        ></i>
                                        {{ post.country }}
                                    </span>
                                    <span
                                        class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1"
                                    >
                                        <i
                                            class="w-4 h-4 mr-1 fas fa-coins text-indigo-600"
                                        ></i
                                        >{{ post.funded_by }}
                                    </span>
                                </div>

                                <div class="mt-10">
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
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <a :href="route('listing')" class="mt-10 flex justify-center">
                    <button
                        class="transform transition hover:scale-125 duration-700 ease-in-out text-xl font-extrabold font-heading-font leading-4 text-white bg-indigo-600 sm:w-auto w-full rounded p-4 focus:outline-none hover:bg-gray-200 focus:ring-2 focus:ring-offset-2 focus:ring-white"
                    >
                        View All Tenders
                    </button>
                </a>
            </div>
        </section>
    </div>
</template>

<script>
import Button from "../../Jetstream/Button.vue";
import Vue from "vue";
import Vue2Filters from "vue2-filters";
Vue.use(Vue2Filters);

import dateFormat from "dateformat";
// const now = new Date();

export default {
    name: "FeaturedTenders",
    mixins: [Vue2Filters.mixin],
    components: {
        Button
        //   Categories,
    },
    mounted() {},
    data() {
        return {
            postExpired: false
        };
    },
    watch: {},
    computed: {
        // ago(){
        //         return moment(this.$parent.posts.created_at).fromNow();
        // },
        // togo(){
        //     return moment(this.$parent.posts.expiry).fromNow(true);
        // },
        posts() {
            return this.$parent.posts;
        }
    },
    methods: {
        dateChangeFormat(value) {
            const togo = moment(value).fromNow(true);
            if (togo == "Invalid date") {
                return true;
            } else {
                return false;
            }
        },
        expired(post) {
            var current = moment().startOf("day");
            var given = moment(post.expiry, "YYYY-MM-DD");
            return console.log(given);

            if (dateChangeFormat) {
                var given = moment(this.formatedDate, "YYYY-MM-DD");
            } else {
                var given = moment(post.expiry, "YYYY-MM-DD");
            }

            var diff = moment.duration(given.diff(current)).asDays();

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
        togo(value) {
            return moment(value).fromNow();
        },
        ago(value) {
            return moment(value).fromNow();
        }
    }
};
</script>

<style scoped>
.css-selector {
    -webkit-animation: AnimationName 30s ease infinite;
    -moz-animation: AnimationName 30s ease infinite;
    animation: AnimationName 30s ease infinite;
}

@-webkit-keyframes AnimationName {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
@-moz-keyframes AnimationName {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
@keyframes AnimationName {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
</style>
