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

    <!-- v-if="status == 'Success'" -->
    
    <div   id="popup-modal" tabindex="-1"
      class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full">
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex justify-end p-5">
            <!-- <a v-if="status=='Cancelled'" :href="route('checkout', post._id)">
                        <button  type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        </a> -->
          </div>
          <!-- Modal body -->
          <div class="p-4 pt-0 text-center mt-5">
            <i class="fas fa-coins fa-2xl mb-10 text-green-500"></i>
            <h3 class="mb-5 text-2xl font-extrabold text-green-500 dark:text-gray-400 italic">
              Thank you! Purchase Confirmed
            </h3>
            <p class="my-10 text-sm font-bold text-indigo-700">Tender Details have been sent to: <br/> {{ form.userEmail }}</p>
          </div>

          <section v-if="optionChosen=='mail'" class="px-10" aria-labelledby="contact-info-heading">
            <div class="mt-6">
              <label for="email-address" class="block text-sm font-bold text-gray-700">Email address</label>
              <div class="mt-1">
                <input v-model="form.userEmail" type="email" id="email-address" name="email-address" autocomplete="email"
                  class="font-bold p-5 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
            <div class="p-4 pt-0 text-center mt-5">
              <a>
                <button @click="choseMethod('mail')" data-modal-toggle="popup-modal" type="button"
                  class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-2 py-1 text-center mr-2">
                  Send to Mail <i class="ml-2 fas fa-paper-plane"></i>
                </button>
              </a>
            </div>
          </section>

    
          <div class="mt-10 p-4 pt-0 text-center mt-5">
            <a>
              <button @click="choseMethod('mail')" data-modal-toggle="popup-modal" type="button"
                class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-2 py-2.5 text-center mr-2">
                Mail Details 
              </button>
            </a>
            <a>
              <button @click="choseMethod('download')" data-modal-toggle="popup-modal" type="button"
                class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-2 py-2.5 text-center mr-2">
                Download Details 
              </button>
            </a>
            <!-- <a @click="unlockMultile">
              <button data-modal-toggle="popup-modal" type="button"
                class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-lg inline-flex items-center px-5 py-2.5 text-center mr-2">
                Tap to Unlock Tender Details
              </button>
            </a> -->
          </div>
        </div>
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
    transId: String,
    status: String,
    email: String,
  },
  mounted(){
    // this.TenderList = this.Tenders
    if (localStorage.getItem("userName") != "null") {
      this.form.userName = localStorage.getItem("userName");
    }
    if (localStorage.getItem("userPhone") != "null") {
      this.form.userPhone = localStorage.getItem("userPhone");
    }
    if (localStorage.getItem("userEmail") != "null") {
      this.form.userEmail = localStorage.getItem("userEmail");
    }
  },
  beforeMount(){
    this.TenderList = this.Tenders
  },
  data(){
    return{
      emailAddress:null,
      optionChosen:null,
      TenderList: Array,
      form:{
        userName:null,
        userEmail: null,
        userPhone: null,
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
    choseMethod(value){
      this.optionChosen = value
    },
    unlockMultile(){
      let currentItems = this.$store.state.tenderIDs
      const payload = {
        transId: this.transId,
        posts: currentItems,
      };
      this.$inertia.post(`/unlock/multiple/${this.transId}`, payload)
    },
    goToInvoice(){
      localStorage.setItem("userName", this.form.userName);
      localStorage.setItem("userPhone", this.form.userPhone);
      localStorage.setItem("userEmail", this.form.userEmail);
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
