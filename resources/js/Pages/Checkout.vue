<template>
  <div class="">
    <body class="overflow-x-hidden antialiased">
        <div class="flex flex-col h-screen">
        <TopBanner class="sticky top-0 z-50" />
        <!-- <MainMenu class="sticky top-0 z-50" /> -->

            <div class="bg-white">
            <!-- Background color split screen for large screens -->
            <div class="hidden lg:block fixed top-0 left-0 w-1/2 h-full bg-white" aria-hidden="true"></div>
            <div class="hidden lg:block fixed top-0 right-0 w-1/2 h-full bg-indigo-900" aria-hidden="true"></div>

            <main class="mt-5 relative grid grid-cols-1 gap-x-16 max-w-7xl mx-auto lg:px-8 lg:grid-cols-2">
                <h1 class="sr-only">Checkout</h1>

                <section aria-labelledby="summary-heading" class="bg-indigo-900 text-indigo-300 pt-6 pb-12 md:px-10 lg:max-w-lg lg:w-full lg:mx-auto lg:px-0 lg:pt-0 lg:pb-24 lg:bg-transparent lg:row-start-1 lg:col-start-2">
                <div class="max-w-2xl mx-auto px-4 lg:max-w-none lg:px-0">
                    <h2 id="summary-heading" class="sr-only">Order summary</h2>

                    <dl>
                    <dt class="text-sm font-medium">Cart Value</dt>
                    <dd class="mt-1 text-3xl font-extrabold text-white">KES 50</dd>
                    </dl>

                    <ul role="list" class="text-sm font-medium divide-y divide-white divide-opacity-10">
                    <li class="flex items-start py-6 space-x-4">
                        <!-- <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg" alt="Front of zip tote bag with white canvas, white handles, and black drawstring top." class="flex-none w-20 h-20 rounded-md object-center object-cover"> -->
                        <div class="flex-auto space-y-1">
                        <h3 class="text-white">Kisumu girls sugar tender</h3>
                        <p>Tender Value: <span class="text-white">USD 260,000</span> </p>
                        <p>Expiry Date: <span class="text-white">4th April 22</span> </p>
                        </div>
                        <p class="flex-none text-base font-medium text-white">KES 50</p>
                    </li>

                    <!-- More products... -->
                    </ul>

                    <dl class="text-sm font-medium space-y-6 border-t border-white border-opacity-10 pt-6">
                    <div class="flex items-center justify-between">
                        <dt>Subtotal</dt>
                        <dd>KES 50</dd>
                    </div>

                    <div class="flex items-center justify-between">
                        <dt>Taxes</dt>
                        <dd>KES 0</dd>
                    </div>

                    <div class="flex items-center justify-between border-t border-white border-opacity-10 text-white pt-6">
                        <dt class="text-base">Total</dt>
                        <dd class="text-base">KES 50</dd>
                    </div>
                    </dl>
                </div>

                 <div class="mt-10 flex justify-end pt-6 border-t border-gray-200">
                    <button @click="paymentModal=true" type="submit" class="bg-white border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-black hover:bg-green-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Pay now</button>
                </div>
                </section>

                <section aria-labelledby="payment-and-shipping-heading" class="py-16 lg:max-w-lg lg:w-full lg:mx-auto lg:pt-0 lg:pb-24 lg:row-start-1 lg:col-start-1">
                <h2 id="payment-and-shipping-heading" class="sr-only">Payment and shipping details</h2>

                <form>
                    <div class="max-w-2xl mx-auto px-4 lg:max-w-none lg:px-0">
                    <div>
                        <h3 id="contact-info-heading" class="text-lg font-extrabold text-gray-900">Contact information</h3>

                        <div class="mt-6 shadow-2xl">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Mobile Phone</label>
                        <div class="mt-1">
                            <input placeholder="254 7XX XXX XXX" type="number" id="phone-number" name="phone-number"  class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        </div>

                        <div class="mt-6 shadow-2xl">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <div class="mt-1">
                            <input placeholder="user@email.com" type="email" id="email-address" name="email-address" class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        </div>

                    </div>

                    <div class="mt-10">
                        <h3 id="payment-heading" class="text-lg font-extrabold text-gray-900">Payment information</h3>

                        <div class="mt-6 grid grid-cols-3 sm:grid-cols-4 gap-y-6 gap-x-4">
                        <div class="col-span-3 sm:col-span-4 shadow-2xl">
                            <label for="card-number" class="block text-sm font-medium text-gray-700">Mpesa / Payment Number</label>
                            <div class="mt-1">
                                <input placeholder="254 7XX XXX XXX" type="number" id="email-address" name="email-address" class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-4 shadow-2xl">
                            <label for="card-number" class="block text-sm font-medium text-gray-700">Mpesa Account Name</label>
                            <div class="mt-1">
                                <input placeholder="Mark Massai / Blue Inc." type="text" id="email-address" name="email-address" class="h-10 p-2 border-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        </div>
                    </div>

                    <div class="mt-10">

                        <div class="mt-6 flex items-center">
                        <input id="same-as-shipping" name="same-as-shipping" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                        <div class="ml-2">
                            <label for="same-as-shipping" class="text-sm font-medium text-gray-900">Subscribe for news letters</label>
                        </div>
                        </div>
                    </div>

                    </div>
                </form>
                </section>
            </main>
            </div>


        </div>


      <MainFooter/>

      <div  v-if="paymentModal" id="popup-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-end p-2">
                    <button @click="paymentModal=false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 pt-0 text-center">
                    <i class="fas fa-coins fa-2xl mb-10"></i>
                    <h3 class="mb-5 text-lg font-extrabold text-gray-500 dark:text-gray-400">Payment Details</h3>
                </div>
                <div class="flex flex-col px-10">
                    <h4 class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400">Paybill Number: <span class="ml-2 font-extrabold text-xl text-indigo-600"> 320567</span> </h4>
                    <h4 class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400">Account Number: <span class="ml-2 font-extrabold text-xl text-indigo-600"> IUFLNSD</span> </h4>
                    <h4 class="mb-5 text-sm font-bold text-gray-500 dark:text-gray-400">Payment Amount: <span class="ml-2 font-extrabold text-xl text-indigo-600"> KES 50</span> </h4>

                </div>
                <div class="p-4 pt-0 text-center mt-5">
                    <button data-modal-toggle="popup-modal" type="button" class="text-white bg-indigo-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Confirm the Payment
                    </button>
                </div>

            </div>
        </div>
      </div>

    </body>
  </div>
</template>

<script>
import TopBanner from './Components/TopBanner.vue'
import MainMenu from './Components/MainMenu.vue'
import MainFooter from './Components/MainFooter.vue'

export default {
    name:'Landing',
    props: {
    },
    components: {
        TopBanner,
        MainMenu,
        MainFooter
    },
    watch: {
    },
    mounted () {
    },
    computed: {
    },
    data () {
        return {
            modal: false,
            paymentModal: false
        }
    },
    methods:{
        clearFilters(){

        },
        loadFilters(){

        }
    }
}
</script>
