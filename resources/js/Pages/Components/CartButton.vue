<template>
  <div class="">
    <div  class="cursor:pointer fixed z-50 bottom-28 right-7  flex transform transition hover:scale-150 duration-700 ease-in-out">
      <a  @click.prevent="goToCart()" href="#" class="mr-4 fa-xl text-black fa-solid fa-cart-shopping p-1">
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
      if (this.storecount==0){
        alert('No Items in Cart')
      }else{
        let tenderList = this.$store.state.tenderIDs
        this.$inertia.post('/view_cart', tenderList)
      }
    }
  }

}
</script>

<style scoped>

</style>
