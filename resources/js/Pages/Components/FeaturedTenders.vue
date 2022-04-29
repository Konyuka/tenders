<template>
  <div>

        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Featured Tenders</h1>

                <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
                    Featured Tenders from the most legitimate tender listings in Kenya
                </p>

                <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap -m-12">

                        <a v-for="post in this.posts" :key="post._id" :href="route('selected', post._id)" class="hover:shadow-2xl p-12 md:w-1/2 flex flex-col min-h-2xl  items-start">
                            <!-- <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">{{ post.funded_by }}</span> -->
                            <div class="flex-col">
                                <div>
                                    Posted: <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest"> {{ ago(post.created_at) }}</span>
                                </div>
                                <div v-if="expired(post)">
                                    Expires: <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-red-500 text-xs font-medium tracking-widest"> Expired </span>
                                </div>
                                <div v-else>
                                    Expires: <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-red-500 text-xs font-medium tracking-widest"> {{ togo(post.expiry) }}</span>
                                </div>
                            </div>
                            <h4 class="sm:text-xl text-xl title-font font-medium text-gray-900 mt-4 mb-4">{{ post.title }}</h4>
                            <p class="leading-relaxed mb-2">{{ post.tender_brief }}</p>
                            <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a class="text-indigo-500 inline-flex items-center">Purchase Tender
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <i class="w-4 h-4 mr-1 fas fa-location-crosshairs"></i> {{ post.country }}
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <i class="w-4 h-4 mr-1 fas fa-coins"></i>{{ post.funded_by }}
                            </span>
                            </div>
                        </a>

                        </div>

                    </div>

                    <a :href="route('listing')" class="md:mt-12 mt-7">

                        <button class="text-base font-medium leading-4 text-white hover:text-gray-700 bg-indigo-700 sm:w-auto w-full rounded p-4 focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-offset-2 focus:ring-white">View All Tenders</button>

                    </a>

                </section>
            </div>
        </section>
  </div>
</template>

<script>
import Button from '../../Jetstream/Button.vue'

export default {
  name: 'FeaturedTenders',
  components: {
    Button
    //   Categories,
  },
  mounted () {

  },
  data(){
    return{
        postExpired: false,
    }
  },
  watch: {

  },
  computed: {
    // ago(){
    //         return moment(this.$parent.posts.created_at).fromNow();
    // },
    // togo(){
    //     return moment(this.$parent.posts.expiry).fromNow(true);
    // },
    posts(){
        return this.$parent.posts
    }
  },
  methods: {
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

  }

}
</script>

<style scoped>

</style>
