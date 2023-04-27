<template>
    <div class="h-screen">
        <body class="overflow-x-hidden antialiased">
            <!-- <TopBanner /> -->
            <MainMenu />

            <div>
                <div class="py-16 bg-gray-50 overflow-hidden">
                    <div
                        class="max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8"
                    >
                        <div
                            class="lg:grid lg:grid-cols-1 lg:gap-8 lg:items-start"
                        >
                            <div>
                                <div
                                    class="text-base max-w-prose mx-auto lg:max-w-none"
                                >
                                    <h2
                                        class="mb-2 text-base text-indigo-600 font-semibold tracking-wide uppercase"
                                    >
                                        Bidders Portal
                                    </h2>
                                    <p
                                        class="mb-5 font-heading-font mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"
                                    >
                                        How To Get Government Tenders In Kenya
                                    </p>
                                </div>
                                <div
                                    class=" relative z-10 text-base max-w-prose mx-auto lg:max-w-5xl lg:mx-0"
                                >
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        If you are looking to grow a business or
                                        make more money, tenders are a good way
                                        to source opportunity and capital. A
                                        government tender is a sure way to make
                                        revenue and expand a business.
                                    </p>
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        There are procedures one must be
                                        familiar with to access and qualify for
                                        a tender. Below is a summarized guide on
                                        the procedure and what it takes to
                                        access tenders with the government in
                                        Kenya. To access government tenders, one
                                        needs to sign up for their IFMIS
                                        self-registration.
                                    </p>
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        The Integrated Financial Management
                                        Information System, (IFMIS) is an online
                                        portal designed and intended for
                                        suppliers to find a platform that will
                                        enable them to make deals and
                                        transactions as well as check on
                                        tenders.
                                    </p>
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        Since the beginning of the year 2014,
                                        the government made a formal
                                        announcement that all tenders would be
                                        posted online via IFMIS. This included
                                        tenders, bids, and contracts as well all
                                        to be posted in IFMIS for all to see and
                                        those that qualify can apply. This opens
                                        transparency and fairness as anyone with
                                        the right credentials can apply. It also
                                        promotes accountability which makes
                                        working with the government tenders an
                                        inward investment.
                                    </p>

                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        There are certain criteria one must meet
                                        to qualify to register with IFMIS as
                                        outlined below:
                                    </p>

                                    <div class="relative z-10">
                                        <div
                                            class="prose prose-indigo text-gray-500 mx-auto lg:max-w-none"
                                        >
                                            <ul role="list">
                                                <li>
                                                    National ID or passport,
                                                </li>
                                                <li>
                                                    A Certificate of
                                                    Incorporation or Business
                                                    Registration Certificate.
                                                </li>
                                                <li>
                                                    One must also have a
                                                    Partnership Deed if you are
                                                    running a partnership
                                                    business
                                                </li>
                                                <li>
                                                    A CR12 if you are running a
                                                    Limited Company.
                                                </li>
                                                <li>
                                                    The tax compliance
                                                    certificate
                                                </li>
                                                <li>
                                                    A tax compliance certificate
                                                    Letter from the National
                                                    Construction Authority
                                                    (NCA).
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        The system with IFMIS is pretty
                                        straightforward to use and with the
                                        right requirement, creating an account
                                        as a supplier is quite easy. Once the
                                        process is done, you can see the tenders
                                        in place and offer the necessary bid.
                                    </p>
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
import TopBanner from ".././Components/TopBanner.vue";
import MainMenu from ".././Components/MainMenu.vue";
import MainFooter from ".././Components/MainFooter.vue";

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
