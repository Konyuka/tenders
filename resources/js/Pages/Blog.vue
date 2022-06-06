<template>
    <div class="h-screen">
        <body class="overflow-x-hidden antialiased">
            <TopBanner />
            <MainMenu />

            <section class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-24 mx-auto">
                    <div class="-my-8 divide-y-2 divide-gray-100">
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div
                                class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col"
                            >
                                <span
                                    class="captalize font-semibold title-font text-gray-700"
                                    >Educative</span
                                >
                                <span class="mt-1 text-gray-500 text-sm"
                                    >6 Jun 2022</span
                                >
                            </div>
                            <div class="md:flex-grow">
                                <h2
                                    class="text-2xl font-medium text-gray-900 title-font mb-2"
                                >
                                    How To Win A Tender
                                </h2>
                                <p class="leading-relaxed">
                                    Any organization or business growing is
                                    likely to bid for a tender at some stage.
                                    This can be in aim of getting a new contract
                                    or continuing to work with the same
                                    supplier. This inevitably comes with stiff
                                    competition, for every tender at stake. It
                                    is therefore important, as a business person
                                    or supplier to learn how to stand out and
                                    stand a chance to win a tender with many
                                    bids.
                                </p>
                                <a
                                    class="text-indigo-500 inline-flex items-center mt-4"
                                    >Learn More
                                    <svg
                                        class="w-4 h-4 ml-2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div
                                class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col"
                            >
                                <span
                                    class="captalize font-semibold title-font text-gray-700"
                                    >Educative</span
                                >
                                <span class="mt-1 text-gray-500 text-sm"
                                    >6 Jun 2022</span
                                >
                            </div>
                            <div class="md:flex-grow">
                                <h2
                                    class="text-2xl font-medium text-gray-900 title-font mb-2"
                                >
                                    How to get government tenders in Kenya
                                </h2>
                                <p class="leading-relaxed">
                                    If you are looking to grow a business or
                                    make more money, tenders are a good way to
                                    source opportunity and capital. A government
                                    tender is a sure way to make revenue and
                                    expand a business. There are procedures one
                                    must be familiar with to access and qualify
                                    for a tender. Below is a summarized guide on
                                    the procedure and what it takes to access
                                    tenders with the government in Kenya. To
                                    access government tenders, one needs to sign
                                    up for their IFMIS self-registration.
                                </p>
                                <a
                                    class="text-indigo-500 inline-flex items-center mt-4"
                                    >Learn More
                                    <svg
                                        class="w-4 h-4 ml-2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div
                                class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col"
                            >
                                <span
                                    class="captalize font-semibold title-font text-gray-700"
                                    >Educative</span
                                >
                                <span class="text-sm text-gray-500"
                                    >6 Jun 2022</span
                                >
                            </div>
                            <div class="md:flex-grow">
                                <h2
                                    class="text-2xl font-medium text-gray-900 title-font mb-2"
                                >
                                    How to apply for a Tender in Kenya
                                </h2>
                                <p class="leading-relaxed">
                                    There are a number of qualifications and
                                    requirements one must meet to qualify for
                                    applying for a tender in Kenya. While owning
                                    a business is a sure way to accumulate and
                                    maintain wealth, it can get stagnant if the
                                    business is not run in the right way. Having
                                    the skills and means necessary to attract
                                    business to your side by winning a tender is
                                    a huge way to boost your revenue. For this
                                    reason, it is important to know what it
                                    takes to qualify for a tender.
                                </p>
                                <a
                                    class="text-indigo-500 inline-flex items-center mt-4"
                                    >Learn More
                                    <svg
                                        class="w-4 h-4 ml-2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <MainFooter />
        </body>
    </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";

export default {
    name: "Landing",
    props: {},
    components: {
        TopBanner,
        MainMenu,
        MainFooter
    },
    watch: {},
    mounted() {},
    computed: {},
    data() {
        return {
            modal: false
        };
    },
    methods: {
        clearFilters() {},
        loadFilters() {}
    }
};
</script>
