<template>
    <div class="h-screen">
        <body class="overflow-x-hidden antialiased">
            <TopBanner />
            <MainMenu />

            <div>
                <div class="py-16 bg-gray-50 overflow-hidden">
                    <div
                        class="max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8"
                    >
                        <div
                            class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-start"
                        >
                            <div
                                class="text-base max-w-prose mx-auto lg:max-w-none"
                            >
                                <h2
                                    class="text-base text-indigo-600 font-semibold tracking-wide uppercase"
                                >
                                    Bidders Portal
                                </h2>
                                <p
                                    class="font-heading-font mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"
                                >
                                    How to apply for a Tender in Kenya
                                </p>
                            </div>
                            <div
                                class=" relative z-10 text-base max-w-prose mx-auto lg:max-w-5xl lg:mx-0"
                            >
                                <p
                                    class="font-primary-font text-lg text-gray-500 mb-2"
                                >
                                    There are a number of qualifications and
                                    requirements one must meet to qualify for
                                    applying for a tender in Kenya. While owning
                                    a business is a sure way to accumulate and
                                    maintain wealth, it can get stagnant if the
                                    business is not run in the right way.
                                </p>
                                <p
                                    class="font-primary-font text-lg text-gray-500 mb-2"
                                >
                                    Having the skills and means necessary to
                                    attract business to your side by winning a
                                    tender is a huge way to boost your revenue.
                                    For this reason, it is important to know
                                    what it takes to qualify for a tender.
                                </p>
                                <p
                                    class="font-primary-font text-lg text-gray-500 mb-2"
                                >
                                    Outlined below, is the best way to go about
                                    applying for a tender in Kenya.
                                </p>
                                <div class="relative z-10">
                                    <div
                                        class="prose prose-indigo text-gray-500 mx-auto lg:max-w-none"
                                    >
                                        <ul role="list">
                                            <li>
                                                Quis elit egestas venenatis
                                                mattis dignissim.
                                            </li>
                                            <li>
                                                Cras cras lobortis vitae vivamus
                                                ultricies facilisis tempus.
                                            </li>
                                            <li>
                                                Orci in sit morbi dignissim
                                                metus diam arcu pretium.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <MainFooter />
        </body>
    </div>
</template>

<script>
import TopBanner from "../Components/TopBanner.vue";
import MainMenu from "../Components/MainMenu.vue";
import MainFooter from "../Components/MainFooter.vue";

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
