<template>
  <div class="px-10">
    <div class="bg-indigo-700 rounded-xl">
      <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
          <span class="block">Daily Free Tender</span>
        </h2>
        <p class="mt-4 text-lg font-primary-font font-extrabold text-indigo-200">
          <span class="font-extrabold mr-2 font-heading-font text-white"
            >Purchasing Authority:</span
          >
          {{ freeTender[0].purchasing_authority }}
        </p>
        <p class="mt-4 text-lg font-primary-font font-extrabold text-indigo-200">
          <span class="font-extrabold mr-2 font-heading-font text-white"
            >Tender Brief:</span
          >
          {{ freeTender[0].tender_brief }}
        </p>
        <p
          class="flex justify-between mt-4 text-lg font-primary-font font-extrabold text-indigo-200"
        >
          <span class="mr-4"
            ><i class="fas fa-coins fa-xl mb-1"></i>
            <p class="text-sm">Funded by {{ freeTender[0].funded_by }}</p>
          </span>
          <span class="mr-4"
            ><i class="fas fa-clock fa-xl mb-1 text-green-400"></i>
            <p class="text-sm">Posted {{ ago(freeTender[0].created_at) }} ago</p>
            <!-- <p class="text-sm">{{ freeTender[0].expiry }}</p> -->
          </span>
          <span class="mr-4"
            ><i class="fas fa-clock fa-xl mb-1 text-red-400"></i>
            <p class="text-sm">
              Last Date of bid on {{ formatDate(freeTender[0].expiry) }}
            </p>
          </span>
        </p>
        <a
          :href="route('tweet')"
          class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto"
        >
          Tweet Free Tender
        </a>
      </div>
    </div>
  </div>
</template>

<script>
import Layout from "../../Layouts/DashboardLayout";
import moment from "moment";

export default {
  name: "AdminTwitter",
  layout: Layout,
  components: {
    //   Categories,
  },
  props: {
    freeTender: Array,
  },
  data() {
    return {
      // completedTrans: true
    };
  },
  watch: {},
  computed: {},
  methods: {
    formatDate(value) {
      return moment(value, "DD-MM-YY");
      //   return moment().format(value, "MMM Do YY");
    },
    ago(value) {
      return moment(value).fromNow();
    },
  },
};
</script>

<style scoped></style>
