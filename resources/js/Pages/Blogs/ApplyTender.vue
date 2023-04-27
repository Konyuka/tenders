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
                                        class="text-base text-indigo-600 font-semibold tracking-wide uppercase"
                                    >
                                        Bidders Portal
                                    </h2>
                                    <p
                                        class="mb-5 font-heading-font mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"
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
                                        requirements one must meet to qualify
                                        for applying for a tender in Kenya.
                                        While owning a business is a sure way to
                                        accumulate and maintain wealth, it can
                                        get stagnant if the business is not run
                                        in the right way.
                                    </p>
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        Having the skills and means necessary to
                                        attract business to your side by winning
                                        a tender is a huge way to boost your
                                        revenue. For this reason, it is
                                        important to know what it takes to
                                        qualify for a tender.
                                    </p>
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        Outlined below, is the best way to go
                                        about applying for a tender in Kenya.
                                    </p>
                                    <div class="relative z-10">
                                        <div
                                            class="prose prose-indigo text-gray-500 mx-auto lg:max-w-none"
                                        >
                                            <ul role="list">
                                                <li>
                                                    Have a registered business.
                                                    To qualify for a tender, one
                                                    must have a business that is
                                                    registered and tax
                                                    compliant, more advantageous
                                                    if the company has physical
                                                    offices.
                                                </li>
                                                <li>
                                                    One must have the needed
                                                    documents. Tenders come with
                                                    requirements, once the
                                                    tenders have been announced;
                                                    you must have all the
                                                    documents required. It is
                                                    also important to answer
                                                    every section of the
                                                    application to avoid being
                                                    canceled out due to silly
                                                    mistakes.
                                                </li>
                                                <li>
                                                    Ensure that you are
                                                    registered within a certain
                                                    body. A lot of tenders and
                                                    contracts as a whole prefer
                                                    if the business is
                                                    registered with bodies like
                                                    NEMA or NCA. These
                                                    registrations align to the
                                                    field in which your business
                                                    is built in.
                                                </li>
                                                <li>
                                                    Make sure you have complied
                                                    with all statutory
                                                    requirements. There are
                                                    certain basic stature
                                                    requirements for every
                                                    business before qualifying
                                                    for a tender. These are the
                                                    business registration
                                                    certificate, Pin
                                                    certificate, Business
                                                    permit, Tax compliance
                                                    certificate, and finally, a
                                                    filled tender document. If
                                                    one has bought a tender,
                                                    they must attach a copy of
                                                    the receipt to prove the
                                                    purchase.
                                                </li>
                                                <li>
                                                    Find the optimal value from
                                                    the tender. When applying
                                                    for a tender, one must
                                                    realize that there will be
                                                    more companies applying for
                                                    the same. As is naturally
                                                    expected, the lowest bidders
                                                    stand a higher chance of
                                                    getting the tender. It is,
                                                    therefore, important to
                                                    carefully analyze and carry
                                                    out research on the
                                                    background of the tender to
                                                    come up with optimal values
                                                    that will increase their
                                                    chances of securing the
                                                    tender.
                                                </li>
                                                <li>
                                                    Fill out the application
                                                    fully. In conclusion, it is
                                                    important to note that
                                                    filling out the tender form
                                                    thoroughly and completely is
                                                    a key detail in the
                                                    application of a tender.
                                                    While sending the
                                                    application, ensure that you
                                                    have attached all the
                                                    necessary documents for your
                                                    bid to be accepted. Failure
                                                    to comply with these
                                                    requirements could lead to
                                                    the tender being dismissed
                                                    before going through for
                                                    further evaluation and
                                                    consideration.
                                                </li>
                                            </ul>
                                        </div>
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
