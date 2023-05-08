<template>
  <div>

    <body class="overflow-x-hidden overflow-y-scroll antialiased">
      <div class="flex flex-col h-screen">
        <!-- <TopBanner /> -->
        <MainMenu :user="user" class="sticky top-0 z-50" />
        <HeroSection @modalState="searchModal = true" />
        <FeaturedTenders :user="user" />
        <ServiceIntro />
        <MainFooter />

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


        <div v-if="subscriptionConfirmed" class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
          <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
              <div
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                <div>
                  <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                    <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:mt-5">
                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Subscription successful</h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">
                        To complete your Subscription, click the button below to set your desired tender email notification tags
                      </p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-6">
                  <a 
                    :href="route('dashboard')"
                    class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Go back to dashboard</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <Spinner v-if="spinner" />

        
        <div  class="cursor:pointer fixed z-50 bottom-16 right-5  flex transform transition hover:scale-150 duration-700 ease-in-out">
          <a  href="https://api.whatsapp.com/send?phone=254100571601&text=Hey%20Bidders!%20I%20would%20like%20to%20have%20a%20chat%20concerning%20one%20of%20your%20services.%20Kindly%20reach%20out.%20Thank%20you" 
          class="mr-4 fa-2xl text-black fab fa-whatsapp p-1">
        </a>
      </div>
      
      <CartButton class="z-90" />

      </div>
    </body>
  </div>
</template>

<script>
// import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import HeroSection from "./Components/HeroSection.vue";
import FeaturedTenders from "./Components/FeaturedTenders.vue";
import ServiceIntro from "./Components/ServiceIntro.vue";
import MainFooter from "./Components/MainFooter.vue";
import Spinner from "./Components/Spinner.vue";
import CartButton from "./Components/CartButton.vue";
import SearchFilter from "./Components/SearchFilter.vue";

const app = document.getElementById("app");
export default {
  name: "Landing",
  components: {
    Spinner,
    // TopBanner,
    MainMenu,
    HeroSection,
    FeaturedTenders,
    ServiceIntro,
    MainFooter,
    SearchFilter,
    CartButton,
  },
  metaInfo: {
    title: 'Bidders Portal - Tender Information and Facilitations in Kenya',
    meta: [
      {
        vmid: 'Bidders Portal',
        name: 'Bidders Portal',
        content: 'Purchase Kenyan Tender Information 2023'
      }
    ]
  },
  beforeCreate() {
    this.spinner = true;
  },
  watch: {
    confirmMessage(value){
      if(value !== undefined ){
        this.subscriptionConfirmed = true
      }
    }
  },
  mounted() { 
    if (this.confirmMessage !== undefined) {
      this.subscriptionConfirmed = true
    }
  },
  computed: {
    confirmMessage() {
      return this.pageData.props.confirmMessage;
    },
    subscription() {
      return this.pageData.props.subscription;
    },
    posts() {
      return this.pageData.props.allPosts;
    },
    user() {
      return this.pageData.props.user;
    },
  },
  data() {
    return {
      subscriptionConfirmed: false,
      spinner: false,
      searchModal: false,
      pageData: JSON.parse(app.dataset.page),
    };
  },
  methods: {
    clearFilters() { },
    loadFilters() { },
  },
};
</script>
