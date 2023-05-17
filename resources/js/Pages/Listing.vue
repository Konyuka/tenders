<template>
  <div class="h-screen">

    <body class="overflow-x-hidden antialiased flex flex-col h-screen">
      <MainMenu />

      <div class="text-gray-600 body-font">

        <main id="top" class="sm:px-5 py-4 mx-auto">
          <div class="flex flex-col text-center w-full mb-6">
            <h2 class="text-xl text-indigo-500 tracking-widest font-medium title-font m-5">
              BIDDERS PORTAL
            </h2>
          </div>

          <div v-if="canExportAsAdmin" class="flex flex-row my-5 mx-5">
            <button @click="exportToExcel()" type="button"
              class="mt-10 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Export Result To Excel
            </button>
          </div>

          <div class="flex flex-row my-5 mx-5">
            <div class="sm:w-4/5 w-full sm:mr-5 min-h-screen">
              
              <div class="w-full bg-white dark:bg-gray-800">
                <div
                  class="container flex flex-col items-center px-6 py-5 mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0">
                  <div class="-mx-2"></div>

                  <div class="text-gray-500 dark:text-gray-400">
                    Page
                    <span class="font-medium text-gray-700 dark:text-gray-100">{{ formatMoney(actualPageNumber) }} - {{
                      formatMoney(roundOffPages(NumberPages)) }}</span>
                    of
                    <span class="text-indigo-600 font-primary-font ml-1 text-xl">{{
                      formatMoney(PostCount)
                    }}</span>
                    Tenders
                  </div>
                </div>
              </div>

              <div class="columns-1">
                <a 
                v-for="(post, i) in actualPosts" :key="post._id"
                  class="group bg-white border-2 mt-1 my-2 border-indigo-600 shadow-xl hover:shadow-2xl p-5 md:w-full flex flex-col min-h-2xl items-start">
                  <div class="flex justify-between w-full">
                    <div class="text-xs sm:text-lg font-heading-font font-extrabold">
                      Posted:
                      <span
                        class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-bold tracking-widest">
                        {{ ago(post.created_at) }}
                      </span>
                    </div>

                  </div>

                  <p
                    class="text-xs sm:text-lg mt-2 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold">

                    <span
                      class="rounded bg-white sm:bg-indigo-50 text-indigo-500 text-md font-extrabold font-heading-font tracking-widest mr-2">
                      {{ postNumber(i) }}
                    </span>
                    {{ post.tender_brief }}
                  </p>

                  <div class="flex items-center flex-wrap mt-4 border-b-2 border-gray-100 w-full">

                    <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200">
                      <i class="w-4 h-4 mr-1 fas fa-location-crosshairs text-indigo-600"></i>
                      Kenya
                    </span>
                    <span
                      class="text-xs sm:text-sm text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none pr-3 py-1 border-r-2 border-gray-200">
                      <i class="w-4 h-4 mr-1 fas fa-money-bill-transfer text-indigo-600"></i>
                      KES
                      <span class="ml-1 text-green-500 font-heading-font font-extrabold text-xs sm:text-lg">
                        500
                      </span>
                    </span>
                  </div>

                  <div class="flex w-full justify-between mt-10 text-lg">
                    <a :href="route('selected', post._id)"
                      class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold transform transition hover:scale-110 hover:font-bold duration-700">More
                      Tender Details <i class="fa-solid fa-book-open-reader p-1"></i>
                    </a>

                    <a @click="addToCart(post._id)" href="#"
                      class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold transform transition hover:scale-110 hover:font-bold duration-700">Add
                      Tender To Cart <i class="fa-solid fa-cart-shopping p-1"></i>
                    </a>
                  </div>
                </a>
              </div>

              <footer class="flex justify-around mt-4">
                <button
                  @click="setPage('previous')"
                  class="inline-flex items-center py-4 px-6 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  Previous
                </button>


                <button
                  @click="setPage('next')" 
                  class="inline-flex items-center py-4 px-6 ml-3 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  Next
                </button>

              </footer>
             
              <div class="mt-6 w-full bg-white dark:bg-gray-800">
                <div
                  class="container flex flex-col items-center px-6 py-5 mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0">
                  <div class="-mx-2"></div>
                </div>
              </div>
            </div>

            <div class="hidden sm:flex p-5 rounded-lg">
              <SearchFilter />
            </div>
          </div>

        </main>
      </div>

      <div v-if="searchModal" class="z-50 fixed left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
        <div class="sm:h-[calc(100%-3rem)] max-w-lg mt-32 mx-auto relative w-auto pointer-events-none">
          <div
            class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                <!-- Modal title -->
              </h5>
              <button @click="searchModal = false" type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close">
                <i class="fas fa-xmark text-black fa-xl"></i>
              </button>
            </div>
            <div class="flex-auto overflow-y-auto relative p-4">
              <SearchFilter />
            </div>
          </div>
        </div>
      </div>

      <Spinner v-if="spinner" />
      <CartButton class="z-90" />
      <div v-if="Posts != null">
        <MainFooter />
      </div>
    </body>
  </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";
import SearchFilter from "./Components/SearchFilter.vue";
import Spinner from "./Components/Spinner.vue";
import CartButton from "./Components/CartButton.vue";
import dateFormat from "dateformat";
import Vue from "vue";
import Vue2Filters from "vue2-filters";
import Button from "../Jetstream/Button.vue";
Vue.use(Vue2Filters);
import moment from "moment";
import $ from "jquery";
import exportFromJSON from "export-from-json";
import axios from "axios";



export default {
  name: "Listing",
  mixins: [Vue2Filters.mixin],
  props: {
    Posts: "",
    Amount: String,
    isAdmin: Boolean,
    PostCount: "",
    PageNumber: "",
    NumberPages: "",
  },
  components: {
    Spinner,
    TopBanner,
    MainMenu,
    MainFooter,
    SearchFilter,
    Button,
    CartButton
  },
  watch: {
    Posts() {
      this.setPages();
    },
    page() {
      this.scroll();
    },
    jumpPage(value) {
      if (value == "") {
        this.switchToJump = false;
      } else {
        this.switchToJump = true;
      }
    },
  },
  mounted() {

    this.actualPageNumber = this.PageNumber
    this.actualPosts = this.Posts

    this.searchModal = false;
    if (this.dateChangeFormat) {
      var given = moment(this.formatedDate, "YYYY-MM-DD");
    } else {
      var given = moment(this.post.expiry, "YYYY-MM-DD");
    }
    var current = moment().startOf("day");
    var diff = moment.duration(current.diff(given)).asDays();

    if (diff < 0) {
      this.postExpired = true;
    } else {
      this.postExpired = false;
    }

    this.setPages();
  },
  computed: {
    isSearchRoute() {
      const route = window.location.pathname;

      if (route === '/search') {
        return true
      }
    },
    disableButton() {
      return this.page == 1 ? "cursor-not-allowed" : "";
    },
    displayedPosts() {
      return this.paginate(this.Posts);
    },
    canExportAsAdmin() {
      if (this.isSearchRoute && this.isAdmin) {
        return true
      } else {
        return true
      }
    }
  },
  data() {
    return {
      actualPosts:null,
      actualPageNumber:null,
      searchModal: false,
      switchToJump: false,
      spinner: false,
      formatedDate: "",
      postExpired: false,
      page: 1,
      perPage: 10,
      pages: [],
      jumpPage: "",
      cnt: "",
      count: "",
    };
  },
  methods: {
    setPage(value){
      axios.post('/listing_page', {
        pageNumber: this.actualPageNumber,
        type: value,
      })
        .then(response => {
          this.actualPosts = response.data.Posts
          this.actualPageNumber = response.data.PageNumber
          this.scroll()
        })
    },
    roundOffPages(value){
      return Math.round(value)
    },
    exportToExcel() {

      const data = this.Posts;
      const fileName = "np-data";
      const exportType = exportFromJSON.types.csv;

      if (data) exportFromJSON({ data, fileName, exportType });


    },
    formatMoney(n) {
      return "" + (Math.round(n * 100) / 100).toLocaleString();
    },
    addToCart(postID) {
      this.$store.commit('addToCart', postID)
      alert('Tender Added To Cart')
    },
    purchase(value) {
      alert("check");
      this.$inertia.post(`/checkout/${value}`);
    },
    amount(value) {
      var given = moment(value, "YYYY-MM-DD");
      var current = moment().startOf("day");
      var diff = moment.duration(current.diff(given)).asDays();
      //   console.log(diff);
      if (diff <= 10) {
        return 150;
      } else if (diff >= 11 && diff <= 20) {
        return 100;
      } else {
        return 50;
      }
    },
    postNumber(i) {
      // console.log i;
      // alert('this')
      if (this.page == 1) {
        this.count = parseInt(i + 1);
        return i + 1;
      } else {
        var tens = (this.page - 1) * 10;
        this.count = tens;
        return tens + i + 1;
      }
      // else if (this.page == 2) {
      //     // this.cnt = parseInt(i + 10);
      //     return i + 10;
      // }
    },
    updateCnt(i) {
      // this.cnt = i * this.Posts.length;
      //   console.log(i);
    },
    scroll() {
      $("html, body").animate(
        {
          scrollTop: $("#top").offset().top,
        },
        2000
      );
      this.switchToJump = false;
    },
    setPageNumber() {
      this.page = this.jumpPage;
      this.jumpPage = "";

      this.scroll();
    },
    setPages() {
      let numberOfPages = Math.ceil(this.Posts.length / this.perPage);
      for (let index = 1; index <= numberOfPages; index++) {
        this.pages.push(index);
      }
      this.scroll();
    },
    paginate(Posts) {
      let page = this.page;
      let perPage = this.perPage;
      let from = page * perPage - perPage;
      let to = page * perPage;
      return Posts.slice(from, to);
    },
    dateChangeFormat(value) {
      const togo = moment(value).fromNow(true);
      if (togo == "Invalid date") {
        return true;
      } else {
        return false;
      }
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
    getDifferenceInDays(date1, date2) {
      // const diffInMs = Math.abs(date2 - date1);
      const diffInMs = date2 - date1;
      return diffInMs / (1000 * 60 * 60 * 24);
    },
    checkDateExpryFormat(value) {
      var str = value;
      var daycut = str.substring(0, 2);
      var monthcut = str.substring(5, 3);

      String.prototype.replaceAt = function (index, replacement) {
        return (
          this.substring(0, index) +
          replacement +
          this.substring(index + replacement.length)
        );
      };
      const changeDay = value.replaceAt(0, monthcut);
      const finalDate = changeDay.replaceAt(3, daycut);
      return finalDate;
    },
    expired(post) {
      const date1 = new Date();
      const date2 = new Date(this.checkDateExpryFormat(post.expiry));

      var diff = this.getDifferenceInDays(date1, date2);

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
    togo(value) {
      return moment(value).fromNow();
    },
    ago(value) {
      return moment(value).fromNow();
    },
    clearFilters() { },
    loadFilters() { },
  },
};
</script>

<style scoped></style>
