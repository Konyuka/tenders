<template>
  <div>
    <section class="bg-white mx-2 sm:mx-5 rounded-lg">
      <div class="container px-1 py-6 mx-auto">
        <div class="">
          <h1
            class="font-primary-font flex justify-around text-3xl font-bold text-indigo-600 capitalize lg:text-5xl dark:text-white"
          >
            Featured Tenders
          </h1>
        </div>

        <section class="text-gray-600 body-font overflow-hidden">
          <div class="flex flex-row my-5 mx-2">
            <div class="md:w-4/5 w-full sm:mr-5">
              <div class="columns-1">
                <a
                  v-for="post in this.posts.slice(0, 1)"
                  :key="post._id"
                  :href="route('free', post._id)"
                  class="hover:bg-green-100 animate-wiggle border-double mb-16 group bg-white border-4 mt-1 my-2 border-indigo-500 rounded-lg shadow-2xl transform transition hover:scale-75 duration-700 hover:shadow-2xl p-5 md:w-full flex flex-col min-h-2xl items-start"
                >
                  <div class="flex justify-between w-full">
                    <div class="text-center">
                      <h1
                        class="text-lg sm:text-3xl text-gray-600 font-heading-font font-bold mt-0 mb-6"
                      >
                        Daily
                        <span class="text-green-600 font-bold-font">Free</span>
                        Tender
                      </h1>
                    </div>
                    <div
                      class="invisible sm:visible text-xs sm:text-lg font-heading-font font-extrabold"
                    >
                      Posted:
                      <span
                        class="inline-block py-1 px-2 rounded bg-indigo-50 text-green-500 text-xs font-bold tracking-widest"
                      >
                        {{ ago(post.created_at) }}</span
                      >
                    </div>
                    <div
                      class="invisible sm:visible font-heading-font font-extrabold"
                      v-if="expired(post)"
                    >
                      Last date of Bid:
                      <span
                        class="inline-block py-1 px-2 rounded bg-red-50 text-red-500 text-xs font-bold tracking-widest"
                      >
                        Tender Closed
                      </span>
                    </div>
                    <div
                      v-else
                      class="invisible sm:visible font-heading-font font-extrabold"
                    >
                      Last Day of Bid:
                      <span
                        class="inline-block py-1 px-2 rounded bg-green-100 text-green-500 text-xs font-bold tracking-widest"
                      >
                        {{
                          // togoFormat(post.expiry)
                          dateFormat(post.expiry)
                        }}</span
                      >
                    </div>
                  </div>
                  <p
                    class="text-md sm:text-lg m-3 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold"
                  >
                    {{ post.tender_brief }}
                  </p>

                  <div
                    class="flex items-center flex-wrap mt-4 border-b-2 border-gray-100 w-full"
                  >
                    <!-- <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                    >
                      <i class="w-4 h-4 mr-1 fas fa-coins text-green-500"></i>
                      {{ post.funded_by }}
                    </span> -->
                    <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                    >
                      <i
                        class="w-4 h-4 mr-1 fas fa-location-crosshairs text-green-500"
                      ></i>
                      <!-- {{ post.country }} -->
                      Kenya
                    </span>
                  </div>

                  <div class="mt-4">
                    <a
                      class="text-green-500 inline-flex items-center font-heading-font font-extrabold italics text-lg"
                      >Get Tender Details for free
                      <svg
                        class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </a>

                <a
                  v-for="post in this.getArray.slice(1)"
                  :key="post._id"
                  class="group bg-white border-2 mt-1 my-2 border-indigo-600 rounded-lg shadow-xl hover:shadow-2xl p-5 md:w-full flex flex-col min-h-2xl items-start"
                >
                  <div class="flex justify-between w-full">
                    <div class="text-xs sm:text-lg font-heading-font font-extrabold">
                      Posted:
                      <span
                        class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-bold tracking-widest"
                      >
                        {{ ago(post.created_at) }}</span
                      >
                    </div>
                    <div
                      class="text-xs sm:text-lg font-heading-font font-extrabold"
                      v-if="expired(post)"
                    >
                      Last date of Bid:
                      <span
                        class="inline-block py-1 px-2 rounded bg-red-50 text-red-500 text-xs font-bold tracking-widest"
                      >
                        Tender Closed
                      </span>
                    </div>
                    <div
                      v-else
                      class="text-xs sm:text-lg font-heading-font font-extrabold"
                    >
                      Last Day of Bid:
                      <span
                        class="inline-block py-1 px-2 rounded bg-green-100 text-green-500 text-xs font-bold tracking-widest"
                      >
                        {{
                          // togoFormat(post.expiry)
                          dateFormat(post.expiry)
                        }}</span
                      >
                    </div>
                  </div>
                  <p
                    class="text-xs sm:text-lg mt-2 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold"
                  >
                    <!-- <span
                                            class="rounded bg-indigo-50 text-indigo-500 text-md font-extrabold font-heading-font tracking-widest mr-2"
                                            ># {{ i + 1 }}
                                            {{ updateCnt(post, i) }}
                                        </span> -->
                    {{ post.tender_brief }}
                  </p>

                  <div
                    class="flex items-center flex-wrap mt-4 border-b-2 border-gray-100 w-full"
                  >
                    <!-- <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200"
                    >
                      <i class="w-4 h-4 mr-1 fas fa-coins text-indigo-600"></i>
                      {{ post.funded_by }}
                    </span> -->
                    <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200"
                    >
                      <i
                        class="w-4 h-4 mr-1 fas fa-location-crosshairs text-indigo-600"
                      ></i>
                      <!-- {{ post.country }} -->
                      Kenya
                    </span>
                    <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200"
                    >
                      <i
                        class="w-4 h-4 mr-1 fas fa-money-bill-transfer text-indigo-600"
                      ></i>
                      <!-- {{ post.country }} -->
                      KES
                      <span
                        class="ml-1 text-green-500 font-heading-font font-extrabold text-xs sm:text-lg"
                      >
                        {{ amount(post.created_at) }}
                      </span>
                    </span>
                  </div>

                  <div class="flex w-full justify-between mt-10 text-lg">
                    <a
                      :href="route('selected', post._id)"
                      class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold transform transition hover:scale-110 hover:font-bold duration-700"
                      >More Tender Details <i class="fa-solid fa-book-open-reader p-1"></i>
                    </a>

                    <a
                      @click="addToCart(post._id)"
                      href="#"
                      class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold transform transition hover:scale-110 hover:font-bold duration-700"
                      >Add Tender To Cart <i class="fa-solid fa-cart-shopping p-1"></i>
                    </a>
                  </div>
                </a>

              </div>
            </div>

            <div
              class="hidden sm:flex border-indigo-600 border-2 p-5 rounded-lg shadow-2xl"
            >
              <SearchFilter />
            </div>
          </div>
        </section>

        <a :href="route('listing')" class="mt-10 flex justify-center">
          <button
            class="transform transition hover:scale-125 duration-700 ease-in-out text-xl font-extrabold font-heading-font leading-4 text-white bg-indigo-600 sm:w-auto w-full rounded p-4 focus:outline-none hover:bg-gray-200 focus:ring-2 focus:ring-offset-2 focus:ring-white"
          >
            View All Tenders
          </button>
        </a>
      </div>
    </section>
  </div>
</template>

<script>
// import Button from "../../Jetstream/Button.vue";
import Vue from "vue";
import Vue2Filters from "vue2-filters";
import SearchFilter from "./SearchFilter.vue";
Vue.use(Vue2Filters);
import moment from "moment";
import dateFormat from "dateformat";
// const now = new Date();

export default {
  name: "FeaturedTenders",
  mixins: [Vue2Filters.mixin],
  components: {
    // Button,
    SearchFilter,
  },
  mounted() {},
  data() {
    return {
      postExpired: false,
      cnt: 0,
    };
  },
  watch: {},
  computed: {
    getArray() {
      const arr = this.posts.filter((item, index) => {
        return index >= 1; //will return the array from the second value
      });
      return arr;
    },
    posts() {
      return this.$parent.posts;
    },
  },
  methods: {
    async addToCart(postID){
      let currentItems = this.$store.state.tenderIDs
      // console.log(currentItems)
      if (currentItems.includes(postID)){
        alert('Tender Already in Cart')
      }else{
        await this.$store.commit('addToCart', postID)
        alert('Tender Added To Cart')
      } 

    },
    amount(value) {
      var given = moment(value, "YYYY-MM-DD");
      var current = moment().startOf("day");
      var diff = moment.duration(current.diff(given)).asDays();
      if (diff <= 10) {
        return 150;
      } else if (diff >= 11 && this.diff <= 20) {
        return 100;
      } else {
        return 50;
      }
    },
    updateCnt(post, i) {
      this.cnt = i * post.length;
    },
    dateChangeFormat(value) {
      const togo = moment(value).fromNow(true);
      if (togo == "Invalid date") {
        return true;
      } else {
        return false;
      }
    },
    expired(post) {
      var current = moment().startOf("day");
      var given = moment(post.expiry, "YYYY-MM-DD");
      return;

      if (dateChangeFormat) {
        var given = moment(this.formatedDate, "YYYY-MM-DD");
      } else {
        var given = moment(post.expiry, "YYYY-MM-DD");
      }

      var diff = moment.duration(given.diff(current)).asDays();

      if (diff < 0) {
        return true;
      } else {
        return false;
      }
    },
    dateFormat(value) {
      return value;
      var length = 10;
      var myString = value;
      var myTruncatedString = myString.substring(0, length);

      // console.log(myTruncatedString);
      var str = myTruncatedString;
      var daycut = str.substring(0, 2);
      var monthcut = str.substring(5, 3);

      String.prototype.replaceAt = function (index, replacement) {
        return (
          this.substring(0, index) +
          replacement +
          this.substring(index + replacement.length)
        );
      };
      const changeDay = myTruncatedString.replaceAt(0, monthcut);
      const finalDate = changeDay.replaceAt(3, daycut);
      this.formatedDate = finalDate;

      // return moment(finalDate, "YYYY-MM-DD");
      return dateFormat(finalDate, "mmmm dS yyyy");
    },
    formatDate(value) {
      return moment(value).format("MMMM Do YYYY");
    },
    togoFormat(value) {
      var length = 10;
      var myString = value;
      var myTruncatedString = myString.substring(0, length);

      var str = myTruncatedString;
      var daycut = str.substring(0, 2);
      var monthcut = str.substring(5, 3);

      String.prototype.replaceAt = function (index, replacement) {
        return (
          this.substring(0, index) +
          replacement +
          this.substring(index + replacement.length)
        );
      };
      const changeDay = myTruncatedString.replaceAt(0, monthcut);
      const finalDate = changeDay.replaceAt(3, daycut);
      this.formatedDate = finalDate;

      return moment(finalDate).fromNow(true);
    },
    togo(value) {
      return moment(value).fromNow();
    },
    ago(value) {
      return moment(value).fromNow();
    },
  },
};
</script>

<style scoped>
.css-selector {
  -webkit-animation: AnimationName 30s ease infinite;
  -moz-animation: AnimationName 30s ease infinite;
  animation: AnimationName 30s ease infinite;
}

@-webkit-keyframes AnimationName {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@-moz-keyframes AnimationName {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes AnimationName {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
</style>
