<template>
    <div>
        <div
            class="2xl:mx-auto dark:bg-gray-900 2xl:container md:px-5 px-4 md:py-5 py-9"
        >
            <div class="relative rounded-md shadow-2xl">
                <div
                    class="text-xl relative bg-gradient-to-r from-blue-700 to-transparent w-full h-full z-40 top-0 md:p-16 p-6 flex flex-col justify-between rounded-md "
                >
                   

                    <div
                        class="relative bg-gray-300 bg-opacity-50 overflow-hidden"
                    >
                        <div
                            class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full"
                            aria-hidden="true"
                        >
                            <div class="relative h-full max-w-7xl mx-auto">
                                <svg
                                    class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2"
                                    width="404"
                                    height="784"
                                    fill="none"
                                    viewBox="0 0 404 784"
                                >
                                    <defs>
                                        <pattern
                                            id="f210dbf6-a58d-4871-961e-36d5016a0f49"
                                            x="0"
                                            y="0"
                                            width="20"
                                            height="20"
                                            patternUnits="userSpaceOnUse"
                                        >
                                            <rect
                                                x="0"
                                                y="0"
                                                width="4"
                                                height="4"
                                                class="text-gray-200"
                                                fill="currentColor"
                                            />
                                        </pattern>
                                    </defs>
                                    <rect
                                        width="404"
                                        height="784"
                                        fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"
                                    />
                                </svg>
                                <svg
                                    class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2"
                                    width="404"
                                    height="784"
                                    fill="none"
                                    viewBox="0 0 404 784"
                                >
                                    <defs>
                                        <pattern
                                            id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b"
                                            x="0"
                                            y="0"
                                            width="20"
                                            height="20"
                                            patternUnits="userSpaceOnUse"
                                        >
                                            <rect
                                                x="0"
                                                y="0"
                                                width="4"
                                                height="4"
                                                class="text-gray-200"
                                                fill="currentColor"
                                            />
                                        </pattern>
                                    </defs>
                                    <rect
                                        width="404"
                                        height="784"
                                        fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div class="relative pt-2 pb-2 sm:pb-2">
                            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-14">
                                <div class="text-center">
                                    <h1
                                        class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl"
                                    >
                                        <span
                                            class="block xl:inline text-white font-heading-font"
                                            >Connection to the rightful
                                        </span>
                                        <span
                                            class="block text-indigo-600 xl:inline font-bold-font"
                                            >Tender!</span
                                        >
                                    </h1>
                                    <p
                                        class="text-left mt-3 max-w-md mx-auto text-base text-gray-900 font-primary-font sm:text-lg md:mt-5 md:text-xl md:max-w-3xl"
                                    >
                                        Welcome to the one-stop shop for all things tenders in Kenya! <br> <br>
                                        Tired of sifting through stacks of government documents
                                        just to find a single tender? Look no further! <br> <br>
                                        We've got you covered with our extensive database of tender information,
                                        straight from the source. No more endless hours of searching and no more missed opportunities. <br> <br>
                                         With us, you'll never
                                        miss a beat in the Kenyan tender game. And the best part? We've made it all easy and fun! So sit back, relax, and let us
                                        do the heavy lifting. <br> <br>
                                        
                                        You just focus on winning that tender and making your business dreams a reality. Let's get
                                        tendering!
                                        <br> <br>
                                    </p>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "Header",
    components: {
    },
    data() {
        return {
            payload: {
                keyword: ""
            }
        };
    },
    watch: {},
    computed: {},
    methods: {
        searchTenders() {
            this.$inertia.post("/search", this.payload);
        },
        openModal() {
            this.$emit("modalState", true);
        }
    }
};
</script>

<style scoped></style>
