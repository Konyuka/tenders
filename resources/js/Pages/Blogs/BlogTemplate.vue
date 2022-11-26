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
                                       {{ blog.title }}
                                    </p>
                                </div>
                                <div
                                    class=" relative z-10 text-base max-w-prose mx-auto lg:max-w-5xl lg:mx-0"
                                >
                                    <p
                                        class="font-primary-font text-lg text-gray-500 mb-2"
                                    >
                                        {{ blog.content }}
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
import TopBanner from "../Components/TopBanner.vue";
import MainMenu from "../Components/MainMenu.vue";
import MainFooter from "../Components/MainFooter.vue";

export default {
    name: "BlogDetails",
    props: {
        blog: Object,
    },
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
