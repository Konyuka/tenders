<template>
  <div>
    <body class="overflow-x-hidden overflow-y-scroll antialiased">
      <div class="flex flex-col h-screen">
        <TopBanner />
        <MainMenu class="sticky top-0 z-50" />
        <HeroSection @modalState="searchModal = true" />
        <FeaturedTenders />
        <ServiceIntro />
        <MainFooter />

        <div
          v-if="searchModal"
          class="z-50 fixed left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
          id="exampleModalScrollable"
          tabindex="-1"
          aria-labelledby="exampleModalScrollableLabel"
          aria-hidden="true"
        >
          <div
            class="sm:h-[calc(100%-3rem)] max-w-lg mt-32 mx-auto relative w-auto pointer-events-none"
          >
            <div
              class="max-h-full overflow-hidden border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
            >
              <div
                class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
              >
                <h5
                  class="text-xl font-medium leading-normal text-gray-800"
                  id="exampleModalScrollableLabel"
                >
                  <!-- Modal title -->
                </h5>
                <button
                  @click="searchModal = false"
                  type="button"
                  class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i class="fas fa-xmark text-black fa-xl"></i>
                </button>
              </div>
              <div class="flex-auto overflow-y-auto relative p-4">
                <SearchFilter />
              </div>
              <!-- <div
                class="flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md"
              >
                <button
                  type="button"
                  class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 fdivs:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button
                  type="button"
                  class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                >
                  Save changes
                </button>
              </div> -->
            </div>
          </div>
        </div>

        <Spinner v-if="spinner" />
      </div>
    </body>
  </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import HeroSection from "./Components/HeroSection.vue";
import FeaturedTenders from "./Components/FeaturedTenders.vue";
import ServiceIntro from "./Components/ServiceIntro.vue";
import MainFooter from "./Components/MainFooter.vue";
import Spinner from "./Components/Spinner.vue";
import SearchFilter from "./Components/SearchFilter.vue";

const app = document.getElementById("app");
export default {
  name: "Landing",
  components: {
    Spinner,
    TopBanner,
    MainMenu,
    HeroSection,
    FeaturedTenders,
    ServiceIntro,
    MainFooter,
    SearchFilter,
  },
  beforeCreate() {
    this.spinner = true;
  },
  watch: {},
  mounted() {},
  computed: {
    posts() {
      return this.pageData.props.allPosts;
    },
    user() {
      return this.pageData.props.user;
    },
  },
  data() {
    return {
      spinner: false,
      searchModal: false,
      pageData: JSON.parse(app.dataset.page),
    };
  },
  methods: {
    clearFilters() {},
    loadFilters() {},
  },
};
</script>
