<template>
  <div>
    <TopBanner />
    <MainMenu class="sticky top-0 z-50" />

    <div class="p-10">
      <div class="relative mb-10">
        <h2
          class="text-center text-4xl leading-8 font-extrabold tracking-tight text-gray-700 sm:text-4xl"
        >
          Subscription Plans
        </h2>
      </div>
      <Subscriptions />
    </div>

    <!-- For Mobile     -->
    <div
      v-if="chooseAuth"
      class="flex sm:hidden relative z-10"
      aria-labelledby="modal-title"
      role="dialog"
      aria-modal="true"
    >
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed z-10 inset-0 overflow-y-auto">
        <div
          class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
        >
          <div
            class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-sm sm:w-full sm:p-6"
          >
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-end p-5">
                <button
                  @click="chooseAuth = false"
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
              </div>
              <!-- Modal body -->
              <div class="p-4 pt-0 text-center mt-5">
                <i class="fas fa-lock-open fa-2xl mb-10 text-gray-300"></i>
                <h3
                  class="mb-5 text-xl sm:text-3xl font-extrabold text-gray-800 dark:text-gray-400"
                >
                  Link An Account To Subscribe
                </h3>
              </div>

              <div class="flex justify-around mb-5">
                <div>
                  <a
                    :href="route('login')"
                    data-modal-toggle="popup-modal"
                    type="button"
                    class="font-primary-font text-white bg-indigo-600 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-extrabold rounded-xl text-xl sm:text-2xl inline-flex items-center px-4 py-4 sm:px-10 sm:py-4 text-center mr-2"
                  >
                    Sign In
                  </a>
                </div>
                <div>
                  <a
                    :href="route('register')"
                    data-modal-toggle="popup-modal"
                    type="button"
                    class="font-primary-font text-white bg-indigo-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-extrabold rounded-xl text-xl sm:text-2xl inline-flex items-center px-4 py-4 sm:px-10 sm:py-4 text-center mr-2"
                  >
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

    <div
      v-if="chooseAuth"
      id="popup-modal"
      tabindex="-1"
      class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex hidden items-center z-50 w-full md:inset-0 h-modal md:h-full"
    >
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex justify-end p-5">
            <button
              @click="chooseAuth = false"
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
          </div>
          <!-- Modal body -->
          <div class="p-4 pt-0 text-center mt-5">
            <i class="fas fa-lock-open fa-2xl mb-10 text-gray-300"></i>
            <h3 class="mb-5 text-3xl font-extrabold text-gray-800 dark:text-gray-400">
              Link An Account To Subscribe
            </h3>
          </div>

          <div class="flex justify-around mb-5">
            <div>
              <a
                :href="route('login')"
                data-modal-toggle="popup-modal"
                type="button"
                class="font-primary-font text-white bg-indigo-600 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-extrabold rounded-xl text-2xl inline-flex items-center px-10 py-4 text-center mr-2"
              >
                Sign In
              </a>
            </div>
            <div>
              <a
                :href="route('register')"
                data-modal-toggle="popup-modal"
                type="button"
                class="font-primary-font text-white bg-indigo-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-extrabold rounded-xl text-2xl inline-flex items-center px-10 py-4 text-center mr-2"
              >
                Sign Up
              </a>
            </div>
          </div>

          <div class="p-4 pt-0 text-center mt-5">
            <!-- <a :href="route('unlock', this.transId)">
                        <button
                            data-modal-toggle="popup-modal"
                            type="button"
                            class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-lg inline-flex items-center px-5 py-2.5 text-center mr-2"
                        >
                            Tap to Unlock Tender Details
                        </button>
                        </a> -->
          </div>
        </div>
      </div>
    </div>

    <MainFooter class="mt-5" />
  </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";
import Subscriptions from "./Components/Subscriptions.vue";

export default {
  name: "Subscription",
  components: {
    TopBanner,
    MainMenu,
    MainFooter,
    Subscriptions,
  },
  data() {
    return {
      chooseAuth: false,
    };
  },
  watch: {},
  computed: {},
  methods: {},
};
</script>

<style scoped></style>
