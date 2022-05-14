<template>
    <div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white">
            <!-- Header -->
            <div class="relative pb-32 bg-gray-50">
                <div class="absolute inset-0">
                    <img
                        class="w-full h-full object-cover"
                        src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100"
                        alt=""
                    />
                    <div
                        class="absolute inset-0 bg-gray-50 mix-blend-multiply"
                        aria-hidden="true"
                    ></div>
                </div>
                <div
                    class="relative max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8"
                >
                    <h1
                        class="text-4xl font-extrabold tracking-tight text-black md:text-5xl lg:text-6xl"
                    >
                        Membership Plan:
                        <span class="text-indigo-600 text-5xl ml-5 capitalize">
                            {{ membership }}
                        </span>
                    </h1>
                    <p class="mt-6 max-w-3xl text-3xl text-gray-700">
                        Bookmarked Tenders
                    </p>
                </div>
            </div>

            <!-- Overlapping cards -->
            <section
                class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8"
                aria-labelledby="contact-heading"
            >
                <h2 class="sr-only" id="contact-heading">Contact us</h2>
                <div
                    class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8"
                >
                    <a
                        class="transform transition hover:scale-125 duration-700 flex flex-col bg-white rounded-2xl shadow-xl"
                    >
                        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                            <div
                                class="absolute top-0 p-5 inline-block bg-indigo-200 rounded-xl shadow-lg transform -translate-y-1/2"
                            >
                                <i
                                    class="fas fa-caret-down text-2xl text-indigo-700"
                                ></i>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900">
                                Tender Name
                            </h3>
                            <p class="mt-4 text-base text-gray-500">
                                No Tender has been saved yet
                            </p>
                        </div>
                        <div
                            class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8"
                        >
                            <a
                                href="#"
                                class="text-base font-medium text-indigo-700 hover:text-indigo-600"
                                >Preview tender on blank page<span
                                    aria-hidden="true"
                                >
                                    &rarr;</span
                                ></a
                            >
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
    name: "MembersPage",
    computed: {
        membership() {
            if (this.$parent.user.membership == "gold") {
                return "gold";
            } else if (this.$parent.user.membership == "silver") {
                return "silver";
            } else if (this.$parent.user.membership == "bronze") {
                return "bronze";
            } else {
                return "free";
            }
        }
    }
};
</script>
