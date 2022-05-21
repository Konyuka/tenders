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
                class="mt-10 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0"
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
                            Tender Description
                        </p>
                        <div
                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full"
                        >
                            <div class="pb-4 md:pb-8 w-full md:w-40">
                                <i class="fas fa-caret-right fa-3x"></i>
                            </div>
                            <div
                                class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0"
                            >
                                <div
                                    class="w-full flex flex-col justify-start items-start space-y-8"
                                >
                                    <h3
                                        class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800"
                                    >
                                        Premium Quaility Dress
                                    </h3>
                                </div>
                                <div
                                    class="flex justify-between space-x-8 items-start w-full"
                                >
                                    <p
                                        class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800"
                                    >
                                        KES 150
                                    </p>
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
                                                >You can use Mpesa Paybill
                                                Express checkout</span
                                            >
                                        </p>
                                    </div>
                                </div>
                                <p
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES 150
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
                                                >You can use Visa or Mastercard
                                                for checkout</span
                                            >
                                        </p>
                                    </div>
                                </div>
                                <p
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES 150
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
                                        class="flex flex-col justify-start items-center"
                                    >
                                        <!-- <p
                                            class="font-heading-font text-2xl leading-6 dark:text-white font-semibold text-green-700"
                                        >
                                            Manual Payment<br />
                                        </p> -->
                                        <p
                                            class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            PAYBILL NUMBER :
                                            <span
                                                class="text-green-600 font-primary-font text-xl"
                                            >
                                                603021
                                            </span>
                                        </p>
                                        <p
                                            class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            ACCOUNT NUMBER :
                                            <span
                                                class="text-green-600 font-primary-font text-xl"
                                            >
                                                13432
                                            </span>
                                        </p>
                                        <p
                                            class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            PAYMENT AMOUNT :
                                            <span
                                                class="text-green-600 font-primary-font text-xl"
                                            >
                                                150
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
                                    class="hover:bg-green-500 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-green-600 text-base font-medium leading-4 text-white"
                                >
                                    Pay Using M-Pesa
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
    </body>
</template>

<script>
import MainMenu from "./Components/MainMenu.vue";

export default {
    name: "Invoice",
    components: {
        MainMenu
    }
};
</script>

<style></style>
