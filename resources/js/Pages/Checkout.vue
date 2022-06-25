<template>
    <div class="">
        <body class="overflow-x-hidden antialiased">
            <div class="flex flex-col h-screen">
                <TopBanner class="sticky top-0 z-50" />
                <!-- <MainMenu class="sticky top-0 z-50" /> -->

                <div class="bg-white">
                    <!-- Background color split screen for large screens -->
                    <div
                        class="hidden lg:block fixed top-0 left-0 w-1/2 h-full bg-white"
                        aria-hidden="true"
                    ></div>
                    <div
                        class="hidden lg:block fixed top-0 right-0 w-1/2 h-full bg-indigo-900"
                        aria-hidden="true"
                    ></div>

                    <main
                        class="mt-5 relative grid grid-cols-1 gap-x-16 max-w-7xl mx-auto lg:px-8 lg:grid-cols-2"
                    >
                        <h1 class="sr-only">Checkout</h1>

                        <section
                            aria-labelledby="summary-heading"
                            class="bg-indigo-900 text-indigo-300 pt-6 pb-12 md:px-10 lg:max-w-lg lg:w-full lg:mx-auto lg:px-0 lg:pt-0 lg:pb-24 lg:bg-transparent lg:row-start-1 lg:col-start-2"
                        >
                            <div
                                class="max-w-2xl mx-auto px-4 lg:max-w-none lg:px-0"
                            >
                                <h2 id="summary-heading" class="sr-only">
                                    Order summary
                                </h2>

                                <dl v-if="membership == null">
                                    <dt class="text-sm font-medium">
                                        Cart Value
                                    </dt>
                                    <dd
                                        class="mt-1 text-3xl font-extrabold text-white"
                                    >
                                        KES {{ formatMoney(this.amount) }}
                                    </dd>
                                </dl>

                                <dl v-if="membership != null">
                                    <dt class="text-sm font-medium">
                                        Cart Value
                                    </dt>
                                    <dd
                                        class="mt-1 text-3xl font-extrabold text-white"
                                    >
                                        KES
                                        {{ formatMoney(this.amountMembership) }}
                                    </dd>
                                </dl>

                                <dl v-if="membership != null">
                                    <dt class="text-sm font-medium">
                                        Purchase Description
                                    </dt>
                                    <dd
                                        class="mb-5 mt-1 text-3xl font-extrabold text-white"
                                    >
                                        Subscription for
                                        <span class="text-white uppercase">{{
                                            this.membership
                                        }}</span>
                                    </dd>
                                </dl>

                                <ul
                                    role="list"
                                    class="text-sm font-medium divide-y divide-white divide-opacity-10"
                                ></ul>

                                <dl
                                    class="text-sm font-medium space-y-6 border-t border-white border-opacity-10 pt-6"
                                >
                                    <div
                                        v-if="this.membership != null"
                                        class="flex items-center justify-between"
                                    >
                                        <dt>Subtotal</dt>
                                        <dd>
                                            KES
                                            {{
                                                formatMoney(
                                                    this.amountMembership
                                                )
                                            }}
                                        </dd>
                                    </div>

                                    <div
                                        v-else
                                        class="flex items-center justify-between"
                                    >
                                        <dt>Subtotal</dt>
                                        <dd>
                                            KES {{ formatMoney(this.amount) }}
                                        </dd>
                                    </div>

                                    <div
                                        class="flex items-center justify-between"
                                    >
                                        <dt>Taxes</dt>
                                        <dd>KES 0</dd>
                                    </div>

                                    <div
                                        v-if="this.membership == null"
                                        class="flex items-center justify-between border-t border-white border-opacity-10 text-white pt-6"
                                    >
                                        <dt class="text-base">Total</dt>
                                        <dd class="text-base">
                                            KES {{ formatMoney(this.amount) }}
                                        </dd>
                                    </div>

                                    <div
                                        v-if="this.membership != null"
                                        class="flex items-center justify-between border-t border-white border-opacity-10 text-white pt-6"
                                    >
                                        <dt class="text-base">Total</dt>
                                        <dd class="text-base">
                                            KES
                                            {{
                                                formatMoney(
                                                    this.amountMembership
                                                )
                                            }}
                                        </dd>
                                    </div>
                                </dl>
                            </div>

                            <div
                                class="hidden sm:flex mt-10  justify-end pt-6 border-t border-gray-200"
                            >
                                <!-- <button
                                    @click="stkPush"
                                    type="submit"
                                    class="bg-white border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-black hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500"
                                >
                                    Pay now
                                </button> -->
                                <button
                                    @click="invoice(post)"
                                    type="submit"
                                    class="font-primary-font bg-white border border-transparent rounded-md shadow-sm py-2 px-4 text-lg font-bold text-gray-700 hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500"
                                >
                                    Proceed to Payment
                                    <i
                                        class="fas fa-caret-right ml-2 fa-lg text-green-500"
                                    ></i>
                                    <i
                                        class="fas fa-caret-right fa-lg text-green-500"
                                    ></i>
                                </button>
                                <!-- <button @click="paymentModal=true" type="submit" class="bg-white border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-black hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Pay now</button> -->
                            </div>
                        </section>

                        <section
                            aria-labelledby="payment-and-shipping-heading"
                            class="py-16 lg:max-w-lg lg:w-full lg:mx-auto lg:pt-0 lg:pb-24 lg:row-start-1 lg:col-start-1"
                        >
                            <h2
                                id="payment-and-shipping-heading"
                                class="sr-only"
                            >
                                Payment and shipping details
                            </h2>

                            <form>
                                <div
                                    class="max-w-2xl mx-auto px-4 lg:max-w-none lg:px-0"
                                >
                                    <div>
                                        <h3
                                            id="contact-info-heading"
                                            class="text-lg font-extrabold text-gray-900"
                                        >
                                            Contact information
                                        </h3>

                                        <div class=" shadow-2xl">
                                            <label
                                                for="email-address"
                                                class="block text-sm font-medium text-gray-700"
                                                >Contact Name</label
                                            >
                                            <div class="mt-1">
                                                <input
                                                    v-model="form.userName"
                                                    required
                                                    placeholder="Mark Massai"
                                                    type="text"
                                                    id="phone-number"
                                                    name="phone-number"
                                                    class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                />
                                            </div>
                                        </div>

                                        <div class="mt-6 shadow-2xl">
                                            <label
                                                for="email-address"
                                                class="block text-sm font-medium text-gray-700"
                                                >Contact Email</label
                                            >
                                            <div class="mt-1">
                                                <input
                                                    v-model="form.userEmail"
                                                    required
                                                    placeholder="user@email.com"
                                                    type="email"
                                                    id="email-address"
                                                    name="email-address"
                                                    class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                />
                                            </div>
                                        </div>

                                        <div class="mt-6 shadow-2xl">
                                            <label
                                                for="email-address"
                                                class="block text-sm font-medium text-gray-700"
                                                >Contact Phone</label
                                            >
                                            <div class="mt-1">
                                                <input
                                                    v-model="form.userPhone"
                                                    required
                                                    placeholder="254 7XX XXX XXX"
                                                    type="number"
                                                    id="phone-number"
                                                    name="phone-number"
                                                    class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10">
                                        <div class="mt-6 flex items-center">
                                            <input
                                                id="same-as-shipping"
                                                name="same-as-shipping"
                                                type="checkbox"
                                                checked
                                                class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500"
                                            />
                                            <div class="ml-2">
                                                <label
                                                    for="same-as-shipping"
                                                    class="text-sm font-medium text-gray-900"
                                                    >Subscribe for news
                                                    letters</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="flex justify-center pt-10 sm:hidden">
                                <button
                                    @click="invoice(post)"
                                    type="submit"
                                    class="font-primary-font bg-indigo-800 border border-transparent rounded-md shadow-sm py-2 px-4 text-lg font-bold text-white hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500"
                                >
                                    Proceed to Payment
                                    <i
                                        class="fas fa-caret-right ml-2 fa-lg text-white-500"
                                    ></i>
                                    <i
                                        class="fas fa-caret-right fa-lg text-white-500"
                                    ></i>
                                </button>
                            </div>
                        </section>
                    </main>
                </div>
            </div>

            <!-- <MainFooter /> -->

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
                                Complete transaction on your phone by entering
                                your MPESA pin
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
    </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";

const { default: axios } = require("axios");

export default {
    name: "Checkout",
    props: {
        post: Object,
        transId: String,
        accessTokenResponse: Object,
        registeredURLSResponse: Object,
        payment: null,
        status: String,
        membership: String,
        user: Object
    },
    components: {
        TopBanner,
        MainMenu,
        MainFooter
    },
    watch: {},
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
            if (this.membership == "diamond") {
                return 50000;
            } else if (this.membership == "platinum") {
                return 30000;
            } else if (this.membership == "gold") {
                return 9000;
            } else if (this.membership == "silver") {
                return 6000;
            } else if (this.membership == "bronze") {
                return 1500;
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
                userName: "",
                userPhone: this.removeSpaces(""),
                userEmail: "",
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
    methods: {
        invoice(value) {
            var strFirstThree = this.form.userPhone.substring(0, 3);
            if (strFirstThree != 254) {
                alert("Number Format Should Start with 254");
            } else if (this.form.userPhone.length != 12) {
                alert("Invalid Phone Number");
            } else {
                if (value == null) {
                    const payload = {
                        post: this.membership,
                        user: this.form,
                        amount: this.amount
                    };
                    this.$inertia.post(`/invoice/${this.user.id}`, payload);
                } else {
                    const payload = {
                        post: value,
                        user: this.form,
                        amount: this.amount
                    };
                    this.$inertia.post(`/invoice/${this.post._id}`, payload);
                }
            }
        },
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
        },
        simulate() {
            const requestBody = {
                amount: 1,
                account: "Beat Crime Kijana Mzuri"
            };
            //    this.$inertia.post('simulate', requestBody)
            axios
                .post("/checkout/simulate", requestBody)
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        registerURLS() {
            this.$inertia
                .post("register-urls", {})
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        requestAccess() {
            this.$inertia
                .post("get-token", {})
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        clearFilters() {},
        loadFilters() {}
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
