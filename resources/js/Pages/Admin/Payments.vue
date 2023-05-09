<template>
    <div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 v-if="completedTrans" class="text-xl font-semibold text-gray-900">
                        Completed Transactions
                    </h1>
                    <h1 v-else class="text-xl font-semibold text-gray-900">
                        Incomplete Transactions
                    </h1>
                    <p v-if="completedTrans" class="mt-2 text-sm text-gray-700">
                        Transaction details for Successful Tender Purchases
                    </p>
                    <p v-else class="mt-2 text-sm text-gray-700">
                        Transaction details for Unsuccessful Tender Purchases
                    </p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                        Download Client Details
                    </button>
                    <button v-if="completedTrans" @click="transactionType('incomplete')" type="button"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                        Show Incomplete Transactions
                    </button>
                    <button v-else @click="transactionType('complete')" type="button"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                        Show Complete Transactions
                    </button>
                </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table v-if="completedTrans" class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Client Name
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Amount Paid
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Client Phone
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Client Email
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Transaction Time
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Tender ID
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Transaction ID
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr v-for="payment in this
                                        .completedPayments" :key="payment.trans_id">
                                        <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">
                                            {{ payment.user_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">
                                            KES {{ payment.amount }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">
                                            {{ payment.phone }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            {{ payment.user_email }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            {{ formatTime(payment.created_at) }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            <a target="_blank" :href="route('free', payment.info)"
                                                class="underline font-bold font-primary-font text-indigo-600">
                                               View Tender Info
                                            </a>
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            <a href="" class="underline font-bold font-primary-font text-indigo-600">{{
                                                payment.trans_id }}</a>
                                        </td>
                                    </tr>

                                    <!-- More transactions... -->
                                </tbody>
                            </table>

                            <table v-else class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Client Name
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Amount To Paid
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Client Phone
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Client Email
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Transaction Time
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Tender ID
                                        </th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Transaction ID
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr v-for="payment in this
                                        .incompletePayments" :key="payment.trans_id">
                                        <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">
                                            {{ payment.user_name }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">
                                            KES {{ payment.amount }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">
                                            {{ payment.user_phone }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            {{ payment.user_email }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            {{ formatTime(payment.created_at) }}
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            <a target="_blank" :href="route('free', payment.info)"
                                                class="underline font-bold font-primary-font text-indigo-600">{{
                                                    payment.info }}</a>
                                        </td>
                                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                            <a href="" class="underline font-bold font-primary-font text-indigo-600">{{
                                                payment.trans_id }}</a>
                                        </td>
                                    </tr>

                                    <!-- More transactions... -->
                                </tbody>
                            </table>
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

export default {
    name: "AdminPayment",
    layout: Layout,
    components: {
        //   Categories,
    },
    props: {
        completedPayments: Array,
        incompletePayments: Array
    },
    data() {
        return {
            completedTrans: true
        };
    },
    watch: {},
    computed: {},
    methods: {
        formatTime(value) {
            return moment(String(value)).format("DD/MM/YYYY hh:mm");
        },
        transactionType(value) {
            if (value == "incomplete") {
                this.completedTrans = false;
            } else {
                this.completedTrans = true;
            }
        }
    }
};
</script>

<style scoped></style>
