<template>
  <div class="h-screen">
    <body class="overflow-x-hidden antialiased">

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Bidders Portal</h2>
            <h1 v-if="Status == 'add'" class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Post Added Successfully</h1>
            <h1 v-if="Status == 'edit'" class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Post Updated Successfully</h1>
            <h1 v-if="Status == 'delete'" class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Post Deleted Successfully</h1>
            </div>
            <div class="flex flex-wrap -m-4">
            <a :href="route('dashboard')" class="hover:shadow-2xl p-4 md:w-1/2">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                    <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <i class="fas fa-home"> </i>
                    </div>
                    <h2 class="text-gray-900 text-lg title-font font-medium">Dashboard Page</h2>
                </div>
                <div class="flex-grow">
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Navigate
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                </div>
            </a>
            <a :href="route('landing')" class="hover:shadow-2xl  p-4 md:w-1/2">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                <div class="flex items-center mb-3">
                    <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                    <i class="fas fa-home"> </i>
                    </div>
                    <h2 class="text-gray-900 text-lg title-font font-medium">Landing Page</h2>
                </div>
                <div class="flex-grow">
                    <a class="mt-3 text-indigo-500 inline-flex items-center">Navigate
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
                </div>
            </a>
            </div>
        </div>
      </section>

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
        Status: String
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
