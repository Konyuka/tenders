<template>
  <div>
        <div class="2xl:mx-auto dark:bg-gray-900 2xl:container md:px-5 px-4 md:py-5 py-9">
            <div class="relative rounded-md shadow-2xl">
                <img src="https://i.ibb.co/SBpL1cK/pexels-aleksandar-pasaric-325185-1.png" alt="city view" class="w-full h-full rounded-md  object-center object-fill absolute sm:block hidden" />
                <img src="https://i.ibb.co/LQpxBsc/mobile.png" alt="city view" class="w-full h-full rounded-md absolute object-center object-fill sm:hidden" />
                <div class="text-xl relative z-20 bg-gradient-to-r from-blue-700 to-transparent w-full h-full z-40 top-0 md:p-16 p-6 flex flex-col justify-between rounded-md ">
                    <div>
                        <h1 class="md:text-5xl text-3xl font-bold md:leading-10 leading-9 text-white sm:w-auto w-64">Connection to the rightful Tender!</h1>
                        <p class="text-lg leading-6 text-white xl:w-5/12 lg:w-8/12 md:w-10/12  2xl:pr-12 mt-4">A good idiom for kids is "It's raining cats and dogs." Kids know what both cats and dogs are from an early age.</p>
                    </div>
                    <div class="md:mt-12 mt-20">
                        <button @click="openModal" class="text-base font-medium leading-4 text-indigo-700 bg-white sm:w-auto w-full rounded p-4 focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-offset-2 focus:ring-white">Tenders Search Filters</button>
                    </div>
                </div>
            </div>
        </div>
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
