<template>
    <div class="h-screen">
        <div>
            <div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                    <select id="tabs" name="tabs"
                        class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option selected>Tender Information Subscription</option>
                        <option>Tender Notification Subscription</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
                        <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                        <button @click="setSubType('Information')"
                            class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10"
                            aria-current="page">
                            <span>Tender Information Subscription</span>
                            <span aria-hidden="true"
                                :class="this.subscriptionType == 'Information' ? 'bg-indigo-500' : 'bg-transparent'"
                                class="absolute inset-x-0 bottom-0 h-0.5"></span>
                        </button>
                        <button @click="setSubType('Notification')"
                            class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
                            <span>Tender Notification Subscription</span>
                            <span aria-hidden="true"
                                :class="this.subscriptionType == 'Notification' ? 'bg-indigo-500' : 'bg-transparent'"
                                class="absolute inset-x-0 bottom-0 h-0.5"></span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>

        <div v-if="subscriptionType == 'Information'" class="m-5 mt-20">
            <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div class="ml-4 mt-4">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Subscription for Tender Information</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Your Subscribed for <span class="font-bold text-indigo-700">{{ getSubscriptionType() }} Tender
                                Information</span> on {{ getSubscriptionDate() }}
                        </p>
                        <p class="mt-3 text-sm text-gray-500">
                            You can set or edit upto three tags as long as you have an active subscription on the tender
                            notification tab
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div v-if="subscriptionType == 'Notification'" class="m-5 mt-20">
            <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
                    <div class="ml-4 mt-4">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Subscription for Notification</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Your Subscribed for <span class="font-bold text-indigo-700">{{ getSubscriptionType() }} Tender
                                Notification</span> on {{ getSubscriptionDate() }}
                        </p>
                        <p class="mt-3 text-sm text-gray-500">
                            Below is a list of your prefered notification tags. You can set or edit upto three tags as long
                            as you have an active subscription
                        </p>
                    </div>
                    <div class="ml-4 mt-4 flex-shrink-0">
                        <button v-if="decodedtags === 'empty'" @click="setTagsModal = !setTagsModal" type="button"
                            class="relative inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Set Prefered Tags
                        </button>
                        <button v-else @click="setTagsModal = !setTagsModal" type="button"
                            class="relative inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Edit Set tags
                        </button>
                    </div>
                </div>

                <div v-if="decodedtags!=='empty'" class="mt-20 mx-5">

                    <ol class="flex justify-around items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
                        <li v-for="tag in decodedtags" class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                            <span
                                class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                1
                            </span>
                            <span>
                                <h3 class="font-bold leading-tight capitalize">{{  tag }}</h3>
                            </span>
                        </li>
                    </ol>

                </div>

                <div v-else class="mt-20 mx-5">

                    <ol class="flex justify-around items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
                        <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                            <span>
                                <h3 class="font-medium leading-tight">No Tags Set Yet</h3>
                            </span>
                        </li>
                    </ol>

                </div>

            </div>

        </div>

        <div v-if="setTagsModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-2xl sm:max-w-2xl sm:p-6">
                        <div>
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                                <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-base font-bold leading-6 text-gray-900" id="modal-title">Set your desired
                                    tags with no spaces</h3>
                                <div class="my-20">
                                    <div class="flex justify-between gap-1">
                                        <div>
                                            <label for="small-input"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First</label>
                                            <input v-model="tag.one" placeholder="manufacturing" type="text"
                                                id="small-input"
                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                        <div>
                                            <label for="small-input"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Second</label>
                                            <input v-model="tag.two" placeholder="agriculture" type="text" id="small-input"
                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                        <div>
                                            <label for="small-input"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Third</label>
                                            <input v-model="tag.three" placeholder="insurance" type="text" id="small-input"
                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                            <button @click="saveTags()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">Save
                                Tags</button>
                            <button @click="setTagsModal = !setTagsModal" type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>

<script>
import Layout from "../../Layouts/DashboardLayout";
import moment from "moment";
import { format } from "path";

const app = document.getElementById("app");
export default {
    name: "ClientSUb",
    layout: Layout,
    props: {
        tags: Object,
    },
    components: {
        // TopBanner,
    },
    watch: {},
    mounted() {
        if (this.user.membership == 'Monthly Notification' || this.user.membership == 'Annualy Notification') {
            this.typeOfClient = 'regular'
            this.subscriptionType = 'Notification'
        } else if (this.user.membership == 'Monthly' || this.user.membership == 'Annualy') {
            this.typeOfClient = 'premium'
        }
    },
    computed: {
        user() {
            return this.pageData.props.user
        },
        decodedtags(){
            if( this.tags.tags == null || this.tags.tags == undefined  ){
                return 'empty';
            }else{
                const tagsArray = JSON.parse(this.tags.tags);
                return tagsArray
            }
        }
    },
    data() {
        return {
            tag: {
                one: null,
                two: null,
                three: null,
            },
            setTagsModal: false,
            typeOfClient: null,
            subscriptionType: 'Information',
            activeTab: 'active',
            pageData: JSON.parse(app.dataset.page),

        };
    },
    methods: {
        saveTags() {
            let tagsArray = Object.keys(this.tag).map(key => this.tag[key]);
            axios.post('/dashboard/set_tags', {
                data: {
                    tags: tagsArray,
                    user: this.user.id,
                }
            })
                .then(response => {
                    this.setTagsModal = false
                    console.log(response);
                    alert('Tags Saved Successfully')
                    window.location.reload();
                })
                .catch(error => {
                    console.log(error);
                })

        },
        setSubType(value) {
            if (this.typeOfClient == 'premium') {
                this.subscriptionType = value
            } else if (this.typeOfClient == 'regular') {
                if (value == 'Information') {
                    alert('You dont have an active tender information subscription')
                    return
                } else {
                    this.subscriptionType = value
                }
            }
        },
        getSubscriptionDate() {
            const momentDate = moment(this.user.membership_date * 1000)
            return momentDate.format('MMMM Do YYYY, h:mm:ss a')
        },
        getSubscriptionType() {
            if (this.user.membership == 'Annualy') {
                return 'Annual'

            } else if (this.user.membership == 'Monthly') {
                return 'Monthly'

            } else if (this.user.membership == 'Monthly Notification') {
                return 'Monthly'

            } else if (this.user.membership == 'Annualy Notification') {
                return 'Annual'

            }
        },
        getDaysLeft() {
            let subscriptionDate = this.getSubscriptionDate()
            let actualSubscriptionType = this.getSubscriptionType()
            const today = new Date();

            if (this.getSubscriptionType() === 'Annual') {
                // Annual subscriptions last 1 year (365 days)
                const subscriptionEnd = new Date(subscriptionDate);
                subscriptionEnd.setFullYear(subscriptionEnd.getFullYear() + 1);

                const diffTime = subscriptionEnd.getTime() - today.getTime();
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                return diffDays;
            } else if (this.getSubscriptionType() === 'Monthly') {
                // Monthly subscriptions last 30 days  
                const subscriptionEnd = new Date(subscriptionDate);
                subscriptionEnd.setMonth(subscriptionEnd.getMonth() + 1);

                const diffTime = subscriptionEnd.getTime() - today.getTime();
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                return diffDays;
            }
        },
        formatDate(date) {
            return moment(date).format('MMM Do YY');
        },
        setActiveTab(value) {
            this.activeTab = value;
        },
    }
};
</script>
</script>
