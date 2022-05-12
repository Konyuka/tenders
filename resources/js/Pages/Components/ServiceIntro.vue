<template>
    <div class="mx-5 rounded-lg">
        <div class="bg-gray-50 mt-5 rounded-lg">
            <div class="relative bg-white">
                <!-- Overlapping background -->
                <div
                    aria-hidden="true"
                    class="hidden absolute bg-gray-50 w-full h-6 bottom-0 lg:block"
                ></div>

                <div
                    class="relative max-w-2xl mx-auto pt-1 px-4 text-center sm:pt-12 sm:px-6 lg:max-w-7xl lg:px-8"
                >
                    <h1
                        class="text-4xl font-extrabold tracking-tight text-gray-700 sm:text-6xl font-heading-font"
                    >
                        <span class="block lg:inline">Simple pricing</span>
                        <!-- <span class="block lg:inline text-gray-600">no commitment.</span> -->
                    </h1>
                    <p class="mt-4 text-xl text-gray-400">
                        Everything you need, nothing you don't.
                    </p>
                </div>

                <h2 class="sr-only">Plans</h2>

                <!-- Cards -->
                <div
                    class="relative mt-8 max-w-2xl mx-auto px-4 pb-8 sm:mt-12 sm:px-6 lg:max-w-7xl lg:px-8 lg:pb-0"
                >
                    <!-- Decorative background -->
                    <div
                        aria-hidden="true"
                        class="hidden absolute top-4 bottom-6 left-8 right-8 inset-0 bg-indigo-700 rounded-tl-lg rounded-tr-lg lg:block"
                    ></div>

                    <div
                        class="relative space-y-6 lg:space-y-0 lg:grid lg:grid-cols-3"
                    >
                        <div
                            class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12"
                        >
                            <div>
                                <h3
                                    class="text-white text-sm font-semibold uppercase tracking-wide"
                                >
                                    Premium Price
                                </h3>
                                <div
                                    class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start"
                                >
                                    <div class="mt-3 flex items-center">
                                        <p
                                            class="text-white text-4xl font-extrabold tracking-tight"
                                        >
                                            KES 100
                                        </p>
                                        <!-- <div class="ml-4">
                        <p class="text-indigo-200 text-sm">Billed Depending on Tender Expiry</p>
                        </div> -->
                                    </div>
                                    <!-- <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</a> -->
                                </div>
                            </div>
                            <h4 class="sr-only">Features</h4>
                            <ul
                                role="list"
                                class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0 mb-10"
                            >
                                <li class="py-3 flex items-center">
                                    <!-- Heroicon name: solid/check -->
                                    <svg
                                        class="text-indigo-200 w-5 h-5 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span
                                        class="text-white ml-3 text-sm font-medium"
                                        >4 to 3 Weeks to Expiry</span
                                    >
                                </li>
                            </ul>
                        </div>

                        <div
                            class="bg-white ring-2 ring-indigo-700 shadow-xl pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12"
                        >
                            <div>
                                <h3
                                    class="text-indigo-600 text-sm font-semibold uppercase tracking-wide"
                                >
                                    Intermediate Price
                                </h3>
                                <div
                                    class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start"
                                >
                                    <div class="mt-3 flex items-center">
                                        <p
                                            class="text-indigo-600 text-4xl font-extrabold tracking-tight"
                                        >
                                            KES 50
                                        </p>
                                        <!-- <div class="ml-4">
                        <p class="text-gray-700 text-sm">USD / mo</p>
                        <p class="text-gray-500 text-sm">Billed yearly ($220)</p>
                        </div> -->
                                    </div>
                                    <!-- <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Scale</a> -->
                                </div>
                            </div>
                            <h4 class="sr-only">Features</h4>
                            <ul
                                role="list"
                                class="border-gray-200 divide-gray-200 mt-7 border-t divide-y lg:border-t-0 mb-10"
                            >
                                <li class="py-3 flex items-center">
                                    <!-- Heroicon name: solid/check -->
                                    <svg
                                        class="text-gray-600 w-5 h-5 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span
                                        class="text-gray-600 ml-3 text-sm font-medium"
                                        >2 Weeks to Expiry</span
                                    >
                                </li>
                            </ul>
                        </div>

                        <div
                            class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12"
                        >
                            <div>
                                <h3
                                    class="text-white text-sm font-semibold uppercase tracking-wide"
                                >
                                    Regular Price
                                </h3>
                                <div
                                    class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start"
                                >
                                    <div class="mt-3 flex items-center">
                                        <p
                                            class="text-white text-4xl font-extrabold tracking-tight"
                                        >
                                            KES 25
                                        </p>
                                        <!-- <div class="ml-4">
                        <p class="text-white text-sm">USD / mo</p>
                        <p class="text-indigo-200 text-sm">Billed yearly ($140)</p>
                        </div> -->
                                    </div>
                                    <!-- <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Growth</a> -->
                                </div>
                            </div>
                            <h4 class="sr-only">Features</h4>
                            <ul
                                role="list"
                                class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0 mb-10"
                            >
                                <li class="py-3 flex items-center">
                                    <!-- Heroicon name: solid/check -->
                                    <svg
                                        class="text-indigo-200 w-5 h-5 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span
                                        class="text-white ml-3 text-sm font-medium"
                                        >1 Week to Expiry</span
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="pt-20 pb-24 2xl:py-40 bg-white mx-10 rounded-3xl">
            <div class="container mx-auto px-4">
                <div class="mb-16 md:mb-24 text-center">
                    <h1
                        class="mb-2 text-5xl lg:text-6xl 2xl:text-7xl text-gray-700 font-bold font-heading font-heading-font"
                    >
                        Membership Pricing
                    </h1>
                    <p class="mt-4 text-xl text-gray-400">
                        Everything you need, nothing you don't.
                    </p>
                </div>
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-wrap items-center -mx-3">
                        <div class="w-full lg:w-1/3 px-3 mb-8 lg:mb-0">
                            <div class="px-12 py-16 bg-indigo-700 rounded-3xl">
                                <div
                                    class="pb-8 mb-14 border-b border-gray-400"
                                >
                                    <div
                                        class="flex justify-between items-center px-3"
                                    >
                                        <h3
                                            class="text-4xl text-white font-bold font-heading"
                                        >
                                            Bronze
                                        </h3>
                                        <p class="text-lg text-white font-bold">
                                            KES 2,000
                                        </p>
                                    </div>
                                </div>
                                <ul
                                    class="text-sm text-white mb-16 font-primary-font"
                                >
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span
                                            >Access all Tenders in a
                                            Category</span
                                        >
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span
                                            >Exclusive Tender Details
                                            Access</span
                                        >
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span>Email Notifications Updates</span>
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span>Billed Monthly</span>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a
                                        class="inline-block px-10 py-4 border border-gray-200 hover:border-gray-100 rounded-full font-bold text-white"
                                        href="#"
                                        >Subscribe to Plan</a
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/3 px-3 mb-8 lg:mb-0">
                            <div class="px-12 py-16 bg-yellow-400 rounded-3xl">
                                <div
                                    class="pb-8 mb-14 border-b border-blueGray-300"
                                >
                                    <div
                                        class="flex justify-between items-center px-3"
                                    >
                                        <h3
                                            class="text-4xl text-white font-bold font-heading"
                                        >
                                            Gold
                                        </h3>
                                        <p class="text-lg text-white font-bold">
                                            KES 50,000
                                        </p>
                                    </div>
                                </div>
                                <ul
                                    class="text-sm text-white mb-16 font-primary-font"
                                >
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span
                                            >Access all Tenders in All
                                            Category</span
                                        >
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span
                                            >Exclusive Tender Details
                                            Access</span
                                        >
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span>Email Notifications Updates</span>
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span>Billed Annually</span>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a
                                        class="inline-block px-10 py-4 border border-blueGray-300 hover:border-blueGray-100 rounded-full font-bold text-white"
                                        href="#"
                                        >Subscribe to Plan</a
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/3 px-3">
                            <div class="px-12 py-16 bg-indigo-700 rounded-3xl">
                                <div
                                    class="pb-8 mb-14 border-b border-gray-400"
                                >
                                    <div
                                        class="flex justify-between items-center px-3"
                                    >
                                        <h3
                                            class="text-4xl text-white font-bold font-heading"
                                        >
                                            Silver
                                        </h3>
                                        <p class="text-lg text-white font-bold">
                                            KES 10,000
                                        </p>
                                    </div>
                                </div>
                                <ul
                                    class="text-sm text-white mb-16 font-primary-font"
                                >
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span
                                            >Access all Tenders in a
                                            Category</span
                                        >
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span
                                            >Exclusive Tender Details
                                            Access</span
                                        >
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span>Email Notifications Updates</span>
                                    </li>
                                    <li class="flex items-center mb-8">
                                        <span class="mr-6">
                                            <svg
                                                width="20"
                                                height="16"
                                                viewbox="0 0 20 16"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M6.81671 15.0418L0 8.2251L0.90027 7.32483L6.81671 13.2413L19.0997 0.958252L20 1.85852L6.81671 15.0418Z"
                                                    fill="white"
                                                ></path>
                                            </svg>
                                        </span>
                                        <span>Billed Annually</span>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a
                                        class="inline-block px-10 py-4 border border-gray-200 hover:border-gray-100 rounded-full font-bold text-white"
                                        href="#"
                                        >Subscribe to Plan</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-indigo-700 mt-10 mx-10 rounded-3xl">
            <div
                class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8"
            >
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block"
                        >Simplicity in productivity
                        <i class="fas fa-thumbs-up"></i
                    ></span>
                    <span class="block">Explore Bidders Portal today.</span>
                </h2>
                <p
                    class="mt-4 text-lg leading-6 text-indigo-200 font-heading-font"
                >
                    We focus on bringing you closer and invested in your market
                    niche. There are millions of tenders awaiting and we ensure
                    that you
                </p>
                <a
                    href="#"
                    class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-bold rounded-md text-gray-500 hover:text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto font-heading-font transform transition hover:scale-125 duration-700 hover:shadow-2xl"
                >
                    Sign up for free
                </a>
            </div>
        </div>

        <section
            class="max-w-8xl mx-auto container bg-white dark:bg-gray-900 pt-16"
        >
            <div>
                <div class="mb-8 md:mb-12 text-center">
                    <h1
                        class="mb-2 text-5xl lg:text-6xl 2xl:text-7xl text-gray-700 font-bold font-heading font-heading-font"
                    >
                        Services Offered
                    </h1>
                    <p class="mt-4 text-xl text-gray-400">
                        Everything you need, nothing you don't.
                    </p>
                </div>
                <!-- <div class="mb-16 md:mb-24 text-center">
                    <h2
                        class="mb-8 md:mb-14 text-5xl lg:text-6xl 2xl:text-7xl text-gray-700 font-bold font-heading font-heading-font"
                    >
                        Services Offered
                    </h2>
                </div> -->
                <div
                    tabindex="0"
                    aria-label="group of cards"
                    class="focus:outline-none mt-2 ml-18 flex flex-wrap justify-center"
                >
                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <!-- <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG1.svg" alt="drawer"> -->
                                <i class="fas fa-bell fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Daily Tender Alert
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex ml-20 sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-chart-pie fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Tender Analysis
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-file-excel fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Tender Data in Excel
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex ml-20 sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-trophy fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Contract Awards
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-database fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Tender Project Information
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex ml-20 sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-handshake fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Bid Consultancy
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-book-bookmark fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Knowledge Center
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>

                    <div
                        tabindex="0"
                        aria-label="card 1"
                        class="focus:outline-none flex ml-20 sm:w-full md:w-5/12 pb-20"
                    >
                        <div class="w-20 h-20 relative mr-5">
                            <div
                                class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"
                            ></div>
                            <div
                                class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3"
                            >
                                <i class="fas fa-face-angry fa-2xl"></i>
                            </div>
                        </div>
                        <div class="w-10/12 my-6">
                            <h2
                                tabindex="0"
                                class="focus:outline-none text-4xl font-extrabold leading-tight text-gray-800 dark:text-white font-heading-font"
                            >
                                Dispute Redressal
                            </h2>
                            <!-- <p tabindex="0" class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-black mt-5 rounded-3xl">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white font-bold-font">
                    Frequently asked questions
                    <i
                        class="ml-5 fas fa-circle-question text-white-600 fa-xl
            "
                    ></i>
                </h2>
                <div
                    class="mt-6 border-t border-indigo-300 border-opacity-25 pt-10"
                >
                    <dl
                        class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12"
                    >
                        <div>
                            <dt
                                class="text-lg leading-6 font-extrabold text-white font-heading-font"
                            >
                                Do I have to register an account to purchase a
                                tender?
                            </dt>
                            <dd
                                class="mt-2 text-base text-indigo-200 font-primary-font"
                            >
                                I don&#039;t know, but the flag is a big plus.
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quas cupiditate laboriosam
                                fugiat.
                            </dd>
                        </div>
                        <div>
                            <dt
                                class="text-lg leading-6 font-extrabold text-white font-heading-font"
                            >
                                Do you have other payment gateways besides
                                Mpesa?
                            </dt>
                            <dd
                                class="mt-2 text-base text-indigo-200 font-primary-font"
                            >
                                I don&#039;t know, but the flag is a big plus.
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quas cupiditate laboriosam
                                fugiat.
                            </dd>
                        </div>
                        <div>
                            <dt
                                class="text-lg leading-6 font-extrabold text-white font-heading-font"
                            >
                                How frequently are the tenders updated?
                            </dt>
                            <dd
                                class="mt-2 text-base text-indigo-200 font-primary-font"
                            >
                                I don&#039;t know, but the flag is a big plus.
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quas cupiditate laboriosam
                                fugiat.
                            </dd>
                        </div>
                        <div>
                            <dt
                                class="text-lg leading-6 font-extrabold text-white font-heading-font"
                            >
                                Can I subscribe to newsletters and
                                notifications?
                            </dt>
                            <dd
                                class="mt-2 text-base text-indigo-200 font-primary-font"
                            >
                                I don&#039;t know, but the flag is a big plus.
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quas cupiditate laboriosam
                                fugiat.
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- <div class="bg-white py-1">
        <div class="relative sm:py-16">
            <div aria-hidden="true" class="hidden sm:block">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
            <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                <defs>
                <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
                </defs>
                <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
            </svg>
            </div>
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="relative rounded-2xl px-6 py-10 bg-indigo-600 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                    <path class="text-indigo-500 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                    <path class="text-indigo-700 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                </svg>
                </div>
                <div class="relative">
                <div class="sm:text-center">
                    <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">Get notified and stay updated.</h2>
                    <p class="mt-6 mx-auto max-w-2xl text-lg text-indigo-200 font-primary-font">
                        Get updates and notifications regarding new tender posted and other interesting news letters.

                    </p>
                </div>
                <form action="#" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
                    <div class="min-w-0 flex-1">
                    <label for="cta-email" class="sr-only">Email address</label>
                    <input id="cta-email" type="email" class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600" placeholder="Enter your email">
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-3">
                    <button type="submit" class="block w-full rounded-md border border-transparent px-5 py-3 bg-indigo-500 text-base font-medium text-white shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 sm:px-10">Notify me</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div> -->

        <div class="bg-indigo-700 mt-7 rounded-lg">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="relative bg-white shadow-xl">
                    <h2 class="sr-only">Contact us</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <!-- Contact information -->
                        <div
                            class="relative overflow-hidden py-10 px-6 bg-indigo-700 sm:px-10 xl:p-12"
                        >
                            <div
                                class="absolute inset-0 pointer-events-none sm:hidden"
                                aria-hidden="true"
                            >
                                <svg
                                    class="absolute inset-0 w-full h-full"
                                    width="343"
                                    height="388"
                                    viewBox="0 0 343 388"
                                    fill="none"
                                    preserveAspectRatio="xMidYMid slice"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z"
                                        fill="url(#linear1)"
                                        fill-opacity=".1"
                                    />
                                    <defs>
                                        <linearGradient
                                            id="linear1"
                                            x1="254.553"
                                            y1="107.554"
                                            x2="961.66"
                                            y2="814.66"
                                            gradientUnits="userSpaceOnUse"
                                        >
                                            <stop stop-color="#fff"></stop>
                                            <stop
                                                offset="1"
                                                stop-color="#fff"
                                                stop-opacity="0"
                                            ></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden"
                                aria-hidden="true"
                            >
                                <svg
                                    class="absolute inset-0 w-full h-full"
                                    width="359"
                                    height="339"
                                    viewBox="0 0 359 339"
                                    fill="none"
                                    preserveAspectRatio="xMidYMid slice"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z"
                                        fill="url(#linear2)"
                                        fill-opacity=".1"
                                    />
                                    <defs>
                                        <linearGradient
                                            id="linear2"
                                            x1="192.553"
                                            y1="28.553"
                                            x2="899.66"
                                            y2="735.66"
                                            gradientUnits="userSpaceOnUse"
                                        >
                                            <stop stop-color="#fff"></stop>
                                            <stop
                                                offset="1"
                                                stop-color="#fff"
                                                stop-opacity="0"
                                            ></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block"
                                aria-hidden="true"
                            >
                                <svg
                                    class="absolute inset-0 w-full h-full"
                                    width="160"
                                    height="678"
                                    viewBox="0 0 160 678"
                                    fill="none"
                                    preserveAspectRatio="xMidYMid slice"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z"
                                        fill="url(#linear3)"
                                        fill-opacity=".1"
                                    />
                                    <defs>
                                        <linearGradient
                                            id="linear3"
                                            x1="192.553"
                                            y1="325.553"
                                            x2="899.66"
                                            y2="1032.66"
                                            gradientUnits="userSpaceOnUse"
                                        >
                                            <stop stop-color="#fff"></stop>
                                            <stop
                                                offset="1"
                                                stop-color="#fff"
                                                stop-opacity="0"
                                            ></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-white">
                                Contact information
                            </h3>
                            <p class="mt-6 text-base text-indigo-50 max-w-3xl">
                                Feel Free to reach us on
                            </p>
                            <dl class="mt-8 space-y-6">
                                <dt>
                                    <span class="sr-only">Phone number</span>
                                </dt>
                                <dd class="flex text-base text-indigo-50">
                                    <!-- Heroicon name: outline/phone -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-200"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                        />
                                    </svg>
                                    <span class="ml-3">+254 716 202 228</span>
                                </dd>
                                <dt><span class="sr-only">Email</span></dt>
                                <dd class="flex text-base text-indigo-50">
                                    <!-- Heroicon name: outline/mail -->
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-indigo-200"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        />
                                    </svg>
                                    <span class="ml-3"
                                        >support@biddersportal.com</span
                                    >
                                </dd>
                            </dl>
                            <!-- <ul role="list" class="mt-8 flex space-x-12">
                    <li>
                    <a class="text-indigo-200 hover:text-indigo-100" href="#">
                        <span class="sr-only">Facebook</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                        <path d="M22.258 1H2.242C1.556 1 1 1.556 1 2.242v20.016c0 .686.556 1.242 1.242 1.242h10.776v-8.713h-2.932V11.39h2.932V8.887c0-2.906 1.775-4.489 4.367-4.489 1.242 0 2.31.093 2.62.134v3.037l-1.797.001c-1.41 0-1.683.67-1.683 1.653v2.168h3.362l-.438 3.396h-2.924V23.5h5.733c.686 0 1.242-.556 1.242-1.242V2.242C23.5 1.556 22.944 1 22.258 1" fill="currentColor" />
                        </svg>
                    </a>
                    </li>
                    <li>
                    <a class="text-indigo-200 hover:text-indigo-100" href="#">
                        <span class="sr-only">GitHub</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                        <path d="M11.999 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.386.6.11.819-.26.819-.578 0-.284-.01-1.04-.017-2.04-3.337.724-4.042-1.61-4.042-1.61-.545-1.386-1.332-1.755-1.332-1.755-1.09-.744.082-.73.082-.73 1.205.086 1.838 1.238 1.838 1.238 1.07 1.833 2.81 1.304 3.493.996.109-.775.419-1.303.762-1.603C7.145 17 4.343 15.97 4.343 11.373c0-1.31.468-2.382 1.236-3.22-.124-.304-.536-1.524.118-3.176 0 0 1.007-.323 3.3 1.23.956-.266 1.983-.4 3.003-.404 1.02.005 2.046.138 3.005.404 2.29-1.553 3.296-1.23 3.296-1.23.655 1.652.243 2.872.12 3.176.77.838 1.233 1.91 1.233 3.22 0 4.61-2.806 5.624-5.478 5.921.43.37.814 1.103.814 2.223 0 1.603-.015 2.898-.015 3.291 0 .321.217.695.825.578C20.565 21.796 24 17.3 24 12c0-6.627-5.373-12-12.001-12" fill="currentColor" />
                        </svg>
                    </a>
                    </li>
                    <li>
                    <a class="text-indigo-200 hover:text-indigo-100" href="#">
                        <span class="sr-only">Twitter</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                        <path d="M7.548 22.501c9.056 0 14.01-7.503 14.01-14.01 0-.213 0-.425-.015-.636A10.02 10.02 0 0024 5.305a9.828 9.828 0 01-2.828.776 4.94 4.94 0 002.165-2.724 9.867 9.867 0 01-3.127 1.195 4.929 4.929 0 00-8.391 4.491A13.98 13.98 0 011.67 3.9a4.928 4.928 0 001.525 6.573A4.887 4.887 0 01.96 9.855v.063a4.926 4.926 0 003.95 4.827 4.917 4.917 0 01-2.223.084 4.93 4.93 0 004.6 3.42A9.88 9.88 0 010 20.289a13.941 13.941 0 007.548 2.209" fill="currentColor" />
                        </svg>
                    </a>
                    </li>
                </ul> -->
                        </div>

                        <!-- Contact form -->
                        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                            <h3 class="text-lg font-medium text-gray-900">
                                Send us a message
                            </h3>
                            <form
                                action="#"
                                method="POST"
                                class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8"
                            >
                                <div>
                                    <label
                                        for="first-name"
                                        class="block text-sm font-medium text-gray-900"
                                        >First name</label
                                    >
                                    <div class="mt-1">
                                        <input
                                            type="text"
                                            name="first-name"
                                            id="first-name"
                                            autocomplete="given-name"
                                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label
                                        for="last-name"
                                        class="block text-sm font-medium text-gray-900"
                                        >Last name</label
                                    >
                                    <div class="mt-1">
                                        <input
                                            type="text"
                                            name="last-name"
                                            id="last-name"
                                            autocomplete="family-name"
                                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label
                                        for="email"
                                        class="block text-sm font-medium text-gray-900"
                                        >Email</label
                                    >
                                    <div class="mt-1">
                                        <input
                                            id="email"
                                            name="email"
                                            type="email"
                                            autocomplete="email"
                                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between">
                                        <label
                                            for="phone"
                                            class="block text-sm font-medium text-gray-900"
                                            >Phone</label
                                        >
                                        <span
                                            id="phone-optional"
                                            class="text-sm text-gray-500"
                                            >Optional</span
                                        >
                                    </div>
                                    <div class="mt-1">
                                        <input
                                            type="text"
                                            name="phone"
                                            id="phone"
                                            autocomplete="tel"
                                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                            aria-describedby="phone-optional"
                                        />
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label
                                        for="subject"
                                        class="block text-sm font-medium text-gray-900"
                                        >Subject</label
                                    >
                                    <div class="mt-1">
                                        <input
                                            type="text"
                                            name="subject"
                                            id="subject"
                                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
                                        />
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="flex justify-between">
                                        <label
                                            for="message"
                                            class="block text-sm font-medium text-gray-900"
                                            >Message</label
                                        >
                                        <span
                                            id="message-max"
                                            class="text-sm text-gray-500"
                                            >Max. 500 characters</span
                                        >
                                    </div>
                                    <div class="mt-1">
                                        <textarea
                                            id="message"
                                            name="message"
                                            rows="4"
                                            class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md"
                                            aria-describedby="message-max"
                                        ></textarea>
                                    </div>
                                </div>
                                <div
                                    class="sm:col-span-2 sm:flex sm:justify-end"
                                >
                                    <button
                                        type="submit"
                                        class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
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
        //   Categories,
    },
    data() {
        return {};
    },
    watch: {},
    computed: {},
    methods: {}
};
</script>

<style scoped></style>
