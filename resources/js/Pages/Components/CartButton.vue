<template>
  <div class="">
    <div  class="cursor:pointer fixed z-90 bottom-16 right-16  flex transform transition hover:scale-150 duration-700 ease-in-out">
      <a  @click.prevent="goToCart()" href="#" class="mr-4 fa-2xl text-black fa-solid fa-cart-shopping p-1">
      </a>
      <span
        class="absolute right-0 top-0 rounded-full bg-indigo-600 w-5 h-5 top right p-0 m-0 text-white font-bold text-sm  leading-tight text-center">
        {{ storecount }}
      </span>
    </div>
    
    
  </div>
</template>

<script>

export default {
  name: 'CartButton',
  components: {
    //   Categories,
  },
  data() {
    return {

    }
  },
  watch: {

  },
  computed: {
    storecount() {
      return this.$store.state.tenderIDs.length
    },
  },
  methods: {
    goToCart(){
      alert('Go to Cart');
    }
  }

}
</script>

<style scoped>

</style>
