<template>
  <div>
    <div class=" bg-white dark:bg-gray-800 ">
        <nav class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4">
            <!-- For large and Medium-sized Screen -->
            <div class="flex justify-between ">
                <div class="hidden sm:flex flex-row items-center space-x-6">
                    <img class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-125 duration-700 ease-in-out hover:animate-pulse active:animate-ping p-2 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />
                    <img class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-125 duration-700 ease-in-out hover:animate-pulse active:animate-ping p-2 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                    <img class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-125 duration-700 ease-in-out hover:animate-pulse active:animate-ping p-2 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                    <img class="bg-gradient-to-r from-indigo-100 to-indigo-200 hover:from-blue-300 hover:to-purple-500 transform transition hover:scale-125 duration-700 ease-in-out hover:animate-pulse active:animate-ping p-2 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />
                </div>
                <a :href="route('landing')" class="flex space-x-3 items-center">
                    <!-- <img class="p-1 dark:bg-white rounded-full" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg5.svg" alt="circle" /> -->
                    <h1 class=" font-bold-font text-6xl leading-6 text-gray-800 dark:text-white " >Bidders Portal</h1>
                </a>
                <div class="hidden sm:flex flex-row space-x-4">
                    <a :href="route('register')" class="transform transition hover:scale-125 duration-700 ease-in-out  font-primary-font rounded-md flex space-x-2 w-24 h-10 font-bold text-lg leading-3 text-indigo-700 hover:text-white bg-white hover:bg-indigo-600 border border-indigo-700 focus:outline-none focus:bg-gray-200 duration-150 justify-center items-center" >Sign Up</a>
                    <a :href="route('login')"    class="transform transition hover:scale-125 duration-700 ease-in-out  font-primary-font rounded-md flex space-x-2 w-24 h-10 font-bold text-lg leading-3 text-indigo-700 hover:text-white bg-white hover:bg-indigo-600 border border-indigo-700 focus:outline-none focus:bg-gray-200 duration-150 justify-center items-center" >Sign In</a>
                </div>

                <!-- Burger Icon -->
                <div id="bgIcon" onclick="toggleMenu()"  class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800  flex justify-center items-center sm:hidden cursor-pointer">
                    <img class="dark:bg-white" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg6.svg" alt="burger" />
                    <img class="dark:bg-white hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg7.svg" alt="cross" />
                </div>
            </div>

            <!-- Mobile and small-screen devices (toggle Menu) -->
            <div id="MobileNavigation" class="hidden sm:hidden mt-4 mx-auto">
                <div class="flex flex-row items-center justify-center space-x-6">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />
                </div>

                <div class="flex flex-col gap-4 mt-4 w-80 mx-auto ">
                    <!-- <a v-if="this.$page.props.auth.user" :href="route('dashboard')" class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center" >Dashboard</a> -->
                    <div>
                        <a  :href="route('register')" class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-indigo-700 bg-indigo-600 bg-opacity-0 hover:opacity-100 duration-100 border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Sign Up</a>
                        <a  :href="route('login')" class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center" >Sign In</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
  </div>
</template>

<script>

export default {
  name: 'TopBanner',
  components: {
    //   Categories,
  },
//   props: {
//     user: Object,
//   },
  data(){
    return{

    }
  },
  mounted() {
    //   let users = this.$page.props.auth.user
    //   console.log(user)
    //   console.log(this.$page.props.user)
  },
  watch: {

  },
  computed: {
      user() {
        // return this.$page.props.user.name
    }
  },
  methods: {
    // authUrl(routeValue) {
    //     // console.log(routeValue);
    //     return route(routeValue);
    // },
  }

}
</script>

<style scoped>

</style>

