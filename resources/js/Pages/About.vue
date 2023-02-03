<template>
  <div>
    <div class="bg-white">
      <TopBanner />
      <MainMenu class="sticky top-0 z-50" />

      <main class="overflow-hidden">
        <!-- Header -->

        <div class="bg-warm-gray-50">
          <div class="py-12 lg:py-12">
            <div class="lg:text-center">
              <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">
                Bidder's Portal
              </h2>
              <p
                class="text-4xl font-extrabold tracking-tight text-warm-gray-900 sm:text-5xl lg:text-6xl"
              >
                About Us & Contacts
              </p>
              <p
                class="font-primary-font mt-4 max-w-7xl text-xl text-gray-700 lg:mx-auto text-left"
              >
                Bidder’s portal is the ultimate platform for tenders and the tendering
                process. It creates an online platform where the tender suppliers can meet
                and work together. Apart from being a credible and reliable platform, it
                is highly recommended for delivery of good tenders and connecting them to
                reliable suppliers. Its features and guidelines help to teach even
                beginners on the way forward when it comes to creating a profile and
                qualifying to bid. This makes it a very easy to use platform that is
                preferred by both suppliers and consumers for its effectiveness and
                transparency. <br /><br />
                The bidder’s platform is meant for tenders. It provides live tender
                information to customers at a reasonable rate. Access to these tenders is
                done online with the comfort of just having the internet. This makes it
                convenient and a great time saver as one can apply for any tender from the
                comfort of their home. The platform is optimized and enables you to search
                for any tenders easily in the database using any keyword. You can search
                for tenders by Country, County, Parastatals, Private limited Company
                tenders, NGO tenders, Posting dates, Closing dates etc. <br /><br />
                Apart from helping the suppliers get access to tenders and the helping the
                government or private sectors meet suitable candidates for their tenders;
                the website has other important features that make it stand out. To begin
                with, the website has guidelines for any beginner when it comes to tenders
                and the tendering process. It has clear guidelines as to what a person
                must do in order to sign up as a company, and how to highlight their
                qualifications to prove that they are qualified to bid for tenders.<br /><br />
                The portal charges a certain fee which helps to filter out jokers and
                people who are not committed to the tendering process seriously. This
                helps the companies meet qualified personnel who have what it takes to
                meeting their needs, as opposed to being misled by a beautiful proposal
                only to get substandard work. <br /><br />
                Similarly, the bidders of the tender get access to quality tenders without
                too much unhealthy competition. It gives the opportunity to stand out in
                their bid and should their proposal meet all the needs and unique wants of
                the client, they stand a higher chance to get the job. It also gives the
                suppliers assurance as bidders portal takes pride in having legit clients
                on both ends. Therefore, while using the platform, the chances of being
                scammed, not getting paid or receiving substandard work are minimal.
                <br /><br />
                The portal has a list of strict terms and conditions all designed to
                protect the privacy and interest of both the tender givers and the
                bidders. This makes bidders portal not only easy to use but also very safe
                and secure. It is therefore not only a worthy asset but a recommended one
                for any person or company seeking to get tenders. This is regardless of
                the fact that they are beginners, the portal has a great step by step
                guide to ensure that any interested party easily navigates the platform.
              </p>
            </div>
          </div>
        </div>

        <!-- Contact grid -->
        <section aria-labelledby="offices-heading">
          <div class="max-w-7xl mx-auto py-12 px-4 sm:py-12 sm:px-6 lg:px-8">
            <h2 id="offices-heading" class="text-3xl font-extrabold text-warm-gray-900">
              Our offices & Contacts
            </h2>
            <p class="mt-6 text-lg text-warm-gray-500 max-w-3xl">
              You are gladly welcomed for a visit to our offices. Feel free to reach out
              to book an appointment.
            </p>
            <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Office Location</h3>
                <p class="mt-2 text-base text-warm-gray-500">
                  <span class="block">Syokimau, Nairobi Kenya</span>

                  <span class="block">Community road Narnawarayan Go down</span>
                </p>
              </div>

              <div>
                <h3 class="text-lg font-medium text-warm-gray-900">Contacts</h3>
                <p class="mt-2 text-base text-warm-gray-500">
                  <span class="block">info@biddersportal.com</span>

                  <span class="block">+254 112 047 733</span>
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- component -->
        <section class="text-gray-600 body-font relative">
          <div class="absolute inset-0 bg-white px-16">
            <iframe
              width="100%"
              height="100%"
              frameborder="0"
              marginheight="0"
              marginwidth="0"
              title="map"
              scrolling="no"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1860.7848075794943!2d36.9237449066091!3d-1.3686671530245518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f0d979fbbb6d1%3A0x9c10fb7769844634!2sCommunity%20road%20Narnawarayan%20Go%20down%2C!5e0!3m2!1sen!2ske!4v1659338796268!5m2!1sen!2ske"
              style=""
              class="rounded-md"
            ></iframe>
          </div>
          <div class="container px-5 py-24 mx-auto flex">
            <div
              class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md"
            >
              <div class="flex justify-between">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">
                  Write to us
                </h2>
                <i
                  v-if="showForm"
                  @click="formButton('close')"
                  class="fas fa-caret-up fa-2x text-indigo-600 hover:text-indigo-800"
                ></i>
                <i
                  v-if="!showForm"
                  @click="formButton('open')"
                  class="fas fa-caret-down fa-2x text-indigo-600 hover:text-indigo-800"
                ></i>
              </div>
              <p class="leading-relaxed mb-5 text-gray-600">
                We normally reply within an hour every business day
              </p>
              <div v-if="showForm">
                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  />
                </div>
                <div class="relative mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600"
                    >Message</label
                  >
                  <textarea
                    id="message"
                    name="message"
                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                  ></textarea>
                </div>
                <button
                  class="text-white bg-indigo-600 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-800 rounded text-lg"
                >
                  Send <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
      </main>

      <MainFooter class="mt-5" />
    </div>
  </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";

export default {
  name: "About",
  components: {
    TopBanner,
    MainMenu,
    MainFooter,
  },
  data() {
    return {
      showForm: false,
    };
  },
  watch: {},
  computed: {},
  methods: {
    formButton(value) {
      if (value == "close") {
        this.showForm = false;
      } else {
        this.showForm = true;
      }
    },
  },
};
</script>

<style scoped></style>
