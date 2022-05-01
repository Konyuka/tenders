<template>
  <div>
        <div class="2xl:mx-auto dark:bg-gray-900 2xl:container md:px-5 px-4 md:py-5 py-9">
            <div class="relative rounded-md shadow-2xl">
                <img src="https://i.ibb.co/SBpL1cK/pexels-aleksandar-pasaric-325185-1.png" alt="city view" class="w-full h-full rounded-md  object-center object-fill absolute sm:block hidden" />
                <img src="https://i.ibb.co/LQpxBsc/mobile.png" alt="city view" class="w-full h-full rounded-md absolute object-center object-fill sm:hidden" />
                <div class="text-xl relative z-20 bg-gradient-to-r from-blue-700 to-transparent w-full h-full z-40 top-0 md:p-16 p-6 flex flex-col justify-between rounded-md ">
                    <!-- <div>
                        <h1 class="md:text-5xl text-3xl font-bold md:leading-10 leading-9 text-white sm:w-auto w-64">Connection to the rightful Tender!</h1>
                        <p class="text-lg leading-6 text-white xl:w-5/12 lg:w-8/12 md:w-10/12  2xl:pr-12 mt-4">A good idiom for kids is "It's raining cats and dogs." Kids know what both cats and dogs are from an early age.</p>
                    </div>
                    <div class="md:mt-12 mt-20">
                        <button @click="openModal" class="text-base font-medium leading-4 text-indigo-700 bg-white sm:w-auto w-full rounded p-4 focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-offset-2 focus:ring-white">Tenders Search Filters</button>
                    </div> -->

                    <div class="relative bg-gray-50 bg-opacity-25 overflow-hidden">
                        <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
                            <div class="relative h-full max-w-7xl mx-auto">
                            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                                <defs>
                                <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                                </defs>
                                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                            </svg>
                            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                                <defs>
                                <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                                </defs>
                                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
                            </svg>
                            </div>
                        </div>

                        <div class="relative pt-2 pb-2 sm:pb-2">

                            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-14">
                            <div class="text-center">
                                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block xl:inline text-white">Connection to the rightful </span>
                                <span class="block text-indigo-600 xl:inline">Tender!</span>
                                </h1>
                                <p class="mt-3 max-w-md mx-auto text-base text-white font-primary-font sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                                    Bidders Portal™ system is a web based tendering tool that takes advantage of the many benefits that digital data offers.
                                    Bids are sealed and can only be viewed by authorised parties cutting down on project time, tender period and reducing risk and cost.
                                    Good governance, transparency, system integrity and efficiency will be the results after the Tendersure™ system embeds in your organisation.
                                </p>
                                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                                <!-- <div class="rounded-md shadow">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Get started </a>
                                </div> -->
                                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                    <button @click="openModal" class="transform transition hover:scale-125 duration-700 ease-in-out  w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-extrabold rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10"> <span><i class="fas fa-search fa-xl mr-4"></i></span> Load Search Filters </button>
                                </div>
                                </div>
                            </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->


  </div>
</template>

<script>

export default {
  name: 'Header',
  components: {
    //   Categories,
  },
  data(){
    return{

    }
  },
  watch: {

  },
  computed: {

  },
  methods: {
      openModal(){
           this.$emit('modalState', true);
      }
  }

}
</script>

<style scoped>

</style>
