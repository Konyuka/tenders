<template>
  <div>
    <TopBanner />
    <MainMenu />

    <div>
      
      <div class="bg-white">
        
      
        <main class="mx-auto max-w-9xl px-4 pt-4 pb-16 sm:px-6 sm:pt-8 sm:pb-24 lg:px-8 xl:px-2 xl:pt-14">
          <h1 class="sr-only">Checkout</h1>
      
          <div class="mx-auto grid max-w-lg grid-cols-1 gap-x-2 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="mx-auto w-full max-w-3xl">
              <h2 class="sr-only">Order summary</h2>
      
              <div class="flow-root">
                <!-- <ul role="list" class="-my-6 divide-y divide-gray-200">
                  <li class="flex space-x-6 py-6">
                    <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-05-product-01.jpg"
                      alt="Front of women&#039;s basic tee in heather gray."
                      class="h-24 w-24 flex-none rounded-md bg-gray-100 object-cover object-center">
                    <div class="flex-auto">
                      <div class="space-y-1 sm:flex sm:items-start sm:justify-between sm:space-x-6">
                        <div class="flex-auto space-y-1 text-sm font-medium">
                          <h3 class="text-gray-900">
                            <a href="#">Women&#039;s Basic Tee</a>
                          </h3>
                          <p class="text-gray-900">$32.00</p>
                          <p class="hidden text-gray-500 sm:block">Gray</p>
                          <p class="hidden text-gray-500 sm:block">S</p>
                        </div>
                        <div class="flex flex-none space-x-4">
                          <button type="button"
                            class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                          <div class="flex border-l border-gray-300 pl-4">
                            <button type="button"
                              class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
      
                </ul> -->
                <div class="">
                  <div class="mt-8 flex flex-col">
                    <div class="-my-2 -mx-4 sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 align-middle">
                        <div class="shadow-sm ring-1 ring-black ring-opacity-5">
                          <table class="min-w-full border-separate" style="border-spacing: 0">
                            <thead class="bg-gray-50">
                              <tr>
                                <th scope="col"
                                  class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-bold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">
                                  Tender Brief</th>
                                <th scope="col"
                                  class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-bold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">
                                  Tender Price</th>
                                <th scope="col"
                                  class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pr-4 pl-3 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                  <span class="sr-only">Remove Item</span>
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white">
                              <tr v-for="(tender, index) in TenderList" :key="index">
                                <td
                                  class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-40 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">
                                   {{ tender.tender_brief }}</td>
                                <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">
                                  KES <span class="font-bold text-indigo-500">{{ getPrice(tender.created_at) }}</span> 
                                </td>
                                <td
                                  class="group relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-md font-medium sm:pr-6 lg:pr-8">
                                  <a @click.prevent="removeTender(index)" href="#" class="text-indigo-600 hover:text-indigo-900"> 
                                    <i class="tranform transition  group-hover:font-bold group-hover:text-lg hover:scale-110 duration-700 fas fa-xmark"></i> 
                                  </a>
                                </td>
                              </tr>
                
                              <!-- More people... -->
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
      
              <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
                <div class="flex justify-between">
                  <!-- <dt>Subtotal</dt>
                  <dd class="text-gray-900">$104.00</dd> -->
                </div>
                <div class="flex justify-between">
                  <!-- <dt>Taxes</dt>
                  <dd class="text-gray-900">$8.32</dd> -->
                </div>
                <div class="flex justify-between border-t border-gray-200 pt-6 text-gray-900">
                  <dt class="text-base">Total</dt>
                  <dd class="text-base">KES <span class="font-extrabold text-indigo-500 text-md"> {{ getTotalAmount() }} </span></dd>
                </div>
              </dl>
            </div>
      
            <div class="mx-auto w-full max-w-lg">
      
              
              <div class="mt-6">
                <h2 class="mb-10 text-lg font-bold text-gray-900 justify-center">Enter Customer Details</h2>

                <div class="mt-6">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Client Name</label>
                  <div class="mt-1">
                    <input v-model="form.userName" type="text" id="email-address" name="email-address" autocomplete="email"
                      class="font-bold px-4 h-10 border-2 block w-full rounded-md border-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
                </div>
      
                <div class="mt-6">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <div class="mt-1">
                    <input v-model="form.userEmail" type="email" id="email-address" name="email-address" autocomplete="email"
                      class="font-bold px-4 h-10 border-2 block w-full rounded-md border-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
                </div>
      
                <div class="mt-6">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
                  <div class="mt-1">
                    <input v-model="form.userPhone" type="number" name="phone" id="phone" autocomplete="tel"
                      class="font-bold px-4 h-10 border-2 block w-full rounded-md border-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
                </div>
      
                
                <!-- Submit button, enable/disable based on form state -->
                <button @click="goToInvoice"
                  class="mt-6 w-full rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:bg-gray-100 disabled:text-gray-500">
                  Proceed to Payment
                </button>
              </div>
      
              <!-- <div class="mt-10 divide-y divide-gray-200 border-t border-b border-gray-200">
                <button type="button" disabled
                  class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Payment details</button>
                <button type="button" disabled
                  class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Shipping address</button>
                <button type="button" disabled
                  class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Billing address</button>
                <button type="button" disabled
                  class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Review</button>
              </div> -->

            </div>
          </div>
        </main>
      </div> 
    </div>

    <MainFooter />
  </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";
import moment from "moment";

export default {
  name: 'ViewCart',
  components: {
    TopBanner,
    MainMenu,
    MainFooter,
  },
  props: {
    Tenders: Array,
  },
  // mounted(){
  //   this.TenderList = this.Tenders
  // },
  beforeMount(){
    this.TenderList = this.Tenders
  },
  data(){
    return{
      TenderList: Array,
      form:{
        userName:'Michael Saiba',
        userEmail:'michaelsaiba84@gmail.com',
        userPhone:'254716202298',
      }
      
    }
  },
  watch: {
    TenderList(value){
      console.log(value)
      if(value.length == 0){
        this.$inertia.get('/')
      }
    }
  },
  computed: {

  },
  methods: {
    goToInvoice(){
      let currentItems = this.$store.state.tenderIDs
      const payload = {
        post: currentItems.toString(),
        posts: currentItems,
        user: this.form,
        amount: this.getTotalAmount()
      };
      // console.log(payload)
      this.$inertia.post('/multiple_tenders_invoice', payload)
    },
    removeTender(value){
      let splicedTender = this.TenderList.splice(value, 1);
      this.$store.commit('removeFromCart', splicedTender[0]._id)
      // console.log(splicedTender[0])
    },
    getTotalAmount(){
      let totalsarray =[]
      for (let index = 0; index < this.TenderList.length; index++) {
        const element = this.TenderList[index];
        let price = this.getPrice(element.created_at)
        totalsarray.push(price)        
      }
      return totalsarray.reduce((a, b) => a + b, 0)
    },
    getPrice(value){
      // console.log(value)
      var given = moment(value, "YYYY-MM-DD");
      var current = moment().startOf("day");
      var diff = moment.duration(current.diff(given)).asDays();
      if (diff <= 10) {
        return 150;
      } else if (diff >= 11 && this.diff <= 20) {
        return 100;
      } else {
        return 50;
      }
    }
  }

}
</script>

<style scoped>

</style>
