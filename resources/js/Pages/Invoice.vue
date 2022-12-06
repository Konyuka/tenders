<template>
    <div
        class="relative h-screen verflow-y-hidden bg-gradient-to-r from-indigo-400 to-indigo-800"
    >
        <MainMenu class="sticky top-0" />

        <div class=""></div>

        <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <div
                class="right-0 flex justify-center items-center space-y-2 flex-col"
            >

                <div>
                    <h1
                        class="text-xl sm:text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-white"
                    >
                        Invoice Number
                        <span class="text-white">{{ invoiceNumber }}</span>
                    </h1>
                    <p
                        class="font-primary-font text-base dark:text-gray-300 font-medium leading-6 text-gray-300"
                    >
                        Generated on {{ this.now }}
                    </p>
                </div>
            </div>
            <div
                class="mt-3 flex flex-col xl:flex-row justify-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0"
            >
                <div
                    class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8"
                >
                    <div
                        v-if="!membershipSub"
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
                                        class="text-lg sm:text-xl dark:text-white xl:text-xl font-semibold leading-6 text-gray-800"
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
                                    v-if="!membershipSub"
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES {{ amount }}
                                </p>
                                <p
                                    v-if="membershipSub"
                                    class="text-lg font-semibold leading-6 dark:text-white text-gray-800"
                                >
                                    KES {{ amountMembership }}
                                </p>
                            </div>

                            <div
                                class="w-full flex justify-center items-center"
                            >
                                <button
                                    @click="mpesaExpress"
                                    class="hover:bg-green-500 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-green-600 text-base font-medium leading-4 text-white"
                                >
                                    Confirm Mpesa Payment Number
                                </button>
                            </div>
                        </div>

                        <!-- <div
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
                                    Pay with Card
                                </button>
                            </div>
                        </div> -->

                        <!-- <div
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
                                            :src="'/img/mpesamobile.png'"
                                        />
                                    </div>
                                    <div
                                        class="font-primary-font flex flex-col justify-start items-center"
                                    >
                                        <p
                                            class="font-extrabold w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            PAYBILL # :
                                            <span
                                                class="text-green-600 font-heading-font font-extrabold tracking-widest text-xl ml-2"
                                            >
                                                4092001
                                            </span>
                                        </p>
                                        <p
                                            class="font-extrabold w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-xs leading-5 text-gray-800"
                                        >
                                            ACCOUNT # :
                                            <span
                                                class="text-green-600 font-heading-font font-extrabold tracking-widest text-xl ml-2"
                                            >
                                                {{ invoiceNumber }}
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
                            </div>
                            <div
                                class="w-full flex justify-center items-center"
                            >
                                <button
                                    @click="c2b"
                                    class="hover:bg-green-600 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-indigo-600 text-base font-medium leading-4 text-white"
                                >
                                    Confirm Manual M-Pesa Payment
                                </button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div
                    class="hidden sm:flex bg-gray-50 dark:bg-gray-800 w-full xl:w-96  justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col"
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
                                    {{ this.user.userName }}
                                </p>
                            </div>

                            <div
                                class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full"
                            >
                                <i class="fas fa-envelope"></i>
                                <p class="cursor-pointer text-sm leading-5 ">
                                    {{ this.user.userEmail }}
                                </p>
                            </div>

                            <div
                                class="flex justify-center text-gray-800 dark:text-white md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full"
                            >
                                <i class="fas fa-phone"></i>
                                <p class="cursor-pointer text-sm leading-5 ">
                                    {{ this.user.userPhone }}
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
                                    class="mt-6 hover:bg-red-500 transform transition  duration-700 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-red-600 text-base font-bold leading-4 text-white"
                                >
                                    Cancel Invoice Payment
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="expressModal"
            class="relative z-10"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
        >
            <div
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            ></div>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div
                    class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
                >
                    <div
                        class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
                    >
                        <div>
                            <div
                                class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-gradient-to-r from-indigo-500 to-indigo-800"
                            >
                                <!-- Heroicon name: outline/check -->
                                <i class="fas fa-coins text-white"></i>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <div class="mt-2">
                                    <label
                                        for="email2"
                                        class="text-gray-800 text-sm font-bold leading-tight tracking-normal text-center"
                                        >M-Pesa Payment Number</label
                                    >
                                    <div class="relative mb-5 mt-2">
                                        <div
                                            class="absolute text-gray-600 flex items-center px-4 border-r h-full"
                                        >
                                            <i
                                                class="fas fa-phone fa-xl text-indigo-600"
                                            ></i>
                                        </div>
                                        <input
                                            v-model="form.number"
                                            id="mobile"
                                            type="number"
                                            class="text-gray-600 focus:outline-none focus:border focus:border-gray-700 font-normal w-full h-10 flex items-center pl-16 text-sm border-gray-300 rounded border"
                                            placeholder="254 7XX XXX XXX"
                                        />
                                    </div>

                                    <div
                                        class="flex items-center justify-around w-full"
                                    >
                                        <button
                                            @click="stkPush"
                                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-green-700 bg-indigo-700 rounded text-white px-1 sm:px-4 py-2 text-xs"
                                        >
                                            Send Mpesa Prompt
                                        </button>
                                        <button
                                            @click="expressModal=false"
                                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-red-600 bg-red-400 rounded text-white px-1 sm:px-4 py-2 text-xs"
                                        >
                                            Cancel Transaction
                                        </button>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- For Mobile     -->
        <div
            v-if="paymentModal"
            class="flex sm:hidden relative z-10"
            aria-labelledby="modal-title"
            role="dialog"
            aria-modal="true"
        >
            <div
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
            ></div>

            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div
                    class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
                >
                    <div
                        class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
                    >
                        <div></div>
                        <div
                            class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                        >
                            <!-- Modal header -->
                            <div class="flex justify-end p-2">
                                <a
                                    v-if="status == 'Cancelled'"
                                    @click="closeSTK"
                                    class="hover:cursor-pointer"
                                >
                                    <!-- <a
                            v-if="status == 'Cancelled'"
                            :href="route('checkout', post._id)"
                            @click="closeSTK"
                        > -->
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
                                    v-if="status != 'Cancelled'"
                                    class="mb-5 text-xs font-extrabold text-gray-800 dark:text-gray-400"
                                >
                                    Complete transaction on your phone by
                                    entering your MPESA pin
                                </h3>
                            </div>
                            <div
                                v-if="status == 'Cancelled'"
                                class="p-4 pt-0 text-center"
                            >
                                <h3
                                    class="mb-5 font-heading-font text-lg font-extrabold text-red-600 dark:text-gray-400 italic"
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
                                    class="mb-5 font-heading-font text-lg font-extrabold text-green-600 dark:text-gray-400 italic"
                                >
                                    Transaction Pending
                                </h3>
                            </div>
                            <div class="flex flex-col px-10">
                                <h4
                                    v-if="status != 'Cancelled'"
                                    class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400"
                                >
                                    Phone Number:
                                    <span
                                        class="ml-2 font-extrabold text-md sm:text-xl text-indigo-600"
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

                                <!-- <button
                            v-if="status == 'Cancelled'"
                            @click="stkPush"
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-orange-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        >
                            Restart Mpesa Express Payment
                        </button> -->

                                <button
                                    v-if="status != 'Cancelled'"
                                    @click="confirm"
                                    data-modal-toggle="popup-modal"
                                    type="button"
                                    class="text-white bg-indigo-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                                >
                                    Tap at intervals to Confirm Payment
                                </button>

                                <!-- </a> -->
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
            class=" overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex hidden items-center z-50 w-full md:inset-0 h-modal md:h-full"
        >
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                ></div>
                <!-- Modal content -->
                <div
                    class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                >
                    <!-- Modal header -->
                    <div class="flex justify-end p-2">
                        <a
                            v-if="status == 'Cancelled'"
                            @click="closeSTK"
                            class="hover:cursor-pointer"
                        >
                            <!-- <a
                            v-if="status == 'Cancelled'"
                            :href="route('checkout', post._id)"
                            @click="closeSTK"
                        > -->
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
                            v-if="status != 'Cancelled'"
                            class="mb-5 text-xs font-extrabold text-gray-800 dark:text-gray-400"
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
                            class="mb-5 font-heading-font text-lg font-extrabold text-red-600 dark:text-gray-400 italic"
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
                            class="mb-5 font-heading-font text-lg font-extrabold text-green-600 dark:text-gray-400 italic"
                        >
                            Transaction Pending
                        </h3>
                    </div>
                    <div class="flex flex-col px-10">
                        <h4
                            v-if="status != 'Cancelled'"
                            class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400"
                        >
                            Phone Number:
                            <span
                                class="ml-2 font-extrabold text-xl text-indigo-600"
                            >
                                {{ this.form.number }}</span
                            >
                        </h4>
                    </div>
                    <div class="p-4 pt-0 text-center mt-5">
                        <div
                            v-if="status != 'Cancelled' && !timeout"
                            id="timer"
                            class="mb-4"
                        >
                            <!-- <span id="minutes">{{ minutes | twoDigits }}</span> -->
                            <!-- <span id="middle">:</span> -->
                            <span
                                id="seconds"
                                class="font-extrabold text-indigo-700 font-primary-font text-lg"
                                >{{ seconds | twoDigits }} Seconds</span
                            >
                        </div>
                        <button
                            v-if="status != 'Cancelled' && timeout == false"
                            @click="confirm"
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-indigo-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        >
                            Tap at intervals to Confirm Payment
                        </button>
                        <button
                            v-if="timeout"
                            @click="closeSTK"
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        >
                            Restart Process
                        </button>
                        <!-- </a> -->
                    </div>
                </div>
            </div>
        </div>

        <Spinner v-if="spinner" />

        <!-- expressModal     -->
    </div>
</template>

<script>
import MainMenu from "./Components/MainMenu.vue";
import Spinner from "./Components/Spinner.vue";
import moment from "moment";
import { Countdown } from "vue3-flip-countdown";
import { FlipCountdown } from "vue2-flip-countdown";

const { default: axios } = require("axios");
import dateFormat from "dateformat";

export default {
    name: "Invoice",
    props: {
        main_color: "#EC685C",
        post: "",
        user: Object,
        transId: String,
        accessTokenResponse: Object,
        registeredURLSResponse: Object,
        payment: null,
        status: String,
        membership: String,
        invoiceDetails: Object,
        invoiceStatus: [Boolean, String]
    },
    components: {
        MainMenu,
        Spinner,
        Countdown,
        FlipCountdown
    },
    mounted() {
        // if (this.post == "diamond") {
        //     this.amountMembership = 50000;
        // } else if (this.post == "platinum") {
        //     this.amountMembership = 30000;
        // } else if (this.post == "gold") {
        //     this.amountMembership = 9000;
        // } else if (this.post == "silver") {
        //     this.amountMembership = 6000;
        // } else if (this.post === "bronze") {
        //     this.amountMembership = 1500;
        //     // console.log("1500");
        // }

        this.Status = "";

        this.form.number = this.user.userPhone;

        if (this.membership != null) {
            this.postPurchase = false;
            this.form.userName = this.user.name;
            this.form.userPhone = this.user.phone;
            this.form.userEmail = this.user.email;
        } else {
            return true;
        }

        if (this.invoiceStatus == true) {
            this.unpaidAlert = false;
        } else {
            this.unpaidAlert = true;
        }

        if (this.status == "Cancelled") {
            this.paymentModal = false;
        }
    },
    watch: {
        // transactionStatus(value) {
        //     if (value == "Cancelled") {
        //         this.paymentModal = false;
        //     }
        // }
    },
    computed: {
        amountMembership() {
            if (this.post == "diamond") {
                return 50000;
            } else if (this.post == "platinum") {
                return 30000;
            } else if (this.post == "gold") {
                return 9000;
            } else if (this.post == "silver") {
                return 6000;
            } else if (this.post === "bronze") {
                return 1500;
            }
        },
        membershipSub() {
            if (typeof this.post === "object") {
                return false;
            } else if (typeof this.post === "string") {
                return true;
            }
        },
        invoiceNumber() {
            const n = parseInt(this.invoiceDetails.invoice_number);
            // return n;
            if (n < 10) {
                var leadingZeros = "000" + n.toString();
                return "BID-" + leadingZeros;
            } else if (n < 100) {
                var leadingZeros = "00" + n.toString();
                return "BID-" + leadingZeros;
            } else if (n < 1000) {
                var leadingZeros = "0" + n.toString();
                return "BID-" + leadingZeros;
            } else {
                var leadingZeros = n;
                return "BID-" + leadingZeros;
            }
        },
        now() {
            const now = new Date();
            return dateFormat(now);
        },
        memberPurchase() {
            if (this.membership != null) {
                return true;
            } else {
                return false;
            }
        },
        // amountMembership() {
        //     if (this.membership == "gold") {
        //         return 50000;
        //     } else if (this.membership == "silver") {
        //         return 10000;
        //     } else if (this.membership == "bronze") {
        //         return 2000;
        //     }
        // },
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
    filters: {
        twoDigits: function(num) {
            if (num < 10) {
                return "0" + num;
            } else {
                return num;
            }
        }
    },
    data() {
        return {
            minutes: 0,
            seconds: 60,
            interval: null,
            showContinue: true,
            showReset: false,
            timeout: false,
            spinner: false,
            unpaidAlert: false,
            expressModal: false,
            paymentLog: "",
            form: {
                userName: "",
                userPhone: "",
                userEmail: "",
                number: this.removeSpaces(""),
                account: "",
                amount: this.amount
            },
            modal: false,
            paymentModal: false,
            transactionRestart: false
        };
    },
    methods: {
        closeModal()
        { 
            this.paymentModal=false      
        },
        startTimer() {
            (this.showContinue = false),
                (this.showReset = true),
                (this.interval = setInterval(() => {
                    if (this.seconds === 0) {
                        this.seconds = 59;
                        this.minutes--;
                    } else {
                        this.seconds--;
                    }

                    if (this.minutes === 0 && this.seconds === 0) {
                        this.resetTimer();
                    }
                }, 1000));
        },
        pauseTimer() {
            (this.showReset = true), (this.showContinue = true);
            // this.message = "Never quit, keep going!!";
            clearInterval(this.interval);
        },
        resetTimer() {
            this.showContinue = true;
            (this.showReset = true), (this.minutes = 0);
            this.seconds = 60;
            // this.message = default_title;
        },
        getAccessToken() {
            axios
                .post("/get-token")
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        registerURL() {
            axios
                .post("/register-urls")
                .then(response => {
                    console.log(response.data);
                })
                .catch(error => {
                    console.log(error);
                });
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
        closeSTK() {
            this.paymentModal = false;
            // this.status = "";
            const paymentDetails = {
                payment_number: this.form.number,
                post_id: this.post._id,
                invoicePaid: this.invoiceDetails.payment_status,
                invoiceDetails: this.invoiceDetails,
                user: this.user,
                restart: true,
                invoiceNumber: this.invoiceNumber
            };
            this.$inertia.post("/confirmation", paymentDetails);
        },
        confirm() {
            const paymentDetails = {
                payment_number: this.form.number,
                post_id: this.post._id,
                invoicePaid: this.invoiceDetails.payment_status,
                invoiceDetails: this.invoiceDetails,
                user: this.user,
                restart: false,
                invoiceNumber: this.invoiceNumber
            };
            this.$inertia.post("/confirmation", paymentDetails);
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        mpesaExpress() {
            this.expressModal = true;
        },
        c2b() {
            // if (this.status == "Cancelled") {
            //     this.transactionRestart = true;
            // } else {
            //     this.transactionRestart = false;
            // }

            var strFirstThree = this.form.number.substring(0, 3);
            if (strFirstThree == 254 && this.form.number.length == 12) {
                // this.paymentModal = true;
                const requestBody = {
                    amount: "1",
                    account: this.invoiceNumber,
                    phone: parseInt(this.removeSpaces(this.form.number)),
                    // post: this.post._id,
                    post: this.post,
                    user: this.user,
                    user_name: this.form.userName,
                    user_phone: this.form.userPhone,
                    user_email: this.form.userEmail,
                    restartTrans: this.transactionRestart
                };
                //    console.log(requestBody)
                axios
                    .post(`/invoice/${this.post._id}/c2b/`, requestBody)
                    .then(response => {
                        console.log(response.data);
                    })
                    .catch(error => {
                        console.log(error);
                    });
            } else {
                alert("Your Number Format Should be 254 7XX XXX XXX");
            }
        },
        timedOut() {
            alert("timeout");
        },
        stkPush() {
            // if (this.status == "Cancelled") {
            //     this.transactionRestart = true;
            // } else {
            //     this.transactionRestart = false;
            // }

            this.timeout = false;
            this.resetTimer();
            this.startTimer();
            this.expressModal = false;
            var strFirstThree = this.form.number.substring(0, 3);
            if (strFirstThree == 254 && this.form.number.length == 12) {
                this.paymentModal = true;
                // setInterval((this.timeout = true), 5000);
                setTimeout(() => {
                    this.timeout = true;
                    this.pauseTimer();
                }, 60000);
                // setTimeout(() => this.timedOut(), 60000);
                const requestBody = {
                    // amount: "1",
                    amount: this.amount,

                    // account: this.form.account,
                    account: this.invoiceNumber,
                    phone: parseInt(this.removeSpaces(this.form.number)),
                    // post: this.post._id,
                    post: this.post,
                    user: this.user,
                    user_name: this.user.userName,
                    user_phone: this.user.userPhone,
                    user_email: this.user.userEmail,
                    restartTrans: this.transactionRestart
                    // payment_number: this.form.number,
                    // post_id: this.post._id,
                    // invoicePaid: this.invoiceDetails.payment_status,
                    // invoiceDetails: this.invoiceDetails,
                    // invoiceNumber: this.invoiceNumber
                };
                //    console.log(requestBody)
                axios
                // .post(`/invoice/payment/stkPush/`, requestBody)
                .post(`/invoice/${this.post._id}/stkPush/`, requestBody)
                    .then(response => {
                        console.log(response);
                        if (this.status != "Cancelled") {
                            if (this.status == "Success") {
                                alert("stop");
                                const myInterval = window
                                    .setInterval(() => {
                                        this.confirm();
                                    }, 3000)

                                    .then(result => {
                                        alert("clear");
                                        return clearInterval(myInterval);
                                    })
                                    .catch(err => {});
                            }
                            const myInterval = window.setInterval(() => {
                                this.confirm();
                            }, 2000);
                            if (this.status == "Success") {
                                // alert("stop");
                                const myInterval = window.setInterval(() => {
                                    this.confirm();
                                }, 3000);
                                return clearInterval(myInterval);
                            }
                        }
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
