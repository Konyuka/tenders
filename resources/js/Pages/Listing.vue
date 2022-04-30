<template>
  <div class="h-screen">
    <body class="overflow-x-hidden antialiased flex flex-col h-screen">
      <TopBanner />
      <MainMenu />


      <div class="text-gray-600 body-font">
        <header class="sticky top-2 z-50">
        <button @click="modal=true" class="flex mx-auto mt-10 text-white bg-indigo-600 font-heading-font font-extrabold border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Tenders Search Filters</button>
        </header>

        <main class="container px-5 py-10 mx-auto">
            <div class="flex flex-col text-center w-full mb-6">
            <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">BIDDERS PORTAL</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">All Tenders Listing</h1>
            </div>
            <div class="flex flex-wrap">
                <a v-for="post in this.Posts" :key="post._id" :href="route('selected', post._id)" class="group bg-white border-t-2 border-r-2 mt-4 my-4 border-indigo-600 shadow-xl transform transition hover:scale-75 duration-700 hover:shadow-2xl p-12 md:w-1/3 flex flex-col min-h-2xl  items-start">
                            <!-- <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">{{ post.funded_by }}</span> -->
                            <div class="flex justify-between w-full">
                                <div class="font-heading-font font-extrabold">
                                    Posted: <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-bold tracking-widest"> {{ ago(post.created_at) }}</span>
                                </div>
                                <div class="font-heading-font font-extrabold" v-if="expired(post)">
                                    Expires: <span class="inline-block py-1 px-2 rounded bg-red-50 text-red-500 text-xs font-bold tracking-widest"> Expired </span>
                                </div>
                                <div class="font-heading-font font-extrabold" v-else>
                                    Expires: <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-red-500 text-xs font-bold tracking-widest"> {{ togo(post.expiry) }}</span>
                                </div>
                            </div>
                            <p class="my-5 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold">{{ post.tender_brief }}</p>

                            <div class="flex items-center flex-wrap mt-10 border-b-2 border-gray-100 w-full">
                            <!-- <span>
                                <h4 class="sm:text-xl text-md title-font  font-medium text-gray-400 mt-4 mb-4">Category: <span><a href="#">{{ post.category }}</a></span></h4>
                            </span> -->
                            <span class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0  leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <i class="w-4 h-4 mr-1 fas fa-filter text-indigo-600"></i> Construction
                                <!-- {{ post.category }} -->
                            </span>
                            <span class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <i class="w-4 h-4 mr-1 fas fa-location-crosshairs text-indigo-600"></i> {{ post.country }}
                            </span>
                            <!-- <span class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1">
                                <i class="w-4 h-4 mr-1 fas fa-coins text-indigo-600"></i>{{ post.funded_by }}
                            </span> -->
                            </div>

                            <div class="mt-10">
                                <a class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold">Tender Details
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </a>


            </div>



        </main>

        <footer class="flex justify-around mt-10">
            <a href="#" class="inline-flex items-center py-4 px-6 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Previous
            </a>

            <a href="#" class="inline-flex items-center py-4 px-6 ml-3 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            Next
            </a>
        </footer>

      </div>

      <MainFooter/>

      <div v-if="modal" id="defaultModal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-gray-50 rounded-lg shadow-2xl dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                        Tender Search Filters
                    </h3>
                    <button @click="modal=false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-2 space-y-6">
                    <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">

                        <form>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Search Keyword</label>
                                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Within Search Keyword</label>
                                    <input id="emailAddress" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                            </div>

                        </form>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Tender Notice No.</label>
                                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Bid Detail Ref No.</label>
                                    <input id="emailAddress" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="password">Funding</label>
                                    <input id="password" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Tender Value</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-1">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Region / Country</label>
                                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="username">Closing Date</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Sector Classification</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="password">Funded</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Tender Type</label>
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
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
        Posts: ''
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
    //     posts(){
    //         return this.$parent.posts
    //     }
    },
    data () {
        return {
            modal: false,
        }
    },
    methods:{
        expired(post){
                var current = moment().startOf("day");
                var given = moment(post.expiry, "YYYY-MM-DD");
                var diff = moment.duration(given.diff(current)).asDays();

                if(diff < 0){
                    return true
                }else{
                    return false
                }

        },
        formatDate(value) {
            return moment(value).format('MMMM Do YYYY')
        },
        togo(value){
            return moment(value).fromNow();
        },
        ago(value){
            return moment(value).fromNow();
        },
        clearFilters(){

        },
        loadFilters(){

        }
    }
}
</script>

<style scoped>

</style>
