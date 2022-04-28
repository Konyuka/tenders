<template>
    <div class="w-full bg-gray-50">
        <nav class="mb-4 flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a
                        href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                    >
                        <svg
                            class="mr-2 w-4 h-4"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                            ></path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg
                            class="w-6 h-6 text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span
                            class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500"
                            >Payments Page</span
                        >
                    </div>
                </li>
            </ol>
        </nav>

        <div
            class="mx-auto container bg-white dark:bg-gray-800 dark:bg-gray-800 shadow rounded"
        >
            <div
                class="flex flex-col lg:flex-row p-4 lg:p-8 justify-between items-start lg:items-stretch w-full"
            >
                <div
                    class="w-full lg:w-1/3 flex flex-col lg:flex-row items-start lg:items-center"
                >
                    <div class="flex items-center">
                        <a
                            class="text-gray-600 dark:text-gray-400 mx-2 p-2 border-transparent border bg-gray-100 dark:hover:bg-gray-600 dark:bg-gray-700 hover:bg-gray-200 cursor-pointer rounded focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                            href="javascript: void(0)"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon cursor-pointer icon-tabler icon-tabler-settings"
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
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full lg:w-2/3 flex flex-col lg:flex-row items-start lg:items-center justify-end"
                ></div>
            </div>
            <div class="w-full overflow-x-hidden xl:overflow-x-hidden">
                <table class="min-w-full bg-white dark:bg-gray-800">
                    <thead>
                        <tr class="w-full h-16 border-gray-300 border-b py-8">
                            <th
                                class="pl-8 text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                <!-- <input type="checkbox" class="cursor-pointer relative w-5 h-5 border rounded border-gray-400 bg-white dark:bg-gray-800 outline-none" onclick="checkAll(this)" /> -->
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                <div
                                    class="text-gray-600 dark:text-gray-400 opacity-0 cursor-default relative w-10"
                                >
                                    <div
                                        class="absolute top-0 right-0 w-5 h-5 mr-2 -mt-1 rounded-full bg-indigo-700 text-white flex justify-center items-center text-xs"
                                    >
                                        3
                                    </div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file"
                                        width="28"
                                        height="28"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path
                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"
                                        />
                                    </svg>
                                </div>
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Payment Amount
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Tender Number
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Payment By
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Payment Number
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Contact Number
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Contact Email
                            </th>
                            <th
                                class="text-gray-600 dark:text-gray-400 font-normal pr-6 text-left text-sm tracking-normal leading-4"
                            >
                                Payment Time
                            </th>
                            <td
                                class="text-gray-600 dark:text-gray-400 font-normal pr-8 text-left text-sm tracking-normal leading-4"
                            >
                                Actions
                            </td>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr
                            v-for="payment in this.$parent.payments"
                            :key="payment.trans_id"
                            class="h-24 border-gray-300 border-b"
                        >
                            <td
                                class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            ></td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                <div
                                    class="relative w-10 text-gray-600 dark:text-gray-400"
                                >
                                    <i class="fas fa-caret-right"></i>
                                </div>
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                KES
                                <span class="font-bold text-green-600">{{
                                    payment.amount
                                }}</span>
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ tenderNumber(payment.info) }}
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ payment.user_name }}
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ payment.phone }}
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ payment.user_phone }}
                            </td>
                            <!-- <td class="pr-6 whitespace-no-wrap">
                                <div class="flex items-center">
                                    <p class="ml-2 text-gray-800 dark:text-gray-100 tracking-normal leading-4 text-sm">Toyota</p>
                                </div>
                            </td> -->
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ payment.user_email }}
                            </td>
                            <td
                                class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4"
                            >
                                {{ formatDate(payment.created_at) }}
                            </td>
                            <td class="pr-8 relative">
                                <button
                                    class="mx-4 text-indigo-600 hover:text-indigo-400 rounded cursor-pointer border border-transparent focus:outline-none"
                                >
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PaymentPage",
    data() {
        return {
            show: null
        };
    },
    methods: {
        tenderNumber(value) {
            // return alert(value)
            var postArray = this.$parent.posts;
            var post = postArray.find(post => post._id === value);
            // return alert(post._id)
            return post.tender_number;
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        }
    },
    mounted() {}
};
</script>

<style>
.checkbox:checked + .check-icon {
    display: flex;
}
</style>
