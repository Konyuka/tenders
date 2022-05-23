<template>
    <body
        class="h-screen verflow-y-hidden bg-gradient-to-r from-indigo-400 to-indigo-800"
    >
        <MainMenu class="sticky top-0" />

        <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <div class="right-0 flex justify-end items-end space-y-2 flex-col">
                <h1
                    class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-white"
                >
                    Invoice # <span class="text-white">13432</span>
                </h1>
                <p
                    class="font-primary-font text-base dark:text-gray-300 font-medium leading-6 text-gray-300"
                >
                    Generated on 21st March 2022 10:34 PM
                </p>
            </div>
            <div
                class="mt-3 flex flex-col xl:flex-row justify-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0"
            >
                <div
                    class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8"
                >
                    <div
                        class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full"
                    >
                        <p
                            class="font-heading-font text-lg md:text-xl dark:text-white font-semibold leading-6 xl:leading-5 text-gray-800"
                        >
                            Tender Brief
                        </p>
                        <div
                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full"
                        >
                            <div class="pb-4 md:pb-8 w-full md:w-40">
                                <i class="fas fa-caret-right fa-3x"></i>
                            </div>
                            <div
                                class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-4 space-y-4 md:space-y-0"
                            >
                                <div
                                    class="w-full flex flex-col justify-start items-start space-y-8"
                                >
                                    <h3
                                        class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800"
                                    >
                                        {{ post.tender_brief }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8"
                    >
                        <div
                            class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6"
                        >
                            <h3
                                class="text-xl dark:text-white font-semibold leading-5 text-gray-800"
                            >
                                M-Pesa Payment
                            </h3>
                            <div
                                class="flex justify-between items-start w-full"
                            >
                                <div
                                    class="flex justify-center items-center space-x-4"
                                >
                                    <div class="w-20 h-20">
                                        <img
                                            class="w-full h-full"
                                            alt="logo"
                                            :src="'/img/mpesa.jpeg'"
                                        />
                                    </div>
                                    <div
                                        class="flex flex-col justify-start items-center"
                                    >
                                        <p
                                            class="font-heading-font text-2xl leading-6 dark:text-white font-semibold text-green-700"
                                        >
                                            M-Pesa<br /><span
                                                class="font-normal text-sm font-primary-font text-black"
                                                >Mpesa Express</span
                                            >
                                        </p>
                                    </div>
                                </div>
                                <p
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES {{ amount }}
                                </p>
                            </div>
                            <div
                                class="w-full flex justify-center items-center"
                            >
                                <button
                                    class="hover:bg-green-500 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-green-600 text-base font-medium leading-4 text-white"
                                >
                                    Pay Using M-Pesa Express
                                </button>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6"
                        >
                            <h3
                                class="text-xl dark:text-white font-semibold leading-5 text-gray-800"
                            >
                                Card Payment
                            </h3>
                            <div
                                class="flex justify-between items-start w-full"
                            >
                                <div
                                    class="flex justify-center items-center space-x-4"
                                >
                                    <div class="w-20 h-20">
                                        <img
                                            class="w-full h-full"
                                            alt="logo"
                                            :src="'/img/credit.jpg'"
                                        />
                                    </div>
                                    <div
                                        class="flex flex-col justify-start items-center"
                                    >
                                        <p
                                            class="font-heading-font text-2xl leading-6 dark:text-white font-semibold text-green-700"
                                        >
                                            Credit Card<br /><span
                                                class="font-normal text-sm font-primary-font text-black"
                                                >Visa or Mastercard
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <p
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES {{ amount }}
                                </p>
                            </div>
                            <div
                                class="w-full flex justify-center items-center"
                            >
                                <button
                                    class="hover:bg-green-500 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-green-600 text-base font-medium leading-4 text-white"
                                >
                                    Pay Using M-Pesa
                                </button>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6"
                        >
                            <h3
                                class="text-xl dark:text-white font-semibold leading-5 text-gray-800"
                            >
                                Manual Payment
                            </h3>
                            <div
                                class="flex justify-between items-start w-full"
                            >
                                <div
                                    class="flex justify-center items-center space-x-4"
                                >
                                    <div class="w-20 h-20">
                                        <img
                                            class="w-full h-full"
                                            alt="logo"
                                            :src="'/img/credit.jpg'"
                                        />
                                    </div>
                                    <div
                                        class="font-primary-font flex flex-col justify-start items-center"
                                    >
                                        <!-- <p
                                            class="font-heading-font text-2xl leading-6 dark:text-white font-semibold text-green-700"
                                        >
                                            Manual Payment<br />
                                        </p> -->
                                        <p
                                            class="font-extrabold w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            PAYBILL NUMBER :
                                            <span
                                                class="text-green-600 font-heading-font font-extrabold tracking-widest text-xl ml-2"
                                            >
                                                603021
                                            </span>
                                        </p>
                                        <p
                                            class="font-extrabold w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            ACCOUNT NUMBER :
                                            <span
                                                class="text-green-600 font-heading-font font-extrabold tracking-widest text-xl ml-2"
                                            >
                                                13432
                                            </span>
                                        </p>
                                        <p
                                            class="font-extrabold w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            PAYMENT AMOUNT :
                                            <span
                                                class="text-green-600 font-heading-font font-extrabold text-xl ml-2"
                                            >
                                                KES {{ amount }}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <!-- <p
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES 150
                                </p> -->
                            </div>
                            <div
                                class="w-full flex justify-center items-center"
                            >
                                <button
                                    class="hover:bg-green-600 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-indigo-600 text-base font-medium leading-4 text-white"
                                >
                                    Confirm Manual M-Pesa Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col"
                >
                    <h3
                        class="text-xl dark:text-white font-semibold leading-5 text-gray-800"
                    >
                        Customer Details
                    </h3>
                    <div
                        class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0"
                    >
                        <div
                            class="flex flex-col justify-start items-start flex-shrink-0"
                        >
                            <div
                                class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full"
                            >
                                <i class="fas fa-user"></i>
                                <p class="cursor-pointer text-sm leading-5 ">
                                    Michael Saiba
                                </p>
                            </div>

                            <div
                                class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full"
                            >
                                <i class="fas fa-envelope"></i>
                                <p class="cursor-pointer text-sm leading-5 ">
                                    david89@gmail.com
                                </p>
                            </div>

                            <div
                                class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full"
                            >
                                <i class="fas fa-phone"></i>
                                <p class="cursor-pointer text-sm leading-5 ">
                                    254716202298
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0"
                        >
                            <div
                                class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start"
                            >
                                <div
                                    class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8"
                                ></div>
                            </div>
                            <div
                                class="flex w-full justify-center items-center md:justify-start md:items-start"
                            >
                                <!-- <button
                                    class="bg-green-600 mt-6 md:mt-0 dark:border-white dark:hover:bg-gray-900 dark:bg-transparent dark:text-white py-5 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-bold w-96 2xl:w-full text-base leading-4 text-white font-heading-font"
                                >
                                    Confirm Manual Payment
                                </button> -->
                                <button
                                    class="mt-6 hover:bg-red-500 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-red-600 text-base font-bold leading-4 text-white"
                                >
                                    Cancel Invoice Payment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="paymentModal"
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
                    <div class="flex justify-end p-2">
                        <a
                            v-if="status == 'Cancelled'"
                            :href="route('checkout', post._id)"
                        >
                            <button
                                type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="popup-modal"
                            >
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 pt-0 text-center">
                        <!-- <i class="fas fa-coins fa-2xl mb-10"></i> -->
                        <h3
                            class="mb-5 text-xs font-extrabold text-gray-500 dark:text-gray-400"
                        >
                            Complete transaction on your phone by entering your
                            MPESA pin
                        </h3>
                    </div>
                    <div
                        v-if="status == 'Cancelled'"
                        class="p-4 pt-0 text-center"
                    >
                        <h3
                            class="mb-5 text-sm font-extrabold text-red-500 dark:text-gray-400 italic"
                        >
                            Transaction Was Cancelled
                        </h3>
                    </div>
                    <div
                        v-if="status == 'Waiting'"
                        class="p-4 pt-0 text-center"
                    >
                        <!-- <i ="fas fa-coins fa-2xl mb-10"></i> -->
                        <h3
                            class="mb-5 text-sm font-extrabold text-green-500 dark:text-gray-400 italic"
                        >
                            Transaction Pending
                        </h3>
                    </div>
                    <div class="flex flex-col px-10">
                        <h4
                            class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400"
                        >
                            Phone Number:
                            <span
                                class="ml-2 font-extrabold text-xl text-indigo-600"
                            >
                                {{ this.form.number }}</span
                            >
                        </h4>
                        <!-- <h4 class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400">Transaction Number: <span class="ml-2 font-extrabold text-xl text-indigo-600"> {{ $page['props']['Status']  }}</span> </h4> -->
                        <!-- <h4 class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400">Payment Amount: <span class="ml-2 font-extrabold text-xl text-indigo-600"> KES {{ this.amount }}</span> </h4> -->
                    </div>
                    <div class="p-4 pt-0 text-center mt-5">
                        <!-- <button @click="requestAccess" data-modal-toggle="popup-modal" type="button" class="text-white bg-indigo-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Request Access Token
                    </button>
                    <button @click="registerURLS" data-modal-toggle="popup-modal" type="button" class="text-white bg-indigo-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Register URL's
                    </button>
                    <button @click="simulate" data-modal-toggle="popup-modal" type="button" class="text-white bg-indigo-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Simulate
                    </button>
                    <button @click="stkPush" data-modal-toggle="popup-modal" type="button" class="text-white bg-indigo-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        STK
                    </button> -->
                        <!-- <a :href="route('confirmation', this.post._id)"> -->
                        <button
                            @click="confirm"
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-indigo-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        >
                            Tap at intervals to Confirm Payment
                        </button>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</template>

<script>
import MainMenu from "./Components/MainMenu.vue";

const { default: axios } = require("axios");

export default {
    name: "Invoice",
    props: {
        post: Object,
        user: Object,
        transId: String,
        accessTokenResponse: Object,
        registeredURLSResponse: Object,
        payment: null,
        status: String,
        membership: String
    },
    components: {
        MainMenu
    },
    mounted() {
        this.Status = "";

        if (this.membership != null) {
            this.postPurchase = false;
            this.form.userName = this.user.name;
            this.form.userPhone = this.user.phone;
            this.form.userEmail = this.user.email;
        } else {
            return true;
        }
    },
    computed: {
        memberPurchase() {
            if (this.membership != null) {
                return true;
            } else {
                return false;
            }
        },
        amountMembership() {
            if (this.membership == "gold") {
                return 50000;
            } else if (this.membership == "silver") {
                return 10000;
            } else if (this.membership == "bronze") {
                return 2000;
            }
        },
        waiting() {
            if (this.Status == "Waiting") {
                return false;
            } else {
                return true;
            }
        },
        transactionStatus() {
            if (this.Status == "Success") {
                return "Success";
            } else if (this.Status == "Waiting") {
                return "Waiting";
            } else if (this.Status == "Cancelled") {
                return "Cancelled";
            } else {
                return "";
            }
        },
        amount() {
            if (this.daysDiff <= 7) {
                return 150;
            } else if (this.daysDiff >= 8 && this.daysDiff <= 14) {
                return 100;
            } else {
                return 50;
            }
        },
        daysDiff() {
            // var given = moment("2018-03-10", "YYYY-MM-DD");
            if (this.membership != null) {
                console.log("no post");
            } else {
                var given = moment(this.post.created_at, "YYYY-MM-DD");
                var current = moment().startOf("day");
                //Difference in number of days
                var diff = moment.duration(current.diff(given)).asDays();
                return diff;
            }
        }
    },
    data() {
        return {
            paymentLog: "",
            form: {
                userName: "Software Saiba",
                userPhone: "254722750445",
                userEmail: "saibadeveloper@gmail.com",
                number: this.removeSpaces(""),
                account: "Bidders Portal",
                amount: this.amount
                // amount: this.post.price
                // amount: ''
                // account: this.form.userName,
            },
            modal: false,
            paymentModal: false
        };
    },
    method: {
        formatMoney(n) {
            return "" + (Math.round(n * 100) / 100).toLocaleString();
        },
        cancelTrans() {
            this.paymentModal = false;
            this.$inertia.get("/checkout/", this.post._id);
            // this.$inertia.delete(`/delete/${value}`)
        },
        removeSpaces(value) {
            let noSpace = value.replace(/\s/g, "");
            return noSpace;
        },
        confirm() {
            const paymentDetails = {
                payment_number: this.form.number,
                post_id: this.post._id
            };
            this.$inertia.post("/confirmation", paymentDetails);
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        stkPush() {
            // var str = '012123';
            var strFirstThree = this.form.number.substring(0, 3);
            if (strFirstThree == 254 && this.form.number.length == 12) {
                this.paymentModal = true;
                const requestBody = {
                    amount: "1",
                    account: this.form.account,
                    phone: this.removeSpaces(this.form.number),
                    post: this.post._id,
                    user_name: this.form.userName,
                    user_phone: this.form.userPhone,
                    user_email: this.form.userEmail
                };
                //    console.log(requestBody)
                axios
                    .post("/checkout/stkPush", requestBody)
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            } else {
                alert("Your Number Format Should be 254 7XX XXX XXX");
            }
        }
    }
};
</script>

<style scoped>
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
