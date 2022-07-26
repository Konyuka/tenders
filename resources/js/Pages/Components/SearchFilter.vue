<template>
  <div>
    <div class="h-auto">
      <div class="basis-1/5">
        <form id="login">
          <div class="bg-white dark:bg-gray-800">
            <div class="container mx-auto bg-white dark:bg-gray-800 mt-1 rounded px-4">
              <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
                <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                  <p
                    class="font-heading-font text-xl text-gray-800 dark:text-gray-100 font-extrabold"
                  >
                    Tender Search Filters
                  </p>
                </div>
                <p
                  class="font-primary-font text-sm text-gray-800 dark:text-gray-100 font-medium"
                >
                  Fill in where required. Leave unnecessary fields as blank
                </p>
              </div>
              <div class="mx-auto pt-4">
                <div class="container mx-auto">
                  <form class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0">
                    <div class="w-full flex flex-col mb-6">
                      <div class="flex justify-between">
                        <label
                          for="FirstName"
                          class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                          >Search by Keyword</label
                        >
                        <label
                          for="FirstName"
                          class="transform transition hover:scale-125 duration-700 underline italics font-primary-font pb-2 text-md font-extrabold text-red-600 dark:text-gray-100"
                        >
                          <a @click.prevent="clearFilters" href="">
                            <i class="fas fa-filter-circle-xmark mr-1"></i>
                            Clear Filters
                          </a>
                        </label>
                      </div>
                      <input
                        @keyup.enter="searchTenders()"
                        v-model="payload.keyword"
                        tabindex="0"
                        type="text"
                        id="FirstName"
                        name="firstName"
                        required
                        class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder=""
                      />
                    </div>

                    <div class="w-full flex flex-col mb-6">
                      <label
                        for="FirstName"
                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                        >Search by Region/County</label
                      >
                      <input
                        @keyup.enter="searchTenders()"
                        v-model="payload.region"
                        tabindex="0"
                        type="text"
                        id="FirstName"
                        name="firstName"
                        required
                        class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder=""
                      />
                    </div>

                    <div class="w-full flex flex-col mb-6">
                      <label
                        for="FirstName"
                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                        >Search by Procuring Entity</label
                      >
                      <input
                        @keyup.enter="searchTenders()"
                        v-model="payload.entity"
                        tabindex="0"
                        type="text"
                        id="FirstName"
                        name="firstName"
                        required
                        class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder=""
                      />
                    </div>

                    <div class="w-full flex flex-col mb-6">
                      <label
                        for="FirstName"
                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                        >Search by Tender Number</label
                      >
                      <input
                        @keyup.enter="searchTenders()"
                        v-model="payload.number"
                        tabindex="0"
                        type="text"
                        id="FirstName"
                        name="firstName"
                        required
                        class="font-primary-font font-extrabold text-lg border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                        placeholder=""
                      />
                    </div>

                    <div class="w-full flex flex-col mb-6">
                      <label
                        for="FirstName"
                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                        >Search by Tender Price</label
                      >
                      <select
                        v-model="payload.price"
                        class="font-primary-font font-extrabold text-lg form-select appearance-none block w-full px-3 py-1.5 text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-indigo-700 focus:outline-none"
                        aria-label="Default select example"
                      >
                        <option selected>Choose From Options</option>
                        <option value="1">KES 150</option>
                        <option value="2">KES 100</option>
                        <option value="3">KES 50</option>
                      </select>
                    </div>

                    <div class="mb-6">
                      <label
                        for="FirstName"
                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                        >Search by Publishing Date</label
                      >
                      <vc-date-picker v-model="payload.publishing" :attributes="attrs">
                        <template v-slot="{ inputValue, inputEvents }">
                          <input
                            :value="inputValue"
                            v-on="inputEvents"
                            id="emailAddress"
                            type="text"
                            class="font-primary-font block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                          />
                        </template>
                      </vc-date-picker>
                    </div>

                    <div class="mb-6">
                      <label
                        for="FirstName"
                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                        >Search by Closing Date</label
                      >
                      <vc-date-picker v-model="payload.closing" :attributes="attrs">
                        <template v-slot="{ inputValue, inputEvents }">
                          <input
                            :value="inputValue"
                            v-on="inputEvents"
                            id="emailAddress"
                            type="text"
                            class="font-primary-font block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                          />
                        </template>
                      </vc-date-picker>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="container mx-auto w-11/12 xl:w-full">
              <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                <button
                  @click.prevent="clearFilters"
                  role="button"
                  aria-label="cancel form"
                  class="font-primary-font bg-gray-200 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 dark:bg-gray-700 rounded text-red-600 dark:text-indigo-600 px-6 py-2 text-sm mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700"
                >
                  Clear Filters
                </button>
                <button
                  @click.prevent="searchTenders"
                  role="button"
                  aria-label="Save form"
                  class="font-primary-font focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                  type="submit"
                >
                  Search Tenders
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import VCalendar from "v-calendar";
// import moment from "moment";

Vue.use(VCalendar, {
  componentPrefix: "vc", // Use <vc-calendar /> instead of <v-calendar />
});

export default {
  name: "SearchFilter",
  components: {
    //   Categories,
  },
  created() {},
  mounted() {
    console.log(window.location.href);

    if (localStorage.getItem("keyword") != "null") {
      this.payload.keyword = localStorage.getItem("keyword");
    } else {
      this.payload.keyword = "";
    }
    if (localStorage.getItem("region") != "null") {
      this.payload.region = localStorage.getItem("region");
    } else {
      this.payload.region = "";
    }
    if (localStorage.getItem("entity") != "null") {
      this.payload.entity = localStorage.getItem("entity");
    } else {
      this.payload.entity = "";
    }
    if (localStorage.getItem("number") != "null") {
      this.payload.number = localStorage.getItem("number");
    } else {
      this.payload.number = "";
    }
    if (localStorage.getItem("price") != "null") {
      this.payload.price = localStorage.getItem("price");
    } else {
      this.payload.price = "";
    }
    if (localStorage.getItem("closing") != "null") {
      this.payload.closing = localStorage.getItem("closing");
    } else {
      this.payload.closing = "";
    }
    if (localStorage.getItem("publishing") != "null") {
      this.payload.publishing = localStorage.getItem("publishing");
    } else {
      this.payload.publishing = "";
    }
  },
  data() {
    return {
      attrs: [
        {
          key: "today",
          // highlight: "green",
          highlight: {
            color: "green",
            fillMode: "outline",
          },
          dates: new Date(),
        },
      ],
      payload: {
        keyword: null,
        region: null,
        entity: null,
        number: null,
        price: null,
        closing: null,
        publishing: null,
      },
      siteURL: process.env.VUE_APP_APIURL,
    };
  },
  watch: {},
  computed: {
    currentRoute() {
      return route().current();
    },
  },
  methods: {
    clearFilters() {
      this.payload.keyword = null;
      this.payload.region = null;
      this.payload.entity = null;
      this.payload.number = null;
      this.payload.price = null;
      this.payload.closing = null;
      this.payload.publishing = null;

      localStorage.setItem("keyword", null);
      localStorage.setItem("region", null);
      localStorage.setItem("entity", null);
      localStorage.setItem("number", null);
      localStorage.setItem("price", null);
      localStorage.setItem("closing", null);
      localStorage.setItem("publishing", null);
    },
    searchTenders() {
      if (this.currentRoute == "landing") {
        this.$parent.$parent.spinner = true;
      } else {
        this.$parent.spinner = true;
        this.$parent.searchModal = false;
      }
      // setTimeout(() => ($parent.$parent.spinner = false), 10000);
      localStorage.setItem("keyword", this.payload.keyword);
      localStorage.setItem("region", this.payload.region);
      localStorage.setItem("entity", this.payload.entity);
      localStorage.setItem("number", this.payload.number);
      localStorage.setItem("price", this.payload.price);
      localStorage.setItem("closing", this.payload.closing);
      localStorage.setItem("publishing", this.payload.publishing);
      this.$inertia
        .post("/search", this.payload)
        .then((response) => {
          if (response != null) {
            if (this.currentRoute == "landing") {
              this.$parent.$parent.spinner = false;
            } else {
              this.$parent.spinner = false;
            }
          }
        })
        .catch((error) => {
          if (error) {
            console.log("error");
          }
        });
    },
  },
};
</script>

<style scoped></style>
