<template>
  <div>
    <div class="max-w-full mx-auto">
      <div class="flex flex-wrap items-center -mx-3">
        <button
          @click="membership('bronze')"
          class="transform transition hover:scale-75 duration-700 w-full lg:w-1/5 px-3 mb-8 lg:mb-0"
        >
          <div class="px-2 py-16 bg-indigo-400 rounded-3xl">
            <div class="pb-8 mb-14 border-b border-gray-400">
              <div class="flex justify-between items-center px-3">
                <h3 class="text-3xl text-white font-bold font-heading">Bronze</h3>
                <p class="text-lg text-white font-bold">KES 1,500</p>
              </div>
            </div>
            <ul class="text-sm text-white mb-16 font-primary-font">
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access all Tenders</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Exclusive Tender Details Access</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Email Notifications Updates</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access To Tender News and blogs</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Billed Daily</span>
              </li>
            </ul>
            <div class="text-center">
              <a
                class="transform transition hover:scale-125 duration-700 bg-white hover:bg-transparent hover:text-white inline-block px-10 py-4 border border-blueGray-300 hover:border-blueGray-100 rounded-full font-bold text-black"
                href="#"
                @click="membership('bronze')"
                >Subscribe to Plan</a
              >
            </div>
          </div>
        </button>

        <button
          @click="membership('silver')"
          class="transform transition hover:scale-75 duration-700 w-full lg:w-1/5 px-3 mb-8 lg:mb-0"
        >
          <div class="px-2 py-16 bg-indigo-500 rounded-3xl">
            <div class="pb-8 mb-14 border-b border-gray-400">
              <div class="flex justify-between items-center px-3">
                <h3 class="text-3xl text-white font-bold font-heading">Silver</h3>
                <p class="text-lg text-white font-bold">KES 6,000</p>
              </div>
            </div>
            <ul class="text-sm text-white mb-16 font-primary-font">
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access all Tenders</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Exclusive Tender Details Access</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Email Notifications Updates</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access To Tender News and blogs</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Billed Weekly</span>
              </li>
            </ul>
            <div class="text-center">
              <a
                class="transform transition hover:scale-125 duration-700 bg-white hover:bg-transparent hover:text-white inline-block px-10 py-4 border border-blueGray-300 hover:border-blueGray-100 rounded-full font-bold text-black"
                href="#"
                @click="membership('silver')"
                >Subscribe to Plan</a
              >
            </div>
          </div>
        </button>

        <button
          @click="membership('gold')"
          class="transform transition hover:scale-75 duration-700 w-full lg:w-1/5 px-3 mb-8 lg:mb-0"
        >
          <div class="px-2 py-16 bg-indigo-600 rounded-3xl">
            <div class="pb-8 mb-14 border-b border-gray-400">
              <div class="flex justify-between items-center px-3">
                <h3 class="text-3xl text-white font-bold font-heading">Gold</h3>
                <p class="text-lg text-white font-bold">KES 9,000</p>
              </div>
            </div>
            <ul class="text-sm text-white mb-16 font-primary-font">
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access all Tenders</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Exclusive Tender Details Access</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Email Notifications Updates</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access To Tender News and blogs</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Billed Monthly</span>
              </li>
            </ul>
            <div class="text-center">
              <a
                class="transform transition hover:scale-125 duration-700 bg-white hover:bg-transparent hover:text-white inline-block px-10 py-4 border border-blueGray-300 hover:border-blueGray-100 rounded-full font-bold text-black"
                href="#"
                @click="membership('gold')"
                >Subscribe to Plan</a
              >
            </div>
          </div>
        </button>

        <button
          @click="membership('platinum')"
          class="transform transition hover:scale-75 duration-700 w-full lg:w-1/5 px-3 mb-8 lg:mb-0"
        >
          <div class="px-2 py-16 bg-indigo-700 rounded-3xl">
            <div class="pb-8 mb-14 border-b border-gray-400">
              <div class="flex justify-between items-center px-3">
                <h3 class="text-3xl text-white font-bold font-heading">Platinum</h3>
                <p class="text-lg text-white font-bold">KES 30,000</p>
              </div>
            </div>
            <ul class="text-sm text-white mb-16 font-primary-font">
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access all Tenders</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Exclusive Tender Details Access</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Email Notifications Updates</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access To Tender News and blogs</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Billed Every 6 Months</span>
              </li>
            </ul>
            <div class="text-center">
              <a
                class="transform transition hover:scale-125 duration-700 bg-white hover:bg-transparent hover:text-white inline-block px-10 py-4 border border-blueGray-300 hover:border-blueGray-100 rounded-full font-bold text-black"
                href="#"
                @click="membership('platinum')"
                >Subscribe to Plan</a
              >
            </div>
          </div>
        </button>

        <button
          @click="membership('diamond')"
          class="transform transition hover:scale-75 duration-700 w-full lg:w-1/5 px-3 mb-8 lg:mb-0"
        >
          <div class="px-2 py-16 bg-indigo-800 rounded-3xl">
            <div class="pb-8 mb-14 border-b border-blueGray-300">
              <div class="flex justify-between items-center px-3">
                <h3 class="text-3xl text-white font-bold font-heading">Diamond</h3>
                <p class="text-lg text-white font-bold">KES 50,000</p>
              </div>
            </div>
            <ul class="text-sm text-white mb-16 font-primary-font">
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access all Tenders</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Exclusive Tender Details Access</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Email Notifications Updates</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Access To Tender News and blogs</span>
              </li>
              <li class="flex items-center mb-8">
                <span class="mr-6">
                  <svg
                    width="20"
                    height="16"
                    viewbox="0 0 20 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                      fill="white"
                    ></path>
                  </svg>
                </span>
                <span>Billed Annually</span>
              </li>
            </ul>
            <div class="text-center">
              <a
                class="transform transition hover:scale-125 duration-700 bg-white hover:bg-transparent hover:text-white inline-block px-10 py-4 border border-blueGray-300 hover:border-blueGray-100 rounded-full font-bold text-black"
                href="#"
                @click="membership('diamond')"
                >Subscribe to Plan</a
              >
            </div>
          </div>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Subscription",
  components: {
    //   Categories,
  },
  data() {
    return {};
  },
  watch: {},
  computed: {
    currentMenu() {
      return route().current();
    },
  },
  methods: {
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
  },
};
</script>

<style scoped></style>
