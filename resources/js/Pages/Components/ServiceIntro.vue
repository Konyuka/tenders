<template>
  <div class="mx-5 rounded-lg">
    <div class="bg-gray-50 mt-10 sm:mt-5 rounded-lg">
      <div class="relative bg-white">
        <!-- Overlapping background -->
        <div aria-hidden="true" class="hidden absolute bg-gray-50 w-full h-6 bottom-0 lg:block"></div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-gray-50">
          <div class="pt-6 sm:pt-16 lg:pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="text-center">
                <h2 class="text-2xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">
                  Tender Information Pricing
                </h2>
                <p class="text-left mt-4 text-sm sm:text-xl text-gray-600">
                  Our pricing options are designed to give you the most value for your money, whether you're a small
                  business owner just
                  starting out or a seasoned pro looking to stay ahead of the game. With our affordable pricing plans,
                  you'll have access
                  to the latest and most comprehensive tender information in Kenya, all in one convenient place.

                  <br><br>
                  We understand that every business has unique needs, which is why we offer custom pricing solutions for
                  those looking for
                  a more tailored approach. Simply contact us to discuss your specific requirements and we'll work with
                  you to create a
                  package that fits your needs and budget.

                  <br><br>
                  Be sure to also checkout our affordable membership plans.

                </p>
              </div>
            </div>
          </div>
          <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
            <div class="relative">
              <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
              <div class="relative max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                  <div class="flex-1 bg-white px-6 py-2 lg:p-2">
                    <!-- Cards -->
                    <div class="relative mt-8 max-w-2xl mx-auto px-4 pb-8 sm:mt-12 sm:px-6 lg:max-w-7xl lg:px-8 lg:pb-0">
                      <!-- Decorative background -->
                      <div aria-hidden="true"
                        class="hidden absolute top-4 bottom-6 left-8 right-8 inset-0 bg-indigo-700 rounded-tl-lg rounded-tr-lg lg:block">
                      </div>

                      <div class="relative space-y-6 lg:space-y-0 lg:grid lg:grid-cols-3">
                        <a @click.prevent="pricing('150')" href=""
                          class="hover:bg-indigo-500 transition transform hover:scale-75 duration-700 bg-white sm:bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                          <div>
                            <h3 class="text-gray-700 sm:text-white text-sm font-semibold uppercase tracking-wide">
                              Single Tender Price
                            </h3>
                            <div
                              class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                              <div class="mt-3 flex items-center">
                                <p class="text-gray-700 sm:text-white text-4xl font-extrabold tracking-tight">
                                  KES 500
                                </p>
                                <!-- <div class="ml-4">
                        <p class="text-indigo-200 text-sm">Billed Depending on Tender Expiry</p>
                        </div> -->
                              </div>
                              <!-- <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</a> -->
                            </div>
                          </div>
                          <h4 class="sr-only">Features</h4>
                          <ul role="list"
                            class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-b sm:border-t divide-y lg:border-t-0 mb-10">
                            <li class="py-3 flex items-center">
                              <!-- Heroicon name: solid/check -->
                              <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                              </svg>
                              <span class="text-gray-700 sm:text-white ml-3 text-sm font-medium">Single tender
                                details</span>
                            </li>
                          </ul>
                        </a>

                        <a @click.prevent="subscription(3000)" href="#"
                          class="transition transform hover:scale-75 duration-700 bg-white ring-2 ring-indigo-700 shadow-xl pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                          <div>
                            <h3 class="text-indigo-600 text-sm font-semibold uppercase tracking-wide">
                              Monthly Subscription Price
                            </h3>
                            <div
                              class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                              <div class="mt-3 flex items-center">
                                <p class="text-indigo-600 text-4xl font-extrabold tracking-tight">
                                  KES 3,000
                                </p>

                              </div>
                            </div>
                          </div>
                          <h4 class="sr-only">Features</h4>
                          <ul role="list"
                            class="border-indigo-500 divide-gray-200 mt-7 border-b sm:border-t divide-y lg:border-t-0 mb-10">
                            <li class="py-3 flex items-center">
                              <svg class="text-gray-600 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                              </svg>
                              <span class="text-gray-600 ml-3 text-sm font-medium">Tender information for a month</span>
                            </li>
                          </ul>
                        </a>

                        <a @click.prevent="subscription(30000)" href=""
                          class="hover:bg-indigo-500 hover:text-black transition transform hover:scale-75 duration-700 bg-white sm:bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                          <div>
                            <h3 class="text-gray-700 sm:text-white text-sm font-semibold uppercase tracking-wide">
                              Annual Subscription Price

                            </h3>
                            <div
                              class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                              <div class="mt-3 flex items-center">
                                <p class="text-gray-700 sm:text-white text-4xl font-extrabold tracking-tight">
                                  KES 30,000
                                </p>
                              </div>
                            </div>
                          </div>
                          <h4 class="sr-only">Features</h4>
                          <ul role="list"
                            class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-b sm:border-t divide-y lg:border-t-0 mb-10">
                            <li class="py-3 flex items-center">
                              <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                              </svg>
                              <span class="text-gray-700 sm:text-white ml-3 text-sm font-medium">Tender information for a
                                year</span>
                            </li>
                          </ul>
                        </a>

                      </div>
                    </div>
                  </div>
                  <div
                    class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                    <p class="text-lg leading-6 font-medium text-gray-900">
                      Get customized tender notifications
                    </p>
                    <div class="mt-4 flex items-center justify-center text-2xl sm:text-3xl font-extrabold text-gray-900">
                      <span> Notification Plans</span>
                    </div>
                    <!-- <p class="mt-4 text-sm">
                      <a href="#" class="font-medium text-gray-500 underline">
                        Learn about our membership policy
                      </a>
                    </p> -->
                    <button @click="notificationPlansModal = !notificationPlansModal" class="mt-6">
                      <div class="rounded-md shadow ">
                        <!-- :href="route('subscriptions')" -->
                          <a
                            class="font-bold flex items-center justify-center px-5 py-3 border border-transparent text-base rounded-md text-white bg-indigo-600 hover:bg-indigo-500">
                            View Plans
                          </a>
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-indigo-700 mt-10 mx-2 sm:mx-10 rounded-3xl">
      <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
        <h2 class="text-xl font-extrabold text-white sm:text-4xl">
          <span class="block">Explore Bidders Portal</span>
        </h2>
        <p class="mt-4 text-sm sm:text-lg leading-6 text-indigo-200 font-heading-font">
          Are you tired of constantly checking the government tender website and still missing out on opportunities? Well,
          you're
          in luck! By signing up for our newsletter and email notifications, you'll never miss a beat in the tendering
          game.
          <br><br>
          Think of it like having a personal assistant for tenders, except this one never takes a sick day and always has
          the
          latest information at its fingertips. We'll send you updates as soon as new tenders are posted, so you'll always
          be one
          step ahead of the competition.
          <br><br>
          And the best part? Our newsletters are chock-full of hilarious tender-related jokes and puns, so you'll get a
          laugh and
          valuable information all in one. So why settle for a boring inbox when you can have one that's not only
          informative, but
          also entertaining? Sign up now and never miss a tender opportunity again!
        </p>
        <button @click="notificationModal = true"
          class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-bold rounded-md text-black hover:text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto font-heading-font transform transition hover:scale-90 duration-700 hover:shadow-2xl">
          Email Notifications
        </button>
      </div>
    </div>

    

    <div v-if="notificationModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

          <div
            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
            <div>
              <div class="mt-3 text-center sm:mt-5">
                <div class="mt-2">

                  <section class="py-5 sm:py-10 bg-white overflow-hidden">
                    <div class="container px-4 mx-auto">
                      <div class="text-center max-w-xl mx-auto">
                        <div class="mb-6 relative mx-auto w-16 h-16 bg-indigo-600 rounded-full">
                          <img class="absolute top-0 left-0" src="flaro-assets/images/applications/blur.svg" alt="">
                          <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2 -translate-x-1/2">
                            <svg width="40" height="40" viewbox="0 0 40 40" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M5.00098 13.3335L18.152 22.1008C19.2716 22.8473 20.7303 22.8473 21.85 22.1008L35.001 13.3335M8.33431 31.6668H31.6676C33.5086 31.6668 35.001 30.1744 35.001 28.3335V11.6668C35.001 9.82588 33.5086 8.3335 31.6676 8.3335H8.33431C6.49336 8.3335 5.00098 9.82588 5.00098 11.6668V28.3335C5.00098 30.1744 6.49336 31.6668 8.33431 31.6668Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                          </div>
                        </div>
                        <h2
                          class="mb-3 text-lg sm:text-4xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">
                          Join Our
                          Newsletter</h2>
                        <p class="text-xs sm:text-sm mb-11 font-medium text-gray-600 leading-relaxed">
                          Why was the tender document always so organized? <br>
                          Because it had a strong binding proposal
                        </p>
                        <form class="mb-9">
                          <div class="mb-5">
                            <input v-model="newsForm.name"
                              class="px-4 py-3 w-full text-gray-500 font-medium text-center placeholder-gray-500 outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                              id="newsletterInput1-1" type="text" placeholder="First &amp; last name">
                          </div>
                          <div class="mb-5">
                            <input v-model="newsForm.email"
                              class="px-4 py-3 w-full text-gray-500 font-medium text-center placeholder-gray-500 outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                              id="newsletterInput1-2" type="text" placeholder="Email address">
                          </div>
                          <div class="mb-5 mt-5">
                            <!-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tailored Tender Category Mailing</label> -->
                            <textarea v-model="newsForm.messsage" id="message" rows="4"
                              class="block p-2.5 w-full text-xs sm:text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Write to us your desired kind of tendering mail you would like to receive. This could also be your desired category tags..."></textarea>
                          </div>
                          <div class="mt-3 flex sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                            <!-- <button type="button"
                              class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">
                              Confirm</button> -->
                            <button @click="newsletter" type="button"
                              class="mr-2 mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-indigo-600 px-4 py-2 text-base font-medium text-white hover:text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm">Confrim</button>
                            <button @click="notificationModal = false" type="button"
                              class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:mt-0 sm:text-sm">Later</button>
                          </div>
                        </form>
                        <div class="flex flex-wrap justify-center items-center -m-1.5">
                          <div class="w-auto p-1.5">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M8.00033 10.0002V11.3336M4.00033 14.0002H12.0003C12.7367 14.0002 13.3337 13.4033 13.3337 12.6669V8.66691C13.3337 7.93053 12.7367 7.33358 12.0003 7.33358H4.00033C3.26395 7.33358 2.66699 7.93053 2.66699 8.66691V12.6669C2.66699 13.4033 3.26395 14.0002 4.00033 14.0002ZM10.667 7.33358V4.66691C10.667 3.19415 9.47308 2.00024 8.00033 2.00024C6.52757 2.00024 5.33366 3.19415 5.33366 4.66691V7.33358H10.667Z"
                                stroke="#A1A1AA" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                          </div>
                          <div class="w-auto p-1.5">
                            <p class="font-sans text-xs sm:text-sm text-gray-600">We never share your information to any
                              third party</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div v-if="chooseAuth" class="flex relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
          <div
            class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-end p-5">
                <button @click="chooseAuth = false" type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                  data-modal-toggle="popup-modal">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 pt-0 text-center mt-5">
                <i class="fas fa-lock-open fa-2xl mb-10 text-gray-300"></i>
                <h3 class="mb-5 text-xl sm:text-3xl font-extrabold text-gray-800 dark:text-gray-400">
                  Link An Account To Subscribe
                </h3>
              </div>

              <div class="flex justify-around mb-5">
                <div>
                  <a :href="route('login')" data-modal-toggle="popup-modal" type="button"
                    class="font-primary-font text-white bg-indigo-600 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-extrabold rounded-xl text-xl sm:text-2xl inline-flex items-center px-4 py-4 sm:px-10 sm:py-4 text-center mr-2">
                    Sign In
                  </a>
                </div>
                <div>
                  <a :href="route('register')" data-modal-toggle="popup-modal" type="button"
                    class="font-primary-font text-white bg-indigo-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-extrabold rounded-xl text-xl sm:text-2xl inline-flex items-center px-4 py-4 sm:px-10 sm:py-4 text-center mr-2">
                    Sign Up
                  </a>
                </div>
              </div>

              <div class="p-4 pt-0 text-center mt-5"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div v-if="notificationPlansModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

          <div
            class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
            <div>
              <button @click="notificationPlansModal=!notificationPlansModal" class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-red-100">
                <i class="fas fa-xmark"></i>
              </button>
              <div class="mt-3 text-center sm:mt-5">
                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Choose Notification Plan</h3>
                <div class="mt-2">

                  <div class="m-10 flex justify-between mx-10 gap-2">
                    <button @click="setNotification('monthly')" type="button" class="rounded-md bg-indigo-600 px-1 sm:px-5 py-2.5 text-xs sm:text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                      Monthly at KES 500
                    </button>
                    <button @click="setNotification('annualy')" type="button" class="rounded-md bg-indigo-600 px-1 sm:px-5 py-2.5 text-xs sm:text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                      Yearly at KES 5000
                    </button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</template>

<script>
import Subscriptions from "./Subscriptions.vue";
import OurServices from "./OurServices.vue";

export default {
  name: "ServiceIntro",
  components: {
    Subscriptions,
    OurServices,
  },
  data() {
    return {
      notificationPlansModal: false,
      notificationModal: false,
      chooseAuth: false,
      membershipModal: true,
      newsForm: {
        name: null,
        email: null,
        messsage: null,
      }
    };
  },
  mounted() {
    if (localStorage.getItem("userName") != "null") {
      this.newsForm.name = localStorage.getItem("userName");
    }
    if (localStorage.getItem("userPhone") != "null") {
      this.newsForm.email = localStorage.getItem("userEmail");
    }

  },
  watch: {},
  computed: {},
  methods: {
    setNotification(value){
      if (value == 'monthly') {
        if (this.$parent.user == null) {
          this.notificationPlansModal = false
          this.chooseAuth = true;
        } else {
          let membershipAmount = 500
          let payload = {
            membership: membershipAmount,
            user: this.$parent.user,
          };
          this.$inertia.post(`/checkout/${membershipAmount}`, payload);
        }
      }
      if (value == 'annualy') {
        if (this.$parent.user == null) {
          this.notificationPlansModal = false
          this.chooseAuth = true;
        } else {
          let membershipAmount = 5000
          let payload = {
            membership: membershipAmount,
            user: this.$parent.user,
          };
          this.$inertia.post(`/checkout/${membershipAmount}`, payload);
        }
      }

    },
    membership(value) {
      console.log(value);
      if (this.currentMenu == "admin.subscriptions") {
        let payload = {
          membership: value,
          user: this.$parent.$parent.user,
        };
        this.$inertia.post(`/checkout/${value}`, payload);
      } else {
        // console.log(this.$parent.$parent.user);
        // alert("check");
        if (this.$parent.$parent.user == null) {
          this.$parent.chooseAuth = true;
        } else {
          let payload = {
            membership: value,
            user: this.$parent.$parent.user,
          };
          this.$inertia.post(`/checkout/${value}`, payload);
          // `/checkout/${value}`
        }
      }
    },
    subscription(value) {
      if (value == 3000) {
        if (this.$parent.user == null) {
          this.chooseAuth = true;
        } else {
          let payload = {
            membership: value,
            user: this.$parent.user,
          };
          this.$inertia.post(`/checkout/${value}`, payload);
        }
      }
      if (value == 30000) {
        if (this.$parent.user == null) {
          this.chooseAuth = true;
        } else {
          let payload = {
            membership: value,
            user: this.$parent.user,
          };
          this.$inertia.post(`/checkout/${value}`, payload);
        }
      }
    },
    pricing(value) {
      // this.$inertia.get("pricing", value);
      this.$parent.spinner = true;
      this.$inertia
        .get(`pricing/${value}`)
        .then((result) => {
          if (result) {
            this.$parent.spinner = false;
          }
        })
        .catch((err) => {
          if (err) {
          }
        });
    },
    membership(value) {
      console.log(value);
      if (this.$parent.user == null) {
        this.chooseAuth = true;
      } else {
        let payload = {
          membership: value,
          user: this.$parent.user,
        };
        this.$inertia.post(`/checkout/${value}`, payload);
        // `/checkout/${value}`
      }
    },
  },
};
</script>

<style scoped></style>
