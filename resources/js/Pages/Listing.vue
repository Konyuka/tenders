<template>
    <div class="h-screen">
        <body class="overflow-x-hidden antialiased flex flex-col h-screen">
            <TopBanner />
            <MainMenu />

            <div class="text-gray-600 body-font">
                <!-- <header class="sticky top-2 z-50">
                    <button
                        @click="modal = true"
                        class="flex mx-auto mt-10 text-white bg-indigo-600 font-heading-font font-extrabold border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                    >
                        Tenders Search Filters
                    </button>
                </header> -->

                <main class="px-5 py-20 mx-auto">
                    <div class="flex flex-col text-center w-full mb-6">
                        <h2
                            class="text-xl text-indigo-500 tracking-widest font-medium title-font m-5"
                        >
                            BIDDERS PORTAL
                        </h2>
                        <!-- <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">All Tenders Listing</h1> -->
                    </div>

                    <div class="flex flex-row my-5 mx-20">
                        <div class="basis-4/5 mr-5">
                            <div class="columns-1">
                                <a
                                    v-for="post in orderBy(
                                        this.Posts.slice(0, 10),
                                        'expiry',
                                        -1
                                    )"
                                    :key="post._id"
                                    :href="route('selected', post._id)"
                                    class="group bg-white border-t-2 border-r-2 mt-4 my-4 border-indigo-600 shadow-xl transform transition hover:scale-75 duration-700 hover:shadow-2xl p-12 md:w-full flex flex-col min-h-2xl  items-start"
                                >
                                    <!-- <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">{{ post.funded_by }}</span> -->
                                    <div class="flex justify-between w-full">
                                        <div
                                            class="font-heading-font font-extrabold"
                                        >
                                            Posted:
                                            <span
                                                class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-bold tracking-widest"
                                            >
                                                {{ ago(post.created_at) }}</span
                                            >
                                        </div>
                                        <div
                                            class="font-heading-font font-extrabold"
                                            v-if="expired(post)"
                                        >
                                            Expires:
                                            <span
                                                class="inline-block py-1 px-2 rounded bg-red-50 text-red-500 text-xs font-bold tracking-widest"
                                            >
                                                Expired
                                            </span>
                                        </div>
                                        <div
                                            v-else
                                            class="font-heading-font font-extrabold"
                                        >
                                            Expires in:
                                            <span
                                                class="inline-block py-1 px-2 rounded bg-green-100 text-green-500 text-xs font-bold tracking-widest"
                                            >
                                                {{
                                                    togoFormat(post.expiry)
                                                }}</span
                                            >
                                        </div>
                                    </div>
                                    <p
                                        class="my-5 flex justify-center leading-relaxed mb-2 font-primary-font font-extrabold"
                                    >
                                        {{ post.tender_brief }}
                                    </p>

                                    <div
                                        class="flex items-center flex-wrap mt-10 border-b-2 border-gray-100 w-full"
                                    >
                                        <span
                                            class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0  leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                                        >
                                            <i
                                                class="w-4 h-4 mr-1 fas fa-filter text-indigo-600"
                                            ></i>
                                            Construction
                                            <!-- {{ post.category }} -->
                                        </span>
                                        <span
                                            class="text-gray-400 font-heading-font mr-3 inline-flex items-center ml-0 leading-none text-sm pr-3 py-1 border-r-2 border-gray-200"
                                        >
                                            <i
                                                class="w-4 h-4 mr-1 fas fa-location-crosshairs text-indigo-600"
                                            ></i>
                                            {{ post.country }}
                                        </span>
                                    </div>

                                    <div class="mt-10">
                                        <a
                                            class="text-indigo-600 inline-flex items-center font-heading-font font-extrabold"
                                            >Tender Details
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
                                </a>
                            </div>
                        </div>

                        <header class="sticky top-2 z-50">
                            <div class="basis-1/5">
                                <form id="login">
                                    <div class="bg-white dark:bg-gray-800">
                                        <div
                                            class="container mx-auto bg-white dark:bg-gray-800 mt-10 rounded px-4"
                                        >
                                            <div
                                                class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5"
                                            >
                                                <div
                                                    class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center"
                                                >
                                                    <p
                                                        class="text-lg text-gray-800 dark:text-gray-100 font-bold"
                                                    >
                                                        Tender Search Filters
                                                    </p>
                                                    <div
                                                        class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400"
                                                    >
                                                        <i
                                                            class="fas fa-search fa-4xl"
                                                        ></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mx-auto pt-4">
                                                <div class="container mx-auto">
                                                    <form
                                                        class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0"
                                                    >
                                                        <div
                                                            class="w-full flex flex-col mb-6"
                                                        >
                                                            <label
                                                                for="FirstName"
                                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100"
                                                                >First
                                                                Name</label
                                                            >
                                                            <input
                                                                tabindex="0"
                                                                type="text"
                                                                id="FirstName"
                                                                name="firstName"
                                                                required
                                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                                placeholder=""
                                                            />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="container mx-auto mt-10 rounded bg-gray-100 dark:bg-gray-700 w-11/12 xl:w-full"
                                        >
                                            <div class="xl:w-full py-5 px-8">
                                                <div
                                                    class="flex items-center mx-auto"
                                                >
                                                    <div
                                                        class="container mx-auto"
                                                    >
                                                        <div
                                                            class="mx-auto xl:w-full"
                                                        >
                                                            <p
                                                                class="text-lg text-gray-800 dark:text-gray-100 font-bold"
                                                            >
                                                                Alerts
                                                            </p>
                                                            <p
                                                                class="text-sm text-gray-600 dark:text-gray-400 pt-1"
                                                            >
                                                                Get updates of
                                                                any new activity
                                                                or features.
                                                                Turn on/off your
                                                                preferences
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container mx-auto pb-6">
                                                <div
                                                    class="flex items-center pb-4 border-b border-gray-300 dark:border-gray-700 px-8 text-gray-800 dark:text-gray-100"
                                                >
                                                    <img
                                                        class="dark:hidden"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg7.svg"
                                                        alt="mail"
                                                    />
                                                    <img
                                                        class="dark:block hidden"
                                                        src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg7dark.svg"
                                                        alt="mail"
                                                    />
                                                    <p
                                                        class="text-sm font-bold ml-2 text-gray-800 dark:text-gray-100"
                                                    >
                                                        Via Email
                                                    </p>
                                                </div>
                                                <div class="px-8">
                                                    <div
                                                        class="flex justify-between items-center mb-8 mt-4"
                                                    >
                                                        <div class="w-9/12">
                                                            <p
                                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                                            >
                                                                Comments
                                                            </p>
                                                            <p
                                                                id="cb1"
                                                                class="text-sm text-gray-600 dark:text-gray-400"
                                                            >
                                                                Get notified
                                                                when a post or
                                                                comment is made
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                                        >
                                                            <input
                                                                tabindex="0"
                                                                aria-labelledby="cb1"
                                                                type="checkbox"
                                                                name="email_comments"
                                                                id="toggle1"
                                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                                            />
                                                            <label
                                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                                            ></label>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center mb-8"
                                                    >
                                                        <div class="w-9/12">
                                                            <p
                                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                                            >
                                                                Job Applications
                                                            </p>
                                                            <p
                                                                id="cb2"
                                                                class="text-sm text-gray-600 dark:text-gray-400"
                                                            >
                                                                Get notified
                                                                when a candidate
                                                                applies to a job
                                                                posting
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                                        >
                                                            <input
                                                                aria-labelledby="cb2"
                                                                tabindex="0"
                                                                type="checkbox"
                                                                name="email_job_application"
                                                                id="toggle2"
                                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                                            />
                                                            <label
                                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                                            ></label>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center mb-8"
                                                    >
                                                        <div class="w-9/12">
                                                            <p
                                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                                            >
                                                                Product Updates
                                                            </p>
                                                            <p
                                                                id="cb3"
                                                                class="text-sm text-gray-600 dark:text-gray-400"
                                                            >
                                                                Get notifitied
                                                                when there is a
                                                                new product
                                                                feature or
                                                                upgrades
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                                        >
                                                            <input
                                                                aria-labelledby="cb3"
                                                                tabindex="0"
                                                                type="checkbox"
                                                                name="email_product_update"
                                                                id="toggle3"
                                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                                            />
                                                            <label
                                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                                            ></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="pb-4 border-b border-gray-300 dark:border-gray-700 px-8"
                                                >
                                                    <div
                                                        class="flex items-center text-gray-800 dark:text-gray-100"
                                                    >
                                                        <img
                                                            class="dark:hidden"
                                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg8.svg"
                                                            alt="notification"
                                                        />
                                                        <img
                                                            class="dark:hidden"
                                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_form-svg8dark.svg"
                                                            alt="notification"
                                                        />
                                                        <p
                                                            class="text-sm font-bold ml-2 text-gray-800 dark:text-gray-100"
                                                        >
                                                            Push Notifications
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="px-8">
                                                    <div
                                                        class="flex justify-between items-center mb-8 mt-4"
                                                    >
                                                        <div class="w-9/12">
                                                            <p
                                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                                            >
                                                                Comments
                                                            </p>
                                                            <p
                                                                id="cb4"
                                                                class="text-sm text-gray-600 dark:text-gray-400"
                                                            >
                                                                Get notified
                                                                when a post or
                                                                comment is made
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                                        >
                                                            <input
                                                                aria-labelledby="cb4"
                                                                tabindex="0"
                                                                type="checkbox"
                                                                name="notification_comment"
                                                                id="toggle4"
                                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                                            />
                                                            <label
                                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                                            ></label>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center mb-8"
                                                    >
                                                        <div class="w-9/12">
                                                            <p
                                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                                            >
                                                                Job Applications
                                                            </p>
                                                            <p
                                                                id="cb5"
                                                                class="text-sm text-gray-600 dark:text-gray-400"
                                                            >
                                                                Get notified
                                                                when a candidate
                                                                applies to a job
                                                                posting
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                                        >
                                                            <input
                                                                aria-labelledby="cb5"
                                                                tabindex="0"
                                                                type="checkbox"
                                                                name="notification_application"
                                                                id="toggle5"
                                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                                            />
                                                            <label
                                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                                            ></label>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex justify-between items-center mb-8"
                                                    >
                                                        <div class="w-9/12">
                                                            <p
                                                                class="text-sm text-gray-800 dark:text-gray-100 pb-1"
                                                            >
                                                                Product Updates
                                                            </p>
                                                            <p
                                                                id="cb6"
                                                                class="text-sm text-gray-600 dark:text-gray-400"
                                                            >
                                                                Get notifitied
                                                                when there is a
                                                                new product
                                                                feature or
                                                                upgrades
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="cursor-pointer rounded-full bg-gray-200 relative shadow-sm"
                                                        >
                                                            <input
                                                                aria-labelledby="cb6"
                                                                tabindex="0"
                                                                type="checkbox"
                                                                name="notification_updates"
                                                                id="toggle6"
                                                                class="focus:outline-none checkbox w-6 h-6 rounded-full bg-white dark:bg-gray-400 absolute shadow-sm appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"
                                                            />
                                                            <label
                                                                class="toggle-label block w-12 h-4 overflow-hidden rounded-full bg-gray-300 dark:bg-gray-800 cursor-pointer"
                                                            ></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="container mx-auto w-11/12 xl:w-full"
                                        >
                                            <div
                                                class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end"
                                            >
                                                <button
                                                    role="button"
                                                    aria-label="cancel form"
                                                    class="bg-gray-200 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 dark:bg-gray-700 rounded text-indigo-600 dark:text-indigo-600 px-6 py-2 text-xs mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700"
                                                >
                                                    Cancel
                                                </button>
                                                <button
                                                    role="button"
                                                    aria-label="Save form"
                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                                                    type="submit"
                                                >
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </header>
                    </div>
                </main>

                <footer class="flex justify-around mt-10">
                    <a
                        href="#"
                        class="inline-flex items-center py-4 px-6 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                        Previous
                    </a>

                    <a
                        href="#"
                        class="inline-flex items-center py-4 px-6 ml-3 text-sm font-medium text-white bg-indigo-600 rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    >
                        Next
                    </a>
                </footer>
            </div>

            <MainFooter />

            <div
                v-if="modal"
                id="defaultModal"
                tabindex="-1"
                aria-hidden="true"
                class="overflow-y-auto overflow-x-hidden fixed justify-center mx-auto sm:flex flex items-center z-50 w-full md:inset-0 h-modal md:h-full"
            >
                <div class="relative p-4 w-full max-w-5xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div
                        class="relative bg-gray-50 rounded-lg shadow-2xl dark:bg-gray-700"
                    >
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600"
                        >
                            <h3
                                class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white"
                            >
                                Tender Search Filters
                            </h3>
                            <button
                                @click="modal = false"
                                type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="defaultModal"
                            >
                                <svg
                                    class="w-5 h-5"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-2 space-y-6">
                            <section
                                class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800"
                            >
                                <form>
                                    <div
                                        class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2"
                                    >
                                        <div>
                                            <label
                                                class="text-gray-700 dark:text-gray-200"
                                                for="username"
                                                >Search Keyword</label
                                            >
                                            <input
                                                id="username"
                                                type="text"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                            />
                                        </div>

                                        <div>
                                            <label
                                                class="text-gray-700 dark:text-gray-200"
                                                for="emailAddress"
                                                >Within Search Keyword</label
                                            >
                                            <input
                                                id="emailAddress"
                                                type="text"
                                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                            />
                                        </div>
                                    </div>
                                </form>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Tender Notice No.</label
                                        >
                                        <input
                                            id="username"
                                            type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>

                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="emailAddress"
                                            >Bid Detail Ref No.</label
                                        >
                                        <input
                                            id="emailAddress"
                                            type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>

                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="password"
                                            >Funding</label
                                        >
                                        <input
                                            id="password"
                                            type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>

                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="passwordConfirmation"
                                            >Tender Value</label
                                        >
                                        <select
                                            id="country"
                                            name="country"
                                            autocomplete="country-name"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-1"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Region / Country</label
                                        >
                                        <input
                                            id="username"
                                            type="text"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        />
                                    </div>
                                </div>

                                <div
                                    class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2"
                                >
                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="username"
                                            >Closing Date</label
                                        >
                                        <select
                                            id="country"
                                            name="country"
                                            autocomplete="country-name"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="emailAddress"
                                            >Sector Classification</label
                                        >
                                        <select
                                            id="country"
                                            name="country"
                                            autocomplete="country-name"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="password"
                                            >Funded</label
                                        >
                                        <select
                                            id="country"
                                            name="country"
                                            autocomplete="country-name"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label
                                            class="text-gray-700 dark:text-gray-200"
                                            for="passwordConfirmation"
                                            >Tender Type</label
                                        >
                                        <select
                                            id="country"
                                            name="country"
                                            autocomplete="country-name"
                                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"
                                        >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600"
                        >
                            <button
                                @click="loadFilters"
                                data-modal-toggle="defaultModal"
                                type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Find Tenders
                            </button>
                            <button
                                @click="clearFilters"
                                data-modal-toggle="defaultModal"
                                type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            >
                                Clear Filters
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
</template>

<script>
import TopBanner from "./Components/TopBanner.vue";
import MainMenu from "./Components/MainMenu.vue";
import MainFooter from "./Components/MainFooter.vue";

import Vue from "vue";
import Vue2Filters from "vue2-filters";
Vue.use(Vue2Filters);

export default {
    name: "Landing",
    mixins: [Vue2Filters.mixin],
    props: {
        Posts: ""
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
            modal: false,
            formatedDate: ""
        };
    },
    methods: {
        dateChangeFormat(value) {
            const togo = moment(value).fromNow(true);
            if (togo == "Invalid date") {
                return true;
            } else {
                return false;
            }
        },
        togoFormat(value) {
            var length = 10;
            var myString = value;
            var myTruncatedString = myString.substring(0, length);

            var str = myTruncatedString;
            var daycut = str.substring(0, 2);
            var monthcut = str.substring(5, 3);

            String.prototype.replaceAt = function(index, replacement) {
                return (
                    this.substring(0, index) +
                    replacement +
                    this.substring(index + replacement.length)
                );
            };
            const changeDay = myTruncatedString.replaceAt(0, monthcut);
            const finalDate = changeDay.replaceAt(3, daycut);
            this.formatedDate = finalDate;

            return moment(finalDate).fromNow(true);
        },
        expired(post) {
            var current = moment().startOf("day");
            var given = moment(post.expiry, "YYYY-MM-DD");
            var diff = moment.duration(given.diff(current)).asDays();

            if (diff < 0) {
                return true;
            } else {
                return false;
            }
        },
        dateFormat(value) {
            var length = 10;
            var myString = value;
            var myTruncatedString = myString.substring(0, length);

            console.log(myTruncatedString);
            var str = myTruncatedString;
            var daycut = str.substring(0, 2);
            var monthcut = str.substring(5, 3);

            String.prototype.replaceAt = function(index, replacement) {
                return (
                    this.substring(0, index) +
                    replacement +
                    this.substring(index + replacement.length)
                );
            };
            const changeDay = myTruncatedString.replaceAt(0, monthcut);
            const finalDate = changeDay.replaceAt(3, daycut);
            this.formatedDate = finalDate;

            return dateFormat(finalDate, "mmmm dS yyyy");
        },
        formatDate(value) {
            return moment(value).format("MMMM Do YYYY");
        },
        togo(value) {
            return moment(value).fromNow();
        },
        ago(value) {
            return moment(value).fromNow();
        },
        clearFilters() {},
        loadFilters() {}
    }
};
</script>

<style scoped></style>
