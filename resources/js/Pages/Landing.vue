<template>
  <div>
    <body class="overflow-x-hidden antialiased">
      <div class="flex flex-col h-screen">
      <TopBanner />
      <MainMenu class="sticky top-0 z-50" />
      <HeroSection @modalState="searchModal=true"/>
      <FeaturedTenders />
      <ServiceIntro />
      <MainFooter />


      <div v-if="searchModal" id="defaultModal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-gray-50 rounded-lg shadow-2xl dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        Tender Search Filters
                    </h3>
                    <button @click="searchModal=false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-2 space-y-6">
                    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">

                        <form>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-1">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Search Keyword</label>
                                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <!-- <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Within Search Keyword</label>
                                    <input id="emailAddress" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div> -->

                            </div>

                        </form>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-3">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Ref. No / TID</label>
                                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Tender Minimum Value</label>
                                    <input id="emailAddress" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Tender Maximum Value</label>
                                    <input id="emailAddress" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                            </div>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="password">Due Date</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>Today</option>
                                        <option>Tommorow</option>
                                        <option>Three Days</option>
                                        <option>Five Days</option>
                                        <option>A week</option>
                                        <option>Two Weeks</option>
                                        <option>One Month</option>
                                        <option>Expired</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Publish Date</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>Today</option>
                                        <option>Yesterday</option>
                                        <option>Three Days ago</option>
                                        <option>A week ago</option>
                                        <option>Two Weeks ago</option>
                                        <option>One Month ago</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-3">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Region / Country</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>Kenya</option>
                                        <option>Uganda</option>
                                        <option>Tanzania</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Sector Classification</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>Information Technology</option>
                                        <option>Health & Insurance</option>
                                        <option>Roads & Construction</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="password">Funds</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>Funded</option>
                                        <option>Non Funded</option>
                                    </select>
                                </div>

                            </div>


                    </section>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button @click="loadFilters" data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Find Tenders</button>
                    <button @click="clearFilters" data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Clear Filters</button>
                </div>
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
import HeroSection from './Components/HeroSection.vue'
import FeaturedTenders from './Components/FeaturedTenders.vue'
import ServiceIntro from './Components/ServiceIntro.vue'
import MainFooter from './Components/MainFooter.vue'
const app = document.getElementById('app');
export default {
    name:'Landing',
    components: {
        TopBanner,
        MainMenu,
        HeroSection,
        FeaturedTenders,
        ServiceIntro,
        MainFooter
    },
    watch: {
    },
    mounted () {
    },
    computed: {
        posts(){
            return this.pageData.props.allPosts
        }
    },
    data () {
        return {
            searchModal: false,
            pageData: JSON.parse(app.dataset.page),
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
